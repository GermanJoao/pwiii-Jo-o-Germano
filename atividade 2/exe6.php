<!--Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%,
exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe6</title>
</head>
<body>
    <h1>
        <center>
<form method="POST">
<label>Valor:</label>
<br>
<input type="number" name = "v1" required>
<br>
<input type="submit" value = "Calcular">

<br><br>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$v1 = $_POST["v1"];
$porcentagem = 0.07;

$total = $v1*$porcentagem;

$ValorTotal = $v1-$total;


echo "<br> o valor da sua compra com 7% de desconto é ", $v1 ,", <br> o valor do desconto é ", $total ,", <br> do produto com desconto é ",$ValorTotal; 


}
?>
</center>
</h1>
</form>
</body>
</html>