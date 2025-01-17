<div class="row">
  <div class="col-12 grid-margin">
    <div class="card" style="background: #4682B4;">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col">
            <h4 class="card-title" style="color: #fff;">Data Cuti</h4>
          </div>
        </div>
        <div class="table-responsive text-white">
          <table class="table table-white" id="table">
            <thead>
              <tr style="color: #fff;">
                <th>No</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Bagian</th>
                <th>Perihal</th>
                <th>Tanggal Diajukan</th>
                <th>Mulai</th>
                <th>Berakhir</th>
                <th>Sisa Cuti</th>
                <th>Berkas</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $count = 0;
              foreach ($cutiSakit as $row) {
                $count++;
              ?>
              <tr>
                <td style="color: #fff;"><?php echo $count; ?></td>
                <td style="color: #fff;"><?php echo $row->nik; ?></td>
                <td style="color: #fff;"><?php echo $row->nama; ?></td>
                <td style="color: #fff;"><?php echo $row->bagian; ?></td>
                <td style="color: #fff;"><?php echo $row->perihal; ?></td>
                <td style="color: #fff;"><?php echo $row->tanggal_pengajuan; ?></td>
                <td style="color: #fff;"><?php echo $row->mulai_cuti; ?></td>
                <td style="color: #fff;"><?php echo $row->akhir_cuti; ?></td>
                <td style="color: #fff;"><?php echo $row->sisa_cuti; ?></td>
                <td><a class="badge badge-primary" href="<?php echo base_url('assets/data/') . $row->surat_dokter; ?>">Lihat Surat</a></td>
                <td>
                  <?php
                  if ($row->verifikasi == 0) {
                    echo '<p class="badge badge-info">Menunggu Konfirmasi</p>';
                  } elseif ($row->verifikasi == 1) {
                    echo '<p class="badge badge-success">Diterima</p>';
                  } elseif ($row->verifikasi == 2) {
                    echo '<p class="badge badge-warning">Ditolak</p>';
                  }
                  ?>
                </td>
              </tr>
              <div class="modal fade" id="editcutiModal<?= $row->id_cuti; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content" style="background-color:#4682B4;">
                    <div class="modal-header">
                      <h4 class="modal-title">Konfirmasi Cuti</h4>
                    </div>
                    <style>
                      .input-group {
                        display: flex;
                        flex-direction: column;
                        align-items: flex-start;
                      }

                      .input-group-append {
                        margin-top: 1px;
                        margin-bottom: 10px;
                      }
                    </style>
                    <div class="modal-body text-left">
                      <form action="<?= base_url('pimpinan/laporancuti/editcuti/' . $row->id_cuti); ?>" method="post">
                        <div class="form-group">
                          <label for="nik">NIK</label>
                          <input type="text" class="form-control" id="nik" name="nik" value="<?= $row->nik; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="perihal">Perihal</label>
                          <input type="text" class="form-control" id="perihal" name="perihal" value="<?= $row->perihal; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="mulai">Mulai Cuti</label>
                          <input type="text" class="form-control" id="mulai" name="mulai" value="<?= $row->mulai_cuti; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="berakhir">Berakhir Cuti</label>
                          <input type="text" class="form-control" id="berakhir" name="berakhir" value="<?= $row->akhir_cuti; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="sisa_cuti">Sisa Cuti</label>
                          <input type="text" class="form-control" id="sisa_cuti" name="sisa_cuti" value="<?= $row->sisa_cuti; ?>" readonly>
                        </div>
                        <div class="input-group">
                          <label for="berkas">Bukti Upload Berkas</label>
                          <div class="input-group-append">
                            <a class="btn btn-primary" href="<?= base_url('assets/data/') . $row->surat_dokter; ?>" target="_blank">Lihat Surat</a>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="verifikasi">Verifikasi</label>
                          <select class="form-control" id="verifikasi" name="verifikasi">
                            <option selected>- Pilih -</option>
                            <option value="1">Diterima</option>
                            <option value="2">Ditolak</option>
                          </select>
                        </div>
                        <input type="hidden" name="keterangan" value="<?= $row->keterangan; ?>">
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
