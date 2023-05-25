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
        $vetor[0] = 45;
        $vetor[1] = 78;
        $vetor[2] = 65;
        $vetor[3] = "ola";
        $vetor[4] = 32;
        $vetor[5] = 45.658;
        
        print_r($vetor);
        echo "<br>";
        var_export($vetor);
        echo "<br>";
        var_dump($vetor);
        /*
          O print_r é utilizado para vericar os dados contidos dentro de um vetor, ja o var_dump verifica,
          todos os dados contidos em um vetor e ainda informa quais são seu tipos de dados.
        */
    ?>
</div>
</body>
</html>
 