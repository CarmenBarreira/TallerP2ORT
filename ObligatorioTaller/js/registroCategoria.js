$(document).ready(inicializoRC);

function inicializoRC() {
    $("#txtNombreCategoria").blur(validarNombre);
    //$("#txtEmailUsuario").blur(validarEmail);
  //  $("#txtPassword").blur(validarPassword);
    
}

function validarNombre() {
     var dato = $(this).val();
    if (validarNombreLogico(dato) === false) {
        $("#errorNombreC").html("El nombre no es correcto");
        $("#errorNombreC").addClass("alert alert-danger");
    }
    else{
        $("#errorNombreC").removeClass("alert alert-danger");
        $("#errorNombreC").html(" ");
    }
}

function validarNombreLogico(nombre) {
    var retorno = false;
    var patron = /[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]/;
    if (nombre.length >=2 &&  patron.test(nombre)) {
       retorno=true;
    }
    
    return retorno;

}