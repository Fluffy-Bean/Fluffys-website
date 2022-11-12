<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hiiiiiii</title>
    <link rel="icon" type="image/x-icon" href="img/sneak.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Secular+One">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <!-- Phosphor Icons! -->
    <script src="https://unpkg.com/phosphor-icons"></script>
</head>

<body>
    <main>
        <nav>
            <button onclick="openTab(event, 'Home')" class="nav-item nav-item_selected"><p>Home</p></button>
            <button onclick="openTab(event, 'Hobbies')" class="nav-item"><p>Hobbies</p></button>
            <button onclick="openTab(event, 'Experiance')" class="nav-item"><p>Experiance</p></button>
            <button onclick="openTab(event, 'Gallery')" class="nav-item"><p>Gallery</p></button>
            <span id="nav-item_underline"></span>
        </nav>

        <div class="main">
            <div id="Home" class="tabContent">
                <div id="hero" class="hero">
                    <img src="img/sad.png">

                    <?php
                        $welcome = array(
                            'O, hi Mark',
                            'O, hi stranger',
                            'Hewwo',
                            'AAAAAAA',
                            'UwU',
                            'HELLOOOOOO'
                        );

                        echo "<h1>".$welcome[array_rand($welcome)]."</h1>";
                    ?>

                    <p>I'm a smelly Maned Wolf that goes by Fluffy Bean. I'm 17 years old that has weird interests</p>
                </div>

                <span class="heroSpacing"></span>

                <div class="content">
                    <h2>Social Links</h2>
                    <button class="btn_large" id="twitter_btn">
                        <p>Twitter</p>
                        <i class="ph-twitter-logo c_red"></i>
                    </button>
                    <button class="btn_large" id="telegram_btn">
                        <p>Telegram</p>
                        <i class="ph-telegram-logo c_purple"></i>
                    </button>
                    <button class="btn_large" id="github_btn">
                        <p>Github</p>
                        <i class="ph-github-logo c_yellow"></i>
                    </button>
                    <button class="btn_large" id="discord_btn">
                        <p>Discord</p>
                        <i class="ph-discord-logo c_green"></i>
                    </button>

                    <br>

                    <h2>Special Thanks</h2>
                    <p><span class="c_green">Jeetix</span>: Helping me with learning how to make websites!</p>
                    <p><span class="c_orange">Carty</span>: Teaching me how to run servers and the networking!</p>
                    <p><span class="c_purple">mrHDash</span>: For the <a id="refsheet" href="#ref">Ref Sheet</a> and most other art on the page!</p>
                    <p><span class="c_red">Zadok</span>: Silly taidum art seen below!</p>
                    <p><span class="c_blue">Shep</span>: For the <a href="https://twitter.com/ShepGoesBlep/status/1563946805062148102?s=20&t=0wVGqoYa74AsjSSnkZbzjA">free YHC</a>!</p>

                    <br>

                    <img src="img/taidum.png" alt="Orange maned wolf sona in Taidum form">
                </div>
            </div>

            <div id="Hobbies" class="tabContent">
                <div id="hero" class="hero">
                    <img src="img/funny.jpg">
                    <h1>Hobbies</h1>
                    <p>Hobbies hobbies hobbies hobbies hobbies hobbies dick hobbies hobbies hobbies hobbies hobbies</p>
                </div>

                <span class="heroSpacing"></span>

                <div class="content">
                    <!--
                    <h2>Funny jokes!</h2>
                    <h3>Cow joke</h3>
                    <p>What did the cow say to the other cow that took up all the space? <span class="gray-info">"Mooooove over"!</span></p>
                    <h3>Eel joke</h3>
                    <p>Why can't electric eels get depressed? <span class="gray-info">Because they're always positive!</span></p>
                    -->

                    <h2>Metal Boxes</h2>
                    <h3>My metal box</h3>
                    <p>My second most favorite thing to play around with. Though I usually manage to break them, I like making them do things that they weren't designed todo!</p>
                    <p>Due to this I also use Arch Linux btw. Though I haven't used Linux for all that much, I already made some pretty cool things with it!</p>
                    <img src="https://i.redd.it/a89igasc8hj91.png" alt="Screenshot of Linux desktop environment" loading="lazy">
                    <p>Heres a screenshot of my desktop, for all you nerds thats a Qtile session, Polybar bar with a few custom scripts, Rofi for my app launcher and Dunst for my notification daemon</p>

                    <h3>But its not all graphical</h3>
                    <p>I also play around with servers and have this website running on personal one! Its a small Zotac ZBOX-CI527 upgraded to 16Bs of ram with a total of 600GBs of SSD storage.</p>
                    <p>For the OS, I have Proxmox as its easier to avoid fuckups to the system as a whole! Also a simple Web-Interface for managing everything :3</p>

                    <br>

                    <h2>Electronics</h2>
                    <p>I also recently picked up micro controlers and other fancy things like that. I am still learning, but its been great fun and I made this!</p>
                    <p>A Pi Pico wired up to an LCD and Rotary encoder. Though this is simple, it was interesting learning how to get code to communicate with these parts</p>
                    <img src="img/funny.jpg" alt="LCD saying 0 days since I peed myself, attached to a pico with a rotary switch laying to the left of it">

                    <br>

                    <h2>Mah Music taste!</h2>
                    <p>I like music! And heres what I like listening to.</p>
                    <h3>Rock/Metal</h3>
                    <div class="matrix-list">
                        <p>Bring me the Horizon</p>
                        <p>Pink Floyd</p>
                        <p>Ocean Colour Scene</p>
                        <p>Oasis</p>
                        <p>Fleetwood Mac</p>
                        <p>Stereophonics</p>
                        <p>Muse</p>
                    </div>

                    <h3>EDM/DnB</h3>
                    <div class="matrix-list">
                        <p>acloudyskye</p>
                        <p>Conro</p>
                        <p>Pixel Terror</p>
                    </div>

                    <h3>Other</h3>
                    <div class="matrix-list">
                        <p>M38</p>
                        <p>C148</p>
                        <p>The Rare Occasion</p>
                        <p>Cavetown</p>
                        <p>Daughter</p>
                        <p>Low Roar</p>
                        <p>Gorillaz</p>
                        <p>Joywave</p>
                        <p>Twenty One Pilots</p>
                    </div>

                    <br>

                    <img src="https://spotify-recently-played-readme.vercel.app/api?user=lizarddash005&amp;width=769&amp;count=6">
                </div>
            </div>

            <div id="Experiance" class="tabContent">
                <div id="hero" class="hero">
                    <img src="https://i.redd.it/a89igasc8hj91.png">
                    <h1>Experiance</h1>
                    <p>Yet still no job lol</p>
                </div>

                <span class="heroSpacing"></span>

                <div class="content">
                    <h2>Experience in programming</h2>
                    <p>I have a decent understanding of PC operating systems and now also a start on networking with setting up my own server.</p>
                    <p>I delved into computers from when I was very smol and started with Scratch (not BASIC like ya’ll older folks) and then progressed to Python in Secondary School where I started to also explore other possibilities.</p>
                    <p>ince then I attempted many thingies like HTML, CSS, PHP, JavaScript, Bash, C# and other stuffs!</p>
                    <p>I got into Linux just about a year ago when writing this (29th June 22) and broke many things, but that got me into configuring a lot of software! Such as Rofi, Polybar, fish and even Discord, Spotify and Firefox!</p>
                    <p class="gray-info center">These stats come from my GitHub profile</p>
                    <img src="https://github-readme-stats.vercel.app/api/top-langs/?username=Fluffy-Bean&layout=compact&card_width=445&langs_count=10&title_color=8C977D&bg_color=151515&text_color=E8E3E3&hide_border=true&icon_color=8C977D&border_radius=15px" class="center">                    
                </div>
            </div>

            <div id="Gallery" class="tabContent">
                <div id="hero" class="hero">
                    <img src="img/landscape.webp">
                    <h1>Gallery</h1>
                    <p>Here is a gallery of my stuff and art!</p>
                </div>

                <span class="heroSpacing"></span>

                <div class="content">
                    <img src="img/meet-2021.webp" alt="VRchat meet with a handfull of colourfull taidum avatars" loading="lazy">

                    <br>

                    <h2>Refsheet</h2>
                    <img id="ref" src="img/ref.png" alt="Ref Sheet containing an orange anthro Maned Wolf." loading="lazy">
                    <h3>Bandana</h3>
                    <p>#FF7700 - #FFDC00 - #00D621 - #0088FF</p>
                    <h3>Fur</h3>
                    <p>#ff851b - #fff3bb - #613700</p>
                    <h3>Beans / Eyes</h3>
                    <p>#febbec - #c859c9</p>
                </div>
            </div>
        </div>

        <footer>
            <p>Made by <span class="c_orange">Fluffy</span></p>
            <p>Updated at <span class="c_red">12 Nov</span></p>
        </footer>

        <script src="app.js"></script>
    </main>
</body>

</html>