<h2 class="intro-y text-lg font-medium mt-10">
    <?= $title; ?>
</h2>
<?php echo $this->session->flashdata('message') ?>
<div class="intro-y grid grid-cols-11 gap-5 mt-5">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
        <div class="box p-5 rounded-md">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Identitas Details</div>
            </div>
            <div class="flex items-center"> <i data-lucide="book" class="w-4 h-4 text-slate-500 mr-2"></i> Nama Sekolah: </div>
            <p class="flex items-center ml-6 mb-3"><?= $identitas['nama_sekolah'] ?></p>
            <div class="flex items-center"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Alamat: </div>
            <p class="flex items-center ml-6 mb-3"><?= $identitas['alamat'] ?></p>
            <div class="flex items-center"> <i data-lucide="user" class="w-4 h-4 text-slate-500 mr-2"></i> Kepala Sekolah: </div>
            <p class="flex items-center ml-6 mb-3"><?= $identitas['kepsek'] ?></p>
            <div class="flex items-center"> <i data-lucide="target" class="w-4 h-4 text-slate-500 mr-2"></i> NPSN: </div>
            <p class="flex items-center ml-6 mb-3"><?= $identitas['npsn'] ?></p>
            <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
            </div>
            <div class="flex items-center"> <i data-lucide="image" class="w-4 h-4 text-slate-500 mr-2"></i> Logo: </div>
            <div class="flex items-center justify-center">
                <img src="<?= base_url('assets/img/logo/') . $identitas['logo']; ?>" alt="" class="w-30 h-32 mr-2">
                <img src="<?= base_url('assets/img/logo/') . $identitas['prov']; ?>" alt="" class="w-30 h-32">
            </div>
            <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
            </div>
            <a href="<?= site_url('admin/identitas/backup') ?>" class="btn btn-danger shadow-md mr-2"><i data-lucide="database" class="h-4"></i> Backup Database</a>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
        <div class="grid grid-cols-12 gap-5">
            <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-12">
                <div class="box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Setting Form
                        </h2>
                    </div>
                    <div id="vertical-form" class="p-5">
                        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/identitas') ?>">
                            <div class="preview">
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Nama Aplikasi</label>
                                    <input id="nama_aplikasi" name="nama_aplikasi" type="text" class="form-control col-span-6" value="<?= $identitas['nama_aplikasi']; ?>">
                                    <?= form_error('nama_aplikasi', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Nama Sekolah</label>
                                    <input id="nama_sekolah" name="nama_sekolah" type="text" class="form-control col-span-6" value="<?= $identitas['nama_sekolah']; ?>">
                                    <?= form_error('nama_sekolah', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Kepala Sekolah</label>
                                    <input id="kepsek" name="kepsek" type="text" class="form-control col-span-6" value="<?= $identitas['kepsek']; ?>">
                                    <?= form_error('kepsek', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">NIP</label>
                                    <input id="nip" name="nip" type="text" class="form-control col-span-6" value="<?= $identitas['nip']; ?>">
                                    <?= form_error('nip', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">NPSN</label>
                                    <input id="npsn" name="npsn" type="text" class="form-control col-span-6" value="<?= $identitas['npsn']; ?>">
                                    <?= form_error('npsn', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Alamat</label>
                                    <input id="alamat" name="alamat" type="text" class="form-control col-span-6" value="<?= $identitas['alamat']; ?>">
                                    <?= form_error('alamat', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Email Sekolah</label>
                                    <input id="email" name="email" type="text" class="form-control col-span-6" value="<?= $identitas['email']; ?>">
                                    <?= form_error('email', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Website</label>
                                    <input id="website" name="website" type="text" class="form-control col-span-6" value="<?= $identitas['website']; ?>">
                                    <?= form_error('website', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Telphone</label>
                                    <input id="telpon" name="telpon" type="text" class="form-control col-span-6" value="<?= $identitas['telpon']; ?>">
                                    <?= form_error('telpon', '<small class="text-danger" pl-3>', '</small>'); ?>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Logo Sekolah</label>
                                    <input id="logo" name="logo" type="file" class="form-control col-span-6">
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Logo Provinsi</label>
                                    <input id="prov" name="prov" type="file" class="form-control col-span-6">
                                </div>
                                <button class="btn btn-primary mt-5">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>