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
        $n = array(array(4,5),
                   array(5,6),
                   array(7,8));
        print_r($n);
        $n[0][1] = $n[2][1];
        print_r($n);
    ?>
  </pre>
</div>
</body>
</html>
 