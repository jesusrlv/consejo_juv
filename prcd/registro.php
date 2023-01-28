<?php
require('conn/qc.php');
// if (isset($_POST['usr']) && isset($_POST['pwd'])) {
   
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $municipio = $_POST['municipio'];
    $curp = $_POST['curp'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $perfil = 1;

    $sql = "INSERT INTO usr(
        usr,
        nombre,
        telefono,
        municipio,
        curp,
        edad,
        pwd,
        perfil)
        VALUES(
            '$email',
            '$nombre',
            '$telefono',
            '$municipio',
            '$curp',
            '$edad',
            '$pwd',
            '$perfil'
            )
        ";
    $resultado_sql = $conn->query($sql);
    if($resultado_sql){
        echo json_encode(array('success' => 1));
    }
    else{
        echo json_encode(array('success' => 0));
        
    }
    ?>