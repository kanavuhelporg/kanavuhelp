<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg"  rel="icon"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>
    body {
      overflow-x: hidden;
    }
    
    .ps-logo {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .ps-gray {
      background-color: rgb(248, 245, 245);
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

    .chartCard {
      display: flex;
      justify-content: center;
    }

    .chartBox {
      padding: 10px;
      border-radius: 20px;
      background: white;
      width: 100%;
      max-width: 700px;
    }

    #search-bar {
      display: flex;
    }

    .ham-menu {
      cursor: pointer;
      padding: 5px;
      border: none;
      background: transparent;
    }

    .ham-line {
      width: 30px;
      height: 4px;
      background-color: rgb(70, 70, 70);
      margin: 4px 0;
      border-radius: 2px;
    }

    /* Sidebar Active */
    .nav-link.active {
      background-color: red !important;
      color: white !important;
    }
    
    .nav-link.active:hover {
      background-color: red !important;
    }

    .offcanvas-sidebar {
      background-color: rgb(248, 245, 245);
    }
    
    .offcanvas-sidebar .nav-link {
      color: black;
      font-weight: 400;
    }
    
    .offcanvas-sidebar .nav-link.active {
      color: white !important;
    }

/* Smaller sidebar on very small screens */
@media (max-width: 400px) {
  .offcanvas-sidebar {
    width: 240px !important;
  }
}


    /* Main content */
    .main-content {
      padding: 20px;
      width: 100%;
    }

    /* Table responsive fixes */
    .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
    
    .table {
      min-width: 600px; /* Ensures table doesn't get too narrow */
    }

    /* Top bar */
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
      flex-wrap: wrap;
    }

    .top-bar h2 {
      margin: 0;
      font-size: 1.5rem;
    }

    .add-btn {
      background: #16a34a;
      color: #fff;
      padding: 10px 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 0.9rem;
      white-space: nowrap;
    }

    .add-btn:hover {
      background: #15803d;
    }

    /* Modal improvements */
    .modal-content {
      max-width: 100%;
      margin: 0 15px;
    }

    @media screen and (max-width: 991px) {
      #search-bar {
        display: none;
      }

      #menu-bar {
        display: none;
      }

      .ps-logo {
        justify-content: space-between;
        padding: 0 10px;
      }
      
      .dashboard-cards {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .main-content {
        padding: 15px;
      }
      
      .top-bar h2 {
        font-size: 1.3rem;
      }
    }

    @media screen and (min-width: 992px) {
      .ham-menu {
        display: none;
      }
    }
    
    @media screen and (max-width: 768px) {
      .container-fluid {
        padding-left: 10px;
        padding-right: 10px;
      }
      
      .top-bar {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      
      .top-bar h2 {
        width: 100%;
      }
      
      .add-btn {
        align-self: flex-end;
      }
    }
    
    @media screen and (max-width: 576px) {
      .dashboard-cards {
        grid-template-columns: 1fr;
      }
      
      .main-content {
        padding: 10px;
      }
      
      .table th,
      .table td {
        padding: 8px;
        font-size: 0.9rem;
      }
      
      .ham-line {
        width: 25px;
        height: 3px;
      }
      
      .heading-ponsoft {
        font-size: 1rem;
      }
    }
    
    @media screen and (max-width: 400px) {
      .offcanvas-sidebar {
        width: 250px !important;
      }
      
      .table {
        font-size: 0.85rem;
      }
      
      .add-btn {
        padding: 8px 12px;
        font-size: 0.8rem;
      }
    }
    .main-row {
  min-height: 100vh; /* subtract top bar height */
}
  </style>
</head>

<body>
  <div class="container-fluid min-vh-100 p-0">
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
            <span class="heading-ponsoft fs-5 position-relative " style="top:1px; color:red;">KANAVUHELP</span>
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
    </div>

    <div class="row main-row"><!----------main-navbar----------->
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
                        <a href="<?= base_url('admin/get_total_amount') ?>"
                          class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admin/get_total_amount') ? 'active' : '' ?>"
                          style="font-weight:400;color:black;">
                          <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Admin Set Amount
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

      <!-- Main Content Area -->
      <div class="col-lg-10 col-12">
        <div class="main-content">
          <div class="content-card">
            <!-- Top Bar -->
            <div class="top-bar">
              <h2 style="color: #1e293b;">Admin Fund Details</h2>
              <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addAmountModal">
                <i class="fas fa-plus me-2"></i>Add Amount
              </button>
            </div>

            <!-- Fund Details Table -->
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead class="table-dark">
                  <tr>
                    <th>S.No</th>
                    <th>Total Amount</th>
                    <th>Date</th>
                    <th>Data by Added Amount</th>
                    <th>Available Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>₹ <?= number_format($total_fund, 2); ?></td>
                    <td><?= $last_added_date != '-' ? date('d-m-Y', strtotime($last_added_date)) : '-'; ?></td>
                    <td style="color: green; font-weight: bold;">
                      ₹ <?= number_format($admin_added_total, 2); ?>
                    </td>
                    <td>₹ <?= number_format($total_fund - $admin_added_total, 2); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Offcanvas Sidebar for Mobile -->
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
                style="font-weight:400;color:black; position: relative;">

                  <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Transaction
              </a>
            </li>
<li class="nav-item py-2 px-3">
                        <a href="<?= base_url('admin/get_total_amount') ?>"
                          class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admin/get_total_amount') ? 'active' : '' ?>"
                          style="font-weight:400;color:black;">
                          <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp; Admin Set Amount
                        </a>
                    </li>
            <li class="nav-item py-2 px-3">
              <a href="<?= base_url('contact_submissions') ?>"
                class="nav-link text-decoration-none <?= (uri_string() == 'contact_submissions') ? 'active' : '' ?>"
                style="font-weight:400;color:black; position: relative;">

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

  <!-- Logout Modal -->
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

  <!-- Add Amount Modal -->
  <div class="modal fade" id="addAmountModal" tabindex="-1" aria-labelledby="addAmountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addAmountModalLabel">Add Amount</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="<?= base_url('Admin/addAmount'); ?>">
          <div class="modal-body">
            <div class="mb-3">
              <label for="amountInput" class="form-label">Amount (₹)</label>
              <input type="number" class="form-control" id="amountInput" name="amount" step="0.01" min="0" required 
                     placeholder="Enter amount to add">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save Amount</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Set active menu item
      const currentUrl = window.location.href;
      const navLinks = document.querySelectorAll("#menu-bar .nav-link, #offcanvasSidebar .nav-link");
      
      navLinks.forEach(link => {
        link.classList.remove("active");
        if (currentUrl.includes(link.getAttribute('href'))) {
          link.classList.add("active");
        }
      });
      
      // Auto-close mobile sidebar on link click
      const mobileLinks = document.querySelectorAll('#offcanvasSidebar .nav-link');
      const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('offcanvasSidebar'));
      
      mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
          if (offcanvas) {
            offcanvas.hide();
          }
        });
      });
    });
  </script>
</body>
</html>