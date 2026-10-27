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
            <a href="<?= base_url('admindashbord') ?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admin Dashbord </a>
          </li>

          <li class="nav-item py-2"><a href="<?= base_url('transactionverification') ?>" id="bg-transaction" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Transaction</a></li>

          <li class="nav-item py-2"><a href="<?= base_url('contact_submissions') ?>" style="font-weight:400;color:black;" class="nav-link text-decoration-none"><i class="fa-solid fa-envelope-open-text"></i>&nbsp;&nbsp;Contact Form</a></li>

          <?php
            $ci =& get_instance();
            $pending_fe_count = $ci->db->table_exists('fundraiser_enquiry') ? $ci->db->where('status', 'pending')->count_all_results('fundraiser_enquiry') : 0;
          ?>
          <li class="nav-item py-2"><a href="<?= base_url('admin/fundraiser_enquiries') ?>" id="bg-fundraiser-enquiries" style="font-weight:400;color:black;" class="nav-link text-decoration-none d-flex align-items-center justify-content-between"><span><i class="fa-solid fa-clipboard-question"></i>&nbsp;&nbsp;Fundraiser Enquiry</span><?php if (!empty($pending_fe_count) && $pending_fe_count > 0): ?><span class="badge rounded-pill bg-danger" style="font-size: 11px; padding: 3px 8px; font-weight: 600;"><?= $pending_fe_count; ?></span><?php endif; ?></a></li>

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