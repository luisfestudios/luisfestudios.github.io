<?php
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $header="From: correo@luisfestudios.me"    .  "\r\n";
    $header.="Reply to: correo@luisfestudios.me"   .  "\r\n";
    $header.= "X-Mailer: PHP/".phpversion();
    $mail= mail($email, $nombre, $mensaje, $header);
    if($mail){
        echo"<h4>¡Mail enviado correctamente!</h4>";
    }else{
        echo"<h4>¡Error en el envío del mail!</h4>";
    }
}
?>
