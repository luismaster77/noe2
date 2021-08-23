//Hasta el momento de lo planeado, esto es para el Index

const registros = document.querySelectorAll('.buscable');

inicializar();
eventlisteners();

function eventlisteners() {
    //Ubicamos la barra de busqueda
    var busquedaInput = document.querySelector('#buscador'); 

    //Agregamos el Event listener
    busquedaInput.addEventListener('input', buscarProductos);
}




function buscarProductos (e) {
    //Test de la barra
   // console.log(e.target.value);

    const expresion = new RegExp(e.target.value);


    registros.forEach(registro => {
        registro.style.display = 'none';
       

        console.log(registro.childNodes[5].textContent.replace(/\s/g, " ").search(expresion) != -1);
     if(registro.childNodes[5].textContent.replace(/\s/g, " ").search(expresion) != -1) {
           registro.style.display = ''; 
     }
        
    }) 
       
    


}

function inicializar() {
    console.log(registros);
    registros.forEach(registro => {
        console.log(registro.style);
        registro.style.display = 'none';
        console.log(registro.childNodes[5].textContent);

       
        
    })
}



