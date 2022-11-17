function validacion(){
    var name = document.getElementById("username").value;
    var document = document.getElementById("user_document").value;
    var password = document.getElementById("password").value;

    if(!name || !document ||!password){
        alert("Debes llenar todos los campos");
        return false;
    }else if(isNaN(document)){
        alert("El Numero de Documento no debe contener letras");
        return false;
    }
}
