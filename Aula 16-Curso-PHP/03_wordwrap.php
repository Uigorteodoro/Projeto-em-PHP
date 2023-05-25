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
        $a = "O wordwrap é utilizado para realizar a quebra de linha em um texto muito grande, onde essa quebra pode ser visual ou em codigo como tambem das duas formas";
        $r = wordwrap($a, 15, "<br>\n", false);
        echo $r;

        echo '<br>' . strlen($a);
        /*
            Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).

            Função trim() : Elimina espaços em branco antes e depois de uma string.

            Função ltrim() : Elimina espaços no início de uma string.

            Função rtrim() : Elimina espaços em branco no final de uma string.

            Função str_word_count() : Conta quantas palavras uma string possui.

            Função explode() : Quebra uma string e coloca os itens em um vetor.

            Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.

            Função implode() : Transforma um vetor inteiro em uma string.

            Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.

            Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.
        */
    ?>
</div>
</body>
</html>
 