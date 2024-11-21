<?php
    session_start();

    // Verifica si el usuario está logueado
    if(!isset($_SESSION['user'])){
        echo '
            <script>
                alert("Inicia sesión para cambiar tu contraseña.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
</head>
<body>
    <h1>Cambiar Contraseña</h1>

    <!-- Formulario para cambiar la contraseña -->
    <form action="php/update_password.php" method="POST">
        <label for="current_password">Contraseña actual:</label>
        <input type="password" name="current_password" required><br><br>

        <label for="new_password">Nueva contraseña:</label>
        <input type="password" name="new_password" required><br><br>

        <label for="confirm_password">Confirmar nueva contraseña:</label>
        <input type="password" name="confirm_password" required><br><br>

        <button type="submit" name="submit">Cambiar contraseña</button>
</form>


</body>
</html>
