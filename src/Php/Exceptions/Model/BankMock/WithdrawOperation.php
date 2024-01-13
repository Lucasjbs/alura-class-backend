<?php

namespace Class\Exceptions\Model\BankMock;

use Class\Exceptions\Model\InsufficientFundsException;
use InvalidArgumentException;

class WithdrawOperation
{
    private float $funds;

    public function __construct(float $funds = 0)
    {
        $this->funds = $funds;
    }

    public function withdrawFunds(float $value): float
    {
        if ($this->funds - $value < 0) {
            throw new InsufficientFundsException($value, $this->funds);
        }

        $this->funds = $this->funds - $value;
        return $value;
    }

    //There's no need to use custom exceptions all the time, the exceptions provided by SPL already cover a variety of situations
    public function depositFunds(float $depositValue): void
    {
        if ($depositValue < 0) {
            throw new InvalidArgumentException();
        }

        $this->funds = $this->funds + $depositValue;
    }
}
