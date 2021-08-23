eventListeners();


function eventListeners() {

    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
    initialize();
}

function initialize() {
   
    console.log('Entro a initialize');
   
    var correo = document.querySelector('#correo'),
    password = document.querySelector('#password'),
    nombre = document.querySelector('#nombre'),
    apellido = document.querySelector('#apellido'),
    documento = document.querySelector('#documento'),
    celular = document.querySelector('#celular'),
    direccion = document.querySelector('#direccion'),
    tipo = document.querySelector('#tipo');

    

    console.log(correo);
    console.log(password);
    console.log(nombre);
    console.log(apellido);
    console.log(documento);
    console.log(celular);
    console.log(direccion);


    

}

function validarRegistro(e) {

    e.preventDefault();
    console.log('Oprimimos el Boton Sumbit');

    // // var usuario = document.querySelector('#usuario').value,
    // //     password = document.querySelector('#password').value,
    // //     tipo = document.querySelector('#tipo').value;

    //     //Validar que los campos no esten vacios

    //     if(usuario === '' || password === '') {
    //          //La validacion Fallo
    //         Swal.fire({
    //             type: 'error',
    //             title: 'Error!',
    //             text: 'Ambos campos son Obligatorios!',

    //     })
    //     } else {
    //         //Ambos campos son correctos
    //         //console.log('Ambos campos son correctos');

    //         //Ambos Correctos, Ejecutar Ajax

    //         //Crear y añadir los datos
    //         var datos = new FormData();
    //         datos.append('usuario', usuario);
    //         datos.append('password', password);
    //         datos.append('tipo', tipo);

    //         //Prueba para ver datos
    //         // console.log(datos.get('usuario'));
    //         // console.log(datos.get('password'));
    //         // console.log(datos.get('tipo'));


    //         //Crear llamado a Ajax
    //         var xhr = new XMLHttpRequest();

    //         //Abrir Conexion
    //         xhr.open('POST', 'inc/modelos/modelo-usuario.php', true);
            
    //         //Retornar datos

    //         xhr.onload = function(){
    //             if(this.status === 200) {
    //                 //Obtener la respuesta
    //                 var respuesta = JSON.parse(xhr.responseText);
    //                 console.log('Entre a status 200');

    //                 //Ver que nos llego
    //                 console.log(respuesta);

    //                   //Si la respuesta es correcta
    //             if(respuesta.respuesta === 'correcto') {
    //                 //Si es un nuevo usuario
    //                 if(respuesta.tipo === 'crear') {
    //                     Swal.fire({
    //                         type: 'success',
    //                         title: 'Usuario Creado',
    //                         text: 'El usuario se creo correctamente'
                            
    //                       });
    //                 } else if(respuesta.tipo === 'login'){
    //                     Swal.fire({
    //                         type: 'success',
    //                         title: 'Login correcto',
    //                         text: 'Presiona OK para abrir el dashboard'
                            
    //                       }).then(resultado => {
    //                            // console.log(resultado); //Podemos ver el value en true

    //                            if(resultado.value) {
    //                                 window.location.href = 'index.php';
    //                            }
    //                       });
    //                 }
    //             } else {
    //                 //Hubo un error
    //                 Swal.fire({
    //                     type: 'error',
    //                     title: 'Error',
    //                     text: 'Hubo un error'
                        
    //                   })
    //             }
    //             }
    //         }


    //         xhr.send(datos);

    //     }

}