<?php

namespace Class\Bank\Model\BankAccount;

use Class\Bank\Model\Person;

//Final modifier prevents the Class from being extended
final class BankInvestor extends Account
{
    private float $shares;

    public function __construct(Person $person, string $type, float $shares) {
        //It is a good practice, and helpful, to always call the parent constructor.
        parent::__construct($person, $type);
        $this->shares = $shares;
    }

    //To prevent access to anyone except its heirs, we can use the 'protected' modifier.
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
        return $this->balance * 2.10;
    }

    protected function depositTax(float $value) : float 
    {
        $value = $value - ($value*0.25);
        return $value;
    }

    public function getShares() : float 
    {
        return $this->shares;
    }
}