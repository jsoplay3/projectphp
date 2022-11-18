const validacionUsuElim = () =>{
    var documentoUsuarioElim = document.getElementById("usuarioEliminar").value;
    
    if(!documentoUsuarioElim){
        alert("Debe poner el documento de la persona a eliminar");
        return false;
    }else if(isNaN(documentoUsuarioElim)){
        alert("El campo solo debe contener valores numericos");
        return false;
    }
}