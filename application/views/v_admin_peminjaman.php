<div class="row">
<?php
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
                                                <th>Selesai</th>
                                                <th>Kepulangan</th>
                                                <th>Aksi</th>
                                            </thead>
                                            <tbody>
                                              <?php 
                                                    $no = 1;
                                                    foreach ($peminjaman as $key => $value) {
                                                    ?>
                                                <tr>
                                                    <td><?= $no++;?></td>
                                                    <td><?= $value->nama_lengkap?></td>
                                                    <td><?= $value->noreg?></td>
                                                    <td><?= $value->tanggal_peminjaman?></td>
                                                    <td class="text-primary"><?= $value->jam_peminjaman?></td>
                                                    <td><?= $value->jangka_waktu_pemakaian?></td>
                                                    <td><?= $value->keterangan?></td>
                                                    <td><?= $value->pengemudi?></td>
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
                                                    <td class="td-actions text-left">
                                                    <?php 
                                                        if($value->status == "0"){
                                                            echo '<a href="'.base_url('admin/terima_peminjaman/'.$value->id_peminjaman).'" rel="tooltip" class="btn btn-success">
                                                            <i class="material-icons">done</i>
                                                        </a>
                                                        <a href="'.base_url('admin/tolak_peminjaman/'.$value->id_peminjaman).'" rel="tooltip" class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </a>';
                                                        }
                                                    ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>