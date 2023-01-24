<?php

include('qc.php');

$sqlQuery = "SELECT * FROM catalogo_documentos ORDER BY id ASC";
$resultadoQuery = $conn -> query($sqlQuery);
$noCatalogoquery = mysqli_num_rows($resultadoQuery);
// $rowQuery = $resultadoQuery ->fetch_assoc();

while($rowQuery = $resultadoQuery ->fetch_assoc()){
    $idDoc = $rowQuery['id'];
    // query docs usr
    $sqlDocs = "SELECT * FROM documentos WHERE id_ext = '$usr' AND documento = '$idDoc' ORDER BY id ASC";
    $resultadoDocs = $conn -> query($sqlDocs);
    $no_resultados = mysqli_num_rows($resultadoDocs);
    $rowDocs = $resultadoDocs ->fetch_assoc();
    echo'
        <div class="col">
    ';
        if($no_resultados == 0 || empty($no_resultados)){
            echo '
        <div class="card border-danger" style="height:300px; background-color:rgba(250, 6, 22, 0.1);">
        ';
        }
        else if($no_resultados == 1){
            echo '
        <div class="card border-warning" style="height:300px">
            ';
        }
        else if($no_resultados == $noCatalogoquery){
            echo '
        <div class="card border-success" style="height:300px">
            ';
        }
          echo'
            <div class="card-body">
              <h5 class="card-title">'.$rowQuery['documento'].'</h5>
              <h6 class="card-subtitle mb-2 text-muted">'.$rowQuery['subtitulo'].'</h6>
              <p class="card-text">'.$rowQuery['descripcion'].'</p>
              <a href="#" class="card-link" style="text-decoration: none"><i class="bi bi-plus-circle"></i> Cargar documento</a>
              <a href="#" class="card-link" style="text-decoration: none"><i class="bi bi-pencil-square"></i> Editar</a>
            </div>
          </div>
        </div>
    ';
}

?>