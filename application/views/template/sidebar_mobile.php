<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="<?= site_url('admin') ?>" class="flex mr-auto">
            <img alt="logo" class="w-10" src="<?= base_url('assets/img/logo/') . $identitas['logo'] ?>">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        <ul class="scrollable__content py-2">
            <li>
                <a href="<?= site_url('admin') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/identitas') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="settings"></i> </div>
                    <div class="menu__title"> Identitas Sekolah </div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                    <div class="menu__title"> Master Data <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="<?= site_url('admin/datasiswa') ?>" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Data Siswa </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/datanilai') ?>" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Data Nilai </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                    <div class="menu__title"> Import Data <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="<?= site_url('admin/importsiswa') ?>" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Import Siswa </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/importnilai') ?>" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Import Nilai </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__devider my-6"></li>
            <li>
                <a href="<?= site_url('admin/user') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="menu__title"> User </div>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/jadwal') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                    <div class="menu__title"> Jadwal </div>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/setting') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="menu__title"> Setting Suket </div>
                </a>
            </li>
            <li>
                <a href="<?= site_url('admin/pesan') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                    <div class="menu__title">
                        Pesan Masuk
                    </div>
                </a>
            </li>
            <li class="menu__devider my-6"></li>
            <li>
                <a href="<?= site_url('admin/auth/logout') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="log-out"></i> </div>
                    <div class="menu__title"> Logout </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Mobile Menu -->