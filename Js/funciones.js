var noti = document.querySelector('h5');

var select = document.querySelector('.select');

var button = document.querySelectorAll('.icon-ecommerce1');

var equis = document.querySelector('.icon-cross');

/*noti.addEventListener('click', carroPoint);

function carroPoint(){   

} */

for(but of button) {    
    but.addEventListener('click', (e)=>{
        /* console.log('estoy haciendo click'); */
        var add = Number(noti.getAttribute('data-count')|| 0 );
        noti.setAttribute('data-count', add + 1);
        noti.classList.add('zero');
        

        //Intentar lo mismo pero sin necesidad del clone
        noti.onclick =()=>{
            select.classList.toggle('display');
        }
        //Crear el Div
        var nuevoObjeto = document.createElement('div');       

        //Obtener URL de la imagen

        var nuevoObjetoImg = e.target.parentNode.parentNode.querySelector('img').getAttribute('src');   /*querySelector('img').getAttribute('src');*/ 
        console.log(nuevoObjetoImg);

        //Obtener descripcion
        var nuevoObjetoDesc = e.target.parentNode.parentNode.querySelector('p').innerText;
        console.log(nuevoObjetoDesc);

        //Obtener Precio
        var nuevoObjetoPrecio = e.target.parentNode.parentNode.querySelector('h6').innerText;
        console.log(nuevoObjetoPrecio);   
        
        //Construir el HTML
        nuevoObjeto.innerHTML = `
            <img src="${nuevoObjetoImg}" alt="">
            <p>${nuevoObjetoDesc}</p>
            <h6>${nuevoObjetoPrecio}</h6>
            <span class="icon-cross"></span>  
            <span></span>
            <a href="previewProduct.html"><button>Pagar</button></a>
        `;
        
        //Agregarlo a la lista
        select.appendChild(nuevoObjeto);


        //Quitar Producto
        var equis = nuevoObjeto.parentNode.lastChild.children[3];
        console.log(equis);

        equis.addEventListener('click', quitoProducto);

        function quitoProducto(){    
            nuevoObjeto.remove(equis);
            var add = Number(noti.getAttribute('data-count')|| 0 );
            noti.setAttribute('data-count', add - 1);
        }  

        //Image animation to cart
        /* 
        var image = e.target.parentNode.parentNode.querySelector('img');
        var span = e.target.parentNode.querySelector('span');
        var s_image = image.cloneNode(false);
        span.appendChild(s_image);
        span.classList.add('active');
        setTimeout(()=>{
            span.removeChild(s_image);
            span.classList.remove('active');            
        }, 500);
         */
    })
}