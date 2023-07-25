                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Mood</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo base_url('Mood/add_mood') ?>?>" method="post">
                                  <div class="form-group">
                                    <label for="Satuan">Pilih Mood</label>
                                    <select name="nama" class="form-control">
                                      <option value="">-- Pilih Mood --</option>
                                      <?php foreach ($ket as $option) : ?>
                                        <option value="<?php echo $option['idmood']; ?>"><?php echo $option['nama_mood']; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="Waktu">Waktu</label>
                                    <input type="datetime-local" class="form-control" name="waktu" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="Keterangan">Keterangan Tambahan</label>
                                    <textarea class="form-control" name="ket_tambahan" cols="30" rows="10" placeholder="Masukan keterangan tambahan...."></textarea>
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
                        </div>