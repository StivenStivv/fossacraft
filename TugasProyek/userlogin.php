<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fossacraft | Login</title>
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
                    <li><a href="rules.php">Rules & Terms of Service</a></li>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                    <li><a href="userlogin.php" class="active">Sign In</a></li>
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
                <li><a href="rules.php">Rules & Terms of Service</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdxkv9ffBtp8N3y1key5WU-Nz5w4vftLfVS_kIjpjr3u0Z0QA/viewform" class="btn-apply">Apply</a></li>
                <li><a href="userlogin.php" class="active">Sign In</a></li>
            </div>
        </header>
        <main>
          <section class="donate">
            <h2>Sign In</h2>
            <form action="userlogin_process.php" method="post">
              <label for="name">Username:</label>
              <input type="text" id="name" name="username" required>
              <label for="email">Password:</label>
              <input type="password" id="password" name="password" required>
              <button type="submit">Sign In</button>
              <a href="userregister.php" class="">Don't have an account?</a>
            </form>
          </section>
        </main>
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