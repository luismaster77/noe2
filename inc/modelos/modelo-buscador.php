<?php
//Guardar datos en variables

$tipoProducto = $_POST['productos'];

//Revisar el mandado

if($tipoProducto === 'todos') {
    //Importar conexion
    include '../funciones/conexion.php';

    try {

       $conn->query("SELECT id, nombre, precio, imagen, descuento, val_descuento, id_marca FROM productos");
       $respuesta = $conn;
       $conn->close();

    }  catch(Exception $e) {
        //En caso de un error, tomar la excepcion
        $respuesta = array(
            'respuesta' => 'Estoy en catch',
            'error' => $e->getMessage()
        );
       
    }

    json_encode($respuesta);
}