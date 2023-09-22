<?php
//arquivos necessários para as operações 
require "Conexao.php";
require "Casa.php";
require "RepositorioCasa.php";

$repCasa = new RepositorioCasa();
//lista dos valores em uma array, a partir do RepositorioCasa 
$todasCasas = $repCasa->exibirTudo($banco);
//foreach laço de repetição que ajuda a percorrer array
foreach($todasCasas as $Casa){
    echo "\n 🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠";
    echo "\n Endereço               | {$Casa['endereco']}";
    echo "\n Tamanho                | {$Casa['tamanho']}";
    echo "\n Numero de quartos      | {$Casa['numeroquartos']}";
    echo "\n Valor                  | {$Casa['valor']}";
    echo "\n Ano de construção      | {$Casa['anoconst']}";
    echo "\n 🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠🏠";
}
