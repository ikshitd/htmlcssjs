<?php
echo "HERE"; 
echo "<br>"; 
session_start(); 
if (isset($_SESSION["views"])) {
  $_SESSION['views'] = $_SESSION['views'] + 1; 
} else {
  $_SESSION['views'] = 1; 
}
echo "The session count is: ", $_SESSION['views'];
?> 