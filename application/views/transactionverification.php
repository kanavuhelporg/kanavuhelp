<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransactionVerification</title>
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

      #bg-transaction{
        background-color:rgb(248, 245, 245);}

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

<?php  if(isset($_SESSION["transactionemailsuccessstatus"])){
     $status = $_SESSION['transactionemailsuccessstatus'];
echo "<script>
       document.getElementById('emailsendstatus').innerHTML = '$status';
       document.getElementById('emailsendtoast').style.right = '50px';
       setTimeout(()=>{
       document.getElementById('emailsendtoast').style.right = '-380px';
       },3000);
       
      </script>"; 

unset($_SESSION["transactionemailsuccessstatus"]);

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

if(isset($_SESSION["transactionemailerrorstatus"])){
  $status = $_SESSION['transactionemailerrorstatus'];
echo "<script>
       document.getElementById('emailerrormessage').innerHTML = '$status';
       document.getElementById('emailerrortoast').style.right = '50px';
       setTimeout(()=>{
       document.getElementById('emailerrortoast').style.right = '-380px';
       },3000)
       
      </script>"; 

unset($_SESSION["transactionemailerrorstatus"]);

}

?>
<!---------------------email-error-toast-end--------------------->
      
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
        <table class="table table-borderless">
            <thead>
            <tr class="ps-gray">
            <th>S.No</th><th>Category</th><th>Cause Heading</th><th>Donar Name</th><th>Donar Email</th><th>Donar Mobile</th><th>Donation Amount</th><th>TransactionId</th><th>Fundraiser_id</th><th>Fundraiser_name</th><th>Fundraiser_email</th><th>Fundraiser_phone</th><th>Verified status</th><th>Action</th>
            </tr>
            </thead>
            <tbody id="verificationlist">
            <?php if (!empty($donations)): $i = $sno + 1;?>
            <?php foreach ($donations as $index => $donation): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo htmlspecialchars($donation->category); ?></td>
                    <td><?php echo htmlspecialchars($donation->cause_heading); ?></td>
                    <td><?php echo htmlspecialchars($donation->name); ?></td>
                    <td><?php echo htmlspecialchars($donation->email); ?></td>
                    <td><?php echo htmlspecialchars($donation->phoneno); ?></td>
                    <td><?php echo htmlspecialchars($donation->amount); ?></td>
                    <td><?php echo htmlspecialchars($donation->transactionid); ?></td>
                    <td><?php echo htmlspecialchars($donation->fundraiser_id); ?></td>
                    <td><?php echo htmlspecialchars($donation->fundraiser_name); ?></td>
                    <td><?php echo htmlspecialchars($donation->fundraiser_email); ?></td>
                    <td><?php echo htmlspecialchars($donation->fundraiser_phone); ?></td>
                    <td><?php echo htmlspecialchars($donation->status == 1 ? 'Yes' : 'No'); ?></td>
                    <td class="d-flex">
                    <button onclick="editDonation(<?php echo htmlspecialchars(json_encode($donation)); ?>)" class="btn btn-primary fw-bold" data-toggle="modal" data-target="#editDonationModal">
                    Edit
                    </button>&nbsp;&nbsp;
                    <button onclick="setUrl(<?php echo htmlspecialchars(json_encode($donation)); ?>)" class="btn btn-danger fw-bold" data-toggle="modal" data-target="#sendmail">
                    Status
                    </button>
                    </td>
                </tr>
            <?php ++$i; endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="12" style="text-align: center;">No records found.</td>
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
  echo "<a href='changeVerificationpagesetup?initialindex=0' style='cursor:pointer;' class='text-dark text-decoration-none'><i class='fa-solid fa-arrow-left-long'></i></a>";
  $j = 0;
  foreach ($pages as $key => $value) {
    $count = $countsperpage * $value;
    $pageno = $value + 1;
   
    if($pageno == 5){
      echo "<a style='width:35px;height:35px;' href='changeVerificationpagesetup?initialindex=$value' class='".($j==0 ? 'active-page' : '')." active text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$pageno</a>";}
    else{
      echo "<button style='width:35px;height:35px;' onclick='displayVerificationpage($count,$j)' class='".($j==0 ? 'active-page' : '')." active rounded-circle'>$pageno</button>";
    }
    ++$j;
  }

  echo "<span>...</span>";
  $totalcount = ($totalpages - $lastindex);
  echo "<a href='changeVerificationpagesetup?initialindex=$totalcount' style='cursor:pointer;width:35px;height:35px;box-sizing:border-box;' class='active-page text-white text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$totalpages</a>";
  
  $newindex = $initialindex+$lastindex; 
  echo "<a href='changeVerificationpagesetup?initialindex=$newindex' style='cursor:pointer;' class='text-dark text-decoration-none'><i class='fa-solid fa-arrow-right-long'></i></a>";
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
  echo "<a href='changeVerificationpagesetup?initialindex=$prevlist' style='cursor:pointer;' class='text-dark text-decoration-none'><i class='fa-solid fa-arrow-left-long'></i></a>";

  $j = 0;

  foreach ($pages as $key => $value) {
    $count = $countsperpage * $value;
    $pageno = $value + 1;
    
    if($pageno == 5 || $pageno - $start == 5){
      echo $pageno == $totalpages ? "<button style='width:35px;height:35px;'onclick='displayVerificationpage($count,$j)' class='".($j==0 ? 'active-page' : '')." active rounded-circle'>$pageno</button>" : "<a href='changeVerificationpagesetup?initialindex=".($pageno - 1)."' style='cursor:pointer;width:35px;height:35px;box-sizing:border-box;' class='".($j==0 ? 'active-page' : '')." active text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$pageno</a>"; }
    else{
      echo "<button style='width:35px;height:35px;'onclick='displayVerificationpage($count,$j)' class='".($j==0 ? 'active-page' : '')." active rounded-circle'>$pageno</button>";
    }
    ++$j;
  }

  echo "<span>...</span>";
  $totalcount = ($totalpages - $lastindex);
  echo "<a href='changeVerificationpagesetup?initialindex=$totalcount' style='cursor:pointer;width:35px;height:35px;box-sizing:border-box;' class='active-page text-white text-decoration-none d-flex align-items-center justify-content-center ps-gray rounded-circle'>$totalpages</a>";
  
  $newindex = $start + $lastindex; 
  echo "<a href='changeVerificationpagesetup?initialindex=".($totalpages - $start <= $lastindex ? $totalcount : $newindex)."'  style='cursor:pointer;' class='text-decoration-none text-dark'><i class='fa-solid fa-arrow-right-long'></i></a>"; 
}

function createarr($noofpages){
  return range(0,$noofpages);
}
?>

</div>
</div><!--------------pagination-end--------------------->

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
              <div contenteditable style="min-height:50px;max-height:max-xontent;outline:none;"  class="w-100 border p-1" name="sendemail" id="transactionstatus">

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



<script>

let status = "";

$.ajax({
      type:"get",
      url:"admin/sidemenu",
      success:(result)=>{
           document.getElementById("menu-bar").innerHTML = result;
          //  document.getElementById("bg-transaction").backgroundColor = "rgb(248, 245, 245)";
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
                alert('The status you choosed is already updated');
            }
        },
        error: function(xhr, status, error) {
            console.log('AJAX Error:', error); // Log any AJAX errors
            alert('An error occurred. Please try again.');
        }
    });
});

function displayVerificationpage(counts,index){

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
url:"admin/displayVerificationpage",
data:{"count":counts},
success:function(result){
document.getElementById('verificationlist').innerHTML = result;
},
error:function(error){
document.getElementById('verificationlist').innerHTML = error;
}
});
} 


function setUrl(donation) {

  document.getElementById("mailto").innerHTML = `Send Mail to <span class='text-dark'>${donation.email}</span>`;
        document.getElementById("transactionstatus").innerHTML = "";
        let adminname = "<?php echo $this->session->userdata("adminName");?>";
        document.getElementById("statusheading").innerHTML = `<span class="text-danger h5">Verification Status</span>
                <div>
                <input hidden type="radio" id='useridforemail' value='${donation.donation_id}'>
                <label data-bs-toggle="modal" data-bs-target="#emaildata" type="button" onclick="showVerifyemaildata(${donation.donation_id})" for="verified" class="text-success h5">Verified [${donation.Verifyemailcount}]</label>&nbsp;<input onclick="setAutomail(this,'${donation.name}','${donation.transactionid}')" value="verified" type="radio" name="status">&nbsp;&nbsp;
                <label data-bs-toggle="modal" data-bs-target="#emaildata" onclick="showRejectemaildata(${donation.donation_id})" role="button" for="verified" class="text-warning h5">Rejected [${donation.Rejectemailcount}]</label>&nbsp;<input onclick="setAutomail(this,'${donation.name}','${donation.transactionid}')" value="unverified" type="radio" name="status"></div>`;
        document.getElementById("sendmailbtn").innerHTML = `<button onclick='sendEmail("${donation.donation_id}","${donation.email}","${donation.name}","${adminname}")' class='btn btn-danger'>Send</button>`;
    }

    function sendEmail(donationid,email,donarname,adminname){
        let message = document.getElementById("transactionstatus").innerText;
        let a = document.createElement("a");
        a.href = `sendtransactionVerficationstatus?email=${email}&message=${message}&donationid=${donationid}&donarname=${donarname}&adminname=${adminname}&status=${status}`;
        a.dispatchEvent(new MouseEvent("click"));
        let userid = document.getElementById("useridforemail").value;
       /*  let a = document.createElement("a");
        a.href = `sendcauseVerficationstatus?email=${email}&message=${message}&userid=${userid}&username=${username}&adminname=${adminname}&status=${status}`;
        a.dispatchEvent(new MouseEvent("click")); */
    }


    function setAutomail(mailfor,donarname,transactionid){
        status = mailfor.value;
        if(status == "verified"){
        document.getElementById("transactionstatus").innerHTML = `
        <p>Hai! <span class="text-success">${donarname}</span>, We sincerely appreciate your generous support for the Kanavu Help campaign. Your transaction has been successfully recorded. Your transaction ID is [${transactionid}].
        </p>
        `;
        }
        else{
            document.getElementById("transactionstatus").innerHTML = `<p>Hai! <span class="text-success">${donarname}</span>, The transaction ID provided does not match our records. Please verify and try again.
</p>`;
        }
    }

    function showVerifyemaildata(donationid){
        console.log(donationid);
        $.ajax({
        type:"get",
        url:"admin/showtransactionEmaildata",
        data:{"donationid":donationid,"status":"verified"},
        success:function(result){
        document.getElementById('emaildatatable').innerHTML = result;
        },
        error:function(error){
        document.getElementById('emaildatatable').innerHTML = error;
        }
        });    
    }

    function showRejectemaildata(donationid){
        $.ajax({
        type:"get",
        url:"admin/showtransactionEmaildata",
        data:{"donationid":donationid,"status":"unverified"},
        success:function(result){
        document.getElementById('emaildatatable').innerHTML = result;
        },
        error:function(error){
        document.getElementById('emaildatatable').innerHTML = "";
        }
        });    
    }

</script>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
    
</body>
</html>