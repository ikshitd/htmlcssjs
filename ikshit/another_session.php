<?php
session_start();
echo "The username is ", $_SESSION['username'];
echo "<br />";
echo "The password  is ", $_SESSION['password'];
?>