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
    <style>
        .result-btn-pilih {
            margin-left: 10px; /* Atur jarak kiri button pilih*/
        }
    </style>
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
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Makanan/Minuman</h1>
                    <p class="mb-4">Pada Halaman ini Anda dapat melakukan pencatatan makanan atau minuman yang telah dikonsumsi beserta waktu, jumlah, satuan makanan dan bahan makanan/minuman yang dikonsumsi</p>

                    <!-- DataTales Example -->
                    <div class="card-body col-md-8">
                    <form id="myForm" method="post" action="<?php echo base_url('Makanan/add_makanan'); ?>"> 
                    <div class="form-inline"><!-- form data -->
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="sr-only">ss</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nama Makanan:">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                        <label class="sr-only"></label>
                        <input type="text" class="form-control" name="nama_makanan" id="carinama" placeholder="Nasi">
                    </div>
                    <button type="button" class="btn btn-primary mr-2 mb-2" onclick="search()">Cari</button>
                    </div> <!-- form -->

                    <div class="form-group md-6">             
                    <label>Bahan Makanan</label>
                    <div id="inputsContainer">
                        <div class="form-group input-group">
                        <input type="text" name="inputText[]" class="form-control" placeholder="Bahan 1">
                        <div class="input-group-append">
                            <button type="button" onclick="removeInput(this)" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                    </div>
                        <button type="button" onclick="addInput()" class="btn btn-primary">Tambah Bahan</button>
                            
                    </div>

                    <br>
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">
                    <br>
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" class="form-control" name="waktu" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Satuan</label>
                        <select class="form-control" name="satuan" required>
                            <option value="gram">Gram</option>
                            <option value="sdt">sdt/satu sendok teh</option>
                            <option value="sdm">sdm/satu sendok makan</option>
                            <option value="ml">ml/mili liter</option>
                            <option value="gelas">Gelas</option>
                            <option value="mangkok">Mangkok</option>
                            <option value="piring">Piring</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kalori</label>
                        <input type="number" class="form-control" name="kalori">
                    </div>

                    <div class="form-group ">
                        <label for="Keterangan">Keterangan Tambahan</label>
                        <textarea class="form-control" name="ket_tambahan" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="cek_nama()" class="btn btn-primary">kirim</button>
                    </div>
                    </form>
                </div>
                <!-- /.container-fluid -->

                <!-- Modal pencarian makanan-->
                <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="searchModalLabel">Hasil Pencarian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="searchResults"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

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

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        input.placeholder = 'Bahan ' + (inputCount + 1);

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

        function search() {
        var keyword = document.getElementById('carinama').value;
        if (keyword === '') {
            alert('Silakan masukkan kata kunci pencarian.');
            return;
        }
        $.ajax({
            url: '<?php echo base_url('Makanan/search_nama'); ?>',
            type: 'POST',
            data: { keyword: keyword },
            dataType: 'json',

            success: function(response) {
                var searchResults = document.getElementById('searchResults');
                searchResults.innerHTML = ''; // Bersihkan konten sebelumnya
                if (response.d1) {
                    console.log(response.d1);
                    for (var i = 0; i < response.d1.length; i++) {
                        var resultDiv = document.createElement('div');
                        resultDiv.className = 'result-item';

                        // Tampilkan nama makanan
                        var namaMakananDiv = document.createElement('div');
                        namaMakananDiv.className = 'result-nama-makanan';

                        var namaMakanan = document.createElement('strong');
                        namaMakanan.textContent = 'Nama Makanan: ';
                        namaMakananDiv.appendChild(namaMakanan);

                        var namaMakananValue = document.createElement('span');
                        namaMakananValue.textContent = response.d1[i].nama_makanan;
                        namaMakananDiv.appendChild(namaMakananValue);

                        // Tombol Pilih
                        var pilihButton = document.createElement('button');
                        pilihButton.className = 'btn btn-primary btn-sm btn-pilih result-btn-pilih';
                        pilihButton.textContent = 'Pilih';
                        pilihButton.addEventListener('click', (function(makanan, id_Makanan) {
                            return function() {
                                // Mengambil id_makanan berdasarkan nama makanan
                            // Mengarahkan ke URL dengan parameter id_makanan_minuman
                            window.location.href = '<?php echo base_url("Makanan/getMakananById"); ?>?id_makanan_minuman=' + id_Makanan;
                        };
                        })(response.d1[i].nama_makanan, response.d1[i].id_makanan));
                        namaMakananDiv.appendChild(pilihButton);
                        
                        resultDiv.appendChild(namaMakananDiv);

                        // Tampilkan bahan-bahan
                        var bahanList = document.createElement('ul');

                        // Filter bahan sesuai dengan makanan yang relevan
                        var bahanArray = response.d2.filter(function(bahan) {
                            return bahan.id_makanan_minuman === response.d1[i].id_makanan;
                        });
                        // menampilkan nama bahan sesuai id_makanan
                        for (var j = 0; j < bahanArray.length; j++) {
                            var bahanItem = document.createElement('li');
                            bahanItem.textContent = bahanArray[j].nama_bahan;

                            bahanList.appendChild(bahanItem);
                        }

                        resultDiv.appendChild(bahanList);

                        searchResults.appendChild(resultDiv);
                    }
                }

                $('#searchModal').modal('show');
            },

            error: function(xhr, status, error) {
                console.log(error);
            }
        });
        }
        
        function cek_nama(){
            var namaMakanan = $("#carinama").val();

            $.ajax({
                url: '<?php echo base_url('Makanan/cek_nama'); ?>', // Ganti dengan URL yang sesuai dengan skrip PHP Anda
                method: "POST",
                data: { nama_makanan: namaMakanan },
                dataType: "json",
                success: function(response) {
                    // Menampilkan pesan menggunakan alert jika data sudah ada
                    if (response) {
                        Swal.fire({
                            title: 'Peringatan!',
                            text: 'Data makanan dengan nama "' + namaMakanan + '" sudah ada. Tolong gunakan nama yang berbeda!',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        });
                    } else {
                        // Jika data belum ada, jalankan fungsi submitForm()
                        Swal.fire({
                        title: 'Yakin?',
                        text: 'Anda Yakin Ingin Menggunakan nama?',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Ya!',
                        cancelButtonText: 'Tidak!',
                        customClass: {
                            confirmButton: 'btn btn-success result-btn-pilih',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false,
                        reverseButtons: true
                        }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                            title: 'Sukses!',
                            text: 'Data Berhasil Ditambahkan.',
                            icon: 'success',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            },
                            buttonsStyling: false
                            }).then((result) => {
                            if (result.isConfirmed) {
                                submitForm();
                            }
                            });
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            Swal.fire(
                            'Kembali!',
                            'Data Tidak Jadi Ditambahkan :)',
                            'error'
                            );
                        }
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }

        function submitForm() {
        // Submit form menggunakan JavaScript
        document.getElementById("myForm").submit();
    }

    </script>
</body>

</html>