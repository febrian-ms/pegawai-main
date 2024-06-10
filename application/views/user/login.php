<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Cuti karyawan | Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body class="" style="background: #4682B4;">
<style>
        .form-group {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row" style="background: #fff;">
                    <div class="col-lg-5 d-none d-lg-block text-center mt-5">
                        <img src="<?php echo base_url('assets/yamaha-logo.jpg') ?>" alt="logo" class="rounded mx-auto d-block mt-5" style="width:200px; height:200px;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 text-white-900 mb-4"><strong>Sistem Cuti karyawan</strong></h1>
                            </div>

                            <?php if ($this->session->flashdata('alert')) : ?>
                                <div class="alert alert-<?php echo $this->session->flashdata('alert')['type']; ?>" role="alert">
                                    <?php echo $this->session->flashdata('alert')['message']; ?>
                                </div>
                            <?php endif; ?>

                            <form class="user" method="post" action="<?php echo base_url('user/loginuser'); ?>">
                                <div class="text-left">
                                    <h1 class="h6 text-white-900 mb-4">Silakan masukkan NIK dan Password di bawah ini:</h1>
                                </div>

                                <?php if ($this->session->flashdata('message')) : ?>
                                    <p class="warning mt-2 mb-2"><?php echo $this->session->flashdata('message'); ?></p>
                                <?php endif; ?>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFirstName" aria-describedby="emailHelp" placeholder="NIK" name="email">
                                </div>

                                <div class="form-group">
                                    <input type="newpassword" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
                                    <!-- Tambahkan span untuk toggle password -->
                                    <span class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
                                </div>

                                <div class="form-group">
                                    <a href="<?= base_url('user/forgot_password') ?>" class="forgot-password-link">Lupa Password?</a>
                                </div>



                                <button type="submit" style="background: #4682B4;" class="btn btn-primary btn-user btn-block" onclick="redirectPage()">Login</button>
                                <hr>
                            </form>

                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function togglePassword() {
                var passwordField = document.getElementById("exampleInputPassword");
                var toggleBtn = document.querySelector(".toggle-password");

                // Ubah tipe input field antara password dan text
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    // Ubah ikon mata menjadi ikon mata tertutup
                    toggleBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
                } else {
                    passwordField.type = "password";
                    // Ubah ikon mata tertutup menjadi ikon mata
                    toggleBtn.innerHTML = '<i class="fas fa-eye"></i>';
                }
            }

            function redirectPage() {
                // Gantilah URL berikut dengan URL halaman 'page_aktivasi'
                window.location.href = 'https://http://localhost/pegawai-main/pegawai/page_aktivasi';
            }
        </script>
    </div>
</body>

</html>