<?php
$email = $_REQUEST['email']; 
$password = $_REQUEST['password'];
$connection = new mysqli("localhost", "root", "", "testing"); 
if ($connection -> connect_error) {
  die("Connection failed: , $connection -> connect_error"); 
}
$query = "select * from data where email = '$email'"; 
$result = $connection -> query($query); 
if ($result -> num_rows > 0) {
  // echo "welcome how are you today ? ";
  while ($row = $result -> fetch_assoc()) {
    echo "email: ", $row['email'], " password: ", $row['password'];
    print("<br />"); 
  }
} else {
  echo "Not found !!!";
}
?>