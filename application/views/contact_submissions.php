<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Submissions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
            background-color: green;
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

        /* Pagination style */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 10px 0;
        }

        .pagination .page-item .page-link {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            padding: 0;
            text-align: center;
            line-height: 40px;
            border: none;
            background-color: #f1f1f1;
            color: #000;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .pagination .page-item.active .page-link {
            background-color: #0A517F;
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #f1f1f1;
            color: #ccc;
            cursor: not-allowed;
        }

        .pagination .page-item.disabled .page-link:hover {
            background-color: #f1f1f1;
        }

        .nav-link.active {
            background-color: red;
            color: white !important;
        }

        /* .nav-link:hover {
            background-color: rgba(120, 50, 186, 0.1);
        } */

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

        @media screen and (max-width: 768px) {
            #search-bar {
                display: none;
            }

            #menu-bar {
                display: none;
            }
            .hide-mobile{
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

            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media screen and (min-width: 769px) {
            .ham-menu {
                display: none;
            }

            .hide-mobile {
                display: none;
            }
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row"><!-----top-bar--------------->
            <div class="col-md-2 col-12 border-bottom ps-gray py-3">
                <div class="ps-logo">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" class="ham-menu ms-4 border-0 bg-transparent">
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
            
            <div id="search-bar" class="col-md-10 col-12 d-flex align-items-center justify-content-between border-bottom">
                <div class="col-md-7 ms-4 d-flex align-items-baseline justify-content-between">
                    <!-- Search bar can be added here if needed -->
                </div>
                
                <div class="col-md-3 d-none d-md-flex align-items-baseline justify-content-evenly hide-mobile">
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
                                
                    <span class="d-flex justify-content-center">
                        <i class="fa-solid fa-bell"></i>&nbsp;
                        <div style="width:30px;height:30px;background-color:red;color:white;margin-top:-15px;" class="rounded-circle d-flex justify-content-center align-items-center">
                            <?php if($this->session->userdata('unverifiedtransactions') > 0){echo $this->session->userdata("unverifiedtransactions");}?>
                        </div>
                    </span>
                </div>

            </div>
        </div><!-----------top-bar-end----------------------->

        <div class="row" style="min-height: calc(100vh - 72px);"><!----------main-navbar----------->
            <!----------side-bar-------------------->
            <div id="menu-bar" class="col-md-2 ps-gray d-none d-md-block">
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
                          class="nav-link text-decoration-none <?= (uri_string() == 'causesverification') ? 'active' : '' ?>"
                          style="font-weight:400;color:black;">
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
                              <i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Transaction
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
                              class="nav-link text-decoration-none <?= (uri_string() == 'causesverification') ? 'active' : '' ?>"
                              style="font-weight:400;color:black;">
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
            <div class="col-md-10 col-12">
                <div class="container-fluid px-3 px-md-4 pt-3">
                    <!-- Search input with ❌ clear button -->
                    <div class="row mb-3">
                        <div class="col-md-4 position-relative">
                            <input type="text" id="searchInput" class="form-control"
                                  placeholder="Search by Name and press Enter"
                                  value="<?= htmlspecialchars($search) ?>" autocomplete="off">

                            <?php if (!empty($search)): ?>
                                <button type="button" onclick="clearSearch()"
                                        class="btn btn-sm btn-light position-absolute top-50 end-0 translate-middle-y me-4 border-0"
                                        style="z-index: 2; margin-right: -20px;">
                                    &times;
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="ps-gray">
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Message</th>
                                    <th>Created_at</th>
                                </tr>
                            </thead>
                            <tbody id="enquiries">
                                <?php if (!empty($submissions)): $i = $sno + 1; ?>
                                    <?php foreach ($submissions as $submission): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= htmlspecialchars($submission->name) ?></td>
                                            <td><?= htmlspecialchars($submission->email) ?></td>
                                            <td><?= htmlspecialchars($submission->phone) ?></td>
                                            <td><?= htmlspecialchars($submission->message) ?></td>
                                            <td><?= htmlspecialchars($submission->created_at) ?></td>
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                <?php else: ?>
                                    <tr><td colspan="6" style="text-align:center;">No records found.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <?php
                        $total_pages = ceil($counts / 10);
                        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    ?>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item <?= ($current_page <= 1) ? 'disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $current_page - 1 ?>&search=<?= urlencode($search) ?>"><i class='fa-solid fa-arrow-left-long'></i></a>
                            </li>

                            <?php for ($p = 1; $p <= $total_pages; $p++): ?>
                                <li class="page-item <?= ($p == $current_page) ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $p ?>&search=<?= urlencode($search) ?>"><?= $p ?></a>
                                </li>
                            <?php endfor; ?>

                            <li class="page-item <?= ($current_page >= $total_pages) ? 'disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $current_page + 1 ?>&search=<?= urlencode($search) ?>"> <i class='fa-solid fa-arrow-right-long'></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Search functionality
        const input = document.getElementById('searchInput');

        // Trigger search on Enter key only
        input.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                const params = new URLSearchParams(window.location.search);
                params.set('search', input.value.trim());
                params.set('page', 1); // reset to first page
                window.location.search = params.toString();
            }
        });

        // Clear search when ❌ clicked
        function clearSearch() {
            const params = new URLSearchParams(window.location.search);
            params.delete('search');
            params.set('page', 1);
            window.location.search = params.toString();
        }

        // Display contact submissions
        function displayContactsubmissions(counts, index) {
            console.log(counts)
            activepage = document.querySelectorAll(".active");
            let l = activepage.length;
            for(let i = 0; i < l; i++) {
                if(i == index) {
                    activepage[i].classList.add("active-page");
                } else {
                    if(activepage[i].classList.contains("active-page")) {
                        activepage[i].classList.remove("active-page")
                    }
                }   
            }   

            $.ajax({
                type: "get",
                url: "admin/displayContactsubmissions",
                data: {"count": counts},
                success: function(result) {
                    document.getElementById("enquiries").innerHTML = result;
                },
                error: function(error) {
                    document.getElementById("enquiries").innerHTML = error;
                }
            });
        }

        // AJAX calls for menu
        $(document).ready(function() {
            // $.ajax({
            //     type: "get",
            //     url: "admin/topmenu",
            //     success: function(result) {
            //         $("#search-bar").html(result);
            //     },
            //     error: function(error) {
            //         $("#search-bar").html(error);
            //     }
            // });

            $.ajax({
                type: "get",
                url: "admin/kanavuhelplogo",
                success: function(result) {
                    $("#kanavuhelplogo").html(result);
                },
                error: function(error) {
                    $("#kanavuhelplogo").html(error);
                }
            });

            // Active link highlighting
            const currentUrl = window.location.href;
            const navLinks = document.querySelectorAll("#menu-bar .nav-link, #offcanvasSidebar .nav-link");

            navLinks.forEach(l => l.classList.remove("active"));

            navLinks.forEach(link => {
                if (currentUrl.includes(link.getAttribute('href'))) {
                    link.classList.add("active");
                }
            });
        });
    </script>
</body>
</html>