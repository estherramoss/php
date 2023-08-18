<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 3</title>
</head>
<body>
      <p>Programador: Esther Bocchini</p>


<!-- Exemplo de números inteiros-->

*Exemplo de dados* 

<?php
echo 50;
if (is_int(10)) { // true
   echo "É um inteiro <br>";

}

$a = 12.8;

if (is_float($a)) {
    echo "É float 1! <br>";
}


?>


<!-- Exemplos de textos -->

*Exemplo de dados* 

<?php
    
    echo "Ela disse: 'Eu te amo'! <br>";
      
?>

*Exemplo de verificação* 

<?php

       $str = 'Eu te amo!';

       if (is_string($str)) {
        echo "$str é uma string <br>";
       }
?>

<!-- Exemplos de Booleano -->


* Exemplo de dados* 

<?php

        echo true;
        echo "<br>";
        echo false;

        if (8 > 5) { // true
            echo "É verdadeiro! <br>";
        }
        
?>

*Exemplo de verificação*

<?php

       $a = true;

       if (is_bool($a)) {
        echo "É um booleano 1 <br>";
       }

       $a = 8 > 5;
?>

<!-- Exemplo de Array -->
<?php
       echo "<p> Sintaxe NORMAL: Usa o nome e põe os valores entre parenteses. </p>";
       $a = array (7, 8, 9, 10);


</body>
</html>