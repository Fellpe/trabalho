<?php
require "Conexao.php";
require "Casa.php";
require "RepositorioCasa.php";
$repCasa = new RepositorioCasa();

$Casa1 = new Casa("Rua Wilson Costa","20m²","4","100.000,00","1995");
$Casa2 = new Casa("Rua Doutor Albert Sabin","40m²","3","130.000,00","2000");

$repCasa->cadastrar($banco,$Casa1);
$repCasa->cadastrar($banco,$Casa2);