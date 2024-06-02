<?php
$email = $_REQUEST['email']; 
$password = $_REQUEST['password'];
$connection = new mysqli("localhost", "root", "", "testing"); 
if ($connection -> connect_error) {
  die("connection failed!!, $connection -> connect_error"); 
}
$query = "insert into data values('$email', '$password')"; 
if ($connection -> query($query)) {
  echo "ok"; 
} else {
  echo "fuck no !!"; 
}
?>