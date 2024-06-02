<?php
function getPassword() {
  echo "Hey i am in the function inside"; 
  echo "<br>"; 
  $connection = new mysqli("localhost", "root", "", "testing"); 
  if ($connection -> connect_error) {
    die("connection dead !! $connecti on -> connect_error"); 
  }
  $query = "select * from data where password != 'how'";
  $result = $connection -> query($query); 
  if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
      echo "email: ", $row['email'], "password: ", $row['password'];
      echo "<br>";
    }
  }
}
getPassword(); 
?> 
