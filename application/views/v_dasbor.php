<div class="row">
    <?php 
        if ($this->session->flashdata('pesan')) 
        {
        echo ' <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Sukses! </strong>'.$this->session->flashdata('pesan');
        echo '</div>';
        }
    ?>
                           <div class="row gutters-sm">
                                <div class="col-sm-2 mb-3">
                                    <div class="card">
                                     <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="<?= base_url('assets/gambar_profile/'.$data->foto_profil) ?>" alt="Admin" class="rounded-circle">
                                        <div class="mt-3">
                                        <h4><?= $data->nama_lengkap ?></h4>
                                            <p class="text-secondary mb-1"><?= $data->jabatan ?></p>
                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                            <a href="<?= ("auth/edit/".$data->id_karyawan)?>" class="btn btn-outline-primary">Update Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header card-header-text" data-background-color="blue">
                                        <h4 class="card-title">Data Pribadi</h4>
                                    </div>
                                <div class="card-content">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">NIK : </label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->nik ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Noreg :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->noreg ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Nama Lengkap :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->nama_lengkap ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Nama Panggilan :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group"><?= $data->nama_panggilan ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Tempat Lahir : </label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->tempat_lahir ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Tanggal Lahir :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->tanggal_lahir ?></p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Jenis Kelamin : </label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->jenis_kelamin ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Agama : </label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->agama ?></p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Suku Bangsa :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->suku_bangsa ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Status Perkawinan :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group"><?= $data->status_perkawinan ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Status Karyawan :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->status_karyawan ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Tanggal Masuk :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->tanggal_masuk ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header card-header-text" data-background-color="blue">
                                        <h4 class="card-title">Jabatan</h4>
                                    </div>
                                <div class="card-content">
                                
                                    
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Lokasi : </label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->lokasi ?></p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Direktorat :</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->direktorat ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Divisi</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->divisi ?></p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Unit</label>
                                            <div class="col-sm-10">
                                                <div class="form-group"><?= $data->unit ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Jabatan</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->jabatan ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Golongan</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->golongan ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Job Des</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->job_des ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header card-header-text" data-background-color="blue">
                                        <h4 class="card-title">Alamat</h4>
                                    </div>
                                <div class="card-content">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">RUMAH</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->rumah ?></p>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">TINGGAL</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $data->tinggal ?></p>
                                                   <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>