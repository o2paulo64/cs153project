<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Downgrade_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('update_model','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['userName'];
	 $data['userid'] = $session_data['userID'];
	 $datum = array(
			'userId' => $this->input->post('userId'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'firstname' => $this->input->post('firstName'),
			'lastname' => $this->input->post('lastName'),
			'birthMonth' => $this->input->post('birthMonth'),
			'birthDay' => $this->input->post('birthDay'),
			'birthYear' => $this->input->post('birthYear'),
			'address' => $this->input->post('address'),
			'authority' => 0
	);
	 $this->update_model->upgradeentry($datum);
     redirect('/ViewDowngrade_controller', 'refresh');
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>