<!-- Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste
valor.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe2</title>
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

$resultado = (15/100)*$v1;

echo "<br> 15% de ",$v1," é ",$resultado; 
}
?>
</center>
</h1>
</body>
</html>

