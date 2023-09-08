const title = document.querySelector('h1');
const titleHeight = title.offsetHeight;
let titleText = title.textContent;
let letterOffset = 0;
let timeOffset = 10;

title.textContent = '';
title.style.height = titleHeight + 'px';
title.style.opacity = "1";

document.addEventListener('DOMContentLoaded', () => {
    titleText.split('').forEach((letter) => {
        let span = document.createElement('span');

        span.textContent = letter;
        span.style.left = letterOffset + 'px';
        span.style.transform = 'translateY(100%)';

        title.append(span);

        setTimeout(() => {
            span.style.transform = '';
        }, timeOffset);

        letterOffset += span.offsetWidth + 2.5;
        timeOffset += 100;
    });

    setTimeout(() => {
        title.textContent = '';
        title.textContent = titleText;
    }, timeOffset + 500);
});
