<h2 class="intro-y text-lg font-medium mt-10">
    <?php echo $title; ?>
</h2>
<?php echo $this->session->flashdata('message') ?>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Setting Form
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <form action="<?= site_url('admin/jadwal') ?>" method="post">
                    <div class="preview">
                        <div>
                            <label for="vertical-form-1" class="form-label">Waktu Pengumuman</label>
                            <input type="text" id="waktu" name="waktu" class="form-control" value="<?= $jadwal['waktu']; ?>">
                            <p><i>Format: Tahun-Bulan-Hari Jam:Menit:Detik</i></p>
                            <?= form_error('jadwal', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Tahun Ajaran</label>
                            <input id="tahun_ajaran" name="tahun_ajaran" type="text" class="form-control" value="<?= $jadwal['tahun_ajaran']; ?>">
                            <?= form_error('tahun_ajaran', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                        <button class="btn btn-primary mt-5">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>