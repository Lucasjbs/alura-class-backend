<?php

spl_autoload_register(function (string $nomeClasse){
    $filePath = str_replace('Class\\Arrays\\Article', __DIR__, $nomeClasse);
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $filePath .= '.php';
    
    if(file_exists($filePath)){
        require_once $filePath;
    }
});