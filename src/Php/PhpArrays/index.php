<?php

use Class\Arrays\Scores;
use Class\Arrays\ArrayOpts;
use Class\Arrays\ArrayManager;

require 'autoload.php';

$arrayOptions = new ArrayOpts();

$dataArray = [9.3, 9.7, 6.9, 7.2, 8.1, 7.2];
$scores = new Scores($dataArray);
printArrays("Lista de dados do Array", $scores->getScores());
printArrays("Array ordenado em ordem crescente", $scores->getScoresByAscendingOrder());
printArrays("Array ordenado em ordem decrescente", $scores->getScoresByDescendingOrder());

$doubleArrayData = $arrayOptions->getDoubleDataArray();
$doubleArrayScores = new Scores($doubleArrayData);
printDoubleArrays("Lista de dados do array duplo", $doubleArrayScores->getScores());
printDoubleArrays("Lista de dados do array duplo ordenado", $doubleArrayScores->getScoresByUserSorting());

$assocData = $arrayOptions->getAssocDataArray();
$assocScores = new Scores($assocData);
printArrays("Lista de dados do array associativo", $assocScores->getScores());
printArrays("Lista de dados do array associativo ordenado", $assocScores->getScoresByAssociativeSorting());
printArrays("Lista de dados do array associativo ordenado por chaves", $assocScores->getScoresByAssociativeSortingByKeys());



//'array_key_exists()' checks if the array key exists. 'isset()' check if if the array key exists AND is not null
echo (PHP_EOL);
echo ("O aluno 'Gester' realmente existe?" . PHP_EOL);
$gesterExists = array_key_exists('Gester', $assocScores->getScores());
if($gesterExists) echo ("O aluno 'Gester' existe" . PHP_EOL);
$gesterIsset = isset($assocScores->getScores()['Gester']);
if($gesterIsset) echo ("E o aluno 'Gester' tem valor" . PHP_EOL);
else echo ("Mas o aluno 'Gester' não tem nenhum valor (é nulo)" . PHP_EOL);

//'in_array()' checks if the array value exists, no matter which key
echo (PHP_EOL);
echo ("Algum aluno tirou a nota 9.3?" . PHP_EOL);
$isValueInArray = in_array(9.3, $assocScores->getScores());
if($isValueInArray) echo ("Sim! Algum aluno tirou 9.3!" . PHP_EOL);

//'array_search()' can be used to get the key that contains a certain value
$keyByValue = array_search(9.3, $assocScores->getScores());
echo ("Mas quem tirou essa nota? Quem tirou essa nota foi $keyByValue!" . PHP_EOL);
$keyByValueReturnsFalse = array_search(9.9, $assocScores->getScores());
echo ("É verdade que alguém tirou 9.9?" . PHP_EOL);
if($keyByValueReturnsFalse) echo ("Sim, é verdade!" . PHP_EOL);
else echo ("Não, ninguém tirou 9.9!" . PHP_EOL);



//Manipulação
echo (PHP_EOL);
echo ("******Manipulação de Arrays******" . PHP_EOL);
$manager = new ArrayManager($arrayOptions->getAssocDataArray());
$arrayDiff = $manager->getDiff($arrayOptions->getAssocDataArrayForDifference());
printArrays("Valores do array original que não existem na comparacao", $arrayDiff);
printArrays("Chaves do array original (com as posicoes)", $manager->getKeysOnly());
printArrays("Fusao dos arrays", $manager->getMerge($arrayOptions->getAssocDataArrayForMerge()));

$mergedScores = new Scores($manager->getMerge($arrayOptions->getAssocDataArrayForMerge()));
$mergedOrderedByScore = new ArrayManager($mergedScores->getScoresDescendingOrderAssociativeSorting());
printArrays("Inserindo novo aluno no meio do array", $mergedOrderedByScore->unpackingOperation('Paul', 5.4, 5));
printArrays("Exemplo do Spread Operator", $mergedOrderedByScore->spreadOperatorExample(1, 2.3, 4.1));

$mergedOrderedByScore->echoListedVariables('Zeon', 10.0);


function printArrays(string $prompt, array $data): void
{
    echo ("\n$prompt:\n");
    foreach ($data as $key => $value) {
        echo ("[$key] = $value" . PHP_EOL);
    }
}

function printDoubleArrays(string $prompt, array $data): void
{
    echo ("\n$prompt:\n");
    foreach ($data as $value) {
        foreach ($value as $assocKey => $assocValue) {
            echo ("[$assocKey] = $assocValue\t");
        }
        echo PHP_EOL;
    }
}

