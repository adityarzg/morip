<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/bootstrap/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/bootstrap/'); ?>css/bootstrap-reboot.css" rel="stylesheet">
    <link href="<?= base_url('assets/bootstrap/'); ?>css/bootstrap-grid.css" rel="stylesheet">
    <link href="<?= base_url('assets/bootstrap/'); ?>css/bootstrap-utilities.css" rel="stylesheet">

    <!-- Addon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <title> <?= $title; ?> </title>
</head>

<body>
    <div class="container-fluid px-0">
        <div class="header p-3">
            <h3><?= $title; ?></h3>
            <p>Pengadilan Tata Usaha Negara Palu</p>
        </div>

        <div class="content">
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 3840px;">
                    <thead style="vertical-align:middle">
                        <tr>
                            <th rowspan="2">No. Urut</th>
                            <th rowspan="3">a. Nomor Perkara <br> b. Tanggal Pendaftaran Gugatan <br> c. Tanggal Perbaikan Gugatan</th>
                            <th colspan="2" style="text-align:center">Pihak-Pihak</th>
                            <th rowspan="2">Posita dan petitum</th>
                            <th rowspan="2">Tanggal : <br> a. Permohonan Prodeo <br> b. Penetapan Prodeo</th>
                            <th colspan="3" style="text-align:center">Proses Dismissal</th>
                            <th rowspan="3">a. Tanggal Penetapan Penunjukan Majelis Hakim/PP <br> b. Susunan Majelis Hakim/PP <br> c. Tanggal Penetapan Sidang <br> d. Tanggal Sidang dan Tahapan </th>
                            <th rowspan="3">Jenis Acara</th>
                            <th>Banding</th>
                            <th>Kasasi</th>
                            <th>Peninjauan Kembali</th>
                            <th>Eksekusi</th>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <strong>I. Penggugat</strong>
                                <p> 1. Perorangan : <br> a. Nama, b. NIK, c. Kewarganegaraan, d. Pekerjaan, e. Tempat Tinggal</p>
                                <p> 2. Badan Hukum : <br> a. Nama Badan Hukum, b. Alamat Badan Hukum </p>
                                <p> Kuasa Hukum : <br>a. Nama </p>
                                <strong>II. Pihak Ketiga</strong>
                                <p> a. Nama, b. NIK, c, Kewarganegaraan, d. Pekerjaan, Tempat Tinggal</p>
                                <p> Kuasa Hukum : <br> a. Nama</p>
                            </td>

                            <td rowspan="2">
                                <strong>I. Tergugat</strong>
                                <p> a. Nama Jabatan, b. Tempat Kedudukan </p>
                                <p> Kuasa Hukum : <br> a. Nama </p>
                                <strong>II. Pihak Ketiga</strong>
                                <p> a. Nama, b. NIK, c, Kewarganegaraan, d. Pekerjaan, Tempat Tinggal </p>
                                <p> Kuasa Hukum : <br> a. Nama</p>
                            </td>

                            <td>
                                <strong>I. Lolos Dismissal</strong>
                                <p>Tanggal : <br> Penetapan Lolos Dismissal</p>
                            </td>
                            <td>
                                <strong>II. Tidak Lolos Dismissal</strong>
                                <p> Tanggal Panggilan : <br> a. Tanggal Penetapan Dismissal, b. Amar Penetapan Dismissal, c. Tanggal Pemberitahuan Penetapan Dismissal</p>
                            </td>
                            <td>
                                a. Tanggal Gugatan Perlawanan, b Posita, c. Petitum
                            </td>
                            <td>
                                <p>a. Tanggal Akta Permohonan Banding <br> b. Nomor Perkara Tingkat Pertama <br> c. Tanggal Putusan</p>
                            </td>
                            <td>
                                <p>a. Tanggal Akta Permohonan Kasasi <br> b. Nomor Perkara Banding / Tingkat Pertama <br> c. Tanggal Putusan</p>
                            </td>
                            <td>
                                <p>a. Tanggal Akta Permohonan PK <br> b. Nomor Perkara BHT <br> c. Tanggal Putusan</p>
                            </td>
                            <td>
                                <p>a. Tanggal Permohonan Eksekusi <br> b. Tanggal Panggilan Para Pihak <br> c. Tanggal Penetapan Eksekusi <br> d. Tanggal Pengawasan Eksekusi </p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= base_url('assets/bootstrap/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/bootstrap/'); ?>js/bootstrap.bundle.min.js"></script>

</html>