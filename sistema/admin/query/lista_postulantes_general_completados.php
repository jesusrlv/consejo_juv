<?php
include('qc.php');
// Mx
$sqlPostulantes ="SELECT * FROM usr WHERE perfil = 1 AND id  = '$idQ'";
$resultadoSQL = $conn->query($sqlPostulantes);
$x = 0;
while($rowSQL = $resultadoSQL->fetch_assoc()){
    $x++;
    $idDocs = $rowSQL['id'];
    $contador = "SELECT COUNT(documento) AS contar FROM documentos WHERE id_ext = '$idDocs'";
    $resultadoContar = $conn->query($contador);
    $rowContar = $resultadoContar -> fetch_assoc();
    $numero = $rowContar['contar'];
    if($numero==9){
    echo'
    <tr>
        <td>'.$x.'</td>
        <td>'.$rowSQL['nombre'].'</td>
        ';    
    echo'
        <td>
            <a href="listado_docs.php?id='.$rowSQL['id'].'">';
        if ($numero == 0){
            echo'
            <span class="badge rounded-pill text-bg-danger">
            ';
        }
        else if ($numero == 1 || $numero == 2 || $numero == 3 || $numero == 4 || $numero == 5 || $numero == 6 || $numero == 7 || $numero == 8){
            echo'
            <span class="badge rounded-pill text-bg-warning">
            ';
        }
        else if ($numero == 9){
            echo'
            <span class="badge rounded-pill text-bg-primary">
            ';
        }
            echo'
                '.$numero.'
            </span>
            </a>
        </td>';
    // $calificacionProm = "SELECT * FROM calificacion WHERE id_ext='$idDocs'";
    $calificacionProm = "SELECT AVG(calificacion) as promedio FROM calificacion WHERE id_ext='$idDocs'";
    $resultadoProm = $conn->query($calificacionProm);
    // $promedio=0;  
    // while($rowProm = $resultadoProm->fetch_assoc()){
    $rowProm = $resultadoProm->fetch_assoc();
        // $promedio=$promedio+$rowProm['calificacion'];
        $promedio=$rowProm['promedio'];
        $numero = 2;
    // }
    // $totalPromedio = $promedio / $numero;
    echo'
        <td>
            '.round($promedio,PHP_ROUND_HALF_DOWN).'
        </td>'; 


        echo'

    </tr>
    <tr>
        <td colspan="4">
            <div class="accordion accordion-flush" id="accordionFlushExample'.$rowSQL['id'].'">
                <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne'.$rowSQL['id'].'" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="bi bi-123 me-2"></i> Descripción de calificaciones
                    </button>
                </h2>
                <div id="flush-collapseOne'.$rowSQL['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample'.$rowSQL['id'].'">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first items accordion body.</div>
                </div>
                </div>
                
            </div>
        </td>
    </tr>
';
}
}


?>