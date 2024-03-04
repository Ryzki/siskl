<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/boostrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/cetak.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- <img class="image1" src="<?= base_url('assets/img/logo/') ?>sumsel.png" height="80" /> -->
    <table align="center">
        <tr>
            <td width="25"><img class="image1" src="<?= base_url('assets/img/logo/') ?>sumsel.png" height="80" /></td>
            <td>
                <div align="center">
                    <font size="4"><b><?= $setting['kop1'] ?></b></font><br>
                    <font size="4"><b><?= $setting['kop2'] ?></b></font><br>
                    <font size="4"><b><?= $setting['kop3'] ?></b></font><br>
                    <font size="2"><?= $identitas['alamat'] ?><br>
                        E-mail: <?= $identitas['email'] ?> Website: <?= $identitas['website'] ?></font><br>
                </div>
            </td>
            <td align="center"><img class="image2" src="<?= base_url('assets/img/logo/') . $identitas['logo'] ?>" height="80" /></td>
            <div style="clear:both">
        </tr>
    </table>
    <!-- <img class="image2" src="<?= base_url('assets/img/logo/') . $identitas['logo'] ?>" height="80" /> -->
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
                    <td colspan="1" width="120">Nama</td>
                    <td>:</td>
                    <td colspan="2"><b> <?= $siswa['name'] ?></b> </td>
                </tr>

                <tr>
                    <td colspan="1" width="120">Tempat Lahir</td>
                    <td>:</td>
                    <td colspan="2"><b> <?= $siswa['tmptlhr'] ?></b> </td>
                </tr>

                <tr>
                    <td width="120">Tanggal Lahir</td>
                    <td width="10">:</td>
                    <td colspan="2"><b><?= date('d M Y', strtotime($siswa['tgllhr'])) ?></b> </td>
                </tr>

                <tr>
                    <td width="120">Jenis Kelamin</td>
                    <td>:</td>
                    <td colspan="2"><b><?= $siswa['jk'] ?> </td>
                </tr>

                <tr>
                    <td width="120">NISN</td>
                    <td>:</td>
                    <td colspan="2"><b><?= $siswa['nisn'] ?> </td>
                </tr>

                <tr>
                    <td width="120">Kelas</td>
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
            <table align="center">
                <tr>
                    <td colspan="4"><br>
                        dari satuan <?= $identitas['nama_sekolah'] ?> berdasarkan pengumuman kelulusan Nomor : <?= $setting['nomor_sk'] ?>/<?= $setting['nomor_sk2'] ?>/<?= $setting['nomor_sk3'] ?> tanggal <?= $setting['tanggal_sk'] ?>.
                    </td>
                </tr>
            </table>
        </div>

        <div>
            <table align="center">
                <tr>
                    <td colspan="4"><br>
                        Demikian surat keterangan ini dibuat sebagai pengganti ijazah sementara yang sedang dalam proses penulisan.
                    </td>
                </tr>
            </table>
        </div>

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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>