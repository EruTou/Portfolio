const hamburger = document.querySelector('.hamburger'),
    menu = document.querySelector('.menu'),
    closeElem = document.querySelector('.menu__close'),
    menuOverlay = document.querySelector('.menu__overlay'); 

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

closeElem.addEventListener('click', () => {
    menu.classList.remove('active');
});

menuOverlay.addEventListener('click', () => {
    menu.classList.remove('active');
});

const percent = document.querySelectorAll('.skills__progress-percent'),
    scale = document.querySelectorAll('.skills__progress-scale span');

percent.forEach( (item, i) => {
    if (Number(item.innerHTML.replace('%', '')) < 0) {
        scale[i].style.width = '0%';
    }
    else if (Number(item.innerHTML.replace('%', '')) > 100) {
        scale[i].style.width = '100%';
    }
    else {
        scale[i].style.width = item.innerHTML;
    }
});