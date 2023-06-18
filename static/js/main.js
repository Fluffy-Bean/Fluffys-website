function addToast(text='Sample toast notification') {
    var container = document.querySelector('.toast-container');

    // Create notification element
    var parent = document.createElement('span');
    parent.classList.add('toast');
    parent.innerText = text;
    parent.onclick = function() {
        if (parent.parentNode) {
            parent.classList.add('toast-hide');

            setTimeout(function() {
                container.removeChild(parent);
            }, 500);
        }
    };

    // Create span to show time remaining
    var timer = document.createElement('span');
    timer.classList.add('toast-time');
    parent.appendChild(timer);

    // Append notification to container
    container.appendChild(parent);
    setTimeout(function() {
        parent.classList.add('toast-show');
    }, 1);

    // Remove notification after 5 seconds
    setTimeout(function() {
        if (parent.parentNode) {
            parent.classList.add('toast-hide');

            setTimeout(function() {
                container.removeChild(parent);
            }, 500);
        }
    }, 5000);
}

function garble(obj, speed=1) {
    const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ_-"

    let interval = null;
    let iteration = 0;

    clearInterval(interval);
    
    interval = setInterval(() => {
        obj.innerText = obj.innerText
            .split("")
            .map((letter, index) => {
                if (index < iteration) {
                    return obj.dataset.value[index];
                }
                // 27 as hyphens wrap text that can make page jump a lot
                return letters[Math.floor(Math.random() * 27)]
            })
            .join("");

        if(iteration >= obj.dataset.value.length){ 
            clearInterval(interval);
        }

        iteration += 1 / speed;
    }, 30);
}


// Main title and subtitle, should only be one of each per page
if (document.querySelector("h1")) {
    const title = document.querySelector("h1");
    garble(title, 1.5);
}
if (document.querySelector(".subtitle")) {
    const subtitle = document.querySelector(".subtitle");
    garble(subtitle);
}


// h2 and h3 headers on page, there can be multiple so we need to loop through them
if (document.querySelectorAll("h2, h3")) {
    const headers = document.querySelectorAll("h2, h3");
    headers.forEach((header) => {
        garble(header);
    });
}