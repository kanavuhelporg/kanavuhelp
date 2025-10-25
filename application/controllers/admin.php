
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
        $this->load->library('email');
        $this->config->load('email');
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
        $totalunverifiedtransactions = $this->adminpanel->totalUnverifiedtransactions();
        $this->session->set_userdata("unverifiedtransactions",$totalunverifiedtransactions);
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
                'adminId' => $login[0]['id'],
                'adminName' => $login[0]['name'],
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

    public function adminlogout(){
         $this->session->unset_userdata("adminId");
         $this->session->unset_userdata("adminName");
         redirect("admin");
    }

    // public function causesverification()
    // {

    //     if (!$this->session->userdata('adminId')) {
    //         redirect('kanavuhelp/login'); // Redirect to login if not logged in
    //     }
    //     $data['fundraisers'] = $this->adminpanel->get_cause_details();
    //     $data['counts'] = $this->adminpanel->get_total_causes();
    //     $data['sno'] = 0;
    //     $totalunverifiedtransactions = $this->adminpanel->totalUnverifiedtransactions();
    //     $this->session->set_userdata("unverifiedtransactions",$totalunverifiedtransactions);
    //     $this->session->set_userdata('causescounts',$data['counts']);
    //     $this->load->view('causesverification.php', $data);
    // }
//     public function causesverification()
// {
//     if (!$this->session->userdata('adminId')) {
//         redirect('kanavuhelp/login');
//     }

//     $limit = 5;
//     $page = (int)($this->input->get('page') ?? 1);
//     $offset = ($page - 1) * $limit;
//     $search = $this->input->get('search') ?? '';

//     $data['fundraisers'] = $this->adminpanel->get_cause_details($limit, $offset, $search);
//     $data['counts'] = $this->adminpanel->get_total_causes($search);
//     $data['sno'] = $offset;
//     $data['current_page'] = $page;
//     $data['per_page'] = $limit;
//     $data['search'] = $search;

//     $totalunverifiedtransactions = $this->adminpanel->totalUnverifiedtransactions();
//     $this->session->set_userdata("unverifiedtransactions", $totalunverifiedtransactions);
//     $this->session->set_userdata('causescounts', $data['counts']);

    // $this->load->view('causesverification.php', $data);
// }
    public function causesverification()
{
    if (!$this->session->userdata('adminId')) {
        redirect('kanavuhelp/login');
    }
    
    // Fetch all data without limit for client-side pagination
    $data['fundraisers'] = $this->adminpanel->get_all_cause_details();
    $data['counts'] = $this->adminpanel->get_total_causes();
    $data['sno'] = 0;
    
    $totalunverifiedtransactions = $this->adminpanel->totalUnverifiedtransactions();
    $this->session->set_userdata("unverifiedtransactions", $totalunverifiedtransactions);
    $this->session->set_userdata('causescounts', $data['counts']);
    
    $this->load->view('causesverification.php', $data);
}


    public function displayCauses(){
        if($this->input->is_ajax_request()){
        $counts = $this->input->get("count");
        $fundraisers = $this->adminpanel->get_causes_list($counts);
        $data = $this->load->view("causesverificationlist",array("fundraisers"=>$fundraisers,"counts"=>$counts),true);
        echo $data;
        }
        }

    public function changeCausespagepagesetup(){
        if (!$this->session->userdata('adminId')) {
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

//     public function transactionverification()
// {
//     if (!$this->session->userdata('adminId')) {
//         redirect('kanavuhelp/login');
//     }

//     $search = $this->input->get('search', true); // Get search text
//     $page   = (int) $this->input->get('page');
//     $per_page = 5;

//     // Total filtered rows
//     $data['counts'] = $this->adminpanel->get_total_transaction($search);

//     // Pagination offset
//     $offset = ($page > 1) ? ($page - 1) * $per_page : 0;

//     // Fetch donations with search applied
//     $data['donations'] = $this->adminpanel->transactiondetails($per_page, $offset, $search);
//     $data['sno']       = $offset;
//     $data['page']      = $page;
//     $data['per_page']  = $per_page;
//     $data['search']    = $search;

//     // Unverified transactions count
//     $totalunverifiedtransactions = $this->adminpanel->totalUnverifiedtransactions();
//     $this->session->set_userdata("unverifiedtransactions", $totalunverifiedtransactions);
//     $this->session->set_userdata('verificationpagecounts', $data['counts']);

//     $this->load->view('transactionverification.php', $data);
// }
    public function transactionverification()
    {
        if (!$this->session->userdata('adminId')) {
            redirect('kanavuhelp/login');
        }
        
        // Remove the limit to get all records for client-side pagination
        $data['donations'] = $this->adminpanel->get_all_transactions();
        $data['counts'] = $this->adminpanel->get_total_transaction();
        $data['sno'] = 0;
        
        $totalunverifiedtransactions = $this->adminpanel->totalUnverifiedtransactions();
        $this->session->set_userdata("unverifiedtransactions", $totalunverifiedtransactions);
        $this->session->set_userdata('verificationpagecounts', $data['counts']);
        
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
                    <td>".($donation->category)."</td>
                    <td>".($donation->cause_heading)."</td>
                    <td>".($donation->name)."</td>
                    <td>".($donation->email)."</td>
                    <td>".($donation->phoneno)."</td>
                    <td>".($donation->amount)."</td>
                    <td>".($donation->transactionid)."</td>
                    <td>$donation->fundraiser_id</td>
                    <td>$donation->fundraiser_name</td>
                    <td>$donation->fundraiser_email</td>
                    <td>$donation->fundraiser_phone</td>
                    <td>".($donation->status == 1 ? 'Yes' : 'No')."</td>
                    <td class='d-flex'>
                    <button onclick='editDonation(".(json_encode($donation)).")' class='btn btn-primary fw-bold' data-toggle='modal' data-target='#editDonationModal'>
                    Edit
                    </button>&nbsp;&nbsp;
                    <button onclick='setUrl(".json_encode($donation).")' class='btn btn-danger fw-bold' data-toggle='modal' data-target='#sendmail'>
                    Status
                     </button>&nbsp;&nbsp;
                    <button onclick=\"deleteDonation(".$donation->donation_id.")\" class='btn btn-danger fw-bold'>
                        Delete
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
        if (!$this->session->userdata('adminId')) {
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
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $amount = $this->input->post('amount');
        $location = $this->input->post('location');
        $age = $this->input->post('age');
        $end_date = $this->input->post('end_date');
        $cause_heading = $this->input->post('cause_heading');
        $cause_description = $this->input->post('cause_description');
        $created_by = $this->input->post('username');
        $raised_amount = $this->input->post('raised_amount');
        $verified = $this->input->post('verified');

        $updatedata = ["name"=>$name,"email"=>$email,"phone"=>$mobile,"age"=>$age,"amount"=>$amount,"location"=>$location,"end_date"=>$end_date,"cause_heading"=>$cause_heading,"cause_description"=>$cause_description,"created_by"=>$created_by,"raised_amount"=>$raised_amount,"verified"=>$verified];

        // Validate input
        if (empty($id) || $verified === null) {
            echo json_encode(['status' => 'failure', 'message' => 'Invalid input']);
            return;
        }

        // Update the record
        $updateSuccess = $this->adminpanel->updatecauses($id, $updatedata);

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
        $verifiedBy = $this->session->userdata('Kanavu_userName');

        // Load the model and call the update function
        $this->load->model('adminpanel');
        $updateSuccess = $this->adminpanel->updateDonationStatus($id, $status, $verifiedBy);
        if ($updateSuccess) { // assuming 1 represents "Yes"
            $donationData = $this->adminpanel->getDonationById1($id); // Get donation details for the cause_id and amount
            if ($donationData) {
                $this->adminpanel->update_raised_amount($donationData->cause_id, $donationData->amount,$status);
            }
        }
        // Set content type header to JSON
        header('Content-Type: application/json');

        // Return JSON response for the AJAX call
        echo json_encode(['status' => $updateSuccess ? 'success' : 'failure']);
    }

    public function sendtransactionVerficationstatus(){
        if (!$this->session->userdata('adminId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $donaremail = $this->input->get("email");
        $status = $this->input->get("status");
        $donationid = $this->input->get("donationid");
        $donarname = $this->input->get("donarname");
        $message = $this->input->get("message");
        $adminName = $this->input->get("adminname");
        $to = $donaremail;

        $this->email->from('support@kanavu.help', 'Kanavu Help');
        $this->email->to($to);
        $this->email->subject('Kanavu Help Foundation');
        $this->email->message($message);

        if ($this->email->send()) {

            $find = array(",","!",".","'");
            $replace = array("");
            $message = str_replace($find,$replace,$message);
            $this->adminpanel->transactionemailStatus($status,$donationid,$donarname,$donaremail,$message,$adminName);
            $this->session->set_flashdata('transactionmailsend', true);
            $this->session->set_userdata("transactionemailsuccessstatus","Email sent to ".$to."");
                redirect("/transactionverification");
        } else {
            $this->session->set_userdata("transactionemailsuccessstatus","Email not sent please try again.");
            redirect("/transactionverification");
        }   
    }

    public function sendcauseVerficationstatus(){
        if (!$this->session->userdata('adminId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $userEmail = $this->input->get("email");
        $status = $this->input->get("status");
        $userId = $this->input->get("userid");
        $userName = $this->input->get("username");
        $message = $this->input->get("message");
        $adminName = $this->input->get("adminname");
        $to = $userEmail;

        $this->email->from('support@kanavu.help', 'Kanavu Help');
        $this->email->to($to);
        $this->email->subject('Kanavu Help Foundation');
        $this->email->message($message);
        // $this->email->set_mailtype("html");
        // $this->email->set_header("MIME-Version", "1.0");
        // $this->email->set_header("Content-Type: text/html", "charset=UTF-8\r\n");

        if ($this->email->send()) {
            // Set a session variable to indicate OTP was sent
            $find = array(",","!",".","'");
            $replace = array("");
            $message = str_replace($find,$replace,$message);
            $this->adminpanel->emailStatus($status,$userId,$userName,$userEmail,$message,$adminName);
            $this->session->set_flashdata('causemailsend', true);
            $this->session->set_userdata("emailsuccessstatus","Email sent to ".$to."");
                redirect("/causesverification");
        } else {
            $this->session->set_userdata("emailerrorstatus","Email not sent please try again.");
                redirect("/causesverification");
            // echo "<script>Email not sent please try again.</script>";
            // $this->session->set_userdata("emailstatus","failed");
            // echo $this->email->print_debugger(); // Print debug info if sending fails
        }   
    }

    public function showtransactionEmaildata(){
        if (!$this->session->userdata('adminId')) {
            redirect('kanavuhelp/adminlogin'); // Redirect to login if not logged in
        }
        if($this->input->is_ajax_request()){
           $donationid = $this->input->get("donationid");
           $status = $this->input->get("status");
           $emaildata = $this->adminpanel->gettransactionEmaildata($donationid,$status);
           if(!empty($emaildata)){
                foreach ($emaildata as $key => $value) {
                    echo "<tr>
                          <td>".($key + 1)."</td>
                          <td>$value[Emailcount]</td>
                          <td>$value[Who_send]</td>
                          <td>$value[Emailed_date]</td>
                          <td>$value[Message]</td>
                          </tr>";
                }
           }
           else{
                echo "<tr><td class='text-center' colspan='4'>No emails sent.</td></tr>";
           }
           
        }
    }

    public function showEmaildata(){
        if (!$this->session->userdata('adminId')) {
            redirect('kanavuhelp/adminlogin'); // Redirect to login if not logged in
        }
        if($this->input->is_ajax_request()){
           $userid = $this->input->get("userid");
           $status = $this->input->get("status");
           $emaildata = $this->adminpanel->getEmaildata($userid,$status);
           if(!empty($emaildata)){
                foreach ($emaildata as $key => $value) {
                    echo "<tr>
                          <td>".($key + 1)."</td>
                          <td>$value[Emailcount]</td>
                          <td>$value[Who_send]</td>
                          <td>$value[Emailed_date]</td>
                          <td>$value[Message]</td>
                          </tr>";
                }
           }
           else{
                echo "<tr><td class='text-center' colspan='4'>No emails sent.</td></tr>";
           }
           
        }
    }

//     public function contact_submissions()
// {
//     $search = $this->input->get('search');
//     $page = $this->input->get('page');
//     $page = (!empty($page) && is_numeric($page)) ? $page : 1;
//     $limit = 10;
//     $offset = ($page - 1) * $limit;

//     $data['search'] = $search;
//     $data['sno'] = $offset;
//     $data['counts'] = $this->adminpanel->get_enquiries_count($search);
//     $data['submissions'] = $this->adminpanel->get_enquiries_list($limit, $offset, $search);

//     $this->load->view('contact_submissions', $data);
// }

    public function contact_submissions()
    {
        // Fetch all data from the contact_us table without limit
        $data["counts"] = count($this->db->get('contact_us')->result());
        $data['submissions'] = $this->db->order_by('created_at', 'DESC')->get('contact_us')->result();
        $data["sno"] = 0;
        
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
        $totalunverifiedtransactions = $this->adminpanel->totalUnverifiedtransactions();
        $this->session->set_userdata("unverifiedtransactions",$totalunverifiedtransactions);
        $this->load->view('contact_submissions',array("submissions"=>$enquirieslist,"newcounts"=>$totalenquiries,"initialindex"=>$initialindex,"sno"=>$counts)); 
    }

    /* public function delete_donation($donation_id)
    {
        $this->load->model('adminpanel'); // Load your model
       log_message('debug', 'Received donation_id: ' . $donation_id);
        if ($this->adminpanel->delete_by_id($donation_id)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    } */
    public function delete_donation() {
        if($this->input->is_ajax_request()){
            $id = $this->input->post("donation_id");
            // Call the model method to delete the cause by user_id
            $result = $this->adminpanel->delete_by_id($id);  // Ensure the method matches the model function
        // return $id;
            // Return a JSON response indicating success or failure
            if ($result) {
                echo json_encode(['status' => 'success', 'message' => 'Cause deleted successfully!']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to delete the cause!']);
            } 
            }
      }
    

}