<?php

namespace Class\Bank\Model\BankAccount;

use Class\Bank\Model\Person;

//Inheritance in OOP is when a Class inherit characteristics of another Class.
class BankClient extends Account
{
    private string $occupation;

    public function __construct(Person $person, string $type, string $occupation) {
        //It is a good practice, and helpful, to always call the parent constructor.
        parent::__construct($person, $type);
        $this->occupation = $occupation;
    }

    //To prevent access to anyone except its heirs, we can use the 'protected' modifier.
    public function depositMoneyToBalance(float $value) : void 
    {
        if ($value < 0) {
            echo ("Valor Invalido!"  . PHP_EOL);
            return;
        }
        $this->balance = $value;
    }

    public function getOccupation() : string 
    {
        return $this->occupation;
    }
}