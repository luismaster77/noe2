<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>PreviewProduct</title>   
    <script src="/Js/modernizr-custom.js"></script>
    <link rel="stylesheet" href="css/productPreview.css">
    <link rel="stylesheet" href="css/iconmon.css">    
    <link rel="stylesheet" href="css/fontTitles.css">
    <link rel="stylesheet" href="css/fontText.css">  
    <link rel="stylesheet" href="css/fontCofe.css"> 
    <link rel="stylesheet" href="css/fontLogo.css"> 
</head>
<body>
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
         <div id="Carrito"><span class="icon-purchase"></span></div>  
         <div id="Busqueda"><span class="icon-inspect"></span></div>  
         <h5></h5>      
    </header>    

    <?php 
        include 'inc/funciones/funciones.php';
        //Pregunto si Consegui consegui ID del producto del browser
        if(isset($_GET['id_producto'])) {
            $id_producto = $_GET['id_producto'];
            
            //Obtener Info de producto de la DB
            $productos = obtenerProducto($id_producto);
            $producto = $productos->fetch_assoc();
            $marcas = obtenerMarca($producto['id_marca']);
             $marca = $marcas->fetch_assoc();
        }
    ?>

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img class = "lawea" src="media/ProductosVenta/Productos 550x550/<?php echo $producto['imagen']; ?>" alt="gallery-1" width="100%" id="product-img">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="media/ProductosVenta/Productos 550x550/1109--los-animales-de-noe--chunky-gaticos-pollo-x-500-gr.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="media/ProductosVenta/Productos 550x550/360168--los-animales-de-noe--taste-of-the-wild-prey-turkey-for-dogs-x-12,5-kg.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="media/ProductosVenta/Productos 550x550/1113--los-animales-de-noe--chunky-adultos-razas-pequenas-x-1,5-kg.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="media/ProductosVenta/Productos 550x550/1114--los-animales-de-noe--chunky-adultos-pollo-x-500-gr-empacado.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2" id = "items">                   
                <h4 id="suckit"><?php echo $marca['nombre']; ?></h4>
                <h6 id="suckit"><?php echo $producto['nombre']; ?></h6>                                        
                <?php if($producto['descuento'] === '1'): ?>
                <div class="CostoWP">                   
                <p class="aPrecioP">$<?php echo $producto['precio']; ?><p>   
                <p class="precioP">$<?php echo calcularPorcentaje($producto['precio'], $producto['val_descuento']); ?></p>                  
                <p class="OfertaP"><?php echo $producto['val_descuento']; ?>%off</p>         
                <?php endif; ?>     
                <?php if($producto['descuento'] === '0'): ?>   
                <div class="CostoW">     
                <p class="precioP">$<?php echo $producto['precio']; ?></p>                                                                        
                <?php endif; ?>  
                                          
                <p class="acdp">AGREGAR CANTIDAD DE PRODUCTOS</p>    
                <input class="contadorCantidad" step="1" type="number" min="1" max="99" value="1">
                <a class="btn">      
                <span class="icon-ecommerce1" data-id ="<?php echo $id_producto ?>" ></span>              
                    AGREGAR AL CARRITO
                </a>                                   
                <h3 class="DDP">DETALLES DEL PRODUCTO <i class="icon-lines"></i> </h3>               
                <!--Peligrosoo, pero asi lo hizo el tutorial, toca cambiarlo-->
                <p class="pruebita"><?php echo $producto['descripcion']; ?></p>                
                </div>                 
            </div>
        </div>
    </div> 
    <div class="separation"><p>PRODUCTOS RECOMENDADOS POR NOE</p></div>
    <div class="contenedorOfertasEspeciales">
        <div class="row">
            <?php
            //Se obtienen los productos de la base de datos para agregar a las ofertas   
            $productos = obtenerProductos('oferta');
            foreach ($productos as $producto) :
                $marcas = obtenerMarca($producto['id_marca']);
                $marca = $marcas->fetch_assoc();
                // echo '<pre>';
                // var_dump($producto);
                // var_dump($marca);
                // echo '</pre>';
            ?>
                <div class="col-4 buscable" id = "items">
                <a href="previewProduct.php?id_producto=<?php echo $producto['id']; ?>"><img src="media/ProductosVenta/Productos 550x550/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>"></a>
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
    <!-- FOOTER -->
    <footer>
        <div class="footer">           
            <div class="container">                
                <div class="rowF">                    
                    <div class="footer-col-1">
                        <h3>Descarga Nuestra Aplicacion</h3>
                        <p>Descargar App Para Android y IOS</p>
                        <div class="app-logo">
                            <img src="media/logoNoe/play-store.png" alt="play-store">
                            <img src="media/logoNoe/app-store.png" alt="app-store">
    
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <a href="https://www.google.com/maps/place/Veterinaria+Los+Animales+de+No%C3%A9/@7.8944258,-72.4899487,20z/data=!4m18!1m12!4m11!1m6!1m2!1s0x8e664f467e48639b:0x41bf1635cf64ee02!2sVeterinaria+Los+Animales+de+No%C3%A9,+Cl.+5+%23%2311E-04,+C%C3%BAcuta,+Norte+de+Santander!2m2!1d-72.4898139!2d7.8945402!1m3!2m2!1d-72.4898065!2d7.8945387!3m4!1s0x8e664f467e48639b:0x41bf1635cf64ee02!8m2!3d7.8945402!4d-72.4898139"target="_blank"><img src="/media/logoNoe/NoeLogosinletra.png" alt="logo-white"></a>
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
                            <li><a href="https://api.whatsapp.com/send?phone=+573205800120"target="_blank"><span class="icon-whatsapp"></span></a></li>
                            <li><a href="https://www.facebook.com/losanimalesdenoe" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li><a href="https://www.instagram.com/losanimalesdenoe/" target="_blank"><span class="icon-instagram"></span></a></li>
                            <li><a href="https://twitter.com/AnimalesNoe" target="_blank"><span class="icon-twitter"></span></a></li>
                            <li><a href="https://www.tiktok.com/@losanimalesdenoe"target="_blank"><span class="icon-tiktok"></span></a></li>
                            <li><a href="https://co.linkedin.com/in/los-animales-de-no%C3%A9-4004a01a5"target="_blank"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">©Copyright 2020 - Los Animales de Noé| #AtendemosConAmor</p>
            </div>
        </div>   
        <template id="template-carrito">
        <div class="cssGod">
        <img src="" alt="">
        <b>$</b>
        <p></p>
        <h6></h6>
        <h4></h4>   
        <strong></strong>
        <span class="icon-cross"></span>  
        <span></span>         
        <a href="/carritoNoe.php"><button class ="adn" type="submit" value="Click">Pagar</button></a>
        </div>
       </template>
       <div class="select"></div> 
       
        <script src="Js/overLayPPV.js"></script>  
         
                      
    </footer>    
    
    <script>
                    /* Cambio carrusel Fotos */
        displayMenu();
        var productImg = document.getElementById("product-img");
        var smallImg = document.getElementsByClassName("small-img");
        //Horrible lo se, pero el man lo escribio asi         
        smallImg[0].onclick = function(){
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function(){
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function(){
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function(){
            productImg.src = smallImg[3].src;
        }      
         alertSize();           
        function alertSize() {8
        var myWidth = 0, myHeight = 0;
        if( typeof( window.innerWidth ) == 'number' ) {
            //No-IE
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
            //IE 6+
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            //IE 4 compatible
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }            
            var display;
            var card_menu = document.getElementById("cardmenu");     
            var fotosCarusel = document.querySelectorAll(".swiper-wrapper div"); 
            function machetazo1(){
                fotosCarusel.forEach(function(pendiente){               
                
                if(myWidth <= 480 && myWidth > 0){
                    pendiente.style.backgroundSize="100% 250px" 
                    console.log("W480");
                }       
                if(myWidth <= 600 && myWidth > 480){
                    pendiente.style.backgroundSize="100% 250px" 
                    console.log("W600");
                }          
                if(myWidth  <= 767 && myWidth > 600){
                    pendiente.style.backgroundSize="100%px 250px" 
                    console.log("W767");
                }    
                if(myWidth > 767){
                    pendiente.style.backgroundSize="100% 300px" 
                    console.log("W950");
                }   
            });                        
            } 
            window.onresize = machetazo1();
            display = card_menu.style.display;            
            if(myWidth < 767){
                card_menu.style.display = "none";
            }else{
                card_menu.style.display = "block";
            }  
        }
            function displayMenu(){
            var display;
            var card_menu = document.getElementById("cardmenu");            
            display = card_menu.style.display;
            if(display == "none"){
                card_menu.style.display = "block"
            }else{
                card_menu.style.display = "none"
            }
        }      
    </script>     
</body>
</html>