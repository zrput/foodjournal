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
                                            <td>
                                            <?php $bahan = $this->Mmakanan->get_bahan($key['id_makanan_minuman'])?>
                                            <?php foreach ($bahan as $ingridient) : ?>
                                                <?php echo $ingridient['bahan']; ?>
                                            <?php endforeach; ?>
                                            </td>
                                            <td><?php echo $key['ket_tambahan']?></td>
                                            <td>
                                                <button type="submit" class="btn btn-success">edit</button>
                                                <button type="reset" class="btn btn-danger">hapus</button>
                                            </td>
                                        </tr>
        
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                        