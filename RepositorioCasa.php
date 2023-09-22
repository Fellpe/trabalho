<?php

class RepositorioCasa
{
    public function cadastrar(PDO $banco, Casa $Casa)
    {
        //Aqui prepara a instrução SQL para criar o registro na tabela
        $sqlInsert = "INSERT INTO CASA(endereco,tamanho,numeroquartos,valor,anoconst) VALUES (:e,:t,:nq,:v,:ac)";

        $insert = $banco->prepare($sqlInsert);

        $endereco = $Casa->exibirEndereco();
        $tamanho = $Casa->exibirTamanho();
        $numeroquartos = $Casa->exibirNumeroQuartos();
        $valor = $Casa->exibirValor();
        $anoconst = $Casa->exibirAnoConstrucao();
        //definindo o valor dos parâmetros 
        $insert->bindParam(":e", $endereco);
        $insert->bindParam(":t", $tamanho);
        $insert->bindParam(":nq", $numeroquartos);
        $insert->bindParam(":v", $valor);
        $insert->bindParam(":ac", $anoconst);
        //executa o comando de insert no banco 
        $insert->execute();
    }
    
    public function exibirTudo(PDO $banco){ 
        $sql = "SELECT * FROM CASA";
        $dado = $banco->query($sql); //executa o SQL do banco
        //estrutura os valores como obtidos pelo $select como um vetor indexado
        return $dado->fetchAll(PDO::FETCH_ASSOC);
    }
}
