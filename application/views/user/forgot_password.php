<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Cuti karyawan | Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

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
</head>

<body class="" style="background: #4682B4;">

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
                                <h1 class="h3 text-white-900 mb-4"><strong>Lupa Password</strong></h1>
                            </div>
                            <form method="post" action="<?php echo base_url('forgot_password/reset'); ?>">
                                <div class="text-left">
                                    <h1 class="h6 text-white-900 mb-4">Silakan masukkan Nomer WhatsApp dan Password Baru di bawah ini:</h1>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="no_telp" placeholder="No WhatsApp">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <span class="toggle-password" onclick="togglePassword('password')"><i class="fas fa-eye"></i></span>
                                </div>
                                <button type="submit" style="background: #4682B4;" class="btn btn-primary btn-user btn-block">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function togglePassword(inputId) {
                const passwordInput = document.getElementById(inputId);
                const toggleIcon = document.querySelector('.toggle-password i');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                }
            }

            $('form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("forgot_password/reset"); ?>',
                    data: $('form').serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 'success') {
                            Swal.fire({
                                icon: "success",
                                title: "Password Berhasil Dirubah!",
                                showConfirmButton: false,
                                timer: 1500
                            }).then((result) => {
                                // Pindah ke halaman login setelah pengguna menekan OK pada Sweet Alert
                                if (result.isConfirmed || result.isDismissed) {
                                    window.location.href = '<?php echo base_url("user/login"); ?>';
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message,
                            });
                        }
                    }
                });
            });
        </script>
    </div>
</body>

</html>