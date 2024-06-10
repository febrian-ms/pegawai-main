<div class="col-span-12 lg:col-span-12 mt-2">
    <div class="box p-8 relative overflow-hidden intro-y">
        <div class="text-primary dark:text-white text-xl -mt-3"><span class="font-medium">Hallo,</span> <?= $session ?></div>
        <div class="text-slate-500 mt-2">Silahkan Anda melakukan aktivasi account terlebih dahulu dengan klik tombol aktivasi dibawah ini.</div>
        <form action="<?= site_url('pegawai/otp/generateAndSendOtp'); ?>" method="post">
            <button type="submit" name="submit-otp" class="btn w-32 bg-primary text-white mt-6 sm:mt-10">Aktivasi</button>
        </form>
    </div>
</div>