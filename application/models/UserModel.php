<?php

class UserModel extends CI_Model
{
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

	public function causeDetailsforupdate($cause_id){
        $query = $this->db->query("SELECT * FROM individualform WHERE id = $cause_id");
		return $query->row();
	}

	public function causeDetailsforprogress($cause_id){
		$query = $this->db->query("SELECT * FROM cause_status_data WHERE cause_id = $cause_id");
		return $query->row();
	}

	public function store3($data,$id)
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

	public function store4($data,$id)
	{   
		$success = "";
		$checkprogress = $this->db->query("SELECT * FROM cause_status_data WHERE cause_id = $id");
		if($checkprogress->num_rows() > 0){
		$this->db->where('cause_id', $id); // Specify the condition
		$success = $this->db->update('cause_status_data', $data); // Update the table with data
		}
		else{
        $success = $this->db->insert("cause_status_data",$data); 
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

	public function store5($data,$id)
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

	public function get_cause_data($cause_id){
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
		// $this->db->where('user_id', $user_id);
		// $this->db->order_by('created_at', 'DESC'); // Adjust 'user_id' to match your database field name
		// $query = $this->db->get('individualform'); // Replace with your table name
		$query = $this->db->query("SELECT * FROM individualform WHERE user_id = $user_id");
		return $query->result();
	}

	public function get_user_progress($cause_id){
		$query = $this->db->query("SELECT * FROM cause_status_data WHERE cause_id = $cause_id");
		return $query->row();
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
		$this->db->set('raised_amount', 'raised_amount + ' . (float)$raised_amount, FALSE);
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
public function get_cause_details() {
	$this->db->select('*');
	$this->db->from('individualform');
	return $this->db->get()->result();
}

public function update_priority($id, $priority) {
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
public function get_used_priorities() {
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

	public function get_enquiries_list($counts){
		
	}

	public function loginUser($email)
	{
		$verifyemail = $this->db->query("SELECT * FROM user WHERE email = '$email'");
		return $verifyemail;
	}

	public function checkUserexist($email){
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

		$this->db->insert('user',$data);
		return $this->db->insert_id(); // Return the last inserted user ID
		
	}  





	// Method to get user data by ID
	public function getUserById($userId)
	{
		$this->db->where('id', $userId);
		$query = $this->db->get('user');
		return $query->row_array(); // Return the user data as an array
	}

	public function checkDonorexist($emailid) {
		$check = $this->db->query("SELECT * FROM donor_profiles WHERE Email_id = '$emailid'");
		return $check;
	}

	public function registerDonor($name,$phoneno,$city,$emailid) {
		$register = $this->db->query("INSERT INTO donor_profiles (Name,Phonenumber,Location,Email_id) VALUES('$name','$phoneno','$city','$emailid')");
	}

	/* filter by all causes */
	public function filterCauseswithcategory($category) {
		if($category == "All") {
		  $getcauses = $this->db->query("SELECT * FROM individualform WHERE verified = 1");
		}
		else{
		  $getcauses = $this->db->query("SELECT * FROM individualform WHERE category = '$category' AND verified = 1");
		}
		
		return $getcauses->result();
	}


	// Assuming your donations table is named 'individualform'  kani
    public function deleteCause($userId) {
        // Assuming your causes table is named 'individualform'
        $delete = $this->db->query("delete from individualform where id=$userId");
        return $delete;
        
    }
//kani
	  // Get total donors (count of donation_id from donation_for_cause)
    public function get_total_donors() {
        $query = $this->db->select('COUNT(donation_id) as total_donors')
                          ->from('donation_for_cause')
                          ->get();
        return $query->row()->total_donors;
    }

    // Get total events (count of id from individualform)
    public function get_total_events() {
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




}
?>