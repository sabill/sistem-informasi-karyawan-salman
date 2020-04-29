<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
	public function presensi()
	{
		$this->load->view('templates/header');
        $this->load->view('presensi');
		$this->load->view('templates/footer');
	}
	public function profile()
	{
		$this->load->view('templates/header');
       	$this->load->view('profile');
		$this->load->view('templates/footer');
	}
}
