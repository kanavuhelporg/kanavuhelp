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
