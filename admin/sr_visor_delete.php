<?php
include './function/config.php';

if (isset($_GET['delete'])) {
    $del_id = $_GET['delete'];
    $query = "DELETE from sr_visor where id ='$del_id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('location:sr_visor_manage.php');
    }
}
