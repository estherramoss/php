<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio - 2</title>

    <!-- CSS Interno -->
    <style>
        .destaque {color: purple;}
        .azul {color: blue;}
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p>Programador: Esther Bocchini</p>
    <hr>

    <?php
    //Geração de texto (String)
    echo "Chama Sesi-Senai !";

    /* Geração de texto estruturado (com tags, atributos) */
    echo "<h2>Gerando <span class='azul' > HTML</span> através do PHP. </h2>"; 
    echo "<h2>Gerando <span class='azul' > HTML</span> através do PHP. </h2>"; 

    ?>

    <h1>HTML e PHP mesclados</h1>
    <p>Parágrafos</p>

    <?php
      $linguagem = "Linguagem PHP";
    ?>
    <p>Parágrafo mesclando HTML com <?=$linguagem?> </p>
    
</body>
</html>