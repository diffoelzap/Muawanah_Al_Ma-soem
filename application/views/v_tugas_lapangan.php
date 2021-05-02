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
                                    <h4 class="card-title">Input Tugas Lapangan</h4>
                                    <?php
                    
                                    echo form_open('tugas/lapangan')
                                    ?>
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" name="nama_lengkap" value="<?= $data->nama_lengkap?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Noreg</label>
                                            <input type="text" name="noreg"  value="<?= $data->noreg?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tanggal</label>
                                            <input type="text" name="tanggal_lapangan" class="form-control" id="date_lapangan">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Jam</label>
                                            <input type="text" name="jam_lapangan" class="form-control" id="time_lapangan">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Keterangan</label>
                                            <select class="selectpicker" name="keterangan" data-style="select-with-transition">
                                                <option disabled selected>Keterangan</option>
                                                <option value="Tugas ke lapangan dari kantor">Tugas ke lapangan dari kantor</option>
                                                <option value="Tugas ke lapangan langsung dari rumah">Tugas ke lapangan langsung dari rumah</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tujuan</label>
                                            <input type="text" name="tujuan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Perkiraan Waktu Selesai</label>
                                            <input type="text" name="waktu_selesai" class="form-control" id="time_selesai">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Kepulangan</label>
                                            <select class="selectpicker" name="kepulangan" data-style="select-with-transition">
                                                <option disabled selected>Kepulangan</option>
                                                <option value="Ke kantor lagi">Ke kantor lagi</option>
                                                <option value="Langsung pulang rumah">Langsung pulang rumah</option>
                                            </select>
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
                        <table class="table table-bordered table-striped table-hover table-condensed" id="lapangan"  role="grid">
                            <thead class="text-primary">
                                <td>No</td>
                                <th>Nama</th>
                                <th>Noreg</th>
                                <th>Tangggal</th>
                                <th>Jam</th>
                                <th>Keterangan</th>
                                <th>Tujuan</th>
                                <th>Selesai</th>
                                <th>Kepulangan</th>
                                <th>Aksi</th>
                            </thead>

                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($tugas_lapangan as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $value->nama_lengkap?></td>
                                    <td><?= $value->noreg?></td>
                                    <td><?= $value->tanggal_lapangan?></td>
                                    <td class="text-primary"><?= $value->jam_lapangan?></td>
                                    <td><?= $value->keterangan?></td>
                                    <td><?= $value->tujuan?></td>
                                    <td class="text-primary"><?= $value->waktu_selesai?></td>
                                    <td><?= $value->kepulangan?></td>
                                    <td>
                                    <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#edit<?= $value->id_tugas_lapangan ?>"><i class="material-icons">edit</i></button>
                                     <!-- <button class="btn btn-danger btn-sm"   data-toggle="modal" data-target="#delete<?= $value->id_tugas_lapangan ?>"><i class="material-icons">delete</i></button> -->
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
         <?php foreach ($tugas_lapangan as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_tugas_lapangan ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Tugas Harian</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open('tugas/edit_Lapangan/'.$value->id_tugas_lapangan);
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
                    <label>Tanggal Lapangan</label>
                    <input type="date" name="tanggal_lapangan" value="<?= $value->tanggal_lapangan?>" class="form-control" placeholder="yyyy-dd-mm">
                  </div>
                  <div class="form-group">
                    <label>Jam Lapangan</label>
                    <input type="time" name="jam_lapangan" value="<?= $value->jam_lapangan?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                      <?php 
                        if($value->keterangan == "Tugas ke lapangan dari kantor"){
                            echo '<select class="selectpicker" name="keterangan" data-style="select-with-transition">
                            <option disabled selected>Keterangan</option>
                            <option value="Tugas ke lapangan dari kantor" selected>Tugas ke lapangan dari kantor</option>
                            <option value="Tugas ke lapangan langsung dari rumah">Tugas ke lapangan langsung dari rumah</option>
                        </select>';
                        }else if($value->keterangan == "Tugas ke lapangan langsung dari rumah"){
                            echo '<select class="selectpicker" name="keterangan" data-style="select-with-transition">
                            <option disabled selected>Keterangan</option>
                            <option value="Tugas ke lapangan dari kantor">Tugas ke lapangan dari kantor</option>
                            <option value="Tugas ke lapangan langsung dari rumah"  selected>Tugas ke lapangan langsung dari rumah</option>
                        </select>';
                        }
                      ?>
                            
                </div>
                  <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" name="tujuan" value="<?= $value->tujuan?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Waktu Selesai</label>
                    <input type="text" name="waktu_selesai" value="<?= $value->waktu_selesai?>" class="apaaja form-control">
                  </div>
                  <div class="form-group">
                    <label>Kepulangan</label>
                    <?php 
                        if($value->kepulangan == "Ke kantor lagi"){
                            echo '<select class="selectpicker" name="kepulangan" data-style="select-with-transition">
                            <option disabled selected>Kepulangan</option>
                            <option value="Ke kantor lagi" selected>Ke kantor lagi</option>
                            <option value="Langsung pulang rumah">Langsung pulang rumah</option>
                        </select>';
                        }else if($value->kepulangan == "Langsung pulang rumah"){
                            echo '<select class="selectpicker" name="kepulangan" data-style="select-with-transition">
                            <option disabled selected>Kepulangan</option>
                            <option value="Ke kantor lagi">Ke kantor lagi</option>
                            <option value="Langsung pulang rumah"  selected>Langsung pulang rumah</option>
                        </select>';
                        }
                      ?>
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