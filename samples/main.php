<?php
/*
 * (c) Copyright Ascensio System SIA 2026
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\Authentication\AuthenticationApi;
use OpenAPI\Client\Api\Files\FoldersApi;
use OpenAPI\Client\Api\Rooms\RoomsApi;
use OpenAPI\Client\Api\Backup\BackupApi;
use OpenAPI\Client\Model\AuthRequestsDto;
use OpenAPI\Client\Model\CreateFolder;
use OpenAPI\Client\Model\DeleteFolder;
use OpenAPI\Client\Model\BackupDto;
use OpenAPI\Client\Model\BackupStorageType;
use OpenAPI\Client\Model\SearchArea;
use OpenAPI\Client\Model\SortOrder;

function main(): void
{
    // --- CONFIG ---
    $config = Configuration::getDefaultConfiguration();
    $config->setHost("https://your-docspace.onlyoffice.com");

    // --- AUTH ---
    $authApi = new AuthenticationApi(null, $config);

    $authDto = new AuthRequestsDto();
    $authDto->setUserName("example@onlyoffice.com");
    $authDto->setPassword("11111111");

    $authResponse = $authApi->authenticateMe($authDto);
    $token = $authResponse->getResponse()->getToken();

    $config->setAccessToken($token);

    // --- FOLDERS ---
    $foldersApi = new FoldersApi(null, $config);

    $myFolder = $foldersApi->getMyFolder(count: 100, start_index: 0);
    $myFolderId = $myFolder->getResponse()->getCurrent()->getId();
    echo "My folder id: " . $myFolderId . PHP_EOL;

    $createDto = new CreateFolder();
    $createDto->setTitle("TestTitle");

    $created = $foldersApi->createFolder($myFolderId, $createDto);
    $newFolderId = $created->getResponse()->getId();
    echo "Created folder: " . $newFolderId . PHP_EOL;

    $renameDto = new CreateFolder();
    $renameDto->setTitle("Updated title");

    $renamed = $foldersApi->renameFolder($newFolderId, $renameDto);
    echo "My folder title: " . $renamed->getResponse()->getTitle() . PHP_EOL;

    $deleteDto = new DeleteFolder();
    $deleteDto->setImmediately(true);
    $deleteDto->setDeleteAfter(false);

    $deleted = $foldersApi->deleteFolder($newFolderId, $deleteDto);
    echo "Folder deleted status: " . $deleted->getStatusCode() . PHP_EOL;

    // --- ROOMS ---
    $roomsApi = new RoomsApi(null, $config);

    $rooms = $roomsApi
        ->withFields("current.security,folders.id")
        ->getRoomsFolder(
            type: [],
            search_area: SearchArea::ACTIVE,
            count: 100,
            start_index: 0,
            sort_by: "DateAndTime",
            sort_order: SortOrder::DESCENDING
        );

    echo "Rooms status: " . $rooms->getStatusCode() . PHP_EOL;

    // --- BACKUP ---
    $backupApi = new BackupApi(null, $config);

    $backupDto = new BackupDto();
    $backupDto->setDump(false);
    $backupDto->setStorageType(BackupStorageType::DATA_STORE);

    $backupApi->startBackup($backupDto);
    echo "Backup started" . PHP_EOL;

    while (true) {
        $progress = $backupApi->getBackupProgress();
        if ($progress->getResponse()->getIsCompleted()) {
            echo "Backup completed" . PHP_EOL;
            break;
        }
        sleep(1);
    }
}

main();
