<html lang="pt-br">
<head>
  <title>Cadastro de Projetos</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/cadastro.css">


</head>
<body>

    <main id="conteudoPrincipal">

	  <form action="paginaSite/processa.php" method="POST" id="formulario">
			<fieldset>
				<h2>Cadastro de Projetos</h2>
        <label for="nome">Nome Do projeto:</label>
				<input id="nome" type="text" name="nome" /><br>
        <label for="nome">Data de Início:</label>
				<input id="data" type="date" name="data"/><br>
        <label for="nome">Data de Fim:</label>
				<input id="data2" type="date" name="data2" /><br>

				<input type="submit" name="next" id="botao2" value="Cadastrar"/>
				<input type="reset" name="prev" id="botao1"  value="Limpar campos"/>
			</fieldset>
	  </form>
    </main>

</body>
</html>
