<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
        <?php
            $sTexto =empty($_GET["texto"])?"Texto não informado":$_GET["texto"];
            $iTamanho = $_GET["tamanho"];
            $sCor = empty($_GET["cor"])?"#FF0000":$_GET["cor"];
        ?>
        <style>
            .txt{
                font-size:<?php echo $iTamanho; ?>;
                color: <?php echo $sCor; ?>;
            }
        </style>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "CSS com PHP<br><br>";
                echo "<span class='txt'>$sTexto</span>";
            ?>
        </div>
    </body>
</html>