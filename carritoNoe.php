<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRITO NOE</title>    
    <!-- Fuentes -->
    <link rel="stylesheet" href="css/iconmon.css">   
    <link rel="stylesheet" href="css/carritoStyle.css">     
    <link rel="stylesheet" href="css/fontTitles.css">
    <link rel="stylesheet" href="css/fontText.css">   
    <link rel="stylesheet" href="css/fontCofe.css">   
    <link rel="stylesheet" href="css/fontLogo.css">      
    <script src="/Js/modernizr-custom.js"></script>
</head>
<body>
    <?php    
    include 'inc/funciones/funciones.php';     
    ?>
    <header>
        <h1>     
            <div id="contenedorLogo">
            <a href="index.php"><figure><img src="media/logoNoe/Noelogo (2).png" alt="LogoNoe"></figure></a>                                
            </div>
            <div class="letrasLogo">                    
            <!-- <a href="index.html">LOS ANIMALES DE</a> -->
            <a href="index.php">noe</a> 
            <a href="index.php">CLÍNICA VETERINARIA</a>                
            </div>
        </h1>
          <nav id="ioMenu">
             <figure id="showMenu" class="ioMenuMovil" onclick="displayMenu()">
                 <span class="icon-dots-horizontal-triple"></span>
             </figure>
             <div id="cardmenu">
                 <figure id="hideMenu" class="ioMenuMovil" onclick="displayMenu()">
                     <span class="icon-cancel-circle"></span>
                 </figure>                     
                 <ul>
                     <!--<li id = "inicioSec"><a href="#">Iniciar Sesion </a></li> -->
                     <li><a href="#">ALIMENTOS</a></li>
                     <li><a href="#">MEDICAMENTOS</a></li>
                     <li><a href="#">BELLEZA</a></li>
                     <li><a href="#">ACCESORIOS</a></li>
                 </ul>
             </div>    
            <ul class="redesSociales">
                <li><a href="https://api.whatsapp.com/send?phone=+573205800120" target="_blank"><span class="icon-whatsapp"></span></a></li>
                <li><a href="https://www.facebook.com/losanimalesdenoe" target="_blank"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/losanimalesdenoe/"target="_blank"><span class="icon-instagram"></span></a></li>
                <li><a href="https://twitter.com/AnimalesNoe"target="_blank"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.tiktok.com/@losanimalesdenoe"target="_blank"><span class="icon-tiktok"></span></a></li>
                <li><a href="https://co.linkedin.com/in/los-animales-de-no%C3%A9-4004a01a5"target="_blank"><span class="icon-linkedin"></span></a></li>
            </ul>        
         </nav>      
         
         <div id="Usuario"><span class="icon-user-circle-o"></span></div>          
         <div id="Busqueda"><span class="icon-inspect"></span></div>
         <h5></h5>         
    </header>
    
   
        <div class="row">         

            <div class="separationResumen"><p>RESUMEN DE PRODUCTOS</p></div>           

            <div class="container">                
                <table class="table">
                  <thead>
                    <tr>
                      <th class="quegana" scope="col">Imagen</th>
                      <th class="quegana2" scope="col">Producto</th>
                      <th class="quegana3" scope="col">Cantidad</th>
                      <th class="quegana4" scope="col">Añadir</th>
                      <th class="quegana5" scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody id="itemsT"></tbody>
                  <tfoot>
                    <tr id="footer">
                      <th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>
                    </tr>
                  </tfoot>
                </table>                
                <div class="row" id="cards"></div>
            </div> 

            <template id="template-carrito">
                <tr>
                  <th scope="row"><img src="" alt=""></th>
                  <td class="sobrePuto">Café</td>
                  <td class="cu">1</td>
                  <td>
                      <button class="botonPlus">
                          +
                      </button>
                      <button class="botonMenus">
                          -
                      </button>
                  </td>
                  <td>$<span></span></td>
                </tr>
            </template>

            <template id="template-footer">
                <th scope="row" colspan="2">Total productos</th>
                <td class="cuc"></td>
                <td>
                    <button class="botonVaciar" id="vaciar-carrito">
                        vaciar todo
                    </button>
                </td>
                <td class="font-weight-bold">$<span>5000</span></td>
            </template>    
            </div>    

            <a href="formulario-compra.php" class="btn">      
                <span class="btnEnvio" data-id ="" >PAGOS NOE</span>              
                
            </a> 

            <div class="separation"><p>RECOMENDADOS POR NOE!</p></div>
            <div class="contenedorOfertasEspeciales">    
            <div class="row">
            <?php              
            $productos = obtenerProductos('oferta');
            foreach ($productos as $producto) :
                $marcas = obtenerMarca($producto['id_marca']);
                $marca = $marcas->fetch_assoc();                
            ?>
                <div class="col-4 buscable" id = "items">
                <a href="previewProduct.php?id_producto=<?php echo $producto['id']; ?>"><img src="/media/ProductosVenta/Productos 550x550/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>"></a>
                    <h4><?php echo $marca['nombre']; ?></h4>
                    <h6><?php echo $producto['nombre']; ?></h6>    
                    <?php if($producto['descuento'] === '1'): ?>   
                    <div class="Costo mOferta">     
                    <p class="precio">$<?php echo $producto['precio']; ?></p>
                    <p class="Oferta"><?php echo $producto['val_descuento']; ?> %</p>  
                    <p class="mPrecio">$<?php echo calcularPorcentaje($producto['precio'], $producto['val_descuento']); ?></p>                     
                    <?php endif; ?>     
                    <?php if($producto['descuento'] === '0'): ?>   
                    <div class="Costo">     
                    <p class="precio">$<?php echo $producto['precio']; ?></p>
                    <p class="Oferta"><?php echo $producto['val_descuento']; ?> %</p>                                         
                    <?php endif; ?>    
                        <span class="icon-favorite">
                        <input type="hidden" class="id-holder" value="<?php echo $producto['id']; ?>"> 
                        <input type="hidden" class="icon-action" value="favorite">
                        </span>
                        <span class="icon-ecommerce1" data-id ="<?php echo $producto['id']; ?>">
                        <input type="hidden" class="id-holder" value="<?php echo $producto['id']; ?>">
                        <input type="hidden" class="icon-action" value="cart">
                        </span>                  
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>    
<footer>
        <div class="footer">
            <div class="containerF">
                <div class="rowF">
                    <div class="footer-col-1">
                        <h3>Descarga Nuestra Aplicacion</h3>
                        <p>Descargar App Para Android y IOS</p>
                        <div class="app-logo">
                            <img src="/media/logoNoe/play-store.png" alt="play-store">
                            <img src="/media/logoNoe/app-store.png" alt="app-store">

                        </div>
                    </div>
                    <div class="footer-col-2">
                        <a href="https://www.google.com/maps/place/Veterinaria+Los+Animales+de+No%C3%A9/@7.8944258,-72.4899487,20z/data=!4m18!1m12!4m11!1m6!1m2!1s0x8e664f467e48639b:0x41bf1635cf64ee02!2sVeterinaria+Los+Animales+de+No%C3%A9,+Cl.+5+%23%2311E-04,+C%C3%BAcuta,+Norte+de+Santander!2m2!1d-72.4898139!2d7.8945402!1m3!2m2!1d-72.4898065!2d7.8945387!3m4!1s0x8e664f467e48639b:0x41bf1635cf64ee02!8m2!3d7.8945402!4d-72.4898139" target="_blank"><img src="/media/logoNoe/NoeLogosinletra.png" alt="logo-white"></a>
                        <p>Animales de Noé atendemos con nuestras mascotas con amor Clinica Veterinaria Estamos Ubicados En: Cl. 5 #11E-04, Cúcuta, Norte de Santander Tel.321 9491097</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Links Importantes</h3>
                        <ul>
                            <li>ALIMENTOS</li>
                            <li>MEDICAMENTOS</li>
                            <li>BELLEZA</li>
                            <li>ACCESORIOS</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="https://api.whatsapp.com/send?phone=+573205800120" target="_blank"><span class="icon-whatsapp"></span></a></li>
                            <li><a href="https://www.facebook.com/losanimalesdenoe" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li><a href="https://www.instagram.com/losanimalesdenoe/" target="_blank"><span class="icon-instagram"></span></a></li>
                            <li><a href="https://twitter.com/AnimalesNoe" target="_blank"><span class="icon-twitter"></span></a></li>
                            <li><a href="https://www.tiktok.com/@losanimalesdenoe" target="_blank"><span class="icon-tiktok"></span></a></li>
                            <li><a href="https://co.linkedin.com/in/los-animales-de-no%C3%A9-4004a01a5" target="_blank"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">©Copyright 2020 - Los Animales de Noé| #AtendemosConAmor</p>
            </div>
        </div>     
</footer>
    <script src="/Js/appcar.js"></script>        
    <script>
        alertSize();

        function alertSize() {
            8
            var myWidth = 0,
                myHeight = 0;
            if (typeof(window.innerWidth) == 'number') {
                //No-IE
                myWidth = window.innerWidth;
                myHeight = window.innerHeight;
            } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
                //IE 6+
                myWidth = document.documentElement.clientWidth;
                myHeight = document.documentElement.clientHeight;
            } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
                //IE 4 compatible
                myWidth = document.body.clientWidth;
                myHeight = document.body.clientHeight;
            }
            var display;
            var card_menu = document.getElementById("cardmenu");
            var fotosCarusel = document.querySelectorAll(".swiper-wrapper div");

            function machetazo1() {
                fotosCarusel.forEach(function(pendiente) {

                    if (myWidth <= 480 && myWidth > 0) {
                        pendiente.style.backgroundSize = "100% 250px"
                        // console.log("W480");
                    }
                    if (myWidth <= 600 && myWidth > 480) {
                        pendiente.style.backgroundSize = "100% 250px"
                        // console.log("W600");
                    }
                    if (myWidth <= 767 && myWidth > 600) {
                        pendiente.style.backgroundSize = "100%px 250px"
                        // console.log("W767");
                    }
                    if (myWidth > 767) {
                        pendiente.style.backgroundSize = "100% 300px"
                        // console.log("W950");
                    }
                });
            }
            window.onresize = machetazo1();
            display = card_menu.style.display;
            if (myWidth < 767) {
                card_menu.style.display = "none";
            } else {
                card_menu.style.display = "block";
            }
        }

        function displayMenu() {
            var display;
            var card_menu = document.getElementById("cardmenu");
            display = card_menu.style.display;
            if (display == "none") {
                card_menu.style.display = "block"
            } else {
                card_menu.style.display = "none"
            }
        }        
    </script>
</body>
</html>