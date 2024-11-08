<?php

class adminpanel extends CI_Model
{

    public function adminlogin()
    {
        $postData = $this->input->post(null, true);
        $Email = $postData['exampleInputEmail1'];
        $Password = $postData['exampleInputpassword1'];
        $query = "SELECT * FROM user WHERE email = '$Email' AND password = '$Password' and category='admin'";
        $count = $this->db->query($query);
        return $count->result_array();
    }
    public function transactiondetails(){
        $this->db->select('donation_for_cause.*, user.name, user.email');  // Select columns from both tables
    $this->db->from('donation_for_cause');
    $this->db->join('user', 'user.id = donation_for_cause.user_id', 'left');  // Join user table on user_id
     // Order by created_at in descending order
    $query = $this->db->get();

    return $query->result(); 
    }
    public function getDonationById($id)
{
    $this->db->select('donation_for_cause.*, user.name, user.email');  // Select columns from both tables
    $this->db->from('donation_for_cause');
    $this->db->join('user', 'user.id = donation_for_cause.user_id', 'left');  // Join user table on user_id
   
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();  // Return single row as an object
}
public function updateDonationStatus($id, $status, $verifiedBy)
{
    
    $data = array(
        'status' => $status,
        'verified_by' => $verifiedBy,  // Update the 'verifiedby' field with the session name
    );

    $this->db->where('donation_id', $id);
    $result = $this->db->update('donation_for_cause', $data);
    return $result;  // TRUE on success, FALSE on failure
}
public function getDonationById1($id)
{
    $this->db->select('cause_id, amount');
    $this->db->from('donation_for_cause');
    $this->db->where('donation_id', $id);
    return $this->db->get()->row();
}
public function update_raised_amount($cause_id, $amount)
{
    $this->db->set('raised_amount', 'raised_amount + ' . (int) $amount, FALSE);
    $this->db->where('id', $cause_id);
    return $this->db->update('individualform');
}
}