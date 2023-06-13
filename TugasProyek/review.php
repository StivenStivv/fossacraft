<?php
    include "config/connection.php";
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fossacraft | Review</title>
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
                    <li><a href="download.php">Downloads</a></li>
                    <li><a href="donations.php">Donations</a></li>
                    <li><a href="review.php" class="active">Review</a></li>
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
                <li><a href="download.php">Downloads</a></li>
                <li><a href="donations.php">Donations</a></li>
                <li><a href="review.php" class="active">Review</a></li>
                <li><a href="rules.php">Rules & Terms of Service</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                <li><a href="userlogin.php">Sign In</a></li>
            </div>
        </header>

    <div class="container-review">
        <div class="review">
            <center>
                <h1>Review</h1>
            </center>
        </div>

        <center>
            <button type="submit" class="btn-anonymously" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSdi5WLM_jt3bXzcgE1OmUmU8cel21IG_mjJcW7cR3Al5E-QGQ/viewform';">Leave Anonymously - Click Here</button>
            <hr>
        </center>
        <form action="process.php" method="post">
        
        
        <div class="review-comment">
        <div class="container-box">
            <div class="kotak1">
                <h1>Website Review</h1>
                <h3>Site Navigation</h3>
                <input type="radio" name="website_review" value="easy">Easy <br>
                <input type="radio" name="website_review" value="somewhat easy">Somewhat easy <br>
                <input type="radio" name="website_review" value="not easy / not hard">Not easy/Not hard <br>
                <input type="radio" name="website_review" value="somewhat hard">Somewhat Hard <br>
                <input type="radio" name="website_review" value="hard">Hard <br>
                <!-- <button type="submit" name="submit" id="submit" value="kirim" class="vote">Vote</button> -->

                <br><br><br>
                <h1>Quality of Information Provided on Site</h1>
                <input type="radio" name="qof_review" value="excellent">Excellent <br>
                <input type="radio" name="qof_review" value="good">Good <br>
                <input type="radio" name="qof_review" value="okay">Okay <br>
                <input type="radio" name="qof_review" value="needs improvement">Needs Improvement <br>
                <input type="radio" name="qof_review" value="awful">Awful <br>
                <!-- <button type="submit" name="submit" id="submit" value="kirim" class="vote">Vote</button> -->

                <br><br><br>
                
            </div>

            <div class="kotak2">
                <h1>Servers Review</h1>
                <h3>Server Community</h3>
                <input type="radio" name="servers_review" value="amazing">Amazing <br>
                <input type="radio" name="servers_review" value="great">Great <br>
                <input type="radio" name="servers_review" value="okay">Okay <br>
                <input type="radio" name="servers_review" value="bad">Bad <br>
                <input type="radio" name="servers_review" value="awful">Awful <br>
                <!-- <button type="submit" name="submit" id="submit" value="kirim" class="vote">Vote</button> -->

                <br><br><br>
                <h1>Time Spent on Server is</h1>
                <input type="radio" name="time_spent" value="very enjoyable">Very Enjoyable <br>
                <input type="radio" name="time_spent" value="enjoyable">Enjoyable <br>
                <input type="radio" name="time_spent" value="okay">Okay <br>
                <input type="radio" name="time_spent" value="not enjoyable">Not Enjoyable <br>
                <input type="radio" name="time_spent" value="awful">Awful <br>
                <!-- <button type="submit" name="submit" id="submit" value="kirim" class="vote">Vote</button>     -->
            </div>
        </div>
            <h1>Comment</h1>
            
            
            <p>Comment *</p>
            <textarea name="comment" id="review-comment-inputs" cols="30" rows="10"></textarea>
            
            <button type="submit" name="submit" id="review-comment-button" value="kirim" class="vote">Vote</button>
        </form>
        </div>
    </div>

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