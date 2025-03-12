<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico B</title>
</head>
<body>
    
<form method="POST">

<label>Valor:</label>

<input type="number" name = "n1" required>

<br><br>

<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$n1 = $_POST["n1"];
$porcentagem = 0.07;

$total = $n1*$porcentagem;

$valortotal = $n1-$total;


echo "<br> Você tem 7% de desconto, o valor da sua compra é ", $n1 ,", o valor do desconto é ", $total ,", do produto com desconto é ",$valortotal; 


}
?>

</body>
</html>
