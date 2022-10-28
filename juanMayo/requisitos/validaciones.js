function validaciones(){
    var nombreUsuario = document.getElementById("nUsuario").value;
    var mailUsuario = document.getElementById("mUsuario").value;
    var nroDocUsuario = document.getElementById("nroDocUsuario").value;
    var contraUsuario = document.getElementById("contraUsuario").value;

    if (nombreUsuario == "" || mailUsuario == "" || nroDocUsuario == "" || contraUsuario == "" ){
        alert("Debe diligenciar todos los campos");
        return false;

    }

    var mailValid = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (mailValid.test(mailUsuario.value)){
        alert ("Debe ingresar un correo electronico valido")
        return false;
    }
    
    if (!isNaN (nombreUsuario) ) {
        alert ("Ingrese letras en el campo 'Nombre de usuario'");
        return false;
    }

    if (isNaN (nroDocUsuario) ) {
        alert ("Ingrese numeros en el campo 'Nro de documento del usuario'");
        return false;
    }

}
//^[^@]+@[^@]+\.[a-zA-Z]{2,}$