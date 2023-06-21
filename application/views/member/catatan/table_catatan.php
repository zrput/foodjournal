                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Waktu</th>
                                            <th>Catatan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Waktu</th>
                                            <th>Catatan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                    <?php $no = 1; ?>
                                    <?php foreach ($ctn as $key) : $date = date('d-M-Y h:i A', strtotime($key['waktu']))?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $no++?></th>
                                            <td><?php echo $date?></td>
                                            <td><?php echo $key['catatan']?></td>
                                            <td>
                                                <button type="submit" data-toggle="modal" data-target="#edit<?php echo $key['idcatatan_harian'];?>" class="btn btn-success">edit</button>

                                                <!-- modal edit -->
                                                <div class="modal fade" id="edit<?php echo $key['idcatatan_harian']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Mood</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url('Catatan/edit_catatan')?>?>" method="post">
                                                            <div class="form-group">
                                                                <label for="Waktu">Waktu</label>
                                                                <input type="hidden" class="form-control" name="id" value="<?php echo $key['idcatatan_harian']?>">
                                                                <input type="datetime-local" class="form-control" name="waktu" value="<?php echo $key['waktu']?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="Keterangan">Keterangan Tambahan</label>
                                                            <textarea class="form-control" name="catatan" cols="30" rows="10"><?php echo $key['catatan']?></textarea>
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
                                                <!-- end Modal Edit -->


                                                <button type="reset" data-toggle="modal" data-target="#delete<?php echo $key['idcatatan_harian'];?>" class="btn btn-danger">hapus</button>

                                                <!-- hapus Modal-->
                                                <div class="modal fade" id="delete<?php echo $key['idcatatan_harian'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                                <a class="btn btn-danger" href="<?php echo base_url('Catatan/hapus_catatan/'. $key['idcatatan_harian']) ?>">Hapus</a>
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