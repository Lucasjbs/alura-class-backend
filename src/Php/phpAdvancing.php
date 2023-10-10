<?php

//We can import another file with just its location. We can use require or include, depending on the situation
require 'phpAdvancingExternal.php';

$investidor1 = [
    'nome' => 'Julio',
    'valor_disponivel' => 1000,
    'valor_investido' => 100,
    'fiador' => false,
];

$investidor2 = [
    'nome' => 'Augusto',
    'valor_disponivel' => 3800,
    'valor_investido' => 1200,
    'fiador' => false,
];

$investidor3 = [
    'nome' => 'Marcos',
    'valor_disponivel' => 18000,
    'valor_investido' => 1100,
    'fiador' => true,
];

$investidores = [$investidor1, $investidor2, $investidor3];

//To access the key 'nome' of each investor, we can use the for loop:
for ($i = 0; $i < count($investidores); $i++) {
    echo $investidores[$i]['nome'] . PHP_EOL;
}

$investidores = [
    11 => $investidor1,
    61 => $investidor2,
    30 => $investidor3
];
//We can also use foreach to reach the same goal, even when the indexes are not in order, which wouldn't be possible for the conventional for loop:
foreach ($investidores as $investidor) {
    echo $investidor['valor_disponivel'] . PHP_EOL;
}

//Foreach can access the key value dynamically as well:
foreach ($investidores as $id => $investidor) {
    echo ("O usuario $id investiu ") . $investidor['valor_investido'] . PHP_EOL;
}

//We can add a new investor and provide a new ID for him as well. If we don't set up a Key, PHP will always set up the first available integer value, starting from zero:
$investidores[26] =  [
    'nome' => 'Tiberius',
    'valor_disponivel' => 560000,
    'valor_investido' => 66000,
    'fiador' => true,
];

foreach ($investidores as $id => $investidor) {
    echo ("O usuario $id investiu ") . $investidor['valor_investido'] . PHP_EOL;
}

//You can add a single value to the end of an array like this:
$cpmf = [143, 344, 642];
$cpmf[] = 333;
foreach ($cpmf as $x) {
    echo ("Imposto == $x") . PHP_EOL;
}

//The function below will manage the payment funcionality. This is a basic function model:
function simulatePayment(array $investidor, float $valorPagamento, ?int $taxa): float
{
    if($investidor['valor_disponivel'] - $valorPagamento < 0){
        echo('Nao foi possivel fazer pagamento!') . PHP_EOL;
        return $investidor['valor_disponivel'];
    }
    $investidor['valor_disponivel'] -= $valorPagamento;
    if ($taxa) {
        $investidor['valor_disponivel'] -= $taxa;
    }
    return $investidor['valor_disponivel'];
}
//This function will not affect the $investidor array, because I'm sendind a copy of the investidor, and not the array reference.

//Using curly brackets, we can access the variable positions inside the same string:
$saldo = simulatePayment($investidores[11], 200, null);
echo ("Saldo restante do investidor {$investidores[11]['nome']} == $saldo") . PHP_EOL;

$saldo = simulatePayment($investidores[30], 640, 30);
echo ("Saldo restante do investidor {$investidores[30]['nome']} == $saldo") . PHP_EOL;

$saldo = simulatePayment($investidores[26], 6360, 80);
echo ("Saldo restante do investidor {$investidores[26]['nome']} == $saldo") . PHP_EOL;

$saldo = simulatePayment($investidores[11], 1200, null);
echo ("Saldo restante do investidor {$investidores[11]['nome']} == $saldo") . PHP_EOL;



//The data of an imported file can be used here:
isGuarantor($investidores[11]['nome'], $investidores[11]['fiador']);

isGuarantor($investidores[26]['nome'], $investidores[26]['fiador']);

//If the called function is using the Reference of the array, instead of just a copy, the value persists
$saldo = makePayment($investidores[11], 200, null);
echo ("Saldo restante do investidor {$investidores[11]['nome']} == $saldo") . PHP_EOL;

$saldo = makePayment($investidores[11], 200, null);
echo ("Saldo restante do investidor {$investidores[11]['nome']} == $saldo") . PHP_EOL;

printCapitalLetterNames($investidores);

taxList($investidores, $cpmf);

removeUser($investidores, 61);