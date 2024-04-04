<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/cetak.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table width="100%">
        <tr>
            <td align="left">
                <img class="image1" src="<?= base_url('assets/img/logo/') . $identitas['prov'] ?>" height="80" />
            </td>
            <td align="center">
                <font size="4"><b><?= $setting['kop1'] ?></b></font><br>
                <font size="4"><b><?= $setting['kop2'] ?></b></font><br>
                <font size="4"><b><?= $setting['kop3'] ?></b></font><br>
                <font size="2"><?= $identitas['alamat'] ?><br>
                    E-mail: <?= $identitas['email'] ?> Website: <?= $identitas['website'] ?></font><br>
            </td>
            <td align="right">
                <img class="image2" src="<?= base_url('assets/img/logo/') . $identitas['logo'] ?>" height="80" />
            </td>
        </tr>
    </table>

    <hr class="line-title">

    <div class="konten">
        <div class="mt-4">
            <table align="center">
                <tr>
                    <td colspan="5">
                        <div align="center">
                            <font size="4"><u><b>SURAT KETERANGAN KELULUSAN<br>
                                    </b></u> </font>
                            Nomor : <?= $setting['nomor_sk'] ?>/<?= $setting['nomor_sk2'] ?>/<?= $setting['nomor_sk3'] ?><br><br>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="align-items-center justify-content-center mt-4">
            <table align="center">
                <tr>
                    <td colspan="4">
                        Yang bertanda tangan di bawah ini, Kepala <?= $identitas['nama_sekolah'] ?> dengan ini menerangkan bahwa :
                        <br><br>
                    </td>
                </tr>
            </table>
        </div>

        <div class="align-items-center justify-content-center">
            <table align="center">
                <tr>
                    <td colspan="1" width="150">Nama</td>
                    <td>:</td>
                    <td colspan="2"><b> <?= $siswa['name'] ?></b> </td>
                </tr>

                <tr>
                    <td width="150">NISN</td>
                    <td>:</td>
                    <td colspan="2"><b><?= $siswa['nisn'] ?> </td>
                </tr>

                <tr>
                    <td width="150">Tempat dan Tanggal Lahir</td>
                    <td width="10">:</td>
                    <td colspan="2"><b><?= $siswa['tmptlhr'] . ', ' . tanggal($siswa['tgllhr']) ?></b> </td>
                </tr>

                <tr>
                    <td width="150">Jenis Kelamin</td>
                    <td>:</td>
                    <td colspan="2"><b><?= $siswa['jk'] ?> </td>
                </tr>

                <tr>
                    <td width="150">Kelas</td>
                    <td>:</td>
                    <td colspan="2"><b><?= $siswa['jurusan'] ?> </td>
                </tr>

            </table>
        </div>

        <div>
            <table align="center">
                <tr>
                    <td colspan="4"><br>
                        telah menyelesaikan seluruh kompetensi pembelajaran dan telah mengikuti ujian sekolah (US) dan berdasarkan hasil rapat dewan guru maka peserta didik diatas dinyatakan :
                    </td>
                </tr>
            </table>
        </div>

        <div>
            <table align="center">
                <tr>
                    <td colspan="4"><br>
                        <div align="center">
                            <?php if ($siswa['ket'] == "lulus") : ?>
                                <img src="<?= base_url('assets/img/') ?>lulus.jpg" alt="lulus" height="30">
                            <?php else : ?>
                                <img src="<?= base_url('assets/img/') ?>tidaklulus.jpg" alt="tidaklulus" height="30">
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
                        <th style="text-align: center; vertical-align: middle;" rowspan="2">Mata Pelajaran</th>
                        <th style="text-align: center;" colspan="3">Nilai</th>
                    </tr>
                    <tr>
                        <th>NS</th>
                        <th>UN</th>
                        <th>NA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($nilai as $row) :
                    ?>
                        <tr>
                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                            <td><?= $row['nama_mapel'] ?></td>
                            <td><?= $row['nilai_sekolah'] ?></td>
                            <td><?= $row['nilai_un'] ?></td>
                            <td><?= $row['nilai_akhir'] ?></td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <td style="text-align: center;" colspan="2">Jumlah</td>
                        <td><?= $jml_sekolah ?></td>
                        <td><?= $jml_un ?></td>
                        <td><?= $jml_ua ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" colspan="2">Rata - rata</td>
                        <td><?= $rata_sekolah; ?></td>
                        <td><?= $rata_un; ?></td>
                        <td><?= $rata_ua; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table align="center">
                <tr>
                    <td colspan="4"><br>
                        dari satuan <?= $identitas['nama_sekolah'] ?> berdasarkan pengumuman kelulusan Nomor : <?= $setting['nomor_sk'] ?>/<?= $setting['nomor_sk2'] ?>/<?= $setting['nomor_sk3'] ?> tanggal <?= $setting['tanggal_sk'] ?>.
                    </td>
                </tr>
            </table>
        </div>
        <?php if ($siswa['ket'] == "lulus") : ?>
            <div>
                <table align="center">
                    <tr>
                        <td colspan="4"><br>
                            Demikian surat keterangan ini dibuat sebagai pengganti ijazah sementara yang sedang dalam proses penulisan.
                        </td>
                    </tr>
                </table>
            </div>
        <?php endif; ?>

        <div class="ttd">
            <table align="right">
                <tr>
                    <td><br></td>
                    <td></td>
                    <td colspan="2"><br>

                        <div><?= $setting['alamat'] ?>, <?= $setting['tanggal_sk']  ?><br>
                            Kepala Sekolah,<br><br><br><br><br>
                            <b><?= $identitas['kepsek'] ?></b><br>
                            NIP. <?= $identitas['nip'] ?>
                        </div>

                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>