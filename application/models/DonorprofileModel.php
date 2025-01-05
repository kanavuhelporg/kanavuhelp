<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class DonorprofileModel extends CI_Model {

  public function fetchDonordata($email){
    $getdonordata = $this->db->query("SELECT * FROM donor_profiles WHERE Email_id LIKE '%$email%'");
    $donordata = $getdonordata->row_array();
    if($getdonordata->num_rows() > 0){
        if($email === $donordata["Email_id"]){
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
        
        $getcauseid = $this->db->query("SELECT DISTINCT donation_for_cause.donor_id,donation_for_cause.cause_id,donor_profiles.Donor_id FROM donor_profiles LEFT JOIN donation_for_cause ON donor_profiles.Donor_id = donation_for_cause.donor_id WHERE donor_profiles.Donor_id = $user_id");

        $result = "";
        if($getcauseid->num_rows() > 0) {
          $getid = $getcauseid->row();
          $donor_id = $getid->Donor_id;
          $result = $this->db->query("SELECT donor_profiles.*, donation_for_cause.*, individualform.* FROM donor_profiles LEFT JOIN donation_for_cause ON donor_profiles.Donor_id = donation_for_cause.donor_id LEFT JOIN individualform ON donation_for_cause.cause_id = individualform.id WHERE donor_profiles.Donor_id = $donor_id AND donation_for_cause.donor_id = $donor_id");
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