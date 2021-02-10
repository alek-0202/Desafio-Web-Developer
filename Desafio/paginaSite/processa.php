<?php

include_once("conexao.php");

$nomep = filter_input(INPUT_POST, 'nome');
$datai = filter_input(INPUT_POST, 'data');
$dataf = filter_input(INPUT_POST, 'data2');

$result_projeto = "INSERT INTO projetos (nome_projeto, data_inicio, data_fim) VALUES ('$nomep', '$datai', '$dataf')";
$resultado_projeto = mysqli_query($conexao, $result_projeto);

header("Location: lista.php?");
 ?>
