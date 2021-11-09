<?php

 //Abrir el archivo
 $archivo = 'tablas.txt';
 $abrir = fopen($archivo, 'a+');ación de los productos

 // Descripción precio stock
 $producto1 = 'Lavadora Industrial-1500-20'.chr(13).chr(10);
 $producto2 = 'Televisión 40 pulgadas-3500-30'.chr(13).chr(10);
 $producto3 = 'Refrigeradora 12 pies - 5500 - 10';

//Enviar información de los productos
 fputs($abrir, $producto1);
 fputs($abrir, $producto2);
 fputs($abrir, $producto3);
 fputs($abrir, $producto4);

//Cerrar el archivo
 fclose($abrir);