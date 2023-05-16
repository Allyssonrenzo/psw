<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Arrays </h1>
    <h2> 1 - Funções para array</h2>

    <?php
    $array = [
        'nome' => 'Fabio', 
        'endereco' => 'Rua sete de setembro',
        'idade' => 25
    ];


    $listaordenada = [
     'linux', 
     'windows',
     'ios',
     
 ];

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    echo '<pre>';
    print_r($listaordenada);
    echo '</pre>';


    echo '<h2>   array Count </h2>';
    echo '<pre>';
       echo (count($array));
    echo '</pre>';
      
    echo '<pre>';
       echo (count($listaordenada));
    echo '</pre>';
    
    echo '<h2> Array keys </h2>';

    echo '<pre>';
       print_r(array_keys($array));
    echo '</pre>';

    echo '<h2> Array values </h2>';

    echo '<pre>';
         print_r(array_values($array));
    echo '</pre>';

    echo '<h2> in array </h2>';

    echo '<pre>';
         print_r(in_array('Fabio',$array));
    echo '</pre>';

    echo '<pre>';
         var_dump(in_array('tcholao',$listaordenada));
    echo '</pre>';

    echo '<h2> array  search</h2>';

    echo '<pre>';
         var_dump(array_search('Fabio',$array));
    echo '</pre>';

    
    echo '<h2> array  search </h2>';

    echo '<pre>';
         var_dump(array_search('tcholao',$listaordenada));
    echo '</pre>';

    
    echo '<h2> posições no array 7.3 > </h2>';


    echo '<h2> array key first</h2>';
         echo '<pre>';
              echo (array_key_first($listaordenada));
         echo '</pre>';


         echo '<h2> array key last</h2>';
         echo '<pre>';
              echo array_key_last($listaordenada);
         echo '</pre>';




         echo '<h2> implode  > </h2>';

         echo '<pre>';
              echo implode(',',$array);
         echo '</pre>';

         echo '<h2> explode - transforma string em array  > </h2>';

         echo '<pre>';
              print_r (explode('a','anica'));
         echo '</pre>';


         echo '<pre>';
              print_r(explode(',','anica,cananda,jeovana'));
         echo '</pre>';

        
         echo '<h2> sort  > </h2>';
        
         $listaordenada = [ 
            'casa',
            'bola',
            'zebra',
            'arvore'
       ];


         echo '<pre>';
              print_r($listaordenada);
         echo '</pre>';


         sort($listaordenada);

         echo '<pre>';
              print_r($listaordenada);
         echo '</pre>';

    

    ?>

</body>
</html>