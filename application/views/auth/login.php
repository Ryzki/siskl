<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= base_url('assets') ?>/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem pengumuman kelulusan ini tidak selalu diterapkan pada website sekolah. Untuk sekolah yang belum mempunyai website, cara pengumuman kelulusan online dapat dilakukan dengan membuat data kelulusan siswa pada sebuah file yang dapat diunduh, kemudian membagikan link unduh file tersebut melalui WA para orang tua atau wali murid..">
    <meta name="keywords" content="Aplikasi sistem informasi kelulusan adalah sebuah aplikasi atau fitur pada website sekolah yang digunakan untuk menampilkan pengumuman kelulusan siswa.">
    <meta name="author" content="SANDI MAULIDIKA">
    <title><?= $identitas['nama_aplikasi']; ?> <?= $title; ?> - <?= $identitas['nama_sekolah'] ?></title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="<?= base_url('assets') ?>/dist/images/logo.svg">
                    <span class="text-white text-lg ml-3"> <?= $identitas['nama_aplikasi']; ?> </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="<?= base_url('assets') ?>/dist/images/illustration2.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        <?= $identitas['nama_aplikasi']; ?>.
                        <br>
                        Informasi Hasil Kelulusan Siswa.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"><a href="<?= site_url('') ?>"><?= $identitas['nama_sekolah'] ?></a></div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x mb-3 font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Sign In
                    </h2>
                    <?php echo $this->session->flashdata('message') ?>
                    <form method="POST" action="<?php echo site_url('admin/auth') ?>">
                        <div class="intro-x mt-5">
                            <!-- username -->
                            <input type="text" name="username" id="username" class="intro-x login__input form-control py-3 px-4 block" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger" pl-3>', '</small>'); ?>
                            <!-- password -->
                            <input type="password" name="password" id="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                        <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="">Forgot Password?</a>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                            <!-- <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Registers</button> -->
                        </div>
                    </form>
                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">Copyright &copy; <?= date('Y') . ' - ' . $identitas['nama_sekolah'] ?></div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="<?= base_url('assets') ?>/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>