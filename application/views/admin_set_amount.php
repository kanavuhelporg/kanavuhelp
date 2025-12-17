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
      min-width: 600px;
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

    /* Pagination Styles - Circular Design - FIXED VERSION */
.pagination {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
  gap: 8px;
  justify-content: center;
  flex-wrap: wrap;
}

.page-item {
  display: flex;
  align-items: center;
  justify-content: center;
}

.page-link {
  width: 42px;
  height: 42px;
  border-radius: 50% !important;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #dee2e6;
  background-color: #fff;
  color: #333;
  font-weight: 600;
  font-size: 14px;
  text-decoration: none;
  transition: all 0.3s ease;
  padding: 0;
  overflow: hidden;
  min-width: 42px;
  min-height: 42px;
}

/* Hover Effect */
.page-link:hover {
  background-color: #e9ecef;
  border-color: #dee2e6;
  color: #333;
  transform: scale(1.05);
}

/* Active Page */
.page-item.active .page-link {
  background-color: #0A517F !important;
  border-color: #0A517F !important;
  color: #fff !important;
  box-shadow: 0 2px 5px rgba(10, 81, 127, 0.3);
}

/* Disabled */
.page-item.disabled .page-link {
  background-color: #f8f9fa;
  color: #6c757d;
  cursor: not-allowed;
  opacity: 0.6;
  border-color: #dee2e6;
}

/* Arrow icons */
.page-link i {
  font-size: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}

/* Ellipsis */
.page-item.disabled .page-link[aria-label="..."] {
  border: none;
  background: transparent;
  font-size: 20px;
  line-height: 1;
  color: #6c757d;
  min-width: auto;
  width: auto;
  height: auto;
}

/* Ensure the container doesn't cut off circles */
.pagination-container {
  padding: 10px 0;
  width: 100%;
}

/* Page info */
.pagination-info {
  text-align: center;
  margin-top: 10px;
  color: #666;
  font-size: 14px;
}

/* Record summary */
.record-summary {
  margin-bottom: 15px;
  color: #666;
  font-size: 14px;
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
      
      .pagination {
        gap: 4px;
      }
      
      .page-link {
        width: 36px;
        height: 36px;
        font-size: 13px;
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
      
      .pagination {
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .pagination .page-item {
        margin-bottom: 5px;
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
      
      .add-btn {
        padding: 8px 12px;
        font-size: 0.8rem;
      }
      
      .top-bar {
        gap: 8px;
      }
      
      .page-link {
        width: 32px;
        height: 32px;
        font-size: 12px;
      }
      
      .pagination {
        gap: 3px;
      }
    }
    
    @media screen and (max-width: 400px) {
      .offcanvas-sidebar {
        width: 250px !important;
      }
      
      .table {
        font-size: 0.85rem;
      }
      
      .page-link {
        width: 30px;
        height: 30px;
        font-size: 11px;
      }
    }
    
    .main-row {
      min-height: 100vh;
    }

    .top-bar {
      width: 100%;
    }

    .button-group {
      margin-left: auto;      /* forces buttons to the right */
    }

    .add-btn {
      white-space: nowrap;
      padding: 6px 14px;
      font-size: 14px;
      border-radius: 6px;
      border: none;
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
            <div class="top-bar col-12 d-flex align-items-center justify-content-between flex-nowrap">

  <h2 class="mb-0 text-start" style="color: #1e293b;">
    Admin Fund Details
  </h2>

  <div class="button-group d-flex align-items-center gap-2">
    <button class="add-btn bg-success text-white" data-bs-toggle="modal" data-bs-target="#addAmountModal">
      <i class="fa fa-plus"></i> Add Amount
    </button>

    <button class="add-btn bg-primary text-white" data-bs-toggle="modal" data-bs-target="#addCausesModal">
      <i class="fa fa-hand-holding-heart"></i> Add Causes
    </button>

    <button class="add-btn bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#addDonorModal">
      <i class="fa fa-user"></i> Add Donor
    </button>
    <button class="add-btn bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#volunteersDonorModal">
      <i class="fa fa-user"></i> Add Volunteer
    </button>
  </div>

</div>


            <!-- Record Summary -->
            <div class="record-summary">
              <?php
              $total_records = count($admin_entries);
              $per_page = 5;
              $current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
              $total_pages = ceil($total_records / $per_page);
              $start_index = ($current_page - 1) * $per_page;
              $end_index = min($start_index + $per_page, $total_records);
              
              echo "Showing " . ($start_index + 1) . " to $end_index of $total_records entries";
              ?>
            </div>

            <!-- Fund Details Table -->
            <div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>S.No</th>
        <th>Date</th>
        <th>Admin Added Amount</th>
        <th>Admin Added Causes</th>
        <th>Admin Added Donors</th>
        <th>Cumulative Total Amount</th>
        <th>Cumulative Total Causes</th>
        <th>Cumulative Total Donors</th>
        <th>Cumulative Total Volunteers</th>
      </tr>
    </thead>

    <tbody>
      <?php
      // -------------------------------
      // INITIALIZE CUMULATIVE VALUES
      // -------------------------------
      $cumulative_amount     = 0;
      $cumulative_causes     = 0;
      $cumulative_donors     = 0;
      $cumulative_volunteers = 0;

      $cumulative_totals = [];

      // -------------------------------
      // PRE-CALCULATE CUMULATIVES
      // -------------------------------
      foreach ($admin_entries as $entry) {

        $cumulative_amount     += $entry['amount']     ?? 0;
        $cumulative_causes     += $entry['causes']     ?? 0;
        $cumulative_donors     += $entry['donors']     ?? 0;
        $cumulative_volunteers += $entry['volunteers'] ?? 0;

        $cumulative_totals[] = [
          'entry'                 => $entry,
          'cumulative_amount'     => $cumulative_amount,
          'cumulative_causes'     => $cumulative_causes,
          'cumulative_donors'     => $cumulative_donors,
          'cumulative_volunteers' => $cumulative_volunteers
        ];
      }

      // -------------------------------
      // SHOW LATEST FIRST
      // -------------------------------
      $cumulative_totals = array_reverse($cumulative_totals);

      // -------------------------------
      // PAGINATION
      // -------------------------------
      $paged_entries = array_slice($cumulative_totals, $start_index, $per_page);

      if (!empty($paged_entries)) {
        $serial = $start_index + 1;

        foreach ($paged_entries as $item) {
          $entry = $item['entry'];
      ?>
          <tr>
            <td><?= $serial++; ?></td>

            <td>
              <?= (!empty($entry['date']) && $entry['date'] != '-') 
                  ? date('d-m-Y', strtotime($entry['date'])) 
                  : '-'; ?>
            </td>

            <td class="fw-bold text-success">
              ₹ <?= number_format($entry['amount'] ?? 0, 2); ?>
            </td>

            <td class="fw-bold text-success">
              <?= $entry['causes'] ?? 0; ?>
            </td>

            <td class="fw-bold text-success">
              <?= $entry['donors'] ?? 0; ?>
            </td>

            <td>
              ₹ <?= number_format($item['cumulative_amount'], 2); ?>
            </td>

            <td>
              <?= $item['cumulative_causes']; ?>
            </td>

            <td>
              <?= $item['cumulative_donors']; ?>
            </td>

            <td>
              <?= $item['cumulative_volunteers']; ?>
            </td>
          </tr>
      <?php
        }
      } else {
      ?>
        <tr>
          <td colspan="10" class="text-center">No admin entries found</td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>


            <!-- Pagination -->
            <?php if($total_pages > 1): ?>
            <div class="pagination-container mt-4">
              <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mb-2">
                  <?php if($current_page > 1): ?>
                  <!-- Previous Page (Left Arrow) -->
                  <li class="page-item">
                    <a class="page-link" href="?page=<?= $current_page - 1 ?>" aria-label="Previous">
                      <i class='fa fa-solid fa-arrow-left-long'></i>
                    </a>
                  </li>
                  <?php else: ?>
                  <!-- Disabled Previous Page -->
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class='fa fa -solid fa-arrow-left-long'></i>
                    </a>
                  </li>
                  <?php endif; ?>
                  
                  <!-- Always show page 1 -->
                  <li class="page-item <?= $current_page == 1 ? 'active' : '' ?>">
                    <a class="page-link" href="?page=1">1</a>
                  </li>
                  
                  <?php
                  // Show dynamic page numbers based on current position
                  $start_page = max(2, $current_page - 1);
                  $end_page = min($total_pages - 1, $current_page + 2);
                  
                  // Show ellipsis after page 1 if needed
                  if ($start_page > 2): ?>
                  <li class="page-item disabled">
                    <span class="page-link">...</span>
                  </li>
                  <?php endif; ?>
                  
                  <!-- Show middle pages -->
                  <?php for ($i = $start_page; $i <= $end_page; $i++): ?>
                    <?php if ($i > 1 && $i < $total_pages): ?>
                    <li class="page-item <?= $current_page == $i ? 'active' : '' ?>">
                      <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <?php endif; ?>
                  <?php endfor; ?>
                  
                  <!-- Show ellipsis before last page if needed -->
                  <?php if ($end_page < $total_pages - 1): ?>
                  <li class="page-item disabled">
                    <span class="page-link">...</span>
                  </li>
                  <?php endif; ?>
                  
                  <!-- Always show last page if there is more than 1 page -->
                  <?php if ($total_pages > 1): ?>
                  <li class="page-item <?= $current_page == $total_pages ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $total_pages ?>"><?= $total_pages ?></a>
                  </li>
                  <?php endif; ?>
                  
                  <?php if($current_page < $total_pages): ?>
                  <!-- Next Page (Right Arrow) -->
                  <li class="page-item">
                    <a class="page-link" href="?page=<?= $current_page + 1 ?>" aria-label="Next">
                       <i class='fa fa-solid fa-arrow-right-long fw-bold fw-100'></i>
                    </a>
                  </li>
                  <?php else: ?>
                  <!-- Disabled Next Page -->
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Next">
                      <i class='fa fa-solid fa-arrow-right-long fw-bold fw-100'></i>
                    </a>
                  </li>
                  <?php endif; ?>
                </ul>
              </nav>
              
              <!-- Page info -->
              <div class="pagination-info">
                Page <?= $current_page ?> of <?= $total_pages ?>
              </div>
            </div>
            <?php endif; ?>
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
  
  <!-- Add Causes Modal -->
  <div class="modal fade" id="addCausesModal" tabindex="-1" aria-labelledby="addCausesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCausesModalLabel">Add Causes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="<?= base_url('Admin/addAmount'); ?>">
          <div class="modal-body">
            <div class="mb-3">
              <label for="amountInput" class="form-label"> Enter Causes Count</label>
              <input type="number" name="causes" class="form-control" placeholder="Enter causes count" required
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

  <!-- Add Donors Modal -->
  <div class="modal fade" id="addDonorModal" tabindex="-1" aria-labelledby="addDonorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addDonorModalLabel">Add Donors</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="<?= base_url('Admin/addAmount'); ?>">
          <div class="modal-body">
            <div class="mb-3">
              <label for="amountInput" class="form-label"> Enter Donor Count</label>
              <input type="number" name="donors" class="form-control" placeholder="Enter donor count" required
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

  <div class="modal fade" id="volunteersDonorModal" tabindex="-1" aria-labelledby="volunteersDonorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="volunteersDonorModalLabel">Add Volunteers</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="<?= base_url('Admin/addAmount'); ?>">
          <div class="modal-body">
            <div class="mb-3">
              <label for="amountInput" class="form-label"> Enter Volunteer Count</label>
              <input type="number" name="volunteers" class="form-control" placeholder="Enter volunteer count" required
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
      
      // Highlight current page in pagination
      const urlParams = new URLSearchParams(window.location.search);
      const currentPage = urlParams.get('page') || '1';
      const pageLinks = document.querySelectorAll('.pagination .page-link');
      
      pageLinks.forEach(link => {
        if (link.getAttribute('href') && link.getAttribute('href').includes('page=' + currentPage)) {
          link.parentElement.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>