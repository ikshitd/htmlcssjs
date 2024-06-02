<?php
$email = $_POST['email']; 
$password = $_POST['password']; 
$connection = new mysqli("localhost", "root", "", "testing"); 
if ($connection -> connect_error) {
  die("connection failed: $connection -> connect_error");
}
$query = "delete from data where password = '$password' and email = '$email'";  
if ($connection -> query($query)) {
  echo "The data has been deleted"; 
} else {
  echo "There seems to be some kind of issue we are facing"; 
}
?>