<?php
session_start();
include_once("conexao.php");
 ?>

<html lang="pt-br">
<head>
  <title>Lista de Projetos</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/cadastro.css">


</head>
<body>

    <main id="conteudoPrincipal">
      <form action="#" method="POST" id="formulario">
        <fieldset>


        <h1>Lista de Projetos</h1><br><hr>
        <?php
          $projetos = "SELECT * FROM projetos";
          $resultado_projetos = mysqli_query($conexao, $projetos);
          while($row_projeto = mysqli_fetch_assoc($resultado_projetos)){

            echo "Id do Projeto: ".$row_projeto['id'] . "<br>";
              echo "Nome: ".$row_projeto['nome_projeto'] . "<br>";
                echo "Data de início: ".$row_projeto['data_inicio'] . "<br>";
                  echo "Data de fim: ".$row_projeto['data_fim'] . "<br>"."<hr>";

          }
         ?>


       </fieldset>
          </form>
    </main>

</body>
</html>
