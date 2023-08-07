<?php include './function/config.php' ?>
<?php include './inc/header.php' ?>
<?php $id_sr = $_SESSION['sr_id']; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




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



                        <div class="container-xxl flex-grow-1 container-p-y" dir="ltr">
                            <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">الطلبات/</span> اضافة طلب </h4> -->

                            <!-- Basic Layout -->
                            <div class="row ">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-7 ">
                                    <div class=" w-90" id="message" role="alert"></div>
                                    <div class="card mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Add</h5>
                                            <small class="text-muted float-end"></small>
                                        </div>
                                        <div class="card-body">

                                            <!-- Form -->

                                            <form method="POST">
                                                <div class="mb-3">

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">Group Num</label>
                                                        <select class="form-select" id="from" name="group_num" required>
                                                            <option>GPMD - 1</option>
                                                            <option>GPMD - 2</option>
                                                            <option>GPMD - 3</option>
                                                            <option>GPMD - 4</option>
                                                            <option>GPMD - 5</option>
                                                            <option>GPMD - 6</option>
                                                            <option>GPMD - 7</option>

                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="from">Location</label>
                                                        <select class="form-select" id="from" name="location" required>
                                                            <option>بغداد</option>
                                                            <option>البصرة</option>
                                                            <option>النجف</option>
                                                            <option>واسط</option>
                                                            <option>ديالى</option>
                                                            <option>صلاح الدين</option>
                                                            <option>كركوك</option>
                                                            <option>المثنى</option>
                                                            <option>ميسان</option>
                                                            <option>بابل</option>
                                                            <option>الأنبار</option>
                                                            <option>كربلاء</option>
                                                            <option>نينوى</option>
                                                            <option>ذي قار</option>
                                                            <option>القادسية</option>
                                                            <option>السليمانية</option>
                                                            <option>أربيل</option>
                                                            <option>دهوك</option>
                                                            <option>كركوك </option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">Project</label>
                                                        <input class="form-control" name="project" type="text" placeholder="FBG234" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">MT</label>
                                                        <input class="form-control" name="mt" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">DB</label>
                                                        <input class="form-control" name="db" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">HDD</label>
                                                        <input class="form-control" name="hdd" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">HEX</label>
                                                        <input class="form-control" name="hex" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">Total Cost</label>
                                                        <input class="form-control" name="total_cost" min="1000" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">POLE</label>
                                                        <input class="form-control" name="pole" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">BIT</label>
                                                        <input class="form-control" name="bit" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="basic-default-fullname">FUEL</label>
                                                        <input class="form-control" name="fuel" type="number" placeholder="40" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label mt-4" for="basic-default-fullname">Descrption</label>
                                                        <!-- <input type="text" class="form-control" name="other" id="other" placeholder="طلب غير موجود في التصنيف" required /> -->
                                                        <textarea class="form-control" name="desc" cols="30" rows="10" required></textarea>
                                                    </div>

                                                    



                                                </div>


                                                <button type="submit" class="btn btn-primary" name="add_req">Add</button>
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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_req'])) {



    $fullname = $_SESSION['SR_fullName'];
    // $id_team = $_SESSION['team_id'];
    $group_num = htmlspecialchars($_POST['group_num'], ENT_QUOTES, 'UTF-8');
    $location = htmlspecialchars($_POST['location'], ENT_QUOTES, 'UTF-8');
    $project = htmlspecialchars($_POST['project'], ENT_QUOTES, 'UTF-8');
    $mt = htmlspecialchars($_POST['mt'], ENT_QUOTES, 'UTF-8');
    $db = htmlspecialchars($_POST['db'], ENT_QUOTES, 'UTF-8');
    $hdd = htmlspecialchars($_POST['hdd'], ENT_QUOTES, 'UTF-8');
    $hex = htmlspecialchars($_POST['hex'], ENT_QUOTES, 'UTF-8');
    $total_cost = htmlspecialchars($_POST['total_cost'], ENT_QUOTES, 'UTF-8');
    $pole = htmlspecialchars($_POST['pole'], ENT_QUOTES, 'UTF-8');
    $bit = htmlspecialchars($_POST['bit'], ENT_QUOTES, 'UTF-8');
    $fuel = htmlspecialchars($_POST['fuel'], ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($_POST['desc'], ENT_QUOTES, 'UTF-8');



        $query_team = mysqli_query($con, "INSERT INTO `sr_reporting`(`sr_id`, `fullname`, `group_num`, `location`, `project`, `mt`, `db`, `hdd`, `hex`, `total_cost`, `pole`, `bit`, `fuel`, `desc`) 
        VALUES 
        ('$id_sr','$fullname' , '$group_num' , '$location' , '$project' , '$mt' , '$db' , '$hdd' , '$hex' , '$total_cost' , '$pole' ,'$bit' , '$fuel' , '$desc')");
        if ($query_team) {
        ?>
            <script>
                $(function() {
                    Swal.fire('Success', ' Added ', 'success')
                })
            </script>

<?php
            header("REFRESH:1;URL=report_manage.php");
        }
    }




?>