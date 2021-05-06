<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Job Des Karyawan</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover table-condensed" role="grid">
                                            <thead class="text-primary">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Noreg</th>
                                                <th>Tangggal</th>
                                                <th>Job Des</th>
                                                <th>Keterangan</th>
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
                                                <td><?= $value->job_des?></td>
                                                <td><?= $value->keterangan?></td>
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
