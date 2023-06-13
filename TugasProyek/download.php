<!DOCTYPE html>
<html>
    <head>
        <title>Fossacraft | Downloads</title>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="seasons.php">Seasons</a></li>
                    <li><a href="download.php" class="active">Downloads</a></li>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="seasons.php">Seasons</a></li>
                <li><a href="download.php" class="active">Downloads</a></li>
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
            </div>
        </header>

        <div class="downloads">
            <h1>World Downloads</h1>
            <div class="download-lists">
                <a class="download-button" href="https://www.mediafire.com/file/icv1gbwwq0zspm2/FossaCraft_S1_Official_Download.zip/file" target="_blank" download>Download The Season 1 World (1.23 GB)</a>
                <a class="download-button unavailable">Season 2 World not available</a>
                <a class="download-button" href="https://www.mediafire.com/file/3xv1fg1ddfkuumi/FossaCraft_S3_Official_Download.zip/file" target="_blank" download>Download The Season 3 World (2.2GB)</a>
            </div>
            <h1>Datapack Downloads</h1>
            <p>Most datapacks can be obtained via the "Vanilla Tweaks" website. This website was put together by XisumaVoid and his team to share the datapacks that they use on the "Hermitcraft" server. Below are a list of the ones we use on our current season of FossaCraft;</p>
            <div class="download-datapacks">
                <a href="https://vanillatweaks.net/picker/datapacks/">Armor Statues</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Unlock All Recipes</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Fast Leaf Decay</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">AFK Display</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Multiplayer Sleep</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Durability Ping</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Count Mob Deaths</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Spawning Spheres</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Item Averages</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Wandering Trades (Hermit Edition)</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Tag</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Treasure Gems</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Track Raw Statistics</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Track Statistics</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Anti Enderman Grief</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Dragon Drops</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">More Mob Heads</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Silence Mobs</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Player Head Drops</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Custom Nether Portals</a>
                <a href="https://vanillatweaks.net/picker/datapacks/">Nether Portal Coords</a>
            </div>
            <p>Other datapacks we use are listed below, by clicking on each will take you to their page on Planet Minecraft</p>
            <div class="download-datapacks">
                <a href="https://www.planetminecraft.com/data-pack/hats-5164848/">Hats</a>
                <a href="https://www.planetminecraft.com/data-pack/death-coords-datapack/">Death Coordinates</a>
                <a href="https://www.planetminecraft.com/data-pack/leash-villager/">Leash Villagers</a>
                <a href="https://www.planetminecraft.com/data-pack/banner-flags-5591137/">Banners As Flags</a>
            </div>
        </div>
    </body>
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
            <a href="rules.html" target="_blank"><p>Rules</p></a>                
            <a href="download.html" target="_blank"><p>Modifications</p></a>
            <a href="https://discord.com/invite/9xhWF5PPUz" target="_blank"><p>Rebalances </p></a>
        </div>
        <hr id="footer-hr">
    </div>

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
