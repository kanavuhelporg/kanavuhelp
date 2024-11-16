<?php
class Contact_model extends CI_Model {

    // Insert contact form data into the database
    public function insert_contact_data($data) {
        return $this->db->insert('contact_form_submissions', $data);
    }

    // Fetch all contact submissions for admin
    public function get_all_submissions() {
        return $this->db->get('contact_form_submissions')->result();
    }
}
