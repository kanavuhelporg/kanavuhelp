
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
        $this->load->view('admindashbord');
    }

    public function sidemenu(){
        $this->load->view("sidemenu");
    }

    public function topmenu(){
        $this->load->view("searchbar");
    }

    public function kanavuhelplogo(){
        $this->load->view("kanavuhelplogo");
    }

    public function admin()
    {
        $this->load->view('admin.php');
    }

    public function dashboard()
    {
        $this->load->view('Contact_model');

        // Get all submissions
        $data['submitForm'] = $this->Contact_model->get_all_submissions();

        // Load the admin dashboard view
        $this->load->view('admin', $data);
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

    public function causesverification()
    {

        if (!$this->session->userdata('userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $data['fundraisers'] = $this->adminpanel->get_cause_details();
        $data['counts'] = $this->adminpanel->get_total_causes();
        $data['sno'] = 0;
        $this->session->set_userdata('causescounts',$data['counts']);
        $this->load->view('causesverification.php', $data);
    }

    public function displayCauses(){
        $counts = $this->input->get("count");
        $fundraisers = $this->adminpanel->get_causes_list($counts);
        if(!empty($fundraisers)){    
        foreach ($fundraisers as $index => $donation){
               echo "<tr>
                    <td>".($counts + 1)."</td>
                    <td>$donation->name</td>
                    <td>$donation->email</td>
                    <td>$donation->phone</td>
                    <td>$donation->amount</td>
                    <td>$donation->location</td>
                    <td>$donation->age</td>
                    <td>$donation->end_date</td>
                    <td>$donation->cause_heading</td>
                    <td>$donation->cause_description</td>
                    <td>$donation->created_at</td>
                    <td>$donation->username</td>
                    <td>$donation->raised_amount</td>
                    <td>".($donation->verified == 1 ? 'Yes' : 'No')."</td>
                    <td class='d-flex'>
                        
                        <button onclick='editDonation(".json_encode($donation).")' class='btn btn-primary fw-bold' data-toggle='modal' data-target='#editDonationModal'>
                            Edit
                        </button>&nbsp;&nbsp;
                        <button onclick='setUrl(`$donation->email`,`$donation->username`)' class='btn btn-danger fw-bold' data-toggle='modal' data-target='#sendmail'>
                            Status
                        </button>
                </td>
            </tr>";     
               ++$counts;
            }
            }
            else{
               echo "<tr><td colspan='14'>No causes found</td></tr>";
            }
        }

    public function changeCausespagepagesetup(){
        if (!$this->session->userdata('userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
            $initialindex = $this->input->get('initialindex');
            if($initialindex < 0){
               $data['initialindex'] = 0;
               echo "<script>
                  window.alert('No pages are available to show.')
                    </script>";
            } 
            $counts = $initialindex * 5;
            $this->session->set_userdata('causescounts',$counts);
            $totalcauses = $this->adminpanel->get_total_causes();
            if($counts > $totalcauses){
                echo "<script>
                  window.alert('No pages are available to show.')
                     </script>";
                $counts = 0;  
                $this->session->set_userdata('causescounts',$counts);   
            }
            $causeslist = $this->adminpanel->get_causes_list($counts);
            $this->load->view('causesverification',array("fundraisers"=>$causeslist,"newcounts"=>$totalcauses,"initialindex"=>$initialindex,"sno"=>$counts));         
    }    

    public function transactionverification()
    {
        if (!$this->session->userdata('userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $data['donations'] = $this->adminpanel->transactiondetails();
        $data['counts'] = $this->adminpanel->get_total_transaction();
        $data['sno'] = 0;
        $this->session->set_userdata('verificationpagecounts',$data['counts']);
        $this->load->view('transactionverification.php', $data);
    }

    public function displayVerificationpage(){
        
        $counts = $this->input->get("count");
        $verification = $this->adminpanel->get_verification_list($counts);
        if(!empty($verification)){    
            $i = $counts + 1;
        foreach ($verification as $index => $donation){
            
               echo "<tr>
                    <td> $i</td>
                    <td>".($donation->name)."</td>
                    <td>".($donation->email)."</td>
                    <td>".($donation->phoneno)."</td>
                    <td>".($donation->amount)."</td>
                    <td>".($donation->transactionid)."</td>
                    <td>".($donation->status == 1 ? 'Yes' : 'No')."</td>
                    <td>
                    <button onclick='editDonation(".(json_encode($donation)).")' class='btn btn-primary' data-toggle='modal' data-target='#editDonationModal'>
                    Edit
                    </button>
                    <button onclick='setUrl(`$donation->email`,`$donation->name`)' class='btn btn-danger fw-bold' data-toggle='modal' data-target='#sendmail'>
                    Status
                    </button>
                    </td>
                </tr>";     
               ++$i;
            }
            }
            else{
               echo "<tr><td colspan='14'>No causes found</td></tr>";
            }
    }

    public function changeVerificationpagesetup(){
        if (!$this->session->userdata('userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $initialindex = $this->input->get('initialindex');
        if($initialindex < 0){
           $data['initialindex'] = 0;
           echo "<script>
              window.alert('No pages are available to show.')
                </script>";
        } 
        $counts = $initialindex * 5;
        $this->session->set_userdata('verificationpagecounts',$counts);
        $totalverification = $this->adminpanel->get_total_transaction();
        if($counts > $totalverification){
            echo "<script>
              window.alert('No pages are available to show.')
                 </script>";
            $counts = 0;  
            $this->session->set_userdata('verificationpagecounts',$counts);   
        }
        $verificationlist = $this->adminpanel->get_verification_list($counts);
        $this->load->view('transactionverification.php',array("donations"=>$verificationlist,"newcounts"=>$totalverification,"initialindex"=>$initialindex,"sno"=>$counts)); 
    }

    public function updatecauses()
    {
        // Load the model
        $this->load->model('adminpanel');

        // Get the POST data
        $id = $this->input->post('id');
        $verified = $this->input->post('verified');

        // Validate input
        if (empty($id) || $verified === null) {
            echo json_encode(['status' => 'failure', 'message' => 'Invalid input']);
            return;
        }

        // Update the record
        $updateSuccess = $this->adminpanel->updatecauses($id, $verified);

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode(['status' => $updateSuccess ? 'success' : 'failure']);
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

    public function contact_submissions()
    {
        // Fetch data from the contact_form_submissions table
        $data["sno"] = 0;
        $data["counts"] = count($this->db->get('contact_us')->result());
        $data['submissions'] = $this->db->order_by('created_at', 'DESC')->limit(10)->get('contact_us')->result();
        // Load the view
        $this->load->view('contact_submissions', $data);
    }

    public function displayContactsubmissions(){
        $counts = $this->input->get("count");
        $submissions = $this->adminpanel->get_enquiries_list($counts);
        $this->session->set_userdata('enquirypagecounts',$counts); 
        // $this->db->order_by('created_at', 'DESC')->limit(10)->get('contact_us')->result_array();
        if(!empty($submissions)){    
            $i = $counts + 1;
        foreach ($submissions as $index => $submissions){
            
               echo "<tr>
                    <td>$i</td>
                    <td>".($submissions->name)."</td>
                    <td>".($submissions->email)."</td>
                    <td>".($submissions->phone)."</td>
                    <td>".($submissions->message)."</td>
                    <td>".($submissions->created_at)."</td>
                </tr>";     
               ++$i;
            }
            }
            else{
               echo "<tr><td colspan='6'>No causes found</td></tr>";
            }        
    }

    public function changeContactpagesetup(){
        $initialindex = $this->input->get('initialindex');
        if($initialindex < 0){
           $data['initialindex'] = 0;
           echo "<script>
              window.alert('No pages are available to show.')
                </script>";
        } 
        $counts = $initialindex * 10;
        $this->session->set_userdata('enquirypagecounts',$counts);
        $totalenquiries = count($this->db->get('contact_us')->result());
        if($counts > $totalenquiries){
            echo "<script>
              window.alert('No pages are available to show.')
                 </script>";
            $counts = 0;  
            $this->session->set_userdata('enquirypagecounts',$counts);   
        }
        $enquirieslist = $this->adminpanel->get_enquiries_list($counts);
        $this->load->view('contact_submissions',array("submissions"=>$enquirieslist,"newcounts"=>$totalenquiries,"initialindex"=>$initialindex,"sno"=>$counts)); 
    }
}