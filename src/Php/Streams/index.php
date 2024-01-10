<?php

use Class\Streams\Model\FileObjectManager;
use Class\Streams\Model\FileReader;
use Class\Streams\Model\FileWriter;
use Class\Streams\Model\FilterManager;
use Class\Streams\Model\StreamManager;

require 'autoload.php';

// Reading Files
if (false) {
$fileReader = new FileReader();

$coursesList = $fileReader->openCoursesListWithFileOpen();
$coursesList = $fileReader->openCoursesListWithFileRead();
$coursesList = $fileReader->openCoursesListWithFileGetContents();
$coursesList = $fileReader->openCoursesListWithFile();
}

// Writing Files
if (false) {
    $fileWriter = new FileWriter();
    $fileWriter->createFile();
    $fileWriter->appendFile();
    $fileWriter->createFileWithFilePut();

}

// Wrappers and Filters
if (false) {
    $streamManager = new StreamManager();
    $streamManager->openAPIStream();
    $streamManager->openFileFromZip();

    $filterManager = new FilterManager();
    $filterManager->basicStreamFilter();
    $filterManager->customStreamFilter();
}

// Keyboard Reading
if (false) {
    $keyboardStreamManager = new StreamManager();
    $keyboardStreamManager->keyboardFileContents();
}

// Context
if (false) {
    $contextStreamManager = new StreamManager();
    $contextStreamManager->getStreamWithContext();
    $contextStreamManager->openZipFileWithContext();
}

// File Objects
if (true) {
    $fileObjectManager = new FileObjectManager();
    $fileObjectManager->csvFileManagement(new FileWriter());
    $fileObjectManager->customCommandLS();
    $fileObjectManager->splFileManagement();
}





