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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">info</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title"><strong>Perlu diketahu sebelum membuat Permohonan Cuti !</strong></h4>
                                    <div class="table-responsive">
                                        <tr>
                                          </tr>
                                          <tr>
                                            <td height="1101"><p align="center"><strong>Atura Cuti diatur di SK No. 02/SK-Div.SDM/X/2015 </strong></p>
                                              <p align="center"><strong>tentang</strong></p>
                                              <p align="center"><strong>KETENTUAN CUTI KARYAWAN MA'SOEM GROUP</strong></p>
                                              <p align="left"><strong>1. Aturan Umum </strong></p>
                                              <ol>
                                                <li>Usulan Pengajuan Cuti harus disetujui atasan langsung,  atasan tidak langsung dan Divisi SDM </li>
                                                <li>Apabila dalam masa usulan mendapat sanksi, maka cuti  tahunan ditunda. </li>
                                                <li>Untuk jabatan tertentu cuti tahunan dapat di carry  over pada tahun berikutnya atas persetujuan Pimpinan &nbsp;Direktorat dan atau Pimpinan. </li>
                                                <li>Tunjangan  cuti diberikan 1 (satu) kali selama 1 (satu) tahun kecuali Direksi tidak  mendapatkan tunjangan. </li>
                                                <li>Cuti ganda hanya berlaku untuk Cuti tahunan &amp; Cuti  nikah kecuali Cuti tahunan &amp; Cuti umroh sesuai kebijakan manajemen, dan  dapat diambil setelah 30 hari masa cuti terakhir. </li>
                                              </ol>
                                              <p><strong>2. Cuti Tahunan </strong></p>
                                              <ol>
                                                <li>Minimal 1 (satu) tahun setelah diangkat sebagai  karyawan tetap </li>
                                                <li>1 (satu) tahun sekali tanpa dibatasi kurun waktu cuti  terakhir </li>
                                                <li>Lama waktu cuti 12 hari kerja dan dapat diambil  berangsur </li>
                                                <li>Pengajuan cuti : </li>
                                              </ol>
                                               <table border="1" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td width="107" valign="top"><p>Golongan</p></td>
                                                  <td width="259" valign="top"><p>Minimal jangka waktu cuti dari tgl Pengajuan </p></td>
                                                </tr>
                                                <tr>
                                                  <td width="107" valign="top"><p>I</p></td>
                                                  <td width="259" valign="top"><p>Sesuai situasi dan kondisi</p></td>
                                                </tr>
                                                <tr>
                                                  <td width="107" valign="top"><p>II</p></td>
                                                  <td width="259" valign="top"><p>3 Minggu</p></td>
                                                </tr>
                                                <tr>
                                                  <td width="107" valign="top"><p>III-dst</p></td>
                                                  <td width="259" valign="top"><p>2 Minggu</p></td>
                                                </tr>
                                              </table>
                                              <ol>
                                                <li>Tidak berlaku untuk karyawan YPAM kecuali Jagabaya,  Sarana &amp; Cost Center YPAM Pusat. </li>
                                                <li>Jika tidak diambil sampai dengan akhir tahun, maka  cuti dan tunjangannya hangus. </li>
                                              </ol>
                                              <p><strong>3. Cuti Melahirkan :</strong></p>
                                              <ol>
                                                <li>Lama Cuti 3 (tiga) bulan </li>
                                                <li>Waktu pengajuan minimal 1 (satu) bulan sebelum cuti </li>
                                                <li>Selama cuti tidak mendapat insentif. </li>
                                              </ol>
                                              <p><strong>4. Cuti Haji / Umroh : </strong></p>
                                              <ol>
                                                <li>Lama Cuti Haji 7 (tujuh) hari sebelum keberangkatan  sampai dengan 7 (tujuh) hari setelah kepulangan. </li>
                                                <li>Lama cuti umroh 2 (dun) hari sebelum keberangkatan  sampai dengan 3 (tiga) hari setelah kepulangan. </li>
                                                <li>Harus memberikan informasi kepada Divisi SDM dan  atasan langsung berkaitan dengan jadwal kegiatan haji/umroh. </li>
                                                <li>Pengajuan cuti minimal 1 (satu) bulan sebelum  keberangkatan. </li>
                                              </ol>
                                              <p><strong>5. Cuti Menikah : </strong></p>
                                              <ol>
                                                <li>Lama cuti 3 (tiga) hari kerja </li>
                                                <li>Pengajuan cuti sama dengan cuti tahunan </li>
                                              </ol>
                                              <p><strong>6. Cuti Emergency/Darurat/Mendesak : </strong></p>
                                              <ol>
                                                <li>Ijin yang mengurangi cuti tahunan : </li>
                                                <ol>
                                                  <li>Istri/Suami/ orang tua/mertua /anak yang menjadi  tanggungan sakit </li>
                                                  <li>Mengantar orang tua/mertua/suami/istri/anak menunaikan  ibadah haji </li>
                                                  <li>Pernikahan Saudara kandung/Saudara  ipar/Paman/Bibi/Keponakan. </li>
                                                </ol>
                                                <li>Ijin tidak mengurangi cuti tahunan : </li>
                                                <ol>
                                                  <li>Istri melahirkan (1 hari) </li>
                                                  <li>Istri/Suami/Anak/Menantu/Orang tua/mertua meninggal  dunia (2 hari) </li>
                                                  <li>Kakek/Nenek/Paman/Bibi/Cucu/Saudara kandung meninggal  dunia (1 hari)</li>
                                                  <li>Pernikahan anak kandung (2 hari).</li>
                                                </ol>
                                              </ol>
                                            <p><strong>7. Ketentuan yang belum diatur dalam Surat Keputusan ini akan  diputuskan sesuai kebijakan manajemen. </strong></p>
                                            <p>&nbsp;</p>
                                            <p><em><strong>Ketentuan SISTEM</strong></em></p>
                                            <table width="837" border="0">
                                              <tr>
                                                <td width="16">-</td>
                                                <td width="805">Aabila permohonan tidak sesuai ketentuan, maka Permohonan akan di batalkan oleh sistem atau oleh admin SDM langsung.</td>
                                              </tr>
                                              <tr>
                                                <td height="58">-</td>
                                                <td>Apabila Surat Cuti sudah dikeluarkan (ditandatangani/disetujui) oleh SDM  maka  Permohonan Cuti tidak dapat dirubah, Perubahan dapat disesuaikan oleh pimpinan masing-masing seperti Penukaran Tanggal Cuti atau Pengganti, kecuali ada  panambahan hari Cuti Pemohon diwajibkan untuk membuat Permohonan pengambilan sisa cuti (dibuat di SIPAM).</td>
                                              </tr>
                                            </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="blue">
                                        <i class="material-icons">work</i>
                                    </div>
                                        <div class="card-content">
                                            <h4 class="card-title">Input Permohonan Cuti</h4>
                                            <?php echo form_open('permohonan/cuti') ?>
                                                <div class="form-group">
                                                    <label class="control-label">Nama</label>
                                                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $data->nama_lengkap?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Noreg</label>
                                                    <input type="text" name="noreg" class="form-control" value="<?= $data->noreg?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Jenis Cuti</label>
                                                    <select class="selectpicker" name="jenis_cuti" data-style="select-with-transition" multiple title="Pilih Jenis Cuti">
                                                        <option disabled>Jenis Cuti</option>
                                                        <option value="Menikah">Menikah</option>
                                                        <option value="Melahirkan">Melahirkan</option>
                                                        <option value="Menikah dan cuti tahunan">Menikah dan cuti tahunan</option>
                                                        <option value="Melahirkan">Melahirkan</option>
                                                        <option value="Haji">Haji</option>
                                                        <option value="Umrah">Umrah</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                        <label class="control-label">Tanggal awal cuti</label>
                                                        <input type="text"  name="tanggal_awal" class="dateawaltanggal form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label class="control-label">Tanggal akhir Cuti</label>
                                                        <input type="text"  name="tanggal_akhir" class="dateakhirtanggal form-control">
                                                    </div>
                                               
                                                <div class="form-group">
                                                    <label class="control-label">Keterangan</label>
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
                                            <h4 class="card-title">Riwayat Tugas Lapangan</h4>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover table-condensed" role="grid">
                                                    <thead class="text-primary">
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Noreg</th>
                                                        <th>Jenis Cuti</th>
                                                        <th>Tanggal Cuti</th>
                                                        <th>Lama Cuti</th>
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    foreach ($cuti as $key => $value) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++;?></td>
                                                            <td><?=$value->nama_lengkap?></td>
                                                            <td><?= $value->noreg ?></td>
                                                            <td><?= $value->jenis_cuti?></td>
                                                            <td class="text-primary"><?php echo date("d/m/Y",strtotime($value->tanggal_awal));?> - <?php echo date("d/m/Y",strtotime($value->tanggal_akhir));?></td>
                                                            <td><?= $value->lama_cuti?> / Hari</td>
                                                            <td><?= $value->keterangan?></td>
                                                            <td>
                                                            <?php
                                                                if($value->status == "0"){
                                                                    echo '<span class="badge badge-default">Menunggu<br>
                                                                    Verifikasi</span>';
                                                                }else if($value->status == "1"){
                                                                    echo '<span class="label label-success">Diterima</span>';
                                                                }else if($value->status == "2"){
                                                                    echo '<span class="label label-danger">Ditolak</span>';
                                                                }
                                                            ?>
                                                            </td>
                                                            <td>
                                                            <?php 
                                                              if($value->status == 0){
                                                                echo '<button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#edit'.$value->id_cuti.'"><i class="material-icons">edit</i></button>
                                                                <button class="btn btn-danger btn-sm"   data-toggle="modal" data-target="#delete'.$value->id_cuti.'"><i class="material-icons">delete</i></button>';
                                                              }
                                                            ?>
                                                            
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
<?php foreach ($cuti as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_cuti ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Edit Permohonan Cuti</b></h4>
            </div>
            <div class="modal-body">
                    <?php 

                        echo form_open('permohonan/edit_cuti/'.$value->id_cuti);
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
                    <label>Kategori</label>
                      <?php 
                        if($value->jenis_cuti == "Menikah"){
                            echo '<select class="selectpicker" name="jenis_cuti" data-style="select-with-transition" multiple title="Menikah">
                            <option disabled>Jenis Cuti</option>
                            <option value="Menikah" selected>Menikah</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Menikah dan cuti tahunan">Menikah dan cuti tahunan</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Haji">Haji</option>
                            <option value="Umrah">Umrah</option>
                        </select>';
                        }else if($value->jenis_cuti == "Melahirkan"){
                            echo '<select class="selectpicker" name="jenis_cuti" data-style="select-with-transition" multiple title="Melahirkan">
                            <option disabled>Jenis Cuti</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Melahirkan" selected>Melahirkan</option>
                            <option value="Menikah dan cuti tahunan">Menikah dan cuti tahunan</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Haji">Haji</option>
                            <option value="Umrah">Umrah</option>
                        </select>';
                        }else if($value->jenis_cuti == "Menikah dan cuti tahunan"){
                            echo '<select class="selectpicker" name="jenis_cuti" data-style="select-with-transition" multiple title="Menikah dan cuti tahunan">
                            <option disabled>Jenis Cuti</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Menikah dan cuti tahunan" selected>Menikah dan cuti tahunan</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Haji">Haji</option>
                            <option value="Umrah">Umrah</option>
                        </select>';
                        }else if($value->jenis_cuti == "Melahirkan"){
                            echo '<select class="selectpicker" name="jenis_cuti" data-style="select-with-transition" multiple title="Melahirkan">
                            <option disabled>Jenis Cuti</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Menikah dan cuti tahunan">Menikah dan cuti tahunan</option>
                            <option value="Melahirkan" selected>Melahirkan</option>
                            <option value="Haji">Haji</option>
                            <option value="Umrah">Umrah</option>
                        </select>';
                        }else if($value->jenis_cuti == "Haji"){
                            echo '<select class="selectpicker" name="jenis_cuti" data-style="select-with-transition" multiple title="Haji">
                            <option disabled>Jenis Cuti</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Menikah dan cuti tahunan">Menikah dan cuti tahunan</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Haji"  selected>Haji</option>
                            <option value="Umrah">Umrah</option>
                        </select>';
                        }else if($value->jenis_cuti == "Umrah"){
                            echo '<select class="selectpicker" name="jenis_cuti" data-style="select-with-transition" multiple title="Umrah">
                            <option disabled>Jenis Cuti</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Menikah dan cuti tahunan">Menikah dan cuti tahunan</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Haji">Haji</option>
                            <option value="Umrah" selected>Umrah</option>
                        </select>';
                        }
                      ?>
                            
                </div>
                  <div class="form-group">
                    <label>Tanggal Awal</label>
                    <input type="text" name="tanggal_awal" value="<?= $value->tanggal_awal?>" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Akhir</label>
                    <input type="text" name="tanggal_akhir" value="<?= $value->tanggal_akhir?>" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tempat Harian</label>
                    <input type="text" name="keterangan" value="<?= $value->keterangan?>" class="form-control">
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

      <?php foreach ($cuti as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value->id_cuti ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Cuti <?= $value->keterangan ?></h4>
            </div>
            <div class="modal-body">
                 
                <h5>Apakah anda ingin menghapus data ini...?</h5>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <a href="<?= base_url('permohonan/delete_cuti/'.$value->id_cuti) ?>"><button class="btn btn-primary">Hapus</button</a>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php } ?>  