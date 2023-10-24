<?php

namespace Class\Bank\Model\BankAccount;

use Class\Bank\Model\Person;

class BankStudent extends Account
{
    private string $class;

    public function __construct(Person $person, string $type, string $class) {
        parent::__construct($person, $type);
        $this->class = $class;
    }

    public function depositMoneyToBalance(float $value) : void 
    {
        if ($value < 0) {
            echo ("Valor Invalido!"  . PHP_EOL);
            return;
        }
        $value = $this->depositTax($value);
        $this->balance = $value;
    }
    
    public function passiveIncome(): float
    {
        return $this->balance * 0.02;
    }

    protected function depositTax(float $value) : float 
    {
        $value = $value - ($value*0.04);
        return $value;
    }

    public function getClass() : string 
    {
        return $this->class;
    }
}