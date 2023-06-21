                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Makanan/Minuman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo base_url('Makanan/cari')?>?>" method="post">
                                    <div class="form-group">
                                      <label for="Makanan">Nama Makanan/Minuman</label>
                                      <input type="text" class="form-control" name="Makanan" placeholder="Makanan/Minuman">
                                    </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Cari</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        </div>