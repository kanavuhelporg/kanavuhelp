<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    .chartBox {
      padding: 10px;
      border-radius: 20px;
      background: white;
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
      background-color: red !important;
      color: white !important;
    }
    
    /* .nav-link:hover {
      background-color: rgba(120, 50, 186, 0.1);
    } */
    
    .nav-link.active:hover {
      background-color: red !important;
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

    @media screen and (max-width: 768px) {
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

    @media screen and (min-width: 769px) {
      .ham-menu {
        display: none;
      }
    }
    
    @media screen and (max-width: 576px) {
      .dashboard-cards {
        grid-template-columns: 1fr;
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

        <div class="col-md-3 d-none d-md-flex align-items-baseline justify-content-evenly">
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

    <div class="row"><!----------main-navbar----------->
      <!----------side-bar-------------------->
      <div id="menu-bar" style="height:inherit;" class="col-md-2 ps-gray d-none d-md-block">
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
              class="nav-link text-decoration-none <?= (uri_string() == 'transactionverification') ? 'active' : '' ?>"
              style="font-weight:400;color:black;">
              <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Transaction
            </a>
          </li>

          <li class="nav-item py-2">
            <a href="<?= base_url('contact_submissions') ?>"
              class="nav-link text-decoration-none <?= (uri_string() == 'contact_submissions') ? 'active' : '' ?>"
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
                class="nav-link text-decoration-none <?= (uri_string() == 'transactionverification') ? 'active' : '' ?>"
                style="font-weight:400;color:black;">
                <i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Transaction
              </a>
            </li>

            <li class="nav-item py-2 px-3">
              <a href="<?= base_url('contact_submissions') ?>"
                class="nav-link text-decoration-none <?= (uri_string() == 'contact_submissions') ? 'active' : '' ?>"
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

      <div class="col-md-10 col-12 h-100"><!-----------main-dashboard------------------------->
        <div class="container-fluid px-4 pt-4">
          <span>Dashboard</span>

          <div class="dashboard-cards mt-4 border-bottom pb-5">
            <div class="card-round card1 shadow-sm py-5 text-white d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Coordinators</li>
                <li class="fs-3 text-center">100</li>
              </ul>
            </div>
            <div class="card-round card2 shadow-sm py-5 text-white d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Funds collected</li>
                <li class="fs-3 text-center">Rs.12300 /-</li>
              </ul>
            </div>
            <div class="card-round card3 shadow-sm py-5 text-white d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Donation received</li>
                <li class="fs-3 text-center">Rs.12300 /-</li>
              </ul>
            </div>
            <div class="card-round card4 shadow-sm py-5 text-white d-grid align-items-center">
              <ul class="nav flex-column align-items-center">
                <li class="text-center">Template events</li>
                <li class="fs-3 text-center">12</li>
              </ul>
            </div>
          </div>
        </div>

        <!-------------------------chart--------------------------------------->
        <div class="w-100 p-4">
          <div class="col-12">
            <div class="chartCard">
              <div class="chartBox border">
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!------------------------chart-end-------------------------------------->
      </div><!-----------main-dashboard-end------------------------>
    </div><!--------------main-navbar-end------------------->
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
  <script>
    // setup 
    const data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
          label: 'outcome',
          data: [10000, 20000, 30000, 40000, 50000, 60000, 70000, 10000, 20000, 80000, 30000, 12000],
          backgroundColor: [
            'pink',
            'pink',
            'pink',
            'pink',
            'pink',
            'pink',
            'pink'
          ]
        },
        {
          label: 'Income',
          data: [20000, 35000, 40000, 50000, 20000, 10000, 25000, 22000, 24000, 30000, 40000, 42000],
          backgroundColor: [
            'orangered',
            'orangered',
            'orangered',
            'orangered',
            'orangered',
            'orangered',
            'orangered'
          ]
        }
      ]
    };

    // config 
    const config = {
      type: 'bar',
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
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>