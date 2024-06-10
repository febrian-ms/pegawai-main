<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEM CUTI KAYAWAN | DAFTAR</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body class="" style="background: #4682B4;">
    <style>
        .text-black {
            color: black !important;
        }

        .form-group label {
            color: black;
            font-weight: bold;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }

        .form-group {
            position: relative;
        }

        .form-control.error {
            border-color: red;
            background-color: #ffe6e6;
            /* Warna background merah muda */
        }
    </style>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row" style="background: #fff;">
                    <div class="col-lg-5 d-none d-lg-block text-center mt-5">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                            <img src="<?php echo base_url('assets/signup.gif') ?>" alt="logo" class="rounded mx-auto d-block" style="width:500px; height:500px;">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h1 text-black mb-4"><strong>DAFTAR</strong></h1>
                            </div>

                            <?php if ($this->session->flashdata('alert')) : ?>
                                <div class="alert alert-<?php echo $this->session->flashdata('alert')['type']; ?>" role="alert">
                                    <?php echo $this->session->flashdata('alert')['message']; ?>
                                </div>
                            <?php endif; ?>

                            <form class="user" method="post" action="<?php echo base_url('register_karyawan/submit'); ?>">
    <div class="text-left">
        <h1 class="h5 text-white-900 mb-4">Silakan daftar sebagai karyawan :</h1>
    </div>

    <?php if ($this->session->flashdata('message')) : ?>
        <p class="warning mt-2 mb-2"><?php echo $this->session->flashdata('message'); ?></p>
    <?php endif; ?>

    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama'); ?>">
        <span class="text-danger"><?php echo form_error('nama'); ?></span>
    </div>

    <div class="form-group">
        <label for="nik">Nomer Induk Karyawan</label>
        <input type="text" class="form-control" id="nik" name="nik" value="<?php echo set_value('nik'); ?>">
        <span class="text-danger"><?php echo form_error('nik'); ?></span>
    </div>

    <div class="form-group">
        <label for="no_telp">No Telp</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo set_value('no_telp'); ?>">
        <span class="text-danger"><?php echo form_error('no_telp'); ?></span>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
        <span class="text-danger"><?php echo form_error('email'); ?></span>
    </div>

    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kel" name="jenis_kel">
            <option value="" selected disabled>Pilih Jenis Kelamin</option>
            <option value="Laki-laki" <?php echo set_select('jenis_kel', 'Laki-laki'); ?>>Laki-laki</option>
            <option value="Perempuan" <?php echo set_select('jenis_kel', 'Perempuan'); ?>>Perempuan</option>
        </select>
        <span class="text-danger"><?php echo form_error('jenis_kel'); ?></span>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo set_value('alamat'); ?>">
        <span class="text-danger"><?php echo form_error('alamat'); ?></span>
    </div>

    <div class="form-group">
        <label for="status_pekerjaan">Status Pekerjaan</label>
        <select class="form-control" id="status_pekerjaan" name="status_pekerjaan">
            <option value="" selected disabled>Pilih Status Pekerjaan</option>
            <option value="Kontrak" <?php echo set_select('status_pekerjaan', 'Kontrak'); ?>>Kontrak</option>
            <option value="Karyawan Tetap" <?php echo set_select('status_pekerjaan', 'Karyawan Tetap'); ?>>Karyawan Tetap</option>
        </select>
        <span class="text-danger"><?php echo form_error('status_pekerjaan'); ?></span>
    </div>

    <div class="form-group">
        <label for="bagian">Bagian</label>
        <input type="text" class="form-control" id="bagian" name="bagian" value="<?php echo set_value('bagian'); ?>">
        <span class="text-danger"><?php echo form_error('bagian'); ?></span>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
            <input type="password" class="form-control" id="password" name="password">
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fa fa-eye" id="togglePassword"></i>
                </span>
            </div>
        </div>
        <span class="text-danger"><?php echo form_error('password'); ?></span>
    </div>

    <div class="form-group text-center">
        <a href="<?= base_url('user/login') ?>" class="login-link">Sudah punya akun? Masuk</a>
    </div>

    <button type="submit" style="background: #4682B4; font-size: 18px;" class="btn btn-primary btn-user btn-block">Daftar</button>
    <hr>
</form>


                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function(e) {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // Toggle the eye icon
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });

            function validateForm() {
                var fullname = document.getElementById('nama').value;
                var employeeNumber = document.getElementById('nik').value;
                var phoneNumber = document.getElementById('no_telp').value;
                var email = document.getElementById('email').value;
                var gender = document.getElementById('jenis_kelamin').value;
                var address = document.getElementById('alamat').value;
                var jobStatus = document.getElementById('status_pekerjaan').value;
                var division = document.getElementById('bagian').value;
                var password = document.getElementById('password').value;

                // Clear previous error messages
                clearErrors();

                // Check if any field is empty
                var isValid = true;
                if (fullname === '') {
                    showError('fullname', 'Nama Lengkap harus diisi');
                    isValid = false;
                }
                if (employeeNumber === '') {
                    showError('employeeNumber', 'Nomer Induk Karyawan harus diisi');
                    isValid = false;
                }
                if (phoneNumber === '') {
                    showError('phoneNumber', 'No Telp harus diisi');
                    isValid = false;
                }
                if (email === '') {
                    showError('email', 'Email harus diisi');
                    isValid = false;
                }
                if (gender === '') {
                    showError('genderSelect', 'Jenis Kelamin harus dipilih');
                    isValid = false;
                }
                if (address === '') {
                    showError('address', 'Alamat harus diisi');
                    isValid = false;
                }
                if (jobStatus === '') {
                    showError('jobStatusSelect', 'Status Pekerjaan harus dipilih');
                    isValid = false;
                }
                if (division === '') {
                    showError('division', 'Bagian harus diisi');
                    isValid = false;
                }
                if (password === '') {
                    showError('password', 'Password harus diisi');
                    isValid = false;
                }

                // If all fields are filled, submit the form
                if (isValid) {
                    document.getElementById('registration-form').submit();
                }
            }

            function showError(inputId, errorMessage) {
                var errorElement = document.getElementById(inputId + '-error');
                errorElement.innerText = errorMessage;
                errorElement.style.color = 'red'; // Mengubah warna teks menjadi merah
                var inputElement = document.getElementById(inputId); // Mengambil elemen input
                inputElement.style.borderColor = 'red'; // Mengubah warna border menjadi merah
            }

            function clearErrors() {
                var errorMessages = document.querySelectorAll('.error-message');
                errorMessages.forEach(function(errorMessage) {
                    errorMessage.innerText = '';
                });
            }
        </script>
    </div>
</body>

</html>