<?php

$nome  = $_POST["nome"];
$matricula = $_POST["matricula"];

$alunos = [];

$resposta = 
      [
         "nome"  => $nome,
         "matricula" => $matricula
      ];

array_push($alunos, $resposta);

include("conecta.php");

$comando = $pdo->prepare("INSERT INTO cadastro(nome,matricula) VALUES (\"$nome\",$matricula)");
$resultado = $comando->execute();

$json_texto = json_encode(["alunos" => $alunos]);
echo($json_texto);

?>