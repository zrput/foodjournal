<body>
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('name'); ?></span>

            <img class="img-profile rounded-circle" src="<?php echo base_url('asset/profiles.png') ?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                <ion-icon name="log-out-outline" class="text-gray-600"></ion-icon>
                Logout
            </a>
            <a class="dropdown-item" href="<?php echo base_url('') ?>">
                <ion-icon name="settings-outline" class="text-gray-600"></ion-icon>
                Profile Setting
            </a>
            <!-- <a class="dropdown-item" href="<?php echo base_url('') ?>">
                <ion-icon name="lock-open-outline" class="text-gray-600"> </ion-icon>
                Ubah Password
            </a> -->
        </div>

    </li>

    <li class="nav-item">
        <a href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="Home" class="nav-link" target="blank" style="color:#606060;"> <ion-icon name="home-outline"> </ion-icon>Home</a>
    </li>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda ingin keluar dari website ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?php echo base_url('auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>