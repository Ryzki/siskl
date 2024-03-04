<?php echo $this->session->flashdata('message') ?>
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        <?= $title; ?>
    </h2>
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add" class="btn btn-primary shadow-md mr-2">Tambah Siswa Manual</a>
        <a href="<?= site_url('admin/importsiswa') ?>" class="btn btn-success shadow-md mr-2">Import Siswa</a>
        <a onclick="return confirm('Yakin ingin hapus?')" href="<?= site_url('admin/datasiswa/hapussiswa') ?>" class="btn btn-danger shadow-md mr-2">Hapus Siswa</a>
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5">
    <table id="table-data" class="table table-report -mt-2">
        <thead>
            <tr>
                <th class="whitespace-nowrap">NO</th>
                <th class="whitespace-nowrap">NO UJIAN</th>
                <th class="text-center whitespace-nowrap">NISN</th>
                <th class="text-center whitespace-nowrap">NAME</th>
                <th class="text-center whitespace-nowrap">JENIS KELAMIN</th>
                <th class="text-center whitespace-nowrap">KETERANGAN</th>
                <th class="text-center whitespace-nowrap">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($siswa as $s) : ?>
                <tr class="intro-x">
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <b><?= $s['noujian'] ?></b>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"><?= date('d M Y', strtotime($s['tgllhr'])) ?></div>
                    </td>
                    <td class="text-center"><?= $s['nisn'] ?></td>
                    <td class="text-center"><?= $s['name'] ?></td>
                    <td class="text-center"><?= $s['jk'] ?></td>
                    <td>
                        <?php if ($s['ket'] == 'lulus') : ?>
                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class=" h-4 mr-2"></i> Lulus </div>
                        <?php else : ?>
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class=" h-4 mr-2"></i> Tidak Lulus </div>
                        <?php endif ?>
                    </td>
                    <td class="table-report__action ">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete<?= $s['id'] ?>"> <i data-lucide="trash-2" class=" h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- BEGIN: Modal Content -->
<div id="add" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">Add Manual <?= $title; ?></h2>
            </div> <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <form action="<?= base_url('admin/importsiswa/add') ?>" method="POST">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">No Ujian</label>
                        <input id="noujian" name="noujian" type="text" class="form-control" placeholder="146-2346-2342" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">NISN (Nomor induk siswa nasional)</label>
                        <input id="nisn" name="nisn" type="text" class="form-control" placeholder="435354" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Nama Siswa</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Robi" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Jenis Kelamin</label>
                        <div class="form-check mr-2">
                            <input name="jk" class="form-check-input" type="radio" value="Laki - laki">
                            <label class="form-check-label" for="radio-switch-4">Laki - laki</label>
                        </div>
                        <div class="form-check mr-2">
                            <input name="jk" class="form-check-input" type="radio" value="Perempuan">
                            <label class="form-check-label" for="radio-switch-4">Perempuan</label>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Tempat Lahir</label>
                        <input id="tmptlhr" name="tmptlhr" type="text" class="form-control" placeholder="Jakarta" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Sekolah</label>
                        <input id="sekolah" name="sekolah" type="text" class="form-control" placeholder="SMAN1" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Jurusan</label>
                        <input id="jurusan" name="jurusan" type="text" class="form-control" placeholder="IPA" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Tanggal Lahir</label>
                        <input id="tgllhr" name="tgllhr" type="date" class="form-control" required>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Keterangan</label>
                        <div class="form-check mr-2">
                            <input name="ket" class="form-check-input" type="radio" value="lulus">
                            <label class="form-check-label" for="radio-switch-4">Lulus</label>
                        </div>
                        <div class="form-check mr-2">
                            <input name="ket" class="form-check-input" type="radio" value="tidak lulus">
                            <label class="form-check-label" for="radio-switch-4">Tidak Lulus</label>
                        </div>
                    </div>
                </div> <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-20">Add</button>
                </div> <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div> <!-- END: Modal Content -->

<!-- BEGIN: Delete Confirmation Modal -->
<?php foreach ($siswa as $s) : ?>
    <div id="delete-siswa" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Apa kamu yakin?</div>
                        <div class="text-slate-500 mt-2">
                            Apakah Anda benar-benar ingin menghapus data ini?
                            <br>
                            Proses ini tidak dapat dibatalkan.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <a class="btn btn-danger w-24" href="<?= site_url('admin/datasiswa/hapussiswa') ?>">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- END: Delete Confirmation Modal -->

<!-- BEGIN: Delete Confirmation Modal -->
<?php foreach ($siswa as $s) : ?>
    <div id="delete<?= $s['id'] ?>" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Apa kamu yakin?</div>
                        <div class="text-slate-500 mt-2">
                            Apakah Anda benar-benar ingin menghapus data ini?
                            <br>
                            Proses ini tidak dapat dibatalkan.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <a class="btn btn-danger w-24" href="<?= site_url('admin/datasiswa/deletesiswa/') . $s['id']; ?>">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- END: Delete Confirmation Modal -->