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
      background-color: #7986cb;
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
      background-color: #f0f9ff; /* Ultra Light Sky Blue */
      color: #0369a1 !important;
      border: 1px solid #e0f2fe;
    }
    .card2 {
      background-color: #fff7ed; /* Ultra Light Orange */
      color: #9a3412 !important;
      border: 1px solid #ffedd5;
    }
    .card3 {
      background-color: #f5f3ff; /* Ultra Light Purple */
      color: #6d28d9 !important;
      border: 1px solid #ede9fe;
    }
    .card4 {
      background-color: #f0fdf4; /* Ultra Light Mint */
      color: #15803d !important;
      border: 1px solid #dcfce7;
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
    }

    .ham-line {
      width: 30px;
      height: 6px;
      background-color: rgb(70, 70, 70);
      margin-top: 5px;
    }

    /* Sidebar Active */
    .nav-link.active {
      background-color: #7986cb !important;
      color: white !important;
    }
    
    .nav-link.active:hover {
      background-color: #5c6bc0 !important;
    }

    /* Offcanvas sidebar styles */
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

    /* Main content centering */
    .main-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
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
      }
      
      .dashboard-cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media screen and (min-width: 992px) {
      .ham-menu {
        display: none;
      }
    }
    
    @media screen and (max-width: 576px) {
      .dashboard-cards {
        grid-template-columns: 1fr;
      }
    }
    .card5 {
      background-color: #fffde7; /* Ultra Light Yellow */
      color: #854d0e !important;
      border: 1px solid #fef9c3;
    }
    .card6 {
      background-color: #fff1f1; /* Ultra Light Red */
      color: #991b1b !important;
      border: 1px solid #fee2e2;
    }
    .card7 {
      background-color: #f0fdff; /* Ultra Light Cyan */
      color: #0e7490 !important;
      border: 1px solid #ecfeff;
    }
    .action-card {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      cursor: pointer;
    }
    .action-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .recent-table-card {
      background: #fff;
      border-radius: 15px;
      padding: 20px;
      margin-top: 20px;
    }
    .table thead th {
      border-top: none;
      color: #6c757d;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 12px;
    }
    .status-pill {
      padding: 5px 12px;
      border-radius: 50px;
      font-size: 12px;
      font-weight: 500;
    }
    .status-verified { background: #d1e7dd; color: #0f5132; }
    .status-pending { background: #fff3cd; color: #856404; }
    .bg-light-purple { background-color: #f5f6ff; color: #7986cb; }
    #trendFilter:focus { box-shadow: 0 0 0 0.25rem rgba(121, 134, 203, 0.25); border: none; }
  </style>
</head>

<body>
  <div class="container-fluid">
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
            <span class="heading-ponsoft fs-5 position-relative " style="top:1px; color:#7986cb;">KANAVUHELP</span>
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

    <div class="row"><!----------main-navbar----------->
      <!----------side-bar-------------------->
      <div id="menu-bar" style="height:inherit;" class="col-lg-2 ps-gray d-none d-lg-block">
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

      <!-----------side-bar-end-------------->
      
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

      <div class="col-lg-10 col-12 h-100 main-content"><!-----------main-dashboard------------------------->
        <div class="container-fluid px-4 pt-4 w-100">
          <h2>Dashboard</h2>

          <div class="dashboard-cards mt-4 border-bottom pb-5">
            <div class="card-round card1 shadow-sm py-5 d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Volunteers</li>
                <li class="fs-3 text-center"><?php echo number_format($total_volunteers); ?></li>
              </ul>
            </div>
            <div class="card-round card2 shadow-sm py-5 d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Funds collected</li>
                <li class="fs-3 text-center">Rs.<?php echo number_format($total_fund); ?> /-</li>
              </ul>
            </div>
            <div class="card-round card3 shadow-sm py-5 d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Donors</li>
                <li class="fs-3 text-center"><?php echo number_format($total_donors); ?></li>
              </ul>
            </div>
            <div class="card-round card4 shadow-sm py-5 d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Causes</li>
                <li class="fs-3 text-center"><?php echo number_format($total_causes); ?></li>
              </ul>
            </div>
          </div>

          <!-- Combined Row for Actions & Chart -->
          <div class="row w-100 mt-4 px-3">
            <!-- Left Column: Action Required -->
            <div class="col-lg-5 col-12 mb-4">
              <h4 class="mb-3">Action Required</h4>
              <div class="d-grid gap-3">
                <a href="<?= base_url('transactionverification') ?>" class="text-decoration-none">
                  <div class="card-round card5 shadow-sm p-4 action-card d-flex flex-row justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-0">Pending Donations</h5>
                      <small>Review new transactions</small>
                    </div>
                    <div class="fs-2 fw-bold"><?= $pending_transactions ?></div>
                  </div>
                </a>

                <a href="<?= base_url('causesverification') ?>" class="text-decoration-none">
                  <div class="card-round card6 shadow-sm p-4 action-card d-flex flex-row justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-0">Unverified Causes</h5>
                      <small>Approve new fundraising causes</small>
                    </div>
                    <div class="fs-2 fw-bold"><?= $pending_causes ?></div>
                  </div>
                </a>

                <a href="<?= base_url('contact_submissions') ?>" class="text-decoration-none">
                  <div class="card-round card7 shadow-sm p-4 action-card d-flex flex-row justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-0">New enquiries</h5>
                      <small>Respond to customer queries</small>
                    </div>
                    <div class="fs-2 fw-bold"><?= $enquiry_count ?></div>
                  </div>
                </a>
              </div>
            </div>

            <!-- Right Column: Chart -->
            <div class="col-lg-7 col-12 mb-4">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Income Trends</h4>
                <select id="trendFilter" class="form-select form-select-sm w-auto rounded-pill px-3 shadow-sm border-0 bg-light-purple">
                  <option value="week" selected>Week</option>
                  <option value="month">Month</option>
                  <option value="year">Year</option>
                  <option value="custom">Custom Date Basis</option>
                </select>
              </div>

              <!-- Custom Date Range Row -->
              <div id="customDateRange" class="mb-3 d-none">
                <div class="d-flex align-items-center gap-2">
                  <div class="input-group input-group-sm">
                    <span class="input-group-text bg-light border-0">From</span>
                    <input type="date" id="startDate" class="form-control border-0 bg-light">
                  </div>
                  <div class="input-group input-group-sm">
                    <span class="input-group-text bg-light border-0">To</span>
                    <input type="date" id="endDate" class="form-control border-0 bg-light">
                  </div>
                  <button id="applyCustomFilter" class="btn btn-sm btn-primary rounded-pill px-3 shadow-sm">Filter</button>
                </div>
              </div>
              <div class="chartCard h-100 d-flex flex-column">
                <div class="chartBox border flex-grow-1 d-flex align-items-center">
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <!-- End Combined Row -->
        </div>

        <!-------------------------Recent Activity------------------------------>
        <div class="row w-100 p-4 pt-0 mt-4">
          <div class="col-lg-6 col-12 mb-4">
            <div class="recent-table-card shadow-sm h-100">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Recent Donations</h5>
                <a href="<?= base_url('transactionverification') ?>" class="btn btn-sm btn-outline-primary rounded-pill px-3">View All</a>
              </div>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead>
                    <tr>
                      <th>Donor</th>
                      <th>Amount</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($recent_transactions as $tx): ?>
                      <tr>
                        <td>
                          <a href="<?= base_url('transactionverification') ?>">
                          <div class="d-flex flex-column">
                            <span class="fw-bold"><?= $tx->name ?></span>
                            <small class="text-muted"><?= date('M d, Y', strtotime($tx->created_at)) ?></small>
                          </div>
                          </a>
                        </td>
                        <td class="fw-bold text-success">₹<?= number_format($tx->amount) ?></td>
                        <td>
                          <span class="status-pill <?= $tx->status == 1 ? 'status-verified' : 'status-pending' ?>">
                            <?= $tx->status == 1 ? 'Verified' : 'Pending' ?>
                          </span>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-12 mb-4">
            <div class="recent-table-card shadow-sm h-100">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Latest Causes</h5>
                <a href="<?= base_url('causesverification') ?>" class="btn btn-sm btn-outline-primary rounded-pill px-3">View All</a>
              </div>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead>
                    <tr>
                      <th>Cause</th>
                      <th>Goal</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($recent_causes as $cs): ?>
                      <tr>
                        <td>
                          <a href="<?= base_url('causesverification') ?>">
                          <div class="d-flex flex-column">
                            <span class="fw-bold text-truncate" style="max-width: 150px;"><?= $cs->cause_heading ?></span>
                            <small class="text-muted"><?= $cs->category ?></small>
                          </div>
                          </a>
                        </td>
                        <td class="fw-bold">₹<?= number_format($cs->amount) ?></td>
                        <td>
                          <span class="status-pill <?= $cs->verified == 1 ? 'status-verified' : 'status-pending' ?>">
                            <?= $cs->verified == 1 ? 'Approved' : 'Pending' ?>
                          </span>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!------------------------Recent Activity-end------------------------------>
      </div><!-----------main-dashboard-end------------------------>
    </div><!--------------main-navbar-end------------------->
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
  <script>
    // setup 
    let chartLabels = <?php echo json_encode($chart_labels); ?>;
    let incomeData = <?php echo json_encode($chart_income); ?>;

    const data = {
      labels: chartLabels,
      datasets: [
        {
          label: 'Duration',
          data: Array(chartLabels.length).fill(0),
          borderColor: '#f06292',
          backgroundColor: 'rgba(240, 98, 146, 0.1)',
          fill: true,
          tension: 0.4
        },
        {
          label: 'Income',
          data: incomeData,
          borderColor: '#6a6aa8ff',
          backgroundColor: 'rgba(121, 134, 203, 0.2)',
          fill: true,
          tension: 0.4
        }
      ]
    };

    // config 
    const config = {
      type: 'line',
      data,
      options: {
        responsive: true,
        plugins: {
          legend: {
            labels: {
              usePointStyle: true,
              pointStyle: 'circle'
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        },
        // 👇 Add cursor pointer effect
        onHover: (event, elements) => {
          const target = event.native ? event.native.target : event.chart.canvas;
          target.style.cursor = elements.length ? 'pointer' : 'default';
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Filter Change Handling
    document.getElementById('trendFilter').addEventListener('change', function() {
      const filter = this.value;
      const customRange = document.getElementById('customDateRange');

      if (filter === 'custom') {
        customRange.classList.remove('d-none');
        return;
      } else {
        customRange.classList.add('d-none');
      }
      
      fetch(`<?= base_url('admin/get_trend_data') ?>?filter=${filter}`)
        .then(response => response.json())
        .then(res => {
          if (res.status === 'success') {
            myChart.data.labels = res.labels;
            myChart.data.datasets[1].data = res.income;
            myChart.data.datasets[0].data = Array(res.labels.length).fill(0);
            myChart.update();
          }
        });
    });

    // Custom Range Applier
    document.getElementById('applyCustomFilter').addEventListener('click', function() {
      const start = document.getElementById('startDate').value;
      const end = document.getElementById('endDate').value;

      if (!start || !end) {
        alert('Please select both start and end dates.');
        return;
      }

      fetch(`<?= base_url('admin/get_trend_data') ?>?filter=custom&start=${start}&end=${end}`)
        .then(response => response.json())
        .then(res => {
          if (res.status === 'success') {
            myChart.data.labels = res.labels;
            myChart.data.datasets[1].data = res.income;
            myChart.data.datasets[0].data = Array(res.labels.length).fill(0);
            myChart.update();
          }
        });
    });

    // Active link highlighting
    document.addEventListener("DOMContentLoaded", function () {
      const currentUrl = window.location.href;
      const navLinks = document.querySelectorAll("#menu-bar .nav-link, #offcanvasSidebar .nav-link");

      // Remove any existing active class first
      navLinks.forEach(l => l.classList.remove("active"));

      // Add active to the matching link
      navLinks.forEach(link => {
        if (currentUrl.includes(link.getAttribute('href'))) {
          link.classList.add("active");
        }
      });
    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>