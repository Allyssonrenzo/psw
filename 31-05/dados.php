

<?php
 DEFINE('HOST', 'localhost');
 DEFINE('USUARIO', 'root');
 DEFINE('SENHA', 'ifbaiano');
 DEFINE('DBNAME', 'tcholao');

 try {

    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' .DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}

    

$nome = $_GET["nome"];
$cpf = $_GET["cpf"];
$endereco = $_GET["endereco"];
$telefone = $_GET["telefone"];
$turma = $_GET["turma"];

$sql = "INSERT INTO alunos(nome, cpf, endereco, telefone, turma) VALUES ('$nome'
, '$cpf', '$endereco', '$telefone', '$turma')";
$stmt = $conexao->prepare($sql);
if($stmt->execute()){
    echo "<strong>OK!</strong> o aluno $nome foi cadastrado com sucesso!!";
}
    
?>