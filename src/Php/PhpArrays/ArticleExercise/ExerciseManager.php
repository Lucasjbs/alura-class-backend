<?php

namespace Class\Arrays\Article;

class ExerciseManager
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

    //1- List the number of participating countries
    public function getNumberOfCountries(): int
    {
        return count($this->arrayData);
    }

    //2- Make their names capitalized
    public function modifyNames(): void
    {
        $this->arrayData = array_map(function ($item) {
            $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
            return $item;
        }, $this->arrayData);

        $names = [];
        foreach ($this->arrayData as $value) {
            $names[] = $value['pais'];
        }
        echo "Os países participantes são: {$names[0]}, {$names[1]}, {$names[2]} e {$names[3]}!" . PHP_EOL;
    }

    //3- Order by medals:
    public function orderByMedals(): void
    {
        //Works as long as the values returned are positive or negative (no need for +1 and -1)
        usort($this->arrayData, function ($item1, $item2) {
            $medal1 = $item1['medalhas'];
            $medal2 = $item2['medalhas'];

            return $medal2['ouro'] - $medal1['ouro'] !== 0
                ? $medal2['ouro'] - $medal1['ouro']
                : ($medal2['prata'] - $medal1['prata'] !== 0
                    ? $medal2['prata'] - $medal1['prata']
                    : $medal2['bronze'] - $medal1['bronze']);
        });

        echo "\nOrdem dos países por medalha: " . PHP_EOL;
        foreach ($this->arrayData as $value) {
            $ouro = $value['medalhas']['ouro'];
            $prata = $value['medalhas']['prata'];
            $bronze = $value['medalhas']['bronze'];
            echo "{$value['pais']} - \tOuro: $ouro, Prata: $prata, Bronze: $bronze." . PHP_EOL;
        }
    }

    //4 - List the number of medals distributed in the competition
    public function listOfMedals(): void
    {
        $initialValue = 0;
        $sumMedals = array_reduce($this->arrayData, function ($totalMedals, $dataValue) {
            $totalMedalsByCountry = array_reduce($dataValue['medalhas'], function ($totalMedalsByCountry, $arrayMedals) {
                return $totalMedalsByCountry + $arrayMedals;
            }, 0);
            return $totalMedals + $totalMedalsByCountry;
        }, $initialValue);

        echo "\nForam distribuídas $sumMedals medalhas na competição." . PHP_EOL;
    }

    //5 - Countries that has no blank space in its name
    public function filterCountryNames(): void
    {
        $countryNames = array_filter($this->arrayData, function ($item) {
            //strpos returns the position of a char, or false if it doesn't find anything
            return strpos($item['pais'], ' ') === false;
        });
        //array_column is extremely useful for these situations
        $countryNames = array_column($countryNames, 'pais');

        echo "\nO único país com nome sem espaço é o {$countryNames[0]}." . PHP_EOL;
    }
}
