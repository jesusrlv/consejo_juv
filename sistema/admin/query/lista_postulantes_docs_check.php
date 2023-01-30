<?php
include('qc.php');
// Mx
$id = $rowSQL['id'];
$usuario = "SELECT * FROM usr WHERE id = '$id'";
$resultadoID = $conn->query($usuario);
$rowID = $resultadoID -> fetch_assoc();

$ContarDocs ="SELECT COUNT(documento) AS documento FROM catalogo_documentos";
$resultadoContarDOCS = $conn->query($ContarDocs);
$rowContarDOCS = $resultadoContarDOCS -> fetch_assoc();
$docs = $rowContarDOCS['documento'];

$sqlDocumentos ="SELECT * FROM documentos WHERE id_ext = $id";
$resultadoSQL = $conn->query($sqlDocumentos);
$x = 0;
while($rowSQL = $resultadoSQL->fetch_assoc()){
    $x++;
    
echo'
    <tr>
        <td>'.$x.'</td>
        <td>'.$rowID['nombre'].'</td>
        <td>'.$rowID['curp'].'</td>';
        if(!empty($rowSQL['documento']==1)){
            echo'
            <td><i class="bi bi-check-circle-fill"></i></td>
            ';
        }else{
            echo'
            <td><i class="bi bi-x-circle-fill"></i></td>
            ';
        }
        if(!empty($rowSQL['documento']==2)){
            echo'
            <td><i class="bi bi-check-circle-fill"></i></td>
            ';
        }else{
            echo'
            <td><i class="bi bi-x-circle-fill"></i></td>
            ';
        }
        if(!empty($rowSQL['documento']==3)){
            echo'
            <td><i class="bi bi-check-circle-fill"></i></td>
            ';
        }else{
            echo'
            <td><i class="bi bi-x-circle-fill"></i></td>
            ';
        }
        
echo'
    </tr>
';
}


?>