<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('kanavuhome.php');
	}
	public function login()
	{
		$this->load->view('login.php');
	}
	public function register()
	{
		$this->load->view('register.php');
	}   
	public function submit()
	{
		// $this->load->helper('url');
		// $this->load->library('form_validation');
		// $this->load->database();

		// $this->form_validation->set_rules('email','email','required|is_unique[user.email]',array('is_unique'=>'Email already exists!'));
		// $this->form_validation->set_rules('name','name','required');
		// $this->form_validation->set_rules('userpassword','password','required');
		// if($this->form_validation->run()==FALSE){
		// 	$this->load->view('signup_form');
		// }else{
		// $data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('exampleInputEmail1');
		$data['password'] = $this->input->post('exampleInputpassword1');
		$this->load->model('UserModel');
		$response = $this->UserModel->store($data);
		if ($response == true) {
			echo '<script>alert("Succesfully registered")</script>';
			// $this->index();
		} else {
			echo 'Failed to register';
		}
		// }
	}
}
?>