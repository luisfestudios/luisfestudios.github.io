<?php
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $header="From: noreply@ejemplo.hola"    .  "\r\n";
    $header.="Reply to: noreply@ejemplo.hola"   .  "\r\n";
    $header.= "X-Mailer: PHP/".phpversion();
    $mail= mail($email, $nombre, $mensaje, $header);
    if($mail){
        echo"<h4>¡Mail enviado correctamente!</h4>";
    }else{
        echo"<h4>¡Error en el envío del mail!</h4>";
    }
}
?>
