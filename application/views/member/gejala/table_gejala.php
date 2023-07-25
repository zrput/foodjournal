<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Symptom / gejala</th>
                    <th>Waktu</th>
                    <th>Keterangan Tambahan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Symptom / gejala</th>
                    <th>Waktu</th>
                    <th>Keterangan Tambahan</th>
                    <th>Opsi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($gjl as $key) : $date = date('d-M-Y H:i', strtotime($key['waktu'])) ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $key['nama_symptom'] ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $key['ket_tambahan'] ?></td>
                        <td>
                            <button type="submit" data-toggle="modal" data-target="#edit<?php echo $key['idsymptom']; ?>" class="btn btn-success">edit</button>

                            <!-- modal edit -->
                            <div class="modal fade" id="edit<?php echo $key['idsymptom']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Synptom / gejala</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url('gejala/edit_gejala') ?>?>" method="post">
                                                <div class="form-group">
                                                    <label for="Symptom">Nama Symptom / gejala</label>
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo $key['idsymptom'] ?>">
                                                    <input type="text" class="form-control" name="nama" value="<?php echo $key['nama_symptom'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Waktu">Waktu</label>
                                                    <input type="datetime-local" class="form-control" name="waktu" value="<?php echo $key['waktu'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Keterangan">Keterangan Tambahan</label>
                                                    <textarea class="form-control" name="ket_tambahan" cols="30" rows="10"><?php echo $key['ket_tambahan'] ?></textarea>
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

                            <button type="reset" data-toggle="modal" data-target="#delete<?php echo $key['idsymptom']; ?>" class="btn btn-danger">hapus</button>

                            <!-- hapus Modal-->
                            <div class="modal fade" id="delete<?php echo $key['idsymptom']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <a class="btn btn-danger" href="<?php echo base_url('gejala/hapus_gejala/' . $key['idsymptom']) ?>">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end hapus modal-->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>