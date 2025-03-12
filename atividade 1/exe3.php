<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe3</title>
</head>
<body>
    <h1>
<center>

<form method="post">
<label>Valor</label>
<br>
<input type="number" name="v1" required>
<br>
<input type="submit" value="Calcular">
</form>
<br><br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$v1 = $_POST["v1"];
$porcen1 =(5/100)*$v1;
$porcen2 =(50/100)*$v1;

echo $porcen1 ," e ",$porcen2;
}
?>
</center>
</h1>
</body>
</html>

