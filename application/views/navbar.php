<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="PBL Project By TRPL" data-placement="bottom" target="_blank">
                Food Journal saya
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="Home" class="nav-link"><ion-icon name="home-outline"></ion-icon> Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="Tentang Website Ini" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> About</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('guest/landing_artikel') ?>" data-toggle="tooltip" title="Cari Artikel" class="nav-link"><ion-icon name="stats-chart-outline"></ion-icon> Artikel</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('guest/landing_makanan_umum') ?>" data-toggle="tooltip" title="Cari Artikel" class="nav-link"><ion-icon name="pizza"></ion-icon> Nutrisi Makanan</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('guest') ?>" data-toggle="tooltip" title="Keuntungan Menjadi Member" class="nav-link"><ion-icon name="gift-outline"></ion-icon> Benefit</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth') ?>" data-toggle="tooltip" title="Login" class="btn btn-primary btn-round">Login</a>

                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/signup') ?>" data-toggle="tooltip" title="Ayo bergabung dengan Kami" class="btn btn-info btn-round">Sign up</a>
            </ul>
        </div>

    </div>
</nav>