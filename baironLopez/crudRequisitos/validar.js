const validacion = () => {
    var nombreUsuario = document.getElementById("nombreUsuarioSolicitado").value;
    var mailUsuario = document.getElementById("mailUsuarioSolicitado").value; 
    var documentoUsuario = document.getElementById("documentoUsuarioSolicitado").value;
    var claveUsuario = document.getElementById("passwordUsuarioSolicitado").value;

    if(!nombreUsuario || !mailUsuario || !documentoUsuario || !claveUsuario){
        alert("Debes llenar todos los campos");
        return false;
    }else if(isNaN(documentoUsuario)){
        alert("El Numero de Documento no debe contener letras");
        return false;
    }else if(!/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(mailUsuario)){
        alert("El campo Mail del Usuario debe tener la estructura de un correo");
        return false;
    }

}
