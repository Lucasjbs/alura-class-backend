<?php

function isGuarantor(string $nomeInvestidor, bool $fiador): void
{
    if ($fiador) {
        echo ("O investidor $nomeInvestidor é fiador!") . PHP_EOL;
        return;
    }
    echo ("O investidor $nomeInvestidor não é fiador!") . PHP_EOL;
}

//With '&' we can set up a reference to the original array, instead of using a copy, and with that the value persists.
//Using '&' is not recomended, there are better ways to do this in Object Oriented Programming.
function makePayment(array &$investidor, float $valorPagamento, ?int $taxa): float
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

//To use mb_strtoupper, we have to enable the library mbstring in php.ini
function printCapitalLetterNames(array $investidores) : void 
{
    echo ("Os nomes de usuarios em maiusculo: ") . PHP_EOL;
    foreach ($investidores as $investidor) {
        $nome = mb_strtoupper($investidor['nome']);
        echo ("$nome") . PHP_EOL;
    }
}

function taxList(array $investidores, array $tax) : void 
{
    //Lists are an attribution that can be made from array to array. Currently, its not necessary to write list() anymore.
    list($taxaJulio, , $taxaMarcos) = $tax;
    echo ("As taxas de Julio e Marcos: $taxaJulio, $taxaMarcos") . PHP_EOL;
    [, $taxaAugusto, , $taxaTiberius] = $tax;
    echo ("As taxas de Augusto e Tiberius: $taxaAugusto, $taxaTiberius") . PHP_EOL;

    //Using it with Associative Arrays, we can take each value of $investidor, and assign it to other variables 
    foreach ($investidores as $id => $investidor) {
        ['nome' => $nome, 'valor_investido' => $valorInvestido, 'valor_disponivel' => $valorDisponivel] = $investidor;
        echo ("O usuario $nome de Id $id investiu $valorInvestido e tem disponível $valorDisponivel.") . PHP_EOL;
    }
}

//To remove a value from an array, simply use unset($array[value_position])
function removeUser(array $investidores, int $userId) : array 
{
    unset($investidores[$userId]);
    foreach ($investidores as $id => $investidor) {
        ['nome' => $nome] = $investidor;
        echo ("O usuario $nome de Id $id existe!") . PHP_EOL;
    }

    return $investidores;
}