<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->view('login');
		$this->load->view('welcome_footer');
	}

	public function forget()
	{
		$this->load->view('forgetPassword');
	}

	public function logout()
	{
		$this->load->view('logout');
	}
}
