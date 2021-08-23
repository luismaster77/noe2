//Ponemos variables afuera porque las necesitaremos en otras funciones

var correo,
    password,
    nombre,
    apellido,
    documento,
    celular,
    direccion,
    tipod,
    tipop,
    tipo;



eventListeners();
initialize();

function eventListeners() {

    document.querySelector('#formulario').addEventListener('submit', validarRegistro);

}


function initialize() {

    console.log('Entro a initialize');


    //Conseguir las casillas

        correo = document.querySelector('#correo'),        
        password = document.querySelector('#password'),
        nombre = document.querySelector('#nombre'),
        apellido = document.querySelector('#apellido'),
        documento = document.querySelector('#documento'),
        celular = document.querySelector('#celular'),
        departamento = document.querySelector('#departamento'),
        ciudad = document.querySelector('#ciudad'),
        direccion = document.querySelector('#direccion'),
        tipo = document.querySelector('#tipo'),
        tipod = document.querySelector('#tipoDeDocumento'),
        tipop = document.querySelector('#tipoP');

        


    // console.log('Display del parent');
    // console.log(correo.parentNode.style.display);


    // console.log(correo);
    // console.log(password);
    // console.log(nombre);
    // console.log(apellido);
    // console.log(documento);
    // console.log(celular);
    // console.log(direccion);

    //Escondemos las otras casillas del formulario
    password.parentNode.style.display = 'none';
    nombre.parentNode.style.display = 'none';
    apellido.parentNode.style.display = 'none';
    documento.parentNode.style.display = 'none';
    celular.parentNode.style.display = 'none';
    departamento.parentNode.style.display = 'none';
    ciudad.parentNode.style.display = 'none';
    direccion.parentNode.style.display = 'none';
    tipod.parentNode.style.display = 'none';
    tipop.parentNode.style.display = 'none';   
  
}

function validarRegistro(e) {

    e.preventDefault();
    console.log('Oprimimos el Boton Sumbit');

    //Tomar el valor del campo
    var correoVal = correo.value.trim();
    var tipoVal = tipo.value;


    //Primera Validacion
    if (tipoVal === 'verificar') {
        



        //Validar que el correo tenga algo, esto hay que mejorarlo luego para asegurarnos que es un correo
        if (correoVal === '') {
            //La validacion Fallo
            Swal.fire({
                type: 'error',
                title: 'Error!',
                text: 'Necesitas de un correo',

            })
        } else if (isEmail(correoVal)) {
            //Es un correo, mandar a ejecutar Ajax para la validacion
            
            var datos = new FormData();

            datos.append('correo', correoVal);
            datos.append('tipo', tipoVal);

        
        for (var value of datos.values()) {
                console.log(value);
            } 
                        


            var xhr = new XMLHttpRequest();

            xhr.open('POST', 'inc/modelos/modelo-formulario.php', true);

            
            xhr.onload = function () {
                if (this.status === 200) {            
                    //Fue exitoso      

                    var respuesta = JSON.parse(xhr.responseText);

                    var newTipo = respuesta.tipo;

                    tipo.value = newTipo;                

                    
                    //Vamos a ver que respuesta llego
                    if (respuesta.respuesta === 'existe') {
                        //Correo existe

                        //Habilitar casilla para confirmar contraseña
                        password.parentNode.style.display = '';

                        console.log('El correo existe en la base de datos');
                        Swal.fire({
                            type: 'success',
                            title: 'Correo Existente',
                            text: 'Por favor Dijiste su contraseña para continuar',

                        })


                    } else {

                        //Correo no existia

                        //Rehabilitar casillas
                        password.parentNode.style.display = '';
                        nombre.parentNode.style.display = '';
                        apellido.parentNode.style.display = '';
                        documento.parentNode.style.display = '';
                        celular.parentNode.style.display = '';
                        departamento.parentNode.style.display = '';
                        ciudad.parentNode.style.display = '';
                        direccion.parentNode.style.display = '';


                        console.log('El correo no existe en la base de datos');


                        Swal.fire({
                            type: 'success',
                            title: 'Nuevo correo',
                            text: 'Por favor llenar los datos a continuacion',

                        })

                    }


                    tipo.value = respuesta.tipo;



                } //Fin status 200
            }

            xhr.send(datos);

        } //Termina else de correo
        else {
            //Correo no valido
            Swal.fire({
                type: 'error',
                title: 'Error!',
                text: 'Necesitas de un correo valido',

            })
        }


    } else //FIN VERIFICAR


        if (tipoVal === 'modificar') {
            console.log('Entramos a modificar');
            //Tomamos los otros datos
            var passwordVal = password.value.trim();
            var nombreVal = nombre.value;
            var apellidoVal = apellido.value;
            var documentoVal = documento.value;
            var celularVal = celular.value;
            var departamentoVal = departamento.value;
            var ciudadVal = ciudad.value;
            var direccionVal = direccion.value;

            var datos = new FormData();

            datos.append('correo', correoVal);
            datos.append('password', passwordVal);
            datos.append('nombre', nombreVal);
            datos.append('apellido', apellidoVal);
            datos.append('documento', documentoVal);
            datos.append('celular', celularVal);
            datos.append('departamento', departamentoVal);
            datos.append('ciudad', ciudadVal);
            datos.append('direccion', direccionVal);
            datos.append('tipo', tipoVal);


            var xhr = new XMLHttpRequest();

            xhr.open('POST', 'inc/modelos/modelo-formulario.php', true);

            xhr.onload = function () {
                if (this.status === 200) {
                    //Fue exitoso

                    var respuesta = JSON.parse(xhr.responseText);




                }

            }

            xhr.send(datos);

        } else //FIN MODIFICAR

            if (tipoVal === 'crear') {
                console.log('Entramos a crear');

                var passwordVal = password.value.trim();
                var nombreVal = nombre.value;
                var apellidoVal = apellido.value;
                var documentoVal = documento.value;
                var celularVal = celular.value;
                var departamentoVal = departamento.value;
                var ciudadVal = ciudad.value;
                var direccionVal = direccion.value;

                var datos = new FormData();

                datos.append('correo', correoVal);
                datos.append('password', passwordVal);
                datos.append('nombre', nombreVal);
                datos.append('apellido', apellidoVal);
                datos.append('documento', documentoVal);
                datos.append('celular', celularVal);
                datos.append('departamento', departamentoVal);
                datos.append('ciudad', ciudadVal);
                datos.append('direccion', direccionVal);
                datos.append('tipo', tipoVal);


                var xhr = new XMLHttpRequest();

                xhr.open('POST', 'inc/modelos/modelo-formulario.php', true);

                xhr.onload = function () {
                    if (this.status === 200) {
                        //Fue exitoso

                        var respuesta = JSON.parse(xhr.responseText);
                        console.log(respuesta.correo);
                        console.log(respuesta.password);
                        console.log(respuesta.nombre);
                        console.log(respuesta.apellido);
                        console.log(respuesta.documento);
                        console.log(respuesta.celular);
                        console.log(respuesta.departamento);
                        console.log(respuesta.ciudad);
                        console.log(respuesta.direccion);

                    }

                }

                xhr.send(datos);
            } else //FIN CREAR

                if (tipoVal === 'comparar') {
                    console.log('Entramos a Comparar contraseñas');

                    var correoVal = correo.value.trim();
                    var passwordVal = password.value.trim();


                    var datos = new FormData();

                    console.log('Vamos a enviar' + correoVal);
                    datos.append('correo', correoVal);
                    datos.append('password', passwordVal);
                    datos.append('tipo', tipoVal);

                    var xhr = new XMLHttpRequest();

                    xhr.open('POST', 'inc/modelos/modelo-formulario.php', true);

                    xhr.onload = function () {
                        if (this.status === 200) {
                            //Fue exitoso

                            var respuesta = JSON.parse(xhr.responseText);

                            var newTipo = respuesta.tipo;

                            tipo.value = newTipo;





                            if (respuesta.respuesta === 'correcto') {

                                //Habilitar los espacios

                                nombre.parentNode.style.display = '';
                                apellido.parentNode.style.display = '';
                                documento.parentNode.style.display = '';
                                celular.parentNode.style.display = '';
                                departamento.parentNode.style.display = '';
                                ciudad.parentNode.style.display = '';
                                direccion.parentNode.style.display = '';

                                //Llenar los espacios
                                nombre.value = respuesta.nombre;
                                apellido.value = respuesta.apellido;
                                documento.value = respuesta.documento;
                                celular.value = respuesta.celular;
                                departamento.value = respuesta.departamento;
                                ciudad.value = respuesta.ciudad;
                                direccion.value = respuesta.direccion;


                            } else {

                                Swal.fire({
                                    type: 'error',
                                    title: 'Error',
                                    text: 'Correo o Contraseña Incorrectos'

                                })
                            }

                        }

                    }

                    xhr.send(datos);

                } //FIN COMPARAR
}



//Test Email
function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}