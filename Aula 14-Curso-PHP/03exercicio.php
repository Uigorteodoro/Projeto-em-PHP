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
    function soma(){
      $a = func_get_args();
      $b = func_num_args();
      $i = 0;
      for($s=0; $s<$b; $s++){
        $i += $a[$s];
      }
      return $i;
    }

    $res = soma(8,9,8,7,7,4,5,6,3,2);
    echo "A soma será de: $res";
  ?>
</div>
</body>
</html>
 