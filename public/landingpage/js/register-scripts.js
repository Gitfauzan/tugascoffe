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

const userConfPass = document.querySelector('#conf-pass');
const userConfPassBtn = document.querySelector('#icon-conf-btn');
userConfPassBtn.onclick = (e) => {
    userConfPass.focus();
    e.preventDefault();
};

const userNoPhone = document.querySelector('#no-phone');
const userNoPhoneBtn = document.querySelector('#no-phone-btn');
userNoPhoneBtn.onclick = (e) => {
    userNoPhone.focus();
    e.preventDefault();
};

const userAddress = document.querySelector('#address');
const userAddressBtn = document.querySelector('#address-btn');
userAddressBtn.onclick = (e) => {
    userAddress.focus();
    e.preventDefault();
};

const showHiddenPass = (registerPass, registerEye) => {
    const input = document.getElementById(registerPass),
        iconEye = document.getElementById(registerEye)
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
    showHiddenPass('conf-pass', 'icon-eye-conf');

    // Cek pass tapi gagal

    // const form = document.getElementById('register-form');
    // form.addEventListener('submit', function (e) {
    //     const password = document.getElementById('pass').value;
    //     const confirmPassword = document.getElementById('conf-pass').value;

    //     if (password !== confirmPassword) {
    //         e.preventDefault();
    //         alert('Password dan Konfirmasi Password harus sama!');
    //     }
    // });
});