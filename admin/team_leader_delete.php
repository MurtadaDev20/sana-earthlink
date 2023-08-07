<?php
include './function/config.php';

if (isset($_GET['delete'])) {
    $del_id = $_GET['delete'];
    $query = "DELETE from team_leaders where id ='$del_id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('location:team_leader_manage.php');
    }
}
