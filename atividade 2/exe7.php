<!--Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por
meio da seguinte fórmula: volume = comprimento x largura x altura
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe7</title>
</head>
<body>
    <h1>
<center>

<form method="post">
<label>comprimento</label>
<br>
<input type="number" name="comprimento" required>
<br>
<label>largura</label>
<br>
<input type="number" name="largura" required>
<br>
<label>altura</label>
<br>
<input type="number" name="altura" required>
<br>
<input type="submit" value="Calcular volume">
</form>
<br><br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$comp = $_POST["comprimento"];
$larg = $_POST["largura"];
$alt = $_POST["altura"];

$volume = $comp*$larg*$alt;

echo "<br> O volume da caixa é de ", $volume, "cm"; 
}
?>
</center>
</h1>
</body>
</html>



