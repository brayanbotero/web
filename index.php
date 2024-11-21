<?php 

    session_start();
    if(isset($_SESSION['user'])){
        header("location: bienvenido.php ");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

        <main>

            <div class="container__all">
                <div class="box__back">
                    <div class="box__back-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="box__back-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="container__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="email">
                        <input type="password" placeholder="Contraseña" name= "password">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/user_register_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="full_name">
                        <input type="text" placeholder="Correo Electronico" name="email">
                        <input type="text" placeholder="Usuario" name="user">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>