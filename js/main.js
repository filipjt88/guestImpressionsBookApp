// Show and Hide password input
const password = document.getElementById("togglePassword").addEventListener("click", function () {
    let passwordField = document.getElementById("password");
    let icon = this.querySelector("i");

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
    }
});


const confirm_password = document.getElementById("togglePasswordConfirm").addEventListener("click", function () {
    let passwordFieldConfirm = document.getElementById("password_confirm");
    let iconConfirm = this.querySelector("i");

    if (passwordFieldConfirm.type === 'password') {
        passwordFieldConfirm.type = 'text';
        iconConfirm.classList.remove('bi-eye');
        iconConfirm.classList.add('bi-eye-slash');
    } else {
        passwordFieldConfirm.type = 'password';
        iconConfirm.classList.remove('bi-eye-slash');
        iconConfirm.classList.add('bi-eye');
    }
});





