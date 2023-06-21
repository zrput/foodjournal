                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Symptom / gejala</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="<?php echo base_url('Gejala/add_gejala')?>" method="post">
                                    <div class="form-group">
                                      <label for="Symptom">Nama Symptom / gejala</label>
                                      <input type="text" class="form-control" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="Waktu">Waktu</label>
                                      <input type="datetime-local" class="form-control" name="waktu" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="Keterangan">Keterangan Tambahan</label>
                                      <textarea class="form-control" name="ket_tambahan" cols="30" rows="10"></textarea>
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