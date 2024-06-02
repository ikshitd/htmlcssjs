<?php
session_start(); 
if (isset($_SESSION['views'])) {
  unset($_SESSION['views']); 
  echo "The variable has been reset"; 
} else {
  echo "The variable has been gone already !!"; 
}
?>