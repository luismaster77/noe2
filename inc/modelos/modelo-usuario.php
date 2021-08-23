<?php


//Prueba, Imprimir el Post
//die(json_encode($_POST));

//Guardar Datos en variables

$tipo = $_POST['tipo'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];

if($tipo === 'crear') {
    //Codigo para crear los usuarios


    //Hashear passwords
    $opciones = array(
       'cost' => 10 
    );

    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

    //Importar la conexion
    include '../funciones/conexion.php';

    

    try {
        //Realizar la consulta a la base de datos
        
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, password) VALUES (?, ?) ");
        $stmt->bind_param('ss', $usuario, $hash_password);
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            $respuesta = array (
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $tipo 
            );

           

           
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );

          
        }
        $stmt->close();
        $conn->close();




    } catch(Exception $e) {
        //En caso de un error, tomar la excepcion
        $respuesta = array(
            'respuesta' => 'Estoy en catch',
            'error' => $e->getMessage()
        );
       
    }

    
  
   
    echo json_encode($respuesta);



}