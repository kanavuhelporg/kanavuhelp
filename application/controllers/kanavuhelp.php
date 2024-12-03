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
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('cookie');
        // $this->load->config('email');
        $this->config->load('email');
    }
    public function index()
    {
        $data['fundraisers'] = $this->UserModel->get_cause_details();
        $is_logged_in = $this->session->userdata('userId') !== null; // Check if userId is set
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
    public function privacy_policy()
    {
        $this->load->view('privacy_policy');
    }
    public function terms_of_use()
    {
        $this->load->view('terms_of_use');
    }
    public function login_modal()
    {
        $data['fundraisers'] = $this->UserModel->get_cause_details();

        // Check if user is logged in using CodeIgniter session
        $is_logged_in = $this->session->userdata('userId') !== null; // Check if userId is set
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
        $is_logged_in = $this->session->userdata('userId') !== null; // Check if userId is set
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
    public function individual()
    {
       // if (!$this->session->userdata('userId')) {
          //  redirect('login_modal');
          //  exit;
      //  }

        //category for individudal form
       // else {
            // Load model if not already loaded
            $this->load->model('UserModel');

            // Retrieve categories from the database
            $data['result'] = $this->UserModel->get_all_categories();

            // Load the view and pass the categories
            $this->load->view('individual.php', $data);
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
         $emailid = $this->input->post('email');
        $phoneno = $this->input->post('phoneno');
        $transactionid = $this->input->post('transactionid');
        $currency_type = $this->input->post('currency_type');
        if ($this->UserModel->is_transaction_id_exists($transactionid)) {
            // If it exists, show an error message
            echo json_encode(['status' => 'error', 'message' => 'The transaction ID already exists.']);
            return; // Redirect to the donation page or any relevant page
        }
        // Prepare data to insert
        $data = array(
            'cause_id' => $cause_id,
            'user_id' => $user_id,
            'amount' => $amount,
             'name' => $name,
             'email' => $emailid,
            'phoneno' => $phoneno,
            'transactionid' => $transactionid,
            'currency_type' => $currency_type
        );

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
        $is_logged_in = $this->session->userdata('userId') !== null; // Check if userId is set
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
    }

    public function myhelps()
    {
        //if (!$this->session->userdata('userId')) {
         //   redirect('login_modal1');

         //   exit;
      //  }

        // Debugging: Check if the userId is available in the session
        $user_id = $this->session->userdata('userId');
        $this->load->model('UserModel');

        // Fetch causes created or donated by the logged-in user
        $data['causes'] = $this->UserModel->getCausesDonationByUserId($user_id);

        // Load the view and pass the causes data
        $this->load->view('myhelps.php', $data);
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
        $days_left = $end_date->diff($current_date)->days . 'days left';
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
        $data['is_logged_in'] = $this->session->userdata('userId') !== null;
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
        $postData = $this->input->post(null, true);
        $login = $this->UserModel->loginUser();
        $returnUrl = $this->input->post('returnUrl');
        if (isset($login[0]['id'])) {
            // Set session data for the logged-in user
            $userLoggedIn = array(
                'userId' => $login[0]['id'],
                'userName' => $login[0]['name'],
            );
            $this->session->set_userdata($userLoggedIn);
            if (!empty($returnUrl)) {
                redirect($returnUrl);
            } else {
                    // Redirect to 'kanavuhome' after successful login
                ;
                redirect(base_url('/'));
            }
        } else {
            // If login fails, reload the login page with an error message
            $this->load->view('login.php');
            echo '<script>alert("Please enter registered credentials.");</script>';
        }
    }
    public function individualform_data()
    {
        $this->load->model('UserModel');
        $this->load->library(['upload', 'form_validation']);

        $data = [
            'amount' => $this->input->post('amount'),
            'end_date' => $this->input->post('end_date'),
            'cause_heading' => $this->input->post('cause_heading'),
            'cause_description' => $this->input->post('cause_description'),
            'user_id' => $this->session->userdata('currentUserId')
        ];

        // File upload configuration
        $config['upload_path'] = './assets/individualform_img/';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $config['max_size'] = 2048; // 2MB
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->upload->initialize($config);

        // Handle file upload
        if (!$this->upload->do_upload('cover_image')) {
            $this->session->set_flashdata('error', 'Upload error: ' . $this->upload->display_errors());
            redirect('kanavuhelp/individual');
        }

        $file_data = $this->upload->data();
        $data['cover_image'] = $file_data['file_name'];

        $causeId = $this->session->userdata('currentCauseId');
        $response = $this->UserModel->store3($data, $causeId);
        redirect('donate');

        // if ($response) {
        //     $this->session->set_flashdata('success', 'Successfully registered');
        //     redirect('donate');
        // } else {
        //     $this->session->set_flashdata('error', 'Failed to register');
        //     redirect('registration');
        // }
    }



    // causes by user id
    public function user_causes()
{
    // Check session for user ID
    $user_id = $this->session->userdata('userId');
    
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
        $data['fundraisers'] = $this->UserModel->get_user_causes($user_id);

        // Calculate days left for each fundraiser
        foreach ($data['fundraisers'] as $fundraiser) {
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
    $this->load->view('myFundraisers', $data);
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

    // Set a success message
    $this->session->set_flashdata('success', 'Thanks for contacting us!');

    // Redirect back to the homepage
    redirect(base_url('/'));
}


    public function logout()
    {
        // Clear session data
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('userName');

        // Redirect to the login page
        redirect(base_url('/login'));
    }
    // Controller method for viewing the profile
    public function profile()
    {
        // Check if user is logged in
        if (!$this->session->userdata('userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }

        // Get user data from session
        $userId = $this->session->userdata('userId');
        $this->load->model('UserModel');

        // Fetch user data from the database
        $data['user'] = $this->UserModel->getUserById($userId);

        // Load the profile view and pass user data
        $this->load->view('profile_view', $data);
    }

    public function send()
    {
        // Initialize the email with config settings

        $to = 'prasanthsubramaniyan945@gmail.com';
        $otp = rand(1000, 9999);
        $this->session->set_userdata('generated_otp', $otp);
       
        $message = "Your OTP is $otp to change the new password for your Kanavu Help account.";

        $this->email->from('support@kanavu.help', 'Kanavu Help');
        $this->email->to($to);
        $this->email->subject('Kanavu Help Foundation');
        $this->email->message($message);

        if ($this->email->send()) {
            // Set a session variable to indicate OTP was sent
            $this->session->set_flashdata('otp_sent', true);
            redirect('/individual');// Redirect back to the same page
        } else {
            echo $this->email->print_debugger(); // Print debug info if sending fails
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
        $causeData = [
            'category' => $this->input->post('category'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'age' => $this->input->post('age'),
            'location' => $this->input->post('location'),
            'form_selected_text' => $this->input->post('category'),
        ];

        $userData = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobileNumber' => $this->input->post('phone'),
            'category' => 'user',
        ];

        $form_selected_text = $this->input->post('category');
        $email = $this->input->post('email');

        $this->db->insert('user', $userData);
        $userId = $this->db->insert_id();
        $this->session->set_userdata('currentUserId', $userId);
        $this->session->set_userdata('form_selected_text', $form_selected_text);
        this->session->set_userdata('userEmail', $email);

        $this->db->insert('individualform', $causeData);
        $causeId = $this->db->insert_id();
        $this->session->set_userdata('currentCauseId', $causeId);

        redirect('/send');
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

}
