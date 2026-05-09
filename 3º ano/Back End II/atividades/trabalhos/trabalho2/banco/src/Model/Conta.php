<?php

abstract class Conta {

    private array $transacao;

    public function __construct (
        public readonly string $nomeTitular,
        private float $saldo
    ){
        $this->transacao = [];
    }

    public function getSaldo() : float{

    return $this->saldo;

    }

    public function getExtrato() : Transacao{
    } 

    public function setSaldo(float $novoSaldo) : void {
        $this->transacao[] = $novoSaldo;
    }

    public function setExtrato() : void {
    } 

    public function depositar(float $valor) : bool{

    if ($valor > 0){
        $this->saldo += $valor;
    }
    return true;

    }

    abstract public function sacar();



}