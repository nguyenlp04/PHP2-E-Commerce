<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Prorealty - Dashboard</title>
    <link rel="shortcut icon" href="<?=BASE_PATH?>/public/images/logo.png" type="image/f-icon" />
    <script src="https://kit.fontawesome.com/59847bd5e5.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/Chart.min.js"></script>

    <link rel="stylesheet" href="<?=BASE_PATH?>/public/vendor/dataTables/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_PATH?>/public/vendor/dataTables/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?=BASE_PATH?>/public/vendor/dataTables/jquery.dataTables.min.js"></script>
    <script src="<?=BASE_PATH?>/public/vendor/dataTables/dataTables.bootstrap5.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="<?=BASE_PATH?>/public/css/admin.css" rel="stylesheet">
   
    <link href="<?=BASE_PATH?>/public/css/add-post.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>/public/css/upload-property.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="<?=BASE_PATH?>/public/js/sweetalert.js" rel="stylesheet"></script>

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script> -->

 



</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Commerce </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Interface</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-city"></i>
                    <span> Sản Phẩm</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy Chọn Sản Phẩm :</h6>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/product">Danh Sách Sản Phẩm</a>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/product/add">Thêm Sản Phẩm</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaction"
                    aria-expanded="true" aria-controls="collapseTransaction">
                    <i class="fa-solid fa-handshake"></i>
                    <span>Danh Mục</span>
                </a>
                <div id="collapseTransaction" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy Chọn Danh Mục :</h6>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/category">Danh Sách Danh Mục </a>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/category/add">Thêm Danh Mục</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransactions"
                    aria-expanded="true" aria-controls="collapseTransactions">
                    <i class="fa-solid fa-handshake"></i>
                    <span>Mã Giảm Giá</span>
                </a>
                <div id="collapseTransactions" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy Chọn Mã Giảm Giá :</h6>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/coupon">Danh Sách Mã Giảm Giá </a>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/coupon/add">Thêm Mã Giảm Giá</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser"
                    aria-expanded="true" aria-controls="collapseuser">
                    <i class="fa-solid fa-user"></i>
                    <span>Người Dùng</span>
                </a>
                <div id="collapseuser" class="collapse" aria-labelledby="headinguser" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy Chọn Người Dùng :</h6>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/user">Danh Sách Người Dùng</a>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/user/add">Thêm Người Dùng </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseusers"
                    aria-expanded="true" aria-controls="collapseusers">
                    <i class="fa-solid fa-user"></i>
                    <span>Bài Viết</span>
                </a>
                <div id="collapseusers" class="collapse" aria-labelledby="headinguser" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy Chọn Bài Viết :</h6>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/blog">Danh Sách Bài Viết</a>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/blog/add">Thêm Bài Viết </a>
                        <a class="collapse-item" href="<?php echo BASE_PATH ?>/admin/blog/category">Danh Mục Bài Viết </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="setting"><i class="fas fa-fw fa-wrench"></i> <span>Cài đặt</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
        </ul>


<!--  -->
    <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
             <!-- Topbar -->
             <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                 <!-- Sidebar Toggle (Topbar) -->
                 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                     <i class="fa fa-bars"></i>
                 </button>

                 <!-- Topbar Search -->

                 <!-- Topbar Navbar -->
                 <ul class="navbar-nav ml-auto">
                     <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                     <li class="nav-item dropdown no-arrow d-sm-none">
                         <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-search fa-fw"></i>
                         </a>
                         <!-- Dropdown - Messages -->
                         <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                             <form class="form-inline mr-auto w-100 navbar-search">
                                 <div class="input-group">
                                     <input type="text" class="form-control bg-light border-0 small"
                                         placeholder="Search for..." aria-label="Search"
                                         aria-describedby="basic-addon2" />
                                     <div class="input-group-append">
                                         <button class="btn btn-primary" type="button">
                                             <i class="fas fa-search fa-sm"></i>
                                         </button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </li>

                     <!-- Nav Item - Alerts -->
                     <li class="nav-item dropdown no-arrow mx-1">
                         <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-bell fa-fw"></i>
                             <!-- Counter - Alerts -->
                             <span class="badge badge-danger badge-counter">3+</span>
                         </a>
                         <!-- Dropdown - Alerts -->
                         <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                             <h6 class="dropdown-header">Alerts Center</h6>
                             <a class="dropdown-item d-flex align-items-center" href="#">
                                 <div class="mr-3">
                                     <div class="icon-circle bg-primary">
                                         <i class="fas fa-file-alt text-white"></i>
                                     </div>
                                 </div>
                                 <div>
                                     <div class="small text-gray-500">December 12, 2019</div>
                                     <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                 </div>
                             </a>
                             <a class="dropdown-item d-flex align-items-center" href="#">
                                 <div class="mr-3">
                                     <div class="icon-circle bg-success">
                                         <i class="fas fa-donate text-white"></i>
                                     </div>
                                 </div>
                                 <div>
                                     <div class="small text-gray-500">December 7, 2019</div>
                                     $290.29 has been deposited into your account!
                                 </div>
                             </a>
                             <a class="dropdown-item d-flex align-items-center" href="#">
                                 <div class="mr-3">
                                     <div class="icon-circle bg-warning">
                                         <i class="fas fa-exclamation-triangle text-white"></i>
                                     </div>
                                 </div>
                                 <div>
                                     <div class="small text-gray-500">December 2, 2019</div>
                                     Spending Alert: We've noticed unusually high spending for
                                     your account.
                                 </div>
                             </a>
                             <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                         </div>
                     </li>

                     <!-- Nav Item - Messages -->
                     <li class="nav-item dropdown no-arrow mx-1">
                         <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-envelope fa-fw"></i>
                             <!-- Counter - Messages -->
                             <span class="badge badge-danger badge-counter">7</span>
                         </a>
                         <!-- Dropdown - Messages -->
                         <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                             <h6 class="dropdown-header">Message Center</h6>
                             <a class="dropdown-item d-flex align-items-center" href="#">
                                 <div class="dropdown-list-image mr-3">
                                     <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                                     <div class="status-indicator bg-success"></div>
                                 </div>
                                 <div class="font-weight-bold">
                                     <div class="text-truncate">
                                         Hi there! I am wondering if you can help me with a
                                         problem I've been having.
                                     </div>
                                     <div class="small text-gray-500">Emily Fowler · 58m</div>
                                 </div>
                             </a>
                             <a class="dropdown-item d-flex align-items-center" href="#">
                                 <div class="dropdown-list-image mr-3">
                                     <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                                     <div class="status-indicator"></div>
                                 </div>
                                 <div>
                                     <div class="text-truncate">
                                         I have the photos that you ordered last month, how would
                                         you like them sent to you?
                                     </div>
                                     <div class="small text-gray-500">Jae Chun · 1d</div>
                                 </div>
                             </a>
                             <a class="dropdown-item d-flex align-items-center" href="#">
                                 <div class="dropdown-list-image mr-3">
                                     <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                                     <div class="status-indicator bg-warning"></div>
                                 </div>
                                 <div>
                                     <div class="text-truncate">
                                         Last month's report looks great, I am very happy with
                                         the progress so far, keep up the good work!
                                     </div>
                                     <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                 </div>
                             </a>
                             <a class="dropdown-item d-flex align-items-center" href="#">
                                 <div class="dropdown-list-image mr-3">
                                     <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="..." />
                                     <div class="status-indicator bg-success"></div>
                                 </div>
                                 <div>
                                     <div class="text-truncate">
                                         Am I a good boy? The reason I ask is because someone
                                         told me that people say this to all dogs, even if they
                                         aren't good...
                                     </div>
                                     <div class="small text-gray-500">
                                         Chicken the Dog · 2w
                                     </div>
                                 </div>
                             </a>
                             <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                         </div>
                     </li>

                     <div class="topbar-divider d-none d-sm-block"></div>

                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nguyen</span>
                             <img class="img-profile rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" />
                         </a>
                         <!-- Dropdown - User Information -->
                         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                             <a class="dropdown-item" href="profileDetail">
                                 <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Profile
                             </a>
                             <a class="dropdown-item" href="setting">
                                 <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Settings
                             </a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="../logout" >
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                 Logout
                             </a>
                         </div>
                     </li>
                 </ul>
             </nav>