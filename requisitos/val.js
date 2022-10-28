function val() {
    var mailuser = document.getElementById("mailUser").value;
    var docuser = document.getElementById("docUser").value;
    var passwuser = document.getElementById("passUser").value;
    var nameuser = document.getElementById("nameUser").value;
   


    if (mailuser == "" || docuser == "" || passwuser == "" || nameuser == "") {

        alert("Rellene los campos faltantes");
        return false;
    }

    if (isNaN(docuser)) {

        alert("Solo se aceptan números en el campo de documento");
        return false;
    }

    
    if(! /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(mailuser)){
        alert("Estructura no valida de correo");
        return false;
    }
    
  


}
