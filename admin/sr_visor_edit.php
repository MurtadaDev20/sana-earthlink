<?php include './function/config.php' ?>
<?php include './inc/header.php' ?>

<?php

?>

<?php

global $con;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_team'])) {





    $fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $direct_manager = htmlspecialchars($_POST['direct_manager'], ENT_QUOTES, 'UTF-8');
    $hrms_id = htmlspecialchars($_POST['hrms_id'], ENT_QUOTES, 'UTF-8');


    $count = 0;
    $res = mysqli_query($con, "SELECT * FROM team_leaders");
    $count = mysqli_num_rows($res);

    if (empty($fullname)) {
?>
        <script>
            $(function() {
                Swal.fire('Error', 'Please Enter Full Name', 'error')
            })
        </script>
    <?php
    } elseif (empty($password)) {
    ?>
        <script>
            $(function() {
                Swal.fire('Error', 'Please Enter The Password', 'error')
            })
        </script>
    <?php
    } elseif (empty($hrms_id)) {
    ?>
        <script>
            $(function() {
                Swal.fire('Error', 'Please Enter The HRMS', 'error')
            })
        </script>
    <?php
    } elseif (empty($direct_manager)) {
    ?>
        <script>
            $(function() {
                Swal.fire('Error', 'Please Enter The direct_manager', 'error')
            })
        </script>
        <?php
    } else {

        $update = mysqli_query($con, "UPDATE `team_leaders` SET `team_leader_name` = '$fullname', `password` = '$password', `email` = '$email' , `phone` = '$phone' , `direct_manager` = '$direct_manager' , `id_hrms` = '$hrms_id' WHERE `id` = '$_GET[team_leader]'");
        if (isset($update)) {

        ?><script>
                $(function() {
                    Swal.fire('Success', ' team leader Edited ', 'success')
                })
            </script>

<?php
            header("REFRESH:1;URL=team_leader_manage.php");
        }
    }
}




$get_team_leaders = mysqli_query($con, "SELECT * FROM `team_leaders` WHERE `id` = '$_GET[team_leader]'");
$team_leaders = mysqli_fetch_assoc($get_team_leaders);
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php // include './inc/aside.php' 
            ?>

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php include './inc/nav.php' ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">



                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Team Leader/</span>Edit Team Leader </h4>

                            <!-- Basic Layout -->
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="card mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Add</h5>
                                            <small class="text-muted float-end">Supervisors</small>
                                        </div>
                                        <div class="card-body">

                                            <!-- Form -->

                                            <form action="" method="POST">

                                                <form action="" method="POST">

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Full Name</label>
                                                        <input type="text" class="form-control" name="fullname" id="basic-default-fullname" value="<?php echo $team_leaders['team_leader_name'] ?>" required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Password</label>
                                                        <input type="text" name="password" class="form-control" id="basic-default-fullname" value="<?php echo $team_leaders['password'] ?>" required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Email</label>
                                                        <input type="email" name="email" class="form-control" id="basic-default-fullname" value="<?php echo $team_leaders['email'] ?>" required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Phone</label>
                                                        <input type="number" name="phone" class="form-control" id="basic-default-fullname" value="<?php echo $team_leaders['phone'] ?>" placeholder="077453738395" required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-fullname">Direct Manager</label>
                                                        <input type="text" name="direct_manager" class="form-control" name="fullname" id="basic-default-fullname" value="<?php echo $team_leaders['direct_manager'] ?>" placeholder="Murtada" required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-fullname">HRMS_id</label>
                                                        <input type="number" name="hrms_id" class="form-control" name="fullname" id="basic-default-fullname" value="<?php echo $team_leaders['id_hrms'] ?>" placeholder="958574" required />
                                                    </div>


                                                    <button type="submit" class="btn btn-primary" name="edit_team">Edit</button>
                                                </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include './inc/footer.php' ?>
</body>

</html>