<div class="row">
            <div class="row gutters-sm">
                <div class="col-sm-2 mb-3">
                    <div class="wrapper wrapper-full-page">
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
                                                    if ($this->session->flashdata('pesan')) 
                                                    {
                                                    echo ' <div class="alert alert-success alert-dismissible" role="alert">
                                                    <strong>Sukses! </strong>'.$this->session->flashdata('pesan');
                                                    echo '</div>';
                                                    }
                                                    echo form_open_multipart('auth/edit/'.$data->id_karyawan) 
                                                    ?>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail">
                                                                    <img src="<?= base_url('assets/gambar_profile/'.$data->foto_profil) ?>">
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
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Username</label>
                                                                    <input type="text" name="username" class="form-control" value="<?= $data->username?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Password</label>
                                                                    <input type="text" name="password" class="form-control" value="<?= $data->password?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Nik</label>
                                                                    <input type="text" name="nik" class="form-control" value="<?=$data->nik?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Noreg</label>
                                                                    <input type="text" name="noreg" class="form-control" value="<?= $data->noreg?>" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Nama Lengkap</label>
                                                                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $data->nama_lengkap?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Nama Panggilan</label>
                                                                    <input type="text" name="nama_panggilan" class="form-control" value="<?= $data->nama_panggilan?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Tempat Lahir</label>
                                                                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $data->tempat_lahir?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Tanggal Lahir</label>
                                                                    <input type="text" name="tanggal_lahir" class="form-control" value="<?= $data->tanggal_lahir?>" id="datemasuk">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Jenis Kelamin</label>
                                                                    <?php 
                                                                        if($data->jenis_kelamin == "Laki - Laki")
                                                                        {
                                                                            echo '<select class="selectpicker" name="jenis_kelamin" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Jenis Kelamin</option>
                                                                            <option value="Laki - Laki" selected>Laki - Laki</option>
                                                                            <option value="Perempuan">Perempuan</option>
                                                                            
                                                                            </select>';
                                                                        }else if($data->jenis_kelamin == "Perempuan"){
                                                                            echo '<select class="selectpicker" name="jenis_kelamin" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Jenis Kelamin</option>
                                                                            <option value="Laki - Laki">Laki - Laki</option>
                                                                            <option value="Perempuan" selected>Perempuan</option>
                                                                            </select>';
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Agama</label>
                                                                    <?php 
                                                                        if($data->agama == "Islam")
                                                                        {
                                                                            echo '<select class="selectpicker" name="agama" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Agama</option>
                                                                            <option value="Islam" selected>Islam</option>
                                                                            <option value="Kristen">Kristen</option>
                                                                            <option value="Hindu">Hindu</option>
                                                                            <option value="Budha">Budha</option>
                                                                            </select>';
                                                                        }else if($data->agama == "Kristen"){
                                                                            echo '<select class="selectpicker" name="agama" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Agama</option>
                                                                            <option value="Islam">Islam</option>
                                                                            <option value="Kristen" selected>Kristen</option>
                                                                            <option value="Hindu">Hindu</option>
                                                                            <option value="Budha">Budha</option>
                                                                            </select>';
                                                                        }else if($data->agama == "Hindu"){
                                                                            echo '<select class="selectpicker" name="agama" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Agama</option>
                                                                            <option value="Islam">Islam</option>
                                                                            <option value="Kristen">Kristen</option>
                                                                            <option value="Hindu" selected>Hindu</option>
                                                                            <option value="Budha">Budha</option>
                                                                            </select>';
                                                                        }else if($data->agama == "Budha"){
                                                                            echo '<select class="selectpicker" name="agama" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Agama</option>
                                                                            <option value="Islam">Islam</option>
                                                                            <option value="Kristen">Kristen</option>
                                                                            <option value="Hindu">Hindu</option>
                                                                            <option value="Budha" selected>Budha</option>
                                                                            </select>';
                                                                        }
                                                                    ?>
                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Suku Bangsa</label>
                                                                    <?php 
                                                                        if($data->suku_bangsa == "WNI")
                                                                        {
                                                                            echo '<select class="selectpicker" name="suku_bangsa" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Suku Bangsa</option>
                                                                            <option value="WNI" selected>WNI</option>
                                                                            <option value="Perempuan">WNA</option>
                                                                            
                                                                            </select>';
                                                                        }else if($data->suku_bangsa  == "WNI"){
                                                                            echo '<select class="selectpicker" name="suku_bangsa" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Suku Bangsa</option>
                                                                            <option value="WNI">WNI</option>
                                                                            <option value="WNA" selected>WNA</option>
                                                                            </select>';
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Status Perkawinan</label>
                                                                    <?php 
                                                                        if($data->status_perkawinan == "Menikah")
                                                                        {
                                                                            echo '<select class="selectpicker" name="status_perkawinan" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Status Perkawinan</option>
                                                                            <option value="Menikah" selected>Menikah</option>
                                                                            <option value="Belum Menikah">Belum Menikah</option>
                                                                            
                                                                            </select>';
                                                                        }else if($data->status_perkawinan == "Belum Menikah"){
                                                                            echo '<select class="selectpicker" name="status_perkawinan" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Status Perkawinan</option>
                                                                            <option value="Menikah">Menikah</option>
                                                                            <option value="Belum Menikah" selected>Belum Menikah</option>
                                                                            </select>';
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Status Karyawan</label>
                                                                    <?php 
                                                                        if($data->status_karyawan == "Tetap")
                                                                        {
                                                                            echo '<select class="selectpicker" name="status_karyawan" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Status Karyawan</option>
                                                                            <option value="Tetap" selected>Tetap</option>
                                                                            <option value="Sementara">Sementara</option>
                                                                            
                                                                            </select>';
                                                                        }else if($data->status_karyawan == "Sementara"){
                                                                            echo '<select class="selectpicker" name="status_karyawan" data-style="select-with-transition">
                                                                            <option disabled selected>Pilih Status Karyawan</option>
                                                                            <option value="Tetap">Tetap</option>
                                                                            <option value="Sementara" selected>Sementara</option>
                                                                            </select>';
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Tanggal Masuk</label>
                                                                    <input type="text" class="form-control" name="tanggal_masuk" value="<?= $data->tanggal_masuk ?>" id="datemasuk">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Alamat Rumah</label>
                                                                    <input type="text" class="form-control" name="rumah" value="<?=  $data->rumah ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Alamat Tinggal</label>
                                                                    <input type="text" class="form-control" name="tinggal" value="<?=  $data->tinggal ?>">
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
                                                                    <input type="text" class="form-control" name="lokasi" value="<?= $data->lokasi ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Direktorat</label>
                                                                    <input type="text" class="form-control" name="direktorat" value="<?=  $data->direktorat  ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Divisi</label>
                                                                    <input type="text" class="form-control" name="divisi" value="<?= $data->divisi  ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Unit</label>
                                                                    <input type="text" class="form-control" name="unit" value="<?=  $data->unit  ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Jabatan</label>
                                                                    <input type="text" class="form-control" name="jabatan" value="<?=  $data->jabatan  ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Golongan</label>
                                                                    <input type="text" class="form-control" name="golongan" value="<?=  $data->golongan  ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-info pull-right">Update</button>
                                                        <div class="clearfix"></div>
                                                    <?php echo form_close() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                         
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    