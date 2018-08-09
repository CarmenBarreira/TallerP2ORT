$(document).ready(inicializoRU);
function inicializoRU() {
    $("#txtNombreUsuario").blur(validarNombre);
    $("#txtEmailUsuario").blur(validarEmail);
    $("#txtPassword").blur(validarPassword);
}


function validarEmail() {
     var dato = $(this).val();
    if (validarEmailLogico(dato)) {
       document.getElementById('errorEmailU').innerHTML= "El correo electronico no es correcto";
       document.getElementById('error-password').style.color="red"; 
    }
}



function validarPassword() {
    var dato = $(this).val();
    if (!validarPasswordLogico(dato)) {
       document.getElementById('error-password').innerHTML= "La contraseña ingresada no es valida. La misma debe tener al menos 8 caracteres, 1 mayusucula, 1 numero y 1 minuscula";
       document.getElementById('error-password').style.color="red";   
    }else{
         document.getElementById('error-password').innerHTML= "";    
    }

}

function mostrarPassword(){    
    var x = document.getElementById("txtPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function validarEmailLogico(var mail) {
    var retorno = true;
    var patron = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!patron.test(mail)) {
       retorno = false;
    }
    return retorno;
}

function validarPasswordLogico(var password) {
    var retorno = true;
    var dato = $(this).val();
    var patron = /^(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ]/;
    if (!patron.test(password) || dato.length<8 ) {
       retorno=false;
    }
    
    return retorno;

}