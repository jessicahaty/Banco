<?php

class Conta
{
    private $cpf;
    private $titular;
    private $saldo = 0;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        
        Conta::$numeroDeContas++;
         
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
    
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        }else {
            $this->saldo += $valorADepositar;
        }
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo) {
            echo "Saldo indisponivel";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
    
    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }
    
    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    
    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
    
    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;
    }
    
    public function __destruct()
    {
        self::$numeroDeContas--;
    }
}



