<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>template/karyawan/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>template/karyawan/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url() ?>template/karyawan/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url() ?>template/karyawan/assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url() ?>template/karyawan/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?= base_url() ?>template/karyawan/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url() ?>template/karyawan/assets/css/google-roboto-300-700.css" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">info</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">About</h4>
                                    <div class="table-responsive">
                                  <p align="left" class="text-muted style3 style62 style14">Alhamdulillah atas ijin Allah SWT Sistem Informsi ini telah dapat di gunakan dengan melalui beberapa tahapan dan rencana setrategi SDM sebelumnya yang telah di rancang oleh SDM.</p>
                                  <p align="left" class="text-muted style3 style62 style14">Program ini dibuat atas dasar yang semakin berkembang Teknologi Informasi, Maka dengan itu SDM PT. Ma'soem membuat Sistem Informasi ini yang bertujuan untuk memudahkan segala informasi yang menyangkut Kepegawaian, Selain itu Sistem Informasi ini dapat menyimpan data lengkap pegawai dan riwayat disertakan arsip dokumen berbasis data elektronik,sehingga memudahkan untuk melihat informasi dan memperoses data dimana saja dan kapanpun.</p>
                                  <p align="left" class="text-muted style3 style62 style14">Mudah - mudahan Sistem Informasi ini bisa memudahkan dan bermanfaat dalam hal menyediakan Informasi bagi seluruh karyawan Al Ma'soem.</p>
                                  <p align="left" class="text-muted style3 style62 style14">&nbsp;</p>
                                  <p align="left" class="text-muted style3 style62 style14">Terbit Februari 2016</p>
                                  <p align="left" class="text-muted style3 style62 style14">Oleh SDM PT. Ma'soem </p>
                                  <p align="left" class="text-muted style3 style62">&nbsp;</p>
                                  <table width="98%" align="center" class="zebra-table">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <?php
    //notifikasi form kosong
    echo validation_errors(' <div class="alert alert-warning alert-dismissible" role="alert">
                                        
    <strong>Peringatan! </strong>','</div>');
    
    if ($this->session->flashdata('error')) 
    {
       echo ' <div class="alert alert-danger alert-dismissible" role="alert">
       <strong>Sukses! </strong>'.$this->session->flashdata('error');
       echo '</div>';
    }
    if ($this->session->flashdata('pesan')) 
    {
       echo ' <div class="alert alert-success alert-dismissible" role="alert">
       <strong>Sukses! </strong>'.$this->session->flashdata('pesan');
       echo '</div>';
    }
    ?>
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="blue">
                                        <i class="material-icons">assignment</i>
                                    </div>
                                        <div class="card-content">
                                            <h4 class="card-title">Input Saran Dan Masukan</h4>
                                            <?php echo form_open('karyawan/about') ?>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Saran dan Masukan</label>
                                                    <input type="text" name="saran" class="form-control">
                                                    <input type="hidden" name="nama_lengkap" class="form-control" value="<?= $data->nama_lengkap?>">
                                                </div>
                                                <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>
         
           
</body>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/material.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>


<!-- Forms Validations Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?= base_url() ?>template/karyawan/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.datatables.js"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>template/karyawan/assets/js/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?= base_url() ?>template/karyawan/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?= base_url() ?>template/karyawan/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url() ?>template/karyawan/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>template/karyawan/assets/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    $(function() {
        $('table.table').DataTable({
            "ordering": false,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language":{    
                "emptyTable":       "Tidak ada data yang tersedia di tabel",
                "info":             "Menampilkan _START_ sampai _END_ dari _TOTAL_ masukan",
                "infoEmpty":        "Menampilkan 0 sampai 0 dari 0 masukan",
                "infoFiltered":     "(difilter dari _MAX_ total masukan)",
                "infoPostFix":      "",
                "thousands":        ".",
                "lengthMenu":       "Menampilkan _MENU_ masukan",
                "loadingRecords":   "memuat...",
                "processing":       "Sedang di proses...",
                "search":           "Pencarian:",
                "zeroRecords":      "Arsip tidak ditemukan",
                "Paginate":{
                    "first":        "Pertama",
                    "last":         "Terakhir",
                    "next":         "lanjut",
                    "previous":     "kembali"
                },
                "aria":{
                    "sortAscending"  : "aktifkan urutan kolom ascending",
                    "sortDescending" : "aktifkan urutan kolom descending"
                }
            }
        });
        $('.dataTables_length').addClass('bs-select');

    });
</script>
<script>
    var today = new Date();
   

   var dd = today.getDate();
   var mm = today.getMonth()+1; 
   var yyyy = today.getFullYear();
    
    $('#datepicker').datetimepicker({
        format:"YYYY-MM-DD"
    });
    $('#datemasuk').datetimepicker({
        format:"YYYY-MM-DD"
    });
    $('#date_lapangan').datetimepicker({
        format:"YYYY-MM-DD"
    });
    $('#datemasuk').datetimepicker({
        format:"YYYY-MM-DD"
    });
    $('#datepinjaman').datetimepicker({
        format:"YYYY-MM-DD"
    });
    $('#dialogdatepinjaman').datetimepicker({
        format:"YYYY-MM-DD"
    });
    $('#dateawal').datetimepicker({
        format:"YYYY-MM-DD",
        minDate: new Date(yyyy+'-'+mm+'-'+dd)
    });
    $('.datecuti').datetimepicker({
        format:"YYYY-MM-DD",
        minDate: new Date(yyyy+'-'+mm+'-'+dd),
    });
    $(function () {
       $('.dateawaltanggal').datetimepicker({
           format:'YYYY-MM-DD',
           minDate: new Date(yyyy+'-'+mm+'-'+dd)
       });
       $('.dateakhirtanggal').datetimepicker({
        format:'YYYY-MM-DD',
        useCurrent: false //Important! See issue #1075

        });
       $(".dateawaltanggal").on("dp.change", function (e) {
           $('.dateakhirtanggal').data("DateTimePicker").minDate(e.date);
       });
       $(".dateakhirtanggal").on("dp.change", function (e) {
           $('.dateawaltanggal').data("DateTimePicker").maxDate(e.date);
       });
   });   
   
    $('#dateakhir').datetimepicker({
        format:"YYYY-MM-DD",
        minDate: new Date(yyyy+'-'+mm+'-'+dd),
    });

    $('#datetime').datetimepicker({
        format:"HH:mm:ss"
    });
    $('#timepinjaman').datetimepicker({
        format:"HH:mm:ss"
    });
    $('#datesecon').datetimepicker({
        format:"HH:mm:ss"
    });
    $('#dialogtimepinjaman').datetimepicker({
        format:"HH:mm:ss"
    });

    $('.apaaja').datetimepicker({
        format:"HH:mm:ss"
    });
    
    $('#time_selesai').datetimepicker({
        format:"HH:mm:ss"
    });
    $('#time_lapangan').datetimepicker({
        format:"HH:mm:ss"
    });

    

    if(dd<10) 
    {
        dd='0'+dd;
    } 

    if(mm<10) 
    {
        mm='0'+mm;
    } 
    today = yyyy+'-'+mm+'-'+dd;

    
    document.getElementById("datepicker").value = today;

   
</script>
<script>
     window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500,function() {
            $(this).remove();
            });
    },2000)
</script>
<script>
     var today_lapangan = new Date();

    var dd_lapangan = today_lapangan.getDate();
    var mm_lapangan = today_lapangan.getMonth()+1; 
    var yyyy_lapangan = today_lapangan.getFullYear();

    if(dd_lapangan<10) 
    {
        dd_lapangan='0'+dd;
    } 

    if(mm_lapangan<10) 
    {
        mm_lapangan='0'+mm_lapangan;
    } 
    today_lapangan = yyyy_lapangan+'-'+mm_lapangan+'-'+dd_lapangan;

    document.getElementById("date_lapangan").value = today_lapangan;

</script>

<script>
    (function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('datetime').value = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();
</script>
<script>
    (function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('timepinjaman').value = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();
</script>
<script>
    (function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('time_lapangan').value = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();
</script>






<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>