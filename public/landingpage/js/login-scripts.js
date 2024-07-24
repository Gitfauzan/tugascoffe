const userName = document.querySelector('#user-name');
const userNameBtn = document.querySelector('#icon-user-btn');
userNameBtn.onclick = (e) => {
    userName.focus();
    e.preventDefault();
};

const userPass = document.querySelector('#pass');
const userPassBtn = document.querySelector('#icon-pass-btn');
userPassBtn.onclick = (e) => {
    userPass.focus();
    e.preventDefault();
};

const showHiddenPass = (loginPass, loginEye) => {
    const input = document.getElementById(loginPass),
        iconEye = document.getElementById(loginEye)
    iconEye.addEventListener('click', () => {
        if (input.type === 'password') {
            input.type = 'text'
            iconEye.classList.remove('fa-eye');
            iconEye.classList.add('fa-eye-slash');
        } else {
            input.type = 'password'
            iconEye.classList.remove('fa-eye-slash');
            iconEye.classList.add('fa-eye');
        }
    })
};
document.addEventListener("DOMContentLoaded", function () {
    showHiddenPass('pass', 'icon-eye');
});