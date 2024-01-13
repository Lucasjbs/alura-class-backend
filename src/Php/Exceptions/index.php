<?php

use Class\Exceptions\Model\BankMock\WithdrawOperation;
use Class\Exceptions\Model\ExceptionClassManager;
use Class\Exceptions\Model\InsufficientFundsException;

require 'autoload.php';

// Execution Stack
// Exception Treatment
// Launching Exceptions
if (false) {
    $manager = new ExceptionClassManager();

    $manager->stackExecutioner();
}

// Applying Knowledge
if (false) {
    $withdrawOperation = new WithdrawOperation(1000);

    try {
        $withdrawOperation->withdrawFunds(2000);
    } catch (InsufficientFundsException $e) {
        echo $e->getMessage() . PHP_EOL;
    }

    try {
        $withdrawOperation->depositFunds(-100);
    } catch (InvalidArgumentException $e) {
        echo "Argunmento Invalido!" . PHP_EOL;
    }
}

// Finally and PHP Peculiarities
if (true) {
    $manager = new ExceptionClassManager();

    $result = $manager->finallyExecutioner(1);
    echo "Return = $result". PHP_EOL;

    $result = $manager->finallyExecutioner(-1);
    echo "Return = $result". PHP_EOL;
}



