<div class="sidebar" data-active-color="blue" data-image="<?=base_url()?>template/karyawan/assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a class="simple-text">
                    Karyawan
                </a>
            </div>
            <div class="logo logo-mini">
                <a  class="simple-text">
                    KY
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?=base_url('assets/gambar_profile/'.$data->foto_profil)?>" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" class="collapsed">
                            <?= $data->nama_lengkap ?>
                        </a>
                    
                    </div>
                </div>
                <ul class="nav">
                    <li <?php if($this->uri->segment(1) == 'karyawan' && $this->uri->segment(2) != 'about'|| $this->uri->segment(2) == 'edit' && $this->uri->segment(2) != 'about'){echo 'class="active"';}?>>
                        <a href="<?= base_url('karyawan')?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
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
                                    <a href="<?= base_url('tugas/harian')?>">Tugas Harian</a>
                                </li>
                                <li <?php if($this->uri->segment(2) == 'lapangan'){echo 'class="active"';}?>>
                                    <a href="<?= base_url('tugas/lapangan')?>">Tugas Lapangan</a>
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
                                    <a href="<?= base_url('permohonan/cuti')?>">Cuti</a>
                                </li>
                                <li <?php if($this->uri->segment(2) == 'peminjaman'){echo 'class="active"';}?>>
                                    <a href="<?= base_url('permohonan/peminjaman')?>">Peminjaman Mobil</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li <?php if($this->uri->segment(1) == 'karyawan' && $this->uri->segment(2) == 'about'){echo 'class="active"';}?>>
                        <a href="<?= base_url('karyawan/about')?>">
                            <i class="material-icons">info</i>
                            <p>About</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/logout_karyawan')?>">
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
                        if($this->uri->segment(1) == 'karyawan' && $this->uri->segment(2) != 'about') {
                          echo 'Dashboard';  
                        }else if($this->uri->segment(2) == 'edit'){
                          echo 'Edit Profile'; 
                        }else if($this->uri->segment(2) == 'harian'){
                          echo 'Data Tugas Harian';
                        }else if($this->uri->segment(2) == 'lapangan'){
                          echo 'Data Tugas Lapangan';
                        }else if($this->uri->segment(2) == 'cuti'){
                            echo 'Data Permohonan Cuti';
                        }else if($this->uri->segment(2) == 'peminjaman'){
                            echo 'Data Peminjaman Mobil';
                        }else if($this->uri->segment(2) == 'about'){
                            echo 'Saran dan Masukan';
                        }
                        ?> </a>
                    </div>
                    <!-- <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div> -->
                </div>
            </nav>         
            <div class="content">
                <div class="container-fluid">