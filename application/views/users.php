<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Verification</title>
    <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
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

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, auto));
            gap: 20px;
        }

        ul>li {
            cursor: pointer;
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

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: black;
        }

        /* Pagination style */
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
            max-width: 250px;
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
            color: black;
            font-weight: 400;
        }

        #menu-bar .nav-link:hover {
            color: black;
        }

        #menu-bar .nav-link.active {
            background-color: red;
            color: #fff !important;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

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

        @media screen and (max-width: 991px) {
            #menu-bar {
                display: none;
            }

            #search-bar {
                display: none;
            }

            .ps-logo {
                justify-content: space-between;
            }

            .table-container {
                width: 100%;
                overflow-x: auto;
                border: 1px solid #dee2e6;
                border-radius: 0.375rem;
            }

            .main-content {
                padding: 10px;
            }
        }

        @media screen and (min-width: 992px) {
            .ham-menu {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Top bar -->
            <div class="col-lg-2 col-12 border-bottom ps-gray py-3">
                <div class="ps-logo">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar"
                        class="ham-menu ms-4 border-0 bg-transparent">
                        <div class="ham-line"></div>
                        <div class="ham-line"></div>
                        <div class="ham-line"></div>
                    </button>
                    <div class="d-flex align-items-center">
                        <span class="rounded-circle text-white px-2 ps-letter">K</span>&nbsp;
                        <span class="heading-ponsoft fs-5 position-relative"
                            style="top:1px; color:red;">KANAVUHELP</span>
                    </div>
                </div>
            </div>

            <div id="search-bar"
                class="col-lg-10 col-12 d-flex align-items-center justify-content-between border-bottom">
                <div class="col-lg-7 ms-4"></div>
                <div class="col-lg-3 d-none d-lg-flex align-items-baseline justify-content-evenly">
                    <button style="outline-style:none;"
                        class="drop-down-toggle border-0 d-flex align-items-center bg-white" data-bs-toggle="dropdown">
                        <span class="p-1 px-2 ps-user rounded-circle"><i
                                class="fa-solid fa-user"></i></span>&nbsp;&nbsp;
                        <span style="font-weight:500;">
                            <?= $this->session->userdata('adminName') ?: 'Manager Name'; ?>
                        </span>&nbsp;&nbsp;
                        <i class="fa-solid fa-angle-down"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-decoration-none style-logout" data-bs-toggle="modal"
                                data-bs-target="#logoutModal">
                                <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" style="min-height: calc(100vh - 72px);">
            <!-- Sidebar -->
            <div id="menu-bar" class="col-lg-2 ps-gray d-none d-lg-block">
                <ul class="d-grid list-unstyled">
                    <li class="nav-item py-3 fs-6">
                        <a href="#" style="font-weight:400;color:grey;" class="nav-link text-decoration-none">MENU</a>
                    </li>

                    <li class="nav-item py-2">
                        <a href="<?= base_url('admindashbord') ?>"
                            class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admindashbord') ? 'active' : '' ?>">
                            <i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admin Dashboard
                        </a>
                    </li>

                    <li class="nav-item py-2">
                        <a href="<?= base_url('transactionverification') ?>"
                            class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'transactionverification') ? 'active' : '' ?>">
                            <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Transaction
                        </a>
                    </li>

                    <li class="nav-item py-2">
                        <a href="<?= base_url('admin/get_total_amount') ?>"
                            class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admin/get_total_amount') ? 'active' : '' ?>">
                            <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Admin Set Amount
                        </a>
                    </li>

                    <li class="nav-item py-2">
                        <a href="<?= base_url('contact_submissions') ?>"
                            class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'contact_submissions') ? 'active' : '' ?>">
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Enquiries
                        </a>
                    </li>

                    <li class="nav-item py-2">
                        <a href="<?= base_url('causesverification') ?>"
                            class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'causesverification') ? 'active' : '' ?>">
                            <i class="fa-solid fa-hand-holding-medical"></i>&nbsp;&nbsp;Causes verification
                        </a>
                    </li>

                    <li class="nav-item py-2">
                        <a href="<?= base_url('users') ?>"
                            class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'users') ? 'active' : '' ?>">
                            <i class="fa-solid fa-users"></i>&nbsp;&nbsp;Users
                        </a>
                    </li>

                    <li class="nav-item py-2">
                        <a href="#" class="nav-link text-decoration-none" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">
                            <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Offcanvas Sidebar for Mobile -->
            <div class="offcanvas offcanvas-start offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">MENU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <ul class="d-grid list-unstyled">
                        <li class="nav-item py-3 fs-6 px-3">
                            <a href="#" style="font-weight:400;color:grey;"
                                class="nav-link text-decoration-none">MENU</a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="<?= base_url('admindashbord') ?>"
                                class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admindashbord') ? 'active' : '' ?>">
                                <i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;Admin Dashboard
                            </a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="<?= base_url('transactionverification') ?>"
                                class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'transactionverification') ? 'active' : '' ?>">
                                <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp;Transaction
                            </a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="<?= base_url('admin/get_total_amount') ?>"
                                class="nav-link text-decoration-none ps-gray rounded <?= (uri_string() == 'admin/get_total_amount') ? 'active' : '' ?>">
                                <i class="fa-solid fa-money-bill-transfer"></i>&nbsp;&nbsp; Admin Set Amount
                            </a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="<?= base_url('contact_submissions') ?>"
                                class="nav-link text-decoration-none <?= (uri_string() == 'contact_submissions') ? 'active' : '' ?>">
                                <i class="fa-solid fa-envelope-open-text"></i>&nbsp;&nbsp;Enquiries
                            </a>
                        </li>

                        <li class="nav-item px-3 py-2">
                            <a href="<?= base_url('causesverification') ?>"
                                class="nav-link text-decoration-none <?= (uri_string() == 'causesverification') ? 'active' : '' ?>">
                                <i class="fa-solid fa-hand-holding-medical"></i>&nbsp;&nbsp;Causes verification
                            </a>
                        </li>

                        <li class="nav-item px-3 py-2">
                            <a href="<?= base_url('users') ?>"
                                class="nav-link text-decoration-none <?= (uri_string() == 'users') ? 'active' : '' ?>">
                                <i class="fa-solid fa-users"></i>&nbsp;&nbsp;Users
                            </a>
                        </li>

                        <li class="nav-item py-2 px-3">
                            <a href="#" class="nav-link text-decoration-none" data-bs-toggle="modal"
                                data-bs-target="#logoutModal">
                                <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-lg-10 col-12 main-content">
                <div class="container-fluid px-3 px-md-4 pt-3 w-100">

                    <!-- Search box & Bulk Action -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-4 position-relative">
                            <input type="text" id="search-input" class="form-control pe-5"
                                placeholder="Search user name or email or phoneno or location">
                            <button id="clear-filter"
                                class="btn position-absolute end-0 start-2 top-50 translate-middle-y"
                                style="display: none; background: none; border: none; margin-right: 10px;">
                                <i class="fas fa-times text-danger"></i>
                            </button>
                        </div>
                        <div class="col-md-8 d-flex align-items-center gap-2 mt-2 mt-md-0">
                            <span class="fw-bold fs-6">Filter by Date:</span>
                            <input type="date" id="filter-date" class="form-control form-control-sm"
                                style="width: 160px;">
                            <button id="bulk-delete-selected-btn" onclick="deleteSelectedUsers()"
                                class="btn btn-danger btn-sm px-3 ms-3" disabled>
                                <i class="fa fa-trash"></i> Delete Selected
                            </button>
                        </div>
                    </div>

                    <!-- User Table -->
                    <div class="table-container">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="ps-gray">
                                    <th><input type="checkbox" id="select-all-users" style="cursor: pointer;"></th>
                                    <th>S.No</th>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Location</th>
                                    <th>Created Date</th>
                                    <th>Active Status (Used)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="users-tbody">
                                <?php if (!empty($users)): ?>
                                    <?php foreach ($users as $index => $u): ?>
                                        <tr
                                            data-date="<?= !empty($u->created_at) ? date('Y-m-d', strtotime($u->created_at)) : ''; ?>">
                                            <td><input type="checkbox" class="user-select-chk" value="<?= $u->id; ?>"
                                                    data-status="<?= $u->status; ?>" style="cursor: pointer;"></td>
                                            <td><?= $index + 1; ?></td>
                                            <td><?= htmlspecialchars($u->id); ?></td>
                                            <td><?= htmlspecialchars($u->name); ?></td>
                                            <td><?= htmlspecialchars($u->email); ?></td>
                                            <td><?= htmlspecialchars($u->mobileNumber); ?></td>
                                            <td><?= htmlspecialchars($u->location); ?></td>
                                            <td><?= !empty($u->created_at) ? date('d-m-Y', strtotime($u->created_at)) : 'NULL'; ?>
                                            </td>
                                            <td class="fw-bold <?= $u->status == 'Yes' ? 'text-success' : 'text-danger'; ?>">
                                                <?= $u->status; ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="deleteUser(<?= $u->id; ?>, '<?= $u->status; ?>')" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr id="no-results">
                                        <td colspan="11" class="text-center">No users found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Pagination" class="mt-3" id="pagination-nav" style="display: none;">
                        <ul class="pagination" id="pagination-ul"></ul>
                    </nav>

                </div>
            </div>

        </div>
    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        // Delete individual user
        function deleteUser(id, status) {
            let confirmMsg = 'Are you sure you want to delete this user?';
            if (status === 'Yes') {
                confirmMsg = 'Warning: This user is active (has transactions, campaigns, or profile data). Deleting this user might cause database inconsistencies or orphaned data.\n\nAre you sure you want to proceed and delete this user?';
            }
            if (confirm(confirmMsg)) {
                $.ajax({
                    url: '<?php echo site_url() . "admin/delete_user"; ?>',
                    type: 'POST',
                    data: { id: id },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            alert(response.message || 'User deleted successfully!');
                            location.reload();
                        } else {
                            alert(response.message || 'Error deleting user.');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log('AJAX Error:', error);
                        alert('Something went wrong.');
                    }
                });
            }
        }

        // Search & Pagination Logic
        document.addEventListener('DOMContentLoaded', function () {
            const tbody = document.getElementById('users-tbody');
            const rows = Array.from(tbody.querySelectorAll('tr')).filter(row => !row.id.includes('no-results'));
            const searchInput = document.getElementById('search-input');
            const clearSearch = document.getElementById('clear-filter');
            const filterDate = document.getElementById('filter-date');
            const paginationNav = document.getElementById('pagination-nav');
            const paginationUl = document.getElementById('pagination-ul');
            const recordsPerPage = 10;
            let currentPage = 1;
            let filteredRows = rows;

            function displayPage(page) {
                const start = (page - 1) * recordsPerPage;
                const end = start + recordsPerPage;

                rows.forEach(row => row.style.display = 'none');

                const pageRows = filteredRows.slice(start, end);
                pageRows.forEach(row => {
                    row.style.display = '';
                });

                pageRows.forEach((row, index) => {
                    row.cells[1].textContent = start + index + 1;
                });

                const noResultsRow = document.getElementById('no-results');
                if (noResultsRow) {
                    noResultsRow.style.display = filteredRows.length === 0 ? '' : 'none';
                }
            }

            function generatePagination() {
                paginationUl.innerHTML = '';
                const totalPages = Math.ceil(filteredRows.length / recordsPerPage);

                if (totalPages <= 1) {
                    paginationNav.style.display = 'none';
                    return;
                }

                paginationNav.style.display = 'block';

                const prevLi = document.createElement('li');
                prevLi.classList.add('page-item');
                if (currentPage === 1) prevLi.classList.add('disabled');
                prevLi.innerHTML = `<a class="page-link" href="#" aria-label="Previous"><i class="fas fa-arrow-left"></i></a>`;
                prevLi.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage > 1) {
                        currentPage--;
                        displayPage(currentPage);
                        generatePagination();
                    }
                });
                paginationUl.appendChild(prevLi);

                const maxVisiblePages = 5;
                let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
                let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

                if (endPage - startPage + 1 < maxVisiblePages) {
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                if (startPage > 1) {
                    const firstLi = document.createElement('li');
                    firstLi.classList.add('page-item');
                    firstLi.innerHTML = `<a class="page-link" href="#">1</a>`;
                    firstLi.addEventListener('click', function (e) {
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

                for (let i = startPage; i <= endPage; i++) {
                    const li = document.createElement('li');
                    li.classList.add('page-item');
                    if (i === currentPage) li.classList.add('active');
                    li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                    li.addEventListener('click', function (e) {
                        e.preventDefault();
                        currentPage = i;
                        displayPage(currentPage);
                        generatePagination();
                    });
                    paginationUl.appendChild(li);
                }

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
                    lastLi.addEventListener('click', function (e) {
                        e.preventDefault();
                        currentPage = totalPages;
                        displayPage(currentPage);
                        generatePagination();
                    });
                    paginationUl.appendChild(lastLi);
                }

                const nextLi = document.createElement('li');
                nextLi.classList.add('page-item');
                if (currentPage === totalPages) nextLi.classList.add('disabled');
                nextLi.innerHTML = `<a class="page-link" href="#" aria-label="Next"><i class="fas fa-arrow-right"></i></a>`;
                nextLi.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage < totalPages) {
                        currentPage++;
                        displayPage(currentPage);
                        generatePagination();
                    }
                });
                paginationUl.appendChild(nextLi);
            }

            function filterRows() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const selectedDate = filterDate ? filterDate.value : '';

                // Clear checkbox selections on new filter to avoid deleting invisible rows
                const selectAllUsers = document.getElementById('select-all-users');
                if (selectAllUsers) selectAllUsers.checked = false;
                document.querySelectorAll('.user-select-chk').forEach(chk => chk.checked = false);
                const bulkDeleteSelectedBtn = document.getElementById('bulk-delete-selected-btn');
                if (bulkDeleteSelectedBtn) bulkDeleteSelectedBtn.disabled = true;

                filteredRows = rows.filter(row => {
                    // Match Date first
                    if (selectedDate !== '') {
                        const rowDate = row.getAttribute('data-date') || '';
                        if (rowDate !== selectedDate) {
                            return false;
                        }
                    }

                    // Match Search Term
                    if (searchTerm !== '') {
                        let matchSearch = false;
                        const searchIndices = [3, 4, 5, 6, 8];
                        for (let i of searchIndices) {
                            const cellText = row.children[i]?.textContent.toLowerCase() || '';
                            if (cellText.includes(searchTerm)) {
                                matchSearch = true;
                                break;
                            }
                        }
                        return matchSearch;
                    }

                    return true;
                });

                clearSearch.style.display = (searchInput.value || selectedDate) ? 'block' : 'none';
                currentPage = 1;
                displayPage(currentPage);
                generatePagination();
            }

            clearSearch.addEventListener('click', function () {
                searchInput.value = '';
                if (filterDate) filterDate.value = '';
                clearSearch.style.display = 'none';
                filterRows();
                searchInput.focus();
            });

            searchInput.addEventListener('input', function () {
                clearTimeout(this.searchTimeout);
                this.searchTimeout = setTimeout(filterRows, 300);
            });

            if (filterDate) {
                filterDate.addEventListener('change', filterRows);
            }

            // Select all / Individual checkbox listeners
            const selectAllUsers = document.getElementById('select-all-users');
            const bulkDeleteSelectedBtn = document.getElementById('bulk-delete-selected-btn');

            function updateBulkDeleteBtnState() {
                const checkedCount = document.querySelectorAll('.user-select-chk:checked').length;
                if (bulkDeleteSelectedBtn) {
                    bulkDeleteSelectedBtn.disabled = checkedCount === 0;
                }
            }

            if (selectAllUsers) {
                selectAllUsers.addEventListener('change', function () {
                    const checkboxes = document.querySelectorAll('.user-select-chk');
                    checkboxes.forEach(chk => {
                        const row = chk.closest('tr');
                        if (row && row.style.display !== 'none') {
                            chk.checked = selectAllUsers.checked;
                        }
                    });
                    updateBulkDeleteBtnState();
                });
            }

            document.getElementById('users-tbody').addEventListener('change', function (e) {
                if (e.target && e.target.classList.contains('user-select-chk')) {
                    updateBulkDeleteBtnState();
                    const totalVisibleChks = Array.from(document.querySelectorAll('.user-select-chk')).filter(chk => chk.closest('tr').style.display !== 'none');
                    const checkedVisibleChks = totalVisibleChks.filter(chk => chk.checked);
                    if (selectAllUsers) {
                        selectAllUsers.checked = totalVisibleChks.length > 0 && totalVisibleChks.length === checkedVisibleChks.length;
                    }
                }
            });

            window.deleteSelectedUsers = function () {
                const checkedChks = Array.from(document.querySelectorAll('.user-select-chk:checked'));
                if (checkedChks.length === 0) {
                    alert('Please select at least one user to delete.');
                    return;
                }

                const ids = checkedChks.map(chk => parseInt(chk.value));
                let hasActive = false;
                checkedChks.forEach(chk => {
                    if (chk.getAttribute('data-status') === 'Yes') {
                        hasActive = true;
                    }
                });

                let confirmMsg = `Are you sure you want to delete the ${ids.length} selected user(s)?`;
                if (hasActive) {
                    confirmMsg = `Warning: One or more selected users are active (have transactions, campaigns, or profile data). Deleting them might cause database inconsistencies or orphaned data.\n\nAre you sure you want to proceed and delete the ${ids.length} selected user(s)?`;
                }

                if (confirm(confirmMsg)) {
                    $.ajax({
                        url: '<?php echo site_url() . "admin/delete_selected_users"; ?>',
                        type: 'POST',
                        data: { ids: ids },
                        dataType: 'json',
                        success: function (response) {
                            if (response.status === 'success') {
                                alert(response.message || 'Selected users deleted successfully!');
                                location.reload();
                            } else {
                                alert(response.message || 'Error deleting selected users.');
                            }
                        },
                        error: function (xhr, status, error) {
                            console.log('AJAX Error:', error);
                            alert('Something went wrong.');
                        }
                    });
                }
            };

            if (rows.length > 0) {
                displayPage(currentPage);
                generatePagination();
            } else {
                paginationNav.style.display = 'none';
            }
        });
    </script>
</body>

</html>