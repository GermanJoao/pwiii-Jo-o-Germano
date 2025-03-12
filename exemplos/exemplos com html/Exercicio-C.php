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
$porcentagem = 0.05;
$porcentagem2 = 0.5;

$total = $n1*$porcentagem;
$total2 = $n1*$porcentagem2;

echo "<br> 5% de ", $n1 ," é ",$total; 
echo "<br> 50% de ", $n1 ," é ",$total2; 

}
?>

</body>
</html>



