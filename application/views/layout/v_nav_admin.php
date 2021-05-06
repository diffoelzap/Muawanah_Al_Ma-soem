<div class="sidebar" data-active-color="blue" data-image="<?= base_url() ?>template/karyawan/assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a class="simple-text">
                    Admin
                </a>
            </div>
            <div class="logo logo-mini">
                <a  class="simple-text">
                    A
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?= base_url() ?>template/karyawan/assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" class="collapsed">
                            <?= $data->nama_lengkap ?>
                        </a>
                    
                    </div>
                </div>
                <ul class="nav">
                    <li <?php if($this->uri->segment(1) == 'admin' && $this->uri->segment(2) != 'harian'&& $this->uri->segment(2) != 'lapangan' && $this->uri->segment(2) != 'cuti' && $this->uri->segment(2) != 'peminjaman'){echo 'class="active"';}?>>
                        <a href="<?= base_url('admin')?>">
                            <i class="material-icons">dashboard</i>
                            <p>Hal. Pengguna</p>
                        </a>
                    </li>
                    
                    <li <?php if($this->uri->segment(2) == 'harian' || $this->uri->segment(2) == 'lapangan'){echo 'class="active"';}?>>
                        <a data-toggle="collapse" href="#formsExamples" <?php if($this->uri->segment(2) == 'harian' || $this->uri->segment(2) == 'lapangan'){echo 'aria-expanded="true"';}?>>
                            <i class="material-icons">content_paste</i>
                            <p>Tugas
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="<?php if($this->uri->segment(2) == 'harian' || $this->uri->segment(2) == 'lapangan'){echo "collapse in";}else{echo "collapse";}?>" id="formsExamples">
                            <ul class="nav">
                                <li <?php if($this->uri->segment(2) == 'harian'){echo 'class="active"';}?>>
                                    <a href="<?= base_url('admin/harian')?>">Tugas Harian</a>
                                </li>
                                <li <?php if($this->uri->segment(2) == 'lapangan'){echo 'class="active"';}?>>
                                    <a href="<?= base_url('admin/lapangan')?>">Tugas Lapangan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li <?php if($this->uri->segment(2) == 'cuti' || $this->uri->segment(2) == 'peminjaman'){echo 'class="active"';}?>>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="material-icons">date_range</i>
                            <p>Permohonan
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="<?php if($this->uri->segment(2) == 'cuti' || $this->uri->segment(2) == 'peminjaman'){echo "collapse in";}else{echo "collapse";}?>" id="tablesExamples">
                            <ul class="nav">
                                <li <?php if($this->uri->segment(2) == 'cuti'){echo 'class="active"';}?>>
                                    <a href="<?= base_url('admin/cuti')?>">Cuti</a>
                                </li>
                                <li <?php if($this->uri->segment(2) == 'peminjaman'){echo 'class="active"';}?>>
                                    <a href="<?= base_url('admin/peminjaman')?>">Peminjaman Mobil</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="about.html">
                            <i class="material-icons">info</i>
                            <p>Reseller</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/logout_admin')?>">
                            <i class="material-icons">exit_to_app</i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> 
                        <?php
                        if($this->uri->segment(1) == 'admin' && $this->uri->segment(2) != 'harian' && $this->uri->segment(2) != 'lapangan' && $this->uri->segment(2) != 'cuti' && $this->uri->segment(2) != 'peminjaman') {
                          echo 'Dashboard';  
                        }else if($this->uri->segment(2) == 'harian'){
                          echo 'Data Tugas Harian';
                        }else if($this->uri->segment(2) == 'lapangan'){
                          echo 'Data Tugas Lapangan';
                        }else if($this->uri->segment(2) == 'cuti'){
                            echo 'Data Permohonan Cuti';
                        }else if($this->uri->segment(2) == 'peminjaman'){
                            echo 'Data Peminjaman Mobil';
                        }
                        ?>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>         
            <div class="content">
                <div class="container-fluid">