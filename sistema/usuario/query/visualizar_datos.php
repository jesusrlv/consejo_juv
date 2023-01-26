<?php
    include('qc.php');

    $sqlVisualizar = "SELECT * FROM usr WHERE id = '$id'";
    $resultadoVisualizar = $conn -> query($sqlVisualizar);
    $rowVisualizar = $resultadoVisualizar -> fetch_assoc();

    echo'
    <!-- Modal visualizar-->
    <div class="modal fade" id="modalVisualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><span><strong>Nombre: <strong>'.$rowVisualizar['nombre'].'</span></p>
                <p><span><strong>Usuario: <strong>'.$rowVisualizar['usuario'].'</span></p>
                <p><span><strong>CURP: <strong>'.$rowVisualizar['curp'].'</span></p>
                <p><span><strong>Edad: <strong>'.$rowVisualizar['edad'].'</span></p>
                <p><span><strong>Municipio: <strong>'.$rowVisualizar['municipio'].'</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>';
