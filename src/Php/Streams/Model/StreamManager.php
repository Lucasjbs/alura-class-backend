<?php

namespace Class\Streams\Model;

class StreamManager
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function openAPIStream(): void
    {
        //Functions such as 'file_get_contents()' can be used for files as well as for streams.
        $stream = file_get_contents('https://swapi.dev/api/films/4/');

        echo ("\nTexto de HTTP: \n");
        echo (substr($stream, 0, 360) . "\n...\n............" . PHP_EOL);
    }

    public function openFileFromZip(): void
    {
        // Zip folders can be opened with zip wrapper
        $content = file_get_contents('zip://./data/arquivo.zip#lista-cursos.txt');

        echo ("\nLista de cursos abertos dentro de um ZIP: \n");
        echo ($content . PHP_EOL);
    }

    public function keyboardFileContents(): void
    {
        $courseContents = 'Design Patterns I em PHP';
        file_put_contents('./data/cursos-php.txt', $courseContents);

        echo ("Digite um novo texto: \n");
        //STDIN is a constant that contains 'fopen(filename: ‘php://stdin’);'
        //'fgets' gets one line from the resource, then puts the pointer on the next line.
        $keyboardData = fgets(STDIN);
        file_put_contents('./data/cursos-php.txt', "\n$keyboardData", FILE_APPEND);

        echo ("\nLinha adicionada ao arquivo cursos-php.txt \nConteúdo do arquivo: \n");

        $content = fopen('./data/cursos-php.txt', 'r');
        stream_copy_to_stream($content, STDOUT);
        echo (PHP_EOL);
    }

    public function getStreamWithContext(): void
    {
        $content = file_get_contents('https://httpbin.org/get');

        echo ("\nRequisição GET para HTTPBIN sem contexto: \n");
        echo ($content . PHP_EOL);

        // Create a stream context that can be added to requests such as 'file_get_contents()'
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "X-From: PHP\r\nContent-Type: text/plain",
                'content' => 'Teste do corpo',
            ]
        ]);
        $content =  file_get_contents('http://httpbin.org/post', false, $context);

        echo ("\nRequisição POST para HTTPBIN com contexto: \n");
        echo ($content . PHP_EOL);
    }

    public function openZipFileWithContext(): void
    {
        //Every protocol has its own specific set of contexts.
        $context = stream_context_create([
            'zip' => [
                'password' => '1234'
            ]
        ]);
        $fileContent = file_get_contents(
            'zip://./data/arquivoProtegido.zip#lista-cursos.txt',
            false,
            $context
        );

        echo ("Lista de cursos abertos dentro de um ZIP PROTEGIDO: \n");
        echo ($fileContent . PHP_EOL);
    }
}
