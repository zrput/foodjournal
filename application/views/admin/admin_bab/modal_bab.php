                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Buang Air Besar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo base_url('Admin_Bab/tambah_bristol') ?>" method="post">
                                  <div class="form-group">
                                    <label for="Satuan">Masukkan Skala Bristol</label>
                                    <input type="text" class="form-control" name="skala_bristol">
                                  </div>
                                  <div class="form-group">
                                    <label for="image">Upload Image<span style="font-size:small">(*Maksimal 2MB)</span></label>
                                    <input type="file" class="form-control-file" name="foto" accept="image/png, image/jpeg, image/jpg, image/gif">
                                    <?php echo form_error('foto', '<div class="text-small text-danger">', '</div>') ?>
                                  </div>
                                  <div class="form-group">
                                    <label for="Keterangan">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan">
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