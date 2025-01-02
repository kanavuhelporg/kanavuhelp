<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donations extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('email');
        $this->load->model('DonorprofileModel');
        $this->load->model('UserModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('cookie');
        // $this->load->config('email');
        $this->config->load('email');
        $this->load->helper('url');
    }
    public function filterCauses() {
        if($this->input->is_ajax_request()){
         $category = $this->input->post("category");
         $fundraisers = $this->UserModel->filterCauseswithcategory($category);   
         $progress_percentage = "";

         foreach ($fundraisers as $fundraiser) {
            $end_date = new DateTime($fundraiser->end_date);
            $current_date = new DateTime();
            $date_diff = $end_date->diff($current_date);

            // Calculate days left and check if the fundraiser is expired
            $days_left = $date_diff->days;
            $is_expired = ($date_diff->invert === 0 && $days_left > 0) || $fundraiser->raised_amount >= $fundraiser->amount;

            // Only include active fundraisers
            if (!$is_expired) {
                // If still active, calculate days left and other properties
                $fundraiser->days_left = $days_left;
                $fundraiser->hide_donation_button = false;
                $active_fundraisers[] = $fundraiser;
                $progress_percentage = $fundraiser->raised_amount / $fundraiser->amount * 100;
            }
        }
        
        if (!empty($fundraisers)) { 
            // Show only first 3 fundraisers initially
            $displayedFundraisers = array_slice($fundraisers, 0, 3);
            foreach ($displayedFundraisers as $fundraiser) {
                // Set a fixed dummy image if the cover image is empty or does not exist
                $imageSrc = !empty($fundraiser->cover_image) && file_exists('assets/individualform_img/' . $fundraiser->cover_image) 
                            ? base_url('assets/individualform_img/' . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES)) 
                            : base_url('assets/img/funddonate.jpg'); // Dummy image path
        
            echo "<div class='col-12 col-lg-4 col-md-6 mb-4 d-flex card-container' data-category='<?= htmlspecialchars($fundraiser->category, ENT_QUOTES) ?>'>
                    <a href='helpus/".str_replace(' ','-',$fundraiser->name).'-'. $fundraiser->id."' style='text-decoration:none;color:black'>
                        <div class='card h-100 fixed-card'>
                            <img src='$imageSrc' 
                                width='316px' height='230px' 
                                class='card-img-top fixed-card-img p-2 img-placeholder'>
                            <div class='card-body d-flex flex-column'>
                                <p class='card-title'>".htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES)."</p>
                                <div class='d-flex justify-content-between align-items-center'>
                                    <p class='card-text text-muted mb-0'>for ".htmlspecialchars($fundraiser->name, ENT_QUOTES)."</p>
                                    <button type='button' class='btn card_button text-muted ms-auto' style='border: none; background: none; box-shadow: none;'>".htmlspecialchars($fundraiser->category, ENT_QUOTES)."</button>
                                </div>
                                <p class='card-text'>
                                    <strong>
                                        ₹ ".number_format(min($fundraiser->raised_amount, $fundraiser->amount))." raised out of ₹ ". number_format($fundraiser->amount) ."
                                    </strong>
                                </p>
                                <div class='progress mb-2'>
                                    
                                    <div class='progress-bar' style='width: $progress_percentage%' role='progressbar' aria-valuenow='$progress_percentage' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <div class='d-flex align-items-center mt-auto'>";
                                    if ($fundraiser->days_left >= 0 && (!$fundraiser->hide_donation_button)) {
                                       echo "<a href='#' class='btn donate_btn no-hover' onclick='setCauseId(".$fundraiser->id.")'>Donate Now</a>
                                        <i class='bi bi-share ms-2' 
                                        onclick='shareCause('helpus/".str_replace(' ','-',$fundraiser->name)." "." '-' "." $fundraiser->id', 
                                                           '". htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ."', 
                                                           'assets/individualform_img/". htmlspecialchars($fundraiser->cover_image, ENT_QUOTES)."')'>
                                        </i>";}
                                
                               echo "</div>
                            </div>
                        </div>
                    </a>
                </div>";    
            }
        }
        else {
           echo "<p class='text-center'>No fundraisers available at the moment.</p>
           </div>";
        }
      
      if (count($fundraisers) > 3) {
        echo "<div class='text-center mt-3'>
            <button id='seeMoreBtn' class='btn' style='background-color: white; border: 1px solid black; color: red; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);' onclick='loadMoreFundraisers()'>See More Causes</button>
        </div>";
      }
      }
      $this->session->set_userdata("fundraisers",$fundraisers);
      }

      
    }    
?>