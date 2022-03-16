<?php
require_once __DIR__ . "/logic/tugas1.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas 1 PHP</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 800px;">
        <h5 class="card-header">Data Karyawan</h5>

          <div class="row g-0">
            <div class="col-md-4">
              <img src="image/foto.jpg" class="img-fluid rounded-start" alt="Foto User">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="card-text">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nama</td>
                        <td><?= $namaPegawai ?></td>
                      </tr>
                      <tr>
                        <td>Jabatan</td>
                        <td><?= $jabatan ?></td>

                      </tr>
                      <tr>
                        <td>Gaji Pokok</td>
                        <td>Rp. <?= number_format($gajiPokok,0,',','.') ?></td>
                      </tr>
                      <tr>
                        <td>Tunjangan Jabatan</td>
                        <td>Rp. <?= number_format($tunjanganJabatan,0,',','.') ?></td>
                      </tr>
                      <tr>
                        <td>Tunjangan Keluarga</td>
                        <td>Rp. <?= number_format($tunjanganKeluarga,0,',','.') ?></td>
                      </tr>
                      <tr>
                        <td>Gaji Kotor</td>
                        <td>Rp. <?= number_format($gajiKotor,0,',','.') ?></td>
                      </tr>
                      <tr>
                        <td>Zakat Penghasilan</td>
                        <td>Rp. <?= number_format($zakatPenghasilan,0,',','.') ?></td>
                      </tr>
                      <tr>
                        <td>Gaji Bersih</td>
                        <td>Rp. <?= number_format($gajiBersih,0,',','.') ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>