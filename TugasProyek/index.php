<?php 
include "config/connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fossacraft | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel = "icon" href = "https://yt3.googleusercontent.com/A9knEMlO1Lj9zhq-pl3a_TFh2Ry4cQc_ScFkAq0Inp-LjRSCsl2L6JdY_8DmxzMKYYIYZ2Kn0ks=s176-c-k-c0x00ffffff-no-rj" type = "image/x-icon">
    </head>
    <body>
    <header>
            <div class="navbar">
                <div class="logo">
                    <img src="https://primary.jwwb.nl/public/w/d/h/temp-sclosjswwdzrbnajzuag/sxqt6k/fossacraft_logo_textonly_sidebyside_withoutshadow_sizedup-1.png?enable-io=true&enable=upscale&width=365" alt="">
                </div>
                <ul class="links">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="seasons.php">Seasons</a></li>
                    <li><a href="download.php">Downloads</a></li>
                    <li><a href="donations.php">Donations</a></li>
                    <li><a href="review.php">Review</a></li>
                    <li><a href="rules.php">Rules & Terms of Service</a></li>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                    <?php
                        if ($_SESSION["username"] != "") {
                            echo "<li><a href='userprofile.php'>" . $_SESSION['username'] . "</a></li>";
                        }else{
                            echo "<li><a href='userlogin.php'>Sign In</a></li>";
                        }
                        ?>
                </ul>
                
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
    
            <div class="dropdown_menu">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="seasons.php">Seasons</a></li>
                <li><a href="download.php">Downloads</a></li>
                <li><a href="donations.php">Donations</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="rules.php">Rules & Terms of Service</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                <li><a href="userlogin.php">Sign In</a></li>
            </div>
        </header>
    
        <section class="hero">
            <img id="bg-video" src="https://cdn.discordapp.com/attachments/897797202456485889/981950701376770108/2022-05-03_16.57.46.png" alt="">
        <div class="hero-text">
            <h2>Join and Play in FossaCraft Season 4</h2>
            <p>A friendly whitelisted minecraft server</p>
            <a href="https://minecraft-mp.com/server-s308330" class="btn-outline">PLAY NOW</a>
        </div>
        </section>
        <div class="information-container">
            <div class="informations">
                <div class="informations-left">
                    <h2>Welcome to FossaCraft Season 4</h2>
                    <p>Season 4 is now here and better than ever! The server opened on June 8th 2022 with the 1.19 wild update! Coming off a high from our very successful season 3 and hyped for the new update. Our slogan for this season is "Stronger Than Dirt"</p>
                </div>
                <div class="informations-right">
                    <img src="assets/images/image 2.png" alt="">
                </div>
            </div>
            <div class="informations">
                <div class="informations-left">
                    <img src="assets/images/image 3.png" alt="">
                </div>
                <div class="informations-right">
                    <h2>Current State</h2>
                    <p>We are still accepting applications for new Fossa's to join our adventure. We have had our first end event and another is coming soon! Our community island is starting to flourish with a couple of shops now open and a game coming very soon! </p>
                    <button onclick="location.href='seasons.php';" class="btn-orange" style="margin-left:40px;">World Season & Picture Pages</button>
                </div>
            </div>
            <div class="informations">
                <div class="informations-left">
                    <h2>What’s Going On?</h2>
                    <p>It's worth mentioning that our daily activity has dropped significantly with eveyones real life commitments taking priority. So, consider this server more like a single player world, but better and more fun becuase its in a community where you can collaborate and see each other, and easier with shops to purchace materials or services from.</p>
                </div>
                <div class="informations-right">
                    <img src="assets/images/image 4.png" alt="">
                </div>
            </div>
        </div>
        

        <section class="contents">
            <h2>FossaCraft Channel</h2>
            <div class="contents-images">
                <iframe class="card" width="400" height="220" src="https://www.youtube.com/embed/i4Q4UxscXqE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe class="card" width="400" height="220" src="https://www.youtube.com/embed/-SXUVFE79hQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe class="card" width="400" height="220" src="https://www.youtube.com/embed/vtD2unUEMos" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <button class="view-more" onclick="location.href='https://www.youtube.com/@FossaCraft';">View More</button>
        </section>

        <div class="footer">
            <div class="kotak-kesatu">
                <h1>Fossacraft</h1>
                <p>FossaCraft is a whitelisted Minecraft SMP. Join our Discord to get started.</p>
            </div>

            <div class="kotak-kedua">
                <h1>Social</h1>
                <a href="https://discord.com/invite/9xhWF5PPUz" target="_blank" title="discord"><p>Discord </p></a>
                <a href="https://www.planetminecraft.com/member/fossacraft/" target="_blank" title="planet minecraft"><p>Planet Minecraft </p></a>
                <a href="https://www.reddit.com/user/FossaCraft/" target="_blank" title="reddit"><p>Reddit </p></a>
            </div>

            <div class="kotak-ketiga">
                <h1>Minecraft</h1>
                <p>Server Address:</p>
                <a href="https://minecraft-mp.com/server-s308330" class="play-fossacraft" title="fossacraft.com">fossacraft.apexmc.co</a>
                <p>5 players online</p>
            </div>

            <div class="kotak-keempat">
                <h1>Help</h1>
                <a href="rules.php" target="_blank"><p>Rules</p></a>                
                <a href="download.php" target="_blank"><p>Modifications</p></a>
                <a href="https://discord.com/invite/9xhWF5PPUz" target="_blank"><p>Rebalances </p></a>
            </div>
            <hr id="footer-hr">
        </div>
          
    </body>
    <script type="text/javascript">
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
        }
    </script>
</html>
