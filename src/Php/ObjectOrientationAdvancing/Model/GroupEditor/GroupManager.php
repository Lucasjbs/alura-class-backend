<?php

namespace Class\Bank\Model\BankAccount;

use Class\Bank\Model\Person;
use Class\Bank\Model\TokenInterface;

//Interfaces forces a class to implement a set of methods, like an abstract method from abstract classes.
class GroupManager implements TokenInterface
{
    private Person $person;
    private string $token;

    public function __construct(Person $person) {
        $this->person = $person;
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

    public function getPerson() : Person 
    {
        return $this->person;
    }
}