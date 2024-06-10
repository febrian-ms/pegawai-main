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
                <th>Tanggal Diajukan</th>
                <th>Mulai</th>
                <th>Berakhir</th>
                <th>Surat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $count = 0;
                foreach ($cutiMelahirkan as $row) {
                  $count = $count + 1;
                ?>
                  <td style="color: #fff;"><?php echo $count ?></td>
                  <td style="color: #fff;"><?php echo $row->nik ?></td>
                  <td style="color: #fff;"><?php echo $row->nama ?></td>
                  <td style="color: #fff;"><?php echo $row->tanggal_pengajuan ?></td>
                  <td style="color: #fff;"><?php echo $row->mulai_cuti ?></td>
                  <td style="color: #fff;"><?php echo $row->akhir_cuti ?></td>
                  <td> <a class="badge badge-primary" href="<?php echo base_url('assets/data/')  . $row->surat_melahirkan; ?>">Lihat Surat</a></td>
                  <?php
                  echo '<td>';
                  if ($row->verifikasi == 0) {
                    echo '<p class="badge badge-info">Menunggu Konfirmasi</p>';
                  } else if ($row->verifikasi == 1) {
                    echo '<p class="badge badge-success">Diterima</p>';
                  } else if ($row->verifikasi == 2) {
                    echo '<p class="badge badge-warning">Ditolak</p>';
                  } else if ($row->verifikasi == 3) {
                    echo '<p class="badge badge-info">Menunggu Konfirmasi</p>';
                  };
                  '</td>';
                  ?>
                </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>