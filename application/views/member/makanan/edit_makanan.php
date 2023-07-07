<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Makanan/Minuman</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('asset/fj/vendor/fontawesome-free/css/all.min.css" rel="stylesheet');?>" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/fj/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('asset/fj/vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('member/sidebar');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                   <span>Data Anda</span>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <?php $this->load->view('member/userinfo');?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Makanan/Minuman</h1>
                    <p class="mb-4">Pada Halaman ini Anda dapat memperbaharui catatan makanan atau minuman yang telah dikonsumsi beserta waktu, jumlah, satuan makanan dan bahan makanan/minuman yang dikonsumsi</p>

                    <!-- DataTales Example -->
                    <div class="card-body col-md-8">
                    <form id="myForm" method="post" action="<?php echo base_url('Makanan/edit_makanan'); ?>"> 
                    <div class="form-inline"><!-- form data -->
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="sr-only"></label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nama Makanan:">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                        <label class="sr-only"></label>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $v1['id_user_makanan'] ?>">
                        <input type="hidden" class="form-control" name="idmkn" value="<?php echo $v1['id_makanan_minuman'] ?>">
                        
                        <input type="text" class="form-control" name="nama_makanan" id="carinama" readonly value="<?php echo $v1['nama_makanan'] ?>">
                    </div>
                    <button type="button" disabled class="btn btn-primary mr-2 mb-2">Cari</button>
                    </div> <!-- form -->

                    <div class="form-group md-6">          
                    <label>Bahan Makanan</label>
                    <div id="inputsContainer">
                    <?php foreach ($v2 as $key => $b) { ?>
                        <div class="form-group input-group">
                        <input type="hidden" name="idb[]" class="form-control" value="<?php echo $b['idbahan']; ?>">
                        <input type="text" name="inputText[]" class="form-control" readonly value="<?php echo $b['nama_bahan']; ?>">
                        <!-- <div class="input-group-append">
                            <button type="button" onclick="removeInput(this)" class="btn btn-danger">Hapus</button>
                        </div> -->
                    </div>
                    <?php } ?>
                    <!-- </div>
                        <button type="button" onclick="addInput()" class="btn btn-primary">Tambah Bahan</button>     
                    </div> -->

                    <br>
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">
                    <br>
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" class="form-control" name="waktu" value="<?php echo $v1['waktu'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" value="<?php echo $v1['jumlah'] ?>" required>
                    </div>
                    <?php 
                    $satuan = array(
                        array('gram', 'gram'),
                        array('sdt', 'sdt/satu sendok teh'),
                        array('sdm', 'sdm/satu sendok makan'),
                        array('ml', 'mili liter'),
                        array('gelas', 'gelas'),
                        array('mangkok', 'mangkok'),
                        array('piring', 'piring')
                    );
                    
                    ?>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Satuan</label>
                        <select class="form-control" name="satuan" required>
                            <option value="<?php echo $v1['satuan'] ?>"><?php echo $v1['satuan'] ?></option>
                            <?php foreach ($satuan as $satuans) : if($satuans[0] != $v1['satuan']) {?>
                                
                                <option value="<?php echo $satuans[0]?>"><?php echo $satuans[1]?></option>
                            <?php } endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kalori</label>
                        <input type="number" class="form-control" name="kalori" value="<?php echo $v1['kalori'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Keterangan">Keterangan Tambahan</label>
                        <textarea class="form-control" name="ket_tambahan" cols="30" rows="10"><?php echo $v1['ket_tambahan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">kirim</button>
                    </div>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/fj/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('asset/fj/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/fj/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/fj/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('asset/fj/vendor/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('asset/fj/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('asset/fj/js/demo/datatables-demo.js');?>"></script>
    
    <script>
        function addInput() {
        var inputsContainer = document.getElementById('inputsContainer');
        var inputCount = inputsContainer.children.length;

        var inputGroup = document.createElement('div');
        inputGroup.className = 'form-group input-group';

        var input = document.createElement('input');
        input.type = 'text';
        input.name = 'inputText[]';
        input.className = 'form-control';

        var removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.onclick = function() {
            removeInput(this);
        };
        removeButton.className = 'btn btn-danger';
        removeButton.innerHTML = 'Hapus';

        var inputGroupAppend = document.createElement('div');
        inputGroupAppend.className = 'input-group-append';
        inputGroupAppend.appendChild(removeButton);

        inputGroup.appendChild(input);
        inputGroup.appendChild(inputGroupAppend);
        inputsContainer.appendChild(inputGroup);
        }

        function removeInput(button) {
        var inputGroup = button.parentNode.parentNode;
        inputGroup.parentNode.removeChild(inputGroup);
        }
    </script>
</body>

</html>