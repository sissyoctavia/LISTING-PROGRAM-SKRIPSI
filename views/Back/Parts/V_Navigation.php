    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo" style="background-color: white; ">
                <a href="<?php echo base_url() ?>dashboard/admin">
                    <b class="logo-abbr"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" width="50"> </b>
                    <!-- <span class="logo-compact"><img src="<?php echo base_url() ?>assets/admin/images/logo-compact.png" alt=""></span> -->
                    <span class="brand-title" style="color: black; position:center">
                        <img src="<?php echo base_url() ?>assets/img/logo_header.png" alt="" width="150"> 
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="<?php echo base_url() ?>assets/img/person.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-user"></i> <span><?php echo $this->session->userdata('username') ?> </span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li><a href="<?php echo base_url() ?>logout"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"><?php echo $this->session->userdata('role') ?></li>
                    <?php if ($this->session->userdata('hak_akses') == "admin") { ?>
                    <li>
                        <a href="<?php echo base_url() ?>admin/akun" aria-expanded="false">
                            <i class="fa fa-user"></i> <span class="nav-text">Akun</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/karyawan" aria-expanded="false">
                            <i class="fa fa-users"></i> <span class="nav-text">Karyawan</span>
                        </a>
                    </li>    
                    <?php }else if($this->session->userdata('hak_akses') == "Leader"){ ?>
                        <li>
                            <a href="<?php echo base_url() ?>admin/penilaian" aria-expanded="false">
                                <i class="fa fa-mortar-board"></i> <span class="nav-text">Penilaian</span>
                            </a>
                        </li>
                    <?php }else if($this->session->userdata('hak_akses') == "Site Head"){?>
                        <li>
                            <a href="<?php echo base_url() ?>admin/penilaian/approval" aria-expanded="false">
                                <i class="fa fa-check-square-o"></i> <span class="nav-text">Approve Penilaian</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>