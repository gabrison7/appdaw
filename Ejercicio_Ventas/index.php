<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>VENTA DE PRODUCTOS</h3>
    Producto <input type="text" name="producto" value="<?php echo $productos ?>" />
    Precio <input type="text" name="precio"><br>
    Cantidad <input type="text" name="cantidad"><br>
    Total <input type="text" name="total"><br>
    Cuotas <select name="cuotas"></select><br>
</body>

</html>

<?php

$productos = array(
    array("id" => 1, "nombre" => "Lavadora", "valor" => 200),
    array("id" => 2, "nombre" => "Frigorífico", "valor" => 350),
    array("id" => 3, "nombre" => "Lavavajillas", "valor" => 150),
    array("id" => 4, "nombre" => "Tostadora", "valor" => 20)
);

function calcularTotal($precio, $cantidad)
{
    $total = $precio * $cantidad;
    return $total;
}

function calcularMonto($precio, $cuotas)
{
    $monto = $precio / $cuotas;
    return $monto;
}
?>