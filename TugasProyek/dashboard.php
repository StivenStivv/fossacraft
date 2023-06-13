

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<button class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> Add Activities</button>
<?php
include "config/connection.php";
if (isset($_SESSION["admin"])) {
  header("Location: dashboard.php");

}


// Mengeksekusi query untuk mengambil data review berdasarkan nama pengguna
$sql = "SELECT username, id, website_review, servers_review, quality_information, time_spent, comment FROM review";
$result = $con->query($sql);

// Menampilkan data review
if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "
    <thead>
          <tr>
            <th>Username</th>
            <th>Website Review</th>
            <th>Servers Review</th>
            <th>Quality Information</th>
            <th>Time Spent</th>
            <th>Comment</th>
            <th>Aksi</th>
          </tr>
    </thead>      
    ";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['website_review'] . "</td>";
        echo "<td>" . $row['servers_review'] . "</td>";
        echo "<td>" . $row['quality_information'] . "</td>";
        echo "<td>" . $row['time_spent'] . "</td>";
        echo "<td>" . $row['comment'] . "</td>";
        echo "<td><a href='delete_review.php?id=" . $row['id'] . "'>Hapus</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No review data submitted";
}

$sql_user = "SELECT username, email FROM tbuser";
$result_user = $con->query($sql_user);

// Menampilkan data login
if ($result_user->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "
    <thead>
          <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
    </thead>      
    ";
    while ($row_user = $result_user->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row_user['username'] . "</td>";
        echo "<td>" . $row_user['email'] . "</td>";
        echo "<td><a href='delete_temp_user.php?username=" . $row_user['username'] . "' class='btn btn-danger'>Delete</a> <a href='app_temp_user.php?username=" . $row_user['username'] . "' class='btn btn-success'>Confirm</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No temporary user data submitted";
}
?>
</body>
</html>




<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}
</style>
<script>
  function add(){
    location.href = "add_activity.php";
  }
</script>
