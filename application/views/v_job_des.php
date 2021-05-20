<div class="row">
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
        <div class="col-md-3">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">work</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Input Job Des</h4>
                    <?php
                    
                    echo form_open('karyawan/job_des')
                    ?>
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?= $data->nama_lengkap?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Noreg</label>
                            <input type="text" name="noreg" class="form-control" value="<?= $data->noreg?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" id="datepicker">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" value="<?= $data->jabatan?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Job Des</label>
                            <input type="text" name="keterangan" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                        <?php echo form_close()?>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Riwayat Job Des</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-condensed" id="harian"  role="grid">
                            <thead class="text-primary">
                                <td>No</td>
                                <th>Nama</th>
                                <th>Noreg</th>
                                <th>Tangggal</th>
                                <th>Jabatan</th>
                                <th>Job Des</th>
                                <th>Aksi</th>
                            </thead>

                            <tbody>
                            <?php 
                                $no = 1;
                                foreach ($job_des as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $value->nama_lengkap?></td>
                                    <td><?= $value->noreg?></td>
                                    <td class="text-primary"><?= $value->tanggal?></td>
                                    <td><?= $value->jabatan?></td>
                                    <td><?= $value->keterangan?></td>
                                    <td>
                                    <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#edit<?= $value->id_job_des ?>"><i class="material-icons">edit</i></button>
                                     <!-- <button class="btn btn-danger btn-sm"   data-toggle="modal" data-target="#delete<?= $value->id_job_des ?>"><i class="material-icons">delete</i></button> -->
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- modal edit-->
<?php foreach ($job_des as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_job_des ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Job Des</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open('karyawan/edit_job_des/'.$value->id_job_des);
                    ?>

                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" value="<?= $value->nama_lengkap?>" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Noreg</label>
                    <input type="text" name="noreg" value="<?= $value->noreg?>" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" value="<?= $value->tanggal?>" class="form-control" placeholder="yyyy-dd-mm">
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" value="<?= $value->jabatan?>" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Job Des</label>
                    <input type="text" name="keterangan" value="<?= $value->keterangan?>" class="form-control" required>
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
      