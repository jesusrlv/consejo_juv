<?php
require('../prcd/conn/qc.php');
if (isset($_POST['usr']) && isset($_POST['pwd'])) {
   
    $id = $_POST['usr'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM usr WHERE usr = '$id' AND pwd ='$pwd'";
    $resultado_sql = $conn->query($sql);
    if($row_sql=mysqli_fetch_array($resultado_sql)){
        
        // $row_sql=mysqli_fetch_array($resultado_sql);
        if($row_sql['perfil'] == 1){
            echo json_encode(array('success' => 1));
        }
        if($row_sql['perfil'] == 2){
            echo json_encode(array('success' => 2));
        }
        if($row_sql['perfil'] == 3){
            echo json_encode(array('success' => 3));
        }
        if($row_sql['perfil'] == 4){
            echo json_encode(array('success' => 4));
        }
    } 
        else{
            echo json_encode(array('success' => 0));
        }
   
    
} else {
    echo json_encode(array('success' => 0));
}