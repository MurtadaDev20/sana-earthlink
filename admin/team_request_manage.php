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
                                                        <th>Category</th>
                                                        <th>Descrption</th>
                                                        <th>Project Statuse</th>
                                                        <th>Statuse</th>
                                                        <th>Hours</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="table-border-bottom-0 text-center">
                                                    <?php
                                                    $group_query = mysqli_query($con, "SELECT * FROM groups ");
                                                    $num = 1;
                                                    while ($row = mysqli_fetch_assoc($group_query)) {


                                                    ?>
                                                        <tr>

                                                            <td><?php echo $num++ ?></td>
                                                            <td><?php echo $row['fullname'] ?></td>
                                                            <td><?php echo $row['group_num'] ?></td>
                                                            <td><?php echo $row['location'] ?></td>
                                                            <td><?php echo $row['project'] ?></td>
                                                            <td><?php echo $row['category'] ?></td>
                                                            <td><?php echo $row['desc'] ?></td>
                                                            <td><?php echo $row['project_statuse'] ?></td>
                                                            <?php
                                                            $requestDateTime = $row['date']; // Example datetime for demonstration purposes

                                                            // Calculate the current date and time
                                                            $currentDateTime = date("Y-m-d H:i:s");

                                                            // Convert the request and current date and time to timestamps
                                                            $requestTimestamp = strtotime($requestDateTime);
                                                            $currentTimestamp = strtotime($currentDateTime);

                                                            // Calculate the difference in hours between the current time and the request time
                                                            $timeDifferenceInHours = round((  $currentTimestamp - $requestTimestamp) / (60 * 60));

                                                            // Check if 48 hours have passed
                                                            if ($timeDifferenceInHours > 48 && $row['statues'] == 0) {
                                                                echo '<td class="text-danger  text-center font-weight-bold">Late</td>';
                                                            } elseif ($timeDifferenceInHours < 48 && $row['statues'] == 0) {
                                                                echo '<td class="text-warning  text-center font-weight-bold">On Time</td>';
                                                            } elseif ($row['statues'] == 1) {
                                                                echo '<td class="text-info text-center font-weight-bold">Closed</td>';
                                                            }

                                                            ?>
                                                            <td class=""><?php echo $timeDifferenceInHours; ?> H</td>
                                                            <td><?php echo $row['date'] ?></td>

                                                            <?php
                                                            if ($row['statues'] == 0) {
                                                                echo '<td><a class="btn btn-info" href=group_message.php?message=' . $row["id"] . '>accept</a></td>';
                                                            } else {
                                                                echo '<td><a class="btn btn-info" href=group_Detils_message.php?message=' . $row["id"] . '>Detiles</a></td>';
                                                            }

                                                            ?>




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