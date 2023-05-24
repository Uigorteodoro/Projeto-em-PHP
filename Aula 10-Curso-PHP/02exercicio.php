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
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d){
          case 2:
          case 3:
          case 4:
          case 5:
            echo "Levanta e Vai estudar";
            break;
          case 7:
          case 8:
            echo "Dia de descanso";
            break;
          default:
            echo "Dia da semana invalido";
        }
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 