<?php 

    session_start();

    include 'conexion_be.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $validate_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' and password='$password'");

    if(mysqli_num_rows($validate_login) > 0){
        $_SESSION['user'] = $email;
        header("location: ../bienvenido.php ");
        exit;
    }else{
        echo '
            <script>
                alert("usuario no existente. Por favor verifique los datos introducidos");
                window.location = "../index.php"
            </script>
        ';
        exit;
    }


?>