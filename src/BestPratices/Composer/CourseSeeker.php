<?php

namespace Lucasjb\AluraClassBackend\BestPratices\Composer;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class CourseSeeker
{
    private ClientInterface $httpClient;
    private Crawler $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function search(string $url): array
    {
        $response = $this->httpClient->request('GET', $url);

        $html = $response->getBody();
        $this->crawler->addHtmlContent($html);

        $courseElements = $this->crawler->filter('span.card-curso__nome');
        $course = [];

        foreach ($courseElements as $element) {
            $course[] = $element->textContent;
        }

        return $course;
    }
}