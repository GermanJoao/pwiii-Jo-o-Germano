<!-- Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe8</title>
</head>
<body>
    <h1>
<center>

<form method="post">
<label>Valor 1</label>
<br>
<input type="number" name="v1" required>
<br>
<input type="submit" value="Calcular">
</form>
<br><br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$v1 = $_POST["v1"];

$desconto = (27/100)*$v1;
$resul = $v1-$desconto;

echo "<br> o valor com desconto aplicado fica: ",$resul; 
}
?>
</center>
</h1>
</body>
</html>

