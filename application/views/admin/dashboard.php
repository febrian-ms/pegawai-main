<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card card-img-holder text-white" style="background: #4682B4;">
      <div class="card-body">
        <a href="<?= base_url('admin/Cuti/cutiSakit') ?>" style="text-decoration: none; color: white;">
          <img src="<?php echo base_url('vendors/adminassets/assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Data Cuti Sakit<i class="mdi mdi-calendar-check mdi-24px float-right"></i></h4>
          <h2 class="mb-5"><?= $cuti_sakit ?></h2>
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card card-img-holder text-white" style="background: #4682B4;">
      <div class="card-body">
        <a href="<?= base_url('admin/Cuti/cutiSakit14') ?>" style="text-decoration: none; color: white;">
          <img src="<?php echo base_url('vendors/adminassets/assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Data Cuti Sakit > 14 Hari<i class="mdi mdi-calendar-check mdi-24px float-right"></i></h4>
          <h2 class="mb-5"><?= $cuti_sakit14 ?></h2>
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card card-img-holder text-white" style="background: #4682B4;">
      <div class="card-body">
        <a href="<?= base_url('admin/Cuti/cutiMelahirkan') ?>" style="text-decoration: none; color: white;">
          <img src="<?php echo base_url('vendors/adminassets/assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Data Cuti Melahirkan<i class="mdi mdi-calendar-check mdi-24px float-right"></i></h4>
          <h2 class="mb-5"><?= $cuti_melahirkan ?></h2>
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card card-img-holder text-white" style="background: #4682B4;">
      <div class="card-body">
        <a href="<?= base_url('admin/Cuti/cutiAlasanPenting') ?>" style="text-decoration: none; color: white;">
          <img src="<?php echo base_url('vendors/adminassets/assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Data Cuti Alasan Penting<i class="mdi mdi-calendar-check mdi-24px float-right"></i></h4>
          <h2 class="mb-5"><?= $cuti_alasanpenting ?></h2>
        </a>
      </div>
    </div>
  </div>
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
  <style>
    /* Style for the large MDI icon */
    .large-mdi-icon {
      font-size: 50px;
      /* Adjust the font size to your preference */
    }
  </style>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card card-img-holder text-white" style="background: #4682B4;">
      <div class="card-body">
        <a href="<?php echo base_url('admin/Pegawai/index'); ?>" style="text-decoration: none; color: white;">
          <img src="<?php echo base_url('vendors/adminassets/assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Total Pegawai <i class="mdi mdi-account-multiple mdi-50px float-right large-mdi-icon"></i></h4>
          <h2 class="mb-5"><?= $total_pegawai; ?></h2>
        </a>
      </div>
      </div>
    </div>
      <div class="col-md-4 stretch-card grid-margin">
    <div class="card card-img-holder text-white" style="background: #4682B4;">
      <div class="card-body">
        <a href="<?php echo base_url('admin/Pegawai/index'); ?>" style="text-decoration: none; color: white;">
          <img src="<?php echo base_url('vendors/adminassets/assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Total Pimpinan <i class="mdi mdi-account-multiple mdi-50px float-right large-mdi-icon"></i></h4>
          <h2 class="mb-5"><?= $total_pegawai; ?></h2>
        </a>
      </div>
    </div>
  </div>
</div>