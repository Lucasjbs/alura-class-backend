<?php

namespace Lucasjb\AluraClassBackend\BestPratices\Solid\Service;

use Lucasjb\AluraClassBackend\BestPratices\Solid\Model\Scorable;

// This class is coupled to the model classes
class ScoreCalculator
{
    public function getScore(Scorable $conteudo)
    {
        // Instead of having the scores centralized here, they were delegated to all Scorable Classes
        return $conteudo->getScore();
    }
}
