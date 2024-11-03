<?php
class DonateModel extends CI_Model {
    public function getAllDonations() {
        return $this->db->get('donation_for_cause')->result(); // Replace 'donations' with your table name
    }

    public function getDonationsByCategory($category) {
        return $this->db->get_where('donation_for_cause', ['category' => $category])->result(); // Replace 'category' with the actual column name
    }
}

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
	public function store1($data)
	{
		$this->db->insert('user', $data);
		return true;
	}
	public function store($data)
	{
		$this->db->insert('contact_us',$data);
		return true;
	}
	public function store2($data)
	{
		$this->db->insert('charity',$data);
		return true;
	}
	
	public function store3($data)
	{
		$this->db->insert('individualform',$data);
		return true;
	}
	public function saveDonation($data) {
        return $this->db->insert('donation_for_cause', $data);
    }
	public function getCausesDonationByUserId($user_id) {
		$this->db->select('f.*, d.amount as donated_amount');
		$this->db->from('donation_for_cause d');
		$this->db->join('individualform f', 'd.cause_id = f.id'); // Assuming 'id' is the primary key in the fundraisers table
		$this->db->where('d.user_id', $user_id); // Match the logged-in user's donations
		$this->db->order_by('d.created_at', 'DESC'); // Optionally order by the donation date
		
		// Fetch the results
		$result = $this->db->get()->result();
		
		// Debugging: Print the result to check if data is returned
		
		
		return $result;
	}
	// UserModel.php
public function get_user_causes($user_id)
{
    $this->db->where('user_id', $user_id);  // Adjust 'user_id' to match your database field name
    $query = $this->db->get('individualform'); // Replace with your table name
    return $query->result();
}

public function is_transaction_id_exists($transaction_id) {
    $this->db->where('transactionid', $transaction_id);
    $query = $this->db->get('donation_for_cause'); // Replace 'donations' with your actual table name for transactions

    return $query->num_rows() > 0;
}

	// UserModel.php
public function update_raised_amount($fundraiser_id, $raised_amount) {
    $this->db->set('raised_amount', 'raised_amount + ' . (float)$raised_amount, FALSE);
    $this->db->where('id', $fundraiser_id);
    return $this->db->update('individualform');  // Adjust table name if needed
}

	public function getCausesByUserId($user_id) {
		$this->db->select('f.*');
		$this->db->from('individualform f');
		$this->db->where('f.user_id', $user_id); // Match the logged-in user's donations
		//$this->db->order_by('d.created_at', 'DESC'); // Optionally order by the donation date
		
		// Fetch the results
		$result = $this->db->get()->result();
		
		// Debugging: Print the result to check if data is returned
		
		
		return $result;
	}
	
	public function get_cause_details()
	{
		$query = $this->db->get('individualform');
		return $query->result();
	}
public function get_category()
{
	$query=$this->db->get('category');
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
public function count_supporters($fundraiser_id) {
    $this->db->select('user_id')
             ->from('donation_for_cause')
             ->where('cause_id', $fundraiser_id)
             ->group_by('user_id');
    return $this->db->count_all_results();
}

public function get_fundraiser_details($fundraiser_id) {
	// Query the database to get the fundraiser details by ID
	$this->db->where('id', $fundraiser_id);
	$query = $this->db->get('individualform');  // Assuming your table is named 'fundraisers'
	
	// Return the row containing the fundraiser details
	return $query->row();
}

public function loginUser()
    {
        $postData = $this->input->post(null, true);
        $Email = $postData['exampleInputEmail1'];
        $Password = $postData['exampleInputpassword1'];
        $query = "SELECT * FROM user WHERE email = '$Email' AND password = '$Password'";
        $count = $this->db->query($query);
        return $count->result_array();
    }
}
?>
