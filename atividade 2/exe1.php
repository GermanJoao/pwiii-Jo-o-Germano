<!--  Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua
média na variável media e exiba para o usuário o resultado
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe1</title>
</head>
<body>
    <h1>
<center>

<form method="post">
<label>Valor 1</label>
<br>
<input type="number" name="v1" required>
<br>
<label>Valor 2</label>
<br>
<input type="number" name="v2" required>
<br>
<label>Valor 3</label>
<br>
<input type="number" name="v3" required>
<br>
<input type="submit" value="Calcular">
</form>
<br><br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$v1 = $_POST["v1"];
$v2 = $_POST["v2"];
$v3 = $_POST["v3"];
$media = ($v1+$v2+$v3)/3;

echo "<br> a média é ",$media; 
}
?>
</center>
</h1>
</body>
</html>



