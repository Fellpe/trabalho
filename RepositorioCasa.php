<?php

class RepositorioCasa
{
    public function cadastrar(Casa $Casa)
    {
        $sqlInsert = "INSERT INTO CASA(endereco,tamanho,numeroquartos,valor,anoconst) VALUES (:e,:t,:nq,:v,:ac)";

        $insert = $Casa->prepare($sqlInsert);

        $endereco = $Casa->exibirEndereco();
        $tamanho = $Casa->exibirTamanho();
        $numeroquartos = $Casa->exibirNumeroQuartos();
        $valor = $Casa->exibirValor();
        $anoconst = $Casa->exibirAnoConstrucao();

        $insert->bindParam(":e", $endereco);
        $insert->bindParam(":t", $tamanho);
        $insert->bindParam(":nq", $numeroquartos);
        $insert->bindParam(":v", $valor);
        $insert->bindParam(":ac", $anoconst);

        $insert->execute();
    }
    
    public function exibirTudo(PDO $banco){
        $sql = "SELECT * FROM AUTOR";
        $dado = $banco->query($sql);
        return $dado->fetchAll(PDO::FETCH_ASSOC);
    }
}