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

<label >Valor 2:</label>

<input type="number" name = "n2" required>

<br><br>

<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$q1 = $n1*$n1;
$q2 = $n2*$n2;

$total = $q1+$q2;

echo "<br> O quadrado de ", $n1 ," é ",$q1; 
echo "<br> O quadrado de ", $n2 ," é ",$q2; 
echo "<br> E a soma dos dois é ", $total; 

}
?>

</body>
</html>
