const nav = document.querySelector('nav');
const button = document.querySelector('.nav-toggle');

let navRotate = 0;
let increment = 45;

function toggleNav() {
    navRotate += increment;
    button.querySelector('svg').style.transform = `rotate(${navRotate}deg)`;

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
