<?php include './function/config.php' ?>
<?php include './inc/header.php' ?>
</head>
<?php

?>
<script>
    $(document).ready(function() {
        $(".group").DataTable({
            lengthMenu: [10, 25, 50, 100], // Available options for number of rows

            dom: 'Blfrtip',
            buttons: ['csv', 'excel', 'pdf'],
            lengthMenu: [10, 25, 50, 100],
            language: {
                lengthMenu: 'Display _MENU_ rows',
            }
        });
    });
</script>

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
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Requests/</span> Manage Requests</h4>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card">
                                        <h5 class="card-header text-center">
                                            Requests From Team Leader

                                        </h5>
                                        <hr>
                                        <div class="table-responsive text-nowrap">
                                            <table class="group table border-top custom-table" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name </th>
                                                        <th>Group Num</th>
                                                        <th>Location</th>
                                                        <th>Project</th>
                                                        <th>MT</th>
                                                        <th>DB</th>
                                                        <th>HDD</th>
                                                        <th>HEX</th>
                                                        <th>Production</th>
                                                        <th>Total Cost</th>
                                                        <th>Pole</th>
                                                        <th>Bit</th>
                                                        <th>Fuel</th>
                                                        <th>Descrption</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="table-border-bottom-0 text-center">
                                                    <?php
                                                    $group_query = mysqli_query($con, "SELECT * FROM sr_reporting ");
                                                    $num = 1;
                                                    while ($row = mysqli_fetch_assoc($group_query)) {


                                                    ?>
                                                        <tr>

                                                            <td><?php echo $num++ ?></td>
                                                            <td><?php echo $row['fullname'] ?></td>
                                                            <td><?php echo $row['group_num'] ?></td>
                                                            <td><?php echo $row['location'] ?></td>
                                                            <td><?php echo $row['project'] ?></td>
                                                            <td><?php echo $row['mt'] ?></td>
                                                            <td><?php echo $row['db'] ?></td>
                                                            <td><?php echo $row['hdd'] ?></td>
                                                            <td><?php echo $row['hex'] ?></td>
                                                            <td><?php 
                                                            $Production = $row['mt'] + $row['db'] + $row['hdd'] + $row['hex'];
                                                            echo $Production;
                                                            ?></td>
                                                            <td><?php echo $row['total_cost'] ?></td>
                                                            <td><?php echo $row['pole'] ?></td>
                                                            <td><?php echo $row['bit'] ?></td>
                                                            <td><?php echo $row['fuel'] ?></td>
                                                            <td><?php echo $row['desc'] ?></td>
                                                            <td><?php echo $row['date'] ?></td>
                                                            




                                                        </tr>
                                                    <?php

                                                    }
                                                    ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>


                                <?php


                                ?>

                            </div>
                            <?php

                            ?>

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