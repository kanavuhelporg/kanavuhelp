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
		$this->db->insert('register', $data);
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

public function loginUser()
    {
        $postData = $this->input->post(null, true);
        $Email = $postData['exampleInputEmail1'];
        $Password = $postData['exampleInputpassword1'];
        $query = "SELECT * FROM register WHERE email = '$Email' AND password = '$Password'";
        $count = $this->db->query($query);
        return $count->result_array();
    }
}
?>
