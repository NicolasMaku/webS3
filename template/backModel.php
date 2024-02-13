<?php
$page="cards.php";



//if(!$_SESSION['is_admin']){
//    header("location:");
//}

if (isset($_GET['page'])) {
    $page=$_GET['page'];
}
?>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Basic Inputs - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/Green_Leaves_-remov.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script><style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }
        .content-wrapper {
            padding-bottom: 0px !important;
        }</style>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container" style="background-color: rgba(0,217,46,0.1)!important;">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
            <div class="app-brand demo" >
                <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                      <img src='../assets/img/favicon/Green_Leaves_-remov.png' alt="" width="40px">
              </span>
                    <span class="app-brand-text demo menu-text fw-bold">CollecTea</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow" style="display: none;"></div>

            <ul class="menu-inner py-1 ps">

<!--                <li class="menu-item" style=";text-align: center!important;">-->
<!---->
<!--                    <div data-i18n="Basic" style="font-size: 20px;color: #690000;margin-top: 10px"> <i class=' menu-icon bx bx-street-view'></i> <b>Admin</b></div>-->
<!---->
<!--                </li>-->

                <li class="menu-item">
                    <div class="menu-link" style="font-size: 20px;color: #690000;margin-top: 10px">
                        <i class=" menu-icon bx bx-street-view"></i>
                        <div data-i18n="Basic"><b>Admin</b></div>
                    </div>
                </li>

                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>


                <!-- Cards -->
                <li class="menu-item">
                    <a href="backModel.php?page=../pages/cards.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-collection"></i>
                        <div data-i18n="Basic">Cards</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Account Settings</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/account.php" class="menu-link">
                                <div data-i18n="Account">Account</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/notification.php" class="menu-link">
                                <div data-i18n="Notifications">Notifications</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/connection.php" class="menu-link">
                                <div data-i18n="Connections">Connections</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Forms & Tables -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
                <!-- Forms -->
                <li class="menu-item active" style="">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-detail"></i>
                        <div data-i18n="Form Elements">Form Elements</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item active">
                            <a href="backModel.php?page=../pages/form.php" class="menu-link">
                                <div data-i18n="Basic Inputs">Basic Inputs</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/inputgroupes.php" class="menu-link">
                                <div data-i18n="Input groups">Input groups</div>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Tables -->
                <li class="menu-item">
                    <a href="backModel.php?page=../pages/tables.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-table"></i>
                        <div data-i18n="Tables">Tables</div>
                    </a>
                </li>
                <!--lastna -->

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-leaf"></i>
                        <div data-i18n="Gestion">Varieter de the</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/tableauVarieterThe.php" class="menu-link">
                                <div data-i18n="Tableau">Tableau</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/insertVarieteThe.php" class="menu-link">
                                <div data-i18n="Inserer">Inserer</div>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-area"></i>
                        <div data-i18n="Gestion ">Gestion de Parcelle</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/tableauParcelle.php" class="menu-link">
                                <div data-i18n="Tableau">Tableau</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/insererParcelle.php" class="menu-link">
                                <div data-i18n="Inserer">Inserer</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-face"></i>
                        <div data-i18n="Gestion">Gestion de Ceuilleur</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/tableauCeuilleur.php" class="menu-link">
                                <div data-i18n="Tableau">Tableau</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/insertCeuilleur.php" class="menu-link">
                                <div data-i18n="Inserer">Inserer</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-store"></i>
                        <div data-i18n="Gestion">Categories de Depense</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/tableauCategorieDepense.php" class="menu-link">
                                <div data-i18n="Tableau">Tableau</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="backModel.php?page=../pages/insertCategorieDepense.php" class="menu-link">
                                <div data-i18n="Inserer">Inserer</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="backModel.php?page=../pages/configMontantSalaire.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-table"></i>
                        <div data-i18n="Tables">Configurer le Salaire</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="backModel.php?page=../pages/moisDeProduction.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-table"></i>
                        <div data-i18n="Tables">Configurer les mois de production</div>
                    </a>
                </li>






                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 1048px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search...">
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                        <li class="nav-item lh-1 me-3">
                            <span></span>
                        </li>

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-medium d-block">John Doe</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle ms-1">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->
            <?php include './'.$page; ?>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        <p>Les feuille c'est la vie</p>
                    </div>
                    <div class="d-none d-lg-inline-block">
                        <p class="footer-link me-4" target="_blank">Etu002534</p>
                        <p target="_blank" class="footer-link me-4">Etu002554</p>
                        <p target="_blank" class="footer-link me-4">Etu002498</p>

                    </div>
                </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->

<script src="../assets/js/form-basic-inputs.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>


</body></html>