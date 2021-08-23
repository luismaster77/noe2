<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con = mysqli_connect('localhost', 'u529154798_Test1', 'Osopanda25', 'u529154798_AnimalesDeNoe');
    mysqli_select_db($con, 'u529154798_AnimalesDeNoe');

    //definir cuantos resultados se quiere para cada pagina 
    $resultados_por_pagina = 2;


    //Definir el nuemro total de resultados que estan almacenados en la base de datos
    $sql = "SELECT * FROM productos";
    $resultados = mysqli_query($con,$sql);
    echo $nuemro_de_resultados = mysqli_num_rows(($resultados));


    //Si se quiere mostrar todos los resutados se necesita hacer un while
    /* while($row = mysqli_fetch_array($resultados)){
        echo $row['id'] . '' . $row['nombre'] . '' . $row['imagen'] . '' . $row['precio'] . '<br>';
    } */


    //Vamos a defirnir el nuemero de paginas disponibles
    /* echo */ $numero_de_paginas = ceil($nuemro_de_resultados / $resultados_por_pagina); //ceil es para aproximar el numero al entero siguiente


    //En este paso se checkea en que pagina esta el visitante actualmente
    if(!isset($_GET['page'])){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }

    
    //Determinar el limite del sql empezando por el numero de los resultados que estan en la pagina que esta mostrando formula cuaderno 
    $pagina_primer_resultado = ($page - 1) * $resultados_por_pagina;

    // Traer los resultados seleccionados de la base de datos y mostrarlos en la pagona
    $sql = "SELECT * FROM productos LIMIT " . $pagina_primer_resultado . ' , ' .  $resultados_por_pagina;
    $resultados = mysqli_query($con,$sql); 

    while($row = mysqli_fetch_array($resultados)){
        echo $row['id'] . '' . $row['nombre'] . '' . $row['imagen'] . '' . $row['precio'] . '<br>';
    }


    //Display de links for each pages
    for($pagina=1;$pagina<=$numero_de_paginas; $pagina++){
        echo '<a href="paginacion.php?page=' . $pagina .  ' ">' . $pagina . '</a>  ';
    }


    ?>
</body>
</html>