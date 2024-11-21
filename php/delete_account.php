<?php
    session_start();

    // Verifica si el usuario está logueado
    if(!isset($_SESSION['user'])){
        echo '
            <script>
                alert("Inicia sesión para eliminar tu cuenta.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    include 'conexion_be.php';

    // Obtén el email del usuario desde la sesión
    $email = $_SESSION['user'];

    // Eliminar el usuario de la base de datos
    $query = "DELETE FROM usuarios WHERE email='$email'";

    // Ejecutar la consulta
    $delete_user = mysqli_query($conexion, $query);

    if($delete_user) {
        // Eliminar la sesión
        session_destroy();

        echo '
            <script>
                alert("Cuenta eliminada exitosamente.");
                window.location = "../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("No se pudo eliminar la cuenta, intentalo de nuevo.");
                window.location = "../bienvenido.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>
