<?php

namespace Lucasjb\AluraClassBackend\BestPratices\Solid\Model;

use DomainException;

class Feedback
{
    private int $score;
    private ?string $description;

    public function __construct(int $score, ?string $description)
    {
        if ($score < 9 && empty($description)) {
            throw new DomainException('Depoimento obrigatório');
        }

        $this->score = $score;
        $this->description = $description;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}