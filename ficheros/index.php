<?php

 //Seleccionando el archivo

 $archivo = "tablas.txt";

 echo '<br>Los productos originales son: <br>';

 listar($archivo);

 //Crear un arreglo de los productos

 $producto = file($archivo);

 //Eliminando el segundo producto

 $posición = 2;

 unset ($producto[$posicion-1]);

 //Reinicializando el arreglo

 $data = array_values($producto);

 //Sobrescribir en el archivo

 file_put_contents($archivo, implode($producto));


 //Imprimir los productos actualizados

 echo '<br>Los productos actualizados son: <br>';

 listar($archivo);


 function listar($archivo){

 $abrir = fopen($archivo, 'r');

 while(($producto=fgets($abrir,filesize($archivo)))!==false){

 	echo $producto.'<br>';

 }

 fclose($abrir);

 }

?>