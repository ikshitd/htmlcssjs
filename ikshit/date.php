<?php 
$d = date("l jS \of F Y h.i.s A");
setcookie("Last_visit", $d, time() + 8600, "/"); 
echo "The cookie has been set";
?>