<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_movements";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['move'])){
    $De = $_POST['move'];

 }  
 $sql = "insert into movements (direction) values('$De')";
 echo $De;
 echo '<br>';
 

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 


