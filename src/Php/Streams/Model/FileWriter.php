<?php

namespace Class\Streams\Model;

class FileWriter
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function createFile(): void
    {
        //To write a new file, you'll need to open it with fopen on write mode ('w').
        $file = fopen('./data/novos-cursos.txt', 'w');

        $courseContents = 'Design Patterns I em PHP';

        //Write a new file with the contents provided. In this case, the write mode will start the pointer in the beginning of the file
        fwrite($file, $courseContents);

        fclose($file);
    }

    public function appendFile(): void
    {
        //To start the pointer at the end of the file and add more content, use the append mode 'a'.
        $file = fopen('./data/novos-cursos.txt', 'a');

        $courseContents = "\nDesign Patterns II em PHP";

        fwrite($file, $courseContents);

        fclose($file);
    }

    public function createFileWithFilePut(): void
    {
        $courseContents = 'Design Patterns I em PHP';
        $courseContentsAppend = "\nDesign Patterns II em PHP";

        // Does everything described in the method createFile()
        file_put_contents('./data/novos-cursos-com-fpc.txt', $courseContents);
        // Does everything described in the method appendFile()
        file_put_contents('./data/novos-cursos-com-fpc.txt', $courseContentsAppend, FILE_APPEND);
    }
}