const passwordInput = document.getElementById('password');
const passwordConfirmInput = document.getElementById('password-confirm');
const message = document.getElementById('message-confirm');

passwordConfirmInput.addEventListener('keyup', () => {
    console.log(passwordConfirmInput.value);
    console.log(passwordInput.value);

    if (passwordConfirmInput.value === passwordInput.value) {

        message.innerHTML = "Les deux mots de passe sont conformes";
        message.style.color = "green";
         
    } else {

        message.innerHTML = "Les deux mots de passe ne sont pas conforme !";
        message.style.color = "red";
    }
});