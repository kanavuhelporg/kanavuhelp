<?php

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
        $this->load->library('email');
        $this->load->model('UserModel');
        $this->load->model('DonorprofileModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('cookie');
        // $this->load->config('email');
        $this->config->load('email');
        $this->load->helper('url');
        $this->data['currentPage'] = $this->uri->segment(1) ?: 'home';

    }

    public function index()
{
    // Fetch all fundraiser details
    $data['fundraisers'] = $this->UserModel->get_cause_details();
    $is_logged_in = $this->session->userdata('Kanavu_userId') !== null;
    $data['is_logged_in'] = $is_logged_in;

    $active_fundraisers = [];
    foreach ($data['fundraisers'] as $fundraiser) {
        // Calculate current raised amount from donations table
        $current_raised_amount = $this->UserModel->get_current_raised_amount($fundraiser->id);
        
        // Update the fundraiser object with the current raised amount
        $fundraiser->raised_amount = $current_raised_amount;
        
        $end_date = new DateTime($fundraiser->end_date);
        $current_date = new DateTime();
        $days_left = $end_date->diff($current_date)->days;
        
        // Check if fundraiser has expired by date or target amount reached
        $is_expired = $end_date < $current_date || $fundraiser->raised_amount >= $fundraiser->amount;
        
        if (!$is_expired) {
            $fundraiser->days_left = $days_left;
            $fundraiser->hide_donation_button = false;
            
            // Get supporters count for this fundraiser
            $fundraiser->supporters_count = $this->UserModel->count_supporters($fundraiser->id);
            
            // Get creator name
            $fundraiser->created_by = $this->UserModel->get_user_name_by_cause_id($fundraiser->id);
            
            $active_fundraisers[] = $fundraiser;
        }
    }
    
    $data['fundraisers'] = $active_fundraisers;
    $data['sno'] = 0;
   
    // Fetch statistics
    $data['total_donors'] = $this->UserModel->get_total_donors();
    $data['total_events'] = $this->UserModel->get_total_events();
    $data['total_fund'] = $this->UserModel->get_total_fund();
    $data['total_volunteers'] = 550; // Static for now, update if you have a table

    // Load view and pass data
    $this->load->view('kanavuhome.php', $data);
    $this->session->set_userdata("entry", 1);
}
    
public function insert_priority() {
    if ($this->input->method() === 'post') {
        $id = $this->input->post('id');
        $priority = $this->input->post('priority');
      /*    log_message('debug', 'Received ID: ' . $id);
        log_message('debug', 'Received Priority: ' . $priority);
        
        // Or temporary echo for direct checking
        echo "ID: $id, Priority: $priority";
        exit;  */

        if (!empty($id) && !empty($priority)) {
            $this->load->model('UserModel');

            // Check if the priority is already assigned to another ID (skip if priority is 0)
            if ($priority != 0) {
                $this->db->where('priority', $priority);
                $this->db->where('id !=', $id);
                $query = $this->db->get('individualform');

                if ($query->num_rows() > 0) {
                    echo json_encode(['status' => 'error', 'message' => 'This priority number is already assigned to another fundraiser.']);
                    return;
                }
            }

            // Proceed with the update
            $update = $this->UserModel->update_priority($id, $priority);

            if ($update) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update priority in the database.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Please provide both ID and priority.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    }
}

    // Existing set_priority method (optional, can be removed if not needed)
    public function set_priority($id) {
        
        if ($this->input->is_ajax_request() && $this->input->post('priority')) {
            $priority = (int)$this->input->post('priority');
            $result = $this->UserModel->update_priority($id, $priority);
            if ($result) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error']);
            }
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
//set_priority method
public function set_no_priority() {
    if ($this->input->method() === 'post') {
        $id = $this->input->post('id');

        if (!empty($id)) {
            $this->load->model('UserModel');
            $update = $this->UserModel->update_priority($id, 0); // Set priority to 0

            if ($update) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to set priority to 0 in the database.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Please provide the ID.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    }
}  
    

    public function indexpage() {
        if(!$this->session->userdata("Kanavu_userId")){
            redirect("login");
        }
        $this->load->view("indexpage");   
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
        if($this->session->userdata("Kanavu_userId")){
            redirect("indexpage");
           }
        $this->load->view('login');
    }

    public function privacy_policy()
    {
        $this->load->view('privacy_policy');
    }

    public function getHeader(){
        $this->load->view("header");
    }

    public function getFooter(){
        $this->load->view("footer");
    }

    public function terms_of_use()
    {
        $this->load->view('terms_of_use');
    }
    public function login_modal()
    {
        $data['fundraisers'] = $this->UserModel->get_cause_details();

        // Check if user is logged in using CodeIgniter session
        $is_logged_in = $this->session->userdata('Kanavu_userId') !== null; // Check if userId is set
        $data['is_logged_in'] = $is_logged_in;

        // Initialize an array to store active fundraisers
        $active_fundraisers = [];

        // Loop through each fundraiser to check status and calculate days_left
        foreach ($data['fundraisers'] as $fundraiser) {
            $end_date = new DateTime($fundraiser->end_date);
            $current_date = new DateTime();
            $days_left = $end_date->diff($current_date)->days;

            // Check if fundraiser has expired by date or target amount reached
            $is_expired = $end_date < $current_date || $fundraiser->raised_amount >= $fundraiser->amount;

            // Only include active fundraisers
            if (!$is_expired) {
                // If still active, calculate days left and other properties
                $fundraiser->days_left = $days_left;
                $fundraiser->hide_donation_button = false;
                $active_fundraisers[] = $fundraiser;
            }
        }

        // Pass only active fundraisers to the view
        $data['fundraisers'] = $active_fundraisers;
        $this->load->view('login_modal.php', $data);
    }

    public function login_modal1()
    {
        $data['fundraisers'] = $this->UserModel->get_cause_details();

        // Check if user is logged in using CodeIgniter session
        $is_logged_in = $this->session->userdata('Kanavu_userId') !== null; // Check if userId is set
        $data['is_logged_in'] = $is_logged_in;

        // Initialize an array to store active fundraisers
        $active_fundraisers = [];

        // Loop through each fundraiser to check status and calculate days_left
        foreach ($data['fundraisers'] as $fundraiser) {
            $end_date = new DateTime($fundraiser->end_date);
            $current_date = new DateTime();
            $days_left = $end_date->diff($current_date)->days;

            // Check if fundraiser has expired by date or target amount reached
            $is_expired = $end_date < $current_date || $fundraiser->raised_amount >= $fundraiser->amount;

            // Only include active fundraisers
            if (!$is_expired) {
                // If still active, calculate days left and other properties
                $fundraiser->days_left = $days_left;
                $fundraiser->hide_donation_button = false;
                $active_fundraisers[] = $fundraiser;
            }
        }

        // Pass only active fundraisers to the view
        $data['fundraisers'] = $active_fundraisers;
        $this->load->view('login_modal1.php', $data);
    }

    public function updatecause(){
        if(!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $cause_id = $this->input->get("cause_id");
        $causedetails = $this->UserModel->causeDetailsforupdate($cause_id);
        $this->load->view("updatecause",array("causedetails"=>$causedetails));
    }

    public function updateprogress(){
        if(!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $cause_id = $this->input->get("cause_id");
        $progressdetails = $this->UserModel->causeDetailsforprogress($cause_id);
        $this->load->view("updateprogress",array("progressdetails"=>$progressdetails,"cause_id"=>$cause_id));      
    }

    public function updateprogressdata(){
        if(!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $this->load->model('UserModel');
        $this->load->library(['upload', 'form_validation']);

        $data = array();
        $dataInfo = array();
        $documentinfo = array();
        $files = $_FILES;
        
        $uploadeddocuments = ["progress_description","document_one","document_two","document_three","document_four","document_five","progress_video","progress_embed_video"];
        $databasedocuments = ["progress_description","cause_status_image1","cause_status_image2","cause_status_image3","cause_status_image4","cause_status_image5","cause_status_video"];
        $count = count($uploadeddocuments);
        try{
            $insert = 0;
        for($i=0; $i < $count; $i++)
        {           
            if($_FILES[$uploadeddocuments[$i]]['name'] == ""){
                continue;
            }
            $_FILES['documents']['name']= $files[$uploadeddocuments[$i]]['name'];
            $_FILES['documents']['type']= $files[$uploadeddocuments[$i]]['type'];
            $_FILES['documents']['tmp_name']= $files[$uploadeddocuments[$i]]['tmp_name'];
            $_FILES['documents']['error']= $files[$uploadeddocuments[$i]]['error'];
            $_FILES['documents']['size']= $files[$uploadeddocuments[$i]]['size'];    
           
            $this->upload->initialize($this->set_progress_upload_options());
            $this->upload->do_upload($uploadeddocuments[$i]);
            $dataInfo[] = $this->upload->data();
            $data[$databasedocuments[$i]] = $dataInfo[$insert]["file_name"];
            $insert++;
        }
        }
        catch(Exception $e){
            $this->session->set_flashdata("fileuploadfailed",true);
            redirect('updateprogress'); 
        }
            
            $data['progress_description'] = $this->input->post('progress_description');
            $data['progress_embed_link'] = $this->input->post('progress_embed_video_link');
            $data['cause_id'] = $this->input->post('cause_id'); 
            $file_data = $this->upload->data();

        $causeId = $this->input->post('cause_id');
        $response = $this->UserModel->store4($data,$causeId);
        $userLoggedIn = array(
            'Kanavu_userId' => $this->session->userdata("currentUserId"),
            'Kanavu_userName' => $this->session->userdata('Kanavu_userName'),
        );
        // $this->session->set_userdata($userLoggedIn);  
        $this->session->set_flashdata("progressupdated", true);
        redirect('myFundraisers');
    }

    public function individual()
    {
       // if (!$this->session->userdata('Kanavu_userId')) {
          //  redirect('login_modal');
          //  exit;
      //  }

        //category for individudal form
       // else {
            // Load model if not already loaded
            $this->load->model('UserModel');

            // Retrieve categories from the database
            $data['result'] = $this->UserModel->get_all_categories();

            $this->load->view('individual', $data);
        //}
    }
    public function charity()
    {
        $this->load->view('charity.php');
    }

    public function processDonation()
    {
        // Load the model where the donation logic will be handled
        $this->load->model('UserModel');

        // Get form input values
        $cause_id = $this->input->post('cause_id');
        $user_id = $this->input->post('user_id');
        $amount = $this->input->post('amount');
        $name = $this->input->post('name');
        $city = $this->input->post('city');
        $emailid = $this->input->post('email');
        $phoneno = $this->input->post('phoneno');
        $transactionid = $this->input->post('transactionid');
        $currency_type = $this->input->post('currency_type');
        $causedata = $this->UserModel->get_cause_data($cause_id);
        $category = $causedata->category;
        $cause_heading = $causedata->cause_heading;
        $fundraiser_id =  $causedata->id;
        $fundraiser_name =  $causedata->name;
        $fundraiser_email =  $causedata->email;
        $fundraiser_phone =  $causedata->phone;
        if ($this->UserModel->is_transaction_id_exists($transactionid)) {
            // If it exists, show an error message
            echo json_encode(['status' => 'error', 'message' => 'The transaction ID already exists.']);
            return; // Redirect to the donation page or any relevant page
        }
        // Prepare data to insert
        $data = array(
            'cause_id' => $cause_id,
            'user_id' => $user_id,
            'donor_id' => $user_id,
            'amount' => $amount,
             'name' => $name,
             'donor_location' => $city,
             'email' => $emailid,
            'phoneno' => $phoneno,
            'category' => $category,
            'cause_heading' => $cause_heading,
            'transactionid' => $transactionid,
            'currency_type' => $currency_type,
            'fundraiser_id' => $fundraiser_id,
            'fundraiser_name' => $fundraiser_name,
            'fundraiser_email' => $fundraiser_email,
            'fundraiser_phone' => $fundraiser_phone 
        );

        $newuser = array(
            "name" => $name,
            "email" => $emailid,
            "mobileNumber" => $phoneno,
            "location" => $city
        );

        $individualdata = array(
            "name" => $name,
            "email" => $emailid,
            "phone" => $phoneno,
            "location" => $city
        );

        $checkregister = $this->UserModel->checkUserexist($emailid);
        if($checkregister->num_rows() == 0){
            $this->db->insert('user', $newuser);
            $newid = $this->db->insert_id();
            $individualdata["user_id"] = $newid;
            $data["user_id"] = $newid;
            $this->db->insert('individualform', $individualdata);
        }
        // Call the model function to save the donation
        if ($this->UserModel->saveDonation($data)) {
            // $this->UserModel->update_raised_amount($data['cause_id'], $data['amount']);
            echo json_encode(['status' => 'success', 'redirect' => base_url('donate')]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'An error occurred while processing your donation.']);
        }
    }

    public function donate()
    {
       $data['category'] = $this->UserModel->get_category();
        $data['fundraisers'] = $this->UserModel->get_cause_details();

        // Check if user is logged in using CodeIgniter session
        $is_logged_in = $this->session->userdata('Kanavu_userId') !== null; // Check if userId is set
        $data['is_logged_in'] = $is_logged_in;

        // Initialize an array to store active fundraisers
        
/* kani */
        $active_fundraisers = [];

foreach ($data['fundraisers'] as $fundraiser) {
    $end_date = new DateTime($fundraiser->end_date);
    $current_date = new DateTime();
    $date_diff = $end_date->diff($current_date);

    // Calculate the number of days left
    $days_left = $date_diff->days;
    
    // Check if the fundraiser is expired (end_date passed) or fully funded
   /*  $is_expired = ($date_diff->invert === 0 && $days_left > 0) || $fundraiser->raised_amount >= $fundraiser->amount; */
//only expire date 
   
    $is_expired = ($date_diff->invert === 0 && $days_left > 0);

    // Fundraiser is considered "active" even if fully funded (we only mark it as expired if the end date has passed)
    if ($fundraiser->raised_amount >= $fundraiser->amount) {
        // If the fundraiser is fully funded, we allow the donation button to stay visible but change the text
        $fundraiser->hide_donation_button = false;
        $fundraiser->donation_button_text = 'Complete Donation';  // New button text for fully funded campaigns
    } elseif (!$is_expired) {
        // If the fundraiser is still active and not expired
        $fundraiser->days_left = $days_left;
        $fundraiser->hide_donation_button = false; // Show the donation button
        $fundraiser->donation_button_text = 'Donate Now'; // Default text for donation button
    }

    // Add the fundraiser to the active list
      if (!$is_expired) {
        $active_fundraisers[] = $fundraiser;
    }  
    //
   /*  if (!$is_expired || $fundraiser->raised_amount >= $fundraiser->amount) {
        $active_fundraisers[] = $fundraiser;
    } */
}

// Update the fundraisers in the data
    $data['fundraisers'] = $active_fundraisers;

    // Pass data to the view
    $this->load->view('donate', $data);
    $this->session->set_userdata("entry", 1);
/* kani */

        
    }

    public function blogs()
    {
       /*  $this->load->view('blogs.php'); */
       redirect('https://kanavu.help/blog/', 'location', 301);
    }
    public function contactus()
    {
        $this->load->view('contactus.php');
    }
    public function abouts()
    {
        $this->load->view('abouts.php');
    }


    // public function helpus($fundraiser_id = null,$fundraiser_heading = null)
    // {
    //     if ($fundraiser_id === null|| $fundraiser_heading== null) {
    //         show_404();
    //         return;
    //     }

    //     $fundraiser_details = $this->UserModel->get_fundraiser_details($fundraiser_id);

    //     if (!$fundraiser_details) {
    //         show_404();
    //         return;
    //     }

    //     // Calculate days left (existing code)
    //     $end_date = new DateTime($fundraiser_details->end_date);
    //     $current_date = new DateTime();
    //     $days_left = $end_date->diff($current_date)->days . ' Days Left';
    //     if ($days_left < 0) {
    //         $days_left = 'expired';
    //     }
    //     $fundraiser_details->hide_donation_button = $fundraiser_details->raised_amount >= $fundraiser_details->amount;
    //     // Get the number of supporters
    //     $supporters_count = $this->UserModel->count_supporters($fundraiser_id);
    //     $username = $this->UserModel->get_user_name_by_cause_id($fundraiser_id);
    //     $topdonars = $this->UserModel->get_top_donors_by_cause($fundraiser_id);
    //     $topdonars15 = $this->UserModel->get_top_fifteen_donors_by_cause($fundraiser_id);
    //     $progressdata = $this->UserModel->get_user_progress($fundraiser_details->id);
    //     // Pass data to the view
    //     $fundraiser_details->days_left = $days_left;
    //     $fundraiser_details->supporters_count = $supporters_count;
    //     $fundraiser_details->username = $username;
    //     $fundraiser_details->topdonars = $topdonars;
    //    // $fundraiser_details->topdonars15 = $topdonars15;
    //     $data['fundraiser'] = $fundraiser_details;
    //     $data['progressdata'] = $progressdata;
    //     $data['is_logged_in'] = $this->session->userdata('Kanavu_userId') !== null;
    //     $this->load->view('helpus', $data);
    // }

    public function helpus($fundraiser_id = null, $fundraiser_heading = null)
{
    if ($fundraiser_id === null || $fundraiser_heading == null) {
        show_404();
        return;
    }

    $fundraiser_details = $this->UserModel->get_fundraiser_details($fundraiser_id);

    if (!$fundraiser_details) {
        show_404();
        return;
    }

    // Calculate days left
    $end_date = new DateTime($fundraiser_details->end_date);
    $current_date = new DateTime();
    $interval = $end_date->diff($current_date);
    
    // Get the signed days difference
    $days_left_num = $interval->days;
    
    // Check if the end date is in the past (negative interval means end_date < current_date)
    if ($interval->invert == 0) {
        // This means end_date is in the past (expired)
        $days_left = 'expired';
    } else {
        // This means end_date is in the future
        $days_left = $days_left_num . ' Days Left';
    }
    
    // Get the current raised amount from donations
    $current_raised_amount = $this->UserModel->get_current_raised_amount($fundraiser_id);
    
    // Update the fundraiser details with the current raised amount
    $fundraiser_details->raised_amount = $current_raised_amount;
    
    // Check if donation button should be hidden
    // Only hide if expired OR fully funded
    $fundraiser_details->hide_donation_button = ($days_left === 'expired' || $fundraiser_details->raised_amount >= $fundraiser_details->amount);
    
    // Get the number of supporters
    $supporters_count = $this->UserModel->count_supporters($fundraiser_id);
    $username = $this->UserModel->get_user_name_by_cause_id($fundraiser_id);
    $topdonars = $this->UserModel->get_top_donors_by_cause($fundraiser_id);
    $progressdata = $this->UserModel->get_user_progress($fundraiser_details->id);
    
    // Pass data to the view
    $fundraiser_details->days_left = $days_left;
    $fundraiser_details->supporters_count = $supporters_count;
    $fundraiser_details->username = $username;
    $fundraiser_details->topdonars = $topdonars;
    $data['fundraiser'] = $fundraiser_details;
    $data['progressdata'] = $progressdata;
    $data['is_logged_in'] = $this->session->userdata('Kanavu_userId') !== null;
    
    $this->load->view('helpus', $data);
}

    public function registeration()
    {
        $data['name'] = $this->input->post('exampleInputName');
        $data['email'] = $this->input->post('exampleInputEmail1');
        $data['password'] = $this->input->post('exampleInputPassword1');

        $this->load->model('UserModel');

        // Check if email already exists
        if ($this->UserModel->isEmailExists($data['email'])) {
            // Set flash message for the next page load
            $this->session->set_flashdata('error', 'Email is already registered. Please try another email.');
            redirect('/register'); // Redirects to the registration page
        } else {
            $response = $this->UserModel->register($data);
            if ($response) {
                echo "<script>
                alert('Registered successfully!');
                window.location.href = '" . base_url('login') . "';
            </script>";
            } else {
                $this->session->set_flashdata('error', 'Failed to register');
                redirect('/register');
            }
        }
    }

    public function get_user_name($user_id)
    {
        // Load the User model
        $this->load->model('UserModel');

        // Fetch the user name using the model
        $user_name = $this->UserModel->get_user_name_by_id($user_id);

        return $user_name;
    }

    public function userLogin()
    {
        $email = $this->input->post("loginemail");
        $login = $this->UserModel->loginUser($email);
        $otp = $this->input->post("loginotp") ?? "";
        $countotp = strlen($otp);

        if ($login->num_rows() == 0){
            $this->session->unset_userdata("userEmail");
            $this->session->set_flashdata("not_registered_user", true);
            redirect("login");
            // echo '<script>alert("Please enter registered credentials.");</script>';
        } 
         else {
            if($countotp == 0){
                $this->session->set_userdata("userEmail",$email);
                $this->session->set_userdata("path","login");           
                redirect("send");
                }
                else{
                    $user = $login->row();
                    $userLoggedIn = array(
                        'Kanavu_userId' => $user->id,
                        'Kanavu_userName' => $user->name,
                    );
                    $this->session->set_userdata($userLoggedIn);
                    $this->session->set_userdata("entry",0);
                    redirect(base_url('indexpage'));
                    $this->session->unset_userdata("userEmail");
                }
        }
    }

    public function individualform_data()
    {
        $this->load->model('UserModel');
        $this->load->library(['upload', 'form_validation']);

        $dataInfo = array();
        $documentinfo = array();
        $data = array();
        // $cover_image = array();
        $files = $_FILES;
        
        // $this->upload->initialize($this->set_upload_options());
        $uploadeddocuments = ["cover_image","document_one","document_two","document_three","document_four","document_five","cause_video","cause_video_english"];
        $databasedocuments = ["cover_image","cause_image1","cause_image2","cause_image3","cause_image4","cause_image5","Cause_video","Cause_video_english","Cause_video_link"];
        $count = count($uploadeddocuments);
        
        try{
            $insert = 0;
        for($i=0; $i < $count; $i++)
        {           
            $_FILES['documents']['name']= $files[$uploadeddocuments[$i]]['name'];
            $_FILES['documents']['type']= $files[$uploadeddocuments[$i]]['type'];
            $_FILES['documents']['tmp_name']= $files[$uploadeddocuments[$i]]['tmp_name'];
            $_FILES['documents']['error']= $files[$uploadeddocuments[$i]]['error'];
            $_FILES['documents']['size']= $files[$uploadeddocuments[$i]]['size'];    
    
            if($_FILES[$uploadeddocuments[$i]]['name'] == ""){
                continue;
            }
            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload($uploadeddocuments[$i]);
            $dataInfo[] = $this->upload->data();
            $data[$databasedocuments[$i]] = $dataInfo[$insert]["file_name"];
            $insert++;
        }
        }
        catch(Exception $e){
            $this->session->set_flashdata("fileuploadfailed",true);
            redirect('individual'); 
        }
     
            $data['amount'] = $this->input->post('amount');
            $data['end_date'] = $this->input->post('end_date');
            $data['cause_heading'] = $this->input->post('cause_heading');
            $data['cause_description'] = $this->input->post('cause_description');
            $data['Cause_video_link'] = $this->input->post('cause_embed_link_tamil'); 
            $data['Cause_video_link_eng'] = $this->input->post('cause_embed_link_english');
            $data['user_id'] = $this->session->userdata('currentUserId');
           
       
        $file_data = $this->upload->data();
        // $data['cover_image'] = $file_data['file_name'];

        $causeId = $this->session->userdata('currentCauseId');
        $response = $this->UserModel->store3($data,$causeId);
        $userLoggedIn = array(
            'Kanavu_userId' => $this->session->userdata("currentUserId"),
            'Kanavu_userName' => $this->session->userdata('Kanavu_userName'),
        );
        $this->session->set_userdata($userLoggedIn);  
        $this->session->set_flashdata("logged_in", true);
        // $this->session->set_userdata("entry",0);
        redirect('myFundraisers'); 
    }

    public function updateindividualform_data()
    {
        $this->load->model('UserModel');
        $this->load->library(['upload', 'form_validation']);

        $data = array();
        $dataInfo = array();
        $documentinfo = array();
        $files = $_FILES;
        
        $uploadeddocuments = ["cover_image","document_one","document_two","document_three","document_four","document_five","cause_video"];
        $databasedocuments = ["cover_image","cause_image1","cause_image2","cause_image3","cause_image4","cause_image5","Cause_video"];
        $count = count($uploadeddocuments);
        var_dump($_FILES);
        echo $this->input->post('amount');
        try{
            $insert = 0;
        for($i=0; $i < $count; $i++)
        {           
            if($_FILES[$uploadeddocuments[$i]]['name'] == ""){
                continue;
            }
            $_FILES['documents']['name']= $files[$uploadeddocuments[$i]]['name'];
            $_FILES['documents']['type']= $files[$uploadeddocuments[$i]]['type'];
            $_FILES['documents']['tmp_name']= $files[$uploadeddocuments[$i]]['tmp_name'];
            $_FILES['documents']['error']= $files[$uploadeddocuments[$i]]['error'];
            $_FILES['documents']['size']= $files[$uploadeddocuments[$i]]['size'];    
    
           
            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload($uploadeddocuments[$i]);
            $dataInfo[] = $this->upload->data();
            $data[$databasedocuments[$i]] = $dataInfo[$insert]["file_name"];
            $insert++;
        }
        }
        catch(Exception $e){
            $this->session->set_flashdata("fileuploadfailed",true);
            redirect('individual'); 
        }

            $data['amount'] = $this->input->post('amount');
            $data['end_date'] = $this->input->post('end_date');
            $data['cause_heading'] = $this->input->post('cause_heading');
            $data['cause_description'] = $this->input->post('cause_description');
            if(!empty($this->input->post('cause_embed_link_tamil'))){
                $data['Cause_video_link'] = $this->input->post('cause_embed_link_tamil');    
            }
            if(!empty($this->input->post('cause_embed_link_english'))){
                $data['Cause_video_link_eng'] = $this->input->post('cause_embed_link_english');
            }
            $data['verified'] = 0;
        $file_data = $this->upload->data();

        $causeId = $this->input->post('cause_id');
        $response = $this->UserModel->store5($data,$causeId);
        $this->session->set_flashdata("updatedindividualform", true);
        redirect('myFundraisers'); 
    }

    private function set_upload_options()
    {   
    //upload an image options
    $config = array();
    $config['upload_path'] = './assets/individualform_img/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png|svg|mp4';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;
    return $config;
    }

    private function set_progress_upload_options()
    {   
    //upload an image options
    $config = array();
    $config['upload_path'] = './assets/progressdata/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png|svg|mp4';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;
    return $config;
    }



    // causes by user id
    public function user_causes()
    {
        // Check session for user ID
         $user_id = $this->session->userdata('Kanavu_userId');
    
         if (!$user_id) {
        // Store the current URL (the 'myFundraisers' page) in the session
         $this->session->set_userdata('redirect_url', current_url());
        
        // Redirect to login page
         redirect('login');
         }

        // Initialize data array
        $data = ['is_logged_in' => true];

        try {
            // Attempt to retrieve fundraisers from the database
            $fundraisers = $this->UserModel->get_user_causes($user_id);
            // Calculate days left for each fundraiser
            foreach ($fundraisers as $fundraiser) {
                $end_date = new DateTime($fundraiser->end_date);
                $current_date = new DateTime();
                $days_left = $end_date < $current_date ? 0 : $end_date->diff($current_date)->days;
                $fundraiser->days_left = $days_left;
            }
        } catch (Exception $e) {
            // Handle the error if the database cannot be reached
            log_message('error', 'Database error: ' . $e->getMessage());
            show_404(); // Display a 404 error page
            return;
        }

    // Load the view with data if everything is successful
    $this->load->view('myFundraisers', array("fundraisers"=>$fundraisers));
    $this->session->set_userdata("entry",1);
}

    public function charityform_data()
    {
        $data['amount'] = $this->input->post('amount');
        $data['title'] = $this->input->post('title');
        $data['ngo'] = $this->input->post('ngo');
        $data['education'] = $this->input->post('education');
        $data['employment'] = $this->input->post('employment');
        $data['aboutus'] = $this->input->post('aboutus');
        $data['city'] = $this->input->post('city');
        $data['description'] = $this->input->post('description');

        // Load upload library
        $this->load->library('upload');
        $config['upload_path'] = './assets/charityform_img/';
        $config['allowed_types'] = 'gif|jpg|png|svg|mov|mpeg|mp3|avi|mp4|gif';
        $config['max_size'] = 1024;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->upload->initialize($config);

        // Check if file is uploaded successfully
        if (!$this->upload->do_upload('file')) {
            // File upload failed, handle the error
            $error = $this->upload->display_errors();
            echo "Upload error: $error"; // Debugging statement
            redirect('kanavuhelp/charity', 'refresh');
        } else {
            // File uploaded successfully, get file name and insert into database
            $file_data = $this->upload->data();
            $file_name = $file_data['file_name'];
            // echo "File uploaded successfully: $file_name"; // Debugging statement

            // Add file name to $data array
            $data['file'] = $file_name;

            // Load UserModel and call store2 method
            $this->load->model('UserModel');
            $response = $this->UserModel->store2($data);

            // Check if data is stored successfully
            if ($response == true) {
                echo '<script>alert("Successfully registered")</script>';
                $this->load->view('donate.php');
            } else {
                echo 'Failed to register';
            }
        }
    }

    public function contact_us()
    {
        // Load the database and email library
        $this->load->database();
        $this->load->library('email');

        // Get form data safely
        $data = [
            'name'    => $this->input->post('name', true),
            'email'   => $this->input->post('email', true),
            'phone'   => $this->input->post('phone', true),
            'message' => $this->input->post('message', true)
        ];

        // Insert data into the database
        $this->db->insert('contact_us', $data);

        // Basic variables
        $userEmail = $data['email'];
        $userName  = $data['name'];
        $userMsg   = nl2br($data['message']); // Keep line breaks
        $userPhone = $data['phone'];
        $adminEmail = 'support@kanavu.help';

        // --- 1️⃣ Send Confirmation Email to the User ---
        $userSubject = 'Thanks for contacting The Kanavu Trust';
        $userMessage = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h2 style='color:#333;'>Hello {$userName},</h2>
                <p>Thank you for reaching out to <strong>The Kanavu Trust</strong>.</p>
                <p>We have received your message and our team will get back to you soon.</p>
                <h3>Your Message:</h3>
                <div style='background:#f9f9f9; padding:10px; border-left:4px solid #007bff;'>
                    {$userMsg}
                </div>
                <p style='margin-top:20px;'>Best Regards,<br><strong>The Kanavu Trust Team</strong></p>
            </body>
            </html>
        ";

        $this->email->from('support@kanavu.help', 'The Kanavu Trust');
        $this->email->to($userEmail);
        $this->email->subject($userSubject);
        $this->email->message($userMessage);
        $this->email->set_mailtype('html');
        $userEmailSent = $this->email->send();

        // --- 2️⃣ Send Notification Email to Admin ---
        $adminSubject = 'New Contact Form Submission Received';
        $adminMessage = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h2 style='color:#007bff;'>New Message from Website Contact Form</h2>
                <p><strong>Name:</strong> {$userName}</p>
                <p><strong>Email:</strong> {$userEmail}</p>
                <p><strong>Phone:</strong> {$userPhone}</p>
                <h3>Message:</h3>
                <div style='background:#f9f9f9; padding:10px; border-left:4px solid #007bff;'>
                    {$userMsg}
                </div>
                <p style='margin-top:20px; color:#666;'>This message was submitted via the Kanavu Help website contact form.</p>
            </body>
            </html>
        ";

        $this->email->from('support@kanavu.help', 'Kanavu Help Website');
        $this->email->to($adminEmail);
        $this->email->subject($adminSubject);
        $this->email->message($adminMessage);
        $this->email->set_mailtype('html');
        $adminEmailSent = $this->email->send();

        // --- 3️⃣ Flash Message Based on Status ---
        if ($userEmailSent && $adminEmailSent) {
            $this->session->set_flashdata('submitsuccessstatus', 'Thanks for contacting us! We have received your message.');
        } else {
            $this->session->set_flashdata('submiterrorstatus', 'An error occurred while sending your message. Please try again later.');
        }

        // --- 4️⃣ Redirect Back ---
        redirect(base_url('/contactus'));
    }

    public function logout()
    {
        // Clear session data
        $this->session->unset_userdata('Kanavu_userId');
        $this->session->unset_userdata('Kanavu_userName');
        $this->session->unset_userdata("userEmail");

        // Redirect to the login page
        $this->session->unset_userdata("entry");
        redirect(base_url('/'));
    }
    // Controller method for viewing the profile
    public function profile()
    {
        // Check if user is logged in
        if (!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }

        // Get user data from session
        $userId = $this->session->userdata('Kanavu_userId');
        $this->load->model('UserModel');

        // Fetch user data from the database
        $data['user'] = $this->UserModel->getUserById($userId);

        // Load the profile view and pass user data
        $this->load->view('profile_view', $data);
    }

    public function send()
    {
        // Initialize the email with config settings

        $userEmail = $this->session->userdata('userEmail');
        $to = $userEmail;
        $otp = rand(1000, 9999);
        $this->session->set_userdata('generated_otp', $otp);
        $path = $this->session->userdata("path") ?? "individual";
       
        $message = "Your OTP is $otp to change the new password for your The Kanavu Trust account.";

        $this->email->from('support@kanavu.help', 'The Kanavu Trust');
        $this->email->to($to);
        $this->email->subject('The Kanavu Trust - OTP Verification');
        $this->email->message($message);

        if ($this->email->send()) {
            // Set a session variable to indicate OTP was sent
            $this->session->set_flashdata('otp_sent', true);
            if($path == "login"){
                $this->session->set_userdata("loginemail",$userEmail);
                $this->session->unset_userdata("path");
                $this->session->unset_userdata("entry");
                redirect("/login");
            }
            else{
                $this->session->set_userdata("entry",0);
            redirect('/individual');// Redirect back to the same page
            }
        } else {
            if($path == "login"){
                $this->session->set_userdata("mailstatus","failed");
                echo "<script>alert(OTP is not sent to your email. please try again.)</script>";
                redirect("/login");

            }
            else{
                $this->session->set_userdata("mailstatus","failed");
                echo "<script>alert(OTP is not sent to your email. please try again.)</script>";
                redirect('/individual');
            }
            // echo $this->email->print_debugger(); // Print debug info if sending fails
        }
    }

    public function verifyOtp(){
        if (!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $otp = $this->input->post("otp");
        if($otp == $this->session->userdata('generated_otp')){
        echo "true"; 
        }
        else{
        echo "false";
        }
        }

    public function individualformsubmit()
    {
        $causeId = $this->session->userdata('currentCauseId');
        

        // Prepare data for updating
        $data = [
            'amount' => $this->input->post('amount'),
            'end_date' => $this->input->post('end_date'),
            'cause_heading' => $this->input->post('cause_heading'),
            'cause_description' => $this->input->post('cause_description'),
            'form_selected_text' => $this->input->post('form_selected_text'),
            'cover_image' => $this->input->post('cover_image'),
            'user_id' => $this->session->userdata('currentUserId')
        ];

        $id = 68;

        $this->db->insert('individualform', $causeData);
        redirect('/donate');

    }


    public function insertUser()
    {
        $causeData = ""; 
        $step = $this->input->post("step");
        
        $causeData = [
            'category' => $this->input->post('category'),
            'created_by' => $this->input->post('created_by'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'age' => $this->input->post('age'),
            'location' => $this->input->post('location'),
            'form_selected_text' => $this->input->post('category'),
        ];
        
        $userData = [
            'name' => $this->input->post('created_by'),
            'email' => $this->input->post('email'),
            'mobileNumber' => $this->input->post('phone'),
            'age' => $this->input->post('age'),
            'location' => $this->input->post('location'),
            'category' => 'user',
        ];

        $email = $this->input->post('email');
        $checkregister = $this->UserModel->checkUserexist($email);
        
        if($checkregister->num_rows() > 0){
            $userdata = $checkregister->row();
            $user_id = $userdata->id;
            $user_name = $userdata->name;
            $fundraiser = $this->UserModel->get_user_causes_row($user_id);
            $end_date = $fundraiser->end_date;
            $day_diff = 0;
          /*if(empty($end_date)){
                $day_diff = 0;  
            }
            else{
                $end_date = new DateTime($fundraiser->end_date);
                $current_date = new DateTime();
                $day_diff = $end_date->diff($current_date);
            } 

            if($day_diff > 0){
                $this->session->set_flashdata("fundraisinglive",true);
                redirect("individual");
            }*/
            
                $userLoggedIn = array(
                    'Kanavu_userId' => $user_id,
                    'Kanavu_userName' => $user_name,
                );
                $this->session->set_userdata("userEmail",$email);
                $this->session->set_userdata('currentUserId', $user_id);
                $this->session->set_userdata('form_selected_text',$this->input->post('category'));
                $this->session->set_userdata($userLoggedIn);  
                $this->db->insert('individualform', $causeData);
                $causeId = $this->db->insert_id();
                $causeData['cause_id'] = $causeId;
                // $this->DonorprofileModel->registerAsdonor($causeData);
                $this->session->set_userdata('currentCauseId', $causeId);
                $this->session->set_userdata($userLoggedIn);      
                redirect("/send"); 
            }
        else{
            $this->db->insert('user', $userData);
            $userId = $this->db->insert_id();
            $userLoggedIn = array(
                'Kanavu_userId' => $userId,
                'Kanavu_userName' => $userData["name"],
            );
            $this->session->set_userdata('currentUserId', $userId);
            $causeData["user_id"] = $userId;
            $this->session->set_userdata('form_selected_text', $this->input->post('category'));
            $this->session->set_userdata('userEmail', $email);
            $this->db->insert('individualform', $causeData);
            $causeId = $this->db->insert_id();
            $causeData['cause_id'] = $causeId;
            // $this->DonorprofileModel->registerAsdonor($causeData);
            $this->session->set_userdata('currentCauseId', $userId);
            $this->session->set_userdata($userLoggedIn);     
            redirect("/send"); 
        }
    }

    public function updateCauseStep2(){
        $data = [
            'amount' => $this->input->post('amount'),
            'end_date' => $this->input->post('end_date'),
        ];

        $id = $this->session->userdata('currentCauseId');
        $this->db->where('id', $id); // Specify the condition
        $success = $this->db->update('individualform', $data);
        redirect('/donate');
    }

    public function fundraiserProfile() {
        $user_id = $this->input->get("id");
    
        try {
            // Attempt to retrieve fundraisers from the database
            $fundraisers = $this->UserModel->get_user_causes($user_id);
    
            // Calculate days left for each fundraiser
            foreach ($fundraisers as $fundraiser) {
                $end_date = new DateTime($fundraiser->end_date);
                $current_date = new DateTime();
                $days_left = $end_date < $current_date ? 0 : $end_date->diff($current_date)->days;
                $fundraiser->days_left = $days_left;
            }
        } catch (Exception $e) {
            // Handle the error if the database cannot be reached
            log_message('error', 'Database error: ' . $e->getMessage());
            show_404(); // Display a 404 error page
            return;
        }
    
        // Load the view with data if everything is successful
        $this->load->view('fundraiserprofile', array("fundraisers"=>$fundraisers));
    }

     // Method to handle the delete request
 public function deleteCause() {
    if($this->input->is_ajax_request()){
        $id = $this->input->post("id");
        // Call the model method to delete the cause by user_id
        $result = $this->UserModel->deleteCause($id);  // Ensure the method matches the model function
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
?>
