<?php
    $servidor = "mysql:dbname=tallerbicicletas;host=localhost";
    $user = "root";
    $pass = "";
    try {
        //creamos nuevos PHP data objet

        $pdo = new PDO($servidor,$user,$pass);
        //echo '<h3> Conexion con BD exitosa </h3>';
    } catch (PDOExeption $e) {
        echo "Conexion fallida" .$e->getMessage();
    }


?>