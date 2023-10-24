<?php

require 'autoload.php';

use Class\Bank\Model\Address;
use Class\Bank\Model\BankAccount\Account;
use Class\Bank\Model\BankAccount\BankClient;
use Class\Bank\Model\BankAccount\BankInvestor;
use Class\Bank\Model\BankAccount\BankManager;
use Class\Bank\Model\Person;
use Class\Bank\Service\PassiveIncomeManager;

$address1 = new Address('Sao Paulo', 'Liberdade', 'Paraguay', '34');
$person1 = new Person('Raphael', 2332147682, $address1);
$client1 = new BankClient($person1, Account::CURRENT_ACCOUNT, 'Developer');

echo ("O cliente {$client1->getPerson()->getName()} criou uma conta {$client1->getAccountType()}.") . PHP_EOL;
echo ("O cliente {$client1->getPerson()->getName()} vai depositar 1300,00 reais.") . PHP_EOL;
$client1->depositMoneyToBalance(1300);
echo ("O cliente {$client1->getPerson()->getName()} tem um saldo de {$client1->getBalance()} reais.") . PHP_EOL;

$address2 = new Address('Sao Paulo', 'Liberdade', 'Tiete', '106');
$person2 = new Person('Ezequiel', 9676147226, $address2);
$investor1 = new BankInvestor($person2, Account::SAVINGS_ACCOUNT, 12.75);

echo ("O investidor {$investor1->getPerson()->getName()} tem {$investor1->getShares()}% das ações.") . PHP_EOL;

$totalPassiveIncome = new PassiveIncomeManager;
$totalPassiveIncome->addPassiveIncome($client1);
$totalPassiveIncome->addPassiveIncome($investor1);

echo ("O total de gastos da empresa com renda passiva é de {$totalPassiveIncome->getTotalPassiveIncome()}.") . PHP_EOL;

//With __toString, it will run and return the text every time we call the Class: 
echo ("O endereço de {$investor1->getPerson()->getName()} é $address2.") . PHP_EOL;

$address2 = new Address('Sao Paulo', 'Liberdade', 'Tiete', '106');
$person3 = new Person('Apollo', 9676147226, $address2);
$manager = new BankManager($person3, Account::CURRENT_ACCOUNT, 'Admin');

