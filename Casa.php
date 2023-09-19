<?php

class Casa{
    private string $endereco;
    private string $tamanho;
    private string $numeroquartos;
    private string $valor;
    private string $anoconst;

    public function __construct(string $e,string $t,string $nq,string $v,string $ac){
        $this->definirEndereco($e);
        $this->definirTamanho($t);
        $this->definirNumeroQuartos($nq);
        $this->definirValor($v);
        $this->definirAnoConstrucao($ac);
    }

    public function definirEndereco(string $e){
        $this->endereco = $e;
    }
    public function definirTamanho(string $t){
        $this->tamanho = $t;
    }
    public function definirNumeroQuartos(string $nq){
        $this->numeroquartos = $nq;
    }

    public function definirValor(string $v){
        $this->valor = $v;
    }

    public function definirAnoConstrucao(string $ac){
        $this->anoconst = $ac;
    }
    public function exibirEndereco(){
        return $this->endereco;
    }
    public function exibirTamanho(){
        return $this->tamanho;
    }
    public function exibirNumeroQuartos(){
        return $this->numeroquartos;
    }

    public function exibirValor(){
        return $this->valor;
    }

    public function exibirAnoConstrucao(){
        return $this->anoconst;
    }
}
