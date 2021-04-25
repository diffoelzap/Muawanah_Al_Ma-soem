<div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">work</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Input Tugas Harian</h4>
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
                        <table class="table">
                            <thead class="text-primary">
                                <th>Nama</th>
                                <th>Noreg</th>
                                <th>Tangggal</th>
                                <th>Jam</th>
                                <th>Kategori</th>
                                <th>Uraian</th>
                                <th>Selesai</th>
                                <th>Tempat</th>
                            </thead>

                            <tbody>
                                <?php 
                                foreach ($tugas_harian as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value->nama_lengkap?></td>
                                    <td><?= $value->noreg?></td>
                                    <td><?= $value->tanggal_harian?></td>
                                    <td class="text-primary"><?= $value->jam_harian?></td>
                                    <td><?= $value->kategori_tugas?></td>
                                    <td><?= $value->uraian_kegiatan?></td>
                                    <td><?= $value->waktu_selesai?></td>
                                    <td class="text-primary"><?= $value->tempat_harian?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>