function Validaciones(){
    var userName = document.getElementById("username").value;
    var userMail = document.getElementById("usermail").value;
    var userNumber = document.getElementById("usernumber").value;
    var userPass = document.getElementById("userpass").value;

    if (userName, userPass==""){

        alert ("Por favor ingrese los campos");
        return false;

    }

    if(userNumber == "" || isNaN (userNumber)){
        alert ("Debe diligenciar el campo numero de documento con valores numericos");
        return false;

    
}

if ( !/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(userMail)){
    alert ("Forma incorrecta para ingresar el correo");
    return false;
}

 }