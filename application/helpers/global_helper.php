<?php

if (!function_exists('tanggal')) {
    function tanggal($tanggal)
    {
        $ubahTanggal = date('Y-m-d H:i:s', strtotime($tanggal) + 60 * 60 * 8);
        $pecahTanggal = explode('-', $ubahTanggal);
        $tanggal = (int)$pecahTanggal[2];
        $bulan = (int)$pecahTanggal[1];
        $tahun = (int)$pecahTanggal[0];
        $namaHari = date('l', mktime(0, 0, 0, $bulan, $tanggal, $tahun));
        return $tanggal . ' ' . bulan_panjang($bulan) . ' ' . $tahun;
    }
}
if (!function_exists('bulan_panjang')) {
    function bulan_panjang($bulan)
    {
        switch ($bulan) {
            case 1:
                return 'Januari';
                break;
            case 2:
                return 'Februari';
                break;
            case 3:
                return 'Maret';
                break;
            case 4:
                return 'April';
                break;
            case 5:
                return 'Mei';
                break;
            case 6:
                return 'Juni';
                break;
            case 7:
                return 'Juli';
                break;
            case 8:
                return 'Agustus';
                break;
            case 9:
                return 'September';
                break;
            case 10:
                return 'Oktober';
                break;
            case 11:
                return 'November';
                break;
            case 12:
                return 'Desember';
                break;
        }
    }
}
