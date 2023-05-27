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
        $a = "Olá Mundo<br>";
        echo strtolower($a);

        // O strtolower permite que vocÊ faça com que todos os caracteres da frase esteja em letras minusculas

        $b = "olá mundo<br>";
        echo strtoupper($b);

        // O strtoupper permite que vocÊ faça com que todos os caracteres da frase esteja em letras maiusculas
        

        $c = "olá mundo<br>";
        echo ucfirst($c);

        // O ucfirst permite que vocÊ faça com que todos os caracteres do inicio da primeira palavra da frase fique em letra maiuscula

        $d = "olá mundo<br>";
        echo ucwords($d);

        // O ucwords permite que vocÊ faça com que todos os caracteres do inicio de cada palavra fique em letra maiuscula

        $e = "ola mundo";
        echo strrev($e)."<br>";

        // O strrev faz com que o que seja passado dentro do parametro seja escrito ao contrário
        
        $f = "Ola mundo, como será o curso de PHP da semana e quais serão as atividades";
        $xc = strpos($f, "as")."<br>";
        echo "A string foi encontrada na posição $xc";
        // O strpos faz com que seja encontrada a posição de qualquer carqactere ou palavra em uma frase
        
        $fs = "Ola mundo, como será o curso de PHP da semana e quais serão as atividades";
        $xcs = stripos($f, "ola")."<br>";
        echo "A string foi encontrada na posição $xcs";
        // O stripos faz com que seja encontrada a posição de qualquer carqactere ou palavra em uma frase independente se esta ou não em maiusculo

        $fs = "Ola mundo, como será o curso de PHP da semana e quais serão as atividades";
        $xcs = substr_count($f, "a");
        echo "A string 'a' foi encontrada $xcs vezes<br>";
        // O substr_count faz a cointagem de quantas vezes um caractere ou palavra aparece em um frase ou texto

        $fs = "Ola mundo, como será o curso de PHP da semana e quais serão as atividades";
        $xcs = substr($f, 10, 45)."<br>";
        print($xcs);
        // O substr pega a frase a partir do primeiro parametro numerico convertido em posição dentro da frase ou textro

        $fss = "Ola mundo";
        $xcss = str_pad($fss, 45, " ", STR_PAD_RIGHT);
        print("Como vai, $xcss, o que faz<br>");
        // O substr pega a frase a partir do primeiro parametro numerico convertido em posição dentro da frase ou textro

        $xcss = str_repeat("Oi ", 45);
        print("Como vai, $xcss, o que faz<br>");

        $fss = "Ola mundo";
        $xcss = str_replace("mundo", "senhor e senhora", $fss);
        print("Como vai, $xcss, o que faz");
    ?>
</div>
</body>
</html>
 