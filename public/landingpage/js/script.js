// Toggle class active navbar Humburger Menu
const hamburger = document.querySelector('#hamburger-menu');
const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').onclick = (e) => {
    navbarNav.classList.toggle('active');
    e.preventDefault();
};

// Search
const searchForm = document.querySelector('.search-form')
const searchBox = document.querySelector('#search-box')
const searchbtn = document.querySelector('#search-btn')
document.querySelector('#search-btn').onclick = (e) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
};

// Shopping cart
const shoppingBtn = document.querySelector('#shopping-cart-btn')
const shoppingCart = document.querySelector('.shopping-cart')
document.querySelector('#shopping-cart-btn').onclick = (e) => {
    shoppingCart.classList.toggle('active');
    e.preventDefault();
}

// Modal Box
const itemDetailModal = document.querySelector('#item-detail-modal');
const itemDetailBtns = document.querySelectorAll('.shopping-icon');

itemDetailBtns.forEach((btn) => {
    btn.onclick = (e) => {
        itemDetailModal.style.display = 'flex';
        e.preventDefault();
    };
});

const modalCloseIcon = document.querySelector('.modal .close-icon');
document.querySelector('.modal .close-icon').onclick = (e) => {
    itemDetailModal.style.display = 'none';
    e.preventDefault();
}

window.onclick = (e) => {
    if (e.target === itemDetailModal) {
        itemDetailModal.style.display = 'none';
    }
}

// Remove active class
document.addEventListener('click', function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
    if (!searchbtn.contains(e.target) && !searchForm.contains(e.target)) {
        searchForm.classList.remove('active');
    }
    if (!shoppingBtn.contains(e.target) && !shoppingCart.contains(e.target)) {
        shoppingCart.classList.remove('active');
    }
});

// Smooth sroll
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();
//         document.querySelector(this.getAttribute('href')).scrollIntoView({
//             behavior: 'smooth'
//         });
//     });
// });
