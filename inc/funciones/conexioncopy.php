<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=u529154798_AnimalesDeNoe', 'u529154798_Test1', 'Osopanda25');
    echo 'conectado';
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
