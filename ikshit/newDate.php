<?php
$d = date("l d F Y h.i.s A"); 
if (isset($_COOKIE['last_visit'])) {
  echo "Your last visit was : " . $_COOKIE['last_visit']; 
} else {
  echo "Well this is the first time you are visiting us !! Refresh and see the magic"; 
}
setcookie("last_visit", $d, time() + 86400, "/"); 
?>  