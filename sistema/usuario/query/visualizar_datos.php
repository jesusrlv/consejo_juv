<?php
    include('qc.php');

    $sqlVisualizar = "SELECT * FROM usr WHERE id = '$id'";
    $resultadoVisualizar = $conn -> query($sqlVisualizar);
    $rowVisualizar = $resultadoVisualizar -> fetch_assoc();
    $municipio = $rowVisualizar['municipio'];

    $sqlMunicipio ="SELECT * FROM municipio WHERE id = '$municipio'";
    $resultadoMunicipio = $conn -> query($sqlMunicipio);
    $rowMunicipio = $resultadoMunicipio -> fetch_assoc();

    echo'
    <!-- Modal visualizar-->
    <div class="modal fade" id="modalVisualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-circle"></i> Datos personales</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="alert alert-secondary" role="alert">
                    <strong>Nombre: </strong>'.$rowVisualizar['nombre'].'
                </div>
                <div class="alert alert-secondary" role="alert">
                    <strong>Usuario: </strong>'.$rowVisualizar['usr'].'
                </div>
                <div class="alert alert-secondary" role="alert">
                    <strong>CURP: </strong>'.$rowVisualizar['curp'].'
                </div>
                <div class="alert alert-secondary" role="alert">
                    <strong>Edad: </strong>'.$rowVisualizar['edad'].'
                </div>
                <div class="alert alert-secondary" role="alert">
                    <strong>Municipio: </strong>'.$rowMunicipio['municipio'].'
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>';
