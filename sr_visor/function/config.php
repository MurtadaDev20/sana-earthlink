<?php
//session timeout after 1 hour of inactivity
ob_start();
// ini_set('session.gc_maxlifetime', 3600);

session_start();


date_default_timezone_set('Asia/Baghdad');
include 'db.php';
?>