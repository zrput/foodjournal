                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Makanan/Minuman</th>
                                            <th>Waktu</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Kalori</th>
                                            <th>Bahan Makanan</th>
                                            <th>Keterangan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Makanan/Minuman</th>
                                            <th>Waktu</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Kalori</th>
                                            <th>Bahan Makanan</th>
                                            <th>Keterangan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                    <?php $no = 1; ?>
                                    <?php foreach ($mkn as $key) : $date = date('d-M-Y H:i', strtotime($key['waktu'])); ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $no++?></th>
                                            <td><?php echo $key['nama_makanan']?></td>
                                            <td><?php echo $date?></td>
                                            <td><?php echo $key['jumlah']?></td>
                                            <td><?php echo $key['satuan']?></td>
                                            <td><?php echo $key['kalori']?></td>
                                            <td>
                                            <?php $bahan = $this->Mmakanan->get_bahan($key['id_makanan_minuman'])?>
                                            <?php foreach ($bahan as $ingridient) : ?>
                                                <?php echo $ingridient['bahan']; ?>
                                            <?php endforeach; ?>
                                            </td>
                                            <td><?php echo $key['ket_tambahan']?></td>
                                            <td>
                        
                                                <button type="button" onclick="window.location.href = '<?php echo base_url('Makanan/ubah_makanan/' . $key['id_user_makanan']) ?>';" class="btn btn-success">edit</button>


                                                <button type="button" data-toggle="modal" data-target="#delete<?php echo $key['id_user_makanan'];?>"class="btn btn-danger">hapus</button>

                                                <!-- hapus Modal-->
                                                <div class="modal fade" id="delete<?php echo $key['id_user_makanan'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Yakin Ingin Menghapus Data?</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                                <a class="btn btn-danger" href="<?php echo base_url('Makanan/hapus_makanan/'. $key['id_user_makanan']) ?>">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end hapus modal-->
                                            </td>
                                        </tr>
        
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                        