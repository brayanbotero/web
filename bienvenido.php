<!-- bienvenido.php -->
<?php  
    session_start();

    //si no existe session//
    if(!isset($_SESSION['user'])){
        echo '
            <script> 
                alert("Inicia sesion para ingresar");
                window.location = "index.php";
            </script>
        '; 
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['user']; ?></h1>

    <!-- Botón para cambiar la contraseña -->
    <form action="change_password.php" method="POST">
    <button type="submit" name="change_password">Cambiar contraseña</button>
</form>


    <form action="php/delete_account.php" method="POST">
        <button type="submit" name="delete_account">Eliminar cuenta</button>
    </form>

    <a href="php/close_session.php">Cerrar sesión</a>
</body>
</html>
