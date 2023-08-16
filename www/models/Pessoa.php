<?php

abstract class Pessoa{
    public string $nome;
    public int $idade;
    public string $telefone;
    public Endereco $endereco;
    public string $doc;

    public function __construct(string $n, int $i, string $t, Endereco $e, string $d){
        $this->nome = $n;
        $this->idade = $i;
        $this->telefone = $t;
        $this->endereco = $e;
        $this->doc = $d;
    }
}