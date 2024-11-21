<?php
    include 'conexion_be.php';
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    //encriptar contraseña
    $password = hash('sha512', $password);
    
    $query = "INSERT INTO usuarios(full_name, email, user, password) 
    VALUES('$full_name','$email', '$user', '$password' )";
    //verificar si el correo ya existe en la base de datos
    $verify_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");
    //verifica si existe una fila con el mismo correo
    if(mysqli_num_rows($verify_email) > 0) {
        echo '
        <script>
            alert("Este correo ya esta en uso. Intentalo de nuevo");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

    //verificar si el usuario  ya existe en la base de datos
    $verify_user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user='$user' ");
    //verifica si existe una fila con el mismo usuario
    if(mysqli_num_rows($verify_user) > 0) {
        echo '
        <script>
            alert("Este Usuario ya esta en uso. Intentalo de nuevo");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }
    
    $ejecutar = mysqli_query($conexion, $query); 

    if($ejecutar){
        echo ' 
        <script>
        alert("usuario registrado correctamente");
        window.location = "../index.php";
        </script>
        ';
    } else{
        echo' 
        <script>
        alert("No se pudo registrar, intente de nuevo");
        window.location = "../index.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>