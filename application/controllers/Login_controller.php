<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('login');
	}
}
?>