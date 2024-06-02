<?php
if (isset($_COOKIE['Last_visit'])) {
  unset($_COOKIE['Last_visit']);  
  setcookie("Last_visit", "", -1, "/");
  echo "The cookie is unset"; 
} else {
  echo "The cookie isn't present already !!"; 
}
?>