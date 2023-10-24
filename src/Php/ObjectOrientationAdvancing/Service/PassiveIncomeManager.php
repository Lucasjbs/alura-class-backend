<?php

namespace Class\Bank\Service;

use Class\Bank\Model\BankAccount\Account;

class PassiveIncomeManager
{
    private float $totalPassiveIncome = 0;

    //the reason why we are expecting a Account is because Polymorphism Concept. We don't expect a literal Account, but we expect any of its children.
    public function addPassiveIncome(Account $account) 
    {
        $this->totalPassiveIncome += $account->passiveIncome();
    }

    public function getTotalPassiveIncome(): float
    {
        return $this->totalPassiveIncome;
    }
}