<?php

namespace App\Alura;

class User
{
    private string $name;
    private string $lastName;
    private string $password;
    private string $pronouns;

    public function __construct(string $name, string $password, string $gender)
    {
        $this->setLastName($name);
        $this->validatePassword($password);
        $this->validatePronouns($name, $gender);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getLastNameWithPronoun(): string
    {
        return $this->pronouns;
    }

    private function setLastName(string $nome): void
    {
        //Explode will split a string in an array of strings. The split is defined by the string $separator.
        $lastName = explode(" ", $nome, 2);

        $this->name = $lastName[0];

        if (sizeof($lastName) < 2) {
            $this->lastName = "";
            return;
        }
        $this->lastName = $lastName[1];
    }

    private function validatePronouns(string $name, string $gender): void
    {
        if ($gender === 'M') {
            $this->pronouns = preg_replace('/^(\w+)\b/', 'Sr.', $name, 1);
        }
        if ($gender === 'F') {
            $this->pronouns = preg_replace('/^(\w+)\b/', 'Srª.', $name, 1);
        }
    }

    private function validatePassword(string $senha): void
    {
        //strlen returns the total length of a string. Beware special chars.
        //trim removes spaces (and \n,\t...) from the beginning and end of a string
        $tamanhoSenha = strlen(trim($senha));

        if ($tamanhoSenha > 6) {
            $this->password = $senha;
            return;
        }

        $this->password = "Senha fraca!";
    }
}
