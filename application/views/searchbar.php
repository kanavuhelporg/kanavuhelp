<div class="col-md-7 ms-4 d-flex align-items-baseline justify-content-between ps-gray rounded-2 py-1">
          <input type="text" style="outline-style:none;" class="w-75 ps-3 border-0 ps-gray" placeholder="search">
          <span style="cursor:pointer;" class="pe-3">
            <i class="fa-solid fa-magnifying-glass"></i></span>
        </div>

        <div class="col-md-3 d-flex align-items-baseline justify-content-evenly">

          <button style="outline-style:none;" class="drop-down-toggle border-0 d-flex align-items-center bg-white" data-bs-toggle="dropdown">
            <span class="p-1 px-2 ps-user rounded-circle"><i class="fa-solid fa-user"></i></span>&nbsp;&nbsp;
            <span style="font-weight:500;"><?php
                                            if (!isset($_SESSION)) {
                                              session_start();
                                            }

                                            if ($this->session->userdata('adminName')) {
                                              echo $this->session->userdata('adminName');
                                            } else {
                                              echo "Manager Name";
                                            }
                                            ?></span>&nbsp;&nbsp;
            <i class="fa-solid fa-angle-down"></i>

          </button>

          <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="<?= base_url('/adminlogout') ?>">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>
          </ul>

          <span class="d-flex justify-content-center"><i class="fa-solid fa-bell"></i>&nbsp;<div style="width:30px;height:30px;background-color:red;color:white;margin-top:-15px;" class="rounded-circle d-flex justify-content-center align-items-center">
          <?php if($this->session->userdata('unverifiedtransactions') > 0){echo $this->session->userdata("unverifiedtransactions");}?></div> </span>

        </div>