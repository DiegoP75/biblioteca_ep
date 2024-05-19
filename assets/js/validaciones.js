function validarFormulario(){
    var titulo = document.getElementById("entrada").value;
    if (titulo == ""){
        $("#tituloEntradaVacio").modal("show");
        return false;
    }
    var modulo = document.getElementById("modulo").value;
    if(modulo == ""){
        $("#moduloEntradaVacio").modal("show");
        return false;
    }
    var anoEstreno = document.getElementById("anoEstreno").value;
    if(anoEstreno == ""){
        $("#estrenoEntradaVacio").modal("show");
        return false;
    }
    var fechaRedaccion = document.getElementById("fechaRedaccion").value;
    if(fechaRedaccion == ""){
        $("#fechaEntradaVacio").modal("show");
        return false;
    }
    var enlace = document.getElementById("enlace").value;
    if(enlace == ""){
        $("#enlaceEntradaVacio").modal("show");
        return false;
    }
    return true;
}