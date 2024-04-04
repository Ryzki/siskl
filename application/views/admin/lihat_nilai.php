<h2 class="intro-y text-lg font-medium mt-10">
    Data Nilai Siswa
</h2>
<div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
        <h2 class="font-medium text-base mr-auto">
            <b>Nama : <?= $siswa['name'] ?></b><br>
            <b>Kelas : <?= $siswa['jurusan'] ?></b><br>
            <b>NISN : <?= $siswa['nisn'] ?></b><br>
            <b>No. Ujian : <?= $siswa['noujian'] ?></b>
        </h2>
        <!-- <a href="#" class="btn btn-success shadow-md mr-2"><i class="mr-2" data-lucide="printer"></i> Cetak Nilai</a> -->
        <a href="<?= site_url('admin/datanilai') ?>" class="btn btn-primary shadow-md mr-2">Kembali</a>
    </div>
    <div class="p-5" id="striped-rows-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">No</th>
                            <th class="whitespace-nowrap">Nama Mapel</th>
                            <th class="whitespace-nowrap">Nilai Sekolah</th>
                            <th class="whitespace-nowrap">Nilai UN</th>
                            <th class="whitespace-nowrap">Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($lihat_nilai as $ln) : ?>
                            <tr>
                                <td class="border-b"><?= $no++; ?></td>
                                <td class="border-b"><?= $ln['nama_mapel'] ?></td>
                                <td class="border-b"><?= $ln['nilai_sekolah'] ?></td>
                                <td class="border-b"><?= $ln['nilai_un'] ?></td>
                                <td class="border-b"><?= $ln['nilai_akhir'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>