<!--Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por
um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la,
calcule e imprima o consumo médio de combustível. Fórmula: Consumo médio = Km /
litros
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe4</title>
</head>
<body>
    <h1>
<center>

<form method="post">
<label>distancia em kilometros</label>
<br>
<input type="number" name="v1" required>
<br>
<label>combustivel em litros</label>
<br>
<input type="number" name="v2" required>
<br>
<input type="submit" value="Calcular">
</form>
<br><br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$v1 = $_POST["v1"];
$v2 = $_POST["v2"];

$consumo = $v1/$v2;

echo "<br> O consumo médio é de: ",$consumo,"L"; 

}
?>
</center>
</h1>
</body>
</html>



