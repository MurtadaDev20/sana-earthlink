<?php ?>
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



    ?>
    <ul class="menu-inner py-1">


        <!-- Requests -->

        <!-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text">الطلبات</span>
        </li> -->



        <li class="menu-item">


            <a href="request_add.php" class="menu-link">
                <span class=" rounded-pill xs "><i class=" badge-right xs menu-icon tf-icons bx bx-dock-top"></i></span>
                <div data-i18n="Account">أضافة طلب</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="request_all.php" class="menu-link">
                <i class=" badge-right xs menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Notifications">كل الطلبات</div><span class="bx-burst mx-4  badge badge-right rounded-pill bg-danger xs">
                    <?php
                    $req = mysqli_query($con, "SELECT COUNT(id) as Request_Count FROM `cart` where coust_id = '$_SESSION[coust_id]'");
                    $row = mysqli_fetch_assoc($req);
                    if ($req) {
                        echo $row['Request_Count'];
                    }
                    ?>
            </a>
        </li>

        <?php
        $query_select_rejection = mysqli_query($con, ("SELECT * FROM rejection_request where resp_id = '$_SESSION[coust_id]'"));

        $count = 0;
        if ($query_select_rejection)

            // $row_rejection = mysqli_fetch_assoc($query_select_rejection);
            $count = mysqli_num_rows($query_select_rejection);
        // $id_rejection = $row_rejection['text'];
        {
            if ($count > 0) {
        ?>
                <li class="menu-item">
                    <a href="requests_rejected.php" class="menu-link">
                        <i class=" badge-right xs menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Notifications">الطلبات المرفوضة</div><span class="bx-tada mx-2  badge badge-right rounded-pill bg-danger xs">
                            <?php
                            $req = mysqli_query($con, "SELECT COUNT(id) as Request_Count FROM `rejection_request` where resp_id = '$_SESSION[coust_id]'");
                            $row = mysqli_fetch_assoc($req);
                            if ($req) {
                                echo $row['Request_Count'];
                            }
                            ?>
                    </a>
                </li>
        <?php
            }
        }

        ?>

        <?php
        $query_select_statues = mysqli_query($con, ("SELECT * FROM invoice where sub_id = '$_SESSION[coust_id]' "));

        $count = 0;

        // $row_rejection = mysqli_fetch_assoc($query_select_rejection);
        $count = mysqli_num_rows($query_select_statues);
        // $id_rejection = $row_rejection['text'];
        {
            if ($count > 0) {
        ?>
                <li class="menu-item">
                    <a href="request_manage.php" class="menu-link">
                        <i class=" badge-right xs menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Notifications"> حالة الطلبات</div>

                    </a>
                </li>
        <?php
            }
        }

        ?>









    </ul>










</aside>