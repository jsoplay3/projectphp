const validacionUsuCons = () => {
    var documentoUsuarioCons = document.getElementById("documentoEspecifico").value;
    
    if(!documentoUsuarioCons){
        alert("Debe poner el documento de la persona a buscar");
        return false;
    }else if(isNaN(documentoUsuarioCons)){
        alert("El campo solo debe contener valores numericos");
        return false;
    }
}