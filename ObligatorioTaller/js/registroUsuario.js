$(document).ready(inicializoRU);
function inicializoRU() {
    $("#txtNombreUsuario").blur(validarNombre);
    $("#txtEmailUsuario").blur(validarEmail);
    $("#txtPassword").blur(validarPassword);
}

function validarNombre() {
    /*Valida textos tipo nombres, no acepta numeros*/
    var dato = $(this).val();
    var patron = /\D[A-Za-zÁÉÍÓÚáéíóú]{3}/;
    if ($.trim(dato).length != 0)
    {
        if (!(dato.match(patron))) {
            alert("El nombre de usuario no es valido");
            return false;
        }
    } else {
        alert("El nombre de usuario no puede ser vacio");
        return false;
    }
}

function validarEmail() {
    /*Valida email*/
    var dato = $(this).val();
    var patron = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!patron.test(dato)) {
            alert("El mail ingresado no valido");
    }

}
function validarPassword() {
    /*Valida email*/
    var dato = $(this).val();
    var patron = /^(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ]/;
    if (!patron.test(dato)) {
            alert("La contraseña ingresada no valido. La misma debe tener al menos 1 mayusucula, 1 numero y 1 minuscula");
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

