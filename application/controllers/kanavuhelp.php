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
    }

    public function index()
    {
        $data['fundraisers'] = $this->UserModel->get_cause_details();
        $is_logged_in = $this->session->userdata('Kanavu_userId') !== null; // Check if userId is set
        $data['is_logged_in'] = $is_logged_in;
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

    $data['fundraisers'] = array_slice($active_fundraisers, 0, 10);

        $this->load->view('kanavuhome.php', $data);
        $this->session->set_userdata("entry",1);
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
        if (!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $userid = $this->session->userdata("Kanavu_userId");
        $causedetails = $this->UserModel->causeDetailsforupdate($userid);
        $this->load->view("updatecause",array("causedetails"=>$causedetails));
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

        $checkregister = $this->UserModel->checkUserexist($emailid);
        if($checkregister->num_rows() == 0){
            $this->db->insert('user', $newuser);
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
        $active_fundraisers = [];

        // Loop through each fundraiser to check status and calculate days_left
        foreach ($data['fundraisers'] as $fundraiser) {
            $end_date = new DateTime($fundraiser->end_date);
            $current_date = new DateTime();
            $date_diff = $end_date->diff($current_date);

            // Calculate days left and check if the fundraiser is expired
            $days_left = $date_diff->days;
            $is_expired = ($date_diff->invert === 0 && $days_left > 0) || $fundraiser->raised_amount >= $fundraiser->amount;

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

        $this->load->view('donate', $data);
        $this->session->set_userdata("entry",1);
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

    public function helpus($fundraiser_id = null,$fundraiser_heading = null)
    {
        if ($fundraiser_id === null|| $fundraiser_heading== null) {
            show_404();
            return;
        }

        $fundraiser_details = $this->UserModel->get_fundraiser_details($fundraiser_id);

        if (!$fundraiser_details) {
            show_404();
            return;
        }

        // Calculate days left (existing code)
        $end_date = new DateTime($fundraiser_details->end_date);
        $current_date = new DateTime();
        $days_left = $end_date->diff($current_date)->days . ' Days Left';
        if ($days_left < 0) {
            $days_left = 'expired';
        }
        $fundraiser_details->hide_donation_button = $fundraiser_details->raised_amount >= $fundraiser_details->amount;
        // Get the number of supporters
        $supporters_count = $this->UserModel->count_supporters($fundraiser_id);
        $username = $this->UserModel->get_user_name_by_cause_id($fundraiser_id);

        $topdonars = $this->UserModel->get_top_donors_by_cause($fundraiser_id);
        $topdonars15 = $this->UserModel->get_top_fifteen_donors_by_cause($fundraiser_id);
        // Pass data to the view
        $fundraiser_details->days_left = $days_left;
        $fundraiser_details->supporters_count = $supporters_count;
        $fundraiser_details->username = $username;
        $fundraiser_details->topdonars = $topdonars;
       // $fundraiser_details->topdonars15 = $topdonars15;
        $data['fundraiser'] = $fundraiser_details;
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
        $uploadeddocuments = ["cover_image","document_one","document_two","document_three","document_four","document_five","cause_video"];
        $databasedocuments = ["cover_image","cause_image1","cause_image2","cause_image3","cause_image4","cause_image5","Cause_video"];
        $count = count($uploadeddocuments);
        // if($this->upload->do_upload('cover_image')){
        //     $cover_image[] = $this->upload->data();
        // }
        // else{
        //     $this->session->set_flashdata("fileuploadfailed",true);
        //     redirect('individual'); 
        // }
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
       /*  $receiveddocumentcount = count($dataInfo);
        
        for($i = 0;$i < $receiveddocumentcount; $i++){
        $documentinfo[$databasedocuments[$i]] = $dataInfo[$i]['file_name'];
        } */

            $data['amount'] = $this->input->post('amount');
            $data['end_date'] = $this->input->post('end_date');
            $data['cause_heading'] = $this->input->post('cause_heading');
            $data['cause_description'] = $this->input->post('cause_description');
            $data['user_id'] = $this->session->userdata('currentUserId');
           
            

        // File upload configuration
        /* $config['upload_path'] = './assets/individualform_img/';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $config['max_size'] = 2048; // 2MB */
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        // $this->upload->initialize($config);

        // Handle file upload
       /*  if (!$this->upload->do_upload('cover_image')) {
            $this->session->set_flashdata('error', 'Upload error: ' . $this->upload->display_errors()); */
            // $this->upload->display_errors();
           /*  $this->session->set_flashdata("fileuploadfailed",true);*/
           /*  redirect('individual'); 
        }
 */
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
            $data['verified'] = 0;
           
       
        $file_data = $this->upload->data();

        $causeId = $this->session->userdata('Kanavu_userId');
        $response = $this->UserModel->store3($data,$causeId);
        $userLoggedIn = array(
            'Kanavu_userId' => $this->session->userdata("currentUserId"),
            'Kanavu_userName' => $this->session->userdata('Kanavu_userName'),
        );
        // $this->session->set_userdata($userLoggedIn);  
        $this->session->set_flashdata("updatedindividualform", true);
        redirect('myFundraisers'); 
    }

    private function set_upload_options()
    {   
    //upload an image options
    $config = array();
    $config['upload_path'] = './assets/individualform_img/';
    $config['allowed_types'] = 'gif|jpg|png|svg|mp4';
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
    // Load the database
    $this->load->database();

    // Get form data
    $data = [
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'message' => $this->input->post('message')
    ];

    // Insert data into the database
    $this->db->insert('contact_us', $data);
    $userEmail = $this->session->userdata('userEmail');
    $to = "help.kanavu@gmail.com";
   
    $message = $data["message"];

    $this->email->from('support@kanavu.help', 'Kanavu Help');
    $this->email->to($to);
    $this->email->subject('Kanavu Help Foundation');
    $this->email->message($message);

    if($this->email->send()) {
    // Set a success message
        $this->session->set_flashdata('submitsuccessstatus', 'Thanks for contacting us!');
    }
    else {
        $this->session->set_flashdata('submiterrorstatus', 'Unexpected error Occur!');
    }
    // Redirect back to the homepage
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
       
        $message = "Your OTP is $otp to change the new password for your Kanavu Help account.";

        $this->email->from('support@kanavu.help', 'Kanavu Help');
        $this->email->to($to);
        $this->email->subject('Kanavu Help Foundation');
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
            if(empty($end_date)){
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
            }
            else{
                $userLoggedIn = array(
                    'Kanavu_userId' => $user_id,
                    'Kanavu_userName' => $user_name,
                );
                $this->session->set_userdata('currentCauseId', $user_id);
                $this->session->set_userdata("userEmail",$email);
                $this->session->set_userdata('currentUserId', $user_id);
                $this->session->set_userdata('form_selected_text',$this->input->post('category'));
                $this->session->set_userdata($userLoggedIn);       
                redirect("/send"); 
            }
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

}
?>
