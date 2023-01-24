<?php

include('qc.php');

$sqlQuery = "SELECT * FROM catalogo_documentos";
$resultadoQuery = $conn -> query($sqlQuery);
$rowQuery = $resultadoQuery ->fetch_assoc();

?>