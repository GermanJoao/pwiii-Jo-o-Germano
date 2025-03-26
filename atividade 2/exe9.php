<!--Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor,
divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da
compra.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe9</title>
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

$desconto = (16/100)*$v1;
$parcela = ($v1+$desconto)/10;

echo "<br> o valor individual das parcelas é de: ",$parcela; 
echo "<br> o valor total ao final do pagamento é de: ",$v1+$desconto;
}
?>
</center>
</h1>
</body>
</html>

