<?php

try{
    $banco = new PDO("sqlite:banco.sqlite");
    echo "Banco conectado!";

}catch(PDOException $e){
    echo "Deu erro na conexão! ";
    echo $e->getMessage();
}

$Casa = "CREATE TABLE IF NOT EXISTS CASA(
    endereco TEXT,
    tamanho TEXT,
    numeroquartos TEXT,
    valor TEXT,
    anoconst TEXT,
    primary key (endereco))";

$banco->query($Casa);
