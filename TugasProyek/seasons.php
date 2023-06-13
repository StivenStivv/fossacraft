<?php include "config/connection.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fossacraft | Seasons</title>
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
                    <li><a href="seasons.php" class="active">Seasons</a></li>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="seasons.php" class="active">Seasons</a></li>
                <li><a href="download.php">Downloads</a></li>
                <li><a href="donations.php">Donations</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="rules.php">Rules & Terms of Service</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                <li><a href="userlogin.php">Sign In</a></li>
            </div>
        </header>
    
        <section class="hero">
            <img id="bg-video" src="https://primary.jwwb.nl/public/w/d/h/temp-sclosjswwdzrbnajzuag/spoiler_spoiler_fcs4_seed4000x.png" alt="">
        <div class="hero-text">
            <h3>Current Season</h3>
            <h2>Season 4:Stronger Than Dirt</h2>
            <a href="http://51.195.239.57:3405/" class="btn-outline">SHOW MAP</a>
        </div>
        </section>
        <div class="information-container">
            <div class="informations">
                <div class="informations-no-div">
                    <p>Season 4 launched in June of 2022 following the success of previous seasons, the staff team here at FossaCraft wanted to make this season the best yet! For the first time there will be no particulear island for shopping and games. Instead, there will be one community island at the heart of the world where players will be encouraged to, of course build shops and games. However, also to participate in other community projects and much more. We hope to completley transform the community island (which is also world spawn island), into the heart of the server and we are commited to make it thrive by the end of the season.</p>
                </div>
            </div>
        </div>

        <section class="contents">
            <h2>Server Activities <span>in pictures</span> </h2>
            <div class="contents-images">


            <?php 
                $sql = "SELECT * FROM activity";
                $query = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($query)){
            ?>
                <div class="card">
                    <img src="<?= $row['image'];?>" alt="Hotel Room">
                    <p><?= $row['description'];?></p>
                </div>
            <?php
                }
            ?>
                
                <!-- <div class="card">
                    <img src="https://media.discordapp.net/attachments/897797202456485889/1057311618901487626/Picsart_22-12-27_21-54-33-616.jpg?width=468&height=468" alt="Hotel Room">
                    <p>FossaCraft's server is buzzing with excitement as a group of players come together to build a magical Christmas village in Minecraft. The village is adorned with twinkling lights, glittering snowflakes, and festive decorations that capture the essence of the holiday season. The buildings are fashioned with intricate designs that reflect the style of classic Christmas villages, with cozy houses, shops, a towering Christmas tree.</p>
                </div>
                <div class="card">
                    <img src="https://media.discordapp.net/attachments/897797202456485889/1003324126481625171/unknown.png?width=829&height=468" alt="Hotel Room">
                    <p>Xrench has been making steady progress on his impressive pyramid stone temple located in the mangrove biome of Minecraft. The temple is a sight to behold, with a towering structure adorned with intricate carvings and designs. Xrench has been working tirelessly to perfect every detail, using various building techniques to create a truly unique structure. The mangrove biome location adds an extra layer of challenge, as Xrench must navigate the treacherous swamp terrain and avoid obstacles while building.</p>
                </div> -->
                
                
            </div>
            <!-- <button class="view-more">View More</button> -->
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
                <a href="rules.html" target="_blank"><p>Rules</p></a>                
                <a href="download.html" target="_blank"><p>Modifications</p></a>
                <a href="https://discord.com/invite/9xhWF5PPUz" target="_blank"><p>Rebalances </p></a>
            </div>
            <hr id="footer-hr">
        </div>

        <!-- <section class="contents">
            <h2>Season 4 Base Locations</h2>
            <p>Coming Soon</p>
            <button href="#" class="btn-orange">Review Season 1</button>
            <button href="#" class="btn-orange">Review Season 2</button>
            <button href="#" class="btn-orange">Review Season 3</button>
        </section> -->

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
    </body>
</html>
