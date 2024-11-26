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
    
    public function individual()
    {
        if (!$this->session->userdata('userId')) {
            redirect('login_modal');
            exit;
        }

        //category for individudal form
        else {
            // Load model if not already loaded
            $this->load->model('UserModel');

            // Retrieve categories from the database
            $data['result'] = $this->UserModel->get_all_categories();

            // Load the view and pass the categories
            $this->load->view('individual.php', $data);
        }
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
        // $name = $this->input->post('name');
        // $emailid = $this->input->post('emailid');
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
            // 'name' => $name,
            // 'emailid' => $emailid,
            'phoneno' => $phoneno,
            'transactionid' => $transactionid,
            'currency_type' => $currency_type
        );

        // Call the model function to save the donation
        if ($this->UserModel->saveDonation($data)) {
            // $this->UserModel->update_raised_amount($data['cause_id'], $data['amount']);
            echo json_encode(['status' => 'success', 'redirect' => base_url('myhelps')]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'An error occurred while processing your donation.']);
        }
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
            echo "Email sent successfully!";
        } else {
            echo $this->email->print_debugger(); // Print debug info if sending fails
        }
    }
}
