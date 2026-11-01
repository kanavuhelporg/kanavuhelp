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
        $this->load->model('adminpanel');
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
        // $data['total_donors'] = $this->UserModel->get_total_donors();
        // $data['total_events'] = $this->UserModel->get_total_events();
        // $data['total_fund'] = $this->UserModel->get_total_fund();
        $data['total_donors'] = $this->adminpanel->get_total_donors_final();
        $data['total_events'] = $this->adminpanel->get_total_causes_final();
        $data['total_fund'] = $this->adminpanel->get_total_fund();
        // $data['total_volunteers'] = 550; // Static for now, update if you have a table
        $data['total_volunteers'] = $this->adminpanel->get_total_volunteers();
        // Load view and pass data
        $this->load->view('kanavuhome.php', $data);
        $this->session->set_userdata("entry", 1);
    }








    public function insert_priority()
    {
        if ($this->input->method() === 'post') {
            $id = $this->input->post('id');
            $priority = $this->input->post('priority');
            /*    log_message('debug', 'Received ID: ' . $id);
             log_message('debug', 'Received Priority: ' . $priority);

             // Or temporary echo for direct checking
             echo "ID: $id, Priority: $priority";
             exit;  */

            if ($id !== null && $id !== '' && $priority !== null && $priority !== '') {
                $priorityVal = (int) $priority;
                if (!is_numeric($priority) || $priorityVal != $priority || $priorityVal < 0 || $priorityVal > 8) {
                    echo json_encode(['status' => 'error', 'message' => 'Priority value must be an integer between 0 and 8.']);
                    return;
                }

                $this->load->model('UserModel');

                // Check if the priority is already assigned to another ID (skip if priority is 0)
                if ($priorityVal != 0) {
                    $this->db->where('priority', $priorityVal);
                    $this->db->where('id !=', $id);
                    $query = $this->db->get('individualform');

                    if ($query->num_rows() > 0) {
                        echo json_encode(['status' => 'error', 'message' => 'This priority number is already assigned to another fundraiser.']);
                        return;
                    }
                }

                // Proceed with the update
                $update = $this->UserModel->update_priority($id, $priorityVal);

                if ($update !== false && $update >= 0) {
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
    public function set_priority($id)
    {

        if ($this->input->is_ajax_request() && $this->input->post('priority')) {
            $priority = (int) $this->input->post('priority');
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

    public function set_no_priority()
    {
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


    public function indexpage()
    {
        if (!$this->session->userdata("Kanavu_userId")) {
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
        if ($this->session->userdata("Kanavu_userId")) {
            redirect("indexpage");
        }
        $this->load->view('login');
    }

    public function privacy_policy()
    {
        $this->load->view('privacy_policy');
    }

    public function getHeader()
    {
        $this->load->view("header");
    }

    public function getFooter()
    {
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

    public function updatecause()
    {
        if (!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $cause_id = $this->input->get("cause_id");
        $causedetails = $this->UserModel->causeDetailsforupdate($cause_id);
        $this->load->view("updatecause", array("causedetails" => $causedetails));
    }

    public function updateprogress()
    {
        if (!$this->session->userdata('Kanavu_userId')) {
            redirect('kanavuhelp/login'); // Redirect to login if not logged in
        }
        $cause_id = $this->input->get("cause_id");
        $progressdetails = $this->UserModel->causeDetailsforprogress($cause_id);
        $this->load->view("updateprogress", array("progressdetails" => $progressdetails, "cause_id" => $cause_id));
    }

    // public function updateprogressdata(){
    //     if(!$this->session->userdata('Kanavu_userId')) {
    //         redirect('kanavuhelp/login'); // Redirect to login if not logged in
    //     }
    //     $this->load->model('UserModel');
    //     $this->load->library(['upload', 'form_validation']);

    //     $data = array();
    //     $dataInfo = array();
    //     $documentinfo = array();
    //     $files = $_FILES;

    //     $uploadeddocuments = ["progress_description","document_one","document_two","document_three","document_four","document_five","progress_video","progress_embed_video"];
    //     $databasedocuments = ["progress_description","cause_status_image1","cause_status_image2","cause_status_image3","cause_status_image4","cause_status_image5","cause_status_video"];
    //     $count = count($uploadeddocuments);
    //     try{
    //         $insert = 0;
    //     for($i=0; $i < $count; $i++)
    //     {           
    //         if($_FILES[$uploadeddocuments[$i]]['name'] == ""){
    //             continue;
    //         }
    //         $_FILES['documents']['name']= $files[$uploadeddocuments[$i]]['name'];
    //         $_FILES['documents']['type']= $files[$uploadeddocuments[$i]]['type'];
    //         $_FILES['documents']['tmp_name']= $files[$uploadeddocuments[$i]]['tmp_name'];
    //         $_FILES['documents']['error']= $files[$uploadeddocuments[$i]]['error'];
    //         $_FILES['documents']['size']= $files[$uploadeddocuments[$i]]['size'];    

    //         $this->upload->initialize($this->set_progress_upload_options());
    //         $this->upload->do_upload($uploadeddocuments[$i]);
    //         $dataInfo[] = $this->upload->data();
    //         $data[$databasedocuments[$i]] = $dataInfo[$insert]["file_name"];
    //         $insert++;
    //     }
    //     }
    //     catch(Exception $e){
    //         $this->session->set_flashdata("fileuploadfailed",true);
    //         redirect('updateprogress'); 
    //     }

    //         $data['progress_description'] = !empty(trim($this->input->post('progress_description'))) ? $this->input->post('progress_description') : NULL;
    //         $data['progress_embed_link'] = $this->input->post('progress_embed_video_link');
    //         $data['cause_id'] = $this->input->post('cause_id'); 
    //         $file_data = $this->upload->data();

    //     $causeId = $this->input->post('cause_id');
    //     $response = $this->UserModel->store4($data,$causeId);
    //     $userLoggedIn = array(
    //         'Kanavu_userId' => $this->session->userdata("currentUserId"),
    //         'Kanavu_userName' => $this->session->userdata('Kanavu_userName'),
    //     );
    //     // $this->session->set_userdata($userLoggedIn);  
    //     $this->session->set_flashdata("progressupdated", true);
    //     redirect('causesverification');
    // }

    public function updateprogressdata()
    {
        // if (!$this->session->userdata('Kanavu_userId')) {
        //     redirect('kanavuhelp/login');
        // }

        $this->load->model('UserModel');
        $this->load->library('upload');

        $uploadeddocuments = [
            "document_one",
            "document_two",
            "document_three",
            "document_four",
            "document_five",
            "progress_video"
        ];

        // Server side validation of progress details
        $progress_description = trim($this->input->post('progress_description'));
        if ($progress_description !== '') {
            if (strlen($progress_description) > 200) {
                $this->session->set_flashdata("error", "Progress description cannot exceed 200 characters.");
                $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'causesverification';
                redirect($referrer);
                return;
            }
            if (!preg_match('/[a-zA-Z]/', $progress_description)) {
                $this->session->set_flashdata("error", "Progress description cannot consist of only numbers or special characters.");
                $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'causesverification';
                redirect($referrer);
                return;
            }
            // XSS Check
            if (preg_match('/<[^>]*>|javascript\s*:/i', $progress_description)) {
                $this->session->set_flashdata("error", "Progress description cannot contain HTML tags or script URLs.");
                $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'causesverification';
                redirect($referrer);
                return;
            }
            // SQL Injection Check
            if (
                preg_match('/<!--|\/\*|\bunion\s+(?:all\s+)?select\b|\bselect\b.+\bfrom\b|\binsert\s+into\b|\bupdate\b.+\bset\b|\bdelete\s+from\b|\bdrop\s+table\b/i', $progress_description) ||
                preg_match('/\b(or|and)\b\s+(\d+|\'[^\']*\'|"[^"]*")\s*=\s*(\d+|\'[^\']*\'|"[^"]*")/i', $progress_description)
            ) {
                $this->session->set_flashdata("error", "Progress description cannot contain SQL injection keywords or comments.");
                $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'causesverification';
                redirect($referrer);
                return;
            }
        }

        // Validate image file formats (JPG, JPEG, PNG, SVG)
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        for ($i = 0; $i < 5; $i++) {
            $file_key = $uploadeddocuments[$i];
            if (!empty($_FILES[$file_key]['name'])) {
                $ext = strtolower(pathinfo($_FILES[$file_key]['name'], PATHINFO_EXTENSION));
                if (!in_array($ext, $allowed_extensions)) {
                    $this->session->set_flashdata("error", "Only JPG, JPEG, PNG, and SVG formats are allowed for progress images.");
                    $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'causesverification';
                    redirect($referrer);
                    return;
                }
            }
        }

        // Validate video file format (MP4) if uploaded
        if (!empty($_FILES['progress_video']['name'])) {
            $ext = strtolower(pathinfo($_FILES['progress_video']['name'], PATHINFO_EXTENSION));
            if ($ext !== 'mp4') {
                $this->session->set_flashdata("error", "Only MP4 video format is allowed.");
                $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'causesverification';
                redirect($referrer);
                return;
            }
        }

        // Validate embed video link
        $embed_link = trim($this->input->post('progress_embed_video_link'));
        if (!empty($embed_link)) {
            if (filter_var($embed_link, FILTER_VALIDATE_URL) === false) {
                $this->session->set_flashdata("error", "Please enter a valid video link/URL.");
                $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'causesverification';
                redirect($referrer);
                return;
            }
        }

        $data = [];
        $files = $_FILES;

        $databasedocuments = [
            "cause_status_image1",
            "cause_status_image2",
            "cause_status_image3",
            "cause_status_image4",
            "cause_status_image5",
            "cause_status_video"
        ];

        $insert = 0;

        // for ($i = 0; $i < count($uploadeddocuments); $i++) {

        //     if (empty($_FILES[$uploadeddocuments[$i]]['name'])) {
        //         continue;
        //     }

        //     $_FILES['documents']['name']     = $files[$uploadeddocuments[$i]]['name'];
        //     $_FILES['documents']['type']     = $files[$uploadeddocuments[$i]]['type'];
        //     $_FILES['documents']['tmp_name'] = $files[$uploadeddocuments[$i]]['tmp_name'];
        //     $_FILES['documents']['error']    = $files[$uploadeddocuments[$i]]['error'];
        //     $_FILES['documents']['size']     = $files[$uploadeddocuments[$i]]['size'];

        //     $this->upload->initialize($this->set_progress_upload_options());

        //     if (!$this->upload->do_upload('documents')) {
        //         echo "<pre>";
        //         echo "FCPATH = " . FCPATH . "\n";
        //         echo "UPLOAD PATH = " . FCPATH . "uploads/progress/\n";
        //         var_dump(is_dir(FCPATH . "uploads/progress/"));
        //         var_dump(is_writable(FCPATH . "uploads/progress/"));
        //         exit;

        //     }

        //     $uploadData = $this->upload->data();
        //     $data[$databasedocuments[$insert]] = $uploadData['file_name'];
        //     $insert++;
        // }
        for ($i = 0; $i < count($uploadeddocuments); $i++) {

            if (empty($_FILES[$uploadeddocuments[$i]]['name'])) {
                continue;
            }

            // Assign current file to a single key
            $_FILES['documents']['name'] = $_FILES[$uploadeddocuments[$i]]['name'];
            $_FILES['documents']['type'] = $_FILES[$uploadeddocuments[$i]]['type'];
            $_FILES['documents']['tmp_name'] = $_FILES[$uploadeddocuments[$i]]['tmp_name'];
            $_FILES['documents']['error'] = $_FILES[$uploadeddocuments[$i]]['error'];
            $_FILES['documents']['size'] = $_FILES[$uploadeddocuments[$i]]['size'];

            $this->upload->initialize($this->set_progress_upload_options());

            // 🔥 THIS IS THE CRITICAL FIX
            if (!$this->upload->do_upload('documents')) {
                echo "<pre>";
                echo "UPLOAD FAILED FOR: " . $uploadeddocuments[$i] . "\n";
                echo $this->upload->display_errors();
                exit;
            }

            $uploadData = $this->upload->data();
            $data[$databasedocuments[$i]] = $uploadData['file_name'];
        }

        // TEXT DATA (NOT FILES)
        $data['progress_description'] = !empty(trim($this->input->post('progress_description'))) ? $this->input->post('progress_description') : NULL;

        $embed_link = $this->input->post('progress_embed_video_link');
        if (!empty($embed_link) && strpos($embed_link, '<iframe') === false) {
            $youtube_id = '';
            if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|shorts\/))([A-Za-z0-9_-]+)/', $embed_link, $matches)) {
                $youtube_id = $matches[1];
            }
            if (!empty($youtube_id)) {
                $embed_link = '<iframe width="100%" height="400px" src="https://www.youtube.com/embed/' . $youtube_id . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
            }
        }
        $data['progress_embed_link'] = $embed_link;
        $data['cause_id'] = $this->input->post('cause_id');

        $causeId = $this->input->post('cause_id');
        $this->UserModel->store4($data, $causeId);

        $this->session->set_flashdata("progressupdated", true);
        redirect('causesverification');
    }
    public function get_progress_data_ajax($cause_id)
    {
        $this->load->model('UserModel');
        $progress = $this->UserModel->get_user_progress($cause_id);

        if ($progress) {
            echo json_encode(['status' => 'success', 'data' => $progress]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No progress data found']);
        }
    }

    public function deleteProgress()
    {
        if ($this->input->is_ajax_request()) {
            $cause_id = $this->input->post("cause_id");
            $this->load->model('UserModel');
            $result = $this->UserModel->deleteProgress($cause_id);

            if ($result) {
                echo json_encode(['status' => 'success', 'message' => 'Progress details deleted successfully!']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to delete progress details!']);
            }
        }
    }


    public function individual($token = null)
    {
        $this->load->model('UserModel');

        // Check token from route parameter, query parameter, or session
        if (empty($token)) {
            $token = $this->input->get('token', true);
        }
        if (empty($token)) {
            $token = $this->session->userdata('approved_enquiry_token');
        }

        // Check if logged-in user has an active approved enquiry
        if (empty($token) && $this->session->userdata('Kanavu_userId')) {
            $user_id = $this->session->userdata('Kanavu_userId');
            $user = $this->db->get_where('user', ['id' => $user_id])->row();
            if ($user && !empty($user->email)) {
                $approved_enquiry = $this->UserModel->get_latest_approved_enquiry_by_email($user->email);
                if ($approved_enquiry && !empty($approved_enquiry->approval_token)) {
                    $token = $approved_enquiry->approval_token;
                }
            }
        }

        // If an approved token is present, direct to cause creation with the given input fields
        if (!empty($token)) {
            return $this->create_cause($token);
        }

        // Only approved users can access cause creation!
        // Unapproved users are shown the access restriction / enquiry prompt:
        $data['status'] = 'invalid';
        $data['page_title'] = 'Access Restricted - Kanavu Help';
        $data['message'] = 'Cause creation requires Admin approval. Only approved users can create a cause. Please submit a Fundraiser Enquiry first to receive approval.';
        $this->load->view('cause_access_restricted', $data);
    }
    public function charity()
    {
        $this->load->view('charity.php');
    }

    // public function processDonation()
    // {
    //     // Load the model where the donation logic will be handled
    //     $this->load->model('UserModel');

    //     // Get form input values
    //     $cause_id = $this->input->post('cause_id');
    //     $user_id = $this->input->post('user_id');
    //     $amount = $this->input->post('amount');
    //     $name = $this->input->post('name');
    //     $city = $this->input->post('city');
    //     $emailid = $this->input->post('email');
    //     $phoneno = $this->input->post('phoneno');
    //     $transactionid = $this->input->post('transactionid');
    //     // $currency_type = $this->input->post('currency_type');
    //     $causedata = $this->UserModel->get_cause_data($cause_id);
    //     $category = $causedata->category;
    //     $cause_heading = $causedata->cause_heading;
    //     $fundraiser_id =  $causedata->id;
    //     $fundraiser_name =  $causedata->name;
    //     $fundraiser_email =  $causedata->email;
    //     $fundraiser_phone =  $causedata->phone;
    //     if ($this->UserModel->is_transaction_id_exists($transactionid)) {
    //         // If it exists, show an error message
    //         echo json_encode(['status' => 'error', 'message' => 'The transaction ID already exists.']);
    //         return; // Redirect to the donation page or any relevant page
    //     }
    //     // Prepare data to insert
    //     $data = array(
    //         'cause_id' => $cause_id,
    //         'user_id' => $user_id,
    //         'donor_id' => $user_id,
    //         'amount' => $amount,
    //          'name' => $name,
    //          'donor_location' => $city,
    //          'email' => $emailid,
    //         'phoneno' => $phoneno,
    //         'category' => $category,
    //         'cause_heading' => $cause_heading,
    //         'transactionid' => $transactionid,
    //         'currency_type' => $currency_type,
    //         'fundraiser_id' => $fundraiser_id,
    //         'fundraiser_name' => $fundraiser_name,
    //         'fundraiser_email' => $fundraiser_email,
    //         'fundraiser_phone' => $fundraiser_phone 
    //     );

    //     $newuser = array(
    //         "name" => $name,
    //         "email" => $emailid,
    //         "mobileNumber" => $phoneno,
    //         "location" => $city
    //     );

    //     $individualdata = array(
    //         "name" => $name,
    //         "email" => $emailid,
    //         "phone" => $phoneno,
    //         "location" => $city
    //     );

    //     $checkregister = $this->UserModel->checkUserexist($emailid);
    //     if($checkregister->num_rows() == 0){
    //         $this->db->insert('user', $newuser);
    //         $newid = $this->db->insert_id();
    //         $individualdata["user_id"] = $newid;
    //         $data["user_id"] = $newid;
    //         $this->db->insert('individualform', $individualdata);
    //     }
    //     // Call the model function to save the donation
    //     if ($this->UserModel->saveDonation($data)) {
    //         // $this->UserModel->update_raised_amount($data['cause_id'], $data['amount']);
    //         $this->session->set_flashdata('donation_success', true);
    //         redirect('donate');

    //     } else {
    //         $this->session->set_flashdata('error', 'Failed to submit donation');
    //         redirect('donate');
    //     }
    // }
    public function processDonation()
    {
        $this->load->model('UserModel');

        // Honeypot check to prevent automated spambot form submission
        $honeypot = $this->input->post('username_verification_honey');
        if ($honeypot === NULL || $honeypot !== '') {
            echo json_encode([
                'status' => 'error',
                'message' => 'Security check failed. Automated submission detected.'
            ]);
            exit;
        }

        // Get POST data
        $cause_id = $this->input->post('cause_id');
        $user_id = $this->input->post('user_id');
        $amount = $this->input->post('amount');
        $name = $this->input->post('name');
        $city = $this->input->post('city');
        $emailid = $this->input->post('email');
        $phoneno = $this->input->post('phoneno');
        $transactionid = $this->input->post('transactionid');

        // Fetch cause data
        $causedata = $this->UserModel->get_cause_data($cause_id);

        if (!$causedata) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid cause']);
            exit;
        }

        // Check duplicate transaction ID
        if ($this->UserModel->is_transaction_id_exists($transactionid)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'The transaction ID already exists.'
            ]);
            exit;
        }

        // Donation data
        $data = [
            'cause_id' => $cause_id,
            'user_id' => $user_id,
            'donor_id' => $user_id,
            'amount' => $amount,
            'name' => $name,
            'donor_location' => $city,
            'email' => $emailid,
            'phoneno' => $phoneno,
            'category' => $causedata->category,
            'cause_heading' => $causedata->cause_heading,
            'transactionid' => $transactionid,
            'currency_type' => 'INR',
            'fundraiser_id' => $causedata->id,
            'fundraiser_name' => $causedata->name,
            'fundraiser_email' => $causedata->email,
            'fundraiser_phone' => $causedata->phone
        ];

        // Register user if not exists
        if ($this->UserModel->checkUserexist($emailid)->num_rows() == 0) {
            $this->db->insert('user', [
                'name' => $name,
                'email' => $emailid,
                'mobileNumber' => $phoneno,
                'location' => $city
            ]);
            $newid = $this->db->insert_id();
            $data['user_id'] = $newid;
            /*
             $this->db->insert('individualform', [
             'user_id' => $newid,
             'name' => $name,
             'email' => $emailid,
             'phone' => $phoneno,
             'location' => $city
             ]);
             */
        }

        // Save donation
        if ($this->UserModel->saveDonation($data)) {
            echo json_encode(['status' => 'success']);
            exit;
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Failed to submit donation'
            ]);
            exit;
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
                $fundraiser->donation_button_text = 'Complete Donation'; // New button text for fully funded campaigns
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
        $this->session->set_userdata("entry", 1); /* kani */


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

        if ($login->num_rows() == 0) {
            $this->session->unset_userdata("userEmail");
            $this->session->set_flashdata("not_registered_user", true);
            redirect("login");
            // echo '<script>alert("Please enter registered credentials.");</script>';
        } else {
            if ($countotp == 0) {
                $this->session->set_userdata("userEmail", $email);
                $this->session->set_userdata("path", "login");
                redirect("send");
            } else {
                $user = $login->row();
                $userLoggedIn = array(
                    'Kanavu_userId' => $user->id,
                    'Kanavu_userName' => $user->name,
                );
                $this->session->set_userdata($userLoggedIn);
                $this->session->set_userdata("entry", 0);
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
        $uploadeddocuments = ["cover_image", "document_one", "document_two", "document_three", "document_four", "document_five", "document_six", "document_seven", "cause_video", "cause_video_english"];
        $databasedocuments = ["cover_image", "cause_image1", "cause_image2", "cause_image3", "cause_image4", "cause_image5", "cause_image6", "cause_image7", "Cause_video", "Cause_video_english"];
        $count = count($uploadeddocuments);

        try {
            $insert = 0;
            for ($i = 0; $i < $count; $i++) {
                if ($_FILES[$uploadeddocuments[$i]]['name'] == "") {
                    continue;
                }
                $_FILES['documents']['name'] = $files[$uploadeddocuments[$i]]['name'];
                $_FILES['documents']['type'] = $files[$uploadeddocuments[$i]]['type'];
                $_FILES['documents']['tmp_name'] = $files[$uploadeddocuments[$i]]['tmp_name'];
                $_FILES['documents']['error'] = $files[$uploadeddocuments[$i]]['error'];
                $_FILES['documents']['size'] = $files[$uploadeddocuments[$i]]['size'];

                // Dynamically configure allowed types depending on file purpose
                $config = $this->set_upload_options();
                if ($i < 8) {
                    $config['allowed_types'] = 'jpg|jpeg|png|svg';
                } else {
                    $config['allowed_types'] = 'mp4';
                }

                $this->upload->initialize($config);
                if (!$this->upload->do_upload($uploadeddocuments[$i])) {
                    $error = $this->upload->display_errors('', '');
                    $this->session->set_flashdata("error", "Upload failed for " . $uploadeddocuments[$i] . ": " . $error);
                    redirect($_SERVER['HTTP_REFERER']);
                    return;
                }
                $dataInfo[] = $this->upload->data();
                $data[$databasedocuments[$i]] = $dataInfo[$insert]["file_name"];
                $insert++;
            }
        } catch (Exception $e) {
            $this->session->set_flashdata("error", "File upload failed: " . $e->getMessage());
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        $data['amount'] = $this->input->post('amount');
        $data['end_date'] = $this->input->post('end_date');
        $data['is_runforcause'] = $this->input->post('runforcause');

        if ($data['is_runforcause'] == "yes") {
            $data['eventname'] = $this->input->post('event_name');
            $data['eventdate'] = $this->input->post('event_date');
            $data['eventdistancekm'] = $this->input->post('run_distance_km');
            $data['eventlocation'] = $this->input->post('event_location');
        }

        $cause_heading = $this->input->post('cause_heading');
        if (!empty($cause_heading)) {
            $cause_heading = trim($cause_heading);
            if (strlen($cause_heading) < 4 || strlen($cause_heading) > 150) {
                $this->session->set_flashdata("error", "Cause title must be between 4 and 150 characters.");
                redirect($_SERVER['HTTP_REFERER']);
                return;
            }
            if (preg_match('/(https?:\/\/[^\s]+|www\.[^\s]+|[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/[^\s]*)?|youtube\.com|youtu\.be)/i', $cause_heading)) {
                $this->session->set_flashdata("error", "YouTube links, domains, or URLs are not allowed in the title.");
                redirect($_SERVER['HTTP_REFERER']);
                return;
            }
            if (!preg_match('/^[A-Za-z0-9\s]+$/', $cause_heading)) {
                $this->session->set_flashdata("error", "Cause title must only contain letters, numbers, and spaces.");
                redirect($_SERVER['HTTP_REFERER']);
                return;
            }
            $data['cause_heading'] = $cause_heading;
        }
        $data['cause_description'] = $this->input->post('cause_description');

        $cause_embed_link_tamil = $this->input->post('cause_embed_link_tamil');
        $cause_embed_link_english = $this->input->post('cause_embed_link_english');
        $youtube_regex = '/^(https?:\/\/)?(www\.|m\.)?(youtube\.com|youtu\.be|youtube-nocookie\.com)\/(watch\?v=|embed\/|shorts\/|[a-zA-Z0-9_-]+)/i';

        if (empty($cause_embed_link_tamil)) {
            $this->session->set_flashdata("error", "YouTube Link is required.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        } elseif (!preg_match($youtube_regex, $cause_embed_link_tamil)) {
            $this->session->set_flashdata("error", "Please enter a valid YouTube link.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        if (empty($cause_embed_link_english)) {
            $this->session->set_flashdata("error", "Confirm YouTube Link is required.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        } elseif (!preg_match($youtube_regex, $cause_embed_link_english)) {
            $this->session->set_flashdata("error", "Please enter a valid YouTube link.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        } elseif ($cause_embed_link_tamil !== $cause_embed_link_english) {
            $this->session->set_flashdata("error", "YouTube links do not match.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        $data['Cause_video_link'] = $cause_embed_link_tamil;
        $data['Cause_video_link_eng'] = $cause_embed_link_english;

        $data['user_id'] = $this->session->userdata('currentUserId');


        $file_data = $this->upload->data();
        // $data['cover_image'] = $file_data['file_name'];

        $causeId = $this->session->userdata('currentCauseId');
        $response = $this->UserModel->store3($data, $causeId);
        $userLoggedIn = array(
            'Kanavu_userId' => $this->session->userdata("currentUserId"),
            'Kanavu_userName' => $this->session->userdata('Kanavu_userName'),
        );
        $this->session->set_userdata($userLoggedIn);
        $this->session->set_flashdata("logged_in", true);
        // $this->session->set_userdata("entry",0);
        // redirect('causesverification'); 
        redirect(base_url());
    }

    public function updateindividualform_data()
    {
        $this->load->model('UserModel');
        $this->load->library(['upload', 'form_validation']);

        $data = array();
        $dataInfo = array();
        $documentinfo = array();
        $files = $_FILES;

        $uploadeddocuments = ["cover_image", "document_one", "document_two", "document_three", "document_four", "document_five", "document_six", "document_seven", "cause_video"];
        $databasedocuments = ["cover_image", "cause_image1", "cause_image2", "cause_image3", "cause_image4", "cause_image5", "cause_image6", "cause_image7", "Cause_video"];
        $count = count($uploadeddocuments);
        var_dump($_FILES);
        echo $this->input->post('amount');
        try {
            $insert = 0;
            for ($i = 0; $i < $count; $i++) {
                if ($_FILES[$uploadeddocuments[$i]]['name'] == "") {
                    continue;
                }
                $_FILES['documents']['name'] = $files[$uploadeddocuments[$i]]['name'];
                $_FILES['documents']['type'] = $files[$uploadeddocuments[$i]]['type'];
                $_FILES['documents']['tmp_name'] = $files[$uploadeddocuments[$i]]['tmp_name'];
                $_FILES['documents']['error'] = $files[$uploadeddocuments[$i]]['error'];
                $_FILES['documents']['size'] = $files[$uploadeddocuments[$i]]['size'];

                // Dynamically configure allowed types depending on file purpose
                $config = $this->set_upload_options();
                if ($i < 8) {
                    $config['allowed_types'] = 'jpg|jpeg|png|svg';
                } else {
                    $config['allowed_types'] = 'mp4';
                }

                $this->upload->initialize($config);
                if (!$this->upload->do_upload($uploadeddocuments[$i])) {
                    $error = $this->upload->display_errors('', '');
                    $this->session->set_flashdata("error", "Upload failed for " . $uploadeddocuments[$i] . ": " . $error);
                    redirect($_SERVER['HTTP_REFERER']);
                    return;
                }
                $dataInfo[] = $this->upload->data();
                $data[$databasedocuments[$i]] = $dataInfo[$insert]["file_name"];
                $insert++;
            }
        } catch (Exception $e) {
            $this->session->set_flashdata("error", "File upload failed: " . $e->getMessage());
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        $data['amount'] = $this->input->post('amount');
        $data['end_date'] = $this->input->post('end_date');

        $cause_heading = $this->input->post('cause_heading');
        if (!empty($cause_heading)) {
            $cause_heading = trim($cause_heading);
            if (strlen($cause_heading) < 4 || strlen($cause_heading) > 150) {
                $this->session->set_flashdata("error", "Cause title must be between 4 and 150 characters.");
                redirect($_SERVER['HTTP_REFERER']);
                return;
            }
            if (preg_match('/(https?:\/\/[^\s]+|www\.[^\s]+|[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/[^\s]*)?|youtube\.com|youtu\.be)/i', $cause_heading)) {
                $this->session->set_flashdata("error", "YouTube links, domains, or URLs are not allowed in the title.");
                redirect($_SERVER['HTTP_REFERER']);
                return;
            }
            if (!preg_match('/^[A-Za-z0-9\s]+$/', $cause_heading)) {
                $this->session->set_flashdata("error", "Cause title must only contain letters, numbers, and spaces.");
                redirect($_SERVER['HTTP_REFERER']);
                return;
            }
            $data['cause_heading'] = $cause_heading;
        }
        $data['cause_description'] = $this->input->post('cause_description');

        $cause_embed_link_tamil = $this->input->post('cause_embed_link_tamil');
        $cause_embed_link_english = $this->input->post('cause_embed_link_english');
        $youtube_regex = '/^(https?:\/\/)?(www\.|m\.)?(youtube\.com|youtu\.be|youtube-nocookie\.com)\/(watch\?v=|embed\/|shorts\/|[a-zA-Z0-9_-]+)/i';

        if (empty($cause_embed_link_tamil)) {
            $this->session->set_flashdata("error", "YouTube Link is required.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        } elseif (!preg_match($youtube_regex, $cause_embed_link_tamil)) {
            $this->session->set_flashdata("error", "Please enter a valid YouTube link.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        if (empty($cause_embed_link_english)) {
            $this->session->set_flashdata("error", "Confirm YouTube Link is required.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        } elseif (!preg_match($youtube_regex, $cause_embed_link_english)) {
            $this->session->set_flashdata("error", "Please enter a valid YouTube link.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        } elseif ($cause_embed_link_tamil !== $cause_embed_link_english) {
            $this->session->set_flashdata("error", "YouTube links do not match.");
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        $data['Cause_video_link'] = $cause_embed_link_tamil;
        $data['Cause_video_link_eng'] = $cause_embed_link_english;
        $data['verified'] = 0;
        $file_data = $this->upload->data();

        $causeId = $this->input->post('cause_id');
        $response = $this->UserModel->store5($data, $causeId);
        $this->session->set_flashdata("updatedindividualform", true);
        redirect('causesverification');
    }

    private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './assets/individualform_img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|svg|mp4';
        $config['max_size'] = '0';
        $config['overwrite'] = FALSE;
        return $config;
    }

    private function set_progress_upload_options()
    {
        $upload_path = FCPATH . 'uploads/progress';

        // Create directory if it doesn't exist
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        $path = realpath($upload_path);

        if ($path === false) {
            echo "REALPATH FAILED: " . $upload_path;
            exit;
        }

        return [
            'upload_path' => $path . DIRECTORY_SEPARATOR,
            'allowed_types' => 'jpg|jpeg|png|gif|mp4',
            'max_size' => 51200,
            'encrypt_name' => true
        ];
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
        $this->load->view('myFundraisers', array("fundraisers" => $fundraisers));
        $this->session->set_userdata("entry", 1);
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
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'phone' => $this->input->post('phone', true),
            'message' => $this->input->post('message', true)
        ];

        // Insert data into the database
        $this->db->insert('contact_us', $data);

        // Basic variables
        $userEmail = $data['email'];
        $userName = $data['name'];
        $userMsg = nl2br($data['message']); // Keep line breaks
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

        $this->email->from($this->config->item('from_email') ?: 'support@help.kanavu.org', 'The Kanavu Trust');
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

        $this->email->from($this->config->item('from_email') ?: 'support@help.kanavu.org', 'Kanavu Help Website');
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

    public function fundraiser_enquiry()
    {
        $this->load->model('UserModel');
        $data['categories'] = $this->UserModel->get_all_categories();
        $this->load->view('fundraiser_enquiry', $data);
    }

    public function fundraiser_approve_token($token = null)
    {
        if (empty($token)) {
            $token = $this->input->get('token', true);
        }
        return $this->create_cause($token);
    }

    public function create_cause($token = null)
    {
        $this->load->model('UserModel');

        // Check token from URL argument, query parameter, or from session
        if (empty($token)) {
            $token = $this->input->get('token', true);
        }
        if (empty($token)) {
            $token = $this->session->userdata('approved_enquiry_token');
        }

        // Check if logged-in user has an active approved enquiry
        if (empty($token) && $this->session->userdata('Kanavu_userId')) {
            $user_id = $this->session->userdata('Kanavu_userId');
            $user = $this->db->get_where('user', ['id' => $user_id])->row();
            if ($user && !empty($user->email)) {
                $approved_enquiry = $this->UserModel->get_latest_approved_enquiry_by_email($user->email);
                if ($approved_enquiry && !empty($approved_enquiry->approval_token)) {
                    $token = $approved_enquiry->approval_token;
                }
            }
        }

        $enquiry = null;
        if (!empty($token)) {
            $enquiry = $this->UserModel->get_enquiry_by_token($token);
        }

        // Allow cause creation directly without a prior fundraiser enquiry
        if (!$enquiry) {
            if (empty($token)) {
                $token = 'cause_verified_' . substr(md5(uniqid(mt_rand(), true)), 0, 16);
            }
            $enquiry = (object) [
                'id' => 0,
                'fullname' => '',
                'phone' => '',
                'email' => '',
                'location' => '',
                'beneficiary_relation' => 'Self',
                'beneficiary_name' => '',
                'beneficiary_age' => '',
                'target_amount' => '',
                'cause_category' => '',
                'cause_title' => '',
                'cause_description' => '',
                'status' => 'approved',
                'approval_token' => $token
            ];
        }

        // Store active approval session
        $this->session->set_userdata('approved_enquiry_token', $token);
        $this->session->set_userdata('approved_enquiry_id', $enquiry->id);

        $data['enquiry'] = $enquiry;
        $data['token'] = $token;
        $this->load->view('cause_creation', $data);
    }

    public function submit_approved_cause()
    {
        $this->load->model('UserModel');
        $this->load->library(['upload', 'form_validation']);

        $token = trim($this->input->post('approval_token', true));
        if (empty($token)) {
            $token = $this->session->userdata('approved_enquiry_token');
        }
        if (empty($token)) {
            $token = 'cause_verified_' . substr(md5(uniqid(mt_rand(), true)), 0, 16);
        }

        $enquiry = $this->UserModel->get_enquiry_by_token($token);

        if (!$enquiry) {
            $enquiry = (object) [
                'id' => 0,
                'fullname' => $this->input->post('requester_name', true) ?: '',
                'phone' => $this->input->post('requester_phone', true) ?: '',
                'email' => $this->input->post('requester_email', true) ?: '',
                'location' => $this->input->post('requester_location', true) ?: '',
                'beneficiary_relation' => $this->input->post('beneficiary_relation', true) ?: 'Self',
                'beneficiary_name' => $this->input->post('beneficiary_name', true) ?: '',
                'beneficiary_age' => (int) $this->input->post('beneficiary_age', true) ?: 0,
                'target_amount' => (float) $this->input->post('amount', true) ?: 0,
                'cause_category' => $this->input->post('cause_category', true) ?: 'General',
                'cause_title' => $this->input->post('cause_heading', true) ?: 'Fundraiser Campaign',
                'cause_description' => $this->input->post('cause_description', true) ?: '',
                'status' => 'approved',
                'approval_token' => $token
            ];
        }

        // Ensure columns in individualform
        $this->UserModel->ensure_individualform_docx_columns();

        // Handle File Uploads
        $upload_dir = './assets/individualform_img/';
        if (!is_dir($upload_dir)) {
            @mkdir($upload_dir, 0777, true);
        }

        $config = array();
        $config['upload_path'] = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|svg|pdf';
        $config['max_size'] = 10240; // 10MB
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $cover_image = '';
        $document_one = '';
        $document_two = '';
        $document_three = '';

        if (!empty($_FILES['cover_image']['name'])) {
            if ($this->upload->do_upload('cover_image')) {
                $uploadData = $this->upload->data();
                $cover_image = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Cover image upload error: ' . $this->upload->display_errors('', ''));
                redirect('create-cause/' . $token);
                return;
            }
        }

        if (!empty($_FILES['document_one']['name'])) {
            if ($this->upload->do_upload('document_one')) {
                $uploadData = $this->upload->data();
                $document_one = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Document 1 upload error: ' . $this->upload->display_errors('', ''));
                redirect('create-cause/' . $token);
                return;
            }
        }

        if (!empty($_FILES['document_two']['name'])) {
            if ($this->upload->do_upload('document_two')) {
                $uploadData = $this->upload->data();
                $document_two = $uploadData['file_name'];
            }
        }

        if (!empty($_FILES['document_three']['name'])) {
            if ($this->upload->do_upload('document_three')) {
                $uploadData = $this->upload->data();
                $document_three = $uploadData['file_name'];
            }
        }

        // Extract input fields
        $requester_name = trim($this->input->post('requester_name', true)) ?: $enquiry->fullname;
        $requester_phone = trim($this->input->post('requester_phone', true)) ?: $enquiry->phone;
        $requester_email = trim($this->input->post('requester_email', true)) ?: $enquiry->email;
        $requester_location = trim($this->input->post('requester_location', true)) ?: $enquiry->location;
        $beneficiary_relation = trim($this->input->post('beneficiary_relation', true)) ?: ($enquiry->beneficiary_relation ?? 'Self');
        $beneficiary_name = trim($this->input->post('beneficiary_name', true)) ?: ($enquiry->beneficiary_name ?? $requester_name);
        $beneficiary_age = (int) $this->input->post('beneficiary_age', true) ?: (int) ($enquiry->beneficiary_age ?? 0);
        $beneficiary_occupation = trim($this->input->post('beneficiary_occupation', true));
        $family_members_count = (int) $this->input->post('family_members_count', true);
        $earning_members_count = (int) $this->input->post('earning_members_count', true);
        $monthly_family_income = (float) $this->input->post('monthly_family_income', true);
        $income_source = trim($this->input->post('income_source', true));
        $financial_commitments = trim($this->input->post('financial_commitments', true));
        $cause_category = trim($this->input->post('cause_category', true)) ?: $enquiry->cause_category;
        $cause_heading = trim($this->input->post('cause_heading', true)) ?: ($enquiry->cause_title ?? 'Fundraiser Campaign');
        $cause_description = trim($this->input->post('cause_description', true)) ?: $enquiry->cause_description;
        $support_required = trim($this->input->post('support_required', true));
        $amount = (float) $this->input->post('amount', true) ?: (float) ($enquiry->target_amount ?? 0);
        if ($amount < 1000 || $amount > 1000000) {
            $this->session->set_flashdata('error', 'Total amount required must be between ₹1,000 and ₹10,00,000 (10 Lakhs).');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }
        $amount_already_received = (float) $this->input->post('amount_already_received', true);
        $amount_still_required = max(0, $amount - $amount_already_received);
        $end_date = trim($this->input->post('end_date', true)) ?: date('Y-m-d', strtotime('+30 days'));
        $cause_video_link = trim($this->input->post('cause_video_link', true));
        $verifier_name = trim($this->input->post('verifier_name', true));
        $verifier_relation = trim($this->input->post('verifier_relation', true));
        $verifier_phone = trim($this->input->post('verifier_phone', true));
        $verifier_organization = trim($this->input->post('verifier_organization', true));
        $source_of_cause = trim($this->input->post('source_of_cause', true));
        $declaration_confirmed = ($this->input->post('declaration_1') && $this->input->post('declaration_2') && $this->input->post('declaration_3') && $this->input->post('declaration_4')) ? 1 : 0;
        $applicant_name = trim($this->input->post('applicant_name', true)) ?: $requester_name;
        $declaration_date = trim($this->input->post('declaration_date', true)) ?: date('Y-m-d');
        $applicant_signature = trim($this->input->post('applicant_signature', true)) ?: $applicant_name;

        // Form Validations (English & Tamil text allowed for names, email format, 10-digit phone)
        if (preg_match('/^\d+$/', $requester_name) || !preg_match('/^[a-zA-Z\x{0B80}-\x{0BFF}\s.\'-]{2,150}$/u', $requester_name) || preg_match_all('/[a-zA-Z\x{0B80}-\x{0BFF}]/u', $requester_name) < 2) {
            $this->session->set_flashdata('error', 'Please enter a valid Full Name (letters only, no pure numbers or special characters).');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }

        if (preg_match('/^\d+$/', $beneficiary_name) || !preg_match('/^[a-zA-Z\x{0B80}-\x{0BFF}\s.\'-]{2,150}$/u', $beneficiary_name) || preg_match_all('/[a-zA-Z\x{0B80}-\x{0BFF}]/u', $beneficiary_name) < 2) {
            $this->session->set_flashdata('error', 'Please enter a valid Beneficiary Name (letters only).');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }

        if (preg_match('/^\d+$/', $applicant_signature) || !preg_match('/^[a-zA-Z\x{0B80}-\x{0BFF}\s.\'-]{2,150}$/u', $applicant_signature) || preg_match_all('/[a-zA-Z\x{0B80}-\x{0BFF}]/u', $applicant_signature) < 2) {
            $this->session->set_flashdata('error', 'Please enter a valid Digital Signature (letters only).');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }

        if (!empty($requester_location) && (preg_match('/^\d+$/', $requester_location) || !preg_match('/^[a-zA-Z0-9\x{0B80}-\x{0BFF}\s,.\'-]{2,150}$/u', $requester_location) || preg_match_all('/[a-zA-Z\x{0B80}-\x{0BFF}]/u', $requester_location) < 2)) {
            $this->session->set_flashdata('error', 'Please enter a valid Location (letters required, cannot be pure numbers or special characters).');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }

        if (!filter_var($requester_email, FILTER_VALIDATE_EMAIL)) {
            $this->session->set_flashdata('error', 'Please enter a valid Email Address.');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }

        $cleanPhone = preg_replace('/[^\d]/', '', $requester_phone);
        if (!preg_match('/^[6-9]\d{9}$/', $cleanPhone) || preg_match('/^(\d)\1{9}$/', $cleanPhone)) {
            $this->session->set_flashdata('error', 'Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }

        // Validate YouTube Video Link (Must be a valid YouTube URL)
        if (empty($cause_video_link) || !preg_match('/^(https?:\/\/)?((www|m)\.)?(youtube\.com\/(watch\?.*v=|shorts\/|embed\/)|youtu\.be\/)[a-zA-Z0-9_-]{11}/i', $cause_video_link)) {
            $this->session->set_flashdata('error', 'Please enter a valid YouTube video link (e.g. https://www.youtube.com/watch?v=... or https://youtu.be/...).');
            redirect('fundraiser_approve_token/' . $token);
            return;
        }

        // Check if user already exists or create new user
        $checkUser = $this->UserModel->checkUserexist($requester_email);
        if ($checkUser && $checkUser->num_rows() > 0) {
            $existingUser = $checkUser->row();
            $userId = $existingUser->id;
        } else {
            $newUserData = [
                'name' => $requester_name,
                'email' => $requester_email,
                'mobileNumber' => $requester_phone,
                'location' => $requester_location,
                'age' => $beneficiary_age,
                'category' => 'user'
            ];
            $this->db->insert('user', $newUserData);
            $userId = $this->db->insert_id();
        }

        // Prepare cause record
        $causeData = [
            'user_id' => $userId,
            'enquiry_id' => !empty($enquiry->id) ? $enquiry->id : null,
            'created_by' => $requester_name,
            'email' => $requester_email,
            'phone' => $requester_phone,
            'location' => $requester_location,
            'category' => $cause_category,
            'form_selected_text' => $cause_category,
            'name' => $beneficiary_name,
            'age' => $beneficiary_age,
            'beneficiary_relation' => $beneficiary_relation,
            'beneficiary_occupation' => $beneficiary_occupation,
            'family_members_count' => $family_members_count,
            'earning_members_count' => $earning_members_count,
            'monthly_family_income' => $monthly_family_income,
            'income_source' => $income_source,
            'financial_commitments' => $financial_commitments,
            'cause_heading' => $cause_heading,
            'cause_description' => $cause_description,
            'support_required' => $support_required,
            'amount' => $amount,
            'amount_already_received' => $amount_already_received,
            'amount_still_required' => $amount_still_required,
            'end_date' => $end_date,
            'Cause_video_link' => $cause_video_link,
            'Cause_video_link_eng' => $cause_video_link,
            'cover_image' => $cover_image,
            'cause_image1' => $document_one,
            'cause_image2' => $document_two,
            'cause_image3' => $document_three,
            'verifier_name' => $verifier_name,
            'verifier_relation' => $verifier_relation,
            'verifier_phone' => $verifier_phone,
            'verifier_organization' => $verifier_organization,
            'source_of_cause' => $source_of_cause,
            'declaration_confirmed' => $declaration_confirmed,
            'applicant_name' => $applicant_name,
            'declaration_date' => $declaration_date,
            'applicant_signature' => $applicant_signature,
            'approval_token' => $token,
            'is_runforcause' => 'no',
            'verified' => 0, // Pending admin verification
            'created_at' => (new DateTime('now', new DateTimeZone('Asia/Kolkata')))->format('Y-m-d H:i:s')
        ];

        $this->db->insert('individualform', $causeData);
        $causeId = $this->db->insert_id();

        // Link cause to enquiry
        $this->UserModel->link_enquiry_to_cause($enquiry->id, $causeId);

        // Send Notification Email to Admin about new Cause Creation
        $adminEmails = $this->UserModel->get_admin_emails();
        $enquiryRefText = !empty($enquiry->id) ? "from Enquiry #FE-{$enquiry->id}" : "(Direct Submission)";
        $enquiryHeaderRef = !empty($enquiry->id) ? "Enquiry Ref: #FE-{$enquiry->id}" : "Direct Submission";
        $adminSubject = "New Cause Created #CI-{$causeId} {$enquiryRefText}: {$cause_heading}";
        $adminMessage = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                <div style='max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;'>
                    <div style='background-color: #ed3136; color: #ffffff; padding: 18px; text-align: center;'>
                        <h2 style='margin:0;'>New Cause Creation Submitted</h2>
                        <p style='margin: 4px 0 0 0;'>Cause ID: #CI-{$causeId} | {$enquiryHeaderRef}</p>
                    </div>
                    <div style='padding: 20px;'>
                        <p>A new cause campaign has been created via the approved cause creation form and is waiting for verification.</p>
                        <table cellpadding='8' style='border-collapse: collapse; width: 100%; border: 1px solid #eee; font-size: 14px;'>
                            <tr><td style='background:#f9f9f9; width: 35%;'><strong>Cause Title:</strong></td><td>{$cause_heading}</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>Category:</strong></td><td>{$cause_category}</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>Target Goal:</strong></td><td>&#8377;" . number_format((float) $amount, 2) . "</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>Requester:</strong></td><td>{$requester_name} ({$requester_phone})</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>Email:</strong></td><td>{$requester_email}</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>Beneficiary:</strong></td><td>{$beneficiary_name} (Relation: {$beneficiary_relation})</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>Location:</strong></td><td>{$requester_location}</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>Verifier:</strong></td><td>{$verifier_name} ({$verifier_phone})</td></tr>
                            <tr><td style='background:#f9f9f9;'><strong>End Date:</strong></td><td>{$end_date}</td></tr>
                        </table>
                        <p style='margin-top:20px;'>Please log into the Admin Dashboard under <strong>Causes Verification</strong> to review the submitted documents and approve the cause live.</p>
                    </div>
                </div>
            </body>
            </html>
        ";

        if (!empty($adminEmails)) {
            foreach ($adminEmails as $toAdmin) {
                $this->email->clear();
                $this->email->from($this->config->item('from_email') ?: 'support@help.kanavu.org', 'Kanavu Help System');
                $this->email->to($toAdmin);
                $this->email->subject($adminSubject);
                $this->email->message($adminMessage);
                $this->email->set_mailtype('html');
                @$this->email->send();
            }
        }

        // Clear token session
        $this->session->unset_userdata('approved_enquiry_token');
        $this->session->unset_userdata('approved_enquiry_id');

        $data['cause'] = (object) $causeData;
        $data['cause']->id = $causeId;
        $this->load->view('cause_submission_success', $data);
    }

    public function submit_fundraiser_enquiry()
    {
        $this->load->database();
        $this->load->library('email');
        $this->load->model('UserModel');

        // Inputs: Name (Created by) and Phone number are mandatory; other fields are optional
        $fullname = trim($this->input->post('fullname', true) ?: $this->input->post('name', true) ?: $this->input->post('created_by', true));
        $phone = trim($this->input->post('Phonenumber', true) ?: $this->input->post('phone', true));
        $beneficiary_name = trim($this->input->post('beneficiary_name', true));
        $cause_category = trim($this->input->post('cause_category', true) ?: $this->input->post('category', true));
        $email = trim($this->input->post('emailId', true) ?: $this->input->post('email', true));
        $location = trim($this->input->post('location', true));

        // Validation: Name (Mandatory, English & Tamil letters allowed)
        if (empty($fullname) || preg_match('/^\d+$/', $fullname) || !preg_match('/^[a-zA-Z\x{0B80}-\x{0BFF}\s.\'-]{2,150}$/u', $fullname) || preg_match_all('/[a-zA-Z\x{0B80}-\x{0BFF}]/u', $fullname) < 2) {
            $this->session->set_flashdata('enquiry_error', 'Please enter a valid Name (letters only, cannot be pure numbers or special characters).');
            redirect(base_url('/fundraiser-enquiry'));
            return;
        }

        // Phone Number (Mandatory: 10 digits starting with 6, 7, 8, or 9)
        $cleanPhone = preg_replace('/[^\d]/', '', $phone);
        if (!preg_match('/^[6-9]\d{9}$/', $cleanPhone) || preg_match('/^(\d)\1{9}$/', $cleanPhone)) {
            $this->session->set_flashdata('enquiry_error', 'Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.');
            redirect(base_url('/fundraiser-enquiry'));
            return;
        }

        // Beneficiary Name (Optional: English & Tamil letters allowed)
        if (!empty($beneficiary_name) && (preg_match('/^\d+$/', $beneficiary_name) || !preg_match('/^[a-zA-Z\x{0B80}-\x{0BFF}\s.\'-]{2,150}$/u', $beneficiary_name) || preg_match_all('/[a-zA-Z\x{0B80}-\x{0BFF}]/u', $beneficiary_name) < 2)) {
            $this->session->set_flashdata('enquiry_error', 'Please enter a valid Beneficiary Name (letters only).');
            redirect(base_url('/fundraiser-enquiry'));
            return;
        }

        // Email ID (Optional: valid format if provided)
        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->session->set_flashdata('enquiry_error', 'Please enter a valid Email address.');
            redirect(base_url('/fundraiser-enquiry'));
            return;
        }

        // Location (Optional: English & Tamil letters allowed)
        if (!empty($location) && (preg_match('/^\d+$/', $location) || !preg_match('/^[a-zA-Z0-9\x{0B80}-\x{0BFF}\s,.\'-]{2,150}$/u', $location) || preg_match_all('/[a-zA-Z\x{0B80}-\x{0BFF}]/u', $location) < 2)) {
            $this->session->set_flashdata('enquiry_error', 'Please enter a valid Location (letters required, cannot be pure numbers or special characters).');
            redirect(base_url('/fundraiser-enquiry'));
            return;
        }

        $cause_title = !empty($beneficiary_name) ? "Fundraiser for {$beneficiary_name}" : "Fundraiser Enquiry by {$fullname}";
        $cause_description = "Fundraiser enquiry submitted via website.";

        $enquiry_data = [
            'fullname' => $fullname,
            'email' => !empty($email) ? $email : null,
            'phone' => $phone,
            'cause_category' => !empty($cause_category) ? $cause_category : 'General',
            'beneficiary_relation' => null,
            'beneficiary_name' => !empty($beneficiary_name) ? $beneficiary_name : null,
            'beneficiary_age' => null,
            'location' => !empty($location) ? $location : null,
            'target_amount' => null,
            'urgency_level' => null,
            'cause_title' => $cause_title,
            'cause_description' => $cause_description,
            'status' => 'pending',
            'created_at' => date('Y-m-d H:i:s')
        ];

        $inserted = $this->UserModel->insert_fundraiser_enquiry($enquiry_data);
        $insert_id = $this->db->insert_id();

        if ($inserted) {
            // Send Notification Email to Admin about new Fundraiser Enquiry
            $adminEmails = $this->UserModel->get_admin_emails();
            $catLabel = !empty($cause_category) ? $cause_category : 'General';
            $adminSubject = "New Fundraiser Enquiry #FE-{$insert_id}: {$fullname} ({$catLabel})";
            $adminMessage = "
                <html>
                <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                    <div style='max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;'>
                        <div style='background-color: #ed3136; color: #ffffff; padding: 18px; text-align: center;'>
                            <h2 style='margin:0;'>New Fundraiser Enquiry Received</h2>
                            <p style='margin: 4px 0 0 0;'>Ref ID: #FE-{$insert_id}</p>
                        </div>
                        <div style='padding: 20px;'>
                            <p>A new fundraiser enquiry has been entered on Kanavu Help:</p>
                            <table cellpadding='8' style='border-collapse: collapse; width: 100%; border: 1px solid #eee; font-size: 14px;'>
                                <tr><td style='background:#f9f9f9; width: 35%;'><strong>Enquiry ID:</strong></td><td>#FE-{$insert_id}</td></tr>
                                <tr><td style='background:#f9f9f9;'><strong>Applicant / Created by:</strong></td><td>{$fullname}</td></tr>
                                <tr><td style='background:#f9f9f9;'><strong>Mobile Number:</strong></td><td>{$phone}</td></tr>
                                <tr><td style='background:#f9f9f9;'><strong>Beneficiary Name:</strong></td><td>" . (!empty($beneficiary_name) ? htmlspecialchars($beneficiary_name) : 'Not specified') . "</td></tr>
                                <tr><td style='background:#f9f9f9;'><strong>Category:</strong></td><td>{$catLabel}</td></tr>
                                <tr><td style='background:#f9f9f9;'><strong>Email ID:</strong></td><td>" . (!empty($email) ? htmlspecialchars($email) : 'Not provided') . "</td></tr>
                                <tr><td style='background:#f9f9f9;'><strong>Location:</strong></td><td>" . (!empty($location) ? htmlspecialchars($location) : 'Not specified') . "</td></tr>
                            </table>
                            <p style='margin-top:20px;'>Please log into the Admin Dashboard under <strong>Fundraiser Enquiries</strong> to review and approve this enquiry, then share the cause creation link with the applicant.</p>
                        </div>
                    </div>
                </body>
                </html>
            ";

            if (!empty($adminEmails)) {
                foreach ($adminEmails as $toAdmin) {
                    $this->email->clear();
                    $this->email->from($this->config->item('from_email') ?: 'support@help.kanavu.org', 'Kanavu Help System');
                    $this->email->to($toAdmin);
                    $this->email->subject($adminSubject);
                    $this->email->message($adminMessage);
                    $this->email->set_mailtype('html');
                    @$this->email->send();
                }
            }

// Only admin receives email notification; user email skipped as per workflow

            $this->session->set_flashdata('enquiry_success', 'Thank you! Your Fundraiser Enquiry has been submitted successfully. Our team will review your details and contact you shortly.');
        } else {
            $this->session->set_flashdata('enquiry_error', 'There was an issue submitting your enquiry. Please try again.');
        }

        redirect(base_url('/fundraiser-enquiry'));
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
        $userEmail = $this->session->userdata('userEmail');
        $to = $userEmail;
        $otp = rand(1000, 9999);
        $this->session->set_userdata('generated_otp', $otp);
        $path = $this->session->userdata("path") ?? "individual";

        $message = "Your OTP is $otp to change the new password for your The Kanavu Trust account.";

        $this->load->library('resend');
        $response = $this->resend->send($to, 'The Kanavu Trust - OTP Verification', $message);

        if ($response['status']) {
            // Set a session variable to indicate OTP was sent
            $this->session->set_flashdata('otp_sent', true);
            if ($path == "login") {
                $this->session->set_userdata("loginemail", $userEmail);
                $this->session->unset_userdata("path");
                $this->session->unset_userdata("entry");
                redirect("/login");
            } else {
                $this->session->set_userdata("entry", 0);
                redirect('/individual'); // Redirect back to the same page
            }
        } else {
            $error_msg = isset($response['response']['message']) ? $response['response']['message'] : (isset($response['message']) ? $response['message'] : 'Unknown Error');
            $this->session->set_userdata("mailstatus", "failed");
            echo "<script>alert('Failed to send OTP to $to. Reason: " . addslashes($error_msg) . "');</script>";

            if ($path == "login") {
                echo "<script>window.location.href = '/login';</script>";
            } else {
                echo "<script>window.location.href = '/individual';</script>";
            }
            return;
        }
    }
    public function verifyOtp()
    {
        $otp = $this->input->post("otp");
        if ($otp == $this->session->userdata('generated_otp')) {
            echo "true";
        } else {
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

        $this->db->insert('individualform', $data);
        redirect('/donate');

    }


    // public function insertUser()
    // {
    //     $causeData = ""; 
    //     $step = $this->input->post("step");

    //     $causeData = [
    //         'category' => $this->input->post('category'),
    //         'created_by' => $this->input->post('created_by'),
    //         'name' => $this->input->post('name'),
    //         'email' => $this->input->post('email'),
    //         'phone' => $this->input->post('phone'),
    //         'age' => $this->input->post('age'),
    //         'location' => $this->input->post('location'),
    //         'form_selected_text' => $this->input->post('category'),
    //     ];

    //     $userData = [
    //         'name' => $this->input->post('created_by'),
    //         'email' => $this->input->post('email'),
    //         'mobileNumber' => $this->input->post('phone'),
    //         'age' => $this->input->post('age'),
    //         'location' => $this->input->post('location'),
    //         'category' => 'user',
    //     ];

    //     $email = $this->input->post('email');
    //     $checkregister = $this->UserModel->checkUserexist($email);

    //     if($checkregister->num_rows() > 0){
    //         $userdata = $checkregister->row();
    //         $user_id = $userdata->id;
    //         $user_name = $userdata->name;
    //         $fundraiser = $this->UserModel->get_user_causes_row($user_id);
    //         $end_date = $fundraiser->end_date;
    //         $day_diff = 0;
    //       /*if(empty($end_date)){
    //             $day_diff = 0;  
    //         }
    //         else{
    //             $end_date = new DateTime($fundraiser->end_date);
    //             $current_date = new DateTime();
    //             $day_diff = $end_date->diff($current_date);
    //         } 

    //         if($day_diff > 0){
    //             $this->session->set_flashdata("fundraisinglive",true);
    //             redirect("individual");
    //         }*/

    //             $userLoggedIn = array(
    //                 'Kanavu_userId' => $user_id,
    //                 'Kanavu_userName' => $user_name,
    //             );
    //             $this->session->set_userdata("userEmail",$email);
    //             $this->session->set_userdata('currentUserId', $user_id);
    //             $this->session->set_userdata('form_selected_text',$this->input->post('category'));
    //             $this->session->set_userdata($userLoggedIn);  
    //             $this->db->insert('individualform', $causeData);
    //             $causeId = $this->db->insert_id();
    //             $causeData['cause_id'] = $causeId;
    //             // $this->DonorprofileModel->registerAsdonor($causeData);
    //             $this->session->set_userdata('currentCauseId', $causeId);
    //             $this->session->set_userdata($userLoggedIn);      
    //             redirect("/send"); 
    //         }
    //     else{
    //         $this->db->insert('user', $userData);
    //         $userId = $this->db->insert_id();
    //         $userLoggedIn = array(
    //             'Kanavu_userId' => $userId,
    //             'Kanavu_userName' => $userData["name"],
    //         );
    //         $this->session->set_userdata('currentUserId', $userId);
    //         $causeData["user_id"] = $userId;
    //         $this->session->set_userdata('form_selected_text', $this->input->post('category'));
    //         $this->session->set_userdata('userEmail', $email);
    //         $this->db->insert('individualform', $causeData);
    //         $causeId = $this->db->insert_id();
    //         $causeData['cause_id'] = $causeId;
    //         // $this->DonorprofileModel->registerAsdonor($causeData);
    //         $this->session->set_userdata('currentCauseId', $userId);
    //         $this->session->set_userdata($userLoggedIn);     
    //         redirect("/send"); 
    //     }
    // }

    public function insertUser()
    {
        $createdBy = trim($this->input->post('created_by'));

        // SAFETY: prevent null / undefined
        if (empty($createdBy) || strtolower($createdBy) === 'undefined') {
            $createdBy = 'Anonymous';
        }

        $causeData = [
            'category' => $this->input->post('category'),
            'created_by' => $createdBy,
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'age' => $this->input->post('age'),
            'location' => $this->input->post('location'),
            'is_runforcause' => $this->input->post('runforcause'),
            'form_selected_text' => $this->input->post('category'),
            'created_at' => (new DateTime('now', new DateTimeZone('Asia/Kolkata')))->format('Y-m-d H:i:s'),
        ];

        $email = $this->input->post('email');
        $checkregister = $this->UserModel->checkUserexist($email);

        if ($checkregister->num_rows() > 0) {

            $userdata = $checkregister->row();
            $user_id = $userdata->id;

            $this->session->set_userdata([
                'Kanavu_userId' => $user_id,
                'Kanavu_userName' => $userdata->name,
                'currentUserId' => $user_id,
                'userEmail' => $email,
                'form_selected_text' => $this->input->post('category')
            ]);

            $causeData['user_id'] = $user_id;

            $this->db->insert('individualform', $causeData);
            $causeId = $this->db->insert_id();
            $this->session->set_userdata('currentCauseId', $causeId);

        } else {

            $userData = [
                'name' => $createdBy,
                'email' => $email,
                'mobileNumber' => $this->input->post('phone'),
                'age' => $this->input->post('age'),
                'location' => $this->input->post('location'),
                'category' => 'user',
            ];

            $this->db->insert('user', $userData);
            $userId = $this->db->insert_id();

            $causeData['user_id'] = $userId;

            $this->db->insert('individualform', $causeData);
            $causeId = $this->db->insert_id();
            $this->session->set_userdata('currentCauseId', $causeId);
        }

        redirect('/send');
    }

    public function updateCauseStep2()
    {
        $data = [
            'amount' => $this->input->post('amount'),
            'end_date' => $this->input->post('end_date'),
        ];

        $id = $this->session->userdata('currentCauseId');
        $this->db->where('id', $id); // Specify the condition
        $success = $this->db->update('individualform', $data);
        redirect('/donate');
    }

    public function fundraiserProfile()
    {
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
        $this->load->view('fundraiserprofile', array("fundraisers" => $fundraisers));
    }

    // Method to handle the delete request
    public function deleteCause()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post("id");
            // Call the model method to delete the cause by user_id
            $result = $this->UserModel->deleteCause($id); // Ensure the method matches the model function
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