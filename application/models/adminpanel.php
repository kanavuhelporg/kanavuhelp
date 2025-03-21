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
    public function transactiondetails()
    {
        $this->db->select('donation_for_cause.*');  // Select columns from both tables
        $this->db->from('donation_for_cause');
        $this->db->order_by('donation_for_cause.created_at', 'DESC');
        $this->db->limit(5);
         // Join user table on user_id
        // Order by created_at in descending order
        $query = $this->db->get();

        return $query->result();
    }

    public function get_total_transaction(){
        $query = $this->db->query("SELECT * FROM donation_for_cause");
        $donation = $query->result_array();
        return count($donation);
    }

    public function get_verification_list($counts){
        $this->db->select('donation_for_cause.*');
        $this->db->from('donation_for_cause');
        $this->db->order_by('donation_for_cause.created_at', 'DESC');
        $this->db->limit(5,$counts);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_cause_details()
    {
        // Include only rows where 'verified' is 1
        $this->db->select('individualform.*, user.name as username');
        $this->db->from('individualform');
        $this->db->join('user', 'user.id = individualform.user_id');
        $this->db->order_by('individualform.created_at', 'DESC');
        $this->db->limit(5); // Order by 'created_at' in descending order (newest first)
        $query = $this->db->get();
        return $query->result();
    }

    public function get_total_causes(){
        $query = $this->db->query("SELECT * FROM individualform");
        $causes = $query->result_array();
        return count($causes);
    }

    public function get_causes_list($counts){
        $this->db->select('individualform.*, user.name as username');
        $this->db->from('individualform');
        $this->db->join('user','user.id = individualform.user_id');
        $this->db->order_by('individualform.created_at', 'DESC');
        $this->db->limit(5,$counts); // Order by 'created_at' in descending order (newest first)
        $query = $this->db->get();
        return $query->result();
    }

    public function updatecauses($id, $updatedata)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('individualform', $updatedata);
        return $result;
    }

    public function contactdetails()
    {
        $this->db->select('contact_us.*, user.name, user.email');  // Select columns from both tables
        $this->db->from('contact_us');
        $this->db->join('user', 'user.id = contact_us.user_id', 'left');  // Join user table on user_id
        // Order by created_at in descending order
        $query = $this->db->get();

        return $query->result();
    }

    public function get_enquiries_list($counts){
        $query = $this->db->query("SELECT * FROM contact_us ORDER BY created_at DESC LIMIT 10 OFFSET $counts");
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
        $donationdata = $this->db->query("SELECT status FROM donation_for_cause WHERE donation_id = $id");
        $get_status = $donationdata->row();
        $current_status = $get_status->status;
        if($current_status == $status){
            return false;
        }    
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

    public function transactionemailStatus($status,$donationid,$donarname,$donaremail,$message,$adminName){
        date_default_timezone_set('Asia/Kolkata');
        $createdate = new DateTime(); 
        $datetime = $createdate->format('d-m-Y h:i:s A'); 
        $getemailcount = "";
        $newcount = "";
        if($status == "verified"){
            $getemailcount = $this->db->query("SELECT count(Emailcount) AS Emailcount FROM transactionemailstatus WHERE Donation_id = $donationid AND Status = 'verified'");
            $emailcount = $getemailcount->row();
            $count = $emailcount->Emailcount;
            $newcount = $count + 1;
            $updatequery = $this->db->query("UPDATE donation_for_cause SET Verifyemailcount = $newcount WHERE Donation_id = $donationid");
        }
        else{
            $getemailcount = $this->db->query("SELECT count(Emailcount) AS Emailcount FROM transactionemailstatus WHERE Donation_id = $donationid AND Status = 'unverified'");
            $emailcount = $getemailcount->row();
            $count = $emailcount->Emailcount;
            $newcount = $count + 1;
            $updatequery = $this->db->query("UPDATE donation_for_cause SET Rejectemailcount = $newcount WHERE Donation_id = $donationid");
        }
            $query = $this->db->query("INSERT INTO transactionemailstatus (Emailcount,Emailed_date,Who_send,Message, Donation_id,Donar_email ,Donar_name,status) VALUES($newcount,'$datetime','$adminName','$message',$donationid,'$donaremail','$donarname','$status')");
    }

    public function emailStatus($status,$userId,$userName,$userEmail,$message,$adminName){
        date_default_timezone_set('Asia/Kolkata');
        $createdate = new DateTime(); 
        $datetime = $createdate->format('d-m-Y h:i:s A'); 
        $getemailcount = "";
        $newcount = "";
        if($status == "verified"){
            $getemailcount = $this->db->query("SELECT count(Emailcount) AS Emailcount FROM emailstatus WHERE user_id = $userId AND Status = 'verified'");
            $emailcount = $getemailcount->row();
            $count = $emailcount->Emailcount;
            $newcount = $count + 1;
            $updatequery = $this->db->query("UPDATE individualform SET Verifyemailcount = $newcount WHERE user_id = $userId");
        }
        else{
            $getemailcount = $this->db->query("SELECT count(Emailcount) AS Emailcount FROM emailstatus WHERE user_id = $userId AND Status = 'unverified'");
            $emailcount = $getemailcount->row();
            $count = $emailcount->Emailcount;
            $newcount = $count + 1;
            $updatequery = $this->db->query("UPDATE individualform SET Rejectemailcount = $newcount WHERE user_id = $userId");
        }
            $query = $this->db->query("INSERT INTO emailstatus (Emailcount,Emailed_date,Who_send,Message, user_id ,user_name,status,Fundraiser_email) VALUES($newcount,'$datetime','$adminName','$message',$userId,'$userName','$status','$userEmail')");
    }

    public function gettransactionEmaildata($donationid,$status){
        if($status == "verified"){
            $query = $this->db->query("SELECT * FROM transactionemailstatus WHERE Donation_id = $donationid AND Status = '$status'");
            return $query->result_array();
        }
        else{
            $query = $this->db->query("SELECT * FROM transactionemailstatus WHERE Donation_id = $donationid AND Status = '$status'");
            return $query->result_array();
        }
    }

    public function getEmaildata($userid,$status){
        if($status == "verified"){
            $query = $this->db->query("SELECT * FROM emailstatus WHERE user_id = $userid AND Status = '$status'");
            return $query->result_array();
        }
        else{
            $query = $this->db->query("SELECT * FROM emailstatus WHERE user_id = $userid AND Status = '$status'");
            return $query->result_array();
        }
    }

    public function update_raised_amount($cause_id, $amount,$status)
    {
        if($status == 1){
        $this->db->set('raised_amount', 'raised_amount + ' . (int) $amount, FALSE);
        $this->db->where('id', $cause_id);
        return $this->db->update('individualform');
        }
        else{
            $this->db->set('raised_amount', 'raised_amount - ' . (int) $amount, FALSE);
            $this->db->where('id', $cause_id);
            return $this->db->update('individualform');
        }
    }

    public function totalUnverifiedtransactions(){
        $totalunverifiedtransactions = $this->db->query("SELECT * FROM donation_for_cause WHERE status = 0");
        return count($totalunverifiedtransactions->result_array());
    }
  
}
