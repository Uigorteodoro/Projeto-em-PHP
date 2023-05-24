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
      echo "<p>O resultado da soma de $a + $b é igual a: $res</p>";
    }

    soma(85,95);
  ?>
</div>
</body>
</html>
 