<?php
include('qc.php');
// USA
$sqlPostulantesUSA ="SELECT * FROM usr WHERE perfil = 4";
$resultadoSQLUSA = $conn->query($sqlPostulantesUSA);
$x = 0;
while($rowSQLUSA = $resultadoSQLUSA->fetch_assoc()){
    $x++;
    $idDocs = $rowSQLUSA['id'];
    $contador = "SELECT COUNT(documento) AS contar FROM documentos WHERE id_ext = '$idDocs'";
    $resultadoContar = $conn->query($contador);
    $rowContar = $resultadoContar -> fetch_assoc();
    $numero = $rowContar['contar'];
    echo'
    <tr>
        <td>'.$x.'</td>
        <td>'.$rowSQLUSA['nombre'].'</td>
        <td>'.$rowSQLUSA['curp'].'</td>
        <td>'.$rowSQLUSA['edad'].'</td>
        <td>'.$rowSQLUSA['telefono'].'</td>
        <td>'.$numero.'</td>
    </tr>
';
}

?>