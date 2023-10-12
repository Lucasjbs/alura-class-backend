<?php

class Pessoa
{
    private string $nome;
    private int $cpfNumero;
    private string $cidadeUf;

    public function __construct(string $nome, int $cpfNumero, string $cidadeUf) {
        $this->nome = $nome;
        $this->cpfNumero = $cpfNumero;
        $this->cidadeUf = $cidadeUf;
    }

    public function getNome() : string 
    {
        return $this->nome;
    }

    public function getCpf() : int 
    {
        return $this->cpfNumero;
    }

    public function getCidade() : string 
    {
        return $this->cidadeUf;
    }
}