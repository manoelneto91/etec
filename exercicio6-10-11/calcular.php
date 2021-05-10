<?php 
	$num = $_POST['numero'];
	$vetor = $_POST['sorte'];
	$cont = $_POST['contador'];
	$cont++;
	//echo "Aleatorio $al";
	if ($vetor == 0){
            
            $vetor = rand(1, 100);
            
        }
	if($num <> $vetor){
		if($num > $vetor){
                    
                    echo "<br> Valor digitado maior que o numero gerado ($num)<br>";
                    
                }
		if($num < $vetor){
                    
                    echo "<br> Valor digitado menor que o numero gerado ($num)<br>";
                    
                }
		echo "<fieldset>";
                echo "<legend>Você Errou!!!</legend>";
                echo"<form method='post' action='outro.php'>";
                echo "Digite outro numero entre zero e 100:";
		echo "<input type='text' name='numero' size='50' /> <br/>";
		echo "<hr>";
		echo "<input type='hidden' name='sorte' value='$vetor'>";
		echo "<input type='hidden' name='contador' value='$cont'>";
		echo "<input type ='submit' name='sortebtn' value='Começar' />";
		echo '</form>';
		echo "</fieldset>";
	}
	else{
		echo ("Você acertou, meus parabéns!!!!<br>");
		echo ("Numero seu $num e gerado $vetor<br>");
		echo ("Demorou $cont vezes para acertar!!!<br>");
		echo ("<br><a href='index.php'>voltar</a>");
	}
?>