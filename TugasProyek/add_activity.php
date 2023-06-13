<?php
include "config/connection.php";



// Insert image
if (isset($_POST['insert'])) {
  $description = $_POST['description'];
  $imageLink = $_POST['image'];

  $sql = "INSERT INTO activity (description, image) VALUES ('$description', '$imageLink')";
  $con->query($sql);
}

// Update image
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $description = addslashes($_POST['description']);
  $imageLink = $_POST['image'];

  $sql = "UPDATE activity SET description='$description', image='$imageLink' WHERE id='$id'";
  $con->query($sql);

}

// Delete image
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $sql = "DELETE FROM activity WHERE id='$id'";
  $con->query($sql);
}

// Retrieve activity from the database
$sql = "SELECT * FROM activity";
$result = $con->query($sql);

?>

<script>
        function showUpdateForm(id, description, imageLink) {
            document.getElementById("update-form").style.display = "block";
            document.getElementById("update-id").value = id;
            document.getElementById("update-description").value = description;
            document.getElementById("update-image-link").value = imageLink;
        }
    </script>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fossacraft | Activities</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />
</head>

<body bgcolor="grey">
        <main>
          <section class="donate">
          <a href="dashboard.php" class="">Back</a>
            <h2>Upload</h2>
            <form action="add_activity_process.php" method="post">
              <label for="name">Image Link:</label>
              <input type="text" id="image" name="image" required>
              <label for="email">Description:</label>
              <textarea type="text" id="description" name="description" required></textarea>
              <button type="submit">Upload</button>
            </form>
            <br>
            
            
            <div id="update-form" style="display:none">
            <h2>Update Image</h2>
                <form action="" method="POST">
                    <input type="hidden" id="update-id" name="id">
                    <input type="text" id="update-image-link" name="image" required>
                    <textarea type="text" id="update-description" name="description" required></textarea>
                    <button type="submit" name="update" value="Update">Update</button>
                </form>
            </div>
          </section>
          
        </main>
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
                    <a href="?delete=<?php echo $row['id']; ?>" class="btn">Delete</a>
                    <button class="btn btn-primary" onclick="showUpdateForm('<?php echo addslashes($row['id']); ?>', '<?php echo addslashes($row['description']); ?>', '<?php echo addslashes($row['image']); ?>')">Update</button>
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
        

</body>
</html>