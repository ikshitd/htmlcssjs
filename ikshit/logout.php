<?php 
session_start(); 
session_unset(); 
session_destroy(); 
echo "The session variables are destroyed !!"; 
?>