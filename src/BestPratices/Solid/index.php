<?php

use Lucasjb\AluraClassBackend\BestPratices\Solid\Model\Course;
use Lucasjb\AluraClassBackend\BestPratices\Solid\Service\ScoreCalculator;

require '../../../vendor/autoload.php';

$course = new Course("Curso");

$scoreCalc = new ScoreCalculator;
echo $scoreCalc->getScore($course);
