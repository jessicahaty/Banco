<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'Cpf.php';

$jessica = new Titular(new Cpf('124.354.489-49'), 'Jessica Haty Isibasi');
$primeiraConta = new Conta($jessica);
$aline = new Titular(new Cpf ('985.147.741-56'), 'Alisson Hi Lima');
$segundaConta = new Conta($aline);
$gina = new Titular(new Cpf('114.415.951-84'), 'Ginn Uno');
$terceiraConta = new Conta($gina);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);



echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

echo $terceiraConta->recuperaNomeTitular() . PHP_EOL;
echo $terceiraConta->recuperaCpfTitular() . PHP_EOL;
echo $terceiraConta->recuperarSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();

var_dump($primeiraConta);