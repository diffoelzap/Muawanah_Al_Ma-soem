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
                    <h4 class="card-title">Input Tugas Harian</h4>
                    <?php
                    
                    echo form_open('tugas/harian')
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
                            <input type="text" name="tanggal_harian" class="form-control" id="datepicker">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jam</label>
                            <input type="text" name="jam_harian" class="form-control" id="datetime">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kategori</label>
                            <select class="selectpicker" name="kategori_tugas" data-style="select-with-transition" multiple title="Pilih Kategori Tugas">
                                <option disabled>Kategori Tugas</option>
                                <option value="Tugas Pokok">Tugas Pokok </option>
                                <option value="Tugas Tambahan">Tugas Tambahan</option>
                                <option value="Lain - Lain">Lain - Lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Uraian Kegiatan</label>
                            <input type="text" name="uraian_kegiatan" class="form-control">
                        </div>
                        <div class="data form-group">
                            <label class="control-label">Perkiraan Waktu Selesai</label>
                            <input type="text" name="waktu_selesai" class="form-control" id="datesecon">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tempat</label>
                            <input type="text" name="tempat_harian" class="form-control">
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
                    <h4 class="card-title">Riwayat Tugas Harian</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-condensed" id="harian"  role="grid">
                            <thead class="text-primary">
                                <td>No</td>
                                <th>Nama</th>
                                <th>Noreg</th>
                                <th>Tangggal</th>
                                <th>Jam</th>
                                <th>Kategori</th>
                                <th>Uraian</th>
                                <th>Selesai</th>
                                <th>Tempat</th>
                                <th>Aksi</th>
                            </thead>

                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($tugas_harian as $key => $value) {
                                ?>
                                <tr> 
                                    <td><?= $no++;?></td>
                                    <td><?= $value->nama_lengkap?></td>
                                    <td><?= $value->noreg?></td>
                                    <td><?= $value->tanggal_harian?></td>
                                    <td class="text-primary"><?= $value->jam_harian?></td>
                                    <td><?= $value->kategori_tugas?></td>
                                    <td><?= $value->uraian_kegiatan?></td>
                                    <td class="text-primary"><?= $value->waktu_selesai?></td>
                                    <td><?= $value->tempat_harian?></td>
                                    <td>
                                    <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#edit<?= $value->id_tugas_harian ?>"><i class="material-icons">edit</i></button>
                                     <!-- <button class="btn btn-danger btn-sm"   data-toggle="modal" data-target="#delete<?= $value->id_tugas_harian ?>"><i class="material-icons">delete</i></button> -->
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
<?php foreach ($tugas_harian as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_tugas_harian ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Tugas Harian</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open('tugas/edit/'.$value->id_tugas_harian);
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
                    <label>Tanggal Harian</label>
                    <input type="date" name="tanggal_harian" value="<?= $value->tanggal_harian?>" class="form-control" placeholder="yyyy-dd-mm">
                  </div>
                  <div class="form-group">
                    <label>Jam Harian</label>
                    <input type="time" name="jam_harian" value="<?= $value->jam_harian?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                      <?php 
                        if($value->kategori_tugas == "Tugas Pokok"){
                            echo '<select class="selectpicker" name="kategori_tugas" data-style="select-with-transition" multiple title="Tugas Pokok">
                            <option disabled>Kategori Tugas</option>
                            <option value="Tugas Pokok" selected>Tugas Pokok </option>
                            <option value="Tugas Tambahan">Tugas Tambahan</option>
                            <option value="Lain - Lain">Lain - Lain</option>
                        </select>';
                        }else if($value->kategori_tugas == "Tugas Tambahan"){
                            echo '<select class="selectpicker" name="kategori_tugas" data-style="select-with-transition" multiple title="Tugas Tambahan">
                            <option disabled>Kategori Tugas</option>
                            <option value="Tugas Pokok">Tugas Pokok </option>
                            <option value="Tugas Tambahan"  selected>Tugas Tambahan</option>
                            <option value="Lain - Lain">Lain - Lain</option>
                        </select>';
                        }else if($value->kategori_tugas == "Lain - Lain"){
                            echo '<select class="selectpicker" name="kategori_tugas" data-style="select-with-transition" multiple title="Lain - Lain">
                            <option disabled>Kategori Tugas</option>
                            <option value="Tugas Pokok">Tugas Pokok </option>
                            <option value="Tugas Tambahan">Tugas Tambahan</option>
                            <option value="Lain - Lain" selected>Lain - Lain</option>
                        </select>';
                        }
                      ?>
                            
                </div>
                  <div class="form-group">
                    <label>Uraian Kegiatan</label>
                    <input type="text" name="uraian_kegiatan" value="<?= $value->uraian_kegiatan?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Waktu Selesai</label>
                    <input type="text" name="waktu_selesai" value="<?= $value->waktu_selesai?>" class="apaaja form-control">
                  </div>
                  <div class="form-group">
                    <label>Tempat Harian</label>
                    <input type="text" name="tempat_harian" value="<?= $value->tempat_harian?>" class="form-control">
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