<?php

class ContaBancaria {

    private $titular;
    private $numeroConta;
    private $tipo;
    private $saldo;
    private $depositos;

    public function __construct($titular, $numeroConta, $tipo, $saldoInicial = 0){
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->tipo = $tipo;
        $this->saldo = $saldoInicial;
        $this->depositos = 0; 
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getDepositos(){
        return $this->depositos;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function getNumeroConta(){
        return $this->numeroConta;
    }

    public function depositar($valor){
        if ($valor > 0) {
            $this->saldo += $valor;
            $this->depositos += $valor;
        }
    }

    public function sacar($valor){
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }

    public function transferir($valor, $contaDestino){
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            $contaDestino->depositar($valor);
        }
    }

    public function extrato(){
        echo "Titular: {$this->titular}<br>";
        echo "Conta: {$this->numeroConta}<br>";
        echo "Tipo: {$this->tipo}<br>";
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
        echo "Total de depósitos: R$ " . number_format($this->depositos, 2, ',', '.') . "<br><br>";
    }
}

$conta1 = new ContaBancaria("João", "12345-6", "Corrente", 0);
$conta2 = new ContaBancaria("Kalleby", "22222-6", "Poupança", 0.99);

$conta1->depositar(10000);
$conta1->depositar(10000);
$conta1->depositar(10000);
$conta1->depositar(10000);
$conta1->depositar(10000);
$conta1->depositar(10000);
$conta2->sacar(0);
$conta1->transferir(5000, $conta2);


echo "Extrato da Conta 1:<br>";
$conta1->extrato();

echo "----------<br><br>";

echo "Extrato da Conta 2:<br>";
$conta2->extrato();

?>
