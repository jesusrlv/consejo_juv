<?php
include('qc.php');
// Mx
$sqlPostulantes ="SELECT * FROM usr WHERE perfil = 1";
$resultadoSQL = $conn->query($sqlPostulantes);
$x = 0;
while($rowSQL = $resultadoSQL->fetch_assoc()){
    $x++;
    $id = $rowSQL['id'];
    $contador = "SELECT COUNT(documento) AS contar FROM documentos WHERE id_ext = '$id'";
    $resultadoContar = $conn->query($contador);
    $rowContar = $resultadoContar -> fetch_assoc();
    $numero = $rowContar['contar'];
    echo'
    <tr>
        <td>'.$x.'</td>
        <td>'.$rowSQL['nombre'].'</td>
        <td>'.$rowSQL['curp'].'</td>
        <td>'.$rowSQL['edad'].'</td>
        <td>'.$rowSQL['municipio'].'</td>
        <td>'.$rowSQL['telefono'].'</td>
        <td>'.$numero.'</td>
    </tr>
';
}


?>