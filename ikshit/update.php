<?php
$email = $_POST['email']; 
$password = $_POST['password']; 
$connection = new mysqli("localhost", "root", "", "testing"); 
if ($connection -> connect_error) {
  die("connection failed: $connection -> connect_error");
}
$query = "update data set password = '$password' where email = '$email'";  
if ($connection -> query($query)) {
  echo "The password has been reset"; 
} else {
  echo "There seems to be some kind of issue we are facing"; 
}
?>