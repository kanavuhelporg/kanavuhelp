<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donors extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->library('session');
      $this->load->library('email');
      $this->load->model('DonorprofileModel');
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->load->helper('cookie');
    //   $this->load->config('email');
      $this->config->load('email');
      $this->load->helper('url');
  }

  public function getHeader(){
    $this->load->view("header");
  }

  public function getFooter(){
    $this->load->view("footer");
  }

/*   public function fetchDonordata() {
    if($this->input->is_ajax_request()) {
        $phone = $this->input->post("phone");
        $getdata = $this->DonorprofileModel->fetchDonordata($phone);
        if(!$getdata) {
            echo "notexist";
        }
        else {
            echo json_encode($getdata);
        }
        
    }
  }  */

 
/* old email code start */
    public function fetchDonordata() {
    if($this->input->is_ajax_request()) {
        $email = $this->input->post("email");
        $getdata = $this->DonorprofileModel->fetchDonordata($email);
        if(!$getdata) {
            echo "notexist";
        }
        else {
            echo json_encode($getdata);
        }
        
    }
  }  

  /* email old code end */
 
  public function myhelps()
    {
        
// Debugging: Check if the userId is available in the session
        
        $is_logged_in = $this->session->userdata('Kanavu_userId') !== null; // Check if userId is set
        $data['is_logged_in'] = $is_logged_in;
        if(!$is_logged_in) {
            redirect("login_myhelps");
        }
        $user_id = $this->session->userdata('Kanavu_userId');
        $this->load->model('UserModel');
        $data['causes'] = $this->DonorprofileModel->getCausesDonationByUserId($user_id);
        // Fetch causes created or donated by the logged-in user
        

        // Load the view and pass the causes data
        $this->load->view('myhelps', $data);
    }


  public function donorLogin() {

    $email = $this->input->post("loginemail");
    $login = $this->DonorprofileModel->loginUser($email);
    $otp = $this->input->post("loginotp") ?? "";
    $countotp = strlen($otp);

        if ($login->num_rows() == 0){
            $this->session->unset_userdata("donorEmail");
            $this->session->set_flashdata("not_registered_donor", true);
            redirect("login_myhelps");
        } 
         else {
            if($countotp == 0){
                $this->session->set_userdata("donorEmail",$email);
                $this->session->set_userdata("path","login");   
                $this->session->set_userdata("Kanavu_user","donor");        
                redirect("donor_otp_email");
                }
                else{
                    $user = $login->row();
                    $userLoggedIn = array(
                        'Kanavu_userId' => $user->Donor_id,
                        'Kanavu_userName' => $user->Name,
                    );
                    $this->session->set_userdata($userLoggedIn);
                    $this->session->set_userdata("entry",0);
                    redirect('myhelps');
                    $this->session->unset_userdata("donorEmail");
                }
        }
  }

  public function mydonations() {
    if(!$this->session->userdata("Kanavu_userId")) {
        redirect("/");
    }
    $donor_id = $this->session->userdata("Kanavu_userId");
    $getdonations = $this->DonorprofileModel->getMydonations($donor_id);
    
  }

  public function login_myhelps() {
    $this->load->view("login_myhelps");
  }

  public function donor_otp_email() {
        // Initialize the email with config settings

        $userEmail = $this->session->userdata('donorEmail');
        $to = $userEmail;
        $otp = rand(1000, 9999);
        $this->session->set_userdata('generated_otp', $otp);
       
        $message = "Your OTP is $otp.";

        $this->email->from('support@kanavu.help', 'Kanavu Help');
        $this->email->to($to);
        $this->email->subject('Kanavu Help Foundation');
        $this->email->message($message);

        if ($this->email->send()) {
            // Set a session variable to indicate OTP was sent
            $this->session->set_flashdata('otp_sent', true);
                redirect('/login_myhelps');// Redirect back to the same page
        } else {
                $this->session->set_userdata("mailstatus","failed");
                redirect("/login_myhelps");        
            }
            // echo $this->email->print_debugger(); // Print debug info if sending fails
        }
}
?>    