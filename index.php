<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Hell">
	<meta name="theme-color">
  <title>Fluffy's funky website</title>
	<link rel="icon" type="image/x-icon" href="images/fluffy.png">
	<!-- Style -->
	<link rel="stylesheet" href="stylesheet.css">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@600&amp;display=swap">
</head>
<body>

  <nav>
		<div class="nav-logo">
			<img src="images/fluffy.png">
			<h2><span class="fluffy-colour">Fluffy's hell</span></h2>
		</div>
		<div class="nav-links">
			<a href="https://twitter.com/fluffybeanUwU">Twitter</a>
			<a href="http://t.me/Fluffy_Bean">Telegram</a>
			<a href="https://github.com/Fluffy-Bean">Github</a>
			<p>Discord:&nbsp;Fluffy&nbsp;Bean#5212</p>
		</div>
  </nav>

	<main>
		<section id="intro" class="center">
			<h1>Fluffy's Swagger Website</h1>
			<p>This is supposed to be a descriptive intro line, but I don't feel like writing this</p>
		</section>

		<section id="summary" >
			<h2>Summary</h2>
			<p>Hi! I'm <span class="fluffy-colour">Fluffy Bean</span>. I'm a 17 year old who found himself on the internet one day and became a furry! (And a developer)</p>
		</section>

		<section id="interests" >
			<h2>My interests</h2>
			<p>Appart from the obvious, I am interested in computers, specifically the programming aspect of them and the freedom it gives me to express myself</p>
			<p>I also enjoy using Linux (Arch btw) which gives me access to do things such as customise my entire system!</p>
			<p>Another thing I enjoy doing is playing games, some of my favourite tiles are, The Witcher 3, Minecraft, Beat Saber and Spin Rhythm XD</p>
		</section>

		<section id="experience" >
			<h2>Experience in programming</h2>
			<p>I have a decently wide range of knowledge on computers and programming </p>
			<p>Since I was young I delved into computers head first, and breaking a lot on the way. I started with Scratch, then progressed to Python in Secondary School where I really started my programming adventure!</p>
			<p>Since then I tried many programming languages and programming-related stuff, I currently know Python, HTML and CSS but am also learning PHP and C#</p>
			<p>I also got into Linux since the start was rough with me breaking a bunch of stuff. But since then I've been using Arch (btw) and happily configuring Rofi, Polybar, fish and even theming Discord, Spotify and Firefox!</p>
			<p class="gray-info center">These stats come from my GitHub profile</p>
			<img src="https://github-readme-stats.vercel.app/api/top-langs/?username=Fluffy-Bean&layout=compact" class="center">
		</section>

		<section id="pc" >
			<h2>System configuration</h2>
			<h3>Operating system</h3>
			<img src="images/sussywussy.png" alt="Screenshot of Linux desktop environment" loading="lazy">
			<p>My main operating system is Arch Linux, in this screenshot you can see a "rice" of Rofi and Polybar! Which you can see <a href="https://github.com/Fluffy-Bean/dots">here</a>!</p>
			<p>My secondary system is Windows 10 just for VR</p>

			<h3>Hardware</h3>
			<p>For my PC case, I'm using an NZXT H510 (white) covered with a bunch of stickers and magnets.</p>
			<p>But for whats inside is a bit more interesting. I am using a Gigabyte X570 AORUS ELITE motherboard, pared with an AMD 5 3600. Cooling that is a be quiet! Pure Rock 2.</p>
			<p>Thats with 16GBs (2x8) of DDR4-3600 ram from Corsair, with an Nvidia GTX1060 (6gb) Zotac AMP edition.</p>
			<p>Which is all powered by a Corsair 550W 80+ Gold power supply.</p>
			<p>For storage I am using a Hitachi Deskstar that has 2TBs of storage for my games and larger files. For my boot SSD I am using a Samsung 980 1TB M.2 NVMe.</p>

			<h3>Equipment</h3>
			<p>My keyboard is a Razer Blackwiddow X Chroma that has been through too much. To go with that I have a Logitech g502 mouse with a Hyena Agenda mouse mat.</p>
			<p>For my monitor I have a BenQ MOBIUZ EX2510. For VR I have a normal CV1 with 2 cameras.</p>
			<p>Headphones are very important to me, as I use them for hours at a time everyday and listen to a lot of music, so I got myself Steelseries Arctis 3 (only to be very dissapointed with the mic and build quality). I also enjoy playing some games with a controller so I have a modded Xbox One S controller.</p>

			<h3>Server</h3>
			<p>My server is a simple Zotac ZBOX-CI527.</p>
			<p>It still has the base 8GBs of ram and i5-7200U CPU. But I upgraded it with a 120GB SSD.</p>
			<p>And it is running a Proxmox server with many many LXC containers because why not :3</p>
		</section>

		<section >
			<h2>Special Thanks</h2>
			<p>To <span class="jeetix-colour">Jeetix</span> for helping me with learning how to make websites and keeping the original site up and running!</p>
			<p>And to <span class="carty-colour">Carty</span> for teaching me how to run servers and the networking required to keep sites online!</p>
			<p><span class="mrhdash-colour">mrHDash</span> for the <a href="#refsheet">Ref Sheet</a> and most other art on the page!</p>
			<p>To <span class="zadok-colour">Zadok</span> for the silly taidum art in the nav bar!</p>
		</section>

		<section id="gallery">
			<h2>Random pictures lol</h2>
			<img src="gallery/fluffy_VRchat-meet-2021.webp" class="gallery-image" alt="No alt for these images at the moment, I am very sorry">
			<!--
			<div class="filter-list">
				<div>
					<p>Blur</p>
				</div>
				<div>
					<p>Grayscale</p>
				</div>
				<div>
					<p>Hue</p>
				</div>
				<div>
					<p>Saturation</p>
				</div>
			</div>
			-->
			<div class="gallery" draggable="false">
				<?php
				$images = glob("gallery/*.{jpg,jpeg,png,webp,gif}", GLOB_BRACE);
				foreach ($images as $i) {
					printf('<img src="gallery/%s" draggable="false" loading="lazy"/>',
						basename($i)
					);
				}
				?>
			</div>
			<script src="scripts/gallery.js"></script>
		</section>

		<section id="refsheet">
			<h2>Refsheet</h2>
			<img src="images/ref.png" alt="Ref Sheet containing an orange anthro Maned Wolf." loading="lazy">
			<h3>Bandana</h3>
			<p>#FF7700 - #FFDC00 - #00D621 - #0088FF</p>
			<h3>Fur</h3>
			<p>#ff851b - #fff3bb - #613700</p>
			<h3>Beans / Eyes</h3>
			<p>#febbec - #c859c9</p>
		</section>

		<section id="jokes" >
			<h2>Funny jokes!</h2>
			<h3>Cow joke</h3>
			<p>What did the cow say to the other cow that took up all the space? <span class="gray-info">"Mooooove over"!</span></p>
			<h3>Eel joke</h3>
			<p>Why can't electric eels get depressed? <span class="gray-info">Because they're always positive!</span></p>
		</section>

		<section id="spotify" >
			<h2>Mah Music taste!</h2>
			<p>Here I will put (most) of the music I enjoy listening too!</p>
			<h3>Ma Spotify playlists</h3>
			<iframe src="https://open.spotify.com/embed/playlist/5e4iqBdioVN56hz1KCYWNi?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
			<iframe src="https://open.spotify.com/embed/playlist/37vWcad8w7GBvNIZUkDxEi?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>

			<h3>Music flavours</h3>
			<h4>Rock/Metal</h4>
			<p>Bring me the Horizon</p>
			<p>Pink Floyd</p>
			<p>Ocean Colour Scene</p>
			<p>Oasis</p>
			<p>Fleetwood Mac</p>
			<p>Stereophonics</p>

			<h4>EDM/Electronic</h4>
			<p>acloudyskye</p>
			<p>Conro</p>
			<p>Pixel Terror</p>

			<h4>Chill</h4>
			<p>M38</p>
			<p>C148</p>
			<p>The Rare Occasion</p>
			<p>Cavetown</p>

			<h4>Other</h4>
			<p>Gorillaz</p>
			<p>Joywave</p>
			<p>Daughter</p>
			<p>Low Roar</p>

			<h3>Well...</h3>
			<p>I listen to everything, but feel free to complain to me about my choices!</p>
		</section>
	</main>

	<footer>
		<div>
			<h3>Direct Contact</h3>
			<a href="http://t.me/Fluffy_Bean">Telegram</a>
			<a href="https://twitter.com/fluffybeanUwU">Twitter</a>
		</div>
		<div>
			<h3>Page status</h3>
			<p>Last updated 25 Jun 2022</p>
			<p>Made and designed by <span class="fluffy-colour">Fluffy</span></p>
		</div>
		<div>
			<h3>Other works</h3>
			<a href="https://github.com/Fluffy-Bean">Github</a>
			<a href="https://testing.fluffybean.gay">Testing Page</a>
		</div>
	</footer>

</body>
</html>
