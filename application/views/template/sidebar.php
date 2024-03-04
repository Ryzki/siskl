<?php $this->load->view('template/sidebar_mobile') ?>
<!-- END: Mobile Menu -->
<div class="flex mt-[4.7rem] md:mt-0">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="<?= site_url('admin') ?>" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Logo" class="w-10" src="<?= base_url('assets/img/logo/') . $identitas['logo'] ?>">
            <span class="hidden xl:block text-white text-lg ml-3"> <?= $identitas['nama_aplikasi'] ?> </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="<?= site_url('admin') ?>" class="side-menu <?= active_menu('home') ?>">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Dashboard
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/identitas') ?>" class="side-menu <?= active_menu('identitas') ?>">
                    <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                    <div class="side-menu__title">
                        Identitas Sekolah
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="side-menu <?= active_menu('datasiswa') ?>">
                    <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                    <div class="side-menu__title">
                        Master Data
                        <div class="side-menu__sub-icon <?= rotate_active('datasiswa') ?>"> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="menu__sub-open <?= dropdown_active('datasiswa') ?>">
                    <li>
                        <a href="<?= site_url('admin/datasiswa') ?>" class="side-menu <?= active_menu('datasiswa') ?>">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Data Siswa </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/datanilai') ?>" class="side-menu <?= active_menu('datanilai') ?>">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Data Nilai </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu <?= active_menu('importsiswa') ?>">
                    <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                    <div class="side-menu__title">
                        Import Data
                        <div class="side-menu__sub-icon <?= rotate_active('importsiswa') ?>"> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="menu__sub-open <?= dropdown_active('importsiswa') ?>">
                    <li>
                        <a href="<?= site_url('admin/importsiswa') ?>" class="side-menu <?= active_menu('importsiswa') ?>">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Import Siswa </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/importnilai') ?>" class="side-menu <?= active_menu('importnilai') ?>">
                            <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="side-menu__title"> Import Nilai </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="<?= site_url('admin/user') ?>" class="side-menu <?= active_menu('user') ?>">
                    <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="side-menu__title">
                        User
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/jadwal') ?>" class="side-menu <?= active_menu('pesan') ?>">
                    <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                    <div class="side-menu__title">
                        Jadwal
                    </div>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/setting') ?>" class="side-menu <?= active_menu('setting') ?>">
                    <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="side-menu__title">
                        Setting Suket
                    </div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="<?= site_url('admin/auth/logout') ?>" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="log-out"></i> </div>
                    <div class="side-menu__title">
                        Logout
                    </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Side Menu -->