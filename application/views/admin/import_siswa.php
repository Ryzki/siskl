<h2 class="intro-y text-lg font-medium mt-10">
    <?php echo $title; ?>
</h2>
<?php echo $this->session->flashdata('message') ?>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Upload CSV
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <form action="<?= base_url('admin/importsiswa') ?>" enctype="multipart/form-data" method="post">
                    <div class="preview">
                        <div>
                            <label for="siswa" class="form-label">*Pilih File Excel :</label>
                            <input class="form-control" type="file" name="siswa" id="siswa">
                        </div>
                        <p class="mt-3">* file yang bisa di import adalah .xls | .csv | .xlsx.</p>
                        <p class="mt-3">* download format file excel <a class="text-success" href="<?= base_url('assets/uploads/siswa.xlsx') ?>">Download</a></p>
                        <p class="text-danger">* Jangan lupa hapus header di file excel setelah mengedit / input data, kemudian disave dan diimport.</p>
                        <button type="submit" class="btn btn-primary mt-5">Save Changes</button>
                        <a href="<?= site_url('admin/datasiswa') ?>" class="btn btn-outline-secondary">Lihat Data Siswa</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>