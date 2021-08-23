<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index Tienda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Links de Swiper requierements & mododernazer-->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="Js/modernizr-custom.js"></script>
    <!-- Fuentes -->
    <link rel="stylesheet" href="css/iconmon.css">
    <link rel="stylesheet" href="css/index.css"> 
    <link rel="stylesheet" href="css/fontTitles.css">
    <link rel="stylesheet" href="css/fontText.css">   
    <link rel="stylesheet" href="css/fontCofe.css">   
    <link rel="stylesheet" href="css/fontLogo.css">  
</head>

<body>
    <!-- <div class="coverSerch"></div> -->
    <?php
    //Cosas a incluir de momento
    include 'inc/funciones/funciones.php';    
    //Prueba de Sessions
    //$lifetime = 600;
    //session_set_cookie_params($lifetime);
    //session_start();
    //$_SESSION['user'] = "Diegani";
    //echo $_SESSION['user'];

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
                    <li><a href="formulario-compra.php">Alimentos</a></li>
                    <li><a href="paginacion.php">Medicamentos</a></li>
                    <li><a href="categorias.php">Belleza</a></li>
                    <li><a href="#">Accesorios</a></li>
                </ul>
            </div>
            <ul class="redesSociales">
                <li><a href="https://api.whatsapp.com/send?phone=+573205800120" target="_blank"><span class="icon-whatsapp"></span></a></li>
                <li><a href="https://www.facebook.com/losanimalesdenoe" target="_blank"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/losanimalesdenoe/" target="_blank"><span class="icon-instagram"></span></a></li>
                <li><a href="https://twitter.com/AnimalesNoe" target="_blank"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.tiktok.com/@losanimalesdenoe" target="_blank"><span class="icon-tiktok"></span></a></li>
                <li><a href="https://co.linkedin.com/in/los-animales-de-no%C3%A9-4004a01a5" target="_blank"><span class="icon-linkedin"></span></a></li>
            </ul>
        </nav>

        <div id="Usuario"><span class="icon-user-circle-o"></span></div>
        <div id="Carrito"><span class="icon-purchase"></span></div>
        <div id="Busqueda"><span class="icon-inspect"></span></div>
        <h5></h5>

    </header>
    <!-- Slider main container -->
    <div class="swiper-container swiper1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper swiper-wrapper1">
            <!-- Slides -->
            <div class="swiper-slide swiper-slide1">
            <div class="imgBx1"><img src="media/fotosSlider/Banner Tienda Web-13.jpg" alt=""></div>
            </div>
            <div class="swiper-slide swiper-slide1">
                <div class="imgBx1"><img src="media/fotosSlider/Banner Tienda Web-13.jpg" alt=""></div>
            </div>
            <div class="swiper-slide swiper-slide1">
                <div class="imgBx1"><img src="media/fotosSlider/Banner Tienda Web-13.jpg" alt=""></div>
            </div>
            <div class="swiper-slide swiper-slide1">
                <div class="imgBx1"><img src="media/fotosSlider/Banner Tienda Web-13.jpg" alt=""></div>
            </div>
            <div class="swiper-slide swiper-slide1">
                <div class="imgBx1"><img src="media/fotosSlider/Banner Tienda Web-13.jpg" alt=""></div>
            </div>
            <div class="swiper-slide swiper-slide1">
                <div class="imgBx1"><img src="media/fotosSlider/Banner Tienda Web-13.jpg" alt=""></div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <!-- SWIPER 2 -->
    <div class="swiper-container swiper2">
            <div class="swiper-wrapper swiper-wrapper2">
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Chunky Logos Alimento Concentrado-08.png" alt=""></div></div>
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Country Value Logos Alimento Concentrado-11.png" alt=""></div></div>
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Diamond Naturals Logos Alimento Concentrado-18.png" alt=""></div></div>
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Equilibrio Logos Alimento Concentrado-14.png" alt=""></div></div>
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Hill's Logos Alimento Concentrado-10.png" alt=""></div></div>
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Max Total Logos Alimento Concentrado-01.png" alt=""></div></div>                             
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Nutra Nuggets Logos Alimento Concentrado-05.png" alt=""></div></div>                             
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/ProPlan Logos Alimento Concentrado-04.png" alt=""></div></div>                             
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/Royal Logos Alimento Concentrado-12.png" alt=""></div></div>                             
            <div class="swiper-slide swiper-slide2"><div class="imgBx"><img src="media/marcasConcentrado/TasteOfTheWild Logos Alimento Concentrado-09.png" alt=""></div></div> 
            </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- barra azul de ofertas -->
    <div id="ofertasEspeciales"></div>
    <!-- BUSCADOR DE PRUEBA -->
    <div class="boxBusqueda">  
    <input type="text" id="buscador" class="buscador" placeholder="Buscar productos..." >
    <span class="icon-inspect"></span>
    </div>
    <!-- Apartado ofertasEspeciales -->
    <div class="separation"><p>BUSQUEDA DE PRODUCTOS</p></div>
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
                // echo '</pre>';+
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
    <div class="separationR"><p>LO MÁS VENDIDO</p></div>
    <div class="contenedorOfertasEspeciales">
        <div class="row">
            <?php
            //Se obtienen los productos de la base de datos para agregar a las ofertas   
            $productos = obtenerProductos('mas_vendido');
            foreach ($productos as $producto) :
                $marcas = obtenerMarca($producto['id_marca']);
                $marca = $marcas->fetch_assoc();

            ?>
                <div class="col-4" id = "items">
                <a href="previewProduct.php?id_producto=<?php echo $producto['id']; ?>"><img src="media/ProductosVenta/Productos 550x550/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>"></a>
                    <h4><?php echo $marca['nombre']; ?></h4>
                    <h6><?php echo $producto['nombre']; ?></h6>                   
                    <div class="Costo">                    
                    <p class="precio">$<?php echo $producto['precio']; ?></p>
                        <p class="Oferta">10%off</p>  
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
    <div class="separation"><p>RECOMENDACIONES</p></div>
    <div class="contenedorOfertasEspeciales">
        <div class="row">                        
            <?php
            //Se obtienen los productos de la base de datos para agregar a las ofertas   
            $productos = obtenerProductos('recomendacion');
            foreach ($productos as $producto) :
                $marcas = obtenerMarca($producto['id_marca']);
                $marca = $marcas->fetch_assoc();

            ?>
                <div class="col-4" id = "items">
                <a href="previewProduct.php?id_producto=<?php echo $producto['id']; ?>"><img src="media/ProductosVenta/Productos 550x550/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>"></a>
                    <h4><?php echo $marca['nombre']; ?></h4>
                    <h6><?php echo $producto['nombre']; ?></h6>                   
                    <div class="Costo">                    
                    <p class="precio">$<?php echo $producto['precio']; ?></p>
                        <p class="Oferta">10%off</p>  
                        <span class="icon-favorite">
                        <input type="hidden" class="id-holder" value="<?php echo $producto['id']; ?>" >
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
    <!-------- Footer ------------>
    <footer>
        <div class="footer">
            <div class="container">
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

        <a href="carritoNoe.php"><button class ="adn" type="submit" value="Click">Pagar</button></a>
        </div>
       </template>
        
        <div class="select"></div> 
        
        <script src="Js/buscador.js"></script>
        <script src="Js/overLayForgue.js"></script>

    </footer>
    
   
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

        var mySwiper1 = new Swiper('.swiper1', {
            slidesPerView: 1,
            spaceBetween: 0,
            slidesPerGroup: 1,
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
           
            // Optional parameters
            direction: 'horizontal',
            //loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
             autoplay: {
                 delay: 5000,
                 disableOnInteraction: false
            },
            
        })
        var mySwiper2 = new Swiper('.swiper2', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            spaceBetween: 1,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 0,
                modifier: 10,
                slideShadows: false,
            },
            autoplay: {
                delay: 4300,
                disableOnInteraction: false
            },
        });
    </script>



</body>

</html>