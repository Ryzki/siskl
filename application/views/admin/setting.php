<h2 class="intro-y text-lg font-medium mt-10">
    <?php echo $title; ?>
</h2>
<?php echo $this->session->flashdata('message') ?>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-6">
        <div class="intro-y box box p-5 rounded-md">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Data Surat yang sedang digunakan</div>
            </div>
            <div class="flex items-center"> <i data-lucide="book" class="w-4 h-4 text-slate-500 mr-2"></i> Kop Surat </div>
            <!-- konten -->
            <p class="text-center"> <?= $setting['kop1'] ?> </p>
            <p class="text-center"> <?= $setting['kop2'] ?> </p>
            <p class="text-center"> <?= $setting['kop3'] ?> </p>
            <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
            </div>
            <div class="flex items-center"> <i data-lucide="paperclip" class="w-4 h-4 text-slate-500 mr-2"></i> Nomor Surat </div>
            <!-- konten -->
            <p class="text-center"> <?= $setting['nomor_sk'] ?>/<?= $setting['nomor_sk2'] ?>/<?= $setting['nomor_sk3'] ?> </p>
            <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
            </div>
            <div class="flex items-center"> <i data-lucide="edit-2" class="w-4 h-4 text-slate-500 mr-2"></i> Tanda Tangan </div>
            <!-- konten -->
            <div align="right">
                <p class="ml-6"><?= $setting['alamat'] ?>, <?= $setting['tanggal_sk'] ?> </p>
                <p class="ml-6">Kepala Sekolah,</p>
                <br>
                <br>
                <p class="ml-6"><?= $identitas['kepsek'] ?></p>
                <p class="ml-6">NIP. <?= $identitas['nip'] ?></p>
            </div>
            <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
            </div>
            <div class="flex items-center"> <i data-lucide="image" class="w-4 h-4 text-slate-500 mr-2"></i> Logo KOP </div>
            <!-- konten -->
            <div class="flex items-center justify-center">
                <img src="<?= base_url('assets/img/logo/') . $identitas['logo']; ?>" alt="" class="w-30 h-32 mr-2">
                <img src="<?= base_url('assets/img/logo/') . $identitas['prov']; ?>" alt="" class="w-30 h-32">
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Setting Form
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <?php echo form_open_multipart('admin/setting'); ?>
                <div class="preview">
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">KOP Baris 1</label>
                        <input id="kop1" name="kop1" type="text" class="form-control" value="<?= $setting['kop1']; ?>">
                        <?= form_error('kop1', '<small class="text-danger" pl-3>', '</small>'); ?>
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">KOP Baris 2</label>
                        <input id="kop2" name="kop2" type="text" class="form-control" value="<?= $setting['kop2']; ?>">
                        <?= form_error('kop2', '<small class="text-danger" pl-3>', '</small>'); ?>
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">KOP Baris 3</label>
                        <input id="kop3" name="kop3" type="text" class="form-control" value="<?= $setting['kop3']; ?>">
                        <?= form_error('kop3', '<small class="text-danger" pl-3>', '</small>'); ?>
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">Kota</label>
                        <input id="alamat" name="alamat" type="text" class="form-control" value="<?= $setting['alamat']; ?>">
                        <?= form_error('alamat', '<small class="text-danger" pl-3>', '</small>'); ?>
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">Nomor SK</label>
                        <div class="grid grid-cols-12 gap-2">
                            <input id="nomor_sk" name="nomor_sk" type="text" class="form-control col-span-2" value="<?= $setting['nomor_sk']; ?>">
                            <input id="nomor_sk2" name="nomor_sk2" type="text" class="form-control col-span-4" value="<?= $setting['nomor_sk2']; ?>">
                            <input id="nomor_sk3" name="nomor_sk3" type="text" class="form-control col-span-2" value="<?= date('Y'); ?>" readonly>
                        </div>
                        <?= form_error('nomor_sk', '<small class="text-danger" pl-3>', '</small>'); ?>
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">Tanggal SK</label>
                        <input id="tanggal_sk" name="tanggal_sk" type="text" class="datepicker form-control block mx-auto col-span-6" data-single-mode="true" value="<?= $setting['tanggal_sk']; ?>">
                        <?= form_error('tanggal_sk', '<small class="text-danger" pl-3>', '</small>'); ?>
                    </div>
                    <button class="btn btn-primary mt-5">Save Changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>