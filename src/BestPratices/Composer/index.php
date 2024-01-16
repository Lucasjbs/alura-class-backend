<?php

require '../../../vendor/autoload.php';

use GuzzleHttp\Client;
use Lucasjb\AluraClassBackend\BestPratices\Composer\CourseSeeker;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$seeker = new CourseSeeker($client, $crawler);
$courses = $seeker->search('/cursos-online-programacao/php');

foreach ($courses as $course) {
    echo printMsg($course);
}