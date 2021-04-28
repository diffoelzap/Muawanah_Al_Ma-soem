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
                                    <h4 class="card-title">Input Peminjaman Mobil</h4>
                                    <?php echo form_open('permohonan/peminjaman')?>
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" name="nama_lengkap" class="form-control" value="<?= $data->nama_lengkap?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Noreg</label>
                                            <input type="text" name="noreg" class="form-control" value="<?= $data->noreg?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tanggal</label>
                                            <input type="text" name="tanggal_peminjaman" class="form-control" id="datepinjaman">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Jam</label>
                                            <input type="text" name="jam_peminjaman" class="form-control" id="timepinjaman">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Jenis Mobil</label>
                                            <select class="selectpicker" name="jenis_mobil" data-style="select-with-transition" multiple title="Pilih Jenis Mobil">
                                                <option disabled>Jenis Mobil</option>
                                                <option value="Inova">Inova</option>
                                                <option value="Truck">Truck</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Perkiraan jangka waktu pemakaian</label>
                                            <select class="selectpicker" name="jangka_waktu_pemakaian" data-style="select-with-transition" multiple title="Pilih Perkiraan jangka waktu pemakaian">
                                                <option disabled>Perkiraan jangka waktu pemakaian</option>
                                                <option value="24 jam">24 jam</option>
                                                <option value="06.00 - 18.00">06.00 - 18.00</option>
                                                <option value="17.00 - 07.00">17.00 - 07.00</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Pengemudi</label>
                                            <select class="selectpicker" name="pengemudi" data-style="select-with-transition" multiple title="Pilih Pengemudi">
                                                <option disabled>Pilih Pengemudi</option>
                                                <option value="Pemohon">Pemohon</option>
                                                <option value="Jupena Solihin">Jupena Solihin</option>
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
                                    <h4 class="card-title">Riwayat Tugas Lapangan</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover table-condensed" role="grid">
                                            <thead class="text-primary">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Noreg</th>
                                                <th>Tangggal</th>
                                                <th>Jam</th>
                                                <th>Lama Pinjam</th>
                                                <th>Tujuan</th>
                                                <th>Pengemudi</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    $no = 1;
                                                    foreach ($peminjaman as $key => $value) {
                                                    ?>
                                                <tr>
                                                    <td><?= $no++;?></td>
                                                    <td><?= $value->nama_lengkap;?></td>
                                                    <td><?= $value->noreg;?></td>
                                                    <td class="text-primary"><?= $value->tanggal_peminjaman;?></td>
                                                    <td class="text-primary"><?= $value->jam_peminjaman;?></td>
                                                    <td><?= $value->jangka_waktu_pemakaian;?></td>
                                                    <td><?= $value->keterangan;?></td>
                                                    <td><?= $value->pengemudi;?></td>
                                                    <td>
                                                    <?php
                                                                if($value->status == "0"){
                                                                    echo '<span class="badge badge-default">Menunggu<br>
                                                                    Verifikasi</span>';
                                                                }else if($value->status == "1"){
                                                                    echo '<span class="badge badge-success">Diterima</span>';
                                                                }else if($value->status == "2"){
                                                                    echo '<span class="badge badge-danger">Ditolak</span>';
                                                                }
                                                    ?>
                                                    </td>
                                                    <td>
                                                            <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#edit<?= $value->id_peminjaman ?>"><i class="material-icons">edit</i></button>
                                                            <button class="btn btn-danger btn-sm"   data-toggle="modal" data-target="#delete<?= $value->id_peminjaman?>"><i class="material-icons">delete</i></button>
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
                           <?php foreach ($peminjaman as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_peminjaman ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Peminjaman Mobil</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open('permohonan/edit_peminjaman/'.$value->id_peminjaman);
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
                    <input type="text" name="tanggal_peminjaman" value="<?= $value->tanggal_peminjaman?>" class="form-control" id="dialogpdateinjaman">
                  </div>
                  <div class="form-group">
                    <label>Jam</label>
                    <input type="text" name="jam_peminjaman" value="<?= $value->jam_peminjaman?>" class="form-control" id="dialogtimepinjaman">
                  </div>
                  <div class="form-group">
                    <label>Jenis Mobil</label>
                      <?php 
                        if($value->jenis_mobil == "Inova"){
                            echo '<select class="selectpicker" name="jenis_mobil" data-style="select-with-transition" multiple title="Inova">
                            <option disabled>Jenis Cuti</option>
                            <option value="Inova" selected>Inova</option>
                            <option value="Truck">Truck</option>
                        </select>';
                        }else if($value->jenis_mobil == "Truck"){
                            echo '<select class="selectpicker" name="jenis_mobil" data-style="select-with-transition" multiple title="Truck">
                            <option disabled>Jenis Cuti</option>
                            <option value="Inova">Inova</option>
                            <option value="Truck" selected>Truck</option>
                        </select>';
                        }
                      ?>
                            
                </div>

                <div class="form-group">
                    <label>Perkiraan jangka waktu pemakaian</label>
                      <?php 
                        if($value->jangka_waktu_pemakaian == "24 jam"){
                            echo '<select class="selectpicker" name="jangka_waktu_pemakaian" data-style="select-with-transition" multiple title="24 jam">
                            <option disabled>Jenis Cuti</option>
                            <option value="24 jam" selected>Inova</option>
                            <option value="06.00 - 18.00">06.00 - 18.00</option>
                            <option value="17.00 - 07.00">17.00 - 07.00</option>
                        </select>';
                        }else if($value->jangka_waktu_pemakaian == "06.00 - 18.00"){
                            echo '<select class="selectpicker" name="jangka_waktu_pemakaian" data-style="select-with-transition" multiple title="06.00 - 18.00">
                            <option disabled>Jenis Cuti</option>
                            <option value="24 jam">24 jam</option>
                            <option value="06.00 - 18.00" selected>06.00 - 18.00</option>
                            <option value="17.00 - 07.00">17.00 - 07.00</option>
                        </select>';
                        }else if($value->jangka_waktu_pemakaian == "17.00 - 07.00"){
                            echo '<select class="selectpicker" name="jangka_waktu_pemakaian" data-style="select-with-transition" multiple title="17.00 - 07.00">
                            <option disabled>Jenis Cuti</option>
                            <option value="24 jam">24 jam</option>
                            <option value="06.00 - 18.00">06.00 - 18.00</option>
                            <option value="17.00 - 07.00" selected>17.00 - 07.00</option>
                        </select>';
                        }
                      ?>
                            
                </div>
                  
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" value="<?= $value->keterangan?>" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Pengemudi</label>
                      <?php 
                        if($value->pengemudi == "Pemohon"){
                            echo '<select class="selectpicker" name="pengemudi" data-style="select-with-transition" multiple title="Pemohon">
                            <option disabled>Jenis Cuti</option>
                            <option value="Pemohon" selected>Pemohon</option>
                            <option value="Jupena Solihin">Jupena Solihin</option>
                        </select>';
                        }else if($value->pengemudi == "Jupena Solihin"){
                            echo '<select class="selectpicker" name="pengemudi" data-style="select-with-transition" multiple title="Jupena Solihin">
                            <option disabled>Jenis Cuti</option>
                            <option value="Pemohon">Pemohon</option>
                            <option value="Jupena Solihin" selected>Jupena Solihin</option>
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


                    
      <?php foreach ($peminjaman as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value->id_peminjaman ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Peminjaman <?= $value->keterangan ?></h4>
            </div>
            <div class="modal-body">
                 
                <h5>Apakah anda ingin menghapus data ini...?</h5>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <a href="<?= base_url('permohonan/delete_peminjaman/'.$value->id_peminjaman) ?>"><button class="btn btn-primary">Hapus</button</a>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php } ?>  