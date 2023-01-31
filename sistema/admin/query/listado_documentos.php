<?php
include('qc.php');
$x=0;
$sqlDocs = "SELECT * FROM documentos WHERE id_ext = '$idPostulante' ORDER BY documento ASC";
$resultadoDocs = $conn->query($sqlDocs);
while($rowDocs = $resultadoDocs->fetch_assoc()){
    $x++;
    echo'
    <tr>
        <td>'.$x.'</td>
        <td>'.$rowDocs['documento'].'</td>
        <td><a href="../'.$rowDocs['link'].'"><i class="bi bi-filetype-pdf"></i></a></td>
    </tr>
    ';
}

?>