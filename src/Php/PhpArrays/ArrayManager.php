<?php

namespace Class\Arrays;

class ArrayManager
{
    private array $arrayData;

    public function __construct(array $arrayData)
    {
        $this->arrayData = $arrayData;
    }

    public function getArray(): array
    {
        return $this->arrayData;
    }

    public function getDiff(array $arrayCompare): array
    {
        return array_diff($this->arrayData, $arrayCompare);
    }

    //The function 'array_keys()' returns only the keys of the selected array.
    public function getKeysOnly(): array
    {
        return array_keys($this->arrayData);
    }

    //The function 'array_merge()' will append the second array at the end of the first one.
    public function getMerge(array $arrayCompare): array
    {
        return array_merge($this->arrayData, $arrayCompare);
    }

    public function echoListedVariables(string $student, float $score): void
    {
        echo (PHP_EOL);
        echo ("Atribuições por Lista:" . PHP_EOL);
        $array = [$student, $score];
        [$arrayName, $arrayScore] = $array;
        echo ("O nome e nota do estudante: $arrayName - $arrayScore:" . PHP_EOL);

        $data = [$student => $score, 'exemplo' => 0.9];
        [$student => $getStudentScore, 'exemplo' => $getExemploScore] = $data;

        echo ("Notas em sequencia: $getStudentScore, $getExemploScore:" . PHP_EOL);

    }

    //We can use the Unpacking Operator to unpack an array, basically removing the brackets from it.
    public function unpackingOperation(string $key, float $value, int $positionToInsert) : array 
    {
        $half1 = array_slice($this->arrayData, 0, $positionToInsert, true);
        $half2 = array_slice($this->arrayData, $positionToInsert, null, true);

        return [...$half1, ...[$key => $value], ...$half2];
    }

    //Spread Operator is used in function parameters
    public function spreadOperatorExample(float ...$array) : array 
    {
        return $array;
    }
}