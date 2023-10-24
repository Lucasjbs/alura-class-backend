<?php

namespace Class\Bank\Model;

interface TokenInterface
{
    public function generateToken(): string;
    public function getToken(): string;
}