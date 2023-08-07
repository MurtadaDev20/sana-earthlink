<?php
include './function/config.php' ?>
<?php
include './inc/header.php'
?>


<script>
    $(document).ready(function() {
        $(".suber").DataTable({
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


</body>

</html>

<body>
    <!--Layout wrapper-->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!--Menu-->

            <?php include './inc/aside.php' ?>

            <!--/ Menu-->

            <!--Layout container-->
            <div class="layout-page">
                <!--Navbar-->

                <?php include './inc/nav.php' ?>

                <!--/ Navbar-->

                <!--Content wrapper-->
                <div class="content-wrapper">
                    <!--Content-->

                    <div class="container-xxl flex-grow-1 container-p-y">


                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4">
                                <span class="text-muted fw-light"> Senior Visor / </span> Senior Visor Manage
                            </h4>

                            <!--Basic Bootstrap Table-->
                            <div class="card">
                                <h5 class="card-header"> Team Leaders </h5>
                                <div class="card-datatable table-responsive pt-0">

                                    <table class="suber table border-top custom-table">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Full Name </th>
                                                <th> Password </th>
                                                <th> Email </th>
                                                <th> Phone </th>
                                                <th> Direct Manager </th>
                                                <th> HRMS_ID </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody class=" table-border-bottom-0">


                                            <?php
                                            $supervisor = mysqli_query($con, "SELECT * FROM `sr_visor` ORDER BY `id` DESC");
                                            $num = 1;
                                            while ($row = mysqli_fetch_assoc($supervisor)) {
                                                echo '
                                                            <tr>
                                                                <td>' . $num . '</td>
                                                                <td>' . $row['team_leader_name'] . '</td>
                                                                <td>' . $row['password'] . '</td>
                                                                <td>' . $row['email'] . '</td>
                                                                <td>' . $row['phone'] . '</td>
                                                                <td>' . $row['direct_manager'] . '</td>
                                                                <td>' . $row['id_hrms'] . '</td>
                                                                <td>
                                                                
                                                                <a href="sr_visor_delete.php?delete=' . $row['id'] . '" class="btn btn-danger btn-xs">حذف</a>
                                                                </td>
                                                                
                                                            </tr>
                                                        ';
                                                $num++;
                                                // <a href="team_leader_edit.php?team_leader=' . $row['id'] . '" class="btn btn-warning btn-xs">تعديل</a>
                                            }
                                            ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                        <!--/ Content -->

                        <!--Footer-->
                        <?php
                        include './inc/footer.php'
                        ?>




</body>

</html>