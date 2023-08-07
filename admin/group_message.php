<?php include './function/config.php' ?>
<?php include './inc/header.php' ?>

<?php
if (isset($_GET['message']) && !empty($_GET['message'])) {
    $count = 0;
    global $con;
    $message = $_GET['message'];
    $query = mysqli_query($con, "SELECT * FROM groups where id = '$message'");

    $row_message = mysqli_fetch_assoc($query);

    $id_team = $row_message['team_id'];
    $id_group = $row_message['id'];
}
?>

<?php

global $con;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rejection'])) {
}
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php include './inc/aside.php' ?>

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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Message</span> </h4>

                            <!-- Basic Layout -->
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="card mb-4">
                                        <div class="card-header  align-items-center text-center">
                                            <h5 class="mb-0 ">Send Message To Team Leader</h5>
                                        </div>
                                        <hr>
                                        <div class="card-body">

                                            <!-- Form -->

                                            <form action="" method="POST">

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-fullname">Message</label>
                                                    <textarea name="message" cols="30" rows="10" id="basic-default-message" class="form-control" placeholder="Write A Message" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                                                </div>



                                                <button type="submit" class="btn btn-primary" name="btn_message">Send</button>
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


<?php
global $con;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_message'])) {




    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    if (empty($message)) {
?>
        <script>
            $(function() {
                Swal.fire('Error', 'Please Enter  Message', 'error')
            })
        </script>
    <?php
    } else {
        $query = mysqli_query($con, "INSERT INTO group_message (`id_group`, `id_team`, `message`, `statues`) 
        VALUES 
        ('$id_group','$id_team','$message','1')");


    ?>
        <script>
            $(function() {
                Swal.fire('Success', 'Added Message To The Team Leader', 'success')
            })
        </script>
<?php

        $query_groups = mysqli_query($con, "UPDATE `groups` SET `statues`='1' where id ='$id_group'");

        header("REFRESH:1;URL=team_request_manage.php");
    }
}

?>