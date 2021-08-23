<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UpTask</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/usuarioStyle.css"> -->
    <link rel="stylesheet" href="css/pago.css">
</head>

<?php
include 'inc/funciones/conexion.php';
include 'inc/funciones/funciones.php';
?>

<body>

    <h2>ANIMALES DE NOE </h2>

    <div class="row">
        <div class="col-75">
            <div class="container">
                <form id="formulario">
                    <div class="row">
                        <div class="col-50">
                            <h3>1. ENVÍO</h3>

                            <div class="campo">

                               
                                <div class="ocultado">
                                    <label for="correo">Correo: </label>
                                    <input type="text" name="correo" id="correo" placeholder="SuCorreo@gmail.com">
                                </div>

                                <div class="ocultado">
                                    <label for="password">Contraseña: </label>
                                    <input type="password" name="password" id="password" placeholder="Contraseña">
                                </div>

                                <div class="ocultado">
                                    <label for="tipoDePersona" id="tipoDePersona"> Tipo de Persona*</label>
                                    <select name="tipoDePersona" id = "tipoDePersona">

                                        <option value="PN">Persona Natural</option>

                                        <option value="PJ">Persona Juridica/ Empresa</option>


                                    </select>
                                </div>

                                <div class="ocultado">
                                    <label for="nombre">Nombre: </label>
                                    <input type="text" name="nombre" id="nombre" placeholder="Primer Nombre">
                                </div>
                                <div class="ocultado">
                                    <label for="apellido">Apellido: </label>
                                    <input type="text" name="apellido" id="apellido" placeholder="Apellidos">
                                </div>
                                <div class="ocultado">
                                    <label for="tipoDeDocumento" id="tipoDeDocumento"> Tipo de documento *</label>
                                    <select name="tipoDeDocumento" id="tipoDeDocumento" >

                                        <option value="CC">(CC) Cédula de ciudadania</option>

                                        <option value="ISO">(ISO) Descripción</option>

                                        <option value="CE">(CE) Cédula de extranjería</option>

                                        <option value="TI">(TI) Tarjeta de identidad</option>

                                        <option value="PP">(PP) Pasaporte</option>

                                        <option value="DE">(DE) Documento de identificacion extranjero</option>

                                    </select>
                                </div>
                                <div class="ocultado">
                                    <label for="documento" id="documentoLabel">Documento: </label>
                                    <input type="text" name="documento" id="documento" placeholder="Numero de documento">
                                </div>
                                <div class="ocultado">
                                    <label for="celular">Celular: </label>
                                    <input type="text" name="celular" id="celular" placeholder="Celular">
                                </div>
                                <div class="ocultado">
                                    <label for="departamento">Departamento: </label>
                                    <input type="text" name="departamento" id="departamento" placeholder="Departamento">
                                </div>
                                <div class="ocultado">
                                    <label for="ciudad">Ciudad: </label>
                                    <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad">
                                </div>
                                <div class="ocultado">
                                    <label for="direccion">Direccion: </label>
                                    <input type="text" name="direccion" id="direccion" placeholder="Direccion">
                                </div>
                            </div>

                            <div class="campo enviar">
                                <input type="hidden" id="tipo" value="verificar">
                                <input type="submit" class="boton" value="Crear cuenta">

                            </div>

                            <div class="row">
                            </div>
                        </div>

                        <!-- <div class="col-50">
                            <h3>2.PAGO</h3>
                            <label for="Tarjetas">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>

                            <label for="tnombre">Nombre titular como aparece en la tarjeta *</label>
                            <input type="text" id="tnombre" name="tnombre" placeholder="Juan Pedro">
                            <label for="tnumero">Número de Tarjeta *</label>
                            <input type="text" id="tnumero" name="tnumero" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Fecha Expiración *</label>
                            <input type="text" id="expmes" name="expmes" placeholder="09-mes">
                            <input type="text" id="expano" name="expano" placeholder="2020-año">
                            <div class="row">
                                <div class="col-50">
                                    <label for="cvv">Código de Seguridad *</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <label for="EnviosPago">
                        <input type="checkbox" checked="checked" name="sameadr"> Envío(3 días hábiles) $16.000
                    </label>                 
                </form>
                <form id="formulario-compra">
                    <div class="col-25">
                        <div class="container">
                            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                            <p><a href="#">CHUNKY POLLO</a> <span class="price">$1500</span></p>
                            <p><a href="#">CHUMKY DINOSAURIO</a> <span class="price">$1500</span></p>
                            <p><a href="#">CHUNKY GODZILLA</a> <span class="price">$1400</span></p>
                            <p><a href="#">CHUNKY SALMON</a> <span class="price">$1200</span></p>
                            <hr>
                            <input type="text" id="totalCompra" name="totalCompra" value="12600" style="border:0;">
                            <p>Total <span class="price" style="color:black"><b>$12600</b></span></p>
                        </div>
                    </div>
                    <input type="submit" value="Pagar" class="btn">
                </form >
            </div>
        </div>
    </div>
    <script src="Js/sweetalert2.all.min.js"></script>
    <script src="Js/formulario-scripts29.js"></script>
    <?php

    //Ver el valor
    // var_dump($actual); 

    //echo '<script src="Js/formulario.js"></script>';
    ?>


</body>

</html>