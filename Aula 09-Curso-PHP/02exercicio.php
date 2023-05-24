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
      $a = isset ($_GET["ano"])?$_GET["ano"]:0;
      $i = date("Y") - $a;
      echo "Voce Nasceu em " . $a . " e tera " . $i . " ano(s)<br/>";

      if ($i < 16){
        echo "Você não pode votar";
      } elseif(($i >= 16 and $i < 18) || ($i >= 60)){
        echo "Você com essa idade pode votar se quiser";
      }else{
        echo "Você com essa idade ja é obrigado a votar"; 
      }
    ?>
</div>
</body>
</html>
 