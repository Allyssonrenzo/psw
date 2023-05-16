<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>Document</title>
</head>

<body>
<?php
    include_once('header.php')
?>
    
<div class="caixa">

    <div class="titulo">
       
    </div>

    <form action="tabela.php" method="get">

        <div class="titulo"><p>Editar Cadastro
        </p></div>
        <div class="t1">
        <div class="l1"><label for="razaos" >Razão Social da
        Empresa </label></div>
        <div class="l1"><label for="cnpj" >CNPJ/CPF</label></div>
        </div>
        <div class="t2">
        <p><input type="text" name="razaos" id="razaos"
        class="l2"  value="<?php echo $_GET['razaos'];   ?> "></p>
        <p><input type="text" name="cnpj" id="cnpj"
        class="l2"  value="<?php echo $_GET['cnpj'];   ?> "></p>
        </div>
        <div class="l1"><label for="nomef" >Nome
        Fantasia</label></div>
        <p><input type="text" name="nomef" id="nomef"
        class="l3a"  value="<?php echo $_GET['nomef'];   ?> "></p>
        <div class="t1">
        <div class="l1"><label for="email"
        >E-mail</label></div>
        <div class="l1"><label for="telefone"
        >Telefone</label></div>
        </div>
        <div class="t2">
        <p><input type="email" name="email" id="email"
        class="l2"  value="<?php echo $_GET['email'];   ?> "></p>
        <p><input type="text" name="telefone" id="telefone"
        class="l2"  value="<?php echo $_GET['telefone'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l4l"><label for="endereco"
        >Endereço</label></div>
        <div class="l5l"><label for="n" >Numero°</label></div>
        </div>
        <div class="t2">
        <p><input type="text" name="endereco" id="endereco"
        class="l4"  value="<?php echo $_GET['endereco'];   ?> "></p>
        <p><input type="number" name="n" id="n" class="l5"  value="<?php echo $_GET['cnpj'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="bairro" >Bairro</label></div>
        <div class="l1"><label for="cep" >CEP</label></div>
        </div>
        <div class="t2">
        <p><input type="text" name="bairro" id="bairro"
        class="l2" value="<?php echo $_GET['bairro'];   ?> "></p>
        <p><input type="text" name="cep" id="cep"
        class="l2" value="<?php echo $_GET['cep'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="cidade"
        >Cidade</label></div>
        <div class="l1"><label for="estado"
        >Estado</label></div>
        </div>
        <div class="t2">
        <p><input type="text" name="cidade" id="cidade"
        class="l2" value="<?php echo $_GET['cidade'];   ?> "></p>
        <p><input type="text" name="estado" id="estado"
        class="l2" value="<?php echo $_GET['estado'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="nomere" >Nome do
        respresentante da empresa</label></div>
        <div class="l1"><label for="cargo" >Cargo do
        respresentante da empresa</label></div>
        </div>
        <div class="t2">
        <p><input type="text" name="nomere" id="nomere"
        class="l2" value="<?php echo $_GET['nomere'];   ?> "></p>
        <p><input type="text" name="cargo" id="cargo"
        class="l2" value="<?php echo $_GET['cargo'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="datai" >Data de iníco do
        comvênio</label></div>
        <div class="l1"><label for="datat" >Data de término do
        comvênio</label></div>
        </div>
        <div class="t2">
        <p><input type="date" name="datai" id="datai"
        class="l2" value="<?php echo $_GET['datai'];   ?> "></p>
        <p><input type="date" name="datat" id="datat"
        class="l2" value="<?php echo $_GET['datat'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="cursos" >Cursos permitidos
        para estágio</label></div>
        <div class="l1"><label for="carga" >Carga horária diári
        máxima</label></div>
        </div>
        <div class="t2">
        <p><input list="cursos" name="cursos" class="l2"  value="<?php echo $_GET['cursos'];   ?> "></p>
        <datalist id="cursos">
        <option value="PSW">
        <option value="Redes">
        <option value="ASW">
        <option value="BD">
        <option value="Calculo 1">
        </datalist>
        <p><input type="text" name="carga" id="carga"
        class="l2"  value="<?php echo $_GET['carga'];   ?> "></p>
        </div>
        <div class="cad"><p><input type="submit"
        value="Cadastrar" class="c"></p></div>
        </form>
    </div>
        
        </form>
        <?php
    include_once('footer.php')
    ?>

    
</body>


  