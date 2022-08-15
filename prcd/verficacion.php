<?php 
require('prcd/conn/qc.php');
sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['username'];
 
    $result = $conn->query(
        'SELECT * FROM usr WHERE curp = "'.strtolower($username).'"'
    );
 
    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong><i class="bi bi-x-circle-fill"></i> ERROR.</strong> Ya se ha registrado este usuario anteriormente.</div>
        
        <style>
            #boton_submit{display:none;}
        </style>
        ';
    } else {
        echo '<div class="alert alert-success"><strong><i class="bi bi-info-circle-fill"></i> CORRECTO.</strong> Usuario disponible.</div>';
    }
}

