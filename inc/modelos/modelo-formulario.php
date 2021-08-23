<?php


//Prueba, Imprimir el Post
//die(json_encode($_POST));

//Las variables de Post que podremos necesitar

$correo = $_POST['correo'];
$password = $_POST['password'];
$tipoDePersona = $_POST['tipoDePersona'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipoDeDocumento = $_POST['tipoDeDocumento'];
$documento = $_POST['documento'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$tipo = $_POST['tipo'];

//Revisar valor de Tipo de Persona para cambiar el de Tipo de Doc
if($tipoDePersona === 'PJ') {
    $tipoDeDocumento = 'NT';
}


//Primera verificacion, Para ver si existe o no el correo en Nuestra Base de datos

if ($tipo === 'verificar') {

    //Importar conexion
    include '../funciones/conexion.php';

    try {

        $stmt = $conn->prepare("SELECT correo, password, tipoDePersona, nombre, apellido, tipoDeDocumento, documento, celular, departamento, ciudad, direccion FROM usuarios WHERE correo = ?");
        $stmt->bind_param('s', $correo);
        $stmt->execute();

        $stmt->bind_result($correo_usuario, $password_usuario, $tipoDePersona_usuario, $nombre_usuario, $apellido_usuario, $tipoDeDocumento_usuario, $documento_usuario, $celular_usuario, $departamento_usuario, $ciudad_usuario, $direccion_usuario);
        $stmt->fetch();
        if ($correo_usuario) {
            //Verificamos que el correo Existe ya en nuestra base de datos

            //Preparamos la respuesta y tomamos los datos del servidor, enviandolos de vuelta a JS
            $respuesta = array(
                'respuesta' => 'existe',
                'correo' => $correo_usuario,
                'password' => $password_usuario,
                'tipoDePersona' => $tipoDePersona_usuario,
                'nombre' => $nombre_usuario,
                'apellido' => $apellido_usuario,
                'tipoDeDocumento' => $tipoDeDocumento_usuario,
                'documento' => $documento_usuario,
                'celular' => $celular_usuario,
                'departamento' => $departamento_usuario,
                'ciudad' => $ciudad_usuario,
                'direccion' => $direccion_usuario,
                'tipo' => 'comparar'
            );
        } else {
            //Correo no existe en nuestra base de datos

            //Enviamos una respuesta relacionada
            $respuesta = array(
                'respuesta' => 'no existe',
                'correo' => $correo,
                'tipo' => 'crear'
            );
        } //Fom else no Correo

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        //En caso de un error, tomar la excepcion
        $respuesta = array(
            'error' => $e->getMessage(),
            'respuesta' => $e->getMessage()
        );
    } //Fin catch

    echo json_encode($respuesta);
} //Fin If verificar


if ($tipo === 'crear') {
   
    //Hashear passwords
    $opciones = array(
        'cost' => 10 
     );
 
     $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
   
    //Importar conexion
    include '../funciones/conexion.php';

    try {

        $stmt = $conn->prepare("INSERT INTO usuarios (correo, password, tipoDePersona, nombre, apellido, tipoDeDocumento, documento, celular, departamento, ciudad, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param('ssssssiisss', $correo, $hash_password, $tipoDePersona, $nombre, $apellido, $tipoDeDocumento, $documento, $celular, $departamento, $ciudad, $direccion);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'correo' => $correo,
                'password' => $hash_password,
                'tipoDePersona' => $tipoDePersona,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'tipoDeDocumento' => $tipoDeDocumento,
                'documento' => $documento,
                'celular' => $celular,
                'departamento' => $departamento,
                'ciudad' => $ciudad,
                'direccion' => $direccion,
                'id_insertado' => $stmt->insert_id
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error',
                'correo' => $correo
            );
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        //En caso de un error, tomar la excepcion
        $respuesta = array(
            'error' => $e->getMessage(),
            'respuesta' => $e->getMessage()
        );
    } //Fin catch

    echo json_encode($respuesta);
} //Fub If Crear


if ($tipo === 'modificar') {

    //Importar conexion
    include '../funciones/conexion.php';

    try {

        $stmt = $conn->prepare("UPDATE usuarios set tipoDePersona = ?, nombre = ?, apellido = ?, tipoDeDocumento = ?, documento = ?, celular = ?, departamento = ?, ciudad = ?, direccion = ? WHERE correo = ? ");
        $stmt->bind_param('ssssiissss', $tipoDePersona, $nombre, $apellido, $tipoDeDocumento, $documento, $celular, $departamento, $ciudad, $direccion, $correo);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {

            $respuesta = array(
                'respuesta' => 'correcto',
                'correo' => $correo
            );
        } else {

            $respuesta = array(
                'respuesta' => 'error',
                'correo' => $correo
            );
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        //En caso de un error, tomar la excepcion
        $respuesta = array(
            'error' => $e->getMessage(),
            'respuesta' => $e->getMessage()
        );
    } //Fin catch




    echo json_encode($respuesta);
}

if ($tipo === 'comparar') {

    //Importar conexion
    include '../funciones/conexion.php';

   

    try {

        $stmt = $conn->prepare("SELECT correo, password, tipoDePersona, nombre, apellido, tipoDeDocumento, documento, celular, departamento, ciudad, direccion FROM usuarios WHERE correo = ?");
        $stmt->bind_param('s', $correo);
        $stmt->execute();

        $stmt->bind_result($correo_usuario, $password_usuario, $tipoDePersona_usuario, $nombre_usuario, $apellido_usuario, $tipoDeDocumento_usuario, $documento_usuario, $celular_usuario, $departamento_usuario, $ciudad_usuario, $direccion_usuario);
        $stmt->fetch();
        if ($correo_usuario) {
            //Usuario existe, verificar password
            if (password_verify($password, $password_usuario)) {
                //Contraseña correcta
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'correo' => $correo_usuario,
                    'password' => $password_usuario,
                    'tipoDePersona' => $tipoDePersona_usuario,
                    'nombre' => $nombre_usuario,
                    'apellido' => $apellido_usuario,
                    'tipoDeDocumento' => $tipoDeDocumento_usuario,
                    'documento' => $documento_usuario,
                    'celular' => $celular_usuario,
                    'departamento' => $departamento_usuario,
                    'ciudad' => $ciudad_usuario,
                    'direccion' => $direccion_usuario,
                    'tipo' => 'modificar'
                );
            } else { //Contraseña incorrecta
                $respuesta = array(
                    'respuesta' => 'error contra',
                    'correo' => $correo,
                    'password' => $password,
                    'tipo' => $tipo

                );
            }
        } else { //Correo ioncorrecto
            $respuesta = array(
                'respuesta' => 'error correo',
                'correo' => $correo,
                'password' => $password,
                'tipo' => $tipo

            );
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        //En caso de un error, tomar la excepcion
        $respuesta = array(
            'error' => $e->getMessage(),
            'respuesta' => $e->getMessage()
        );
    } //Fin catch




    echo json_encode($respuesta);
}
