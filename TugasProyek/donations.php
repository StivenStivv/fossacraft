<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fossacraft | Donations</title>
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
                    <li><a href="donations.php" class="active">Donations</a></li>
                    <li><a href="review.php">Review</a></li>
                    <li><a href="rules.php">Rules & Terms of Service</a></li>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                    <li><a href="userlogin.php">Sign In</a></li>
                </ul>
                
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
    
            <div class="dropdown_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="seasons.php">Seasons</a></li>
                <li><a href="download.php">Downloads</a></li>
                <li><a href="donations.php" class="active">Donations</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="rules.php">Rules & Terms of Service</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                <li><a href="userlogin.php">Sign In</a></li>
            </div>
        </header>
  <main>
    <section class="donate">
      <h2>Donate Now</h2>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_donations">
        <input type="hidden" name="business" value="your-email@example.com">
        <input type="hidden" name="currency_code" value="USD">
        <label for="name">Name:</label>
        <input type="text" id="name" name="first_name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="amount">Amount:</label>
        <select id="amount" name="amount" required>
          <option value="">Choose an amount</option>
          <option value="25">$25</option>
          <option value="50">$50</option>
          <option value="100">$100</option>
        </select>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        <button type="submit">Donate Now</button>
      </form>
    </section>
  </main>
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
