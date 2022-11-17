const expRegMail = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
const expRegText = /^[A-z].+?$/;
const expRegNum = /^[0-9]+?$/;
const validate = () => {
    let userName = document.getElementById('userName').value,
        userName2 = document.getElementById('userName2').value,
        userMail = document.getElementById('userMail').value,
        document = document.getElementById('document'),
        userPassword = document.getElementById('userPassword').value,
        correo = expRegMail.test(userMail),
        name = expRegText.test(userName),
        name2 = expRegText.test(userName2),
        num = expRegnNum.test(document);

    if (!userName || !userName2 || !userMail || !document || !userId || !userPassword) {
        alert('Debe diligenciar todos los campos')
        return false;
    }

    if (correo == false) {
        alert('Debe ingresar un correo valido')
        return false;
    }

    if (name == false) {
        alert('Debe ingresar un nombre valido')
        return false;
    }

    if (name2 == false) {
        alert('Debe ingresar un nombre de usuario valido')
        return false;
    }

    if (num == false) {
        alert('Numero de documento invalido')
        return false;
    }

}

const validateLogin = () => {
    let userName = document.getElementById('userName').value,
        userPassword = document.getElementById('userPassword').value,
        name = expRegText.test(userName);

        if (! userName || !userPassword) {
            alert('Debe diligenciar todos los campos')
            return false;
        }

        if (name == false) {
            alert('Nombre de usuario invalido')
            return false;
        }
}

const validateUpdate = () => {
    let newName = document.getElementById('newName').value,
        newUserName = document.getElementById('newUserName').value,
        email = document.getElementById('email').value,
        password = document.getElementById('newPassword').value,
        documento = document.getElementById('documento').value,
        updateUser = document.getElementById('updateUser').value,
        updateDate = document.getElementById('updateDate').value,
        status =document.getElementById('status').value,
        correo = expRegMail.test(email),
        name = expRegText.test(newName),
        name2 = expRegText.test(newUserName),
        upUser = expRegText.test(updateUser),
        num = expRegNum.test(documento);

    if (!newName || !newUserName || !email || !password || !updateUser || !updateDate || !status) {
        alert('Debe diligenciar todos los campos')
        return false;
    }

    if (num == false) {
        alert('Numero de documento invalido')
        return false;
    }

    if (name == false) {
        alert('Debe ingresar un nombre valido')
        return false;
    }

    if (name2 == false) {
        alert('Debe ingresar un nombre de usuario valido')
        return false;
    }

    if (correo == false) {
        alert('Debe ingresar un correo valido')
        return false;
    }

    if (upUser == false) {
        alert('Debe ingresar un nombre de usuario que modifica valido')
        return false;
    }

    if (status == 0 ) {
        alert('Selecione el  estado de la cuenta')
        return false;
    }
}