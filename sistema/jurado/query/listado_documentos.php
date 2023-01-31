<?php
include('qc.php');
$x=0;
$sqlDocs = "SELECT * FROM documentos WHERE id_ext = '$idPostulante' ORDER BY documento ASC";
$resultadoDocs = $conn->query($sqlDocs);
while($rowDocs = $resultadoDocs->fetch_assoc()){
    $x++;
    $doc = $rowDocs['documento'];
    $sqlDocumento ="SELECT * FROM catalogo_documentos WHERE id ='$doc'";
    $resultadoDocumento = $conn->query($sqlDocumento);
    $rowDocumento = $resultadoDocumento->fetch_assoc();
    echo'
    <tr class="align-middle">
        <td>'.$x.'</td>
        <td><strong>'.$rowDocumento['documento'].'</strong></td>
        <td class="text-start">'.$rowDocumento['descripcion'].'</td>
        <td><a href="../'.$rowDocs['link'].'"><i class="bi bi-filetype-pdf h4"></i></a></td>';
    if($rowDocs['documento']==1 || $rowDocs['documento']==9){
        echo'
        <td>
            <select class="form-select" aria-label="Default select example" id="calificacion'.$rowDocs['documento'].'" onchange="calificar('.$rowDocs['id_ext'].','.$rowDocs['documento'].')">
                <option selected value="">...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </td>
        <td>
            <span id="calificacionActual'.$rowDocs['documento'].'">'.$rowDocs['calificacion'].'</span>
        </td>
        ';
    }
    echo'
    </tr>
    ';
}

?>