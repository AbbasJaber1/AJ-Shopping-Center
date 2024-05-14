<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aj_shoppinp_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

$name = $_POST['username'];
$password = $_POST['pass'];

$result = $conn->query("SELECT * FROM users where username = '$name' and pass='$password'");
if ($result->num_rows > 0) {
    // User found
    while ($row = $result->fetch_assoc()) {
        header('location: home.php');
    }
  } else {
    // User not found
    header('location: login.php');
    
  }
  
  $conn->close();

  ?>