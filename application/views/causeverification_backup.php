<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cause verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            padding: 10px;
            border-radius: 20px;
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

        .priority-modal .modal-dialog {
            max-width: 400px;
        }
    </style>
</head>

<body>

<div style="overflow:hidden;position:absolute;" class="container-fluid">
<!---------------------email-send-toast---------------------->
 
<div id='emailsendtoast' style='z-index:2;border:4px solid rgb(132, 250, 132);border-radius:10px;position:absolute;top:10%;right:-380px;transition:0.5s;background-color:rgb(18, 155, 18);' class=' toast show'>
  <div style="border-radius:10px;background-color:rgb(18, 155, 18);" class='toast-header'>
    <strong class='me-auto text-white fs-6'>Success</strong>
    <button type='button' class='btn-close float-end' data-bs-dismiss='toast'></button>
  </div>
  <div id="emailsendstatus" class='toast-body text-white fs-6 py-2'>
    
  </div>
  </div>

<?php if(isset($_SESSION["emailsuccessstatus"])){
     $status = $_SESSION['emailsuccessstatus'];
echo "<script>
       document.getElementById('emailsendstatus').innerHTML = '$status';
       document.getElementById('emailsendtoast').style.right = '50px';
       setTimeout(()=>{
       document.getElementById('emailsendtoast').style.right = '-380px';
       },3000);
       
      </script>"; 

unset($_SESSION["emailsuccessstatus"]);

} 

?>
<!---------------------add-toast-end------------------>

<!---------------------email-error-toast---------------------->

<div id='emailerrortoast' style='z-index:2;border:4px solid rgb(254, 91, 91);border-radius:10px;position:absolute;top:10%;right:-380px;transition:0.5s;background-color:rgb(250,51,51);' class='toast show'>
  <div style="background-color:rgb(250,51,51);" class='toast-header'>
    <strong class='me-auto text-white fs-6'>Error</strong>
    <button type='button' class='btn-close float-end' data-bs-dismiss='toast'></button>
  </div>
  <div id="emailerrormessage" class='toast-body text-white fs-6 py-2'>
    
  </div>
  </div>

<?php 

if(isset($_SESSION["emailerrorstatus"])){
  $status = $_SESSION['emailerrorstatus'];
echo "<script>
       document.getElementById('emailerrormessage').innerHTML = '$status';
       document.getElementById('emailerrortoast').style.right = '50px';
       setTimeout(()=>{
       document.getElementById('emailerrortoast').style.right = '-380px';
       },3000)
       
      </script>"; 

unset($_SESSION["emailerrorstatus"]);

}

?>
<!---------------------email-error-toast-end--------------------->

        <div id="side-bar" class="row"><!-----top-bar--------------->

            <div class="col-md-2 border-bottom ps-gray py-3">

                <div id="kanavuhelplogo" class="ps-logo">

                </div>

            </div>

           
           <!-- <div id="search-bar" class="col-md-10 align-items-center justify-content-between border-bottom" >
              
            </div> -->
            <input type="text" class="form-control col-md-4 mb-3" id="search-input" placeholder="Search..." onkeyup="searchTable()" autocomplete="off">
           <!--  <input type="text"class="col-md-4 align-items-center justify-content-between border-bottom" id="search-input" placeholder="Search..." onkeyup="searchTable()"> -->

            
        </div><!-----------top-bar-end----------------------->


        <div class="row" style="height: 100vh;"><!----------main-navbar----------->

            <div id="menu-bar" class="col-md-2 ps-gray" style="height: 100vh;"><!----------side-bar-------------------->

            </div><!-----------side-bar-end-------------->

            <div style="overflow:auto" class="col-md-10 h-100"><!-----------main-dashboard------------------------->

                <div style="overflow:auto" class="mt-3 px-4"><!----------------table--------------->
                <table class="table table-borderless" id="search_table">
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
           <!--  <th>Cause description</th> -->
            <th>created date</th>
            <th>Created by</th>
            <th>raised amount</th>
            <th>verified status</th>
            <th>Priority</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="causeslist">
        <?php if (!empty($fundraisers)): $i = $sno + 1; ?>
            <?php foreach ($fundraisers as $index => $donation): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo htmlspecialchars($donation->name); ?></td>
                    <td><?php echo htmlspecialchars($donation->email); ?></td>
                    <td><?php echo htmlspecialchars($donation->phone); ?></td>
                    <td><?php echo htmlspecialchars($donation->amount); ?></td>
                    <td><?php echo htmlspecialchars($donation->location); ?></td>
                    <td><?php echo htmlspecialchars($donation->age); ?></td>
                    <td><?php echo htmlspecialchars($donation->end_date); ?></td>
                    <td><button data-bs-toggle="modal" data-bs-target="#viewdocuments" style="outline:none;border:none;" class="bg-transparent text-decoration-underline" onclick="viewDocuments('<?=$donation->cover_image?>')"><?php echo htmlspecialchars($donation->cause_heading); ?></button></td>
                   <!--  <td><?php echo htmlspecialchars($donation->cause_description); ?></td> -->
                    <td><?php echo htmlspecialchars($donation->created_at); ?></td>
                    <td><?php echo htmlspecialchars($donation->created_by); ?></td>
                    <td><?php echo htmlspecialchars($donation->raised_amount); ?></td>
                    <td><?php echo htmlspecialchars($donation->verified == 1 ? 'Yes' : 'No'); ?></td>
                    <td>
                        <?php if ($donation->priority == 0): ?>
                            <span>No Priority</span>
                        <?php else: ?>
                            <span>Priority <?php echo htmlspecialchars($donation->priority); ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="d-flex">
                        <button onclick="editDonation(<?php echo htmlspecialchars(json_encode($donation)); ?>)" class="btn btn-primary fw-bold" data-toggle="modal" data-target="#editDonationModal">
                            Edit
                        </button>  &nbsp;&nbsp;
                        <button onclick="setUrl('<?php echo $donation->email?>','<?php echo $donation->user_id;?>','<?php echo $donation->created_by;?>',<?php echo $donation->Verifyemailcount;?>,<?php echo $donation->Rejectemailcount;?>)" class="btn btn-danger fw-bold" data-toggle="modal" data-target="#sendmail">
                            Status
                        </button> &nbsp;&nbsp; 
                        <button onclick="deleteCause(<?php echo $donation->id; ?>)" class="btn btn-danger fw-bold">
                            Delete
                        </button>&nbsp;&nbsp;
                        <?php if ($this->session->userdata('adminName')): ?>
                            <?php if ($donation->priority == 0): ?>
                                <button class="btn btn-info fw-bold btn-sm insert-priority-btn" data-toggle="modal" data-target="#priorityModal" onclick="setPriorityId(<?php echo $donation->id; ?>)">
                                    Insert Priority
                                </button>
                                <button class="btn btn-warning fw-bold btn-sm no-priority-btn" style="display: none;" onclick="setNoPriority(<?php echo $donation->id; ?>)">
                                    No Priority
                                </button>
                            <?php else: ?>
                                <button class="btn btn-info fw-bold btn-sm insert-priority-btn" style="display: none;" data-toggle="modal" data-target="#priorityModal" onclick="setPriorityId(<?php echo $donation->id; ?>)">
                                    Insert Priority
                                </button>
                                <button class="btn btn-warning fw-bold btn-sm no-priority-btn" onclick="setNoPriority(<?php echo $donation->id; ?>)">
                                    No Priority
                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php ++$i; endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="16" style="text-align: center;">No records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
                </div> <!----------------table-end------->

<!-----------------pagination---------------------->
<div class="d-flex justify-content-center">        
<div class="col-md-6 py-2 d-flex justify-content-around align-items-center">

<?php 

if(isset($counts)){
  if($counts > 0){
  $countsperpage = 5;
  $noofpages = ceil($counts / $countsperpage) - 1;
  $totalpagesarr = createarr($noofpages);
  $totalpages = count($totalpagesarr) ;
  $initialindex = 0;
  $lastindex = 5;
  $pages = array_slice($totalpagesarr,$initialindex,$lastindex);
  echo "<a href='changeCausespagepagesetup?initialindex=0' style='cursor:pointer;' class='text-dark text-decoration-none'><i class='fa-solid fa-arrow-left-long'></i></a>";
  $j = 0;
  foreach ($pages as $key => $value) {
    $count = $countsperpage * $value;
    $pageno = $value + 1;
   
    if($pageno == 5){
      echo "<a style='width:35px;height:35px;' href='changeCausespagepagesetup?initialindex=$value' class='".($j==0 ? 'active-page' : '')." active text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$pageno</a>";}
    else{
      echo "<button style='width:35px;height:35px;' onclick='displayCauses($count,$j)' class='".($j==0 ? 'active-page' : '')." active rounded-circle'>$pageno</button>";
    }
    ++$j;
  }

  echo "<span>...</span>";
  $totalcount = ($totalpages - $lastindex);
  echo "<a href='changeCausespagepagesetup?initialindex=$totalcount' style='cursor:pointer;width:35px;height:35px;box-sizing:border-box;' class='active-page text-white text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$totalpages</a>";
  
  $newindex = $initialindex+$lastindex; 
  echo "<a href='changeCausespagepagesetup?initialindex=$newindex' style='cursor:pointer;' class='text-dark text-decoration-none'><i class='fa-solid fa-arrow-right-long'></i></a>";
}
else{
  echo "<span>No pages available</span>";
}
}

if(isset($initialindex) && isset($newcounts)){
  
  $countsperpage = 5;
  $noofpages = ceil($newcounts / $countsperpage) - 1;
  $totalpagesarr = createarr($noofpages);
  $totalpages = count($totalpagesarr);
  $lastindex = 5;
  $start = $initialindex > $noofpages ? 0 : $initialindex;
  $pages = array_slice($totalpagesarr,$start,$lastindex);
  $start == 0 ? $prevlist = 0 : (($start - $lastindex) < 0 ? $prevlist = 0 : $prevlist = $start - $lastindex) ;
  echo "<a href='changeCausespagepagesetup?initialindex=$prevlist' style='cursor:pointer;' class='text-dark text-decoration-none'><i class='fa-solid fa-arrow-left-long'></i></a>";

  $j = 0;

  foreach ($pages as $key => $value) {
    $count = $countsperpage * $value;
    $pageno = $value + 1;
    
    if($pageno == 5 || $pageno - $start == 5){
      echo $pageno == $totalpages ? "<button style='width:35px;height:35px;'onclick='displayCauses($count,$j)' class='".($j==0 ? 'active-page' : '')." active rounded-circle'>$pageno</button>" : "<a href='changeCausespagepagesetup?initialindex=".($pageno - 1)."' style='cursor:pointer;width:35px;height:35px;box-sizing:border-box;' class='".($j==0 ? 'active-page' : '')." active text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$pageno</a>"; }
    else{
      echo "<button style='width:35px;height:35px;'onclick='displayCauses($count,$j)' class='".($j==0 ? 'active-page' : '')." active rounded-circle'>$pageno</button>";
    }
    ++$j;
  }

  echo "<span>...</span>";
  $totalcount = ($totalpages - $lastindex);
  echo "<a href='changeCausespagepagesetup?initialindex=$totalcount' style='cursor:pointer;width:35px;height:35px;box-sizing:border-box;' class='active-page text-white text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$totalpages</a>";
  
  $newindex = $start + $lastindex; 
  echo "<a href='changeCausespagepagesetup?initialindex=".($totalpages - $start <= $lastindex ? $totalcount : $newindex)."'  style='cursor:pointer;' class='text-decoration-none text-dark'><i class='fa-solid fa-arrow-right-long'></i></a>"; 
}

function createarr($noofpages){
  return range(0,$noofpages);
}

?>

</div>
</div><!--------------pagination-end--------------------->

<!------------------------------send-mail-modal------------------------------>

<div id="sendmail" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
             <h5 id="mailto" class="text-danger">Send Email</h5>
             <button data-dismiss="modal" class="btn btn-close"></button>
          </div>

          <div class="modal-body">
              <div id="statusheading" class="d-flex justify-content-between">

              </div>
              <div contenteditable style="min-height:50px;max-height:max-content;outline:none;"  class="w-100 border p-1" name="sendemail" id="causestatus">

              </div>  
              <div id="sendmailbtn" class="mt-3">
                <button class="btn btn-danger fw-bold">Send</button>
              </div>
          </div>

        </div>
    </div>

</div>

<!------------------------------send-mail-end-------------------------------->

<!-------------------------------mail-data-modal------------------------------>

<div id="emaildata" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
             <h5 class="text-danger">Email sending details:</h5>
             <button data-bs-dismiss="modal" class="btn btn-close"></button>
          </div>

          <div class="modal-body">
              <div id="emaildataheading" class="d-flex justify-content-between">

              </div>
              <div class="w-100">
                <table class="table table-borderred">
                    <thead><tr><th>Sno</th><th>Email count</th><th>Sender</th><th>Sending Date time</th><th>Message</th></tr></thead>
                    <tbody id="emaildatatable">
 
                    </tbody>
                </table>

              </div>  
              <div id="sendmailbtn" class="mt-3">
                <button data-bs-dismiss="modal" class="btn btn-danger fw-bold">Ok</button>
              </div>
          </div>

        </div>
    </div>

</div>

<!-------------------------------mail-data-end-------------------------------->

<!------------------------------send-mail-modal------------------------------>

<div id="viewdocuments" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
             <h5 id="mailto" class="text-danger">Documents</h5>
             <button data-bs-dismiss="modal" class="btn btn-close"></button>
          </div>

          <div class="modal-body">
              <div id="causedocuments" class="row">

              </div>
                
              <div id="sendmailbtn" class="mt-3">
                <button data-bs-dismiss="modal" class="btn btn-danger fw-bold">Close</button>
              </div>
          </div>

        </div>
    </div>

</div>

<!------------------------------send-mail-end-------------------------------->

<!-- Priority Modal -->
<div id="priorityModal" class="modal fade priority-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Insert Priority</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="priorityForm">
                    <input type="hidden" id="priorityId" name="id">
                    <div class="form-group">
                        <label for="priorityValue">Priority Value (1-8 or 0 for No Priority Higher numbers (e.g 8) first priority)</label>
                        <input type="number" class="form-control" id="priorityValue" name="priority" min="0" max="20" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

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
                        document.getElementById('donationUserName').value = donation.username;
                        document.getElementById('donationRaisedAmount').value = donation.raised_amount;
                        document.getElementById('donationVerified').value = donation.verified;
                    }

                    function setPriorityId(id) {
                        console.log('Selected ID:', id); // Debug
                        document.getElementById('priorityId').value = id;
                    }

                    $('#priorityForm').on('submit', function(event) {
                        event.preventDefault();
                        var id = $('#priorityId').val();
                        var priority = $('#priorityValue').val();
                        console.log('ID:', id, 'Priority:', priority);
                        $.ajax({
                            url: 'insert_priority',
                            type: 'POST',
                            data: { id: id, priority: priority },
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === 'success') {
                                    alert('Priority inserted successfully');
                                    $('#priorityModal').modal('hide');
                                    // Update the button text for the specific ID
                                    $('button[onclick*="setPriorityId(' + id + ')"]').text('No Priority');
                                    location.reload(); // Reload to reflect the updated priority in the table
                                } else {
                                    alert('Failed to insert priority: ' + response.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log('AJAX Error:', xhr, status, error);
                                alert('Error occurred while inserting priority');
                            }
                        });
                    });


                    //nopriority
                    function setNoPriority(id) {
                        console.log('Setting No Priority for ID:', id); // Debug
                        $.ajax({
                            url: 'kanavuhelp/set_no_priority', // New controller method
                            type: 'POST',
                            data: { id: id },
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === 'success') {
                                    alert('Priority set to No Priority successfully');
                                    // Update the UI without reloading
                                    var priorityCell = $('button[onclick="setNoPriority(' + id + ')"]').closest('tr').find('td:nth-child(15)');
                                    priorityCell.html('<span>No Priority</span>');
                                    
                                    // Toggle buttons
                                    $('button[onclick="setNoPriority(' + id + ')"]').hide(); // Hide No Priority button
                                    $('button[onclick="setPriorityId(' + id + ')"]').show(); // Show Insert Priority button
                                } else {
                                    alert('Failed to set No Priority: ' + response.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log('AJAX Error:', xhr, status, error);
                                alert('Error occurred while setting No Priority');
                            }
                        });
                    }

                </script>
                <div class="modal fade" id="editDonationModal" tabindex="-1" role="dialog" aria-labelledby="editDonationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                    <h5 class="modal-title" id="editDonationLabel">Edit Causes </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>   
                        </div>

                        <div class="modal-body">
                        <form id="editDonationForm" action="<?php echo site_url('admin/updatecauses'); ?>" method="post">
                               
                               <div class="modal-body">
                                   <input type="hidden" name="id" id="donationId">

                                   <div class="form-group">
                                       <label>Name</label>
                                       <input type="text" name="name" id="donationName" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>Email</label>
                                       <input type="email" name="email" id="donationEmail" class="form-control" readonly required>
                                   </div>

                                   <div class="form-group">
                                       <label>Mobile</label>
                                       <input type="text" name="mobile" id="donationMobile" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>Amount</label>
                                       <input type="number" name="amount" id="donationAmount" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>Location</label>
                                       <input type="text" name="location" id="donationLocation" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>Age</label>
                                       <input type="number" name="age" id="donationAge" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>End Date</label>
                                       <input type="date" name="end_date" id="donationEndDate" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>Cause Heading</label>
                                       <input type="text" name="cause_heading" id="donationCauseHeading" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>Cause Description</label>
                                       <textarea name="cause_description" id="donationCauseDescription" class="form-control" required></textarea>
                                   </div>

                                   <div class="form-group">
                                       <label>Created by</label>
                                       <input type="text" name="username" id="donationUserName" class="form-control" required>
                                   </div>

                                   <div class="form-group">
                                       <label>Raised Amount</label>
                                       <input type="text" name="raised_amount" id="donationRaisedAmount" class="form-control" required>
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
                    
                    </div>
                

<script>

let status = "";

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

    function displayCauses(counts,index){
        activepage = document.querySelectorAll(".active");
        let l = activepage.length;
        for(let i=0; i < l ; i++){
        if(i == index ){
        activepage[i].classList.add("active-page");
        }
        else{
        if(activepage[i].classList.contains("active-page")){
        activepage[i].classList.remove("active-page")
        }
        }   
        }   
        
        $.ajax({
        type:"get",
        url:"admin/displayCauses",
        data:{"count":counts},
        success:function(result){
        document.getElementById('causeslist').innerHTML = result;
        },
        error:function(error){
        document.getElementById('causeslist').innerHTML = error;
        }
        });
    }  

    function viewDocuments(imageUrl){
           document.getElementById("causedocuments").innerHTML = `<div style="width:300px;height:300px;"><a href="assets/individualform_img/${imageUrl}"><img style="width:300px;height:300px;" src="assets/individualform_img/${imageUrl}"></a></div>`; 
    }

    function setUrl(email,id,username,verifycount,rejectcount){
    console.log(id,verifycount,rejectcount);
        document.getElementById("mailto").innerHTML = `Send Mail to <span class='text-dark'>${email}</span>`;
        document.getElementById("causestatus").innerHTML = "";
        let adminname = "<?php echo $this->session->userdata("adminName");?>";
        document.getElementById("statusheading").innerHTML = `<span class="text-danger h5">Verification Status</span>
                <div>
                <input hidden type="radio" id='useridforemail' value='${id}'>
                <label data-bs-toggle="modal" data-bs-target="#emaildata" type="button" onclick="showVerifyemaildata(${id})" for="verified" class="text-success h5">Verified [${verifycount}]</label> <input onclick="setAutomail(this,'${username}')" value="verified" type="radio" name="status">  
                <label data-bs-toggle="modal" data-bs-target="#emaildata" onclick="showRejectemaildata(${id})" role="button" for="verified" class="text-warning h5">Rejected [${rejectcount}]</label> <input onclick="setAutomail(this,'${username}')" value="unverified" type="radio" name="status"></div>`;
        document.getElementById("sendmailbtn").innerHTML = `<button onclick='sendEmail("${email}","${username}","${adminname}")' class='btn btn-danger'>Send</button>`;
    }

    function sendEmail(email,username,adminname){
        let message = document.getElementById("causestatus").innerText;
        let userid = document.getElementById("useridforemail").value;
        let a = document.createElement("a");
        a.href = `sendcauseVerficationstatus?email=${email}&message=${message}&userid=${userid}&username=${username}&adminname=${adminname}&status=${status}`;
        a.dispatchEvent(new MouseEvent("click"));
    }


    function setAutomail(mailfor,username){
        status = mailfor.value;
        if(status == "verified"){
        document.getElementById("causestatus").innerHTML = `<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        </head>
        <body>
        <p>Hai!, <span class="text-success">${username}</span></p> \n Proudly <span class='text-success'>verified!</span> Your donations are safe and secure. Join us in making a change.Verified for your peace of mind. Every donation counts. Let's make a difference together.
        </body>
        </html>
        `;
        }
        else{
            document.getElementById("causestatus").innerHTML = `<p>Hai!, <span class="text-success">${username}</span></p>Help us verify our cause! Please provide the necessary documentation to ensure your trust. Your support is crucial.We need your help! To strengthen our credibility, we require specific documents. Let's work together to make a difference.`;
        }
    }


    function showVerifyemaildata(id){
        console.log(id)
        $.ajax({
        type:"get",
        url:"admin/showEmaildata",
        data:{"userid":id,"status":"verified"},
        success:function(result){
        document.getElementById('emaildatatable').innerHTML = result;
        },
        error:function(error){
        document.getElementById('emaildatatable').innerHTML = error;
        }
        });    
    }

    function showRejectemaildata(id){
        $.ajax({
        type:"get",
        url:"admin/showEmaildata",
        data:{"userid":id,"status":"unverified"},
        success:function(result){
        document.getElementById('emaildatatable').innerHTML = result;
        },
        error:function(error){
        document.getElementById('emaildatatable').innerHTML = "";
        }
        });    
    }
    

    /* delete the cause*/

function deleteCause(userId) {
    if (confirm('Are you sure you want to delete this cause?')) {
        $.ajax({
            url: '<?php echo site_url('kanavuhelp/deleteCause'); ?>',
            type: 'POST',
            data: {id: userId},
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    alert(response.message);
                    location.reload();
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Error in deleting the cause!');
            }
        });
    }
}


/* const input = document.getElementById("search-input");
input.addEventListener("input",function(){
    const searchValue=this.value.toLowerCase();
    const rows=document.querySelectorAll("#table tbody tr");
    rows.foreach(row=>{
        const cells=row.querySelectorAll("td");
        let containsValue=fasle;
        cells.foreach(cell=>{
            if(cell.textContent.toLowerCase().includes(searchValue)){
                containsValue=true;
            }
        });
        if(containsValue){row.style.display="";}
        else{row.style.display="none";}
    })
}) */

function searchTable() {
      const input = document.getElementById("search-input").value.toLowerCase();
      const table = document.getElementById("search_table");
      const tr = table.getElementsByTagName("tr");

      for (let i = 1; i < tr.length; i++) {
        let rowText = tr[i].textContent.toLowerCase();
        tr[i].style.display = rowText.includes(input) ? "" : "none";
      }
    }

</script>             

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>