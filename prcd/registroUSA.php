<?php
require('conn/qc.php');
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'email/prcd/email/Exception.php';
        require 'email/prcd/email/PHPMailer.php';
        require 'email/prcd/email/SMTP.php';
// if (isset($_POST['usr']) && isset($_POST['pwd'])) {
   
    $nombre = $_POST['nombreUSA'];
    $telefono = $_POST['telefonoUSA'];
    $curp = $_POST['curpUSA'];
    $edad = $_POST['edadUSA'];
    $email = $_POST['emailUSA'];
    $pwd = $_POST['pwdUSA'];
    $perfil = 1;

    $sql = "INSERT INTO usr(
        usr,
        nombre,
        telefono,
        curp,
        edad,
        pwd,
        perfil)
        VALUES(
            '$email',
            '$nombre',
            '$telefono',
            '$curp',
            '$edad',
            '$pwd',
            '$perfil'
            )
        ";
        // email
        $mail = new PHPMailer(true);

        try {

            //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        //$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->Host = 'mailc76.carrierzone.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username = 'injuventud@zacatecas.gob.mx';                     // SMTP username
        $mail->Password = 'A61q%9zev%z!W';                               // SMTP password
        $mail->SMTPSecure = 'SSL';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to 587 465
        
            //Recipients
            $mail->setFrom('injuventud@zacatecas.gob.mx', 'CONSEJO JUVENIL - INJUVENTUD');
            $mail->addAddress($email, $nombre);     // Add a recipient
        
            // Content
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';                                  // Set email format to HTML
            $mail->Subject = 'Proceso finalizado';
            $mail->Body    = 'Te has registrado a la plataforma del Consejo Juvenil del Estado de Zacatecas.
            <br>
            <br>
            Usuario: '.$email.'
            Contraseña: '.$pwd.'
            
            <br><br><b>INJUVENTUD</b>';
            $mail->AltBody = 'Mensaje registro';
        
            $mail->send();

            

        }catch (Exception $e) {
            echo "
           
            Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }  
    $resultado_sql = $conn->query($sql);
    if($resultado_sql){
        echo json_encode(array('success' => 1));
        
    }
    else{
        echo json_encode(array('success' => 0));
        
    }

    
    ?>