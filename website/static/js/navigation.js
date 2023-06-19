let navRotate = 0;
let increment = 45;

function toggleNav() {
    let nav = document.querySelector('nav');
    let button = document.querySelector('.nav-toggle');

    navRotate += increment;
    button.style.transform = `rotate(${navRotate}deg)`;

    if (nav.classList.contains('open')) {
        document.querySelector('body').style.overflow = 'auto';

        nav.classList.remove('open');
        setTimeout(() => {
            nav.style.display = 'none';
        }, 100);

        button.classList.remove('open');
    } else {
        document.querySelector('body').style.overflow = 'hidden';

        nav.style.display = 'flex';
        setTimeout(() => {
            nav.classList.add('open');
        }, 3);

        button.classList.add('open');
    }
}
