<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>causeverification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./ponsoft.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .ps-logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ps-gray {
            background-color: rgb(248, 245, 245);
        }

        .active-bg {
            background-color: rgb(230, 230, 230);
        }

        .heading-ponsoft {
            color: rgb(120, 50, 186);
            font-weight: 800;
            font-family: sans-serif;
        }

        .ps-letter {
            background-color: rgb(120, 50, 186);
        }

        .ps-user {
            background-color: rgb(254, 213, 163);
            ;
        }

        .align {
            align-self: self-end;
        }

        .fa-magnifying-glass {
            color: gray;
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, auto));
            gap: 20px;
        }

        .card-round {
            border-radius: 20px;
        }

        ul>li {
            cursor: pointer;
        }

        .card1 {
            background-color: rgb(88, 194, 255);
        }

        .card2 {
            background-color: rgb(233, 153, 3);
        }

        .card3 {
            background-color: rgb(124, 9, 232);
        }

        .card4 {
            background-color: rgb(35, 154, 43);
        }

        .chartMenu {
            width: 100vw;
            height: 40px;
            background: #1A1A1A;
            color: rgba(54, 162, 235, 1);
        }

        .chartMenu p {
            padding: 10px;
            font-size: 20px;
        }

        .chartCard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 700px));
            grid-template-rows: repeat(auto-fit, minmax(200px, auto));
            align-items: center;
        }

        .ps-table-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 700px));
        }

        .chartBox {
            /* height:fit-content; */
            padding: 10px;
            border-radius: 20px;
            /* border: solid 3px rgba(54, 162, 235, 1); */
            background: white;
        }

        #search-bar {
            display: flex;
        }

        .ham-line {
            width: 30px;
            height: 6px;
            background-color: rgb(70, 70, 70);
            margin-top: 5px;
        }

        .ps-add-btn {
            border: none;
            outline: none;
            background-color: rgb(23, 23, 184);
            border-radius: 25px;

        }

        .active-page {
            background-color: #6495ED;
            font-weight: 500;
            color: white;
        }

        .active {
            border: none;
            outline: none;
            font-weight: 500;
            font-size: 15px;
        }

        .ps-page-count {
            border: none;
            outline: none;
            font-weight: 500;
            color: white;
            background-color: #6495ED;
        }

        #coords-form div>input {
            border-radius: 50px;
            border: 1px solid rgb(208, 205, 205);
            outline: none;
            padding: 13px 0;
        }

        #coords-form div>button {
            border-radius: 50px;
        }

        #add-coords-form {
            width: 42%;
            border-radius: 25px;
            box-sizing: border-box;
            padding: 3%;
            position: relative;
        }

        .form-grid {
            grid-template-rows: repeat(auto-fit, minmax(50px, auto));
        }

        #coords-modal-hide {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            transition: 0.4s;
            transition-timing-function: ease;
        }

        .coords-modal {
            padding: 10px 0;
            background-color: rgba(128, 128, 128, 0.4);
            overflow: hidden;
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
        }

        @media screen and (max-width:768px) {
            #search-bar {
                display: none;
            }

            #menu-bar {
                display: none;
            }

            .ps-logo {
                justify-content: space-between;
            }
        }

        @media screen and (min-width:768px) {
            .ham-menu {
                display: none;
            }
        }

        @media screen and (max-width:768px) {

            #add-coords-form div>input {
                padding: 5px;
            }

            #add-coords-form {
                width: 90%;
                padding: 8%;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">

        <div id="side-bar" class="row"><!-----top-bar--------------->

            <div class="col-md-2 border-bottom ps-gray py-3">

                <div id="kanavuhelplogo" class="ps-logo">

                </div>

            </div>

            <div id="search-bar" class="col-md-10 align-items-center justify-content-between border-bottom">

            </div>
        </div><!-----------top-bar-end----------------------->


        <div class="row" style="height: 100vh;"><!----------main-navbar----------->

            <div id="menu-bar" class="col-md-2 ps-gray" style="height: 100vh;"><!----------side-bar-------------------->

            </div><!-----------side-bar-end-------------->

            <div class="col-md-10 h-100"><!-----------main-dashboard------------------------->



                <div style="overflow:auto" class="mt-3 px-4"><!----------------table--------------->
                    <table class="table table-responsive table-borderless">
                        <thead>
                            <tr class="ps-gray">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Amount</th>
                                <th>Location</th>
                                <th>Age</th>
                                <th>End date </th>
                                <th>Cause heading</th>
                                <th>Cause description</th>
                                <th>created date</th>
                                <th>Created by</th>
                                <th>raised amount</th>
                                <th>verified status</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="ps-coords">
                            <?php if (!empty($fundraisers)): ?>
                                <?php foreach ($fundraisers as $index => $donation): ?>
                                    <tr>
                                        <td><?php echo $index + 1; ?></td>
                                        <td><?php echo htmlspecialchars($donation->name); ?></td>
                                        <td><?php echo htmlspecialchars($donation->email); ?></td>
                                        <td><?php echo htmlspecialchars($donation->phone); ?></td>
                                        <td><?php echo htmlspecialchars($donation->amount); ?></td>
                                        <td><?php echo htmlspecialchars($donation->location); ?></td>
                                        <td><?php echo htmlspecialchars($donation->age); ?></td>
                                        <td><?php echo htmlspecialchars($donation->end_date); ?></td>
                                        <td><?php echo htmlspecialchars($donation->cause_heading); ?></td>
                                        <td><?php echo htmlspecialchars($donation->cause_description); ?></td>

                                        <td><?php echo htmlspecialchars($donation->created_at); ?></td>
                                        <td><?php echo htmlspecialchars($donation->username); ?></td>
                                        <td><?php echo htmlspecialchars($donation->raised_amount); ?></td>
                                        <td><?php echo htmlspecialchars($donation->verified == 1 ? 'Yes' : 'No'); ?></td>
                                        <td>
                                            <a href="#" onclick="editDonation(<?php echo htmlspecialchars(json_encode($donation)); ?>)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editDonationModal">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" style="text-align: center;">No records found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div> <!----------------table-end------->
                <script>
                    function editDonation(donation) {
                        document.getElementById('donationId').value = donation.id;
                        document.getElementById('donationName').value = donation.name;
                        document.getElementById('donationEmail').value = donation.email;
                        document.getElementById('donationMobile').value = donation.phone;
                        document.getElementById('donationAmount').value = donation.amount;
                        document.getElementById('donationLocation').value = donation.location;
                        document.getElementById('donationAge').value = donation.age;
                        document.getElementById('donationEndDate').value = donation.end_date;
                        document.getElementById('donationCauseHeading').value = donation.cause_heading;
                        document.getElementById('donationCauseDescription').value = donation.cause_description;
                        // No need to set Cover Image input unless you want to show the current image path.
                        document.getElementById('donationUserName').value = donation.username;
                        document.getElementById('donationRaisedAmount').value = donation.raised_amount;
                        document.getElementById('donationVerified').value = donation.verified;
                        //  var imageUrl = "<?= base_url('assets/individualform_img/') ?>" + donation.cover_image;
                        // document.getElementById('donationImagePreview').src = imageUrl;
                    }
                </script>
                <div class="modal fade" id="editDonationModal" tabindex="-1" role="dialog" aria-labelledby="editDonationLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form id="editDonationForm" action="<?php echo site_url('admin/updatecauses'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editDonationLabel">Edit Causes </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="donationId">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="donationName" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="donationEmail" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" id="donationMobile" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" name="amount" id="donationAmount" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" name="location" id="donationLocation" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="number" name="age" id="donationAge" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" name="end_date" id="donationEndDate" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Cause Heading</label>
                                        <input type="text" name="cause_heading" id="donationCauseHeading" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Cause Description</label>
                                        <textarea name="cause_description" id="donationCauseDescription" class="form-control"></textarea>
                                    </div>

                                    <!--<div class="form-group">
                         <!-- Image Preview Section 
                    <div class="form-group">
                        <label>Current Cover Image</label>
                        <div>
                            <img id="donationImagePreview" src="" alt="Cover Image" width="150" height="150" style="border: 1px solid #ccc; margin-bottom: 10px;">
                        </div>
                    </div>
                      <!--  <label> For Updating Cover Image</label>
                        <input type="file" name="cover_image" id="donationCoverImage" class="form-control">
                        <small class="form-text text-muted">Leave empty if you don't want to change the image.</small>
                    </div>-->

                                    <div class="form-group">
                                        <label>Created by</label>
                                        <input type="text" name="username" id="donationUserName" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Raised Amount</label>
                                        <input type="text" name="raised_amount" id="donationRaisedAmount" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Verified</label>
                                        <select name="verified" id="donationVerified" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<script>

$.ajax({
      type:"get",
      url:"admin/sidemenu",
      success:(result)=>{
           document.getElementById("menu-bar").innerHTML = result;
      },
      error:(error)=>{
           document.getElementById("menu-bar").innerHTML = error;
      }
    }); 


    $.ajax({
      type:"get",
      url:"admin/topmenu",
      success:(result)=>{
           document.getElementById("search-bar").innerHTML = result;
          /*  document.getElementById("dashboardsearch").style.display = "flex";
           document.getElementById("dashboardsubmenu").style.display = "flex"; */
      },
      error:(error)=>{
           document.getElementById("search-bar").innerHTML = error;
      }
    }); 

    $.ajax({
      type:"get",
      url:"admin/kanavuhelplogo",
      success:(result)=>{
           document.getElementById("kanavuhelplogo").innerHTML = result;
      },
      error:(error)=>{
           document.getElementById("kanavuhelplogo").innerHTML = error;
      }
    });

                    $('#editDonationForm').on('submit', function(event) {
                        event.preventDefault(); // Prevent default form submission

                        // Create a FormData object for handling file uploads
                        var formData = new FormData(this);

                        $.ajax({
                            url: $(this).attr('action'), // Ensure the action attribute is correct
                            type: 'POST',
                            data: formData, // Send the FormData object
                            contentType: false, // Don't set content type for FormData
                            processData: false, // Don't process data, let FormData handle it
                            dataType: 'json', // Expect a JSON response
                            success: function(response) {
                                console.log('Server Response:', response);

                                if (response.status === 'success') {
                                    alert('verified successfully');
                                    window.location.reload(); // Reload the page or redirect as needed
                                } else {
                                    alert('verification failed');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX Error:', error); // Log AJAX errors to the console
                                alert('An error occurred. Please try again.');
                            }
                        });
                    });
                </script>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>