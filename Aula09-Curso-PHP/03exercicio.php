<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    
  </style>
</head>
<body>
<div>
    <?php
      $n1 = isset ($_GET["nota1"])?$_GET["nota1"]:0.0;
      $n2 = isset ($_GET["nota2"])?$_GET["nota2"]:0.0;
      $n1 = number_format($n1, 1, '.', '');
      $n2 = number_format($n2, 1, '.', '');
      $media = ($n1+$n2)/2;
      $media = number_format($media, 1, '.', '');
      if($media < 6.0){
        echo "A média entre <span style='color:red;'>$n1</span> e <span style='color:red;'>$n2</span> é igual a <span style='color:red;'>$media</span> <br/>";
        $resultado = "REPROVADO(A)";
      }elseif($media >= 6.0){
        echo "A média entre <span style='color:red;'>$n1</span> e <span style='color:red;'>$n2</span> é igual a <span style='color:red;'>$media</span> <br/>";
        $resultado = "APROVADO(A)";
      }
      echo "Situação do aluno <span style='color:red;'>$resultado</span>";
    ?>
    <br>
    <form action="03exercicio.html" >
     <input type="submit" value="Voltar" name="botao">
    </form>
</div>
</body>
</html>
 