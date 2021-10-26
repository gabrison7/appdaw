$alumnos = array(
array("id" => 1, "nombre" => "Luz Lázaro", "promedio" => 17),
array("id" => 2, "nombre" => "Ángela Torres", "promedio" => 18),
array("id" => 3, "nombre" => "Fernanda Lázaro", "promedio" => 20),
array("id" => 4, "nombre" => "Manuel Torres", "promedio" => 19),
array("id" => 4, "nombre" => "Lucero Mendoza", "promedio" => 14)
array("id" => 4, "nombre" => "Alejandra Menor", "promedio" => 16),
array("id" => 4, "nombre" => "Victoria Bautista", "promedio" => 12),
array("id" => 4, "nombre" => "Francisco Malaver", "promedio" => 11)
);

echo "Alumnos";
    $cantidades = array();
    foreach($productos as $producto){
        
        if(isset($_POST['promedio_'.$nota['id']])){
            //array_push($promedios,$_POST['promedio_'.$nota['id']]);
            $promedios = $_POST['promedio_'.$nota['id']];
            
            $alumnos = array();
            $alumnos['promedio']=$promedios;
            $alumnos['promedio']=(int)$promedios*(int)$nombres['promedio'];
            $promedios[$nombres['id']]=$alumnos;

        }
    }

    function crearTabla($nombres,$promedios){
    echo '<table>';
    foreach($nombres as $nombre){
        $id=$nombre['id'];
       
        $alumnos = $promedios[$id];
        $cantidad = $datos['cantidad'];
        echo '<tr>';
            echo '<td>'.$nombre['nombre'].'</td>';
            echo '<td><input type="text" name="promedio_'.$nombre['id'].'" value="'.$promedios.'"></input> </td>';
            echo '<td>'.$nombre['valor'].'</td>';
            echo '<td>'<div class=""></div>
            <int></int>
            <1promedio></1promedio>
            <int></int>
            <1nombre></1nombre>.'</td>';
        echo '</tr>';
    }
    echo '</table>';

}