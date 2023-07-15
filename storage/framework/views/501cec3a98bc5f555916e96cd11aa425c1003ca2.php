<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sales Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo e(asset('css/Chart.min.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset('admin')); ?>/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <!--<a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo e(asset('admin')); ?>/images/logo.svg" alt="logo"/></a> -->
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo e(asset('admin')); ?>/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo e(asset('admin')); ?>/images/faces/face23.jpg" alt="profile"/>
              <span class="nav-profile-name"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              </a>
              <a class="dropdown-item" href="<?php echo e(url('auth/logout')); ?>">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('dashboard.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('barang.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Barang</span>
            </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('sales.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Sales</span>
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('outlet.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Outlet</span>
            </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('transaksi.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pengiriman.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Pengiriman</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <?php echo $__env->make('dashboard.pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php echo $__env->yieldContent('konten'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <!--<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard  </a> templates</span> -->
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo e(asset('admin')); ?>/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo e(asset('admin')); ?>/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('admin')); ?>/js/off-canvas.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/hoverable-collapse.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(asset('admin')); ?>/js/dashboard.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/data-table.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/jquery.dataTables.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/dataTables.bootstrap4.js"></script>
  <script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>
  <!-- End custom js for this page-->

  <?php echo $__env->yieldContent('custom-page-script'); ?>

  <script src="<?php echo e(asset('admin')); ?>/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/layout.blade.php ENDPATH**/ ?>