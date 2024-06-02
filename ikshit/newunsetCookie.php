<?php
if (isset($_COOKIE['last_visit'])) {
  unset($_COOKIE["last_visit"]); 
  setcookie("last_visit", "", -1, "/"); 
  echo "the cookie has been unset"; 
} else {
  echo "The cookie is already not there";
}
?>