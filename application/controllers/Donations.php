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
   /*  public function filterCauses() {

        if($this->input->is_ajax_request()){
         $category = $this->input->post("category");
         $fundraisers = $this->UserModel->filterCauseswithcategory($category);   
         $progress_percentage = "";

         foreach ($fundraisers as $fundraiser) {
            $end_date = new DateTime($fundraiser->end_date);
            $current_date = new DateTime();
            $date_diff = $end_date->diff($current_date);

            // Calculate days left and check if the fundraiser is expired
            if($date_diff->days > 0) {
                $days_left = $date_diff->days;
            }
            else{
                $days_left = 0;
            }
            $is_expired = ($date_diff->invert === 0 && $days_left > 0) || $fundraiser->raised_amount >= $fundraiser->amount;

            // Only include active fundraisers
            if (!$is_expired) {
                // If still active, calculate days left and other properties
                $fundraiser->days_left = $days_left;
                $fundraiser->hide_donation_button = false;
                $active_fundraisers[] = $fundraiser;
                $progress_percentage = $fundraiser->raised_amount / $fundraiser->amount * 100;
            }
            else{
                $fundraiser->days_left = $days_left;
                $fundraiser->hide_donation_button = false;
                $active_fundraisers[] = $fundraiser;
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
                                    <p class='card-text text-muted mb-0'>Created by <span class='fw-bold text-dark'>".htmlspecialchars($fundraiser->created_by, ENT_QUOTES)."</span></p>
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
      } */



      public function filterCauses() {
        if ($this->input->is_ajax_request()) {
            // Get the category from the POST request
            $category = $this->input->post("category");
    
            // Load the fundraisers using the model
            $fundraisers = $this->UserModel->filterCauseswithcategory($category);
    
            // Initialize an array for active fundraisers
            $active_fundraisers = [];
    
            // Filter fundraisers based on expiration and goal status
            foreach ($fundraisers as $fundraiser) {
                $end_date = new DateTime($fundraiser->end_date);
                $current_date = new DateTime();
                $date_diff = $end_date->diff($current_date);
    
                // Calculate days left
                $days_left = $date_diff->invert ? $date_diff->days : 0;
    
                // Check if the fundraiser is expired or goal is reached
                $is_expired = !$date_diff->invert || $fundraiser->raised_amount >= $fundraiser->amount;
    
                // Add properties to the fundraiser object
                $fundraiser->days_left = $days_left;
                $fundraiser->hide_donation_button = $is_expired;
    
                // Add to active fundraisers (we'll include all for now, but mark as completed if goal is reached)
                $active_fundraisers[] = $fundraiser;
            }
    
            // Sort fundraisers by progress percentage
            usort($active_fundraisers, function($a, $b) {
                $progressA = ($a->raised_amount / $a->amount) * 100;
                $progressB = ($b->raised_amount / $b->amount) * 100;
                return $progressA <=> $progressB;
            });
    
            // Store all filtered fundraisers in session for "See More" functionality
            $this->session->set_userdata("fundraisers", $active_fundraisers);
    
            // Prepare HTML output
            $output = '<div class="row g-4" id="fundraiserCards">'; // Start with the correct Bootstrap row
    
            if (!empty($active_fundraisers)) {
                // Show only the first 3 fundraisers initially
               // $displayedFundraisers = array_slice($active_fundraisers, 0, 3);

                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;  // Get current page, default to 1
$itemsPerPage = 10;
$offset = ($page - 1) * $itemsPerPage;

$displayedFundraisers = array_slice($active_fundraisers, $offset, $itemsPerPage); 
              // $displayedFundraisers = array_slice($active_fundraisers, 0 )
                foreach ($displayedFundraisers as $fundraiser) {
                    // Calculate progress percentage for this fundraiser
                    $progress_percentage = ($fundraiser->raised_amount / $fundraiser->amount) * 100;
    
                    // Set the image source
                    $imageSrc = !empty($fundraiser->cover_image) && file_exists('assets/individualform_img/' . $fundraiser->cover_image)
                        ? base_url('assets/individualform_img/' . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES))
                        : base_url('assets/img/funddonate.jpg');
    
                    // Determine if the goal is reached
                    $is_goal_reached = $fundraiser->raised_amount >= $fundraiser->amount;
    
                    // Generate the HTML for each card, matching the original structure
                    $output .= '
                        <div class="col-12 col-lg-4 col-md-6 mb-0 d-flex card-container" data-category="' . htmlspecialchars($fundraiser->category, ENT_QUOTES) . '" id="fundraiser-card-' . $fundraiser->id . '">
                            <a href="' . base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) . '" style="text-decoration:none;color:black">
                                <div class="card h-100 fixed-card" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                    <img src="' . $imageSrc . '" 
                                        width="316px" height="230px" 
                                        class="card-img-top fixed-card-img img-placeholder" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                    <div class="card-body d-flex flex-column">
                                        <div class="flex-grow-1" style="min-height: 100px;">
                                            <p class="card-title" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                ' . htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) . '
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-text text-muted mb-0 text-truncate" 
                                                style="max-width: 60%; flex-shrink: 1; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; line-height:1.5; height:3em; word-break: break-word; white-space: normal;">
                                                Created by ' . htmlspecialchars($fundraiser->created_by, ENT_QUOTES) . '
                                            </p>
                                             
                                        </div>
                                        <div class="flex-grow-1 mt-2" style="min-height: 60px;">
                                            <p class="card-text">
                                                <strong>
                                                    ₹ ' . number_format(min($fundraiser->raised_amount, $fundraiser->amount)) . ' raised out of ₹ ' . number_format($fundraiser->amount) . '
                                                </strong>
                                            </p>
                                            <div class="progress mb-2" style="background-color: #f8d7da;">
                                                <div class="progress-bar bg-danger" 
                                                    style="width: ' . $progress_percentage . '%;" 
                                                    role="progressbar" 
                                                    aria-valuenow="' . $progress_percentage . '" 
                                                    aria-valuemin="0" 
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-auto">';
                    
                    if ($is_goal_reached) {
                        $output .= '<span class="badge bg-success ms-2">Completed</span>';
                    } else {
                        if ($fundraiser->days_left >= 0 && !$fundraiser->hide_donation_button) {
                            $output .= '<a href="#" class="btn bg-danger text-white" onclick="setCauseId(' . $fundraiser->id . '); openDonationModal();">Donate Now</a>';
                        }
                    }
    
                    $output .= '
                                            <i class="bi bi-share fs-4" 
                                                onclick="shareCause(\'' . base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) . '\', 
                                                            \'' . htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) . '\', 
                                                            \'' . base_url('assets/individualform_img/') . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES) . '\')">
                                                <div style="font-size: 0.8rem;">Share</div>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>';
                }
            } else {
                $output .= '<p class="text-center">No fundraisers available at the moment.</p>';
            }
    
            $output .= '</div>'; // Close the row
    
            // Add the "See More" button if there are more than 3 fundraisers
            if (count($active_fundraisers) > 3) {
                $output .= '<div class="text-center mt-3">
                    <button id="seeMoreBtn" class="btn" style="background-color: white; border: 1px solid black; color: red; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onclick="loadMoreFundraisers()">See More Causes</button>
                </div>';
            }
    
            echo $output;
        }
       
    }
   
    } 
    
?>


