
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .ps-logo{
        display:flex;
        align-items:center;
        justify-content:center;
      }
     .ps-gray{
        background-color: rgb(248, 245, 245);
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
        /* width: 100%; */
        /* height: calc(100% - 40px); */
        /* background: rgba(54, 162, 235, 0.2); */
       /*  display: flex;
        align-items: center;
        justify-content: center; */
        display:grid;
        grid-template-columns: repeat(auto-fit,minmax(250px,700px)) ;
        grid-template-rows: repeat(auto-fit,minmax(200px,auto)) ;
        align-items: center;
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
           .ham-menu{
        /* position:absolute; */
      }
      .ham-line{
        width:30px;
        height:6px;
        background-color: rgb(70, 70, 70);
        margin-top:5px;
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

    </style>
</head>
<body>
        
    <div class="container-fluid">
      
      <div class="row"><!-----top-bar--------------->

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
            <input type="text" style="outline-style:none;" class="w-75 ps-3 border-0 ps-gray" placeholder="search">
        <span style="cursor:pointer;" class="pe-3" >
          <i class="fa-solid fa-magnifying-glass"></i></span>
        </div>

        <div class="col-md-3 d-flex align-items-baseline justify-content-evenly">

            <button style="outline-style:none;" class="drop-down-toggle border-0 d-flex align-items-center bg-white" data-bs-toggle="dropdown">
            <span class="p-1 px-2 ps-user rounded-circle"><i class="fa-solid fa-user"></i></span>&nbsp;&nbsp;
            <span style="font-weight:500;"><?php 
            if (!isset($_SESSION)) {
              session_start();
          }
          
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


        <div class="row"><!----------main-navbar----------->

         <div id="menu-bar" style="height:inherit;" class="col-md-2 ps-gray"><!----------side-bar-------------------->
         <ul class="d-grid list-unstyled">

            <li class="nav-item py-3 fs-6"><a href="#" style="font-weight:400;color:grey;" class="nav-link text-decoration-none">MENU</a></li>

            <li class="nav-item py-2">
            <a href="<?=base_url('admin/admindashbord')?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admin Dashbord </a></li>

            <li class="nav-item py-2"><a href="<?=base_url('verifytransaction')?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Transaction Verification</a></li>
<!--
            <li class="nav-item py-2"><a href="<?=base_url('ponsoft/members')?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;Members</a></li>

            <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Funds</a></li>

            <li class="nav-item py-2">
              <a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-regular fa-credit-card"></i>&nbsp;&nbsp;Payments</a></li>

            <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Donation</a></li>

            <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Reports</a></li>
 -->
            <li class="nav-item py-2">
            <a href="<?= base_url('admin/logout') ?>" style="font-weight:400;color:black;" class="text-decoration-none d-flex p-2">
    <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout
</a>
         </ul>
              
         </div><!-----------side-bar-end-------------->
            
         <div class="col-md-10 h-100"><!-----------main-dashboard------------------------->
         
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
              <li class="text-center">Temlate events</li>
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

   <!------------------------chart-end-------------------------------------->       


         </div><!-----------main-dashboard-end------------------------>


        </div><!--------------main-navbar-end------------------->

      </div>

<!---------------------offcanvas-------------------------->

<div class="offcanvas offcanvas-start" id="ps-menu">
    
<div class="offcanvas-header">
<h1 class="text-secondary text-center">MENU</h1>
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
</div>

<div class="offcanvas-body">
<ul class="d-grid list-unstyled">
            <!-- <li class="nav-item py-3 text-secondary fs-6">MENU</li> -->
            <li class="nav-item py-3">
            <a href="<?=base_url('ponsoft')?>" style="font-weight:400;" class="nav-link text-dark text-decoration-none"><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Dashboard</a></li>
            <li class="nav-item py-3"><a href="<?=base_url('ponsoft/coordinators')?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Coordinators</a></li>
            <li style="font-weight:400;" class="nav-item py-3"><i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;Members</li>
            <li style="font-weight:400;" class="nav-item py-3"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Funds</li>
            <li style="font-weight:400;" class="nav-item py-3"><i class="fa-regular fa-credit-card"></i>&nbsp;&nbsp;Payments</li>
            <li style="font-weight:400;" class="nav-item py-3"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Donation</li>
            <li style="font-weight:400;" class="nav-item py-3"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Reports</li>
            <li class="nav-item py-3"><a href="<?=base_url('ponsoft/logout')?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
         </ul>
</div>

</div>

<!---------------------offcanvas-end-------------------------------->
   
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script>
    // setup 
    const data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec'],
      datasets: [{
        label: 'outcome',
        data: [10000, 20000,30000, 40000, 50000, 60000, 70000,10000,20000,80000,30000,12000],
        backgroundColor: [
          'pink',
          'pink',
          'pink',
          'pink',
          'pink',
          'pink',
          'pink'
        ]
       /*  borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ], */
        // borderWidth: 1
      },
      {
        label: 'Income',
        data: [20000, 35000,40000, 50000, 20000, 10000, 25000,22000,24000,30000,40000,42000],
        backgroundColor: [
          'orangered',
          'orangered',
          'orangered',
          'orangered',
          'orangered',
          'orangered',
          'orangered'
        ]
        /* borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ] ,*/
        // borderWidth: 1
      }
    ]

    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        plugins:{
        legend: {
            labels: {
      usePointStyle:true,
      pointStyle: 'circle'
                  }
    }
},
        scales: {
          y: {
            beginAtZero: true
          }
        },
        

      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Instantly assign Chart.js version
   /*  const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version; */
    </script>

 <!-------------------------------chart-end------------------------------------>  

 <h1>Contact Form Submissions</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Submitted At</th>
    </tr>
    <?php foreach ($submitForm as $submitForm): ?>
    <tr>
        <td><?php echo $submitForm->id; ?></td>
        <td><?php echo $submitForm->name; ?></td>
        <td><?php echo $submitForm->email; ?></td>
        <td><?php echo $submitForm->phone; ?></td>
        <td><?php echo $submitForm->message; ?></td>
        <td><?php echo $submitForm->submitted_at; ?></td>
    </tr>
    <?php endforeach; ?>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>