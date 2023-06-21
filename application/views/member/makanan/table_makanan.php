<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Table Catatan</title>
</head>
<body>
    <h1>Data Barang si "<?php echo $this->session->userdata('name'); ?>"</h1>
    <a href="<?php echo base_url('')?>"><button type="button" class="btn btn-dark">Tambah Data</button></a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Makanan & Minuman</th>
        <th scope="col">Waktu</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Satuan</th>
        <th scope="col">Nama Bahan Makanan</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Opsi</th>
        </tr>
    </thead>
    
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
            <a href=""><button type="button" class="btn btn-secondary">Edit</button></a>
            <a href=""><button type="button" class="btn btn-danger">Hapus</button></a>
        </td>
        </tr>
        
    </tbody>
    <?php endforeach; ?>
   
    </table>
    
</body>
</html>