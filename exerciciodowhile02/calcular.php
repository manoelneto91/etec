<html lang ="´pt-br">
    <meta charset="UTF-8">
    <head>
        
    <title>Frase</title>
    
    </head>
    
    <body>
        <?php
        $numero = $_POST["NUMERO"];
        $cont = 0;
        
        
        do{
            $vetor = rand(1,10);
            $numero = $numero - $vetor;
            $cont++;
            
        }while ($numero > 0);
        
        echo "Quantidade de execuções até seu numero ser menor ou igual a 0: " . $cont;
         ?>
    </body>
</html>
