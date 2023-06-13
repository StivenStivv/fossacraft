<?php
include "config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fossacraft | Rules</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon"
        href="https://yt3.googleusercontent.com/A9knEMlO1Lj9zhq-pl3a_TFh2Ry4cQc_ScFkAq0Inp-LjRSCsl2L6JdY_8DmxzMKYYIYZ2Kn0ks=s176-c-k-c0x00ffffff-no-rj"
        type="image/x-icon">
</head>

<body bgcolor="grey">
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
                    <li><a href="review.php">Review</a></li>
                    <li><a href="rules.php" class="active">Rules & Terms of Service</a></li>
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
                <li><a href="review.php">Review</a></li>
                <li><a href="rules.php" class="active">Rules & Terms of Service</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                <li><a href="userlogin.php">Sign In</a></li>
            </div>
        </header>

    <div class="container-rules">
        <div class="rules">
            <center>
                <h1>Rules</h1>
            </center>
        </div>


        <div class="container-box-rules">
            <!-- <center>
                <button type="submit" class="btn-anonymously-rules">CLICK FOR TERM OF SERVUCE (TOS) - <a href="#">Click
                        Here</a></button>
            </center> -->
            <p>Rules as stated on our discord:</p>
            <br>
            <hr><br>

            <h1>Rules / Guidelines / Links</h1>
            <p>
                By joining this server, you are accepting our community guidelines and the terms of service presented to
                us by Discord. Some rules in the Discord ToS may be repeated in the rules to further emphasize what at
                the time seems more necessary to further express.
            </p>

            <div class="rules-link">
                <a href="https://discord.com/termshttps://discord.com/terms" target="_blank"
                    title="Term of Service">Discord Terms of Service</a><br>
                <a href="https://discord.com/guidelines" target="_blank">Discord Community Guidelines</a><br>
                <p>-</p>
                <a href="https://www.fossacraft.com/rules-terms-of-service" target="_blank"
                    title="Community Guidelines">FossaCraft Terms of Service</a><br>
                <a href="https://discord.com/invite/9xhWF5PPUz" target="_blank">FossaCraft Official Discord
                    Server</a><br>
                <a href="https://www.youtube.com/channel/UCvkUu2VPqjgEPDu1xiIwFsA/featured" target="_blank">FossaCraft
                    Official YouTube</a>

                <br>
                <hr>
                <h1>General Rules</h1>
                <p>1) Be considerate towards others and assume good faith.</p>
                <p>2) Use channels for their intended purposes.</p>
                <p>3) Use common sense, in terms of what you believe would be allowed and what wouldn't. If you are
                    confused of such, please contact a staff member and ask. We're always happy to help!</p>
                <p>4) Do not ping a staff member for no reason.</p>
                <p>5) Do not harass others or use discriminatory or offensive language.</p>
                <p>6) Do not spam, chain text, or post large walls of text, including the spam of links (of which they
                    should also be relevant and follow the other rules, such as not to be offensive etc.)</p>
                <p>7) Use of offensive, foul, language both in-game and in discord server. This rule applies to
                    everyone. Hate speech, racism, and discrimination also fall under this rule. Note that cussing is
                    not necessarily prohibited, However, should be used with maturity in case someone is sensitive
                    towards such topic.</p>
                <p>8) Do not join this server or any other server to spread hate. Doing so will result in punishment.
                </p>
                <p>9) Do not plagiarize content without a citation.</p>
                <p>10) Do not post or share anything that can be considered NSFW or inappropriate, player that breaks
                    this rule will be punished depending on severeness.</p>
                <p>11) Do not reveal any person's information without their consent.</p>
                <p>12) Do not reveal any information a member would like to keep secret. This includes things relevant
                    to FossaCraft, such as items, locations, or events.</p>
                <p>13) Do not disrespect staff, if you got issues with a staff member take it to the DM's. Otherwise DM
                    a higher rank with explanation and proof.</p>
                <p>14) Searching for or making use of the world seed is considered cheating and punishable (Note, even
                    the owner & co-owner do not have permission to seek seed details).</p>

                <br>
                <hr>
                <h1>When adding images/Graphics or any other Media in Channels:</h1>
                <p>1) Give clear, concise names with a relevant title.</p>
                <p>2) Ensure you are not uploading a duplicate file (duplicates will be removed)</p>
                <p>3) Please use either JPG or PNG file types.</p>
                <p>4) Upload art, media, memes, etc, to relevant channels only.</p>
                <p>5) Do not upload files which violate the standard Terms of Use. This includes pornographic,
                    discriminatory, or offensive images. Please note that we are mature so reference's to such topics
                    can be made however with the best intentions in mind as not to trigger anyone.</p>
                <p>6) It is preferred you upload higher quality images. Please note that this is not enforceable.
                    Although, it would be good if we can see your work in good quality!</p>

                <br>
                <hr>
                <h1>Violations Board:</h1>
                <p>First Violation: Warn <br>
                    Second Violation: Second Warn <br>
                    Third Violation: Temporary Mute (Length will depend on severity) <br>
                    Fourth Violations: Temporary Ban (Length will depend on severity) <br>
                    Fifth Violation: Permanent Ban</p>

                <br>
                <hr>
                <p>If you are caught breaking any of these rules, know that punishment is inevitable. <br>
                    Rules will be updated every now and then without notice, we expect everyone to uphold them the same
                    as usual. <br>
                    Depending on what you did, we will, if necessary, skip warns and straight to temporary or permanent
                    ban.
                </p>
                <br>
                <!-- <center>
                    <button type="submit" class="btn-anonymously-rules">CLICK FOR TERM OF SERVUCE (TOS)</button>
                </center> -->
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
                <a href="rules.html" target="_blank"><p>Rules</p></a>                
                <a href="download.html" target="_blank"><p>Modifications</p></a>
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