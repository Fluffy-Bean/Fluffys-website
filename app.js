function openTab(evt, tabName) {
    var i, tabContent, navItem;

    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.opacity = "0";
        tabContent[i].style.display = "none";
    }
    
    navItem = document.getElementsByClassName("nav-item");
    for (i = 0; i < navItem.length; i++) {
        navItem[i].className = navItem[i].className.replace(" nav-item_selected", "");
    }
    
    document.getElementById(tabName).style.display = "block";
    setTimeout(function() {
        document.getElementById(tabName).style.opacity = "1";
    }, 100);
    
    evt.currentTarget.className += " nav-item_selected";

    window.history.replaceState(null, null, `?t=${tabName}`);
    
    document.getElementById("nav-item_underline").style.left = evt.currentTarget.offsetLeft + "px";
    document.getElementById("nav-item_underline").style.width = evt.currentTarget.offsetWidth + "px";
}


// Scroll listener to change hero look
function scrollFunction(id, section) {
    const scrollActivate = 220;
    const selector = document.querySelector(id);
    
    selector.addEventListener("scroll", (event) => {
        if (selector.scrollTop > scrollActivate) {
            if (!$(selector).hasClass("hero_scrolled")) {
                $(".hero")[section].className += " hero_scrolled";
                $(".hero")[section].style.height = "";
            }
        } else {
            $(".hero")[section].className = "hero";
            $(".hero")[section].style.height = `calc(20rem - ${selector.scrollTop}px)`;
            $(".hero img")[section].style.filter = `blur(${2 + (selector.scrollTop / 20)}px) brightness(0.7)`;
        }
    });
}


// Special link
document.querySelector("#refsheet").onclick = function() { $('.nav-item')[3].click(); }

// Link to social medias
document.querySelector("#twitter_btn").onclick = function() { window.open("https://twitter.com/fluffybeanUwU", "_blank"); }
document.querySelector('#mastodon_btn').onclick = function() { window.open("https://meow.social/@Fluffy_Bean", "_blank"); }
document.querySelector("#telegram_btn").onclick = function() { window.open("http://t.me/Fluffy_Bean", "_blank"); }
document.querySelector("#github_btn").onclick = function() { window.open("https://github.com/Fluffy-Bean", "_blank"); }
document.querySelector("#discord_btn").onclick = function() {
    navigator.clipboard.writeText("Fluffy Bean#5212");

    this.innerHTML = "<p>Copied!</p>";
    this.style.backgroundColor = "#8c977d";
    this.style.color = "#151515";

    setTimeout(() => {
        this.innerHTML = "<p>Discord</p><i class='ph-discord-logo c_green'></i>";
        this.style.backgroundColor = "";
        this.style.color = "";
    }, 2000);
}

window.onpopstate = function(e){
    const urlParams = new URLSearchParams(window.location.search);
    const tab = urlParams.get('t').toLowerCase();

    if (tab === "home") {
        $('.nav-item')[0].click();
    } else if (tab === "hobbies") {
        $('.nav-item')[1].click();
    } else if (tab === "experiance") {
        $('.nav-item')[2].click();
    } else if (tab === "gallery") {
        $('.nav-item')[3].click();
    } else {
        $('.nav-item')[0].click();
    }
};

$(document).ready(function() {
    // Assign scroll to all sections
    scrollFunction("#Home", 0);
    scrollFunction("#Hobbies", 1);
    scrollFunction("#Experiance", 2);
    scrollFunction("#Gallery", 3);

    const urlParams = new URLSearchParams(window.location.search);
    const tab = urlParams.get('t').toLowerCase();

    // Switch to tab on load
    if (tab === "home") {
        $('.nav-item')[0].click();
    } else if (tab === "hobbies") {
        $('.nav-item')[1].click();
    } else if (tab === "experiance") {
        $('.nav-item')[2].click();
    } else if (tab === "gallery") {
        $('.nav-item')[3].click();
    } else {
        $('.nav-item')[0].click();
    }
});