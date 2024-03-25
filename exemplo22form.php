<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "CSS com PHP";

            ?>
            <form action="exemplo22.php" method="get" name="formulario">
                <label>TEXTO:</label>
                <input type="text" name="texto"><br>
                <label>TAMANHO:</label>
                <select name="tamanho">
                    <option value= "8pt"> 8</option>
                    <option value= "10pt"> 10</option>
                    <option value= "14pt"> 14</option>
                    <option value= "20pt"> 20</option>
                    <option value= "40pt"> 40</option>
                </select><br>
                <label>COR:</label>
                <input type="color" name="cor" value="#FF0000">
                <br><br>
                <input type="submit" value="EXIBIR"><br>
                <input type="reset" value="LIMPAR"><br>
            </form>
        </div>
    </body>
</html>