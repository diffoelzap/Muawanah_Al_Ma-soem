<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Reseller</h4>
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover table-condensed" role="grid">
                                            <thead class="text-primary">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No. Telepon</th>
                                                <th>Alamat</th>
                                                <th>Pesan</th>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                                $no = 1; 
                                                foreach ($reseller as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++;?></td>
                                                    <td><?= $value->nama_reseller?></td>
                                                    <td><?= $value->email_reseller?></td>
                                                    <td><?= $value->telepon_reseller?></td>
                                                    <td class="text-primary"><?= $value->alamat_reseller?></td>
                                                    <td><?= $value->pesan_reseller?></td>
                                                </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                             </div>