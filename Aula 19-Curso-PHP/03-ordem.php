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
        $v = array(12,45,56,65,78);
        print_r($v);
        sort($v);
        Print_r($v);

        rsort($v);
        Print_r($v);

        asort($v);
        Print_r($v);

        arsort($v);
        Print_r($v);

        ksort($v);
        Print_r($v);

        krsort($v);
        Print_r($v);

    ?>
</div>
</body>
</html>
 