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
        $p = 4.5;
        $s = "Arroz";
        echo "O preço do $s é de R$ ".number_format($p, 2)."<br>";
        printf("O preço do %s é de R$ %.2f", $s, $p);
        /*
          O printf é utilizado como uma possivel alternativa para se usar ao em ves do echo, 
          onde ele ja é uma impressão de ja formatado, apenas sendo necessario a inserção de parametro referente ao tipo presente na variavel
        */
    ?>
</div>
</body>
</html>
 