// DOMContentLoaded Event
window.addEventListener('DOMContentLoaded', initializeApp);

// console.log(window);

// InitializeApp
function initializeApp() {
    load();
    doEventBindings();
}

// Event: Load Screen 
function load() {
       document.querySelector('.img-logo').src = 'assets/images/logo.png';
}

// Function: autoFillText
function autoFillText() {
    let heroText = document.querySelector('.hero .desc .text');
    let text = 'Bersama mempelajari bagaimana mengolah sampah untuk bumi yang lebih baik';
    let index = 0;
    let frame = 57.5;
    setTimeout(() => {
        const interval = setInterval(() => {
            heroText.innerHTML = text.slice(0, index);
            index++;
            if (index == text.length + 1) {
                clearInterval(interval)
            }
        }, frame);
    }, 500);
}

function onScroll() {
    const navbar = document.querySelector('.navbar');
    const scrollToTop = document.querySelector('.scroll-to-top');
    navbar.classList.toggle('sticky', window.scrollY > 0);
    scrollToTop.classList.toggle('sticky', window.scrollY > 100);
}

function onResize() {
    if (window.innerWidth >= 992) {
        document.querySelector('.overlay').classList.remove('active');
        document.querySelector('.navbar-nav').classList.remove('active');
        document.querySelector('.toggle-bar').innerHTML = '<i class="fas fa-fw fa-bars"></i>';
    }
}

function navActive(e) {
    document.querySelectorAll('.nav-link').forEach(item => {
        item.classList.remove('active');
    })
    if (e.target.classList.contains('btn')) {
        return;
    }
    e.target.classList.toggle('active');
    if (window.innerWidth <= 992) {
        document.querySelector('.navbar-nav').classList.remove('active');
        if (document.querySelector('.navbar-nav').classList.contains('active')) {
            document.querySelector('.toggle-bar').innerHTML = '<i class="fas fa-fw fa-plus close"></i>';
            document.querySelector('.overlay').classList.add('active');
        } else {
            document.querySelector('.toggle-bar').innerHTML = '<i class="fas fa-fw fa-bars"></i>';
            document.querySelector('.overlay').classList.remove('active');
        }
    }
}

function toggleBar() {
    document.querySelector('.navbar-nav').classList.toggle('active');
    if (document.querySelector('.navbar-nav').classList.contains('active')) {
        document.querySelector('.toggle-bar').innerHTML = '<i class="fas fa-fw fa-plus close"></i>';
    } else {
        document.querySelector('.toggle-bar').innerHTML = '<i class="fas fa-fw fa-bars"></i>';
    }
    document.querySelector('.overlay').classList.toggle('active');
}

// Semua event bindings
function doEventBindings() {
    window.addEventListener('load', autoFillText);
    window.addEventListener('scroll', onScroll);
    window.addEventListener('resize', onResize);
    document.querySelectorAll('.nav-link').forEach(item => {
        item.addEventListener('click', navActive);
    });
    document.querySelector('.toggle-bar').addEventListener('click', toggleBar);
}