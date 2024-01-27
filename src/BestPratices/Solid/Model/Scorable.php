<?php

namespace Lucasjb\AluraClassBackend\BestPratices\Solid\Model;

interface Scorable
{
    public function getScore(): int;
}