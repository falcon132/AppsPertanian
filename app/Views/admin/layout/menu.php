<?php

$session = \Config\Services::session();
?>
<style type="text/css" media="screen">
  .nav-item a:hover {
    color: yellow !important;
  }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dahboard -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin/dasbor') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- Berita -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin/berita') ?>" class="nav-link">
            <i class="fas fa-table nav-icon"></i>
            <p>Data Berita/Artikel</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/berita/tambah') ?>" class="nav-link">
            <i class="fas fa-plus nav-icon"></i>
            <p>Tambah Berita/Artikel</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/kategori') ?>" class="nav-link">
            <i class="fas fa-tags nav-icon"></i>
            <p>Kategori Berita/Artikel</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/excel') ?>" class="nav-link">
            <i class="fas fa-table nav-icon"></i>
            <p>File excel</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/tabel_excel') ?>" class="nav-link">
            <i class="fas fa-table nav-icon"></i>
            <p>Data Pengguna tanpa login</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/pengguna') ?>" class="nav-link">
            <i class="fas fa-tags nav-icon"></i>
            <p>Data Pengguna</p>
          </a>
        </li>
        <!-- logout -->
        <li class="nav-item">
          <a href="<?php echo base_url('loginadmin/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dasbor') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="min-height: 500px;">


              <?php
              $validation = \Config\Services::validation();
              $errors = $validation->getErrors();
              if (!empty($errors)) {
                echo '<span class="text-danger">' . $validation->listErrors() . '</span>';
              }
              ?>

              <?php if (session('msg')) : ?>
                <div class="alert alert-info alert-dismissible">
                  <?= session('msg') ?>
                  <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                </div>
              <?php endif ?>