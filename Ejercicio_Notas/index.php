<?php
$alumnos = array(
    array("id" => 1, "nombre" => "Luz Lázaro", "promedio" => 17),
    array("id" => 2, "nombre" => "Ángela Torres", "promedio" => 18),
    array("id" => 3, "nombre" => "Fernanda Lázaro", "promedio" => 20),
    array("id" => 4, "nombre" => "Manuel Torres", "promedio" => 19),
    array("id" => 5, "nombre" => "Lucero Mendoza", "promedio" => 14),
    array("id" => 6, "nombre" => "Alejandra Menor", "promedio" => 16),
    array("id" => 7, "nombre" => "Victoria Bautista", "promedio" => 12),
    array("id" => 8, "nombre" => "Francisco Malaver", "promedio" => 11)
);

echo "Alumnos";
$cantidades = array();
foreach ($nombre as $nombres) {

    if (isset($_POST['promedio_' . $nota['id']])) {
        array_push($promedios, $_POST['promedio_' . $nota['id']]);
        $promedios = $_POST['promedio_' . $nota['id']];
        $alumnos = array();
        $alumnos['promedio'] = $promedios;
        $alumnos['promedio'] = (int)$promedios * (int)$nombres['promedio'];
        $promedios[$nombres['id']] = $alumnos;
    }
}

function crearTabla($nombre, $promedios)
{
    echo '<table>';
    echo '<tr>';
    echo '<td>' . $nombre['nombre'] . '</td>';
    echo '<td>' . $nombre['promedio'] . '</td>';
    echo '</tr>';
}
echo '</table>';
