function val() {
    var mailuser = document.getElementById("mailUsuarioSolicitado").value;
    var docuser = document.getElementById("documentoUsuarioSolicitado").value;
    var passwuser = document.getElementById("passwordUsuarioSolicitado").value;
    var nameuser = document.getElementById("nombreUsuarioSolicitado").value;
   


    if (mailuser == "" || docuser == "" || passwuser == "" || nameuser == "") {

        alert("Rellene los campos faltantes");
        return false;
    }

    if (isNaN(docuser)) {

        alert("Solo se aceptan números en el campo de documento");
        return false;
    }

    
    if(! /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(mailuser)){
        alert("Correo no valido ");
        return false;
    }
    
  


}
function consulta() {
    var docuserconsul = document.getElementById("documentoUsuarioSolicitado").value;
    if(!docuserconsul){
        alert("Rellene los datos");
        return false;
    }
  
}

function usercon(){
    var userx = document.getElementById("nombreUsuarioSolicitado").value;
    var passx = document.getElementById("passwordUsuarioSolicitado").value;
    if(!userx || !passx){
        alert("Rellene los datos");
        return false;
    }

}