<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $v = array(12,45,56,65,78);
        print_r($v);
        $v[] = 98;
        Print_r($v);

        // para tratamento de estrutura de dados em PHP usa-se o array_push e o array_popn para inserir dados no final do vetor
        array_push($v,125);
        print_r($v);
        array_pop($v);
        print_r($v);

        // para se inerir ou deletar dados no inicio de um vetor usa-se o array_unshift e o array_shift
        array_unshift($v,5);
        print_r($v);
        array_shift($v);
        print_r($v);

        
    ?>
</div>
</body>
</html>
 