<?php
// Clear the authentication token cookie

session_start();
unset($_SESSION["auth"]);
unset($_COOKIE["auth"]);
setcookie('auth' , null,time()-3600,'/');
session_unset(); // remove session varibal
session_destroy();//تحطيم او هدم 
header('location:index.php');
?>