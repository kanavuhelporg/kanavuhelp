<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kanavuhelp extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
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
        $this->load->model('UserModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('cookie');

    }
    public function index()
    {
        $this->load->view('kanavuhome.php');
    }
    public function kanavuhome()
    {
        $this->load->view('kanavuhome.php');
    }
    public function register()
    {
        $this->load->view('register.php');
    }
	public function login()
    {
        $this->load->view('login.php');
    }
	public function individual()
    {
        $this->load->view('individual.php');
    }
	public function charity()
    {
        $this->load->view('charity.php');
    }
	public function donate()
    {
        $this->load->view('donate.php');
    }
	public function myhelps()
    {
        $this->load->view('myhelps.php');
    }
	public function blogs()
    {
        $this->load->view('blogs.php');
    }
	public function contactus()
    {
        $this->load->view('contactus.php');
    }
	public function abouts()
    {
        $this->load->view('abouts.php');
    }
	public function registeration()
	{
		$data['name'] = $this->input->post('exampleInputName');
		$data['email'] = $this->input->post('exampleInputEmail1');
		$data['password'] = $this->input->post('exampleInputPassword1');
		$this->load->model('UserModel');
		$response = $this->UserModel->store1($data);
		if ($response == true) {
			// echo '<script>alert("Succesfully registered")</script>';
            $this->load->view('login');
		} else {
			echo 'Failed to register';
		}
		
	}
	public function userLogin()
	{
		$postData = $this->input->post(null, true);
		$login = $this->UserModel->loginUser();
	
		if (isset($login[0]['id'])) {
			// Set session data for the logged-in user
			$userLoggedIn = array(
				'userId' => $login[0]['id'],
				'userName' => $login[0]['name'],
			);
			$this->session->set_userdata($userLoggedIn);
	
			// Redirect to 'kanavuhome' after successful login
			redirect(base_url('kanavuhome'));
	
		} else {
			// If login fails, reload the login page with an error message
			$this->load->view('login.php');
			echo '<script>alert("Please enter registered credentials.");</script>';
		}
	}
	
}
