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
        $a = array("A", 12, "BOI", 32, "FALA");
        echo "<pre>";
        print_r($a);
        var_dump($a);
        echo sizeof($a)."<br>";
        echo count($a);
        echo "</pre>";
    ?>
</div>
</body>
</html>
 