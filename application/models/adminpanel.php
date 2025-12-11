<?php

class adminpanel extends CI_Model
{
    public function __construct() // Add this constructor
    {
        parent::__construct();
        $this->load->database();
    }
    public function adminlogin()
    {
        $postData = $this->input->post(null, true);
        $Email = $postData['exampleInputEmail1'];
        $Password = $postData['exampleInputpassword1'];
        $query = "SELECT * FROM user WHERE email = '$Email' AND password = '$Password' and category='admin'";
        $count = $this->db->query($query);
        return $count->result_array();
    }
//     public function transactiondetails($limit, $offset, $search = null)
// {
//     $this->db->select('donation_for_cause.*');
//     $this->db->from('donation_for_cause');

//     if (!empty($search)) {
//         $this->db->group_start()
//                  ->like('name', $search)
//                  ->or_like('email', $search)
//                  ->or_like('phoneno', $search)
//                  ->or_like('transactionid', $search)
//                  ->or_like('currency_type', $search)
//                  ->or_like('status', $search)
//                  ->or_like('verified_by', $search)
//                  ->or_like('fundraiser_name', $search)
//                  ->or_like('fundraiser_email', $search)
//                  ->or_like('fundraiser_phone', $search)
//                  ->or_like('category', $search)
//                  ->or_like('cause_heading', $search)
//                  ->or_like('donor_location', $search)
//                  ->group_end();
//     }

//     $this->db->order_by('donation_for_cause.created_at', 'DESC');
//     $this->db->limit($limit, $offset);
//     return $this->db->get()->result();
// }
    public function get_all_transactions()
{
    $this->db->select('donation_for_cause.*');
    $this->db->from('donation_for_cause');
    $this->db->order_by('donation_for_cause.created_at', 'DESC');
    // Remove the limit to get all records
    $query = $this->db->get();
    return $query->result();
}

public function transactiondetails()
{
    // Keep this method for backward compatibility, but use get_all_transactions instead
    return $this->get_all_transactions();
}

public function get_total_transaction()
{
    return $this->db->count_all('donation_for_cause');
}


// public function get_total_transaction($search = null)
// {
//     $this->db->from('donation_for_cause');

//     if (!empty($search)) {
//         $this->db->group_start()
//                  ->like('name', $search)
//                  ->or_like('email', $search)
//                  ->or_like('phoneno', $search)
//                  ->or_like('transactionid', $search)
//                  ->or_like('currency_type', $search)
//                  ->or_like('status', $search)
//                  ->or_like('verified_by', $search)
//                  ->or_like('fundraiser_name', $search)
//                  ->or_like('fundraiser_email', $search)
//                  ->or_like('fundraiser_phone', $search)
//                  ->or_like('category', $search)
//                  ->or_like('cause_heading', $search)
//                  ->or_like('donor_location', $search)
//                  ->group_end();
//     }

//     return $this->db->count_all_results();
// }
    // public function get_total_transaction(){
    //     $query = $this->db->query("SELECT * FROM donation_for_cause");
    //     $donation = $query->result_array();
    //     return count($donation);
    // }


    public function get_verification_list($counts){
        $this->db->select('donation_for_cause.*');
        $this->db->from('donation_for_cause');
        $this->db->order_by('donation_for_cause.created_at', 'DESC');
        $this->db->limit(5,$counts);
        $query = $this->db->get();
        return $query->result();
    }

     public function get_all_cause_details()
    {
        // Include only rows where 'verified' is 1
        $this->db->select('individualform.*');
        $this->db->from('individualform');
        // $this->db->join('user', 'user.id = individualform.user_id');
        $this->db->order_by('individualform.created_at', 'DESC');
        // Remove any limits to get all records
        $query = $this->db->get();
        return $query->result();
    }

// Keep existing method for backward compatibility
public function get_cause_details()
{
    return $this->get_all_cause_details();
}
public function totalUnverifiedCauses()
{
    return $this->db->where('verified', 0)->count_all_results('individualform');
}
public function get_total_causes()
{
    return $this->db->count_all('individualform');
}
//     public function get_cause_details($limit = 5, $offset = 0, $search = '')
// {
//     $this->db->select('individualform.*, user.name as username');
//     $this->db->from('individualform');
//     $this->db->join('user', 'user.id = individualform.user_id');

//     if (!empty($search)) {
//         $this->db->group_start(); // start grouping WHERE conditions
//         $this->db->like('individualform.name', $search);
//         $this->db->or_like('individualform.category', $search);
//         // $this->db->or_like('individualform.email', $search);
//         $this->db->or_like('individualform.phone', $search);
//         $this->db->or_like('individualform.amount', $search);
//         // $this->db->or_like('individualform.location', $search);
//         $this->db->or_like('individualform.cause_heading', $search);
//         $this->db->or_like('individualform.created_by', $search);
//         $this->db->or_like('individualform.cause_description', $search);
//         $this->db->or_like('individualform.form_selected_text', $search);
//         $this->db->group_end();   // end grouping
//     }

//     $this->db->order_by('individualform.created_at', 'DESC');
//     $this->db->limit($limit, $offset);
    
//     $query = $this->db->get();
//     return $query->result();
// }


// public function get_total_causes($search = '')
// {
//     $this->db->from('individualform');

//     if (!empty($search)) {
//         $this->db->group_start();
//         $this->db->like('name', $search);
//         $this->db->or_like('category', $search);
//         // $this->db->or_like('email', $search);
//         $this->db->or_like('individualform.amount', $search);
//         $this->db->or_like('individualform.created_by', $search);
//         $this->db->or_like('phone', $search);
//         // $this->db->or_like('location', $search);
//         $this->db->or_like('cause_heading', $search);
//         $this->db->or_like('cause_description', $search);
//         $this->db->or_like('form_selected_text', $search);
//         $this->db->group_end();
//     }

//     return $this->db->count_all_results();
// }



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

   // Count records with optional search
public function get_enquiries_count($search = null)
{
    if (!empty($search)) {
        $this->db->like('name', $search);
        $this->db->or_like('email', $search);
        $this->db->or_like('phone', $search);
        $this->db->or_like('message', $search);
    }
    return $this->db->count_all_results('contact_us');
}

// Get filtered + paginated records
public function get_enquiries_list($limit, $offset, $search = null)
{
    if (!empty($search)) {
        $this->db->like('name', $search);
        $this->db->or_like('email', $search);
        $this->db->or_like('phone', $search);
        $this->db->or_like('message', $search);
    }
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get('contact_us');
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

//     public function updateDonationAllFields($id, $data)
// {
//     $this->db->where('donation_id', $id);
//     return $this->db->update('donation_for_cause', $data);
// }
public function updateDonationFull($data)
{
    $donation_id = $data['donation_id'];

    // First, check current status
    $current = $this->db->get_where('donation_for_cause', ['donation_id' => $donation_id])->row();

    // If status not changed → still update other fields
    $updateData = array(
        'name'          => $data['name'],
        'email'         => $data['email'],
        'phoneno'       => $data['phoneno'],
        'amount'        => $data['amount'],
        'transactionid' => $data['transactionid'],
        'verified_by'   => $data['verified_by'],
        'status'        => $data['status']
    );

    $this->db->where('donation_id', $donation_id);
    return $this->db->update('donation_for_cause', $updateData);
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
//delete transaction
    
    public function delete_by_id($donation_id) {
        // Use  delete the donation 'donation_id'table colunm name $donation_id variable
        $this->db->where('donation_id', $donation_id);
        $delete = $this->db->delete('donation_for_cause');  // 'individualform' is the table name
    
        return $delete;
    }

}
