<?php

session_start();
if(isset($_POST['submit'])){
    // Obtener los datos del formulario
    $correo = $_POST['email'];
    $contra = $_POST['contraseña'];

    // Obtener el arreglo de usuario guardado en sesión
    $usuario = $_SESSION['usuario'];

    // Comparar los datos ingresados con los datos almacenados
    if($correo == $usuario['email'] && $contra == $usuario['contraseña']){
        // Redireccionar a la página de inicio de sesión
        header('Location: ../../index.html');
        exit;
    }else{
        let error="Credenciales incorrectas";
        echo "<script>alert(`$error`);</script>";
        // Aquí puedes redireccionar al usuario a otra página de inicio de sesión o mostrar un mensaje de error
    }
}
?>