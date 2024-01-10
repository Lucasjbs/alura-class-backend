<?php

namespace Class\Streams\Model;

class FileReader
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function openCoursesListWithFileOpen(): array
    {
        //Open a file or URL. First parameter is the file path, and second parameter is mode.
        $file = fopen('./data/lista-cursos.txt', 'r');

        echo ("\n1) Lista de cursos abertos por FOPEN: \n");
        //feof: Identify if a pointer is at the end of a file
        while (!feof($file)) {
            //Get a string line from a file. It stops reading when he finds a line break, and the pointer will be repositioned to the next line.
            $line = fgets($file);
            $course[] = $line;
            echo ("$line");
        }
        echo ("\n");
        fclose($file);
        return $course;
    }

    public function openCoursesListWithFileRead(): string
    {
        $file = fopen('./data/lista-cursos.txt', 'r');

        //Gets the size of the file in bytes
        $fileSize = filesize('./data/lista-cursos.txt');
        //Reads the file contents. The length number of bytes that will be read needs to be defined.
        $courses = fread($file, $fileSize);
        
        echo ("\n2) Lista de cursos abertos por FREAD: \n");
        echo($courses . PHP_EOL);
        fclose($file);
        return $courses;
    }

    public function openCoursesListWithFileGetContents(): string
    {
        // Does everything described in the method openCoursesListWithFileRead()
        $courses = file_get_contents('./data/lista-cursos.txt');

        echo ("\n3) Lista de cursos abertos por FILE GET CONTENTS: \n");
        echo($courses . PHP_EOL);
        return $courses;
    }

    public function openCoursesListWithFile(): array
    {
        // Does everything that file get contents do, but returns an array
        $courses = file('./data/lista-cursos.txt');

        echo ("\n4) Lista de cursos abertos por FILE: \n");
        foreach ($courses as $key => $value) {
            echo ("$value");
        }

        return $courses;
    }
}
