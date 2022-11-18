const validacionUsuMod = () => {
    var documentoUsuarioMod = document.getElementById("documentoModificar").value;
    

    if(!documentoUsuarioMod){
        alert("Debe poner el documento de la persona a buscar");
        return false;
    }else if(isNaN(documentoUsuarioMod)){
        alert("El campo solo debe contener valores numericos");
        return false;
    }
    if(!correonuev || !clavenuev){
        alert("Debe llenar los campos");
    }
}