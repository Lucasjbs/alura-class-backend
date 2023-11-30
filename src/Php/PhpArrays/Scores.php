<?php

namespace Class\Arrays;

class Scores
{
    private array $scores;

    public function __construct(array $scores = null)
    {
        $this->scores = $scores;
    }

    public function getScores(): array
    {
        return $this->scores;
    }

    public function getScoresByAscendingOrder(): array
    {
        //sort does not return a copy of the sorted array, it will sort the original values using its reference.
        $array = $this->scores;
        sort($array);
        return $array;
    }

    public function getScoresByDescendingOrder(): array
    {
        $array = $this->scores;
        rsort($array);
        return $array;
    }

    public function getScoresByUserSorting(): array
    {
        $array = $this->scores;
        //To use usort(), we have to create a callback function that will recieve 2 arrays to compare, and return 1, 0 ,-1 to determine if the comparisson is higher, equal or lower
        usort($array, function (array $data1, array $data2) {
            //If -1, the first value is higher, if +1, the second value is higher. If equal, return 0
            
            // if ($data1['score'] > $data2['score']) return -1;
            // if ($data1['score'] < $data2['score']) return 1;
            // return 0;

            //Spaceship Operator:
            return $data1['score'] <=> $data2['score'];
        });
        return $array;
    }

    public function getScoresDescendingOrderAssociativeSorting(): array
    {
        $array = $this->scores;
        arsort($array);
        return $array;
    }

    public function getScoresByAssociativeSorting(): array
    {
        $array = $this->scores;
        asort($array);
        return $array;
    }

    public function getScoresByAssociativeSortingByKeys(): array
    {
        $array = $this->scores;
        ksort($array);
        return $array;
    }
}
