<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="pt-br">
    <head>
        <meta chaset=UTF-8>
    <title>Encontrando o Numero</title>
</head>
<body>
    <fieldset>
        <legend>Numero da Sorte</legend>
        <form method="post" action="calcular.php">
        Digite um numero entre 0 e 100:
        <input type="text" name="numero" size="50" /> <br/>
        
        <input type="hidden"  name="sorte" value='0'/>
        
        <input type="hidden"  name="contador" value='1'/><br/>
                
        
        <input type ="submit" name="sortebtn" value="Começar" />
</form>
</fieldset>
</body>
</html>