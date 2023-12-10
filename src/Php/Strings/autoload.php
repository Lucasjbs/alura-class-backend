<?php

spl_autoload_register(function ($classe) {

    $prefixo = "App\\Alura";

    $diretorio = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

    //Returns zero if the two strings are equal.
    //The lenght parameter will determine the number of characters to use in the comparison, starting from zero.
    if (strncmp($prefixo, $classe, strlen($prefixo)) !== 0) {
        return;
    }

    $namespace = substr($classe, strlen($prefixo));

    //Replace all occurrences of the search string with the replacement string.
    $namespace_arquivo = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

    $arquivo = $diretorio . $namespace_arquivo . '.php';

    if (file_exists($arquivo)) {
        require $arquivo;
    }
});
