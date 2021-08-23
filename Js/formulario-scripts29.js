//Ponemos variables afuera porque las necesitaremos en otras funciones

var correo,
    password,
    tipoDePersona,
    nombre,
    apellido,
    tipoDeDocumento,
    documento,
    celular,
    direccion,
    tipo,
    formularioPago;



eventListeners();
initialize();

formularioPago = document.getElementById('formulario-compra');


function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);

    document.querySelector("select[name='tipoDePersona']").addEventListener('change', cambiarDocumento);

}


function initialize() {

    console.log('Entro a initialize');


    //Conseguir las casillas

    correo = document.querySelector('#correo'),
        password = document.querySelector('#password'),
        tipoDePersona = document.querySelector("select[name='tipoDePersona']"),
        nombre = document.querySelector('#nombre'),
        apellido = document.querySelector('#apellido'),
        tipoDeDocumento = document.querySelector("select[name='tipoDeDocumento']"),
        documento = document.querySelector('#documento'),
        celular = document.querySelector('#celular'),
        departamento = document.querySelector('#departamento'),
        ciudad = document.querySelector('#ciudad'),
        direccion = document.querySelector('#direccion'),
        tipo = document.querySelector('#tipo');


    // console.log('Display del parent');
    // console.log(correo.parentNode.style.display);

    console.log(tipoDePersona);
    console.log(tipoDeDocumento);



    //Escondemos las otras casillas del formulario
    password.parentNode.style.display = 'none';
    tipoDePersona.parentNode.style.display = 'none';
    nombre.parentNode.style.display = 'none';
    apellido.parentNode.style.display = 'none';
    tipoDeDocumento.parentNode.style.display = 'none';
    documento.parentNode.style.display = 'none';
    celular.parentNode.style.display = 'none';
    departamento.parentNode.style.display = 'none';
    ciudad.parentNode.style.display = 'none';
    direccion.parentNode.style.display = 'none';





}

function cambiarDocumento(e) {
    //e.preventDefault();
    // console.log('El valor es:');
    // console.log(e.target.value);
    if (e.target.value === 'PN') {

        

        tipoDeDocumento.parentNode.style.display = '';

        document.querySelector('#documentoLabel').innerHTML = 'Documento';

    } else if (e.target.value === 'PJ') {

       

        tipoDeDocumento.parentNode.style.display = 'none';

        document.querySelector('#documentoLabel').innerHTML = 'NIT';

    }

}

function validarRegistro(e) {

    e.preventDefault();
    console.log('Oprimimos el Boton Sumbit');

    //Tomar el valor del campo
    var correoVal = correo.value.trim();
    var tipoVal = tipo.value;


    //Primera Validacion
    if (tipoVal === 'verificar') {
        console.log('Entramos a verificar');



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


            var xhr = new XMLHttpRequest();

            xhr.open('POST', 'inc/modelos/modelo-formulario.php', true);

            xhr.onload = function () {
                if (this.status === 200) {
                    //Fue exitoso
                    data = xhr.responseText.substr(1493)

                    var respuesta = JSON.parse(xhr.responseText.substr(1493));

                    var newTipo = respuesta.tipo;

                    tipo.value = newTipo;

                    //Deshabilitar casilla correo
                    correo.disabled = true;

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
                        tipoDePersona.parentNode.style.display = '';
                        nombre.parentNode.style.display = '';
                        apellido.parentNode.style.display = '';
                        tipoDeDocumento.parentNode.style.display = '';
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
            var tipoDePersonaVal = tipoDePersona.value;
            var nombreVal = nombre.value;
            var apellidoVal = apellido.value;
            var tipoDeDocumentoVal = tipoDeDocumento.value;
            var documentoVal = documento.value;
            var celularVal = celular.value;
            var departamentoVal = departamento.value;
            var ciudadVal = ciudad.value;
            var direccionVal = direccion.value;

            if (passwordVal === '' || nombreVal === '' || apellidoVal === '' || documentoVal === '' || celularVal === '' || departamentoVal === '' || ciudadVal === '' || direccionVal === '') {
                Swal.fire({
                    type: 'error',
                    title: 'Casillas vacias',
                    text: 'Por favor llena todas las casillas con los datos correspondientes',

                })
            } else {

                var datos = new FormData();

                datos.append('correo', correoVal);
                datos.append('password', passwordVal);
                datos.append('tipoDePersona', tipoDePersonaVal);
                datos.append('nombre', nombreVal);
                datos.append('apellido', apellidoVal);
                datos.append('tipoDeDocumento', tipoDeDocumentoVal);
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

            }

        } else //FIN MODIFICAR

            if (tipoVal === 'crear') {
                console.log('Entramos a crear');

                var passwordVal = password.value.trim();
                var tipoDePersonaVal = tipoDePersona.value;
                var nombreVal = nombre.value;
                var apellidoVal = apellido.value;
                var tipoDeDocumentoVal = tipoDeDocumento.value;
                var documentoVal = documento.value;
                var celularVal = celular.value;
                var departamentoVal = departamento.value;
                var ciudadVal = ciudad.value;
                var direccionVal = direccion.value;

                if (passwordVal === '' || nombreVal === '' || apellidoVal === '' || documentoVal === '' || celularVal === '' || departamentoVal === '' || ciudadVal === '' || direccionVal === '') {

                    Swal.fire({
                        type: 'error',
                        title: 'Casillas vacias',
                        text: 'Por favor llena todas las casillas con los datos correspondientes',

                    })
                } else {

                    var datos = new FormData();

                    datos.append('correo', correoVal);
                    datos.append('password', passwordVal);
                    datos.append('tipoDePersona', tipoDePersonaVal);
                    datos.append('nombre', nombreVal);
                    datos.append('apellido', apellidoVal);
                    datos.append('tipoDeDocumento', tipoDeDocumentoVal);
                    datos.append('documento', documentoVal);
                    datos.append('celular', celularVal);
                    datos.append('departamento', departamentoVal);
                    datos.append('ciudad', ciudadVal);
                    datos.append('direccion', direccionVal);
                    datos.append('tipo', tipoVal);

                    console.log(tipoDePersonaVal);
                    console.log(tipoDeDocumentoVal);

                    var xhr = new XMLHttpRequest();

                    xhr.open('POST', 'inc/modelos/modelo-formulario.php', true);

                    xhr.onload = function () {
                        if (this.status === 200) {
                            //Fue exitoso

                            var respuesta = JSON.parse(xhr.responseText);
                            console.log(respuesta.correo);
                            console.log(respuesta.password);
                            console.log(respuesta.tipoDePersona);
                            console.log(respuesta.nombre);
                            console.log(respuesta.apellido);
                            console.log(respuesta.tipoDeDocumento);
                            console.log(respuesta.documento);
                            console.log(respuesta.celular);
                            console.log(respuesta.departamento);
                            console.log(respuesta.ciudad);
                            console.log(respuesta.direccion);

                        }

                    }

                    xhr.send(datos);

                }

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

                                //Deshabilitar Password
                                password.disabled = true;

                                //Habilitar los espacios
                                tipoDePersona.parentNode.style.display = '';
                                nombre.parentNode.style.display = '';
                                apellido.parentNode.style.display = '';
                                tipoDeDocumento.parentNode.style.display = '';
                                documento.parentNode.style.display = '';
                                celular.parentNode.style.display = '';
                                departamento.parentNode.style.display = '';
                                ciudad.parentNode.style.display = '';
                                direccion.parentNode.style.display = '';

                                //Llenar los espacios
                                setOptions(tipoDePersona, respuesta.tipoDePersona);
                                nombre.value = respuesta.nombre;
                                apellido.value = respuesta.apellido;
                                setOptions(tipoDeDocumento, respuesta.tipoDeDocumento);
                                documento.value = respuesta.documento;
                                celular.value = respuesta.celular;
                                departamento.value = respuesta.departamento;
                                ciudad.value = respuesta.ciudad;
                                direccion.value = respuesta.direccion;

                                //Revisar si es persona juridica
                                if(respuesta.tipoDePersona === 'PJ') {
                                    tipoDeDocumento.parentNode.style.display = 'none'; 
                                }


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

formularioPago.addEventListener('submit',function(e){
    e.preventDefault();
    var datos = new FormData(formularioPago);
    console.log('Vamos a comercio ZONAPAGOS');
    fetch('pago-comercio.php',{
        method:'POST',
        body:datos
    })
    .then(res => res)
    .then(data => {
        console.log(data);
    })

});




//Test Email
function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


//Set selection
function setOptions(selector, value) {
    console.log('Entre a Set Options');
    console.log(value);

    var sel = selector;
    var opts = sel.options;

    for (var opt, j = 0; opt = opts[j]; j++) {
        if (opt.value == value) {
            sel.selectedIndex = j;
            break;
        }
    }
}