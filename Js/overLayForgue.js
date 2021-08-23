const items = document.querySelectorAll('#items'); 


const itemsT = document.querySelector('.select');


const templateCarrito = document.getElementById("template-carrito").content;


const fragment = document.createDocumentFragment();


const noti = document.querySelector('h5');


let overCarrito = {};


document.addEventListener('DOMContentLoaded',() =>{  //Se ejecuta hasta cuando el documento esta totalmente cargado    
    if(localStorage.getItem('carritoForge')){
      overCarrito = JSON.parse(localStorage.getItem('carritoForge')); // para cuando se refresca la pagina se guarde los objetos que estaban en el carrito
      const nCantidad = Object.values(overCarrito).reduce((acc,{cantidad})=> acc + cantidad,0);
      noti.setAttribute('data-count', nCantidad); // Se puede mejorar
      pintarCarrito();
    }
});


for (let entrada of items){    //Como son nodos el queyselector toca asi para poder ponerles el event lisener
    entrada.addEventListener('click', e=>{
        if(e.target.classList.contains('icon-ecommerce1')){     
        addCarrito(e);
        var add = Number(noti.getAttribute('data-count')|| 0 );
        noti.setAttribute('data-count', add + 1);
        noti.classList.add('zero');                 
        }
    });    
}

noti.onclick =()=>{    
    itemsT.classList.toggle('display'); 
}

itemsT.addEventListener('click', e=>{         
    btnAccion(e);

})

const addCarrito = e =>{    
    
    if(e.target.classList.contains('icon-ecommerce1')){     
        
        setCarrito(e.target.parentElement.parentElement);
                   
    } 
    e.stopPropagation();  
}


const setCarrito = objeto => {     
    // if(objeto.childNodes[7].classList.contains('mOferta'))
    const producto = {      
    id: objeto.querySelector('.icon-ecommerce1').dataset.id,
    tittle: objeto.querySelector('h4').textContent,
    descripcion: objeto.querySelector('h6').textContent,
    costo: objeto.querySelector('.precio').textContent,  
    foto:  objeto.querySelector('img').getAttribute('src'),           
    cantidad: 1       
    }   
    if(objeto.childNodes[7].classList.contains('mOferta')){
        producto.costo = objeto.querySelector('.mPrecio').textContent;     
        producto.costo = producto.costo.slice(1,producto.costo.length);  
    }else{
        producto.costo = objeto.querySelector('.precio').textContent;
        producto.costo = producto.costo.slice(1,producto.costo.length); 
        
    }
    if(overCarrito.hasOwnProperty(producto.id)){
        producto.cantidad = parseInt(overCarrito[producto.id].cantidad) + 1;        
    }
    overCarrito[producto.id] = {...producto};  
    pintarCarrito();    
}
const pintarCarrito = () =>{
    
    itemsT.innerHTML='';    
     Object.values(overCarrito).forEach(producto =>{         
        templateCarrito.querySelector('img').src.textContent = producto.foto;                   
        templateCarrito.querySelector('p').textContent = producto.costo;       
        templateCarrito.querySelector('h6').textContent = producto.descripcion;
        templateCarrito.querySelector('.icon-cross').dataset.id = producto.id;
        templateCarrito.querySelector('strong').textContent = 'x' + producto.cantidad;
        templateCarrito.querySelector('h4').textContent = producto.tittle;        
        console.log(templateCarrito.querySelector('img').src = producto.foto);
        const clone = templateCarrito.cloneNode(true);
        fragment.appendChild(clone);           
     })    
    itemsT.appendChild(fragment);  
    
    localStorage.setItem('carritoForge', JSON.stringify(overCarrito)); 
    
    }       
        

    const btnAccion = e => {
        if(e.target.classList.contains('icon-cross')){
            
            const producto = overCarrito[e.target.dataset.id];
            producto.cantidad = overCarrito[e.target.dataset.id].cantidad - 1; 
            overCarrito[e.target.dataset.id] = {...producto};             
            var add = Number(noti.getAttribute('data-count') || nCantidad );
            noti.setAttribute('data-count', add - 1);
            if(producto.cantidad === 0){
                delete overCarrito[e.target.dataset.id];
                
            }      
            pintarCarrito();
        }
        if(e.target.classList){
            console.log('lol omg');
        }
        e.stopPropagation();
    }
    

 
    

   