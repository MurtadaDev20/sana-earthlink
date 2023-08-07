<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Sana</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <!-- Admin -->

    <?php
    
    if (($_SESSION['rols']) == "admin") {


    ?>
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="dashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Requests -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Requests</span>
            </li> -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Requests</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id_invo) as Request_Count FROM `invoice` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Request_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="request_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Requests</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Rejection Drivers</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id) as Regection_Count FROM `rejection_driver` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Regection_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="rejection_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Rejection</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Request Team Leader</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id) as Regection_Count FROM `groups` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Regection_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="team_request_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Request</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Daliy Report Sr</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id) as Regection_Count FROM `sr_reporting` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Regection_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="sr_visor_request_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage </div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Supervisor -->

            <!-- Supervisor -->

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Users</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Supervisors</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="supervisor_add.php" class="menu-link">
                            <div data-i18n="Account">Add Supervisor</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="supervisor_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Supervisors</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Driver</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="driver_add.php" class="menu-link">
                            <div data-i18n="Account">Add Driver</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="driver_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Driver</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Team Leader</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="team_leader_add.php" class="menu-link">
                            <div data-i18n="Account">Add Team Leader</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="team_leader_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Team Leader</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Senior Visor </div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="sr_visor_add.php" class="menu-link">
                            <div data-i18n="Account">Add Senior Visor</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="sr_visor_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Senior Visor</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">COMPONENTS</span>
            </li>

            <!-- End Supervisor -->

            <!-- Categories -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Categories</span>
            </li> -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='bx-flashing menu-icon tf-icons bx bx-category'></i>
                    <div data-i18n="Account Settings">Categories</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="category_add.php" class="menu-link">
                            <div data-i18n="Account">Add Category</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="categories_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Categories</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Categories -->

            <!-- Products -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Products</span>

            </li> -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='bx-tada menu-icon tf-icons bx bxl-product-hunt'></i>
                    <div data-i18n="Account Settings">Products</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="product_add.php" class="menu-link">
                            <div data-i18n="Account">Add Product</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="product_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Products</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Products -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' bx-spin menu-icon tf-icons bx bx-history'></i>
                    <div data-i18n="Account Settings">History</div>
                </a>

                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="history_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Rejected requests</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="completed_order.php" class="menu-link">
                            <div data-i18n="Notifications">Completed Orders Internal</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="complete_order_external.php" class="menu-link">
                            <div data-i18n="Notifications">Completed Orders External</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Products -->
        </ul>

    <?php

    }
    ?>

    <!-- Editor -->

    <?php
    if (($_SESSION['rols']) == "editor") {


    ?>
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="dashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Requests -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Requests</span>
            </li> -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Requests</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id) as Request_Count FROM `invoice` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Request_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="request_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Requests</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Rejection Drivers</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id) as Regection_Count FROM `rejection_driver` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Regection_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="rejection_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Rejection</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Supervisor -->

            <!-- Supervisor -->


            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">COMPONENTS</span>
            </li>

            <!-- End Supervisor -->

            <!-- Categories -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Categories</span>
            </li> -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='bx-flashing menu-icon tf-icons bx bx-category'></i>
                    <div data-i18n="Account Settings">Categories</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="category_add.php" class="menu-link">
                            <div data-i18n="Account">Add Category</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="categories_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Categories</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Categories -->

            <!-- Products -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Products</span>

            </li> -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='bx-tada menu-icon tf-icons bx bxl-product-hunt'></i>
                    <div data-i18n="Account Settings">Products</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="product_add.php" class="menu-link">
                            <div data-i18n="Account">Add Product</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="product_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Products</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Products -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' bx-spin menu-icon tf-icons bx bx-history'></i>
                    <div data-i18n="Account Settings">History</div>
                </a>

                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="history_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Rejected requests</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="completed_order.php" class="menu-link">
                            <div data-i18n="Notifications">Completed Orders Internal</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="complete_order_external.php" class="menu-link">
                            <div data-i18n="Notifications">Completed Orders External</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Products -->
        </ul>

    <?php

    }
    ?>

    <!-- View -->
    <?php
    if (($_SESSION['rols']) == "view") {


    ?>
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="dashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Requests -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Requests</span>
            </li> -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Requests</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id_invo) as Request_Count FROM `invoice` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Request_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="request_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Requests</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Rejection Drivers</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id) as Regection_Count FROM `rejection_driver` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Regection_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="rejection_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Rejection</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Supervisor -->

            <!-- Supervisor -->


            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">COMPONENTS</span>
            </li>

    

            <!-- Products -->

            <!-- <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Products</span>

            </li> -->

            <!-- End Products -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' bx-spin menu-icon tf-icons bx bx-history'></i>
                    <div data-i18n="Account Settings">History</div>
                </a>

                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="history_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Rejected requests</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="completed_order.php" class="menu-link">
                            <div data-i18n="Notifications">Completed Orders Internal</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="complete_order_external.php" class="menu-link">
                            <div data-i18n="Notifications">Completed Orders External</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- End Products -->
        </ul>

    <?php

    }
    ?>



    <!-- Groups For Team Leader -->

    <?php
    if (($_SESSION['rols']) == "groups") {


    ?>
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="dashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class=' menu-icon tf-icons  bx bx-label'></i>
                    <div data-i18n="Account Settings">Request Team Leader</div><span class=" bx-burst mx-5 badge badge-right rounded-pill bg-danger xs">
                        <?php
                        $req = mysqli_query($con, "SELECT COUNT(id) as Regection_Count FROM `groups` ");
                        $row = mysqli_fetch_assoc($req);
                        if ($req) {
                            echo $row['Regection_Count'];
                        }
                        ?>
                    </span>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item">
                        <a href="team_request_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Request</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Team Leader</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="team_leader_add.php" class="menu-link">
                            <div data-i18n="Account">Add Team Leader</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="team_leader_manage.php" class="menu-link">
                            <div data-i18n="Notifications">Manage Team Leader</div>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>



    <?php

    }
    ?>





</aside>