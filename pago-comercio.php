<?php
$url = "https://www.zonapagos.com/Apis_CicloPago/api/InicioPago";

$total = $_POST['totalCompra'];
echo json_encode('precioTotal:'.$total);
$json = "{InformacionPago:{\"flt_total_con_iva\":83000,\"flt_valor_iva\":833,\"str_id_pago\":\"102\",\"str_descripcion_pago\":\"camisa\",\"str_email\":\"soporte9@zonavirtual.com\",\"str_id_cliente\":\"123456789\",\"str_tipo_id\":\"1\",\"str_nombre_cliente\":\"Elsa\",\"str_apellido_cliente\":\"Pito\",\"str_telefono_cliente\":\"319632555648\",\"str_opcional1\":\"opcion 11\",\"str_opcional2\":\"opcion 12\",\"str_opcional3\":\"opcion 13\",\"str_opcional4\":\"opcion 14\",\"str_opcional5\":\"opcion 15\"},\"InformacionSeguridad\":{\"int_id_comercio\":26608,\"str_usuario\":\"Gomezmaldonado26608\",\"str_clave\":\"Gomezmaldonado26608*\",\"int_modalidad\":1},\"AdicionalesPago\":[{\"int_codigo\":111,\"str_valor\":\"0\"},{\"int_codigo\":112,\"str_valor\":\"0\"}],\"AdicionalesConfiguracion\":[{\"int_codigo\":50,\"str_valor\":\"2701\"},{\"int_codigo\":100,\"str_valor\":\"1\"},{\"int_codigo\":101,\"str_valor\":\"1\"},{\"int_codigo\":102,\"str_valor\":\"1\"},{\"int_codigo\":103,\"str_valor\":\"0\"},{\"int_codigo\":104,\"str_valor\":\"https:\/\/www.google.com.co\/\"},{\"int_codigo\":105,\"str_valor\":\"10000\"},{\"int_codigo\":106,\"str_valor\":\"3\"},{\"int_codigo\":107,\"str_valor\":\"0\"},{\"int_codigo\":108,\"str_valor\":\"1\"},{\"int_codigo\":109,\"str_valor\":\"1\"},{\"int_codigo\":110,\"str_valor\":\"0\"}]}";


//echo json_encode('url' .$url);

$get_data = callAPI('POST', $url,json_encode($json));
$data = json_encode($json);
echo json_decode($data);
$response = json_decode($get_data, true);
//$errors = $response['response']['errors'];
//$data = $response['response']['data'][0];

function callAPI($method, $url, $data){
    $curl = curl_init();
    switch ($method){
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
          if ($data)
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'APIKEY: 111111111111111111111',
       'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
 }
?>