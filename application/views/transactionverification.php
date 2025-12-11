<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Verification</title>
    <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg"  rel="icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            background-color: red;
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

        ul > li {
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

        #coords-form div > input {
            border-radius: 50px;
            border: 1px solid rgb(208, 205, 205);
            outline: none;
            padding: 13px 0;
        }

        #coords-form div > button {
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

        #bg-transaction {
            background-color: rgb(248, 245, 245);
        }

        /* Pagination style  */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 5px;
            flex-wrap: wrap;
        }

        .pagination .page-item .page-link {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            padding: 0;
            text-align: center;
            line-height: 40px;
            border: none;
            background-color: #f0f0f0;
            color: #000;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pagination .page-item.active .page-link {
            background-color: #0A517F;
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #f0f0f0;
            color: #ccc;
            cursor: not-allowed;
        }

        /* Table style */
        .table-container {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .table {
            min-width: 1200px;
            width: 100%;
        }

        .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: middle;
            max-width: 200px; /* Limit column width */
        }

        .table th {
            background-color: #f8f5f5;
            color: #000;
            font-weight: 500;
            white-space: nowrap;
        }

        #menu-bar ul {
            margin-bottom: 8px;
        }

        #menu-bar .nav-link {
            padding: 10px 15px;
            border-radius: 6px;
            display: block;
        }

        #menu-bar .nav-link.active {
            background-color: red;
            color: #fff !important;
        }

        /* Main content centering */
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        /* Mobile styles */
        .ham-menu {
            cursor: pointer;
            background: none;
            border: none;
            padding: 5px;
        }

        .offcanvas-sidebar {
            background-color: rgb(248, 245, 245);
        }

        .offcanvas-sidebar .nav-link {
            color: black;
            font-weight: 400;
        }

        .offcanvas-sidebar .nav-link.active {
            background-color: red;
            color: white !important;
        }

        /* FIXED: Tablet screen sidebar issue - Updated breakpoints */
        @media screen and (max-width: 991px) {
            #menu-bar {
                display: none;
            }
            
            #search-bar {
                display: none;
            }
            
            #name_notification {
                display: none;
            }

            .ps-logo {
                justify-content: space-between;
            }

            #add-coords-form div > input {
                padding: 5px;
            }

            #add-coords-form {
                width: 90%;
                padding: 8%;
            }

            /* Improved mobile table styles */
            .table-container {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                border: 1px solid #dee2e6;
                border-radius: 0.375rem;
            }
            
            .table {
                margin-bottom: 0;
            }
            
            .main-content {
                padding: 10px;
            }
            
            /* Improved pagination for mobile */
            .pagination {
                gap: 3px;
            }
            
            .pagination .page-item .page-link {
                width: 35px;
                height: 35px;
                line-height: 35px;
                font-size: 14px;
            }
        }

        @media screen and (min-width: 992px) {
            .ham-menu {
                display: none;
            }
            #name_notification {
                display: none;
            }
        }

        /* Toast styles */
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1100;
            max-width: 350px;
        }
        
        .action-buttons {
            display: flex;
            gap: 5px;
            flex-wrap: nowrap;   
            justify-content: center;
            align-items: center;
        }

        
        .action-buttons .btn {
            font-size: bold;
            padding: 10px;                              
        }
        
        /* Mobile-specific table improvements */
        @media screen and (max-width: 768px) {
            .table th, .table td {
                padding: 8px 5px;
                font-size: 12px;
            }
            
            .action-buttons .btn {
                font-size: 10px;
                padding: 3px 6px;
            }
            
            .main-content {
                padding: 5px;
            }
        }
        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <!---------------------email-send-toast---------------------->
        <?php if (isset($_SESSION["transactionemailsuccessstatus"])): ?>
            <div id='emailsendtoast' class='toast show' role="alert" aria-live="assertive" aria-atomic="true">
                <div class='toast-header' style="background-color:rgb(18, 155, 18);">
                    <strong class='me-auto text-white fs-6'>Success</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label="Close"></button>
                </div>
                <div id="emailsendstatus" class='toast-body text-white fs-6 py-2'>
                    <?= htmlspecialchars($_SESSION['transactionemailsuccessstatus'], ENT_QUOTES, 'UTF-8') ?>
                </div>
            </div>

            <script>
                $(document).ready(function(){
                    $('.toast').toast('show');
                    setTimeout(() => {
                        $('.toast').toast('hide');
                    }, 3000);
                });
            </script>

            <?php unset($_SESSION["transactionemailsuccessstatus"]); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION["transactionemailerrorstatus"])): ?>
            <div id='emailerrortoast' class='toast show' role="alert" aria-live="assertive" aria-atomic="true">
                <div class='toast-header' style="background-color:rgb(250, 51, 51);">
                    <strong class='me-auto text-white fs-6'>Error</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label="Close"></button>
                </div>
                <div id="emailerrormessage" class='toast-body text-white fs-6 py-2'>
                    <?= htmlspecialchars($_SESSION['transactionemailerrorstatus'], ENT_QUOTES, 'UTF-8') ?>
                </div>
            </div>

            <script>
                $(document).ready(function(){
                    $('.toast').toast('show');
                    setTimeout(() => {
                        $('.toast').toast('hide');
                    }, 3000);
                });
            </script>

            <?php unset($_SESSION["transactionemailerrorstatus"]); ?>
        <?php endif; ?>
        <!---------------------email-error-toast-end--------------------->

        <div class="row"><!-----top-bar--------------->
            <div class="col-lg-2 col-12 border-bottom ps-gray py-3">
                <div class="ps-logo">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" class="ham-menu ms-4 border-0 bg-transparent">
                        <div class="ham-line"></div>
                        <div class="ham-line"></div>
                        <div class="ham-line"></div>
                    </button>
                    <div class="d-flex align-items-center">
                        <span class="rounded-circle text-white px-2 ps-letter">K</span>&nbsp;
                        <span class="heading-ponsoft fs-5 position-relative" style="top:1px; color:red;">KANAVUHELP</span>
                    </div>
                </div>
            </div>
            
            <div id="search-bar" class="col-lg-10 col-12 d-flex align-items-center justify-content-between border-bottom">
                <div class="col-lg-7 ms-4 d-flex align-items-baseline justify-content-between">
                    <!-- Search bar can be added here if needed -->
                </div>

                <div class="col-lg-3 d-none d-lg-flex align-items-baseline justify-content-evenly">
                    <button style="outline-style:none;" class="drop-down-toggle border-0 d-flex align-items-center bg-white" data-bs-toggle="dropdown">
                        <span class="p-1 px-2 ps-user rounded-circle"><i class="fa-solid fa-user"></i></span>&nbsp;&nbsp;
                        <span style="font-weight:500;">
                            <?php
                            if (!isset($_SESSION)) {
                                session_start();
                            }
                            if ($this->session->userdata('adminName')) {
                                echo $this->session->userdata('adminName');
                            } else {
                                echo "Manager Name";
                            }
                            ?>
                        </span>&nbsp;&nbsp;
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                    
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-decoration-none" style="font-weight:400;color:black;"
                                data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout
                            </a>
                        </li>
                    </ul>
                    
                    <!-- <span class="d-flex justify-content-center">
                        <i class="fa-solid fa-bell"></i>&nbsp;
                        <div style="width:30px;height:30px;background-color:red;color:white;margin-top:-15px;" class="rounded-circle d-flex justify-content-center align-items-center">
                            <?php if($this->session->userdata('unverifiedtransactions') > 0){echo $this->session->userdata("unverifiedtransactions");}?>
                        </div>
                    </span> -->
                </div>
            </div>
        </div><!-----------top-bar-end----------------------->

        <div class="row" style="min-height: calc(100vh - 72px);"><!----------main-navbar----------->
            <!----------side-bar-------------------->
            <div id="menu-bar" class="col-lg-2 ps-gray d-none d-lg-block">
                <ul class="d-grid list-unstyled">
                    <li class="nav-item py-3 fs-6">
                        <a href="#" style="font-weight:400;color:grey;" class="nav-link text-decoration-none">MENU</a>
                    </li>
                    
                    <li class="nav-item py-2">
                        <a href="<?= base_url('admindashbord') ?>"
                          class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admindashbord') ? 'active' : '' ?>"
                          style="font-weight:400;color:black;">
                          <i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admin Dashboard
                        </a>
                    </li>
                    
                    <li class="nav-item py-2">
                        <a href="<?= base_url('transactionverification') ?>"
                          class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'transactionverification') ? 'active' : '' ?>"
                          style="font-weight:400;color:black;">
                          <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Transaction
                        </a>
                    </li>
                    
                    <li class="nav-item py-2">
                        <a href="<?= base_url('contact_submissions') ?>"
                          class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'contact_submissions') ? 'active' : '' ?>"
                          style="font-weight:400;color:black;">
                          <i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Enquiries
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="<?= base_url('causesverification') ?>"
                          class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'causesverification') ? 'active' : '' ?>"
                          style="font-weight:400;color:black; border-radius: 10px;">
                          <i class="fa-solid fa-hand-holding-medical"></i>&nbsp;&nbsp;Causes verification
                        </a>
                    </li>
                    
                    <li class="nav-item py-2">
                        <a href="#" class="nav-link text-decoration-none" style="font-weight:400;color:black;"
                          data-bs-toggle="modal" data-bs-target="#logoutModal">
                          <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!----------Offcanvas Sidebar for Mobile ------------->
            <div class="offcanvas offcanvas-start offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasSidebarLabel">MENU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <ul class="d-grid list-unstyled">
                        <li class="nav-item py-3 fs-6 px-3">
                            <a href="#" style="font-weight:400;color:grey;" class="nav-link text-decoration-none">MENU</a>
                        </li>
                        
                        <li class="nav-item py-2 px-3">
                            <a href="<?= base_url('admindashbord') ?>"
                              class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admindashbord') ? 'active' : '' ?>"
                              style="font-weight:400;color:black;">
                              <i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admin Dashboard
                            </a>
                        </li>
                        
                        <li class="nav-item py-2 px-3">
                            <a href="<?= base_url('transactionverification') ?>"
                              class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'transactionverification') ? 'active' : '' ?>"
                              style="font-weight:400;color:black;">
                              <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Transaction
                            </a>
                        </li>
                        
                        <li class="nav-item py-2 px-3">
                            <a href="<?= base_url('contact_submissions') ?>"
                              class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'contact_submissions') ? 'active' : '' ?>"
                              style="font-weight:400;color:black;">
                              <i class="fa-solid fa-envelope-open-text"></i>&nbsp;&nbsp;Enquiries
                            </a>
                        </li>
                        
                        <li class="nav-item px-3">
                            <a href="<?= base_url('causesverification') ?>"
                              class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'causesverification') ? 'active' : '' ?>"
                              style="font-weight:400;color:black; border-radius: 10px;">
                              <i class="fa-solid fa-hand-holding-medical"></i>&nbsp;&nbsp;Causes verification
                            </a>
                        </li>
                        
                        <li class="nav-item py-2 px-3">
                            <a href="#" class="nav-link text-decoration-none" style="font-weight:400;color:black;"
                              data-bs-toggle="modal" data-bs-target="#logoutModal">
                              <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-----------main-dashboard------------------------->
            <div class="col-lg-10 col-12 main-content">
                <div class="container-fluid px-3 px-md-4 pt-3 w-100">
                    <!-- Search box -->
                    <div class="row mb-3">
                        <div class="col-md-4 position-relative">
                            <input type="text" 
                                id="search-input" 
                                class="form-control pe-5" 
                                placeholder="Search transactions...">
                            
                            <button id="clear-filter" 
                                    class="btn position-absolute end-0 start-2 top-50 translate-middle-y" 
                                    style="display: none; background: none; border: none; margin-right: 10px;">
                                <i class="fas fa-times text-danger"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Updated table container -->
                    <div class="table-container">
                        <table class="table table-bordered table-hover w-100">
                            <thead>
                                <tr class="ps-gray">
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Cause Heading</th>
                                    <th>Donor Name</th>
                                    <th>Donor Email</th>
                                    <th>Donor Mobile</th>
                                    <th>Donation Amount</th>
                                    <th>TransactionId</th>
                                    <th>Fundraiser_id</th>
                                    <th>Fundraiser_name</th>
                                    <th>Fundraiser_email</th>
                                    <th>Fundraiser_phone</th>
                                    <th>Verified status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="donations-tbody">
                                <?php if (!empty($donations)): ?>
                                    <?php foreach ($donations as $index => $donation): ?>
                                        <tr>
                                            <td><?= $index + 1; ?></td>
                                            <td><?= htmlspecialchars($donation->category); ?></td>
                                            <!-- ✅ Tooltip added only for Cause Heading -->
                                            <td>
                                                <span class="truncate"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom"
                                                    data-bs-html="true"
                                                    title="<?= htmlspecialchars($donation->cause_heading); ?>">
                                                    <?= htmlspecialchars($donation->cause_heading); ?>
                                                </span>
                                            </td>


                                            <td><?= htmlspecialchars($donation->name); ?></td>
                                            <td><?= htmlspecialchars($donation->email); ?></td>
                                            <td><?= htmlspecialchars($donation->phoneno); ?></td>
                                            <td><?= htmlspecialchars($donation->amount); ?></td>
                                            <td><?= htmlspecialchars($donation->transactionid); ?></td>
                                            <td><?= htmlspecialchars($donation->fundraiser_id); ?></td>
                                            <td><?= htmlspecialchars($donation->fundraiser_name); ?></td>
                                            <td><?= htmlspecialchars($donation->fundraiser_email); ?></td>
                                            <td><?= htmlspecialchars($donation->fundraiser_phone); ?></td>
                                            <td><?= $donation->status == 1 ? 'Yes' : 'No'; ?></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button onclick="editDonation(<?= htmlspecialchars(json_encode($donation)); ?>)" 
                                                            class="btn btn-primary btn-sm fw-bold" 
                                                            data-toggle="modal" data-target="#editDonationModal">Edit</button>
                                                    <button onclick="setUrl(<?= htmlspecialchars(json_encode($donation)); ?>)" 
                                                            class="btn btn-warning btn-sm fw-bold" 
                                                            data-toggle="modal" data-target="#sendmail">Status</button>
                                                    <button onclick="deleteDonation(<?= $donation->donation_id; ?>)" 
                                                            class="btn btn-danger btn-sm fw-bold">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr id="no-results"><td colspan="14" class="text-center">No records found.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Pagination" class="mt-3" id="pagination-nav" style="display: none;">
                        <ul class="pagination" id="pagination-ul">
                            <!-- Pagination links will be dynamically generated here -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <style>
        .tooltip.show .tooltip-inner {
            background-color: #1e1e1e !important;
            color: #fff !important;
            font-size: 13px !important;
            border-radius: 6px !important;
            padding: 6px 10px !important;
            max-width: 160px !important;   /* Critical for correct shape */
            white-space: normal !important; /* Allows 2-line text */
            text-align: center !important;
        }

        .tooltip.show .tooltip-arrow::before {
            border-bottom-color: #1e1e1e !important;
        }
    </style>

    <!----------Logout Modal ------------->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('admin/logout') ?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!----------Edit Donation Modal ------------->
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
                        <input type="hidden" name="id" id="donationId">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="donationName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="donationEmail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="text" name="mobile" id="donationMobile" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="text" name="amount" id="donationAmount" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Transaction ID</label>
                            <input type="text" name="transaction_id" id="donationTransactionId" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Verified</label>
                            <select name="status" id="donationVerified" class="form-control">
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

    <!----------Send Mail Modal ------------->
    <div id="sendmail" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="mailto" class="text-danger">Send Email</h5>
                    <button data-dismiss="modal" class="btn btn-close"></button>
                </div>
                <div class="modal-body">
                    <div id="statusheading" class="d-flex justify-content-between mb-3">
                    </div>
                    <div contenteditable style="min-height:50px;max-height:max-content;outline:none;" class="w-100 border p-3" name="sendemail" id="transactionstatus">
                    </div>  
                    <div id="sendmailbtn" class="mt-3">
                        <button class="btn btn-danger fw-bold">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------Email Data Modal ------------->
    <div id="emaildata" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-danger">Email sending details:</h5>
                    <button data-bs-dismiss="modal" class="btn btn-close"></button>
                </div>
                <div class="modal-body">
                    <div id="emaildataheading" class="d-flex justify-content-between mb-3">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        let status = "";

        // Delete donation function
        function deleteDonation(donation_id) {
            console.log('Deleting donation with ID:', donation_id);

            if (confirm('Are you sure you want to delete this donation?')) {
                $.ajax({
                    url: '<?php echo site_url(). 'admin/delete_donation'; ?>',
                    type: 'POST',
                    data: { donation_id: donation_id },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            alert('Donation deleted successfully!');
                            location.reload();
                        } else {
                            alert('Error deleting donation.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('AJAX Error:', error);
                        alert('Something went wrong.');
                    }
                });
            }
        }

        // Edit donation function
        function editDonation(donation) {
            document.getElementById('donationId').value = donation.donation_id;
            document.getElementById('donationName').value = donation.name;
            document.getElementById('donationEmail').value = donation.email;
            document.getElementById('donationMobile').value = donation.phoneno;
            document.getElementById('donationAmount').value = donation.amount;
            document.getElementById('donationTransactionId').value = donation.transactionid;
            document.getElementById('donationVerified').value = donation.status;
        }

        // Form submission for edit
        $('#editDonationForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    console.log('Server Response:', response);
                    if (response.status === 'success') {
                        alert('Donation updated successfully');
                        window.location.reload();
                    } else {
                        alert('The status you choosed is already updated');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('AJAX Error:', error);
                    alert('An error occurred. Please try again.');
                }
            });
        });

       // In your view JavaScript, update the sendEmail function:
function sendEmail(donationid, email, donarname, adminname, transactionid, amount) {
    let message = document.getElementById("transactionstatus").innerText;
    let a = document.createElement("a");
    a.href = `sendtransactionVerficationstatus?email=${email}&message=${message}&donationid=${donationid}&donarname=${donarname}&adminname=${adminname}&status=${status}&transactionid=${transactionid}&amount=${amount}`;
    a.dispatchEvent(new MouseEvent("click"));
}


// Update the setUrl function to include transactionid:
function setUrl(donation) {
    document.getElementById("mailto").innerHTML = `Send Mail to <span class='text-dark'>${donation.email}</span>`;
    document.getElementById("transactionstatus").innerHTML = "";
    let adminname = "<?php echo $this->session->userdata("adminName");?>";
    document.getElementById("statusheading").innerHTML = `<span class="text-danger h5">Verification Status</span>
            <div>
            <input hidden type="radio" id='useridforemail' value='${donation.donation_id}'>
            <label data-bs-toggle="modal" data-bs-target="#emaildata" type="button" onclick="showVerifyemaildata(${donation.donation_id})" for="verified" class="text-success h5">Verified [${donation.Verifyemailcount}]</label>&nbsp;<input onclick="setAutomail(this,'${donation.name}','${donation.transactionid}')" value="verified" type="radio" name="status">&nbsp;&nbsp;
            <label data-bs-toggle="modal" data-bs-target="#emaildata" onclick="showRejectemaildata(${donation.donation_id})" role="button" for="verified" class="text-warning h5">Rejected [${donation.Rejectemailcount}]</label>&nbsp;<input onclick="setAutomail(this,'${donation.name}','${donation.transactionid}')" value="unverified" type="radio" name="status"></div>`;
    document.getElementById("sendmailbtn").innerHTML = `<button onclick='sendEmail("${donation.donation_id}","${donation.email}","${donation.name}","${adminname}","${donation.transactionid}","${donation.amount}")' class='btn btn-danger'>Send</button>
`;
}

        // Set auto mail content
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

        // Show verify email data
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

        // Show reject email data
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

        // Search functionality
        document.getElementById("search-input").addEventListener("keyup", function(e) {
            if (e.key === "Enter") {
                let value = this.value.trim();
                window.location.href = "?page=1&search=" + encodeURIComponent(value);
            }
        });

        // Clear search
        let clearBtn = document.getElementById("clear-filter");
        if (clearBtn) {
            clearBtn.addEventListener("click", function () {
                window.location.href = "?page=1";
            });
        }

        // Active link highlighting
        document.addEventListener("DOMContentLoaded", function () {
            const currentUrl = window.location.href;
            const navLinks = document.querySelectorAll("#menu-bar .nav-link, #offcanvasSidebar .nav-link");

            navLinks.forEach(l => l.classList.remove("active"));

            navLinks.forEach(link => {
                if (currentUrl.includes(link.getAttribute('href'))) {
                    link.classList.add("active");
                }
            });
        });

        // Pagination and search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tbody = document.getElementById('donations-tbody');
            const rows = Array.from(tbody.querySelectorAll('tr')).filter(row => !row.id.includes('no-results'));
            const searchInput = document.getElementById('search-input');
            const clearSearch = document.getElementById('clear-filter');
            const paginationNav = document.getElementById('pagination-nav');
            const paginationUl = document.getElementById('pagination-ul');
            const recordsPerPage = 5;
            let currentPage = 1;
            let filteredRows = rows;

            console.log('Total rows found:', rows.length);

            // Function to display rows for the current page
            function displayPage(page) {
                const start = (page - 1) * recordsPerPage;
                const end = start + recordsPerPage;
                
                console.log(`Displaying page ${page}, rows ${start} to ${end}`);
                
                // Hide all rows first
                rows.forEach(row => row.style.display = 'none');
                
                // Show only rows for current page
                const pageRows = filteredRows.slice(start, end);
                pageRows.forEach(row => {
                    row.style.display = '';
                });

                // Update serial numbers for current page
                pageRows.forEach((row, index) => {
                    row.cells[0].textContent = start + index + 1;
                });

                // Show/hide no results message
                const noResultsRow = document.getElementById('no-results');
                if (noResultsRow) {
                    noResultsRow.style.display = filteredRows.length === 0 ? '' : 'none';
                }
            }

            // Function to generate pagination links
            function generatePagination() {
                paginationUl.innerHTML = '';
                const totalPages = Math.ceil(filteredRows.length / recordsPerPage);

                console.log('Generating pagination for', totalPages, 'pages');

                if (totalPages <= 1) {
                    paginationNav.style.display = 'none';
                    return;
                }

                paginationNav.style.display = 'block';

                // Previous button - FIXED: Using proper Font Awesome classes
                const prevLi = document.createElement('li');
                prevLi.classList.add('page-item');
                if (currentPage === 1) prevLi.classList.add('disabled');
                prevLi.innerHTML = `<a class="page-link" href="#" aria-label="Previous"><i class="fas fa-arrow-left"></i></a>`;
                prevLi.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (currentPage > 1) {
                        currentPage--;
                        displayPage(currentPage);
                        generatePagination();
                    }
                });
                paginationUl.appendChild(prevLi);

                // Page numbers
                const maxVisiblePages = 5;
                let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
                let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

                if (endPage - startPage + 1 < maxVisiblePages) {
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                // First page and ellipsis
                if (startPage > 1) {
                    const firstLi = document.createElement('li');
                    firstLi.classList.add('page-item');
                    firstLi.innerHTML = `<a class="page-link" href="#">1</a>`;
                    firstLi.addEventListener('click', function(e) {
                        e.preventDefault();
                        currentPage = 1;
                        displayPage(currentPage);
                        generatePagination();
                    });
                    paginationUl.appendChild(firstLi);

                    if (startPage > 2) {
                        const ellipsisLi = document.createElement('li');
                        ellipsisLi.classList.add('page-item', 'disabled');
                        ellipsisLi.innerHTML = `<span class="page-link">...</span>`;
                        paginationUl.appendChild(ellipsisLi);
                    }
                }

                // Page numbers
                for (let i = startPage; i <= endPage; i++) {
                    const li = document.createElement('li');
                    li.classList.add('page-item');
                    if (i === currentPage) li.classList.add('active');
                    li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                    li.addEventListener('click', function(e) {
                        e.preventDefault();
                        currentPage = i;
                        displayPage(currentPage);
                        generatePagination();
                    });
                    paginationUl.appendChild(li);
                }

                // Last page and ellipsis
                if (endPage < totalPages) {
                    if (endPage < totalPages - 1) {
                        const ellipsisLi = document.createElement('li');
                        ellipsisLi.classList.add('page-item', 'disabled');
                        ellipsisLi.innerHTML = `<span class="page-link">...</span>`;
                        paginationUl.appendChild(ellipsisLi);
                    }

                    const lastLi = document.createElement('li');
                    lastLi.classList.add('page-item');
                    lastLi.innerHTML = `<a class="page-link" href="#">${totalPages}</a>`;
                    lastLi.addEventListener('click', function(e) {
                        e.preventDefault();
                        currentPage = totalPages;
                        displayPage(currentPage);
                        generatePagination();
                    });
                    paginationUl.appendChild(lastLi);
                }

                // Next button - FIXED: Using proper Font Awesome classes
                const nextLi = document.createElement('li');
                nextLi.classList.add('page-item');
                if (currentPage === totalPages) nextLi.classList.add('disabled');
                nextLi.innerHTML = `<a class="page-link" href="#" aria-label="Next"><i class="fas fa-arrow-right"></i></a>`;
                nextLi.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (currentPage < totalPages) {
                        currentPage++;
                        displayPage(currentPage);
                        generatePagination();
                    }
                });
                paginationUl.appendChild(nextLi);
            }

            // Function to filter rows based on search
            function filterRows() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                
                console.log('Filtering with search term:', searchTerm);

                if (searchTerm === '') {
                    filteredRows = rows;
                } else {
                    filteredRows = rows.filter(row => {
                        // Search through all table cells in the row
                        for (let i = 0; i < row.children.length; i++) {
                            const cellText = row.children[i]?.textContent.toLowerCase() || '';
                            if (cellText.includes(searchTerm)) {
                                return true; // Found match in this column
                            }
                        }
                        return false; // No match found in any column
                    });
                }

                console.log('Filtered rows:', filteredRows.length);

                // Show/hide clear button
                clearSearch.style.display = searchInput.value ? 'block' : 'none';

                currentPage = 1;
                displayPage(currentPage);
                generatePagination();
            }

            // Clear search input
            clearSearch.addEventListener('click', function() {
                searchInput.value = '';
                clearSearch.style.display = 'none';
                filterRows();
                searchInput.focus();
            });

            // Search event listener
            searchInput.addEventListener('input', function() {
                // Add slight delay to prevent excessive filtering
                clearTimeout(this.searchTimeout);
                this.searchTimeout = setTimeout(filterRows, 300);
            });

            // Enter key to search
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    filterRows();
                }
            });

            // Initial setup
            if (rows.length > 0) {
                console.log('Initial setup with', rows.length, 'rows');
                displayPage(currentPage);
                generatePagination();
            } else {
                console.log('No rows found for initial setup');
                paginationNav.style.display = 'none';
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>

</body>
</html>