<?php
    session_start();
    include 'conexion_be.php';

    if(isset($_POST['submit'])){
        $user = $_SESSION['user']; // Usamos el correo del usuario en sesión
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Verificamos que las contraseñas coincidan
        if($new_password !== $confirm_password){
            echo '
            <script>
                alert("Las contraseñas no coinciden. Intenta de nuevo.");
                window.location = "../change_password.php";
            </script>';
            exit();
        }

        // Encriptamos la nueva contraseña
        $new_password = hash('sha512', $new_password);

        // Verificamos si la contraseña actual es correcta
        $query = "SELECT password FROM usuarios WHERE email = '$user'";
        $result = mysqli_query($conexion, $query);
        $stored_password = mysqli_fetch_assoc($result)['password'];

        // Comparamos la contraseña actual con la almacenada
        if($stored_password === hash('sha512', $current_password)){
            // Si es correcta, actualizamos la contraseña
            $update_query = "UPDATE usuarios SET password = '$new_password' WHERE email = '$user'";
            $update_result = mysqli_query($conexion, $update_query);

            if($update_result){
                echo '
                <script>
                    alert("Contraseña actualizada correctamente.");
                    window.location = "../bienvenido.php";
                </script>';
            } else {
                echo '
                <script>
                    alert("Error al actualizar la contraseña. Intenta de nuevo.");
                    window.location = "../change_password.php";
                </script>';
            }
        } else {
            // Si la contraseña actual no es correcta
            echo '
            <script>
                alert("La contraseña actual es incorrecta. Intenta de nuevo.");
                window.location = "../change_password.php";
            </script>';
        }

        // Cerrar la conexión
        mysqli_close($conexion);
    }
?>
