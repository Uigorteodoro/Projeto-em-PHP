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
    function soma($a, $b){
      $res = $a + $b;
      return $res;
    }
    $c = 85;
    $d = 95;
    $retorno = soma($c,$d);
    echo "<p>O resultado da soma de $c + $d é igual a: $retorno</p>";
  ?>
</div>
</body>
</html>
 