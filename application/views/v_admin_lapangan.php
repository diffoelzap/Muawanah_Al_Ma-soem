<div class="row">
                        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Tugas Lapangan Karyawan</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover table-condensed" role="grid">
                                            <thead class="text-primary">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Noreg</th>
                                                <th>Tangggal</th>
                                                <th>Jam</th>
                                                <th>Keterangan</th>
                                                <th>Tujuan</th>
                                                <th>Selesai</th>
                                                <th>Kepulangan</th>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $no = 1;
                                                foreach ($lapangan as $key => $value) {
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