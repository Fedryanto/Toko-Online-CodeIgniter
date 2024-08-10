<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href=" <?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Fashi Shop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href=" <?php echo base_url('welcome') ?> ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Semua Produk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori Produk
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/sepatu_wanita') ?>">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3,18H11.7L17,14H18V18H20V14C20,14 21,12 21,10C21,8 20.5,6 20.5,6H18.5L18,7L10,14H8L3,16V18Z" />
                    </svg>
                    <span>Sepatu Wanita</span></a>  <!-- Sebelumnya Elektronik -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/sepatu_pria') ?>">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M21.5,9V8H20.5L19.5,9H15L14,8H13L7,12H4A2,2 0 0,0 2,14V16H10L13,15H15V16H21.5V14C21.5,14 22,13 22,11.5C22,10 21.5,9 21.5,9Z" />
                </svg>
                    <span>Sepatu Pria</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pakaian_wanita') ?>">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4A3.5 3.5 0 0 0 8.5 7.5H10.5A1.5 1.5 0 0 1 12 6A1.5 1.5 0 0 1 13.5 7.5A1.5 1.5 0 0 1 12 9C11.45 9 11 9.45 11 10V11.75L2.4 18.2A1 1 0 0 0 3 20H21A1 1 0 0 0 21.6 18.2L13 11.75V10.85A3.5 3.5 0 0 0 15.5 7.5A3.5 3.5 0 0 0 12 4M12 13.5L18 18H6Z" />
                </svg>
                    <span>Pakaian Wanita</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pakaian_pria') ?>">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M16,21H8A1,1 0 0,1 7,20V12.07L5.7,13.07C5.31,13.46 4.68,13.46 4.29,13.07L1.46,10.29C1.07,9.9 1.07,9.27 1.46,8.88L7.34,3H9C9,4.1 10.34,5 12,5C13.66,5 15,4.1 15,3H16.66L22.54,8.88C22.93,9.27 22.93,9.9 22.54,10.29L19.71,13.12C19.32,13.5 18.69,13.5 18.3,13.12L17,12.12V20A1,1 0 0,1 16,21" />
                </svg>
                    <span>Pakaian Pria</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/other') ?>">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.9,17.39C17.64,16.59 16.89,16 16,16H15V13A1,1 0 0,0 14,12H8V10H10A1,1 0 0,0 11,9V7H13A2,2 0 0,0 15,5V4.59C17.93,5.77 20,8.64 20,12C20,14.08 19.2,15.97 17.9,17.39M11,19.93C7.05,19.44 4,16.08 4,12C4,11.38 4.08,10.78 4.21,10.21L9,15V16A2,2 0 0,0 11,18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                </svg>
                    <span>Other</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <div class="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                            <?php $keranjang = '<i class="fas fa-shopping-cart"></i> Keranjang Belanja : '.$this->cart->total_items(). ' Items' ?>
                            <?php echo anchor('dashboard/detail_keranjang',$keranjang ) ?>
                            </li>
                        </ul>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <ul class="na navbar-nav navbar-right" >
                            <?php if($this->session->userdata('username')) { ?>
                            <li><div> Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                            <li class="ml-2"> <?php echo anchor('auth/logout',' Logout') ?></li>
                            <?php } else { ?>
                            <li><?php echo anchor('auth/login', ' Login'); ?></li>
                            <?php } ?>
                        </ul>
                    </div>


                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>