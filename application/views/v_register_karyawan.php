
<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:19 GMT -->
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
    <meta itemprop="image" content="<?= base_url() ?>template/karyawan/<?= base_url() ?>template/karyawan/s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="<?= base_url() ?>template/karyawan/<?= base_url() ?>template/karyawan/s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="<?= base_url() ?>template/karyawan/<?= base_url() ?>template/karyawan/s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
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
   
    <style>
        body {
            background-image: url("<?=base_url()?>template/karyawan/assets/img/register.jpg");
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" active ">
                        <a href="<?= base_url('auth/register')?>">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('auth/login')?>">
                            <i class="material-icons">person</i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page register-page" filter-color="black" data-image="<?= base_url() ?>template/karyawan/assets/img/register.jpg">
            <div class="container">
                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Masukan Data Pribadi
                                    </h4>
                                    <?php 

                                    //notifikasi form kosong
                                    echo validation_errors(' <div class="alert alert-warning alert-dismissible" role="alert">
                                        
                                    <strong>Peringatan! </strong>','</div>');

                                    //notifikasi gagal upload
                                    if(isset($error_upload)){
                                        echo '<div class="alert alert-danger alert-dismissible" role="alert">
                                          
                                        <strong>Error! </strong>' .$error_upload.'</div>';
                                        
                                    }
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

                                    echo form_open_multipart('auth/register') 
                                    ?>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="<?= base_url() ?>template/karyawan/assets/img/image_placeholder.jpg">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-info btn-round btn-file">
                                                        <span class="fileinput-new">Pilih Foto</span>
                                                        <span class="fileinput-exists">Ganti</span>
                                                        <input type="file" name="gambar"/>
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" name="username" class="form-control" value="<?= set_value('username')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" name="password" class="form-control"  value="<?= set_value('password')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Nik</label>
                                                    <input type="number" name="nik" class="form-control" value="<?= set_value('nik')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Noreg</label>
                                                    <input type="number" name="noreg" class="form-control" value="<?= set_value('noreg')?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" name="nama_lengkap" class="form-control" value="<?= set_value('nama_lengkap')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Panggilan</label>
                                                    <input type="text" name="nama_panggilan" class="form-control" value="<?= set_value('nama_panggilan')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" value="<?= set_value('tempat_lahir')?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Tanggal Lahir</label>
                                                        <input type="text" name="tanggal_lahir" class="form-control" id="datepicker" value="<?= set_value('tanggal_lahir')?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Jenis Kelamin</label>
                                                    <select class="selectpicker" name="jenis_kelamin" data-style="select-with-transition"  required>
                                                        <option disabled selected>Pilih Jenis Kelamin</option>
                                                        <option value="Laki - Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Agama</label>
                                                    <select class="selectpicker" name="agama" data-style="select-with-transition" required>
                                                        <option disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Suku Bangsa</label>
                                                    <select class="selectpicker" name="suku_bangsa" data-style="select-with-transition" required>
                                                        <option disabled selected>Pilih Suku bangsa</option>
                                                        <option value="WNA">WNA</option>
                                                        <option value="WNI">WNI</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Status Perkawinan</label>
                                                    <select class="selectpicker" name="status_perkawinan" data-style="select-with-transition" required>
                                                        <option disabled>Pilih Status Perkawinan</option>
                                                        <option value="Menikah">Menikah</option>
                                                        <option value="Belum Menikah">Belum Menikah</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Status Karyawan</label>
                                                    <select class="selectpicker" name="status_karyawan" data-style="select-with-transition" required>
                                                        <option disabled>Pilih Status karyawan</option>
                                                        <option value="Tetap">Tetap</option>
                                                        <option value="Sementara">Sementara</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Tanggal Masuk</label>
                                                    <input type="text" name="tanggal_masuk" class="form-control" id="datemasuk" value="<?= set_value('tanggal_masuk')?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Alamat Rumah</label>
                                                    <input type="text" name="rumah" class="form-control" value="<?= set_value('rumah')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Alamat Tinggal</label>
                                                    <input type="text" name="tinggal" class="form-control" value="<?= set_value('tinggal')?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <br>
                                            <div class="card-header card-header-icon" data-background-color="blue">
                                                <i class="material-icons">perm_identity</i>
                                            </div>
                                            <h4 class="card-title">Masukan Data Jabatan
                                            </h4>
                                            <br>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Lokasi</label>
                                                    <input type="text" name="lokasi" class="form-control" value="<?= set_value('lokasi')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Direktorat</label>
                                                    <input type="text" name="direktorat" class="form-control" value="<?= set_value('direktorat')?>"  required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Divisi</label>
                                                    <input type="text" name="divisi" class="form-control" value="<?= set_value('divisi')?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Unit</label>
                                                    <input type="text" name="unit" class="form-control" value="<?= set_value('unit')?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Jabatan</label>
                                                    <input type="text" name="jabatan" class="form-control" value="<?= set_value('jabatan')?>"  required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Golongan</label>
                                                    <input type="text" name="golongan" class="form-control" value="<?= set_value('golongan')?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info pull-right">Registrasi</button>
                                        <div class="clearfix"></div>
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
</body>
<!--   Core JS Files   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
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
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
<script>
    $('#datepicker').datetimepicker({
        format:"YYYY-MM-DD"
    });
    $('#datemasuk').datetimepicker({
        format:"YYYY-MM-DD"
    });
</script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500,function() {
            $(this).remove();
            });
    },2000)
</script>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:19 GMT -->
</html>