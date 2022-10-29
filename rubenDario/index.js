
const validate = () => {
    let userName = document.getElementById('userName').value,
        userMail = document.getElementById('userMail').value,
        userId = document.getElementById('userId').value,
        userPassword = document.getElementById('userPassword').value,
        expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/,
        correo = expReg.test(userMail);

 

        if (!userName || !userMail || !userId || !userPassword) {
            alert('Debe diligenciar todos los campos')
            return false;
        }

        if (!isNaN(userName)) {
            alert('Nombre invalido')
            return false;
        }

        if (isNaN(userId)) {
            alert('Numero de documento no valido')
            return false;
        }

         if (correo == false) {
             alert('Debe ingresar un correo valido')
             return false;
        }

}
const userQuery = () => {
    documentQuery = document.getElementById('documentQuery').value;
    if (!documentQuery) {
        alert('DIgite el nuemero de documento')
        return false;
    }

    if (isNaN(documentQuery)) {
        alert('Numero de documento invalido')
        return false;
    }

}

const drop = () => {
    alert('Se eliminaran todos los registros ¿desea continuar?');
    alert('¿Esta completamente seguro que desea eliminar todos los registros?')
}


