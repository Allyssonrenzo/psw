
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <h1>Salvar e Visualizar Alunos</h1>
    
    
        <form method="GET" action="dados.php">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" class="imput" required><br><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" name="cpf" id="cpf" class="imput" required><br><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" name="endereco" id="endereco" class="imput" required><br><br>

            <label for="telefone">Telefone:</label><br>
            <input type="text" name="telefone" id="telefone" class="imput" required><br><br>

            <label for="telefone">Turma:</label><br>
            <input type="text" name="turma" id="turma" class="imput" required><br><br>

            <input type="submit" name="salvar" value="Salvar">
            <input type="reset" name="limpar" class="limpa" value="Limpar Formulario">
    </form>


</body>

</html>