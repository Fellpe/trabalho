<?php
//comando para conectar o banco de dados
try{
    $banco = new PDO("sqlite:banco.sqlite");
    echo "Banco conectado!";

}catch(PDOException $e){
    echo "Deu erro na conexão! ";
    echo $e->getMessage();
}
//cria a tabela CASA caso ela não exista
$Casa = "CREATE TABLE IF NOT EXISTS CASA(
    endereco TEXT,
    tamanho TEXT,
    numeroquartos TEXT,
    valor TEXT,
    anoconst TEXT,
    primary key (endereco))";
//executa o comando para criar a tabela
$banco->query($Casa);
