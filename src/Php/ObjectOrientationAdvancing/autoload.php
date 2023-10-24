<?php

spl_autoload_register(function (string $nomeClasse){
    $filePath = str_replace('Class\\Bank', '.', $nomeClasse);
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $filePath .= '.php';
    
    if(file_exists($filePath)){
        require_once $filePath;
    }
    
    // echo $filePath;
    // exit();
});