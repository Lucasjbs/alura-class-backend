<?php

namespace App\Alura;

class Contact
{

    private $email;
    private $address;
    private $cep;
    private $phone;

    public function __construct(string $email, string $address, string $cep, string $phone)
    {
        $this->email = $email;
        $this->setEmail($email);
        $this->setPhone($phone);

        $this->address = $address;
        $this->cep = $cep;
    }

    public function getUser(): string
    {
        //Find the position of the FIRST occurrence of a substring in a string, and returns the number of its position
        $signPosition = strpos($this->email, "@");

        if ($signPosition === false) {
            return "";
        }

        //Returns part of a string or false on failure
        return substr($this->email, 0, $signPosition);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAddressCep(): string
    {
        //Opposite of explode(), it glues two strings together. The strings are defined inside an array. 
        $addressCep = [$this->address, $this->cep];
        return implode(" - CEP: ", $addressCep);
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    private function setEmail(string $email): void
    {
        //Not exclusive to strings. Will filter a variable with a specified filter.
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            $this->email = $email;
            return;
        }

        $this->email = "";
    }

    private function setPhone(string $phone): void
    {
        //The function 'preg_match()' is used to perform a regular expression in php
        $regexResult = preg_match('/^[0-9]{4}-[0-9]{4}$/', $phone, $matches);

        if ($regexResult) {
            $this->phone = $phone;
            return;
        } 
        $this->phone = '';
    }
}
