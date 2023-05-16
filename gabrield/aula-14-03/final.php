<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 include_once ("final.php");
 if( !empty($_POST['form_submit']) ) {
 obterDados($_POST);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">

 <title>exemplo-post</title>
</head>
<body>
    <div class="titulo">

    </div>
<div class="gab">
<form class="form" method="post" action="final.php">
 <p> <h2>FORMULÁRIO EXEMPLO POST</h2></p>
 <label for="nome"> Nome:</label>
 <p> <input id= "nome" type="text" name="name" placeholder="Digite seu nome" required /> </p>
 <label for="cpf"> CPF:</label>
 <p> <input id= "cpf" type="tel" name="cpf" placeholder="Digite seu cpf" required/> </p>
 <input TYPE="hidden" NAME="form_submit" VALUE="OK">

 <br><br>
 <button type="submit" class="btn"> 
 <b>Obter Dados Post</b>
 </button>

 </div>
 <div class="rodape">

 </div>
</body>
</html>

<?php
 function obterDados($post) {
 $dados = $post['name']." - ".$post['cpf'];
 echo "<script> alert('".$dados."') </script>";
 }
?>