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
        $n = array(4=>45, 2=>65, 8=>69, 10=>4584);
        unset($n[2]);
        print_r($n);
        echo "<br>";
        var_dump($n);


        $r = array( "Nome" => "Uigor", "Idade" => 20);
        print_r($r);
        echo "<br>";
        var_dump($r);

        foreach($r as $c=>$v){
          echo "O campo $c tem valor $v<br>";
        }

    ?>
  </pre>
</div>
</body>
</html>
 