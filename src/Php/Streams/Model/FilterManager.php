<?php

namespace Class\Streams\Model;

class FilterManager
{
    private CustomStreamFilter $customFilter;

    public function basicStreamFilter(): void
    {
        $file = fopen('./data/lista-cursos.txt', 'r');

        stream_filter_append($file, "string.toupper");

        echo ("\nLista de cursos com STREAM FILTER TOUPPER: \n");
        $courses = fread($file, filesize('./data/lista-cursos.txt'));
        echo ($courses . PHP_EOL);
    }

    //Our goal is to filter all lines that contains the word 'PARTE'
    public function customStreamFilter(): void
    {
        $file = fopen('./data/lista-cursos.txt', 'r');

        stream_filter_register('filtrar.partes', CustomStreamFilter::class);
        stream_filter_append($file, 'filtrar.partes');

        echo ("\nLista de cursos com STREAM FILTER REGISTER: \n");
        $courses = fread($file, filesize('./data/lista-cursos.txt'));
        echo ($courses . PHP_EOL);
    }
}
