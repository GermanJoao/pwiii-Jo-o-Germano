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
<form method="POST">
<label>Valor</label>

<br>

<input type="number" name = "v1" required>

<br>

<input type="submit" value = "Calcular">
</form>
<br><br>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$v1 = $_POST["v1"];
$porcentagem = 0.15;

$ValorTotal = $v1*$porcentagem; 
echo "<br> 15% de ", $v1 ," é ",$ValorTotal; 

}
?>
</center> 
</h1>
</body>
</html>