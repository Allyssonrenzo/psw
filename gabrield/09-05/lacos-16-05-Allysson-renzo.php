<!DOCTYPE html>
<html lang=”em”>
<head>
    <meta charset=”UTF-8”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
    <title>Laços</title>
</head>
<body>
<?php 
   
   $Array = [

        'Curso Informática' => [

            'Renzo' => [

                  'Geografia' => [
        
                            'Nota 1' => 8.0,
                            'Nota 2' => 8.0
                        ],
        
                        'Português' => [
        
                            'Nota 1' => 7.5,
                            'Nota 2' => 8
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 10,
                            'Nota 2' => 10
                        ]

                ],
                
                'Rangel' => [

                    'Geografia' => [
        
                            'Nota 1' => 1,
                            'Nota 2' => 2
                        ],
        
                        'Português' => [
        
                            'Nota 1' => 3,
                            'Nota 2' => 0
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 0,
                            'Nota 2' => 0
                        ]
    
                    ],
                    
                    'Ícaro' => [

                       'Geografia' => [
        
                            'Nota 1' => 9,
                            'Nota 2' => 10
                        ],
        
                        'Português' => [
        
                            'Nota 1' => 6,
                            'Nota 2' => 5
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 1,
                            'Nota 2' => 7
                        ]
        
                    ],
                    
                    'Italo' => [

                        'Geografia' => [
        
                            'Nota 1' => 5,
                            'Nota 2' => 4
                        ],
        
                        'Português' => [
        
                            'Nota 1' => 7,
                            'Nota 2' => 5
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 3,
                            'Nota 2' => 1
                        ]
        
                        ],

        ],

        
        'Curso Agropecuária' => [

            'Mary' => [

                        'Geografia' => [
        
                            'Nota 1' => 10,
                            'Nota 2' => 10
                        ],
        
                        'Português' => [
        
                            'Nota 1' => 10,
                            'Nota 2' => 10
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 10,
                            'Nota 2' => 10
                        ]

                ],
                
                'Vitor' => [

                        'Geografia' => [
        
                            'Nota 1' => 6,
                            'Nota 2' => 3
                        ],
        
                        'Português'  => [
        
                            'Nota 1' => 4,
                            'Nota 2' => 8
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 6,
                            'Nota 2' => 6
                        ]
    
                    ],
                    
                    'Gabriel' => [

                           'Geografia' => [
        
                            'Nota 1' => 8,
                            'Nota 2' => 6
                        ],
        
                        'Português' => [
        
                            'Nota 1' => 7.5,
                            'Nota 2' => 9
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 10,
                            'Nota 2' => 9
                        ]
        
                    ],
                    
                    'Tcholão' => [

                        'Geografia' => [
        
                            'Nota 1' => 8,
                            'Nota 2' => 8
                        ],
        
                        'Português ' => [
        
                            'Nota 1' => 7.5,
                            'Nota 2' => 8
                        ],
        
                        'Matemática' => [
        
                            'Nota 1' => 10,
                            'Nota 2' => 10
                        ]
        
                    ]

        ]
    ];
   echo '<h2>Imprimir cursos</h2>';
    Foreach($Array as $cursos => $alunos){
        Echo '<pre>';
            Print_r($cursos);
        Echo '</pre>';
        
    }
   

    echo'<h2>Imprimir alunos</h2>';
    Foreach($Array as $cursos => $alunos){
        Foreach($alunos as $alunos => $notas){
        Echo '<pre>';
            Print_r($alunos);
        Echo '</pre>';
    }
}

echo'<h2>Imprimir Notas >5 </h2>';
    Foreach($Array as $cursos => $alunos){
        Foreach($alunos as $alunos => $disciplinas){
            Foreach($disciplinas as $disciplinas => $notas){
                Foreach($notas as $notas => $valor){
                    if($valor >= 5){
                    Echo '<pre>';
                    Print_r($alunos);
                    Echo '<pre>';
                    Print_r($disciplinas);
                    Echo '<pre>';
                    Print_r($notas);
                    Echo '<pre>';
                    Print_r($valor);
                    Echo '</pre>';
                    }
                  
                }
              
                
               
            }

            

       
    }
}
        
 
   
?>
</body>
</html>