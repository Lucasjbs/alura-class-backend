<?php

namespace Class\Streams\Model;

use DateTime;
use SplFileObject;

class FileObjectManager
{
    public function csvFileManagement(FileWriter $fileWriter): void
    {
        $fileWriter->createFile();
        $fileWriter->appendFile();
        $coursesList = file('./data/lista-cursos.txt');
        $otherCourses = file('./data/novos-cursos.txt');

        $newCsvFile = fopen('./data/cursos.csv', 'w');

        foreach ($coursesList as $curso) {
            $linha = [trim($curso), 'Sim'];
            fputcsv($newCsvFile, $linha, ';');
        }

        foreach ($otherCourses as $curso) {
            $linha = [trim($curso), 'Não'];
            fputcsv($newCsvFile, $linha, ';');
        }

        fclose($newCsvFile);

        $csvFile = fopen('./data/cursos.csv', 'r');
        $lineContent = fgetcsv($csvFile);
        fclose($csvFile);

        echo ("\nPrimeira linha do arquivo CSV: \n");
        echo ($lineContent[0] . PHP_EOL);
    }

    public function customCommandLS(): void
    {
        //The object Directory is instanced with the function 'dir()' instead of new.
        $currentDirectory = dir('./data/');

        echo ("\nLista de diretórios em $currentDirectory->path: \n");

        //The function 'read()' will return an entry from directory, then move the pointer to the next entry.
        while ($file = $currentDirectory->read()) {
            echo $file . PHP_EOL;
        }
    }

    public function splFileManagement(): void
    {
        // Instead of using fopen, let's use SplFileObject to read it.
        // SplFileObject is defined as READ by default, unless another $mode is specified
        $csvCoursesFile = new SplFileObject('./data/cursos.csv');

        echo ("\nCounteudo de cursos.csv: \n");

        while (!$csvCoursesFile->eof()) {
            $linha = $csvCoursesFile->fgetcsv(';');
            echo $linha[0] . PHP_EOL;
        }
        $date = new DateTime();

        // SplFileObject offers many features, such as reading the last change date with 'getCTime()'
        $date->setTimestamp($csvCoursesFile->getCTime());
        echo ("\nUltima atualização do arquivo: \n");
        echo $date->format('d/m/Y') . PHP_EOL;
    }
}
