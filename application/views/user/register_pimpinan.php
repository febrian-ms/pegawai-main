<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEM CUTI KAYAWAN | Daftar</title>

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

        .form-group {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 73%;
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

                            <form class="user" method="post" action="<?php echo base_url('user/loginuser'); ?>">
                                <div class="text-left">
                                    <h1 class="h5 text-white-900 mb-4">Silakan daftar sebagai pimpinan :</h1>
                                </div>

                                <?php if ($this->session->flashdata('message')) : ?>
                                    <p class="warning mt-2 mb-2"><?php echo $this->session->flashdata('message'); ?></p>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label for="fullname">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="exampleFullname" aria-describedby="fullnameHelp" placeholder="Nama Lengkap" name="fullname">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Nomer Induk Karyawan</label>
                                    <input type="text" class="form-control" id="exampleFullname" aria-describedby="fullnameHelp" placeholder="Nomer Induk Karyawan" name="fullname">
                                </div>

                                <div class="form-group">
                                    <label for="employeeNumber">No Telp</label>
                                    <input type="number" class="form-control" id="employeeNumber" aria-describedby="employeeNumberHelp" placeholder="No Telp" name="employeeNumber">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Email</label>
                                    <input type="email" class="form-control" id="exampleFirstName" aria-describedby="emailHelp" placeholder="Email" name="email">
                                </div>

                                <div class="form-group gender">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Male">Laki-laki</option>
                                        <option value="Female">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Alamat</label>
                                    <input type="text" class="form-control" id="exampleFullname" aria-describedby="fullnameHelp" placeholder="Alamat" name="fullname">
                                </div>

                                <div class="form-group job-status">
                                    <label for="jobStatus">Status Pekerjaan</label>
                                    <select class="form-control" id="jobStatus" name="jobStatus">
                                        <option value="" selected disabled>Pilih Status Pekerjaan</option>
                                        <option value="Laki-laki">Kontrak</option>
                                        <option value="Perempuan">Karyawan Tetap</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="fullname">Bagian</label>
                                    <input type="text" class="form-control" id="exampleFullname" aria-describedby="fullnameHelp" placeholder="Bagian" name="fullname">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Password</label>
                                    <input type="newpassword" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
                                    <!-- Tambahkan span untuk toggle password -->
                                    <span class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
                                </div>

                                <div class="form-group text-center">
                                    <a href="<?= base_url('user/login') ?>" class="login-link">Sudah punya akun? Masuk</a>
                                </div>
                                <button type="submit" style="background: #4682B4; font-size: 18px;" class="btn btn-primary btn-user btn-block" onclick="redirectPage()">Daftar</button>
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
        </script>
    </div>
</body>

</html>