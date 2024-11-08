
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
    public function logout()
{
    // Destroy all session data
    $this->session->sess_destroy();

    // Redirect to the login page
    redirect('admin'); // Adjust this if your login page is at a different URL
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
    
    // Load the model and call the update function
    $this->load->model('adminpanel');
    $updateSuccess = $this->adminpanel->updateDonationStatus($id, $status, $verifiedBy);
    if ($updateSuccess && $status == 1) { // assuming 1 represents "Yes"
        $donationData = $this->adminpanel->getDonationById1($id); // Get donation details for the cause_id and amount
        if ($donationData) {
            $this->adminpanel->update_raised_amount($donationData->cause_id, $donationData->amount);
        }
    }
    // Set content type header to JSON
    header('Content-Type: application/json');
    
    // Return JSON response for the AJAX call
    echo json_encode(['status' => $updateSuccess ? 'success' : 'failure']);
}



}