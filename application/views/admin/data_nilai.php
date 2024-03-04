<?php echo $this->session->flashdata('message') ?>
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        <?= $title; ?>
    </h2>
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="<?= site_url('admin/importnilai') ?>" class="btn btn-primary shadow-md mr-2">Import Nilai</a>
        <a onclick="return confirm('Yakin ingin hapus?')" href="<?= site_url('admin/datanilai/hapusnilai') ?>" class="btn btn-danger shadow-md mr-2">Hapus Nilai</a>
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5">
    <table id="table-data" class="table table-report -mt-2">
        <thead>
            <tr>
                <th class="whitespace-nowrap">NO</th>
                <th class="whitespace-nowrap">NO UJIAN</th>
                <th class="text-center whitespace-nowrap">NAMA</th>
                <th class="text-center whitespace-nowrap">KELAS</th>
                <th class="text-center whitespace-nowrap">NILAI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($nilai as $n) : ?>
                <tr class="intro-x">
                    <td><?= $no++; ?></td>
                    <td><b><?= $n['noujian'] ?></b></td>
                    <td class="text-center"><?= $n['name'] ?></td>
                    <td class="text-center"><?= $n['jurusan'] ?></td>
                    <td class="table-report__action">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-danger" href="<?= site_url('admin/datanilai/lihat_nilai/' . $n['noujian']) ?>"> <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Lihat Nilai </a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>