
<?php

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('adminpanel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('cookie');
    }
    public function index()
    {
        $this->load->view('admin.php');
    }
    public function admindashbord()
    {
        $this->load->view('admindashbord.php');
    }
    public function admin()
    {
        $this->load->view('admin.php');
    }

    public function adminLogin()
    {
        $postData = $this->input->post(null, true);
        $login = $this->adminpanel->adminlogin();

        if (isset($login[0]['id'])) {
            // Set session data for the logged-in user
            $userLoggedIn = array(
                'userId' => $login[0]['id'],
                'userName' => $login[0]['name'],
            );
            $this->session->set_userdata($userLoggedIn);

            // Redirect to 'kanavuhome' after successful login
            redirect(('admindashbord'));
        } else {
            // If login fails, reload the login page with an error message
            $this->load->view('admin');
            echo '<script>alert("Please enter registered credentials.");</script>';
        }
    }

    public function transactionverification()
    { $data['donations'] = $this->adminpanel->transactiondetails();
        $this->load->view('transactionverification.php',$data);
    }

    public function editDonation($id)
{
    // Fetch donation details by ID
    $data['donation'] = $this->adminpanel->getDonationById($id);

    // Load the edit form view
    $this->load->view('editDonation', $data);
}
public function updateDonation()
{
    $id = $this->input->post('id');
    $status = $this->input->post('status');

    // Get the name from session
    $verifiedBy = $this->session->userdata('userName');
    log_message('error', 'Donation ID: ' . $id);
    log_message('error', 'Status: ' . $status);
    log_message('error', 'Verified By: ' . $verifiedBy);

    // Load the model and call the update function
    $this->load->model('adminpanel');
    $updateSuccess = $this->adminpanel->updateDonationStatus($id, $status, $verifiedBy);

    // Return a response for the AJAX call based on success/failure
    if ($updateSuccess) {
        echo 'success';
    } else {
        echo 'error';
    }
}

}