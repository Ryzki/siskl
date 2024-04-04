<?php echo $this->session->flashdata('message') ?>
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        <?= $title; ?>
    </h2>
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a onclick="return confirm('Yakin ingin hapus?')" href="<?= site_url('admin/pesan/delete') ?>" class="btn btn-danger shadow-md mr-2">Hapus Semua Pesan</a>
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5 overflow-x-auto">
    <table id="table-data" class="table table-report">
        <thead>
            <tr>
                <th class="whitespace-nowrap">No</th>
                <th class="whitespace-nowrap">Nama</th>
                <th class="whitespace-nowrap">WhatsApp</th>
                <th class="whitespace-nowrap">Email</th>
                <th class="whitespace-nowrap">Pesan</th>
                <th class="whitespace-nowrap">Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($pesan as $value) : ?>
                <tr class="intro-x">
                    <td><?= $no++; ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['whatsapp'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['message'] ?></td>
                    <td class="table-report__action ">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete<?= $value['id_pesan'] ?>"> <i data-lucide="trash-2" class=" h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php foreach ($pesan as $s) : ?>
    <div id="delete<?= $s['id_pesan'] ?>" class="modal" tabindex="-1" aria-hidden="true">
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
                        <a class="btn btn-danger w-24" href="<?= site_url('admin/pesan/deletepesan/') . $s['id_pesan']; ?>">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>