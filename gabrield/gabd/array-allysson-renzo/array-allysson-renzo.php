<?php
$arrayAluno = [
  'disciplinas'=> [
     'BD' => [
       'nome'=>'Banco de Dados',
       'Nota1'=> 45,
       'Nota2'=> 40,
      
    ],
     'PSW' => [
        'nome'=>'Progamação de Sistemas Web',
        'Nota1'=> 50,
        'Nota2'=> 40
     ],
     'ASW' => [
        'nome'=>'Analise de Sistemas Web',
        'Nota1'=> 35,
        'Nota2'=> 50
     ],
     'PI' => [
        'nome'=>'Projeto Integrador',
        'Nota1'=> 50,
        'Nota2'=> 25
     ],
     'REDES' => [
       'nome'=>'Rede de Computadores',
       'Nota1'=> 25,
       'Nota2'=> 35
     ]
  ],
];
echo'<pre>';
print_r($arrayAluno);
echo'</pre>';
echo ('media BD=');
$Media = (($arrayAluno['disciplinas']['BD']['Nota1']) + ($arrayAluno['disciplinas']['BD']['Nota2']))/2;
echo($Media);
echo ('media PSW=');
$Media = (($arrayAluno['disciplinas']['PSW']['Nota1']) + ($arrayAluno['disciplinas']['PSW']['Nota2']))/2;
echo($Media);
echo ('media ASW=');
$Media = (($arrayAluno['disciplinas']['ASW']['Nota1']) + ($arrayAluno['disciplinas']['ASW']['Nota2']))/2;
echo($Media);
echo ('media PI=');
$Media = (($arrayAluno['disciplinas']['PI']['Nota1']) + ($arrayAluno['disciplinas']['PI']['Nota2']))/2;
echo($Media);
echo ('media REDES=');
$Media = (($arrayAluno['disciplinas']['REDES']['Nota1']) + ($arrayAluno['disciplinas']['REDES']['Nota2']))/2;
echo($Media);
?>