<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Selamat Datang</title>

	<link rel="stylesheet" href="assets/css/w3.css">

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1{
		color: #000;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	img{
		width: 20%;
	}
	header{
		margin-top: -2em;
	}
	</style>
</head>
<body>

<header>
	<a href="#"><img src="assets/images/picts/salmanLog.jpeg" alt="Salman Logo"></a>
</header>

<div id="container">
	<h1>Home</h1>

	<div id="body">

		<!-- Sidebar -->
		<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
			<a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
				<i class="fa fa-remove"></i>
			</a>
			<h4 class="w3-bar-item"><b>Menu</b></h4>
			<a class="w3-bar-item w3-button w3-hover-black" href="#">Beranda</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="<?= site_url()?>login">Login</a>
		</nav>

		<!-- Overlay effect when opening sidebar on small screens -->
		<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

		<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
		<div class="w3-main" style="margin-left:250px; margin-top: -15em;">
			<div class="w3-row w3-padding-64">
			<h1>Selamat Datang di Sistem Informasi Karyawan Salman</h1>
				<div class="w3-twothird w3-container">
				<h1 class="w3-text-teal">Selamat Datang</h1>
				<p>Anda berada di situs Sistem Informasi Karyawan Salman. Situs ini dikhususkan bagi karyawan Masjid Salman ITB sebagai sarana informasi human resources, absensi, dll. Silahkan gunakan username dan password yang telah anda dapatkan untuk mengakses sistem informasi human resources ini.</p>
				<p>Terima kasih, selamat berselancar!</p>
			</div>
			<p></p>

			<div class="w3-row w3-padding-64">
			<h1>Pengumuman</h1>
				<div class="w3-twothird w3-container">
				<h1 class="w3-text-teal">Work From Home</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
					dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

	</div>

	<p class="footer">Salman Human Resources Version <strong> 1.0 </strong></p>
</div>

</body>
</html>