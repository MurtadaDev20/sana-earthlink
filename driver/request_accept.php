<?php include './function/config.php' ?>
<?php include './inc/header.php' ?>
<?php
if (isset($_GET['responce']) && !empty($_GET['responce'])) {
    $count = 0;
    global $con;
    $responce = $_GET['responce'];
    $query = "SELECT * FROM response where invo_drive_id = '$responce'";

    $query_invoic = mysqli_query($con, "SELECT * FROM invoice_driver where id_driv_invo = '$responce'");
    $row_invoice = mysqli_fetch_assoc($query_invoic);
    $id_invoice = $row_invoice['id_driv_invo'];
}
?>

</head>

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


                        <div class="container-xxl flex-grow-1 container-p-y" dir="rtl">
                            <h4 class="fw-bold py-3 mb-4 "><span class="text-muted fw-light">الطلبات/</span> كافة الطلبات </h4>
                            <div class="row ">
                                <div class="col-md-9">
                                    <!-- Basic Bootstrap Table -->
                                    <div class="card" dir="rtl">

                                        <hr>
                                        <div class="table-responsive text-nowrap ">
                                            <table class="table" id="example">
                                                <thead>

                                                    <tr>
                                                        <th>#</th>
                                                        <th class="fs-5">القسم</th>
                                                        <th class="fs-5">الطلب</th>
                                                        <th class="fs-5">طلبات اخرى</th>
                                                        <th class="fs-5">الكمية</th>
                                                        <th class="fs-5">جهة التصدير</th>
                                                        <th class="fs-5">من</th>
                                                        <th class="fs-5">الى</th>
                                                        <th class="fs-5">الاحداثي</th>
                                                        <th class="fs-5">رقم الاوردر</th>
                                                        <th class="fs-5"> نوع المشروع </th>
                                                    </tr>

                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr>
                                                        <?php
                                                        $requests = mysqli_query(
                                                            $con,
                                                            "SELECT r.project_type , r.driver_id , r.id , r.coust_id , r.customer_name , r.quantity , r.source , r.req_from , r.req_to , r.other , r.coordinates , r.order_number , r.date , c.Name_Category , p.product_name FROM response r  
                                                            INNER JOIN categories c ON r.category_id = c.id
                                                            INNER JOIN products p ON r.product_id = p.p_id
                                                            Where r.driver_id = '$_SESSION[id_driver]' And invo_drive_id ='$responce'
                                                            ORDER BY id DESC"
                                                        );

                                                        $num = 1;
                                                        while ($row = mysqli_fetch_assoc($requests)) {



                                                        ?>
                                                    <tr>

                                                        <td><?php echo $num++; ?></td>
                                                        <td><?php echo $row['Name_Category'] ?></td>
                                                        <td><?php echo $row['product_name'] ?></td>
                                                        <td><?php echo $row['other'] ?></td>
                                                        <td><?php echo $row['quantity'] ?></td>
                                                        <td><?php echo $row['source'] ?></td>
                                                        <td><?php echo $row['req_from'] ?></td>
                                                        <td><?php echo $row['req_to'] ?></td>
                                                        <td><?php echo $row['coordinates'] ?></td>
                                                        <td><?php echo $row['order_number'] ?></td>
                                                        <td><?php echo $row['project_type'] ?></td>

                                                        <td>

                                                        <?php
                                                        }




                                                        ?>
                                                        </td>


                                                        <?php
                                                        $num++;

                                                        ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 mt-3">
                                    <?php
                                    $count = 0;
                                    $query_check_responce = mysqli_query($con, "SELECT * FROM response Where driver_id = '$_SESSION[id_driver]'");
                                    $count = mysqli_num_rows($query_check_responce);

                                    if ($count > 0) {
                                    ?>

                                        <div class="card text-center">
                                            <h5>
                                                <div class="card-header">العمليات</div>
                                            </h5>
                                            <div>
                                                <?php
                                                $query_select_id = mysqli_query($con, "SELECT * FROM response Where invo_drive_id = '$responce' ");
                                                $row_select_id = mysqli_fetch_assoc($query_select_id);
                                                ?>
                                                <div class="text-center p-3">
                                                    <a class="btn btn-info" href="accept_response.php?accept=<?php echo $row_select_id['invo_id']; ?>&&invo_id=<?php echo $row_select_id['invo_drive_id']; ?>">موافقة</a>
                                                    <a class="btn btn-danger" href="rejection_driver.php?rejection=<?php echo $row_select_id['invo_id']; ?>&&invo_id=<?php echo $row_select_id['invo_drive_id']; ?>">رفض</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>



                        </div>
                        <!-- / Content -->


                        <!-- Footer -->
                        <?php
                        include './inc/footer.php'
                        ?>
</body>

</html>