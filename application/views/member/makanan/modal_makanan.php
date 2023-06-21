<div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Makanan/Minuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="text" id="searchInput" class="form-control" placeholder="Masukkan kata kunci">
            <button type="button" class="btn btn-primary" id="searchButton">Cari</button>
            
        <hr>
            < id="searchResult"></div>
        <?php if (!empty($results)): ?>
        <ul>
            <?php foreach ($results as $result): ?>
            <li id="hasil-search"></li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
        <p>Tidak ada hasil pencarian.</p>
        <?php endif; ?>
            
        </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
        $(document).ready(function() {
        $('#searchButton').click(function() {
            var keyword = $('#searchInput').val();
            $.ajax({
            url: '<?php echo base_url('Makanan/search'); ?>',
            type: 'POST',
            data: { keyword: keyword },
            success: function(response) {
                console.log(response);
                for (var i = 0; i < response; i++) {
                $('#searchResult').append(response[i].nama_makanan);
                }
                $('#searchResult').html(response);
                alert('Pencarian berhasil!');
            },
            error: function() {
                // Tambahkan aksi yang ingin dilakukan jika terjadi error pada permintaan AJAX di sini
                // Contoh: Munculkan pesan error
                alert('Terjadi kesalahan saat melakukan pencarian.');
            }
            });
            });
        });
</script>