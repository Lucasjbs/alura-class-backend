<?php

namespace Class\Bank\Model\BankAccount;

use Class\Bank\Model\Person;
use Class\Bank\Model\TokenInterface;

class BankManager extends Account implements TokenInterface
{
    private string $role;
    private string $token;

    public function __construct(Person $person, string $type, string $role) {
        parent::__construct($person, $type);
        $this->role = $role;
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

    public function generateToken(): string 
    {
        $token = bin2hex(random_bytes(24 / 2));
        return $token;
    }

    public function getToken(): string 
    {
        return $this->token;
    }

    public function getRole() : string 
    {
        return $this->role;
    }
}