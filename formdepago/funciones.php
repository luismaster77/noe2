<?php

//Obtener los productors, de acuerdo a la tabla que necesitemos
    //Nota: Para que esto funcione, las otras tablas ya sean de promociones/mas vendidos/etc deben contar con la misma estructura

function obtenerProductos($atributo) {
    include 'conexion.php';
    

    try {

        return $conn->query("SELECT id, nombre, precio, imagen, descuento, val_descuento, id_marca FROM productos WHERE {$atributo} = 1");

    } catch(Exception $e) {
        echo "Error! : " . $e->getMessage();
        return false;
    }
}

function obtenerProducto($id = null){
    include 'conexion.php';

    try {

        return $conn->query("SELECT nombre, precio, descripcion, imagen, descuento, val_descuento, id_marca FROM productos WHERE id = {$id}");

    } catch(Exception $e) {
        echo "Error! : " . $e->getMessage();
        return false;
    }
}




function obtenerMarca($id = null) {
    include 'conexion.php';
    try {

        return $conn->query("SELECT nombre FROM marcas WHERE id = {$id}");

    } catch(Exception $e) {
        echo "Error! : " . $e->getMessage();
        return false;
    }
}


//Ejemplo de ANDREW



function obtenerProductosAndrew($atributo) {
    include 'conexion.php';

    try {

        return $conn->query("SELECT pro.id, pro.nombre, pro.precio, pro.imagen, pro.descuento, pro.val_descuento, marc.nombre marca FROM productos pro JOIN marcas marc ON pro.id_marca = marc.id WHERE {$atributo} = 1");
        //Consulta sql SELECT pro.id, pro.nombre, pro.precio, pro.imagen, pro.descuento, pro.val_descuento, marc.nombre marca FROM productos pro JOIN marcas marc ON pro.id_marca = marc.id WHERE pro.mas_vendido = 1

    } catch(Exception $e) {
        echo "Error! : " . $e->getMessage();
        return false;
    }
}

function calcularPorcentaje($valor, $descuento) {
    $valDescuento = ($valor / 100) * $descuento;
    $nuevoValor = $valor - $valDescuento;
    return $nuevoValor;
}

