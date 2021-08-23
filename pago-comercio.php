<?php
class CurlRequest
{
//$total = $_POST['totalCompra'];
//echo json_encode('precioTotal:'.$total);
function sendPost(){
   //datos a enviar
            $data = array (
               'InformacionPago' => 
               array (
                 'flt_total_con_iva' => 83000,
                 'flt_valor_iva' => 833,
                 'str_id_pago' => '102',
                 'str_descripcion_pago' => 'camisa',
                 'str_email' => 'soporte9@zonavirtual.com',
                 'str_id_cliente' => '123456789',
                 'str_tipo_id' => '1',
                 'str_nombre_cliente' => 'Elsa',
                 'str_apellido_cliente' => 'Pito',
                 'str_telefono_cliente' => '319632555648',
                 'str_opcional1' => 'opcion 11',
                 'str_opcional2' => 'opcion 12',
                 'str_opcional3' => 'opcion 13',
                 'str_opcional4' => 'opcion 14',
                 'str_opcional5' => 'opcion 15',
               ),
               'InformacionSeguridad' => 
               array (
                 'int_id_comercio' => 26608,
                 'str_usuario' => 'Gomezmaldonado26608',
                 'str_clave' => 'Gomezmaldonado26608*',
                 'int_modalidad' => 1,
               ),
               'AdicionalesPago' => 
               array (
                 0 => 
                 array (
                   'int_codigo' => 111,
                   'str_valor' => '0',
                 ),
                 1 => 
                 array (
                   'int_codigo' => 112,
                   'str_valor' => '0',
                 ),
               ),
               'AdicionalesConfiguracion' => 
               array (
                 0 => 
                 array (
                   'int_codigo' => 50,
                   'str_valor' => '2701',
                 ),
                 1 => 
                 array (
                   'int_codigo' => 100,
                   'str_valor' => '1',
                 ),
                 2 => 
                 array (
                   'int_codigo' => 101,
                   'str_valor' => '1',
                 ),
                 3 => 
                 array (
                   'int_codigo' => 102,
                   'str_valor' => '1',
                 ),
                 4 => 
                 array (
                   'int_codigo' => 103,
                   'str_valor' => '0',
                 ),
                 5 => 
                 array (
                   'int_codigo' => 104,
                   'str_valor' => 'https://www.google.com.co/',
                 ),
                 6 => 
                 array (
                   'int_codigo' => 105,
                   'str_valor' => '10000',
                 ),
                 7 => 
                 array (
                   'int_codigo' => 106,
                   'str_valor' => '3',
                 ),
                 8 => 
                 array (
                   'int_codigo' => 107,
                   'str_valor' => '0',
                 ),
                 9 => 
                 array (
                   'int_codigo' => 108,
                   'str_valor' => '1',
                 ),
                 10 => 
                 array (
                   'int_codigo' => 109,
                   'str_valor' => '1',
                 ),
                 11 => 
                 array (
                   'int_codigo' => 110,
                   'str_valor' => '0',
                 ),
               ),
            );
            //url contra la que atacamos
            $ch = curl_init("https://www.zonapagos.com/Apis_CicloPago/api/InicioPago");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            //enviamos el array data
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //obtenemos la respuesta
            $response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
            if(!$response) {
                return false;
            }else{
                return $response;
            }
   }
}
$new = new CurlRequest();
$resultado = $new ->sendPost();
$res = json_decode($resultado);
$url = $res->{'str_url'};
echo "<SCRIPT>window.location='$url';</SCRIPT>";
?>