<?php
require "Conexao.php";
require "Casa.php";
require "RepositorioCasa.php";

$repCasa = new RepositorioCasa();

$todasCasas = $repCasa->exibirTudo($banco);

foreach($todasCasas as $Casa){
    echo "\n -----------------------------------";
    echo "\n Endereço               | {$Casa['endereco']}";
    echo "\n Tamanho                | {$Casa['tamanho']}";
    echo "\n Numero de quartos      | {$Casa['numeroquartos']}";
    echo "\n Valor                  | {$Casa['valor']}";
    echo "\n Ano de construção      | {$Casa['anoconst']}";
    echo "\n -----------------------------------";
}
