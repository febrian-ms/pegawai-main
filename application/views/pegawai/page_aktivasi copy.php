<!-- application/views/pegawai/otp.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <h2>Aktivasi Pegawai <?= $session ?></h2>
    
    <!-- Tampilkan pesan alert jika ada -->
    <?php if ($this->session->flashdata('alert')) : ?>
        <div class="alert alert-<?= $this->session->flashdata('alert')['type'] ?>">
            <?= $this->session->flashdata('alert')['message'] ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('pegawai/otp/generateAndSendOtp'); ?>" method="post">
        <button type="submit" name="submit-otp" class="btn w-32 bg-primary text-white mt-6 sm:mt-10">Aktivasi</button>
    </form>

</body>

</html>
