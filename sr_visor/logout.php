<?php
setcookie("auth_token", "", time() - 3600, "/", "", true, true);
session_start();
session_unset(); // remove session varibal
// setcookie('auth',null,time()-3600,"/");
session_destroy();//تحطيم او هدم 
header('location:index.php');
exit();
?>