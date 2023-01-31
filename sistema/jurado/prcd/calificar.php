<?php
include('../query/qc.php');

$id = $_POST['id'];
$documento = $_POST['documento'];
$calificacion = $_POST['calificacion'];

$calificar = "UPDATE documentos SET calificacion='$calificacion' WHERE id_ext = '$id' AND documento = '$documento'";
$resultadoCalificar = $conn->query($calificar);

?>