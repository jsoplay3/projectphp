function validar(){
    var nombre = document.getElementById("nomU").value;
    var correo = document.getElementById("mailU").value;
    var documento = document.getElementById("docU").value;
    var clave = document.getElementById("conU").value;

    if (nombre == length || !isNaN(nombre)) {
        alert("Rellene el nombre correctamente");
        return false;
    }

    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(correo) ){
        alert("Error: La dirección de correo " + correo + " no es valida.");
        return false;
    }

    if (documento == length || isNaN(documento)){
        alert("Rellene el documento correctamente");
        return false;
    }

    if (clave == length) {
        alert("Rellene una contraseña valida");
        return false;
    }
}