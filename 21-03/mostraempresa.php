<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
    include_once('header.php')
?>
<div class="titulo"><p> Dados da empresa</p></div>
    <div class="tab">


<table>
<tr>
<th>Razão Social da Empresa</th>
<th>
CNPJ/CPF
</th>
<th>Nome Fantasia
</th>
<th>E-mail
</th>
<th>Telefone</th>


</tr>


<tr>
    <td><?php echo $_GET['razaos'];   ?></td>
    <td><?php echo $_GET['cnpj'];   ?></td>
    <td><?php echo $_GET['nomef'];   ?></td>
    <td><?php echo $_GET['email'];   ?></td>
    <td><?php echo $_GET['telefone'];   ?></td>

    <tr>

    <tr>
<th>Endereço

</th>
<th>
Numero°
</th>
<th>Bairro
</th>
<th>Cep
</th>
<th>Cidade</th>


</tr>

    <td><?php echo $_GET['endereco'];   ?></td>
    <td><?php echo $_GET['n'];   ?></td>
    <td><?php echo $_GET['bairro'];   ?></td>
    <td><?php echo $_GET['cep'];   ?></td>
    <td><?php echo $_GET['cidade'];   ?></td>

    </tr>

</tr>

<tr>
<th>Estado</th>
<th>
Nome do respresentante da empresa


</th>
<th>Cargo do respresentante da empresa
</th>
<th>Data de iníco do comvênio

</th>
<th>Data de término do comvênio</th>


</tr>
</tr>

    <td><?php echo $_GET['estado'];   ?></td>
    <td><?php echo $_GET['nomere'];   ?></td>
    <td><?php echo $_GET['cargo'];   ?></td>
    <td><?php echo $_GET['datai'];   ?></td>
    <td><?php echo $_GET['datat'];   ?></td>

    </tr>

</tr>

</table>
</div>

<form action="editarempresa.php" method="get">
<p><input type="submit" value="editar cadastro" class="c"></p>
<div class="t1">
        <div class="l1"><label for="razaos" > </label></div>
        <div class="l1"><label for="cnpj" ></label></div>
        </div>
        <div class="t2">
        <p><input type="hidden" name="razaos" id="razaos"
        class="l2"  value="<?php echo $_GET['razaos'];   ?> "></p>
        <p><input type="hidden" name="cnpj" id="cnpj"
        class="l2"  value="<?php echo $_GET['cnpj'];   ?> "></p>
        </div>
        <div class="l1"><label for="nomef" ></label></div>
        <p><input type="hidden" name="nomef" id="nomef"
        class="l3a"  value="<?php echo $_GET['nomef'];   ?> "></p>
        <div class="t1">
        <div class="l1"><label for="email"
        ></label></div>
        <div class="l1"><label for="telefone"
        ></label></div>
        </div>
        <div class="t2">
        <p><input type="hidden" name="email" id="email"
        class="l2"  value="<?php echo $_GET['email'];   ?> "></p>
        <p><input type="hidden" name="telefone" id="telefone"
        class="l2"  value="<?php echo $_GET['telefone'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l4l"><label for="endereco"
        ></label></div>
        <div class="l5l"><label for="n" ></label></div>
        </div>
        <div class="t2">
        <p><input type="hidden" name="endereco" id="endereco"
        class="l4"  value="<?php echo $_GET['endereco'];   ?> "></p>
        <p><input type="hidden" name="n" id="n" class="l5"  value="<?php echo $_GET['n'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="bairro" ></label></div>
        <div class="l1"><label for="cep" ></label></div>
        </div>
        <div class="t2">
        <p><input type="hidden" name="bairro" id="bairro"
        class="l2" value="<?php echo $_GET['bairro'];   ?> "></p>
        <p><input type="hidden" name="cep" id="cep"
        class="l2" value="<?php echo $_GET['cep'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="cidade"
        ></label></div>
        <div class="l1"><label for="estado"
        ></label></div>
        </div>
        <div class="t2">
        <p><input type="hidden" name="cidade" id="cidade"
        class="l2" value="<?php echo $_GET['cidade'];   ?> "></p>
        <p><input type="hidden" name="estado" id="estado"
        class="l2" value="<?php echo $_GET['estado'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="nomere" ></label></div>
        <div class="l1"><label for="cargo" ></label></div>
        </div>
        <div class="t2">
        <p><input type="hidden" name="nomere" id="nomere"
        class="l2" value="<?php echo $_GET['nomere'];   ?> "></p>
        <p><input type="hidden" name="cargo" id="cargo"
        class="l2" value="<?php echo $_GET['cargo'];   ?> "></p>
        </div>
        <div class="t1">
        <div class="l1"><label for="datai" >
        </label></div>
        <div class="l1"><label for="datat" >
        </label></div>
        </div>
        <div class="t2">
        <p><input type="hidden" name="datai" id="datai"
        class="l2" value="<?php echo $_GET['datai'];   ?> "></p>
        <p><input type="hidden" name="datat" id="datat"
        class="l2" value="<?php echo $_GET['datat'];   ?> "></p>
        </div>
      
        
    
</form>
  

    
    <?php
    include_once('footer.php')
    ?>
</body>
</html>