<?php

class UserModel extends CI_Model
{
    public function __construct() // Add this constructor
    {
        parent::__construct();
        $this->load->database();
    }
    // public function store($data)
    // {
    // 	$this->db->insert('logintable', $data);
    // 	return true;
    // }
    // 	public function login($data)
    // {
    //     $email = $data['email']; 
    //     $query = $this->db->get_where('register', array('email' => $email));
    //     $user = $query->row_array();

    //     // Check if user exists and password matches
    //     if (!empty($user) && password_verify($data['password'], $user['password'])) {
    //         return $user; // Return user data if email and password match
    //     } else {
    //         return false; // Return false if user does not exist or password doesn't match
    //     }
    // }

    //user name from userid in individudal form table
    public function get_user_name_by_cause_id($cause_id)
    {
        $this->db->select('user.name');
        $this->db->from('individualform');
        $this->db->join('user', 'individualform.user_id = user.id');
        $this->db->where('individualform.id', $cause_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->name;
        } else {
            return 'Guest'; // Default value if no user found for this cause
        }
    }

    //top donars
    public function get_top_donors_by_cause($cause_id)
    {
        $this->db->select('donation_for_cause.name, donation_for_cause.amount, donation_for_cause.donor_location');
        $this->db->from('donation_for_cause');

        $this->db->where('donation_for_cause.cause_id', $cause_id);
        $this->db->where('donation_for_cause.status', 1);
        $this->db->order_by('donation_for_cause.amount', 'DESC');
        //$this->db->limit($limit);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_top_fifteen_donors_by_cause($cause_id, $limit = 15, $offset = 3)
    {
        $this->db->select('user.name, donation_for_cause.amount');
        $this->db->from('donation_for_cause');
        $this->db->join('user', 'donation_for_cause.user_id = user.id');
        $this->db->where('donation_for_cause.cause_id', $cause_id);
        $this->db->where('donation_for_cause.status', 1);
        $this->db->order_by('donation_for_cause.amount', 'DESC');
        $this->db->limit($limit, $offset);

        $query = $this->db->get();
        return $query->result();
    }

    public function isEmailExists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user'); // assuming 'user' is your table name
        return $query->num_rows() > 0;
    }

    public function get_all_categories()
    {
        $query = $this->db->get('category'); // Replace 'category' with your actual table name
        return $query->result_array();
    }

    public function register($data)
    {
        $this->db->insert('user', $data);
        return true;
    }

    public function store($data)
    {
        $this->db->insert('contact_us', $data);
        return true;
    }

    public function store2($data)
    {
        $this->db->insert('charity', $data);
        return true;
    }

    public function causeDetailsforupdate($cause_id)
    {
        $query = $this->db->query("SELECT * FROM individualform WHERE id = $cause_id");
        return $query->row();
    }

    public function causeDetailsforprogress($cause_id)
    {
        $query = $this->db->query("SELECT * FROM cause_status_data WHERE cause_id = $cause_id");
        return $query->row();
    }

    public function store3($data, $id)
    {
        $this->db->where('id', $id); // Specify the condition
        $success = $this->db->update('individualform', $data); // Update the table with data

        // Debug: Log the query and errors
        if ($success) {
            return true;
        } else {
            echo $this->db->last_query(); // Print the query for debugging
            echo $this->db->error();      // Print any database errors
            return false;
        }
    }

    public function store4($data, $id)
    {
        $success = "";
        $checkprogress = $this->db->query("SELECT * FROM cause_status_data WHERE cause_id = $id");
        if ($checkprogress->num_rows() > 0) {
            $this->db->where('cause_id', $id); // Specify the condition
            $success = $this->db->update('cause_status_data', $data); // Update the table with data
        } else {
            $success = $this->db->insert("cause_status_data", $data);
        }
        // Debug: Log the query and errors
        if ($success) {
            return true;
        } else {
            echo $this->db->last_query(); // Print the query for debugging
            echo $this->db->error();      // Print any database errors
            return false;
        }
    }

    public function store5($data, $id)
    {
        $this->db->where('id', $id); // Specify the condition
        $success = $this->db->update('individualform', $data); // Update the table with data

        // Debug: Log the query and errors
        if ($success) {
            return true;
        } else {
            echo $this->db->last_query(); // Print the query for debugging
            echo $this->db->error();      // Print any database errors
            return false;
        }
    }

    public function get_cause_data($cause_id)
    {
        $query = $this->db->query("SELECT * FROM individualform WHERE id = $cause_id");
        return $query->row();
    }

    public function saveDonation($data)
    {
        return $this->db->insert('donation_for_cause', $data);
    }

    public function getCausesDonationByUserId($user_id)
    {
        $this->db->select('f.*, d.amount as donated_amount,d.status');
        $this->db->from('donation_for_cause d');
        $this->db->join('individualform f', 'd.cause_id = f.id'); // Assuming 'id' is the primary key in the fundraisers table
        $this->db->where('d.user_id', $user_id); // Match the logged-in user's donations
        $this->db->order_by('d.created_at', 'DESC'); // Optionally order by the donation date

        // Fetch the results
        $result = $this->db->get()->result();

        // Debugging: Print the result to check if data is returned


        return $result;
    }
    /* fetch mobil number based search 
    public function getUserByMobile($mobile)
    {
        $this->db->select('name, mobileNumber as phoneno, location as city');
        $this->db->where('mobileNumber', $mobile);
        $query = $this->db->get('user');
        return $query->row_array(); // Returns a single row as an associative array
    }
    */
    // UserModel.php
    public function get_user_causes($user_id)
    {
        return $this->db
            ->select("
            i.*,
            CASE 
                WHEN u.name IS NULL OR u.name = '' OR u.name = 'undefined'
                THEN 'Anonymous'
                ELSE u.name
            END AS created_by
        ")
            ->from('individualform i')
            ->join('user u', 'u.id = i.user_id', 'left')
            ->where('i.user_id', $user_id)
            ->order_by('i.created_at', 'DESC')
            ->get()
            ->result();
    }


    public function get_user_progress($cause_id)
    {
        $query = $this->db->query("SELECT * FROM cause_status_data WHERE cause_id = $cause_id");
        return $query->row();
    }

    public function deleteProgress($cause_id)
    {
        $this->db->where('cause_id', $cause_id);
        return $this->db->delete('cause_status_data');
    }


    public function get_user_causes_row($user_id)
    {
        // $this->db->where('user_id', $user_id);
        // $this->db->order_by('created_at', 'DESC'); // Adjust 'user_id' to match your database field name
        // $query = $this->db->get('individualform'); // Replace with your table name
        $query = $this->db->query("SELECT * FROM individualform WHERE user_id = $user_id");
        return $query->row();
    }

    public function is_transaction_id_exists($transaction_id)
    {
        $this->db->where('transactionid', $transaction_id);
        $query = $this->db->get('donation_for_cause'); // Replace 'donations' with your actual table name for transactions

        return $query->num_rows() > 0;
    }

    // UserModel.php
    public function update_raised_amount($fundraiser_id, $raised_amount)
    {
        $this->db->set('raised_amount', 'raised_amount + ' . (float) $raised_amount, FALSE);
        $this->db->where('id', $fundraiser_id);
        return $this->db->update('individualform');  // Adjust table name if needed
    }

    public function getCausesByUserId($user_id)
    {
        $this->db->select('f.*');
        $this->db->from('individualform f');
        $this->db->where('f.user_id', $user_id); // Match the logged-in user's donations
        $this->db->order_by('f.created_at', 'DESC'); // Optionally order by the donation date

        // Fetch the results
        $result = $this->db->get()->result();

        // Debugging: Print the result to check if data is returned


        return $result;
    }
    //update by periority
    public function get_cause_details()
    {
        $this->db->select('*');
        $this->db->from('individualform');
        $this->db->where('verified', '1');
        return $this->db->get()->result();
    }

    public function update_priority($id, $priority)
    {
        log_message('debug', 'Updating priority for ID: ' . $id . ' with value: ' . $priority);
        $data = array('priority' => $priority);
        $this->db->where('id', $id);
        $this->db->update('individualform', $data);
        $affected_rows = $this->db->affected_rows();
        log_message('debug', 'Affected rows: ' . $affected_rows);
        return $affected_rows;

        /* $this->db->where('id', $id);
        return $this->db->update('individualform', ['priority' => $priority]); */


    }
    public function get_used_priorities()
    {
        $this->db->select('priority');
        $this->db->from('individualform');
        $this->db->where('priority !=', 0); // Exclude 0
        $query = $this->db->get();
        $used_priorities = array_column($query->result_array(), 'priority');
        return $used_priorities;
    }


    public function get_category()
    {
        $query = $this->db->get('category');
        return $query->result();
    }
    // 	function get($data){
    // 	$result->$this->db->select('*')->where('email',$data['email'])->where('password',$data['password'])->get('register')->row();
    // 	if(!empty($result)){
    // 		return true;
    // 	}
    // 	else{
    // 		return false;
    // 	}
    // }
    //no of supporters
    public function count_supporters($fundraiser_id)
    {
        $this->db
            ->from('donation_for_cause')
            ->where('cause_id', $fundraiser_id)
            ->where('status', 1);

        return $this->db->count_all_results();
    }

    public function get_fundraiser_details($fundraiser_id)
    {
        // Query the database to get the fundraiser details by ID
        $this->db->where('id', $fundraiser_id);
        $query = $this->db->get('individualform');  // Assuming your table is named 'fundraisers'

        // Return the row containing the fundraiser details
        return $query->row();
    }

    public function get_enquiries_list($counts)
    {

    }

    public function loginUser($email)
    {
        $verifyemail = $this->db->query("SELECT * FROM user WHERE email = '$email'");
        return $verifyemail;
    }

    public function checkUserexist($email)
    {
        $verifyexist = $this->db->query("SELECT * FROM user WHERE email = '$email'");
        return $verifyexist;
    }



    // Method to register user
    public function registerUser($name, $email, $password)
    {
        // Insert user into the database and return the inserted data (e.g., userId)
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT) // Ensure the password is hashed
        ];

        $this->db->insert('user', $data);
        return $this->db->insert_id(); // Return the last inserted user ID
    }

    // Method to register user
//	public function registerUserCause($name, $email, $mobileNmuber)
    public function registerUserCause($name, $mobileNmuber)
    {
        // Insert user into the database and return the inserted data (e.g., userId)
        $data = [
            'name' => $name,
            //'email' => $email,
            'mobileNumber' => $mobileNmuber,
            'category' => 'user',
        ];

        $this->db->insert('user', $data);
        return $this->db->insert_id(); // Return the last inserted user ID

    }





    // Method to get user data by ID
    public function getUserById($userId)
    {
        $this->db->where('id', $userId);
        $query = $this->db->get('user');
        return $query->row_array(); // Return the user data as an array
    }

    public function checkDonorexist($emailid)
    {
        $check = $this->db->query("SELECT * FROM donor_profiles WHERE Email_id = '$emailid'");
        return $check;
    }

    public function registerDonor($name, $phoneno, $city, $emailid)
    {
        $register = $this->db->query("INSERT INTO donor_profiles (Name,Phonenumber,Location,Email_id) VALUES('$name','$phoneno','$city','$emailid')");
    }

    /* filter by all causes */
    // public function filterCauseswithcategory($category) {
    // 	if($category == "All") {
    // 	  $getcauses = $this->db->query("SELECT * FROM individualform WHERE verified = 1");
    // 	}
    // 	else{
    // 	  $getcauses = $this->db->query("SELECT * FROM individualform WHERE category = '$category' AND verified = 1");
    // 	}

    // 	return $getcauses->result();
    // }
    /* filter by all causes */
    public function filterCauseswithcategory($category)
    {
        // COMPLETED causes
        if ($category === "Completed") {
            $sql = "
            SELECT 
                i.*,
                CASE 
                    WHEN u.name IS NULL OR u.name = '' OR u.name = 'undefined'
                    THEN 'Anonymous'
                    ELSE u.name
                END AS created_by
            FROM individualform i
            LEFT JOIN user u ON u.id = i.user_id
            WHERE i.verified = 1
              AND (
                    (
                      SELECT COALESCE(SUM(d.amount),0)
                      FROM donation_for_cause d
                      WHERE d.cause_id = i.id AND d.status = 1
                    ) >= COALESCE(i.amount,0)
                    OR i.manually_completed = 1
                  )
        ";
            return $this->db->query($sql)->result();
        }

        // ALL causes
        if ($category === "All") {
            return $this->db
                ->select("
                i.*,
                CASE 
                    WHEN u.name IS NULL OR u.name = '' OR u.name = 'undefined'
                    THEN 'Anonymous'
                    ELSE u.name
                END AS created_by
            ")
                ->from('individualform i')
                ->join('user u', 'u.id = i.user_id', 'left')
                ->where('i.verified', 1)
                ->get()
                ->result();
        }

        // CATEGORY filter
        return $this->db
            ->select("
            i.*,
            CASE 
                WHEN u.name IS NULL OR u.name = '' OR u.name = 'undefined'
                THEN 'Anonymous'
                ELSE u.name
            END AS created_by
        ")
            ->from('individualform i')
            ->join('user u', 'u.id = i.user_id', 'left')
            ->where('i.category', $category)
            ->where('i.verified', 1)
            ->get()
            ->result();
    }




    // Assuming your donations table is named 'individualform'  kani
    public function deleteCause($userId)
    {
        // Assuming your causes table is named 'individualform'
        $delete = $this->db->query("delete from individualform where id=$userId");
        return $delete;

    }
    //kani
    // Get total donors (count of donation_id from donation_for_cause)
    public function get_total_donors()
    {
        $query = $this->db->select('COUNT(donation_id) as total_donors')
            ->from('donation_for_cause')
            ->get();
        return $query->row()->total_donors;
    }

    // Get total events (count of id from individualform)
    public function get_total_events()
    {
        $query = $this->db->select('COUNT(id) as total_events')
            ->from('individualform')
            ->get();
        return $query->row()->total_events;
    }

    // Get total fund raised (sum of amount from donation_for_cause)

    public function get_total_fund()
    {
        $this->db->select('SUM(amount) as total_fund');
        $this->db->from('donation_for_cause');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->total_fund;  // This will be DECIMAL value
        } else {
            return 0;  // If no rows, return 0
        }
    }


    public function get_current_raised_amount($fundraiser_id)
    {
        // Check if the cause is manually completed
        $this->db->select('manually_completed, amount');
        $this->db->where('id', $fundraiser_id);
        $cause = $this->db->get('individualform')->row();

        if ($cause && $cause->manually_completed == 1) {
            return (float) $cause->amount;
        }

        $this->db->select_sum('amount');
        $this->db->from('donation_for_cause');
        $this->db->where('cause_id', $fundraiser_id);
        $this->db->where('status', 1); // Only count verified/approved donations

        $query = $this->db->get();
        $result = $query->row();

        // Return the sum or 0 if no donations
        return $result->amount ? (float) $result->amount : 0;
    }

    public function mark_cause_completed($cause_id)
    {
        // Update all records for the cause as completed (or only specific logic)
        $this->db->set('cause_completed', 1);
        $this->db->where('cause_id', $cause_id);
        return $this->db->update('donation_for_cause');
    }

    public function ensure_fundraiser_enquiry_table()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `fundraiser_enquiry` (
      `id` INT AUTO_INCREMENT PRIMARY KEY,
      `fullname` VARCHAR(150) NOT NULL,
      `email` VARCHAR(150) DEFAULT NULL,
      `country_code` VARCHAR(10) DEFAULT '+91',
      `phone` VARCHAR(20) NOT NULL,
      `cause_category` VARCHAR(100) DEFAULT NULL,
      `beneficiary_relation` VARCHAR(50) DEFAULT NULL,
      `beneficiary_name` VARCHAR(150) DEFAULT NULL,
      `beneficiary_age` INT DEFAULT NULL,
      `location` VARCHAR(150) DEFAULT NULL,
      `target_amount` DECIMAL(12,2) DEFAULT NULL,
      `urgency_level` VARCHAR(50) DEFAULT NULL,
      `cause_title` VARCHAR(255) DEFAULT NULL,
      `cause_description` TEXT DEFAULT NULL,
      `status` ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
      `admin_remarks` TEXT DEFAULT NULL,
      `approved_at` DATETIME DEFAULT NULL,
      `approved_by` INT DEFAULT NULL,
      `approved_by_name` VARCHAR(150) DEFAULT NULL,
      `approval_token` VARCHAR(100) DEFAULT NULL,
      `token_used` TINYINT(1) DEFAULT 0,
      `is_hold` TINYINT(1) DEFAULT 0,
      `hold_by` INT DEFAULT NULL,
      `hold_by_name` VARCHAR(150) DEFAULT NULL,
      `hold_at` DATETIME DEFAULT NULL,
      `hold_remarks` TEXT DEFAULT NULL,
      `unhold_by` INT DEFAULT NULL,
      `unhold_by_name` VARCHAR(150) DEFAULT NULL,
      `unhold_at` DATETIME DEFAULT NULL,
      `unhold_remarks` TEXT DEFAULT NULL,
      `hold_history` TEXT DEFAULT NULL,
      `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
        $this->db->query($sql);

        // Make sure optional columns are nullable on existing tables
        @$this->db->query("ALTER TABLE `fundraiser_enquiry` MODIFY `email` VARCHAR(150) DEFAULT NULL");
        @$this->db->query("ALTER TABLE `fundraiser_enquiry` MODIFY `cause_category` VARCHAR(100) DEFAULT NULL");
        @$this->db->query("ALTER TABLE `fundraiser_enquiry` MODIFY `cause_description` TEXT DEFAULT NULL");

        // Add approval_token column if it doesn't exist (for existing tables)
        $check_token = $this->db->query("SHOW COLUMNS FROM `fundraiser_enquiry` LIKE 'approval_token'");
        if ($check_token->num_rows() === 0) {
            $this->db->query("ALTER TABLE `fundraiser_enquiry` ADD COLUMN `approval_token` VARCHAR(100) DEFAULT NULL");
        }
        // Add token_used column if it doesn't exist
        $check_used = $this->db->query("SHOW COLUMNS FROM `fundraiser_enquiry` LIKE 'token_used'");
        if ($check_used->num_rows() === 0) {
            $this->db->query("ALTER TABLE `fundraiser_enquiry` ADD COLUMN `token_used` TINYINT(1) DEFAULT 0");
        }
        // Add country_code column if it doesn't exist
        $check_cc = $this->db->query("SHOW COLUMNS FROM `fundraiser_enquiry` LIKE 'country_code'");
        if ($check_cc->num_rows() === 0) {
            $this->db->query("ALTER TABLE `fundraiser_enquiry` ADD COLUMN `country_code` VARCHAR(10) DEFAULT '+91' AFTER `email`");
        }

        // Add admin tracking & hold/unhold columns if they don't exist
        $extra_columns = [
            'approved_by_name' => "VARCHAR(150) DEFAULT NULL AFTER `approved_by`",
            'is_hold' => "TINYINT(1) DEFAULT 0 AFTER `token_used`",
            'hold_by' => "INT DEFAULT NULL AFTER `is_hold`",
            'hold_by_name' => "VARCHAR(150) DEFAULT NULL AFTER `hold_by`",
            'hold_at' => "DATETIME DEFAULT NULL AFTER `hold_by_name`",
            'hold_remarks' => "TEXT DEFAULT NULL AFTER `hold_at`",
            'unhold_by' => "INT DEFAULT NULL AFTER `hold_remarks`",
            'unhold_by_name' => "VARCHAR(150) DEFAULT NULL AFTER `unhold_by`",
            'unhold_at' => "DATETIME DEFAULT NULL AFTER `unhold_by_name`",
            'unhold_remarks' => "TEXT DEFAULT NULL AFTER `unhold_at`",
            'hold_history' => "TEXT DEFAULT NULL AFTER `unhold_remarks`"
        ];
        foreach ($extra_columns as $col => $def) {
            $check_col = $this->db->query("SHOW COLUMNS FROM `fundraiser_enquiry` LIKE '$col'");
            if ($check_col && $check_col->num_rows() === 0) {
                $this->db->query("ALTER TABLE `fundraiser_enquiry` ADD COLUMN `$col` $def");
            }
        }
    }

    public function insert_fundraiser_enquiry($data)
    {
        $this->ensure_fundraiser_enquiry_table();
        return $this->db->insert('fundraiser_enquiry', $data);
    }

    public function get_fundraiser_enquiries($status = null)
    {
        $this->ensure_fundraiser_enquiry_table();
        $this->db->select('fe.*, COALESCE(NULLIF(fe.approved_by_name, ""), u_app.name) AS approved_admin_name, COALESCE(NULLIF(fe.hold_by_name, ""), u_hold.name) AS hold_admin_name, COALESCE(NULLIF(fe.unhold_by_name, ""), u_unhold.name) AS unhold_admin_name');
        $this->db->from('fundraiser_enquiry fe');
        $this->db->join('user u_app', 'u_app.id = fe.approved_by', 'left');
        $this->db->join('user u_hold', 'u_hold.id = fe.hold_by', 'left');
        $this->db->join('user u_unhold', 'u_unhold.id = fe.unhold_by', 'left');
        if ($status === 'hold') {
            $this->db->where('fe.status', 'approved');
            $this->db->where('fe.is_hold', 1);
        } elseif (!empty($status) && $status !== 'all') {
            $this->db->where('fe.status', $status);
        }
        $this->db->order_by('fe.created_at', 'DESC');
        return $this->db->get()->result();
    }

    public function get_fundraiser_enquiry_by_id($id)
    {
        $this->ensure_fundraiser_enquiry_table();
        $this->db->select('fe.*, COALESCE(NULLIF(fe.approved_by_name, ""), u_app.name) AS approved_admin_name, COALESCE(NULLIF(fe.hold_by_name, ""), u_hold.name) AS hold_admin_name, COALESCE(NULLIF(fe.unhold_by_name, ""), u_unhold.name) AS unhold_admin_name');
        $this->db->from('fundraiser_enquiry fe');
        $this->db->join('user u_app', 'u_app.id = fe.approved_by', 'left');
        $this->db->join('user u_hold', 'u_hold.id = fe.hold_by', 'left');
        $this->db->join('user u_unhold', 'u_unhold.id = fe.unhold_by', 'left');
        $this->db->where('fe.id', $id);
        return $this->db->get()->row();
    }

    public function update_fundraiser_enquiry_status($id, $status, $admin_remarks = null, $admin_id = null, $admin_name = null)
    {
        $this->ensure_fundraiser_enquiry_table();
        $data = [
            'status' => $status,
            'admin_remarks' => $admin_remarks
        ];
        if ($status === 'approved') {
            $data['approved_at'] = date('Y-m-d H:i:s');
            $data['approved_by'] = $admin_id;
            if ($admin_name !== null) {
                $data['approved_by_name'] = $admin_name;
            }
        }
        $this->db->where('id', $id);
        return $this->db->update('fundraiser_enquiry', $data);
    }

    public function toggle_fundraiser_enquiry_hold($id, $is_hold, $admin_id, $admin_name, $remarks = null)
    {
        $this->ensure_fundraiser_enquiry_table();
        $enquiry = $this->get_fundraiser_enquiry_by_id($id);
        if (!$enquiry) {
            return false;
        }

        $history = [];
        if (!empty($enquiry->hold_history)) {
            $decoded = json_decode($enquiry->hold_history, true);
            if (is_array($decoded)) {
                $history = $decoded;
            }
        }

        $now = date('Y-m-d H:i:s');
        $history[] = [
            'action' => $is_hold ? 'hold' : 'unhold',
            'admin_id' => $admin_id,
            'admin_name' => $admin_name,
            'remarks' => $remarks,
            'at' => $now
        ];

        $data = [
            'is_hold' => $is_hold ? 1 : 0,
            'hold_history' => json_encode($history)
        ];

        if ($is_hold) {
            $data['hold_by'] = $admin_id;
            $data['hold_by_name'] = $admin_name;
            $data['hold_at'] = $now;
            $data['hold_remarks'] = $remarks;
        } else {
            $data['unhold_by'] = $admin_id;
            $data['unhold_by_name'] = $admin_name;
            $data['unhold_at'] = $now;
            $data['unhold_remarks'] = $remarks;
        }

        $this->db->where('id', $id);
        return $this->db->update('fundraiser_enquiry', $data);
    }

    public function count_fundraiser_enquiries($status = null)
    {
        $this->ensure_fundraiser_enquiry_table();
        if ($status === 'hold') {
            $this->db->where('status', 'approved');
            $this->db->where('is_hold', 1);
        } elseif (!empty($status) && $status !== 'all') {
            $this->db->where('status', $status);
        }
        return $this->db->count_all_results('fundraiser_enquiry');
    }

    public function save_approval_token($id, $token)
    {
        $this->db->where('id', $id);
        return $this->db->update('fundraiser_enquiry', [
            'approval_token' => $token,
            'token_used' => 0
        ]);
    }

    public function get_enquiry_by_token($token)
    {
        $this->ensure_fundraiser_enquiry_table();
        $this->db->where('approval_token', $token);
        $this->db->where('status', 'approved');
        return $this->db->get('fundraiser_enquiry')->row();
    }

    public function link_enquiry_to_cause($enquiry_id, $cause_id)
    {
        $this->ensure_fundraiser_enquiry_table();
        $this->db->where('id', $enquiry_id);
        return $this->db->update('fundraiser_enquiry', ['cause_id' => $cause_id]);
    }

    public function mark_token_used($id)
    {
        $this->ensure_fundraiser_enquiry_table();
        $this->db->where('id', $id);
        return $this->db->update('fundraiser_enquiry', ['token_used' => 1]);
    }

    public function get_latest_approved_enquiry_by_email($email)
    {
        $this->ensure_fundraiser_enquiry_table();
        $this->db->where('email', $email);
        $this->db->where('status', 'approved');
        $this->db->where('token_used', 0);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('fundraiser_enquiry')->row();
    }

    public function ensure_individualform_docx_columns()
    {
        // Ensure cause_id exists in fundraiser_enquiry
        $check_cause_id = $this->db->query("SHOW COLUMNS FROM `fundraiser_enquiry` LIKE 'cause_id'");
        if ($check_cause_id && $check_cause_id->num_rows() === 0) {
            $this->db->query("ALTER TABLE `fundraiser_enquiry` ADD COLUMN `cause_id` INT DEFAULT NULL");
        }

        $columns = [
            'enquiry_id' => "INT DEFAULT NULL",
            'beneficiary_relation' => "VARCHAR(100) DEFAULT NULL",
            'beneficiary_occupation' => "VARCHAR(150) DEFAULT NULL",
            'family_members_count' => "INT DEFAULT NULL",
            'earning_members_count' => "INT DEFAULT NULL",
            'monthly_family_income' => "DECIMAL(12,2) DEFAULT NULL",
            'income_source' => "VARCHAR(100) DEFAULT NULL",
            'financial_commitments' => "TEXT DEFAULT NULL",
            'support_required' => "TEXT DEFAULT NULL",
            'amount_already_received' => "DECIMAL(12,2) DEFAULT 0.00",
            'amount_still_required' => "DECIMAL(12,2) DEFAULT NULL",
            'verifier_name' => "VARCHAR(150) DEFAULT NULL",
            'verifier_relation' => "VARCHAR(100) DEFAULT NULL",
            'verifier_phone' => "VARCHAR(20) DEFAULT NULL",
            'verifier_organization' => "VARCHAR(200) DEFAULT NULL",
            'source_of_cause' => "VARCHAR(100) DEFAULT NULL",
            'declaration_confirmed' => "TINYINT(1) DEFAULT 0",
            'applicant_name' => "VARCHAR(150) DEFAULT NULL",
            'declaration_date' => "DATE DEFAULT NULL",
            'applicant_signature' => "VARCHAR(150) DEFAULT NULL",
            'approval_token' => "VARCHAR(100) DEFAULT NULL",
            'internal_verification_status' => "VARCHAR(50) DEFAULT 'Under Verification'",
            'internal_verification_by' => "VARCHAR(100) DEFAULT NULL",
            'internal_verification_date' => "DATETIME DEFAULT NULL",
            'internal_verification_notes' => "TEXT DEFAULT NULL",
            'internal_final_decision' => "VARCHAR(50) DEFAULT 'Pending'",
            'internal_approved_support' => "VARCHAR(255) DEFAULT NULL"
        ];

        foreach ($columns as $column => $definition) {
            $check = $this->db->query("SHOW COLUMNS FROM `individualform` LIKE '$column'");
            if ($check && $check->num_rows() === 0) {
                $this->db->query("ALTER TABLE `individualform` ADD COLUMN `$column` $definition");
            }
        }
    }


    public function get_admin_emails()
    {
        $admin_emails = [];
        $admins = $this->db->select('email')->from('user')->where('category', 'admin')->get()->result();
        if (!empty($admins)) {
            foreach ($admins as $a) {
                if (!empty($a->email) && filter_var($a->email, FILTER_VALIDATE_EMAIL)) {
                    $admin_emails[] = trim($a->email);
                }
            }
        }
        $admin_emails = array_unique($admin_emails);
        if (empty($admin_emails)) {
            $admin_emails = ['support@kanavu.help'];
        }
        return $admin_emails;
    }

}
?>