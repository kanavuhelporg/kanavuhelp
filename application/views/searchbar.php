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