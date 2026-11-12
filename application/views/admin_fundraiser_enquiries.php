<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fundraiser Enquiries - Admin Portal</title>
  <link href="<?= base_url('assets/img/kanavulogoo.jpg') ?>" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f9;
      color: #333;
    }

    .ps-logo {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .ps-gray {
      background-color: #f8f9fa;
    }

    .heading-ponsoft {
      color: #ed3136;
      font-weight: 800;
    }

    .ps-letter {
      background-color: #ed3136;
    }

    .ps-user {
      background-color: #fed7aa;
    }

    .ham-line {
      width: 25px;
      height: 4px;
      background-color: #4b5563;
      margin-top: 4px;
      border-radius: 2px;
    }

    /* Sidebar */
    .sidebar-nav .nav-link {
      font-weight: 500;
      color: #4a5568 !important;
      padding: 10px 16px;
      border-radius: 8px;
      transition: all 0.2s ease;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .sidebar-nav .nav-link:hover {
      background-color: #e2e8f0;
      color: #1a202c !important;
    }

    .sidebar-nav .nav-link.active {
      background-color: #fee2e2;
      color: #dc2626 !important;
      font-weight: 700;
    }

    /* Cards */
    .stat-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 20px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
      transition: transform 0.2s ease;
    }

    .stat-card:hover {
      transform: translateY(-2px);
    }

    .stat-icon {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      flex-shrink: 0;
    }

    .stat-icon.icon-blue {
      background-color: #e0f2fe !important;
      color: #0284c7 !important;
    }

    .stat-icon.icon-yellow {
      background-color: #fef3c7 !important;
      color: #d97706 !important;
    }

    .stat-icon.icon-green {
      background-color: #dcfce7 !important;
      color: #16a34a !important;
    }

    .stat-icon.icon-red {
      background-color: #fee2e2 !important;
      color: #dc2626 !important;
    }

    /* Table */
    .table-card {
      background: #ffffff;
      border-radius: 14px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
      padding: 24px;
      margin-top: 20px;
    }

    .table th {
      background-color: #f8fafc;
      font-weight: 700;
      color: #475569;
      font-size: 13.5px;
      border-top: none;
      vertical-align: middle;
    }

    .table td {
      vertical-align: middle;
      font-size: 14px;
    }

    .badge-pending {
      background-color: #fef3c7;
      color: #b45309;
      border: 1px solid #fde68a;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 12.5px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .badge-approved {
      background-color: #dcfce7;
      color: #15803d;
      border: 1px solid #bbf7d0;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 12.5px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .badge-rejected {
      background-color: #fee2e2;
      color: #b91c1c;
      border: 1px solid #fecaca;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 12.5px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .badge-hold {
      background-color: #ffedd5;
      color: #c2410c;
      border: 1px solid #fed7aa;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 12.5px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .filter-btn {
      border: 1px solid #cbd5e1;
      background: #ffffff;
      color: #475569;
      padding: 7px 18px;
      border-radius: 25px;
      font-size: 13.5px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .filter-btn:hover,
    .filter-btn.active {
      background: #ed3136;
      color: #ffffff;
      border-color: #ed3136;
    }

    .filter-btn .badge {
      background: rgba(0, 0, 0, 0.12);
      color: inherit;
    }

    .filter-btn.active .badge {
      background: #ffffff;
      color: #ed3136;
    }

    .action-btn {
      width: 32px;
      height: 32px;
      padding: 0;
      border-radius: 6px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      border: none;
      transition: all 0.2s;
    }

    .action-btn:hover {
      transform: scale(1.08);
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <!-- Top Bar -->
    <div class="row">
      <div class="col-lg-2 col-12 border-bottom ps-gray py-3">
        <div class="ps-logo">
          <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar"
            class="d-lg-none ham-menu me-3 border-0 bg-transparent">
            <div class="ham-line"></div>
            <div class="ham-line"></div>
            <div class="ham-line"></div>
          </button>
          <div class="d-flex align-items-center">
            <span class="rounded-circle text-white px-2 py-1 ps-letter fw-bold">K</span>&nbsp;
            <span class="heading-ponsoft fs-5">KANAVU HELP</span>
          </div>
        </div>
      </div>

      <div class="col-lg-10 col-12 d-flex align-items-center justify-content-between border-bottom py-2 px-4 bg-white">
        <h5 class="m-0 fw-bold text-secondary"><i class="fa-solid fa-clipboard-question text-danger me-2"></i>
          Fundraiser Enquiries Management</h5>
        <div class="d-flex align-items-center">
          <div class="dropdown">
            <button class="border-0 bg-transparent d-flex align-items-center" data-bs-toggle="dropdown">
              <span class="p-1 px-2 ps-user rounded-circle"><i class="fa-solid fa-user"></i></span>&nbsp;&nbsp;
              <span class="fw-semibold">
                <?= $this->session->userdata('adminName') ?: 'Admin'; ?>
              </span>&nbsp;&nbsp;
              <i class="fa-solid fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
              <li>
                <a href="<?= base_url('admin/logout') ?>" class="dropdown-item text-danger">
                  <i class="fa-solid fa-power-off me-2"></i> Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Layout -->
    <div class="row" style="min-height: calc(100vh - 65px);">
      <!-- Left Sidebar (Desktop) -->
      <div class="col-lg-2 d-none d-lg-block border-end bg-white py-3">
        <ul class="nav flex-column sidebar-nav list-unstyled">
          <li class="nav-item mb-1 text-muted text-uppercase fw-bold small px-3 py-1">Main Menu</li>
          <li class="nav-item mb-1">
            <a href="<?= base_url('admindashbord') ?>" class="nav-link">
              <i class="fa-solid fa-chart-simple"></i> Dashboard
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="<?= base_url('transactionverification') ?>" class="nav-link">
              <i class="fa-solid fa-money-bill-transfer"></i> Transactions
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="<?= base_url('admin/get_total_amount') ?>" class="nav-link">
              <i class="fa-solid fa-sliders"></i> Admin Set Amount
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="<?= base_url('contact_submissions') ?>" class="nav-link">
              <i class="fa-solid fa-envelope-open-text"></i> Contact Form
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="<?= base_url('admin/fundraiser_enquiries') ?>" class="nav-link active d-flex align-items-center">
              <i class="fa-solid fa-clipboard-question"></i>
              <span>Fundraiser Enquiry</span>
              <?php if (!empty($pending_count) && $pending_count > 0): ?>
                <span class="badge rounded-pill bg-danger ms-auto"
                  style="font-size: 11px; padding: 3px 8px; font-weight: 600;"><?= $pending_count; ?></span>
              <?php endif; ?>
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="<?= base_url('causesverification') ?>" class="nav-link">
              <i class="fa-solid fa-hand-holding-medical"></i> Causes Verification
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="<?= base_url('users') ?>" class="nav-link">
              <i class="fa-solid fa-users"></i> Users
            </a>
          </li>
          <li class="nav-item mt-4">
            <a href="<?= base_url('admin/logout') ?>" class="nav-link text-danger">
              <i class="fa-solid fa-power-off"></i> Logout
            </a>
          </li>
        </ul>
      </div>

      <!-- Offcanvas Mobile Sidebar -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title text-danger fw-bold">KANAVU HELP</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="nav flex-column sidebar-nav list-unstyled">
            <li class="nav-item mb-2">
              <a href="<?= base_url('admindashbord') ?>" class="nav-link"><i class="fa-solid fa-chart-simple"></i>
                Dashboard</a>
            </li>
            <li class="nav-item mb-2">
              <a href="<?= base_url('transactionverification') ?>" class="nav-link"><i
                  class="fa-solid fa-money-bill-transfer"></i> Transactions</a>
            </li>
            <li class="nav-item mb-2">
              <a href="<?= base_url('admin/get_total_amount') ?>" class="nav-link"><i class="fa-solid fa-sliders"></i>
                Admin Set Amount</a>
            </li>
            <li class="nav-item mb-2">
              <a href="<?= base_url('contact_submissions') ?>" class="nav-link"><i
                  class="fa-solid fa-envelope-open-text"></i> Contact Form</a>
            </li>
            <li class="nav-item mb-2">
              <a href="<?= base_url('admin/fundraiser_enquiries') ?>"
                class="nav-link active d-flex align-items-center"><i class="fa-solid fa-clipboard-question"></i>
                <span>Fundraiser Enquiry</span>
                <?php if (!empty($pending_count) && $pending_count > 0): ?>
                  <span class="badge rounded-pill bg-danger ms-auto"
                    style="font-size: 11px; padding: 3px 8px; font-weight: 600;"><?= $pending_count; ?></span>
                <?php endif; ?>
              </a>
            </li>
            <li class="nav-item mb-2">
              <a href="<?= base_url('causesverification') ?>" class="nav-link"><i
                  class="fa-solid fa-hand-holding-medical"></i> Causes Verification</a>
            </li>
            <li class="nav-item mb-2">
              <a href="<?= base_url('users') ?>" class="nav-link"><i class="fa-solid fa-users"></i> Users</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-lg-10 col-12 p-4">
        <!-- Stats Row -->
        <div class="row g-3">
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card d-flex align-items-center justify-content-between">
              <div>
                <div class="text-muted small fw-semibold">TOTAL ENQUIRIES</div>
                <div class="fs-3 fw-bold text-dark"><?= $total_count; ?></div>
              </div>
              <div class="stat-icon icon-blue">
                <i class="fa-solid fa-folder-open"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card d-flex align-items-center justify-content-between">
              <div>
                <div class="text-muted small fw-semibold">PENDING REVIEW</div>
                <div class="fs-3 fw-bold text-warning"><?= $pending_count; ?></div>
              </div>
              <div class="stat-icon icon-yellow">
                <i class="fa-solid fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card d-flex align-items-center justify-content-between">
              <div>
                <div class="text-muted small fw-semibold">APPROVED ENQUIRIES</div>
                <div class="fs-3 fw-bold text-success"><?= $approved_count; ?></div>
              </div>
              <div class="stat-icon icon-green">
                <i class="fa-solid fa-check-circle"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card d-flex align-items-center justify-content-between">
              <div>
                <div class="text-muted small fw-semibold">REJECTED</div>
                <div class="fs-3 fw-bold text-danger"><?= $rejected_count; ?></div>
              </div>
              <div class="stat-icon icon-red">
                <i class="fa-solid fa-ban"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Table Card -->
        <div class="table-card">
          <!-- Filters & Search Toolbar -->
          <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div class="d-flex flex-wrap gap-2">
              <a href="<?= base_url('admin/fundraiser_enquiries?status=all') ?>"
                class="filter-btn <?= ($current_status == 'all') ? 'active' : '' ?>">
                All <span class="badge rounded-pill"><?= $total_count; ?></span>
              </a>
              <a href="<?= base_url('admin/fundraiser_enquiries?status=pending') ?>"
                class="filter-btn <?= ($current_status == 'pending') ? 'active' : '' ?>">
                Pending <span class="badge rounded-pill"><?= $pending_count; ?></span>
              </a>
              <a href="<?= base_url('admin/fundraiser_enquiries?status=approved') ?>"
                class="filter-btn <?= ($current_status == 'approved') ? 'active' : '' ?>">
                Approved <span class="badge rounded-pill"><?= $approved_count; ?></span>
              </a>
              <a href="<?= base_url('admin/fundraiser_enquiries?status=rejected') ?>"
                class="filter-btn <?= ($current_status == 'rejected') ? 'active' : '' ?>">
                Rejected <span class="badge rounded-pill"><?= $rejected_count; ?></span>
              </a>
              <a href="<?= base_url('admin/fundraiser_enquiries?status=hold') ?>"
                class="filter-btn <?= ($current_status == 'hold') ? 'active' : '' ?>">
                On Hold <span class="badge rounded-pill"><?= $hold_count ?? 0; ?></span>
              </a>
            </div>

            <div class="col-12 col-md-4">
              <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i
                    class="fa-solid fa-search text-muted"></i></span>
                <input type="text" id="tableSearch" class="form-control border-start-0"
                  placeholder="Filter by name, phone, category...">
              </div>
            </div>
          </div>

          <!-- Enquiries Table -->
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="enquiryTable">
              <thead>
                <tr>
                  <th style="width: 50px;">#</th>
                  <th>Applicant</th>
                  <th>Contact</th>
                  <th>Category</th>
                  <th>Beneficiary</th>
                  <th>Target (&#8377;)</th>
                  <th>Urgency</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th style="width: 80px;" class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($enquiries)): ?>
                  <?php $sno = 1;
                  foreach ($enquiries as $row): ?>
                    <tr id="row-<?= $row->id; ?>">
                      <td class="text-muted fw-bold"><?= $sno++; ?></td>
                      <td>
                        <div class="fw-bold text-dark"><?= htmlspecialchars($row->fullname); ?></div>
                        <small class="text-muted">#FE-<?= $row->id; ?></small>
                      </td>
                      <td>
                        <?php $displayPhone = (!empty($row->country_code) ? $row->country_code . ' ' : '') . $row->phone; ?>
                        <div><i class="fa-solid fa-phone text-muted small me-1"></i> <a
                            href="tel:<?= htmlspecialchars($displayPhone); ?>"
                            class="text-dark text-decoration-none"><?= htmlspecialchars($displayPhone); ?></a></div>
                        <small class="text-muted"><i class="fa-solid fa-envelope text-muted small me-1"></i>
                          <?= htmlspecialchars($row->email); ?></small>
                      </td>
                      <td>
                        <span
                          class="badge bg-light text-dark border fw-normal px-2 py-1"><?= htmlspecialchars($row->cause_category); ?></span>
                      </td>
                      <td>
                        <div class="fw-semibold"><?= htmlspecialchars($row->beneficiary_name ?: '-'); ?></div>
                        <small
                          class="text-muted"><?= htmlspecialchars($row->beneficiary_relation ?: ''); ?><?= $row->beneficiary_age ? ' (' . $row->beneficiary_age . ' yrs)' : ''; ?></small>
                      </td>
                      <td class="fw-bold text-dark">
                        &#8377;<?= number_format((float) $row->target_amount, 2); ?>
                      </td>
                      <td>
                        <small
                          class="fw-semibold text-secondary"><?= htmlspecialchars($row->urgency_level ?: '-'); ?></small>
                      </td>
                      <td id="status-cell-<?= $row->id; ?>">
                        <?php if ($row->status == 'approved'): ?>
                          <?php if (!empty($row->is_hold) && (int) $row->is_hold === 1): ?>
                            <span class="badge-hold"><i class="fa-solid fa-pause"></i> On Hold</span>
                            <?php if (!empty($row->hold_admin_name)): ?>
                              <div class="small text-muted mt-1" style="font-size: 12px;">
                                <i class="fa-solid fa-user-clock text-warning me-1"></i>By:
                                <strong><?= htmlspecialchars($row->hold_admin_name); ?></strong>
                              </div>
                            <?php endif; ?>
                          <?php else: ?>
                            <span class="badge-approved"><i class="fa-solid fa-check"></i> Approved</span>
                            <?php if (!empty($row->approved_admin_name)): ?>
                              <div class="small text-muted mt-1" style="font-size: 12px;">
                                <i class="fa-solid fa-user-check text-success me-1"></i>By:
                                <strong><?= htmlspecialchars($row->approved_admin_name); ?></strong>
                              </div>
                            <?php endif; ?>
                          <?php endif; ?>
                        <?php elseif ($row->status == 'rejected'): ?>
                          <span class="badge-rejected"><i class="fa-solid fa-ban"></i> Rejected</span>
                        <?php else: ?>
                          <span class="badge-pending"><i class="fa-solid fa-clock"></i> Pending</span>
                        <?php endif; ?>
                      </td>
                      <td class="small text-muted">
                        <?= date('d M Y', strtotime($row->created_at)); ?>
                      </td>
                      <td class="text-center">
                        <div class="d-inline-flex gap-1" id="action-cell-<?= $row->id; ?>">
                          <!-- View Details Button -->
                          <button type="button" class="action-btn btn btn-outline-primary" title="View Full Details"
                            onclick="viewDetails(<?= $row->id; ?>)">
                            <i class="fa-solid fa-eye"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="10" class="text-center py-5 text-muted">
                      <i class="fa-solid fa-inbox fs-1 mb-2 d-block text-secondary"></i>
                      No fundraiser enquiries found in this category.
                    </td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: View Enquiry Details -->
  <div class="modal fade" id="detailsModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-light border-bottom">
          <h5 class="modal-title fw-bold text-dark">
            <i class="fa-solid fa-file-lines text-danger me-2"></i> Fundraiser Enquiry Details (<span
              id="modalRefId"></span>)
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4" id="modalDetailsBody">
          <!-- Dynamically populated -->
        </div>
        <div class="modal-footer bg-light border-top">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <span id="modalActionButtons"></span>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: Approve Confirmation -->
  <div class="modal fade" id="approveModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title fw-bold"><i class="fa-solid fa-check-circle me-2"></i> Approve Fundraiser Enquiry</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <p class="fs-6">Are you sure you want to approve the fundraiser enquiry for <strong
              id="approveApplicantName"></strong>?</p>
          <div class="alert alert-info py-2 small">
            <i class="fa-solid fa-envelope me-1"></i> Approving this enquiry will notify the applicant via email that
            their enquiry is approved and ready for cause creation.
          </div>
          <div class="mb-3">
            <label for="approveRemarks" class="form-label fw-semibold">Admin Remarks (Optional)</label>
            <textarea class="form-control" id="approveRemarks" rows="2"
              placeholder="e.g. Verified eligibility, ready for cause setup."></textarea>
          </div>
          <input type="hidden" id="approveEnquiryId">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success fw-bold" id="confirmApproveBtn" onclick="submitApproval()">
            <i class="fa-solid fa-check me-1"></i> Confirm & Approve
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: Reject Confirmation -->
  <div class="modal fade" id="rejectModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title fw-bold"><i class="fa-solid fa-ban me-2"></i> Reject Fundraiser Enquiry</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <p class="fs-6">Are you sure you want to reject the enquiry for <strong id="rejectApplicantName"></strong>?
          </p>
          <div class="mb-3">
            <label for="rejectRemarks" class="form-label fw-semibold">Reason for Rejection <span
                class="text-danger">*</span></label>
            <textarea class="form-control" id="rejectRemarks" rows="3" placeholder="Provide reason for rejection..."
              required></textarea>
          </div>
          <input type="hidden" id="rejectEnquiryId">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger fw-bold" id="confirmRejectBtn" onclick="submitRejection()">
            <i class="fa-solid fa-ban me-1"></i> Confirm Rejection
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: Hold / Unhold Confirmation -->
  <div class="modal fade" id="holdModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-warning text-dark" id="holdModalHeader">
          <h5 class="modal-title fw-bold" id="holdModalTitle"><i class="fa-solid fa-pause-circle me-2"></i> Hold
            Approved Enquiry</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <p class="fs-6" id="holdModalPrompt">Are you sure you want to put this approved enquiry on hold for <strong
              id="holdApplicantName"></strong>?</p>
          <div class="mb-3">
            <label for="holdRemarks" class="form-label fw-semibold">Remarks (Optional)</label>
            <textarea class="form-control" id="holdRemarks" rows="2"
              placeholder="Enter reason or note for hold/unhold..."></textarea>
          </div>
          <input type="hidden" id="holdEnquiryId">
          <input type="hidden" id="holdActionType">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-warning fw-bold" id="confirmHoldBtn" onclick="submitHoldToggle()">
            <i class="fa-solid fa-pause me-1"></i> Confirm Hold
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Live table search filter
    $('#tableSearch').on('keyup', function () {
      var value = $(this).val().toLowerCase();
      $('#enquiryTable tbody tr').filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });

    // View Details Modal
    function viewDetails(id) {
      $('#modalRefId').text('#FE-' + id);
      $('#modalDetailsBody').html('<div class="text-center py-4"><i class="fa-solid fa-spinner fa-spin fs-2 text-danger"></i><p class="mt-2 text-muted">Loading enquiry details...</p></div>');
      $('#detailsModal').modal('show');

      $.ajax({
        url: '<?= base_url("admin/get_enquiry_details") ?>',
        type: 'GET',
        data: { id: id },
        dataType: 'json',
        success: function (res) {
          if (res.status === 'success') {
            var d = res.data;
            var isHold = parseInt(d.is_hold || 0, 10) === 1;
            var statusBadge = '';
            if (d.status === 'approved') {
              if (isHold) {
                statusBadge = '<span class="badge-hold"><i class="fa-solid fa-pause"></i> On Hold</span>';
              } else {
                statusBadge = '<span class="badge-approved"><i class="fa-solid fa-check"></i> Approved</span>';
              }
            } else if (d.status === 'rejected') {
              statusBadge = '<span class="badge-rejected"><i class="fa-solid fa-ban"></i> Rejected</span>';
            } else {
              statusBadge = '<span class="badge-pending"><i class="fa-solid fa-clock"></i> Pending Review</span>';
            }

            var holdTrackingHtml = '';
            if (d.status === 'approved' && (isHold || d.hold_admin_name || d.unhold_admin_name)) {
              var historyItems = '';
              if (d.hold_history) {
                try {
                  var hist = JSON.parse(d.hold_history);
                  if (Array.isArray(hist) && hist.length > 0) {
                    historyItems = '<ul class="list-unstyled mb-0 mt-2 small">';
                    hist.forEach(function (item) {
                      var label = item.action === 'hold'
                        ? '<span class="text-warning fw-semibold"><i class="fa-solid fa-pause me-1"></i>Hold</span>'
                        : '<span class="text-info fw-semibold"><i class="fa-solid fa-play me-1"></i>Unhold</span>';
                      historyItems += '<li class="mb-1">' + label + ' by <strong>' + $('<div>').text(item.admin_name || 'Admin').html() + '</strong> on ' + (item.at || '') + (item.remarks ? ' — <em>' + $('<div>').text(item.remarks).html() + '</em>' : '') + '</li>';
                    });
                    historyItems += '</ul>';
                  }
                } catch (e) { }
              }

              holdTrackingHtml = `
                <div class="col-12 mt-2">
                  <p class="mb-1 text-muted small fw-semibold">HOLD / UNHOLD TRACKING</p>
                  <div class="p-3 rounded small" style="background-color: ${isHold ? '#fff7ed' : '#f0f9ff'}; border: 1px solid ${isHold ? '#fed7aa' : '#bae6fd'};">
                    <div>
                      <strong>Current State:</strong> ${isHold ? '<span class="text-danger fw-bold">On Hold</span>' : '<span class="text-success fw-bold">Active (Not on Hold)</span>'}
                    </div>
                    ${d.hold_admin_name ? `<div class="mt-1"><strong>Last Hold By:</strong> ${$('<div>').text(d.hold_admin_name).html()} ${d.hold_at ? '(' + d.hold_at + ')' : ''} ${d.hold_remarks ? '- ' + $('<div>').text(d.hold_remarks).html() : ''}</div>` : ''}
                    ${d.unhold_admin_name ? `<div class="mt-1"><strong>Last Unhold By:</strong> ${$('<div>').text(d.unhold_admin_name).html()} ${d.unhold_at ? '(' + d.unhold_at + ')' : ''} ${d.unhold_remarks ? '- ' + $('<div>').text(d.unhold_remarks).html() : ''}</div>` : ''}
                    ${historyItems}
                  </div>
                </div>`;
            }

            var html = `
              <div class="row g-3">
                <div class="col-12 border-bottom pb-2 mb-2 d-flex justify-content-between align-items-center">
                  <h6 class="fw-bold m-0 text-danger">${d.cause_title}</h6>
                  <div>${statusBadge}</div>
                </div>

                <div class="col-md-4">
                  <p class="mb-1 text-muted small fw-semibold">APPLICANT NAME</p>
                  <p class="fw-bold text-dark m-0 text-break">${d.fullname}</p>
                </div>
                <div class="col-md-3">
                  <p class="mb-1 text-muted small fw-semibold">PHONE</p>
                  <p class="fw-bold text-dark m-0"><a href="tel:${(d.country_code ? d.country_code + ' ' : '') + (d.phone || '')}" class="text-dark text-decoration-none">${(d.country_code ? d.country_code + ' ' : '') + (d.phone || '')}</a></p>
                </div>
                <div class="col-md-5">
                  <p class="mb-1 text-muted small fw-semibold">EMAIL</p>
                  <p class="fw-bold text-dark m-0 text-break">${d.email || '-'}</p>
                </div>

                <div class="col-md-4">
                  <p class="mb-1 text-muted small fw-semibold">CAUSE CATEGORY</p>
                  <span class="badge bg-light text-dark border px-2 py-1">${d.cause_category}</span>
                </div>
                <div class="col-md-4">
                  <p class="mb-1 text-muted small fw-semibold">RAISING FOR</p>
                  <p class="fw-bold text-dark m-0">${d.beneficiary_relation || '-'}</p>
                </div>
                <div class="col-md-4">
                  <p class="mb-1 text-muted small fw-semibold">BENEFICIARY</p>
                  <p class="fw-bold text-dark m-0">${d.beneficiary_name || '-'} ${d.beneficiary_age ? '(' + d.beneficiary_age + ' yrs)' : ''}</p>
                </div>

                <div class="col-md-4">
                  <p class="mb-1 text-muted small fw-semibold">LOCATION</p>
                  <p class="fw-bold text-dark m-0">${d.location || '-'}</p>
                </div>
                <div class="col-md-4">
                  <p class="mb-1 text-muted small fw-semibold">TARGET AMOUNT</p>
                  <p class="fw-bold text-success fs-5 m-0">&#8377;${parseFloat(d.target_amount || 0).toLocaleString('en-IN', { minimumFractionDigits: 2 })}</p>
                </div>
                <div class="col-md-4">
                  <p class="mb-1 text-muted small fw-semibold">URGENCY</p>
                  <p class="fw-bold text-dark m-0">${d.urgency_level || '-'}</p>
                </div>

                <div class="col-12 mt-3">
                  <p class="mb-1 text-muted small fw-semibold">CAUSE DESCRIPTION / STORY</p>
                  <div class="p-3 bg-light rounded border text-secondary" style="white-space: pre-wrap; line-height: 1.6;">${d.cause_description}</div>
                </div>

                ${d.status === 'approved' ? `
                <div class="col-md-6">
                  <p class="mb-1 text-muted small fw-semibold">APPROVED BY ADMIN</p>
                  <p class="fw-bold text-success m-0"><i class="fa-solid fa-user-check me-1"></i>${$('<div>').text(d.approved_admin_name || 'Admin').html()}</p>
                </div>
                <div class="col-md-6">
                  <p class="mb-1 text-muted small fw-semibold">APPROVED ON</p>
                  <p class="fw-bold text-dark m-0">${d.approved_at || '-'}</p>
                </div>` : ''}

                ${d.admin_remarks ? `
                <div class="col-12 mt-2">
                  <p class="mb-1 text-muted small fw-semibold">ADMIN REMARKS</p>
                  <div class="p-2 rounded small" style="background-color: #fefce8; border: 1px solid #fef08a; color: #854d0e;">${d.admin_remarks}</div>
                </div>` : ''}

                ${holdTrackingHtml}

                ${(d.status === 'approved' && d.approval_token) ? `
                <div class="col-12 mt-2">
                  <div class="p-3 rounded" style="background-color: #f0fdf4; border: 1px solid #86efac;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <span class="fw-bold text-success small"><i class="fa-solid fa-link me-1"></i> CAUSE CREATION LINK (MANUAL LINK)</span>
                    </div>
                    <div class="input-group mb-2 shadow-sm">
                      <input type="text" class="form-control font-monospace border" readonly value="<?= base_url("fundraiser_approve_token/") ?>${d.approval_token}" style="font-size: 13px; color: #0f172a; background-color: #ffffff !important; border-color: #86efac; font-weight: 500;" onclick="this.select(); copyCauseLink('<?= base_url("fundraiser_approve_token/") ?>${d.approval_token}');">
                      <button type="button" class="btn btn-success px-3 fw-semibold" onclick="copyCauseLink('<?= base_url("fundraiser_approve_token/") ?>${d.approval_token}')" title="Copy Link to Clipboard">
                        <i class="fa-solid fa-copy me-1"></i> Copy Link
                      </button>
                      <button type="button" class="btn btn-outline-success px-3 fw-semibold" style="background-color: #ffffff;" onclick="sendManualLink(${d.id})" title="Send Mail to Applicant">
                        <i class="fa-solid fa-paper-plane me-1"></i> Send Mail
                      </button>
                    </div>
                    <small class="text-muted d-block" style="font-size: 12px;">This link allows the approved applicant to access the cause verification form and create their cause campaign.</small>
                  </div>
                </div>` : ''}

                <div class="col-12 text-end text-muted small mt-2">
                  Submitted On: ${d.created_at}
                  ${d.approved_admin_name ? ' | Approved By: <strong>' + $('<div>').text(d.approved_admin_name).html() + '</strong>' : ''}
                  ${d.approved_at ? ' | Approved On: ' + d.approved_at : ''}
                </div>
              </div>
            `;
            $('#modalDetailsBody').html(html);

            var actionsHtml = '';
            if (d.status === 'approved' && d.approval_token) {
              actionsHtml += `<button type="button" class="btn btn-outline-success me-2" onclick="copyCauseLink('<?= base_url("fundraiser_approve_token/") ?>${d.approval_token}')"><i class="fa-solid fa-link me-1"></i> Copy Cause Link</button>`;
              actionsHtml += `<button type="button" class="btn btn-outline-primary me-2" onclick="sendManualLink(${d.id})"><i class="fa-solid fa-paper-plane me-1"></i> Resend Mail</button>`;
            }
            if (d.status === 'approved') {
              if (isHold) {
                actionsHtml += `<button type="button" class="btn btn-info text-white me-2" data-id="${d.id}" data-name="${$('<div>').text(d.fullname || '').html()}" data-action="unhold" onclick="$('#detailsModal').modal('hide'); openHoldModalFromBtn(this);"><i class="fa-solid fa-play me-1"></i> Unhold Enquiry</button>`;
              } else {
                actionsHtml += `<button type="button" class="btn btn-warning me-2" data-id="${d.id}" data-name="${$('<div>').text(d.fullname || '').html()}" data-action="hold" onclick="$('#detailsModal').modal('hide'); openHoldModalFromBtn(this);"><i class="fa-solid fa-pause me-1"></i> Hold Enquiry</button>`;
              }
            }
            if (d.status !== 'approved') {
              actionsHtml += `<button type="button" class="btn btn-success me-2" onclick="$('#detailsModal').modal('hide'); openApproveModal(${d.id}, '${(d.fullname || '').replace(/'/g, "\\'")}');"><i class="fa-solid fa-check me-1"></i> Approve Enquiry</button>`;
            }
            if (d.status !== 'rejected') {
              actionsHtml += `<button type="button" class="btn btn-danger" onclick="$('#detailsModal').modal('hide'); openRejectModal(${d.id}, '${(d.fullname || '').replace(/'/g, "\\'")}');"><i class="fa-solid fa-times me-1"></i> Reject</button>`;
            }
            $('#modalActionButtons').html(actionsHtml);
          } else {
            $('#modalDetailsBody').html('<div class="alert alert-danger">Failed to load details.</div>');
          }
        },
        error: function () {
          $('#modalDetailsBody').html('<div class="alert alert-danger">Error contacting server.</div>');
        }
      });
    }

    // Open Approve Modal
    function openApproveModal(id, name) {
      $('#approveEnquiryId').val(id);
      $('#approveApplicantName').text(name);
      $('#approveRemarks').val('');
      $('#approveModal').modal('show');
    }

    // Submit Approval
    function submitApproval() {
      var id = $('#approveEnquiryId').val();
      var remarks = $('#approveRemarks').val();
      var btn = $('#confirmApproveBtn');

      btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin me-1"></i> Approving...');

      $.ajax({
        url: '<?= base_url("admin/approve_enquiry") ?>',
        type: 'POST',
        data: { id: id, remarks: remarks },
        dataType: 'json',
        success: function (res) {
          btn.prop('disabled', false).html('<i class="fa-solid fa-check me-1"></i> Confirm & Approve');
          $('#approveModal').modal('hide');

          if (res.status === 'success') {
            $('#status-cell-' + id).html('<span class="badge-approved"><i class="fa-solid fa-check"></i> Approved</span>');
            alert(res.message || 'Enquiry #FE-' + id + ' has been approved successfully.');
            setTimeout(function () { location.reload(); }, 800);
          } else {
            alert('Error: ' + res.message);
          }
        },
        error: function () {
          btn.prop('disabled', false).html('<i class="fa-solid fa-check me-1"></i> Confirm & Approve');
          alert('Network or server error while approving.');
        }
      });
    }

    // Copy Cause Link helper
    function copyCauseLink(link) {
      if (!link) {
        alert('Cause creation link is not available.');
        return;
      }

      function showCopySuccess() {
        alert('Cause creation link copied to clipboard.');
      }

      if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(link).then(function () {
          showCopySuccess();
        }).catch(function () {
          fallbackCopyText(link);
        });
      } else {
        fallbackCopyText(link);
      }
    }

    function fallbackCopyText(text) {
      var textArea = document.createElement("textarea");
      textArea.value = text;
      textArea.style.position = "fixed";
      textArea.style.top = "0";
      textArea.style.left = "0";
      textArea.style.width = "2em";
      textArea.style.height = "2em";
      textArea.style.padding = "0";
      textArea.style.border = "none";
      textArea.style.outline = "none";
      textArea.style.boxShadow = "none";
      textArea.style.background = "transparent";
      document.body.appendChild(textArea);
      textArea.focus();
      textArea.select();
      try {
        var successful = document.execCommand('copy');
        if (successful) {
          alert('Cause creation link copied to clipboard.');
        } else {
          prompt('Copy this link:', text);
        }
      } catch (err) {
        prompt('Copy this link:', text);
      }
      document.body.removeChild(textArea);
    }

    // Send Manual Link via Email
    function sendManualLink(id) {
      if (!confirm('Send manual cause creation link email to this applicant?')) {
        return;
      }
      $.ajax({
        url: '<?= base_url("admin/send_manual_enquiry_link") ?>',
        type: 'POST',
        data: { id: id },
        dataType: 'json',
        success: function (res) {
          if (res.status === 'success') {
            alert('Success: ' + res.message);
          } else {
            alert('Error: ' + res.message);
          }
        },
        error: function () {
          alert('Failed to send link. Server error.');
        }
      });
    }

    // Open Reject Modal
    function openRejectModal(id, name) {
      $('#rejectEnquiryId').val(id);
      $('#rejectApplicantName').text(name);
      $('#rejectRemarks').val('');
      $('#rejectModal').modal('show');
    }

    // Submit Rejection
    function submitRejection() {
      var id = $('#rejectEnquiryId').val();
      var remarks = $('#rejectRemarks').val().trim();
      var btn = $('#confirmRejectBtn');

      if (!remarks) {
        alert('Please enter a reason for rejection.');
        return;
      }

      btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin me-1"></i> Rejecting...');

      $.ajax({
        url: '<?= base_url("admin/reject_enquiry") ?>',
        type: 'POST',
        data: { id: id, remarks: remarks },
        dataType: 'json',
        success: function (res) {
          btn.prop('disabled', false).html('<i class="fa-solid fa-ban me-1"></i> Confirm Rejection');
          $('#rejectModal').modal('hide');

          if (res.status === 'success') {
            $('#status-cell-' + id).html('<span class="badge-rejected"><i class="fa-solid fa-ban"></i> Rejected</span>');
            alert('Enquiry marked as rejected.');
          } else {
            alert('Error: ' + res.message);
          }
        },
        error: function () {
          btn.prop('disabled', false).html('<i class="fa-solid fa-ban me-1"></i> Confirm Rejection');
          alert('Network or server error while rejecting.');
        }
      });
    }

    function openHoldModalFromBtn(btn) {
      var id = $(btn).data('id');
      var name = $(btn).data('name');
      var action = $(btn).data('action');
      openHoldModal(id, name, action);
    }

    function openHoldModal(id, name, action) {
      $('#holdEnquiryId').val(id);
      $('#holdActionType').val(action);
      $('#holdApplicantName').text(name);
      $('#holdRemarks').val('');

      if (action === 'unhold') {
        $('#holdModalHeader').removeClass('bg-warning text-dark').addClass('bg-info text-white');
        $('#holdModalTitle').html('<i class="fa-solid fa-play-circle me-2"></i> Unhold Approved Enquiry');
        $('#holdModalPrompt').html('Are you sure you want to unhold the approved enquiry for <strong>' + $('<div>').text(name).html() + '</strong>?');
        $('#confirmHoldBtn').removeClass('btn-warning').addClass('btn-info text-white').html('<i class="fa-solid fa-play me-1"></i> Confirm Unhold');
      } else {
        $('#holdModalHeader').removeClass('bg-info text-white').addClass('bg-warning text-dark');
        $('#holdModalTitle').html('<i class="fa-solid fa-pause-circle me-2"></i> Hold Approved Enquiry');
        $('#holdModalPrompt').html('Are you sure you want to put the approved enquiry for <strong>' + $('<div>').text(name).html() + '</strong> on hold?');
        $('#confirmHoldBtn').removeClass('btn-info text-white').addClass('btn-warning').html('<i class="fa-solid fa-pause me-1"></i> Confirm Hold');
      }

      $('#holdModal').modal('show');
    }

    function submitHoldToggle() {
      var id = $('#holdEnquiryId').val();
      var action = $('#holdActionType').val();
      var remarks = $('#holdRemarks').val();
      var btn = $('#confirmHoldBtn');

      var defaultBtnHtml = action === 'unhold'
        ? '<i class="fa-solid fa-play me-1"></i> Confirm Unhold'
        : '<i class="fa-solid fa-pause me-1"></i> Confirm Hold';

      btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin me-1"></i> Processing...');

      $.ajax({
        url: '<?= base_url("admin/toggle_enquiry_hold") ?>',
        type: 'POST',
        data: { id: id, action: action, remarks: remarks },
        dataType: 'json',
        success: function (res) {
          btn.prop('disabled', false).html(defaultBtnHtml);
          $('#holdModal').modal('hide');

          if (res.status === 'success') {
            alert(res.message);
            location.reload();
          } else {
            alert('Error: ' + res.message);
          }
        },
        error: function () {
          btn.prop('disabled', false).html(defaultBtnHtml);
          alert('Network or server error while updating hold status.');
        }
      });
    }
  </script>
</body>

</html>