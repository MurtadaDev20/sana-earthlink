<?php include './function/config.php' ?>
<?php include './inc/header.php' ?>
</head>
<?php
if (isset($_GET['message']) && !empty($_GET['message'])) {
    $count = 0;
    global $con;
    $message = $_GET['message'];
    $query =mysqli_query($con , "SELECT * FROM group_message where id_group = '$message'") ;

    $row_mess = mysqli_fetch_assoc($query);

    $message_det = $row_mess['message'];
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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Requests/</span>Message</h4>
                            <div class="row">

                                

                                    <div class="col-md-8 mt-3">
                                        <div class="card ">
                                            <h5>
                                                <div class="card-header">Response Mesaage to The Team Leader</div>
                                                <hr>
                                                <p class="text-left p-3">
                                                    <?php 
                                                        echo $message_det;
                                                    ?>
                                                </p>
                                            </h5>

                                        </div>
                                    </div>
                            </div>
                        

                        
                        <!-- Basic Bootstrap Table -->


                    </div>
                    <!-- / Content -->


                    <!-- Footer -->
                    <?php
                    include './inc/footer.php'
                    ?>
</body>

</html>