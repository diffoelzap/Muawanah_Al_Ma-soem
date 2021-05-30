<div class="row">
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
        ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">dashboard</i>
                                </div>
                                <div class="card-content">
                                <h4 class="card-title">Foto Slide Show Hal.Pengguna</h4>
                                    <div class="table-responsive">
                                        <table class="table table-shopping" id="example">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Foto</th>
                                                    <th class="text-right">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                foreach ($slide as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <div class="img-container">
                                                            <img src="<?= base_url() ?>assets/slide/<?= $value->foto_slide?>" alt="...">
                                                        </div>
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#edit_slide<?= $value->id_slide ?>">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">dashboard</i>
                        </div>
                        <div class="card-content">
                        <h4 class="card-title">Video Profile</h4>
                            <div class="table-responsive">
                                <table class="table table-shopping" id="example">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Video</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($video as $key => $value) { ?>
                                        <tr>
                                            <td>
                                                <div class="video-container">
                                                    <video width="300" height="200" controls id="video_example">
                                                        <source src="<?= base_url('assets/video/'.$value->video_profile)?>" type="video/mp4">
                                                    </video>
                                                </div>
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#edit_video<?= $value->id_video ?>" onclick="editVideo(this);">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">account_box</i>
                        </div>
                        <div class="card-content">
                        <h4 class="card-title">Pegawai</h4>
                            <div class="table-responsive">
                                <table class="table table-shopping" id="example">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Foto</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($pegawai as $key => $value) {
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="img-container">
                                                    <img src="<?= base_url('assets/pegawai/'.$value->foto_pegawai) ?>" alt="...">
                                                </div>
                                            </td>
                                            <td><?= $value->nama_pegawai?></td>
                                            <td><?= $value->divisi_pegawai?></td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#edit_pegawai<?= $value->id_pegawai ?>">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">category</i>
                        </div>
                        <div class="card-content">
                        <h4 class="card-title">Top Brand</h4>
                            <div class="table-responsive">
                                <table class="table table-shopping" id="example">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Foto</th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($first_brand as $key => $value) {?>
                                        <tr>
                                            <td>
                                                <div class="img-container">
                                                    <img src="<?= base_url('assets/brand/'.$value->foto_brand) ?>" alt="...">
                                                </div>
                                            </td>
                                            <td><?= $value->nama_brand ?></td>
                                            <td><?= $value->deskripsi_brand ?></td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#edit_top<?= $value->id_brand ?>">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">category</i>
                        </div>
                        <div class="card-content">
                        <h4 class="card-title">Second Brand</h4>
                            <div class="table-responsive">
                                <table class="table table-shopping" id="example">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Foto</th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($second_brand as $key => $value) {?>
                                        <tr>
                                            <td>
                                                <div class="img-container">
                                                    <img src="<?= base_url('assets/brand/'.$value->foto_brand) ?>" alt="...">
                                                </div>
                                            </td>
                                            <td><?= $value->nama_brand ?></td>
                                            <td><?= $value->deskripsi_brand ?></td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#edit_second<?= $value->id_brand ?>">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                     <!-- modal edit-->
<?php foreach ($slide as $key => $value) { ?>
<div class="modal fade" id="edit_slide<?= $value->id_slide ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Slide</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open_multipart('admin/edit_slide/'.$value->id_slide);
                    ?>
            <center>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                        <img src="<?= base_url() ?>assets/slide/<?= $value->foto_slide?>">
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
            </center>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php
                echo form_close();
            ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php } ?>


        <!-- modal edit-->
<?php foreach ($pegawai as $key => $value) { ?>
<div class="modal fade" id="edit_pegawai<?= $value->id_pegawai?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Karyawan</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open_multipart('admin/edit_pegawai/'.$value->id_pegawai);
                    ?>
                    
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="<?= base_url('assets/pegawai/'.$value->foto_pegawai) ?>" width="100px">
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

                        <div class="form-group label-floating">
                            <label class="control-label">Username</label>
                            <input type="text" name="nama_pegawai" class="form-control" value="<?= $value->nama_pegawai?>" required>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Jabatan</label>
                            <input type="text" class="form-control" name="divisi_pegawai" value="<?=  $value->divisi_pegawai  ?>" required>
                        </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php
                echo form_close();
            ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php } ?>


                  <!-- modal edit-->
<?php foreach ($first_brand as $key => $value) { ?>
<div class="modal fade" id="edit_top<?= $value->id_brand ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Slide</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open_multipart('admin/edit_top/'.$value->id_brand);
                    ?>
            <center>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                        <img src="<?= base_url() ?>assets/brand/<?= $value->foto_brand?>">
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

                <div class="form-group label-floating">
                            <label class="control-label">Nama Produk</label>
                            <input type="text" name="nama_brand" class="form-control" value="<?= $value->nama_brand?>" required>
                        </div>
                <div class="form-group label-floating">
                    <label class="control-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi_brand" value="<?=  $value->deskripsi_brand  ?>" required>
                </div>
            </center>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php
                echo form_close();
            ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php } ?>

       <!-- modal edit-->
<?php foreach ($second_brand as $key => $value) { ?>
<div class="modal fade" id="edit_second<?= $value->id_brand ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Slide</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open_multipart('admin/edit_second/'.$value->id_brand);
                    ?>
            <center>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                        <img src="<?= base_url() ?>assets/brand/<?= $value->foto_brand?>">
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

                <div class="form-group label-floating">
                            <label class="control-label">Nama Produk</label>
                            <input type="text" name="nama_brand" class="form-control" value="<?= $value->nama_brand?>" required>
                        </div>
                <div class="form-group label-floating">
                    <label class="control-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi_brand" value="<?=  $value->deskripsi_brand  ?>" required>
                </div>
            </center>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php
                echo form_close();
            ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php } ?>
      
     
                     <!-- modal edit-->
<?php foreach ($video as $key => $value) { ?>
<div class="modal fade" id="edit_video<?= $value->id_video ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Video</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open_multipart('admin/edit_video/'.$value->id_video);
                    ?>
            <center>


            <div class="row">
                    <div class="form-group">
                        <span class="btn btn-info btn-round btn-file">
                            <span class="fileinput-new">Pilih Video</span>
                            <input type="file" name="video" class="form-control" onChange="selectedVideo(this);">
                        </span>
                    </div>  
                    <div class="form-group">
                    <video width="300" height="200" id="load_video" controls>
                                <source type="video/mp4" id="source">
                            </video>
                    </div>
            </div>
            </center>

            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?= base_url('admin')?>"> <button type="button" class="btn btn-default">Tutup</button></a>
             
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?php
                echo form_close();
            ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php } ?>
      
      <script>
            
        document.getElementById("load_video").style.display = "none";
       
        function selectedVideo(self){
            var file = self.files[0];
            var reader = new FileReader();
            
            document.getElementById("load_video").style.display = "inline";
            
            reader.onload = function(e){
                var src = e.target.result;
                var video = document.getElementById("load_video");
                var source = document.getElementById("source");
                
                source.setAttribute("src",src);
                video.load();
            };


            reader.readAsDataURL(file);
        }

        function editVideo(){
            var video = document.getElementById("video_example");
            video.pause();
            video.currentTime = 0;
        }
    </script>