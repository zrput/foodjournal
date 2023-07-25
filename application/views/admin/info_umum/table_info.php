<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Nama Makanan/Minuman</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Kalori(kkal)</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Protein(gram)</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Lemak(gram)</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Vitamin & Mineral</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Foto</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Nama Makanan/Minuman</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Kalori(kkal)</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Protein(gram)</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Lemak(gram)</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Vitamin & Mineral</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Foto</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                </tr>
            </tfoot>
            <tbody>

                <?php $no = 1;
                foreach ($makanan_umum as $mkn) :  ?>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td class="text-center"><?php echo $mkn->nama_makanan ?></td>
                        <td class="text-center"><?php echo $mkn->kalori ?></td>
                        <td class="text-center"><?php echo $mkn->protein ?></td>
                        <td class="text-center"><?php echo $mkn->lemak ?></td>
                        <td class="text-center"><?php echo $mkn->vit_mineral ?></td>
                        <td class="text-center"><img width="100px" height="50px" src="<?php echo base_url() . 'asset/upload/' . $mkn->foto ?>"></td>
                        <td class="text-center">

                            <button type="submit" data-toggle="modal" data-target="#editmodal<?php echo $mkn->idmakanan_umum; ?>" class="btn btn-warning"><i class="fa fa-marker"></i> Edit</button>
                            <a type="button" class="btn btn-danger" href="<?= base_url('Info_umum/delete_infoumum/') . $mkn->idmakanan_umum; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')"><i class="fa fa-trash"></i> Hapus</a>



                        </td>
                    </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>

    </div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>


<?php $no = 0;
foreach ($makanan_umum as $mkn) : $no++;
?>
    <!-- Modal Edit-->
    <div class="modal fade" id="editmodal<?php echo $mkn->idmakanan_umum ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Informasi Umum Makanan/Minuman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if ($this->session->flashdata('validate')) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('validate'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('Info_umum/update_infoumum_aksi') ?>" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="nama_makanan" class="form-label">Nama Makanan/Minuman</label>
                            <input type="hidden" name="idmakanan_umum" value="<?php echo $mkn->idmakanan_umum; ?>">
                            <input type="text" name="nama_makanan" class="form-control" id="nama_makanan" value="<?php echo $mkn->nama_makanan ?>">
                            <?php echo form_error('nama_makanan', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="kalori" class="form-label">Kalori(kkal)</label>
                                    <input type="number " name="kalori" class="form-control" id="kalori" value="<?= $mkn->kalori ?>">
                                    <?php echo form_error('kalori', '<div class="text-small text-danger">', '</div>') ?>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="protein" class="form-label">Protein(gram)</label>
                                    <input type="text" name="protein" class="form-control" id="protein" value="<?= $mkn->protein ?>">
                                    <?php echo form_error('protein', '<div class="text-small text-danger">', '</div>') ?>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="lemak" class="form-label">Lemak(gram)</label>
                                    <input type="text" name="lemak" class="form-control" id="lemak" value="<?= $mkn->lemak ?>">
                                    <?php echo form_error('lemak', '<div class="text-small text-danger">', '</div>') ?>

                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="vit_mineral" class="form-label">Vitamin & Mineral</label>
                            <textarea type="text" name="vit_mineral" class="form-control" id="vit_mineral"><?= $mkn->vit_mineral ?></textarea>
                            <?php echo form_error('vit_mineral', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Pilih Gambar<span style="font-size:small">(*Maksimal 2MB)</span></label>
                            <input type="file" name="foto" class="form-control" id="foto" accept="image/png, image/jpeg, image/jpg, image/gif">
                            <?php echo form_error('foto', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
               
        </div>
    </div>
<?php endforeach   ?>