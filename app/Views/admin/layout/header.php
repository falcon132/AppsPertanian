<?php

$session = \Config\Services::session();
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url('admin/dasbor') ?>" class="nav-link">Dashboard</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url() ?>" class="nav-link" target="_blank">Homepage</a>
    </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url('admin/akun') ?>" class="nav-link">
        <i class="fa fa-user"></i> <?php echo $session->get('nama') ?></a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url('loginadmin') ?>" class="nav-link text-danger">
        <i class="fa fa-sign-out-alt"></i> Logout</a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->