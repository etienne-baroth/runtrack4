// 1. VALIDATION DE L'INSCRIPTION


let formInscription = document.getElementById('myForm')

formInscription.addEventListener('submit', (e) => {

    let nom = document.getElementById('nom')
    let prenom = document.getElementById('prenom')
    let email = document.getElementById('email')
    let password = document.getElementById('password')
    let passwordConf = document.getElementById('passwordConf')

    let regexInscription = /^[a-zA-Z-\s]+$/;
    let regexInscriptionEmail = /^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/gm;
    let regexInscriptionPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;


    // VALIDITE DU NOM

    if(nom.value.trim() === '') {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez saisir un nom'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    } else if(regexInscription.test(nom.value) === false) {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez saisir un nom valide'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    }


    // VALIDITE DU PRENOM

    if(prenom.value.trim() === '') {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez saisir un prénom'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    } else if(regexInscription.test(prenom.value) === false) {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez saisir un prénom valide'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    }


    // VALIDITE DU MAIL

    if(email.value.trim() === '') {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez saisir un email'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    } else if(regexInscriptionEmail.test(email.value) === false) {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez saisir un email valide'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    }


    // VALIDITE DU MDP

    if(password.value.trim() === '') {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez saisir un mot de passe'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    } else if(regexInscriptionPassword.test(password.value) === false) {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Votre mot de passe doit contenir au moins 8 caractères, avoir au moins une majuscule,un caractère spécial et un chiffre pour être valide'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    }


    // CONFIRMATION MDP

    if(passwordConf.value.trim() === '') {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Veuillez confirmer votre mot de passe'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    } else if(password.value !== passwordConf.value) {

        let error = document.getElementById('inscriptionError')
        error.innerText = 'Votre confirmation doit être identique à votre mot de passe'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();
    }

})



// 2. VALIDATION DE LA CONNEXION


let formConnexion = document.getElementById('myFormCo')

formConnexion.addEventListener('submit', (e) => {

    let emailCo = document.getElementById('emailCo')
    let passwordCo = document.getElementById('passwordCo')

    let regexCoEmail = /^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/gm;
    let regexCoPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;


    // VALIDITE DU MAIL

    if(emailCo.value.trim() === '') {

        let error = document.getElementById('connexionError')
        error.innerText = 'Veuillez saisir un email'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    } else if(regexCoEmail.test(emailCo.value) === false) {

        let error = document.getElementById('connexionError')
        error.innerText = 'Veuillez saisir un email valide'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    }


    // VALIDITE DU MDP

    if(passwordCo.value.trim() === '') {

        let error = document.getElementById('connexionError')
        error.innerText = 'Veuillez saisir un mot de passe'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    } else if(regexCoPassword.test(passwordCo.value) === false) {

        let error = document.getElementById('connexionError')
        error.innerText = 'Votre mot de passe doit contenir au moins 8 caractères, avoir au moins une majuscule,un caractère spécial et un chiffre pour être valide'
        error.style.color = 'indianred'
        error.style.fontWeight = 'bold'
        e.preventDefault();

    }

})