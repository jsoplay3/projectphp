const validacionUsuMod2 = () => {
    var correonuev = document.getElementById("correoNuev").value;
    var clavenuev = document.getElementById("claveNuev").value;

    if(!correonuev || !clavenuev){
        alert("Debe llenar los campos");
        return false;
    }else if(!/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(correonuev)){
        alert("El campo correo debe tener la estructura de correo");
    }
}