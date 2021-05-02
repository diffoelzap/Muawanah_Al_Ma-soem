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
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $value->nama_lengkap ?></td>
                                                            <td><?= $value->noreg ?></td>
                                                            <td><?= $value->jenis_cuti ?></td>
                                                            <td class="text-primary"><?php echo date("d/m/Y",strtotime($value->tanggal_awal));?> - <?php echo date("d/m/Y",strtotime($value->tanggal_akhir));?></td>
                                                            <td><?= $value->lama_cuti ?></td>
                                                            <td><?= $value->keterangan ?></td>
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
                                                                        echo '<a href="'.base_url('admin/terima_cuti/'.$value->id_cuti).'" rel="tooltip" class="btn btn-success" id="swal_diterima">
                                                                        <i class="material-icons">done</i>
                                                                    </a>
                                                                    <a href="'.base_url('admin/tolak_cuti/'.$value->id_cuti).'" rel="tooltip" class="btn btn-danger" id="swal_ditolak">
                                                                        <i class="material-icons">close</i>
                                                                    </a>';
                                                                    
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
                           
