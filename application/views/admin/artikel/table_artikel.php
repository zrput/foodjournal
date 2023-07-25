<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Judul</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Penulis</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Isi</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Foto</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Preview</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">No</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Judul</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Waktu</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Penulis</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Isi</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Foto</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Opsi</th>
                    <th scope="col" class="text-center" style="background-color:#adf5ce; color:#747474; font-weight: bold; font-family: 'roboto';">Preview</th>
                </tr>
            </tfoot>
            <tbody>

                <?php $no = 1;
                foreach ($artikel as $art) :  ?>
                    <tr>

                        <td class="text-center"><?php echo $no++ ?></td>
                        <td class="text-center"><?php echo $art->judul ?></td>
                        <td class="text-center"><?php echo date('d F Y', strtotime($art->waktu)) ?></td>
                        <td class="text-center"><?php echo $art->penulis ?></td>
                        <td class="text-left">
                            <!-- <pre class="pre-width" style="font-family:roboto; color:#a0a0a0;"></pre> --><?php echo $art->isi ?>
                        </td>
                        <td class="text-center"><img width="100px" height="50px" src="<?php echo base_url() . 'asset/upload/' . $art->foto ?>"></td>

                        <td class="text-center">

                            <a type="button" class="badge badge-warning" href="<?= base_url('artikel/update_artikel/') . $art->idartikel; ?>"><i class="fa fa-marker"></i> Edit</a>
                            <a type="button" class="badge badge-danger" href="<?= base_url('artikel/delete_artikel/') . $art->idartikel; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')"><i class="fa fa-trash"></i> Hapus</a>



                        </td>
                        <td class="text-center">
                            <form action="<?= base_url('guest/detail_artikel/') ?> " method="post" target="_blank">
                                <input type="hidden" name="idartikel" value="<?= $art->idartikel ?>">

                                <button data-toggle="tooltip" title="Lihat tampilan artikel" class="badge badge-info" type="submit"><i class="fa fa-eye"></i> <span style=" font-weight: light; font-family: 'roboto'; font-size: 14px;"> Preview</span> </button>
                            </form>




                        </td>
                    </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>
        <br>
        <br>


    </div>

</div>