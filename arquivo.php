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

$json_texto = json_encode(["alunos" => $alunos]);
echo($json_texto);

?>