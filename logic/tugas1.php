<?php

$namaPegawai = 'Yogi Pratama';
$agama = 'Islam';
$jabatan = 'Asisten';
$status = 'Belum';
$jumlahAnak = 0;

$gajiPokok = 0;

switch($jabatan) {
  case 'Manager':
    $gajiPokok = 20_000_000;
    break;
  case 'Asisten':
    $gajiPokok = 15_000_000;
    break;
  case 'Kabag':
    $gajiPokok = 10_000_000;
    break;
  case 'Staff':
    $gajiPokok = 4_000_000;
    break;
  default:
    $gajiPokok;          
}

$tunjanganJabatan = 0.2 * $gajiPokok;
$tunjanganKeluarga = 0;

if ($status == 'Sudah' && $jumlahAnak > 0 && $jumlahAnak <= 2) {
  $tunjanganKeluarga = 0.05 * $gajiPokok;
} else if ($status == 'Sudah' && $jumlahAnak > 2 && $jumlahAnak <= 5) {
  $tunjanganKeluarga = 0.1 * $gajiPokok;
} else {
  $tunjanganKeluarga;
}

$gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;

$zakatPenghasilan = ($agama == 'Islam' && $gajiKotor >= 6_000_000) ? 0.25 * $gajiKotor : 0;

$gajiBersih = $gajiKotor - $zakatPenghasilan;

?>
