<?php

namespace Class\Bank\Model;

class Person
{
    private string $name;
    private int $cpfNumber;
    private Address $address;

    public function __construct(string $name, int $cpfNumber, Address $address) {
        $this->name = $name;
        $this->cpfNumber = $cpfNumber;
        $this->address = $address;
    }

    public function getName() : string 
    {
        return $this->name;
    }

    public function getCpf() : int 
    {
        return $this->cpfNumber;
    }

    public function getAddress() : Address 
    {
        return $this->address;
    }
}