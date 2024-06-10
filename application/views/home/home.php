<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6>SISTEM CUTI KAYAWAN</h6>
                                    <h2>SICUKA</h2>
                                    <p>Sebuah aplikasi yang memudahkan untuk melakukan cuti karyawan</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-first-button scroll-to-section">
                                        <a href="<?= base_url('user/login') ?>" style="display: inline-block; width: 200px; text-align: center;">Login</a>
                                    </div>
                                    <div class="border-first-button scroll-to-section" style="margin-top: 10px;">
                                        <a id="register-link" href="javascript:void(0);" style="display: inline-block; width: 200px; text-align: center;">Register</a>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                                    <script>
                                        document.getElementById('register-link').addEventListener('click', function() {
                                            Swal.fire({
                                                title: "DAFTAR SEBAGAI",
                                                text: "Silahkan pilih untuk melanjutkan pendaftaran",
                                                icon: "info",
                                                showCancelButton: true,
                                                confirmButtonColor: "#3085d6",
                                                cancelButtonColor: "#3EA055",
                                                confirmButtonText: "KARYAWAN",
                                                cancelButtonText: "PIMPINAN",
                                                customClass: {
                                                    confirmButton: 'custom-button',
                                                    cancelButton: 'custom-button'
                                                }
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = "<?= base_url('user/register_karyawan') ?>";
                                                } else if (result.dismiss === Swal.DismissReason.cancel) {
                                                    window.location.href = "<?= base_url('user/register_pimpinan') ?>";
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                                <style>
                                    .custom-button {
                                        width: 120px;
                                        height: 40px;
                                        margin: 5px;
                                    }

                                    .swal2-actions {
                                        display: flex;
                                        justify-content: center;
                                    }
                                </style>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= base_url() ?>assets/home/assets/images/gambar1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= base_url() ?>assets/home/assets/images/gambar2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="about-right-content">
                            <div class="section-heading">
                                <h6>About Us</h6>
                                <h4>Apa Itu <em>SICUKA</em></h4>
                                <div class="line-dec"></div>
                            </div>
                            <p>Aplikasi cuti karyawan, yang dapat memudahkan mendata cuti karyawan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h6>Type</h6>
                    <h4>Apa saja jenis cuti</h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu">
                                    <div class="first-thumb active">
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url() ?>assets/home/assets/images/service-icon-03.png" alt=""></span>
                                            <h5>Cuti Sakit < 14 Hari</h5>
                                                    <h6>Cuti Sakit lebih dari 1 (satu) hari sampai dengan 14 (empat belas) hari, untuk dapat memperoleh
                                                        cuti sakit yang bersangkutan harus melampirkan surat keterangan dokter.</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url() ?>assets/home/assets/images/service-icon-03.png" alt=""></span>
                                            <h5>Cuti Sakit > 14 Hari</h5>
                                            <h6>Cuti Sakit lebih dari 14 (empat belas) hari, untuk dapat memperoleh
                                                cuti sakit yang bersangkutan harus melampirkan surat keterangan dokter.</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url() ?>assets/home/assets/images/service-icon-03.png" alt=""></span>
                                            <h5>Cuti Melahirkan</h5>
                                            <h6>Cuti melahirkan dapat diberikan pada kelahiran anak pertama sampai dengan ketiga.
                                                Cuti Melahirkan adalah paling lama 3 (tiga) bulan.</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url() ?>assets/home/assets/images/service-icon-03.png" alt=""></span>
                                            <h5>Cuti Alasan Penting</h5>
                                            <h6>Cuti Alasan Penting diberikan 3 hari.</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- <div class="thumb">
                                            <span class="icon"><img src="<?= base_url() ?>assets/home/assets/images/service-icon-03.png" alt=""></span>
                                            <h5>Cuti Besar</h5>
                                            <h6>Cuti Besar diberikan bagi Non ASN yang telah bekerja paling sedikit 1 (satu) tahun secara terus menerus.
                                                Lamanya hak cuti besar adalah paling lama 3 (tiga) bulan.</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url() ?>assets/home/assets/images/service-icon-03.png" alt=""></span>
                                            <h5>Cuti Tahunan</h5>
                                            <h6>Cuti tahunan diberikan bagi Non ASN yang telah bekerja paling sedikit 1 (satu) tahun secara terus menerus. 
                                                Lamanya hak cuti tahunan adalah sama dengan jumlah cuti tahunan bagi PNS yaitu 12 (dua belas) hari kerja.</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="<?= base_url() ?>assets/home/assets/images/service-icon-03.png" alt=""></span>
                                            <h5>Cuti Diluar Tanggungan Negara</h5>
                                            <h6>Cuti Diluar Tanggungan Negara diberikan paling lama 3 (tiga) tahun.</h6>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Contact Us</h6>
                        <h4>Get In Touch With Us <em>Now</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="<?= base_url() ?>assets/home/assets/images/contact-dec-v3.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mt-5" id="map">
                                    <iframe src="https://www.google.com/maps/embed/v1/place?q=PT+Yamaha+Motor+Parts+Manufacturing+Indonesia,+Jalan+Permata+Raya,+Sukaluyu,+Karawang,+Jawa+Barat,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="400" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="<?= base_url() ?>assets/home/assets/images/phone-icon.png" alt="">
                                                    <a href="#">024 - 8415500</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="<?= base_url() ?>assets/home/assets/images/email-icon.png" alt="">
                                                    <a href="#">ypmi@yamaha-motor.co.id</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="<?= base_url() ?>assets/home/assets/images/location-icon.png" alt="">
                                                    <a href="#">PT. Yamaha Motor Parts Manufacturing Indonesia</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                            </fieldset>
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button ">Kirim Pesan</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>