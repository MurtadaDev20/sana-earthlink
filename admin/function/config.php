<?php
//session timeout after 1 hour of inactivity
ob_start();
// ini_set('session.gc_maxlifetime', 3600);

session_start();




$auth["status"]=false;
$auth["user"]=[];

if(isset($_SESSION["auth"]))
{
    $auth["status"] = true;
    $auth["user"] = $_SESSION["auth"];
}
if(isset($_COOKIE["auth"]))
{
    $auth["status"] = true;
    $auth["user"] = json_decode($_COOKIE['auth'],true);
}


date_default_timezone_set('Asia/Baghdad');
include 'db.php';
?>