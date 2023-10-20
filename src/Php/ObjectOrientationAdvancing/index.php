<?php

require 'autoload.php';

use Class\Bank\Model\Address;
use Class\Bank\Model\BankAccount\Account;
use Class\Bank\Model\BankAccount\BankClient;
use Class\Bank\Model\Person;

$address1 = new Address('Sao Paulo', 'Liberdade', 'Paraguay', '34');
$person1 = new Person('Raphael', 2332147682, $address1);
$client1 = new BankClient($person1, Account::CURRENT_ACCOUNT, 'Developer');

echo ("O usuario {$client1->getPerson()->getName()} criou uma conta {$client1->getAccountType()}.") . PHP_EOL;

