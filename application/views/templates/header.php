<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">
  <style>
  #logo{
    width: 25%;
  }
  .btn, .btn-primary{
    background-color: #FFA500;
    border: none;
  }
  .scr-color{
    background-color: #000;
  }
  .welcome{
    color: #000;
  }
  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand static-top">

    <a class="navbar-brand mr-1" href="<?=site_url()?>dasboard"><img id="logo" src="assets/images/picts/salmanLog.jpeg" alt="salman logo"></a>

    <button class="scr-color btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown mx-1">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="welcome">Welcome !</i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="<?=site_url()?>dasboard/about">About</a>
          <a class="dropdown-item" href="<?=site_url()?>logout">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <!-- <h6 class="dropdown-header">Dashboard Menu</h6> -->
          <a class="dropdown-item" href="<?= site_url()?>dashboard">User Management</a>
          <a class="dropdown-item" href="<?= site_url()?>dashboard/profile">Profile</a>
          <a class="dropdown-item" href="<?= site_url()?>dashboard/presensi">Presensi</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Inventaris</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?= site_url()?>inventaris">List Inventaris</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url()?>statistik">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Statistik</span></a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-table"></i>
          <span>Karyawan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?= site_url()?>karyawan">List Karyawan</a>
          <a class="dropdown-item" href="<?= site_url()?>karyawan/title">Title</a>
          <a class="dropdown-item" href="<?= site_url()?>karyawan/status">Status</a>
        </div>
      </li>
    </ul>
