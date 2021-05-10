<html lang ="´pt-br">
    <meta charset="UTF-8">
    <head>
        
    <title>Frase</title>
    
    </head>
    
    <body>
        <?php
        $numero = $_POST["NUMERO"];
        $cem=0;
        $cinquenta= 0;
        $vinte = 0;
        $dez=0;
        $cinco=0;
        $dois=0;
        $um=0;
        
        while ($numero >= 100){
            $numero = $numero-100;
            $cem ++;
        }            
        
        
        while ($numero >= 50){
            $numero = $numero-50;
            $cinquenta++;
        }                
        
        
        while ($numero >= 20){ 
            $numero = $numero-20;
            $vinte++;              
        }
        
        while ($numero >= 10){ 
            $numero = $numero-10;
            $dez++;
                        
        }
        
        while ($numero >= 5){ 
            $numero = $numero-5;
            $cinco++;
        }                
        
        
        while ($numero >= 2){ 
            $numero = $numero-2;
            $dois++;
                        
        }
        
        while ($numero >= 1){ 
            $numero = $numero - 1 ;
            $um++;
                        
        }
        
        echo "Notas: ";
        echo "</br> Quantidades de notas de 100: " . $cem;
        echo "</br> Quantidades de notas de 50: " . $cinquenta;
        echo "</br> Quantidades de notas de 20: " . $vinte;
        echo "</br> Quantidades de notas de 10: " . $dez;
       echo "</br> Quantidades de notas de 5: " . $cinco;
       echo "</br> Quantidades de notas de 2: " . $dois;
       echo "</br> Quantidades de notas de 1: " . $um;
         ?>
    </body>
</html>