<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <form action="02exercicio_p2.php" method="get">
    <?php
      $count = 1;
      while ($count <= 5){
        echo "Valor $count: <input type='number' name='v$count' max='100' min='0' value='0'><br>";
        $count++;
      }
    ?>
    <input type="submit" value="Enviar" class="botao">
  </form>
</div>
</body>
</html>
 