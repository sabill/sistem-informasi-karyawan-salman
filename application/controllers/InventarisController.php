<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventarisController extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('inventaris');
		$this->load->view('templates/footer');
	}
}