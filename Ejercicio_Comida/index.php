<?php

include_once 'cabecera.php';
$productos = array(
    array("id" => 1, "nombre" => "Ensalada de frutas", "valor" => 10),
    array("id" => 2, "nombre" => "Hamburguesa", "valor" => 13),
    array("id" => 3, "nombre" => "Bocadillo", "valor" => 7),
    array("id" => 4, "nombre" => "Sandwich", "valor" => 25)
);

$cantidades = array(){
    foreach($productos as $producto){
        if(isset($_POST['cantidad_'.$producto['id']])){
            array_push($cantidades,$_POST['can'])
        }
    }
}
echo '<table>';

foreach($productos as $producto){
    echo '<tr>';
    echo '<td>'.$producto['nombre'].'</td>';
    echo '<td><input type="text" name="cantidad_'.$producto['id'].'" value"><br>';
    echo '<td>'.$producto['valor'].'</td>';
    echo '<td>.0$<td>';
}
?>