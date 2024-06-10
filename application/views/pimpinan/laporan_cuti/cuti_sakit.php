<div class="row">
  <div class="col-12 grid-margin">
    <div class="card" style="background: #4682B4;">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col">
            <h4 class="card-title" style="color: #fff;">Laporan Cuti</h4>
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
              foreach ($cuti_sakit as $row) {
                $count = $count + 1;
                
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
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
