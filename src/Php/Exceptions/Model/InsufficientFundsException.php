<?php

namespace Class\Exceptions\Model;

use Exception;

// Creating a new custom exception
class InsufficientFundsException extends Exception
{
    public function __construct(float $withdraw, float $funds)
    {
        // Rewriting the message inside the Exception
        $message = "Voce tentou sacar $withdraw mas possui apenas $funds.";
        parent::__construct($message, 0);
    }
}