<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="<?php echo PATH_THEME; ?>" class="simple-text">
                INVENTARIS BARANG
            </a>
        </div>

        <ul class="nav">
            <li class="<?php echo isset($dashboard)?$dashboard:NULL; ?>">
                <a href="<?php echo PATH_THEME; ?>">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="<?php echo isset($data_barang)?$data_barang:NULL; ?>">
                <a href="<?php echo PATH_THEME; ?>inventaris">
                    <i class="pe-7s-box2"></i>
                    <p>Data Barang</p>
                </a>
            </li>
            <li class="<?php echo isset($jenis_barang)?$jenis_barang:NULL; ?>">
                <a href="<?php echo PATH_THEME; ?>jenis_barang">
                    <i class="pe-7s-network"></i>
                    <p>Jenis Barang</p>
                </a>
            </li>
            <li class="<?php echo isset($dana_barang)?$dana_barang:NULL; ?>">
                <a href="<?php echo PATH_THEME; ?>dana_barang">
                    <i class="pe-7s-cash"></i>
                    <p>Dana Barang</p>
                </a>
            </li>
            <!-- <li class="<?php echo isset($users)?$users:NULL; ?>">
                <a href="<?php echo PATH_THEME; ?>users">
                    <i class="pe-7s-users"></i>
                    <p>Users</p>
                </a>
            </li> -->
            <li class="<?php echo isset($rekap_barang)?$rekap_barang:NULL; ?>">
                <a href="<?php echo PATH_THEME; ?>rekap_barang">
                    <i class="pe-7s-note2"></i>
                    <p>Rekap Barang</p>
                </a>
            </li>

    <li class="active-pro">
                <a href="<?php echo PATH_THEME ?>tentang-perusahaan">
                    <i class="pe-7s-paper-plane"></i>
                    <p>Tentang Perusahaan</p>
                </a>
            </li>
        </ul>
  </div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo PATH_THEME; ?>">Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-dashboard"></i>
            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>

                    <li>
                       <a href="">
                            <i class="fa fa-search"></i>
            <p class="hidden-lg hidden-md">Search</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                    Akun
                <b class="caret"></b>
              </p>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo PATH_THEME; ?>logout"><i class="pe-7s-power"></i> Logout</a></li>
                          </ul>
                    </li>
        <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
