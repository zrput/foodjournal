                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Skala Bristol</th>
                                            <th>Waktu</th>
                                            <th>Warna</th>
                                            <th>Keterangan Tambahan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Skala Bristol</th>
                                            <th>Waktu</th>
                                            <th>Warna</th>
                                            <th>Keterangan Tambahan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                    <?php $no = 1;?>
                                    <?php foreach ($bab as $key) : $date = date('d-M-Y H:i', strtotime($key['waktu'])) ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $no++?></th>
                                            <td>
                                            <img src="<?php echo base_url() . '/asset/pic/' . $key['foto']?>" alt="Foto" width="75"> <br>
                                            <?php echo $key['bab_idbab']?> <br>
                                            
                                            </td>
                                            <td><?php echo $date ?></td>
                                            <td><?php echo $key['warna']?></td>
                                            <td><?php echo $key['ket_tambahan']?></td>
                                            <td>
                                                <!-- Button edit -->
                                                <button type="submit" data-toggle="modal" data-target="#edit<?php echo $key['id_user_bab'];?>"class="btn btn-success">edit</button>

                                                <!-- modal edit -->
                                                <div class="modal fade" id="edit<?php echo $key['id_user_bab']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Buang Air Besar</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url('Bab/edit_bab')?>" method="post">
                                                            <div class="form-group">
                                                            <input type="hidden" class="form-control" name="id" value="<?php echo $key['id_user_bab']?>">
                                                            <label for="Satuan">Pilih Mood</label>
                                                            <select name="bab" class="form-control">
                                                            <option value="<?php echo $key['bab_idbab']; ?>"><?php echo $key['bab_idbab']; ?></option>
                                                                <?php foreach ($v2 as $option): if($option['idbab'] != $key['bab_idbab']) { ?>
                                                                    <option value="<?php echo $option['idbab']; ?>"><?php echo $option['idbab']; ?></option>
                                                                <?php } endforeach; ?>
                                                            </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Waktu">Waktu</label>
                                                                <input type="datetime-local" class="form-control" name="waktu" value="<?php echo $key['waktu']?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Waktu">Warna</label>
                                                                <input type="text" class="form-control" name="warna" value="<?php echo $key['warna']?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="Keterangan">Keterangan Tambahan</label>
                                                            <textarea class="form-control" name="ket_tambahan" cols="30" rows="10"><?php echo $key['ket_tambahan']?></textarea>
                                                            </div>
                                                            </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- End Modal Edit -->

                                                <!-- Button Hapus-->
                                                <button type="reset" data-toggle="modal" data-target="#delete<?php echo $key['id_user_bab'];?>" class="btn btn-danger">hapus</button>

                                                 <!-- hapus Modal-->
                                                 <div class="modal fade" id="delete<?php echo $key['id_user_bab'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                                <a class="btn btn-danger" href="<?php echo base_url('Bab/hapus_bab/'. $key['id_user_bab']) ?>">Hapus</a>
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