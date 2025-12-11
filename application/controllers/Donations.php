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
   
   
//     public function filterCauses()
// {
//     if ($this->input->is_ajax_request()) {

//         $category = $this->input->post("category");

//         // Get fresh results from database ONLY (never use session)
//         $fundraisers = $this->UserModel->filterCauseswithcategory($category);

//         // Remove duplicates
//         $uniqueFundraisers = [];
//         foreach ($fundraisers as $f) {
//             $uniqueFundraisers[$f->id] = $f;
//         }
//         $fundraisers = array_values($uniqueFundraisers);

//         // Add dynamic data
//         foreach ($fundraisers as $f) {
//             $f->supporters_count = $this->UserModel->count_supporters($f->id);
//             $f->progress = ($f->amount == 0) ? 0 : ($f->raised_amount / $f->amount) * 100;
//             $f->is_goal_reached = ($f->raised_amount >= $f->amount);
//         }

//         // Sort by progress
//         usort($fundraisers, function ($a, $b) {
//             $pa = ($a->amount == 0) ? 0 : ($a->raised_amount / $a->amount) * 100;
//             $pb = ($b->amount == 0) ? 0 : ($b->raised_amount / $b->amount) * 100;
//             return $pa <=> $pb;
//         });

//         // Build HTML output
//         $output = "";
//         foreach ($fundraisers as $fundraiser) {

//             $image_path = FCPATH . 'assets/individualform_img/' . $fundraiser->cover_image;
//             $imageSrc = (is_file($image_path))
//                 ? base_url('assets/individualform_img/' . rawurlencode($fundraiser->cover_image))
//                 : base_url('assets/img/funddonate.jpg');

//             $supporters = intval($fundraiser->supporters_count);
//             $progress = ($fundraiser->amount == 0) ? 0 : ($fundraiser->raised_amount / $fundraiser->amount) * 100;

//             $output .= '
//             <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-0 d-flex card-container">
//                 <div class="card h-100 fixed-card w-100 d-flex flex-column">
//                     <a href="'. base_url('helpus/' . str_replace(" ", "-", $fundraiser->name) . '-' . $fundraiser->id) .'">
//                         <img src="'. $imageSrc .'" class="card-img-top fixed-card-img" style=" width: 100%; height: 230px; object-fit: cover; object-position: center;">
//                     </a>
//                     <div class="card-body d-flex flex-column">

//                         <p class="card-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">'. htmlspecialchars($fundraiser->cause_heading) .'</p>

//                         <div class="d-flex justify-content-between">
//                             <div class="small text-muted">
//                                 <img src="'. base_url('assets/img/heart_img.svg') .'" width="16">
//                                 '. $supporters .' Supporter'. ($supporters != 1 ? "s" : "") .'
//                             </div>
//                             <div class="small text-muted"><img src="'. base_url('assets/img/Frame.svg') .'" width="16"> Created By '. $fundraiser->created_by .'</div>
//                         </div>

//                         <p class="card-text mt-2"><strong>
//                             ₹'. number_format(min($fundraiser->raised_amount, $fundraiser->amount)) .' raised out of
//                             ₹'. number_format($fundraiser->amount) .'
//                         </strong></p>

//                         <div class="progress mb-2">
//                             <div class="progress-bar bg-danger" style="width:'.$progress.'%"></div>
//                         </div>

//                         <div class="d-flex justify-content-between mt-auto">
//                         ' . ($fundraiser->is_goal_reached
//                             ? '<span class="badge bg-success mt-2">Completed</span>'
//                             : '<button type="button" class="btn bg-danger text-white donate_btn" onclick="setCauseId('.$fundraiser->id.'); openDonationModal();">Donate Now</button>'
//                         ) . '

//                             <div class="text-danger" onclick="shareCause(\''.
//                                 base_url('helpus/' . str_replace(" ","-", $fundraiser->name) . '-' . $fundraiser->id) .'\',
//                                 \'' . htmlspecialchars($fundraiser->cause_heading) . '\',
//                                 \'' . $imageSrc . '\')">
//                                 <i class="bi bi-share"></i> <span class="fw-bold">Share</span>
//                             </div>
//                         </div>

//                     </div>
//                 </div>
//             </div>';
//         }

//         echo $output;
//     }
// }
public function filterCauses()
{
    if ($this->input->is_ajax_request()) {

        $category = $this->input->post("category");

        // Get fresh results from database ONLY (never use session)
        $fundraisers = $this->UserModel->filterCauseswithcategory($category);

        // Remove duplicates
        $uniqueFundraisers = [];
        foreach ($fundraisers as $f) {
            $uniqueFundraisers[$f->id] = $f;
        }
        $fundraisers = array_values($uniqueFundraisers);

        // Add dynamic data
        foreach ($fundraisers as $f) {
            // Get current raised amount from donations table
            $current_raised_amount = $this->UserModel->get_current_raised_amount($f->id);
            $f->raised_amount = $current_raised_amount;
            
            // Get supporters count
            $f->supporters_count = $this->UserModel->count_supporters($f->id);
            
            // Calculate progress
            $f->progress = ($f->amount == 0) ? 0 : ($f->raised_amount / $f->amount) * 100;
            $f->is_goal_reached = ($f->raised_amount >= $f->amount);
        }

        // Sort by progress
        usort($fundraisers, function ($a, $b) {
            $pa = ($a->amount == 0) ? 0 : ($a->raised_amount / $a->amount) * 100;
            $pb = ($b->amount == 0) ? 0 : ($b->raised_amount / $b->amount) * 100;
            return $pa <=> $pb;
        });

        // Build HTML output
        $output = "";
        foreach ($fundraisers as $fundraiser) {

            $image_path = FCPATH . 'assets/individualform_img/' . $fundraiser->cover_image;
            $imageSrc = (is_file($image_path))
                ? base_url('assets/individualform_img/' . rawurlencode($fundraiser->cover_image))
                : base_url('assets/img/funddonate.jpg');

            $supporters = intval($fundraiser->supporters_count);
            $progress = ($fundraiser->amount == 0) ? 0 : ($fundraiser->raised_amount / $fundraiser->amount) * 100;

            $output .= '
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-0 d-flex card-container">
                <div class="card h-100 fixed-card w-100 d-flex flex-column">
                    <a href="'. base_url('helpus/' . str_replace(" ", "-", $fundraiser->name) . '-' . $fundraiser->id) .'">
                        <img src="'. $imageSrc .'" class="card-img-top fixed-card-img" style=" width: 100%; height: 230px; object-fit: cover; object-position: center;">
                    </a>
                    <div class="card-body d-flex flex-column">

                        <p class="card-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">'. htmlspecialchars($fundraiser->cause_heading) .'</p>

                        <div class="d-flex justify-content-between">
                            <div class="small text-muted">
                                <img src="'. base_url('assets/img/heart_img.svg') .'" width="16">
                                '. $supporters .' Supporter'. ($supporters != 1 ? "s" : "") .'
                            </div>
                            <div class="small text-muted"><img src="'. base_url('assets/img/Frame.svg') .'" width="16"> Created By '. $fundraiser->created_by .'</div>
                        </div>

                        <p class="card-text mt-2"><strong>
                            ₹'. number_format($fundraiser->raised_amount) .' raised out of
                            ₹'. number_format($fundraiser->amount) .'
                        </strong></p>

                        <div class="progress mb-2">
                            <div class="progress-bar bg-danger" style="width:'.min($progress, 100).'%"></div>
                        </div>

                        <div class="d-flex justify-content-between mt-auto">
                        ' . ($fundraiser->is_goal_reached
                            ? '<span class="badge bg-success mt-2">Completed</span>'
                            : '<button type="button" class="btn bg-danger text-white donate_btn" onclick="setCauseId('.$fundraiser->id.'); openDonationModal();">Donate Now</button>'
                        ) . '

                            <div class="text-danger" onclick="shareCause(\''.
                                base_url('helpus/' . str_replace(" ","-", $fundraiser->name) . '-' . $fundraiser->id) .'\',
                                \'' . htmlspecialchars($fundraiser->cause_heading) . '\',
                                \'' . $imageSrc . '\')">
                                <i class="bi bi-share"></i> <span class="fw-bold">Share</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
        }

        echo $output;
    }
}

   
}
?>