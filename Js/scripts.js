eventlisteners();


//Funcion de los Event Listener
function eventlisteners() {
    //Tomamos todos los iconos de la pagina relacionados con esta clase, P.D Si hay otros objetos que no son los iconos que estan en los productos, necesitaremos agregar una nueva clase a dichos iconos y ponerla aqui
  var favorites = document.querySelectorAll('.icon-favorite');
  var addCarts =  document.querySelectorAll('.icon-ecommerce1');

    //Agregamos el Event listener a cada Uno de esos iconos
    
  for(var favorite of favorites) {
      favorite.addEventListener('click', productoIcono);
  }

  for (var addCart of addCarts) {
      addCart.addEventListener('click', productoIcono);
  }
}



//Funcion de los Iconos de los productos 
function productoIcono(e) {
    e.preventDefault();

    //Prueba Stuff
    console.log("Entre a la funcion");
    console.log(e.target);

    //Intentemos Obtener los Children con la Info que requerimos
    var idProducto = e.target.querySelector('.id-holder').value;
    var accionProducto = e.target.querySelector('.icon-action').value;
    
    //Miremos a ver si los tomo bien
    console.log(idProducto);
    console.log(accionProducto);
}