<?php

class Endereco{
    public string $cep;
    public string $rua;
    public int $numero;
    public string $bairro;
    public string $cidade;
    public string $estado;

    public function __construct(string $c, string $r, int $n, string $b, string $cd, string $e){
        $this->cep = $c;
        $this->rua = $r;
        $this->numero = $n;
        $this->bairro = $b;
        $this->cidade = $cd;
        $this->estado = $e;
    }
}