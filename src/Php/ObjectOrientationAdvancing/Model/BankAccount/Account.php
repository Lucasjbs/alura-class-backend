<?php

namespace Class\Bank\Model\BankAccount;

use Class\Bank\Model\Person;

//To write an abstract method, your class needs to be abstract as well.
abstract class Account
{
    public const CURRENT_ACCOUNT = 'corrente';
    public const SAVINGS_ACCOUNT = 'poupanca';
    
    private Person $person;
    private string $type;
    protected float $balance = 0;
    //To prevent access to anyone except its heirs, we can use the 'protected' modifier.

    public function __construct(Person $person, string $type) {
        $this->isTypeValid($type);
        $this->type = $type;
        $this->person = $person;
    }

    public function withdraw(float $value) : void 
    {
        if ($value > $this->balance) {
            echo ("Saldo indisponivel!"  . PHP_EOL);
            return;
        }
        $this->manageBalance($value, null);
    }

    public function depositMoneyToAccount(float $value, Account $account) : void 
    {
        if ($value > $this->balance) {
            echo ("Saldo indisponivel!" . PHP_EOL);
            return;
        }
        //Abstract methods can be called from an abstract class, since they'll exist if the class extends this one.
        $value = $this->depositTax($value);
        $this->manageBalance($value, $account);
        echo ("Depositado $value para conta. Seu saldo atual eh $this->balance!"  . PHP_EOL);
    }

    public function getBalance() : float 
    {
        return $this->balance;
    }

    public function getAccountType() : string 
    {
        return $this->type;
    }

    public function getPerson() : Person 
    {
        return $this->person;
    }

    private function manageBalance(float $value, ?Account $account): void
    {
        if ($account){
            $account->balance += $value;
        }
        $this->balance -= $value;
    }

    private function isTypeValid(string $type): bool
    {
        if ($type === self::CURRENT_ACCOUNT || $type === self::SAVINGS_ACCOUNT ){
            return true;
        }
        //Geralmente isso seria um throws
        echo ("Tipo de conta invalido!"  . PHP_EOL);
        exit();
    }
    
    //Every class that extends Account need to implement this method:
    abstract protected function depositTax(float $value) : float;

    abstract public function depositMoneyToBalance(float $value) : void;

    abstract public function passiveIncome() : float;
}