<div class="row">
                           <div class="row gutters-sm">
                                <div class="col-sm-2 mb-3">
                                    <div class="card">
                                     <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="<?=base_url()?>template/karyawan/assets/img/faces/avatar.jpg" alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                        <h4><?= $this->session->userdata('nama_lengkap') ?></h4>
                                            <p class="text-secondary mb-1"><?= $this->session->userdata('jabatan') ?></p>
                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                            <button class="btn btn-outline-primary">Update Profile</button>
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
                                                    <p class="form-control-static"><?= $this->session->userdata('nik') ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Noreg :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('noreg') ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Nama Lengkap :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('nama_lengkap') ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Nama Panggilan :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group"><?= $this->session->userdata('nama_panggilan') ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Tempat Lahir : </label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('tempat_lahir') ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Tanggal Lahir :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('tanggal_lahir') ?></p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Jenis Kelamin : </label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('jenis_kelamin') ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Agama : </label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('agama') ?></p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Suku Bangsa :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('suku_bangsa') ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Status Perkawinan :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group"><?= $this->session->userdata('status_perkawinan') ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Status Karyawan :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('status_karyawan') ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Tanggal Masuk :</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('tanggal_masuk') ?></p>
                                                   
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
                                                    <p class="form-control-static"><?= $this->session->userdata('lokasi') ?></p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Direktorat :</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('direktorat') ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Divisi</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('divisi') ?></p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Unit</label>
                                            <div class="col-sm-10">
                                                <div class="form-group"><?= $this->session->userdata('unit') ?></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Jabatan</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('jabatan') ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Golongan</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('golongan') ?></p>
                                                   
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
                                                    <p class="form-control-static"><?= $this->session->userdata('rumah') ?></p>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">TINGGAL</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <p class="form-control-static"><?= $this->session->userdata('tinggal') ?></p>
                                                   <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>