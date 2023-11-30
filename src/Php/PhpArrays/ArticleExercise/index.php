<?php

use Class\Arrays\Article\ExerciseManager;

require 'autoload.php';

//We should use the true parameter to inform that the data is associative, otherwise, it'll return the association as a stdClass, which is a generic empty class 
$jsonData = file_get_contents('medals.json');
$data = json_decode($jsonData, true);

$manager = new ExerciseManager($data);

//Objectives:
//1- List the number of participating countries
//2- Make their names capitalized (alter the original array)
//3- Order by: (A) country with the most gold medals, (B) In case of a tie, for the country with the most silver medals or (C) bronze medals
//4 - List the number of medals distributed in the competition
//5 - Countries that has no blank space in its name

echo "O número de países participantes é {$manager->getNumberOfCountries()}!" . PHP_EOL;

$manager->modifyNames();

$manager->orderByMedals();

$manager->listOfMedals();

$manager->filterCountryNames();

