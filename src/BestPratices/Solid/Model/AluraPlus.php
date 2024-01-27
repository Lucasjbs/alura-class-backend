<?php

namespace Lucasjb\AluraClassBackend\BestPratices\Solid\Model;

// Alura Plus is a video with a category
class AluraPlus extends Video implements Scorable
{
    private $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        // It is expected that getUrl returns the whole URL, thats why "http://videos..." needs to be concatenated.
        return 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->category));
    }

    public function getScore(): int
    {
        return 100;
    }
}