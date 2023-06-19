const scroll = document.querySelector('.scroll');

function setScroll() {
    let scrollPercentage = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
    scroll.style.width = scrollPercentage + '%';
}

if (scroll) {
    setScroll();
    window.onscroll = () => { setScroll(); };
}
