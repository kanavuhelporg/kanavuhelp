<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class DonorprofileModel extends CI_Model {

  public function fetchDonordata($email){
    $getdonordata = $this->db->query("SELECT * FROM user WHERE email LIKE '%$email%'");
    $donordata = $getdonordata->row_array();
    if($getdonordata->num_rows() > 0){
        if($email === $donordata["email"]){
            return $donordata;   
            }
            else{
            return false;
            }
    }
    else{
        return false;
    }
  } 

  public function loginUser($email)
	{
		$verifyemail = $this->db->query("SELECT * FROM donor_profiles WHERE Email_id = '$email'");
		return $verifyemail;
	}

  public function getCausesDonationByUserId($user_id)
	{

        if(!$this->session->has_userdata("Kanavu_userId")) {
            redirect("/");
        }
        
        $getcauseid = $this->db->query("SELECT DISTINCT donation_for_cause.user_id,donation_for_cause.cause_id,user.id FROM user LEFT JOIN donation_for_cause ON user.id = donation_for_cause.user_id WHERE user.id = $user_id");

        $result = "";
        if($getcauseid->num_rows() > 0) {
          $getid = $getcauseid->row();
          $user_id = $getid->id;
          $result = $this->db->query("SELECT donation_for_cause.status,donation_for_cause.amount, individualform.id,individualform.name,individualform.cover_image,individualform.cause_heading FROM donation_for_cause LEFT JOIN individualform ON donation_for_cause.user_id = individualform.user_id WHERE donation_for_cause.user_id = $user_id");
          return $result->result();
        }
	}  

  public function getMydonations($donor_id) {
      $getdonations = $this->db->query("SELECT * FROM individualform.*,donation_for_cause.* FROM individualform LEFT JOIN donation_for_cause ON individualform.id = donation_for_cause.donor_id WHERE individualform.id = $donor_id");
  }

  public function registerAsdonor($causeData) {
      $registerasdonor = $this->db->query("INSERT INTO donor_profiles (Donor_id,Name,Phonenumber,Location,Email_id) VALUES('$causeData[cause_id]','$causeData[name]','$causeData[phone]','$causeData[location]','$causeData[email]')");
      if(!$registerasdonor) {
        return false;
      }
      else{
        return true;
      }
  }
}

?>