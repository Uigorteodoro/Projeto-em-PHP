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
        $a = isset ($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce Nasceu em " . $a . " e tera " . $i . " anos";

        if ($i >= 18){
          echo "<br>Você esta hápto a Dirigir e Votar";
        } else{
          echo "<br>Voce nao pode dirigit e nem votar";
        }
    ?>
</div>
</body>
</html>
 