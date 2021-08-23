<?php

$conn = new mysqli('localhost', 'root', '', 'validacion');

/* echo "<pre>";
var_dump($conn->ping());
echo "</pre>"; */

if($conn->connect_error) {
    echo $conn->connect_error;
}


$conn->set_charset('utf8');
//Una forma de revisar la conexion, bota mucha informacion

// echo "<pre>";
// var_dump($conn);
// echo "</pre>";

//Mostara true si la conexion muestra, si hay un error mostrara null
// echo "<pre>";
 //var_dump($conn->ping());
// echo "</pre>";