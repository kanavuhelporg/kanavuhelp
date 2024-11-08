<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinators</title>
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
      .ps-logo{
        display:flex;
        align-items:center;
        justify-content:center;
      }

     .ps-gray{
        background-color: rgb(248, 245, 245);
     }

     .active-bg{
      background-color:rgb(230, 230, 230);
     }

     .heading-ponsoft{
        color: rgb(120, 50, 186);
        font-weight:800;
        font-family:sans-serif;
     }

     .ps-letter{
        background-color: rgb(120, 50, 186);
     }

     .ps-user{
    background-color: rgb(254, 213, 163);;
     }

     .align{
        align-self:self-end;
     }

     .fa-magnifying-glass{
      color: gray;
     }

     .dashboard-cards{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(150px,auto));
    gap:20px;
    }

    .card-round{
      border-radius:20px;
    }

    ul > li{
      cursor:pointer;
    }

    .card1{
    background-color: rgb(88, 194, 255);
     }

     .card2{
      background-color: rgb(233, 153, 3);
     }

     .card3{
      background-color: rgb(124, 9, 232);
     }

     .card4{
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
        display:grid;
        grid-template-columns: repeat(auto-fit,minmax(250px,700px)) ;
        grid-template-rows: repeat(auto-fit,minmax(200px,auto)) ;
        align-items: center;
      }

      .ps-table-grid{
        display:grid;
        grid-template-columns: repeat(auto-fit,minmax(300px,700px)) ;
      }

      .chartBox {
        /* height:fit-content; */
        padding: 10px;
        border-radius: 20px;
        /* border: solid 3px rgba(54, 162, 235, 1); */
        background: white;
      }

      #search-bar{
            display:flex;
           }

      .ham-line{
        width:30px;
        height:6px;
        background-color: rgb(70, 70, 70);
        margin-top:5px;
      }

      .ps-add-btn{
        border:none;
        outline:none;
        background-color:rgb(23, 23, 184);
        border-radius:25px;

      }

      .active-page{
        background-color:#6495ED;
        font-weight:500;
        color:white;
      }

      .active{
        border:none;
        outline:none;
        font-weight:500;
        font-size:15px;
      }

      .ps-page-count{
        border:none;
        outline:none;
        font-weight:500;
        color:white;
        background-color:#6495ED;
      }

      #coords-form div > input{
         border-radius:50px;
         border:1px solid rgb(208, 205, 205);
         outline:none;
         padding:13px 0;
      }

      #coords-form div > button{
        border-radius:50px;
      }

      #add-coords-form{
        width:42%;
        border-radius:25px;
        box-sizing:border-box;
        padding:3%;
        position: relative;
      }

      .form-grid{
        grid-template-rows:repeat(auto-fit,minmax(50px,auto));
      }

      #coords-modal-hide{
        position: absolute;
        width: 100%;
        height:100%;
        top:0;
        left:-100%;
        transition:0.4s;
        transition-timing-function:ease;
      }

      .coords-modal{
        padding:10px 0;
        background-color:rgba(128, 128, 128, 0.4);
        overflow:hidden;
      }

      a{
        color:black;
      }

      a:hover{
        color:black;
      }

      @media screen and (max-width:768px) {
           #search-bar{
            display:none;
           }
           #menu-bar{
            display:none;
           }
           .ps-logo{
            justify-content:space-between;
          }
      }

      @media screen and (min-width:768px) {
          .ham-menu{
            display:none;
          }
      }

      @media screen and (max-width:768px) {
        
          #add-coords-form div > input{
            padding: 5px;
          }
          #add-coords-form{
            width:90%;
            padding:8%;
          }
      }

    </style>
</head>
<body>
        
    <div class="container-fluid">
      
      <div id="side-bar" class="row"><!-----top-bar--------------->

      <div class="col-md-2 border-bottom ps-gray py-3">
               
               <div class="ps-logo">
                       
                 <button type="button" data-bs-toggle="offcanvas" data-bs-target="#ps-menu" class="ham-menu ms-4 border-0">
                   <div class="ham-line"></div>
                   <div class="ham-line"></div>
                   <div class="ham-line"></div>
                 </button>
                   <div class="d-flex align-items-center">
                       <span class="rounded-circle text-white px-2 ps-letter">K</span>&nbsp;
                       <span class="heading-ponsoft fs-5 position-relative" style="top:1px;">KANAVUHELP</span>
       
                       </div>    
                   </div>
       
               </div>
       
               <div id="search-bar" class="col-md-10 align-items-center justify-content-between border-bottom">
       
               <div class="col-md-7 ms-4 d-flex align-items-baseline justify-content-between ps-gray rounded-2 py-1">
                   <input id="searchcoords" onkeyup="searchcoordinators(this)" type="text" style="outline-style:none;" class="w-75 ps-3 border-0 ps-gray" placeholder="search">
               <span style="cursor:pointer;" class="pe-3" >
                 <i class="fa-solid fa-magnifying-glass"></i>
               </span>
               </div>
       
               <div class="col-md-3 d-flex align-items-baseline justify-content-evenly">
       
                   <button style="outline-style:none;" class="drop-down-toggle border-0 d-flex align-items-center bg-white" data-bs-toggle="dropdown">
                   <span class="p-1 px-2 ps-user rounded-circle"><i class="fa-solid fa-user"></i></span>&nbsp;&nbsp;
                   <span style="font-weight:500;"><?php 
        if ($this->session->userdata('userName')) {
            echo $this->session->userdata('userName');
        } else {
            echo "Manager Name";
        }
    ?></span>&nbsp;&nbsp;
                   <i class="fa-solid fa-angle-down"></i>
       
                   </button>
       
                 <span> <i class="fa-solid fa-bell"></i> </span>
       
               </div>
                     
               </div>
        </div><!-----------top-bar-end----------------------->


        <div class="row" style="height: 100vh;"><!----------main-navbar----------->

        <div id="menu-bar" class="col-md-2 ps-gray" style="height: 100vh;"><!----------side-bar-------------------->
         <ul class="d-flex flex-column list-unstyled" style="height: 100vh;">

         <li class="nav-item py-3 fs-6"><a href="#" style="font-weight:400;color:grey;" class="text-decoration-none d-flex p-2">MENU</a></li>

          <li class="py-2">
          <a href="<?=base_url('admindashbord')?>" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2"><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admindashbord</a></li>

          <li class="nav-item py-2">
            <a href="<?=base_url('transactionverification')?>" style="word-break:break-word;font-weight:600;color:black;" class="active-bg rounded-3 text-decoration-none d-flex p-2">
            <i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Transaction verification</a></li>
<!--
          <li class="nav-item py-2"><a href="<?=base_url('members')?>" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2"><i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;Members</a></li>

          <li class="nav-item py-2"><a href="<?=base_url("events")?>" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Events</a></li>

          <li class="nav-item py-2">
            <a href="#" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2"><i class="fa-regular fa-credit-card"></i>&nbsp;&nbsp;Payments</a></li>

          <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Donation</a></li>

          <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Reports</a></li>

          <li class="nav-item py-2">
            <a href="<?=base_url('dashboard/logout')?>" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
    -->
       </ul>          
       
              
         </div><!-----------side-bar-end-------------->
            
         <div class="col-md-10 h-100"><!-----------main-dashboard------------------------->
         
         
         
        <div style="overflow:auto" class="mt-3 px-4"><!----------------table--------------->
        <table class="table table-responsive table-borderless">
            <thead>
            <tr class="ps-gray">
            <th>S.No</th><th>Name</th><th>Email</th><th>Mobile</th><th>Amount</th><th>TransactionId</th><th>Verified status</th><th>Action</th>
            </tr>
            </thead>
            <tbody id="ps-coords">
            <?php if (!empty($donations)): ?>
            <?php foreach ($donations as $index => $donation): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo htmlspecialchars($donation->name); ?></td>
                    <td><?php echo htmlspecialchars($donation->email); ?></td>
                    <td><?php echo htmlspecialchars($donation->phoneno); ?></td>
                    <td><?php echo htmlspecialchars($donation->amount); ?></td>
                    <td><?php echo htmlspecialchars($donation->transactionid); ?></td>
                    <td><?php echo htmlspecialchars($donation->status == 1 ? 'Yes' : 'No'); ?></td>
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
    // Populate modal fields with donation data
    document.getElementById('donationId').value = donation.donation_id;
    document.getElementById('donationName').value = donation.name;
    document.getElementById('donationEmail').value = donation.email;
    document.getElementById('donationMobile').value = donation.phoneno;
    document.getElementById('donationAmount').value = donation.amount;
    document.getElementById('donationTransactionId').value = donation.transactionid;
    document.getElementById('donationVerified').value = donation.status;
}
</script>
        <div class="modal fade" id="editDonationModal" tabindex="-1" role="dialog" aria-labelledby="editDonationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="editDonationForm" action="<?php echo site_url('admin/updateDonation'); ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDonationLabel">Edit Donation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    <input type="hidden" name="id" id="donationId"  >

                    <label>Name</label>
                    <input type="text" name="name" id="donationName" class="form-control">

                    <label>Email</label>
                    <input type="email" name="email" id="donationEmail" class="form-control">

                    <label>Mobile</label>
                    <input type="text" name="mobile" id="donationMobile" class="form-control">

                    <label>Amount</label>
                    <input type="text" name="amount" id="donationAmount" class="form-control">

                    <label>Transaction ID</label>
                    <input type="text" name="transaction_id" id="donationTransactionId" class="form-control">

                    <label>Verified</label>
                    <select name="status" id="donationVerified" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
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
$('#editDonationForm').on('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: $(this).serialize(), // Serialize form data
        dataType: 'json', // Expect JSON response
        success: function(response) {
            console.log('Server Response:', response); // Log server response for debugging

            if (response.status === 'success') {
                alert('Donation updated successfully');
                // Optional: Reload the page to show updated data
                window.location.reload(); // Or redirect to a specific page if needed
            } else {
                alert('Failed to update donation');
            }
        },
        error: function(xhr, status, error) {
            console.log('AJAX Error:', error); // Log any AJAX errors
            alert('An error occurred. Please try again.');
        }
    });
});

</script>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
    
</body>
</html>