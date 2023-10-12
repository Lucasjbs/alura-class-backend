<?php

require 'Pessoa.php';

class Conta
{
    public const CONTA_CORRENTE = 'corrente';
    public const CONTA_POUPANCA = 'poupanca';

    //If we set up a value when defining the attribute of a class, this value will be its initial value. It can be changed afterwards.
    private Pessoa $pessoa;
    private float $saldo = 0;
    private string $tipo;
    //Static Attributes and Methods belongs to the class, not the Instances 
    private static $numeroDeContas = 0;

    public function __construct(Pessoa $pessoa, string $tipo) {
        $this->isTypeValid($tipo);
        $this->tipo = $tipo;
        $this->pessoa = $pessoa;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;

        echo ("O numero de contas atual é: {$this->getNumeroDeContas()}" . PHP_EOL);
    } 

    //Its a good pratice to inform that this method is public
    public function sacar(float $valor) : void 
    {
        //We can use $this to reference the values of our own object
        if ($valor > $this->saldo) {
            echo ("Saldo indisponível"  . PHP_EOL);
            return;
        }
        //In OOP, we can simply use return; and end the Method execution, instead of using else
        $this->gerenciarSaldo($valor, null);
    }

    public function depositar(float $valor, Conta $conta) : void 
    {
        if ($valor > $this->saldo) {
            echo ("Saldo indisponível"  . PHP_EOL);
            return;
        }
        $this->gerenciarSaldo($valor, $conta);
        echo ("Depositado $valor para conta. Seu saldo atual eh $this->saldo!"  . PHP_EOL);
    }

    //Getters and Setters
    public function getValorSaldo() : float 
    {
        return $this->saldo;
    }

    public function getTipoConta() : string 
    {
        return $this->tipo;
    }

    public function getPessoa() : Pessoa 
    {
        return $this->pessoa;
    }

    //Self is used for the Class, and $this for the Instance
    public static function getNumeroDeContas() : int 
    {
        return self::$numeroDeContas;
    }

    public function setValorParaSaldo(float $valor) : void 
    {
        if ($valor < 0) {
            echo ("Valor Invalido!"  . PHP_EOL);
            return;
        }
        $this->saldo = $valor;
    }

    private function gerenciarSaldo(float $valor, ?Conta $conta): void
    {
        if ($conta){
            $conta->saldo += $valor;
        }
        $this->saldo -= $valor;
    }

    private function isTypeValid(string $tipo): bool
    {
        if ($tipo === self::CONTA_CORRENTE || $tipo === self::CONTA_POUPANCA ){
            return true;
        }
        //Geralmente isso seria um throws
        echo ("Tipo de conta invalido!"  . PHP_EOL);
        exit();
    }
}