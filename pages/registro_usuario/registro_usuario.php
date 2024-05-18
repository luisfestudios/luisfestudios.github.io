<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if(isset($_POST['submit'])){
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

   
        // Crear un arreglo con los datos del usuario
        $usuario = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'contraseña' => $contraseña
        );

        // Guardar el arreglo en sesión (puedes guardar en una base de datos en lugar de en sesión)
        $_SESSION['usuario'] = $usuario;
        // Mostrar un mensaje de registro exitoso
        echo "Registrado exitosamente";

        // Redireccionar a la página de inicio de sesión
        header('Location: ../inicio_sesion/inicio_sesion.html');
        exit;
   
    }
    else{
        echo "Error al registrar";
        // Aquí puedes redireccionar al usuario a otra página de inicio de sesión o mostrar un mensaje de error
    }
 
?>