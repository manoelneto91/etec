<html lang ="´pt-br">
    <meta charset="UTF-8">
    <head>
        
    <title>Frase</title>
    
    </head>
    
    <body>
        <?php
        $vetor1 = rand(0,100);
        $cont = 0;
        
        
        do{ 
            $vetor2 = rand(0,100);
            $cont++;
        
        }while($vetor2 <> $vetor1);
        
        echo "<br/>Quantidade de execuções até seu o numero do vetor 1 ser igual ao vetor 2: " . $cont;
        
         ?>
    </body>
</html>
