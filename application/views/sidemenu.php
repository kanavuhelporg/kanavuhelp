<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<ul class="d-grid list-unstyled">

          <li class="nav-item py-3 fs-6"><a href="#" style="font-weight:400;color:grey;" class="nav-link text-decoration-none">MENU</a></li>

          <li class="nav-item py-2">
            <a href="<?= base_url('admin/admindashbord') ?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admin Dashbord </a>
          </li>

          <li class="nav-item py-2"><a href="<?= base_url('verifytransaction') ?>" id="bg-transaction" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Transaction</a></li>

          <li class="nav-item py-2"><a href="<?= base_url('contact_submissions') ?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Enquiries</a></li>

          <li class="nav-item">
            <a style="font-weight:400;color:black;" class="nav-link text-decoration-none" href="<?= base_url('causesverification') ?>"><i class="fa-solid fa-hand-holding-medical"></i>&nbsp;&nbsp;Causes verification</a>
          </li>

          <!--
            <li class="nav-item py-2"><a href="<?= base_url('ponsoft/members') ?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;Members</a></li>

            <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Funds</a></li>

            <li class="nav-item py-2">
              <a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-regular fa-credit-card"></i>&nbsp;&nbsp;Payments</a></li>

            <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Donation</a></li>

            <li class="nav-item py-2"><a href="#" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Reports</a></li>
 -->
          <li class="nav-item py-2">
            <a href="<?= base_url('admin/logout') ?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none">
              <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout
            </a>
        </ul>
        </body>
        </html>        