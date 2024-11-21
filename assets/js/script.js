//Ejecutando funciones
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var container_login_register = document.querySelector(".container__login-register");
var box__back_login = document.querySelector(".box__back-login");
var box__back_register = document.querySelector(".box__back-register");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        box__back_register.style.display = "block";
        box__back_login.style.display = "block";
    }else{
        box__back_register.style.display = "block";
        box__back_register.style.opacity = "1";
        box__back_login.style.display = "none";
        formulario_login.style.display = "block";
        container_login_register.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            container_login_register.style.left = "10px";
            formulario_register.style.display = "none";
            box__back_register.style.opacity = "1";
            box__back_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            container_login_register.style.left = "0px";
            formulario_register.style.display = "none";
            box__back_register.style.display = "block";
            box__back_login.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            container_login_register.style.left = "410px";
            formulario_login.style.display = "none";
            box__back_register.style.opacity = "0";
            box__back_login.style.opacity = "1";
        }else{
            formulario_register.style.display = "block";
            container_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            box__back_register.style.display = "none";
            box__back_login.style.display = "block";
            box__back_login.style.opacity = "1";
        }
}