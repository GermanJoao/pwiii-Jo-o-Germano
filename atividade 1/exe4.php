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
<label>Valor 1</label>
<br>
<input type="number" name="v1" required>
<br>
<label>Valor 2</label>
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
$v1q = $v1*$v1;
$v2q = $v2*$v2;
$soma = $v1q+$v2q;

echo "<br> O quadrado de ", $v1 ," é ",$v1q; 
echo "<br> O quadrado de ", $v2 ," é ",$v2q; 
echo "<br> E a soma dos dois é ", $soma;
}
?>
</center>
</h1>
</body>
</html>



