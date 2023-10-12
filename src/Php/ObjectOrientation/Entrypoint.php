<?php

require 'Conta.php';

class Entrypoint
{
    public $cpfTitular;

    //Ideally, Conta should be created with the __construct
    public function __construct() {
        // echo("__construct") . PHP_EOL;
    }

    function __invoke()
    {
        //If the Class requires another Class, you'll have to build the required one first:
        $pessoas = $this->buildPessoas();

        //The Class is just an model for the objects. Each object has its own individual values:
        $conta1 = new Conta($pessoas[0], Conta::CONTA_CORRENTE);
        $conta2 = new Conta($pessoas[1], Conta::CONTA_POUPANCA);
        echo ("{$conta1->getPessoa()->getNome()} tem o tipo {$conta1->getTipoConta()}, e {$conta2->getPessoa()->getNome()} tem o tipo {$conta2->getTipoConta()}" . PHP_EOL);

        //However, the variable for the object only stores the reference for that object. If you copy the object, the changes on the copy affects the original, since its the reference that's being copied:
        echo ("Saldo de {$conta1->getPessoa()->getNome()} antes {$conta1->getValorSaldo()}" . PHP_EOL);
        $contaCopia = $conta1;
        $contaCopia->setValorParaSaldo(500);
        echo ("Saldo de {$conta1->getPessoa()->getNome()} depois {$conta1->getValorSaldo()}" . PHP_EOL);

        $conta1->sacar(900);
        $conta1->depositar(200, $conta2);

        $conta3 = new Conta($pessoas[2], Conta::CONTA_POUPANCA);
        echo ("O numero de contas atual é: {$conta1->getNumeroDeContas()}" . PHP_EOL);
        $conta3->setValorParaSaldo(800);
        $conta3->depositar(800, $conta1);
        //Unset works for Instances as well:
        unset($conta2);
        echo ("Saldo de {$conta1->getPessoa()->getNome()} atual {$conta1->getValorSaldo()}" . PHP_EOL);
    }

    private function buildPessoas(): array
    {
        $pessoas = [new Pessoa('Rasputin', 87901012123, 'Gramado - RS')];
        $pessoas[] = new Pessoa('Boris', 51287032134, 'Vassouras - RJ');
        $pessoas[] = new Pessoa('Natasha', 22181215134, 'Campinas - SP');

        return $pessoas;
    }
}