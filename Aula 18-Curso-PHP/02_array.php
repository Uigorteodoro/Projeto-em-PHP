<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
        $n = range(0,50,6);
        print_r($n);
        var_dump($n);
        $c = sizeof($n);
        echo $c."<br>";
        for($i=0; $i<$c;$i++){
          echo $n[$i].", ";
        }
        echo "<br>";

        foreach($n as $v){
          echo "$v ";
        }
    ?>
  </pre>
</div>
</body>
</html>
 