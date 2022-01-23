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
                <table class="table table-bordered" style="width: 4280px">
                    <thead style="vertical-align:middle">
                        <tr>
                            <th rowspan="2">No. Urut</th>
                            <th rowspan="3">a. Nomor Perkara <br> b. Tanggal Pendaftaran Gugatan <br> c. Tanggal Perbaikan Gugatan</th>
                            <th colspan="2" style="text-align:center">Pihak-Pihak</th>
                            <th rowspan="2" style="text-align:center">Posita dan petitum</th>
                            <th rowspan=" 2" width="5%">Tanggal : <br> a. Permohonan Prodeo <br> b. Penetapan Prodeo</th>
                            <th colspan="3" style="text-align:center" width="15%">Proses Dismissal</th>
                            <th rowspan="3" width="5%">a. Tanggal Penetapan Penunjukan Majelis Hakim/PP <br> b. Susunan Majelis Hakim/PP <br> c. Tanggal Penetapan Sidang <br> d. Tanggal Sidang <br> e. Tahapan </th>
                            <th rowspan="3" style="text-align:center">Jenis Acara</th>
                            <th width="5%">Banding</th>
                            <th width="5%">Kasasi</th>
                            <th width="5%">Peninjauan Kembali</th>
                            <th width="5%">Eksekusi</th>
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

                            <td width="5%">
                                <strong>I. Lolos Dismissal</strong>
                                <p>Tanggal : <br> Penetapan Lolos Dismissal</p>
                            </td>
                            <td>
                                <strong>II. Tidak Lolos Dismissal</strong>
                                <p> Tanggal Panggilan : <br> a. Tanggal Penetapan Dismissal, b. Amar Penetapan Dismissal, c. Tanggal Pemberitahuan Penetapan Dismissal</p>
                            </td>
                            <td width="5%">
                                a. Tanggal Gugatan Perlawanan, b Posita, c. Petitum
                            </td>
                            <td>
                                <p>a. Tanggal Akta Permohonan Banding <br> b. Nomor Perkara Tingkat Pertama <br> c. Tanggal Putusan</p>
                            </td>
                            <td>
                                <p>a. Tanggal Akta Permohonan Kasasi <br> b. Nomor Perkara Banding / Tingkat Pertama <br> c. Tanggal Putusan</p>
                            </td>
                            <td>
                                <p>a. Tanggal Akta Permohonan Peninjauan Kembali <br> b. Nomor Perkara BHT <br> c. Tanggal Putusan</p>
                            </td>
                            <td>
                                <p>a. Tanggal Permohonan Eksekusi <br> b. Tanggal Panggilan Para Pihak <br> c. Tanggal Penetapan Eksekusi <br> d. Tanggal Pengawasan Eksekusi </p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($perkara as $p) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <p> a. <?= $p['nomor_perkara']; ?></p>
                                    <p> b. <?= $p['tanggal_pendaftaran']; ?></p>
                                    c.
                                </td>

                                <?php if ($p['Jenis Pihak 1'] == 'Badan Hukum') {  ?>
                                    <td>
                                        <p><strong>I. Penggugat - </strong>( <?= $p['Jenis Pihak 1']; ?> )</p>
                                        <p> a. <?= $p['Pihak 1']; ?></p>
                                        <p> b. <?= $p['Alamat Pihak 1']; ?></p>
                                        <p> Kuasa Hukum : <br> <?= $p['Kuasa Hukum 1']; ?></p>
                                    </td>
                                <?php } elseif ($p['Jenis Pihak 1'] == 'Perorangan') { ?>
                                    <td>
                                        <p> <strong>I. Penggugat - </strong>( <?= $p['Jenis Pihak 1']; ?> )</p>
                                        <p> a. <?= $p['Pihak 1']; ?></p>
                                        <p> b. <?= $p['No ID Pihak 1']; ?> </p>
                                        <p> c. <?= $p['Kewarganegaraan Pihak 1']; ?> </p>
                                        <p> d. <?= $p['Pekerjaan Pihak 1']; ?></p>
                                        <p> e. <?= $p['Alamat Pihak 1']; ?></p>
                                        <p> Kuasa Hukum : <br> <?= $p['Kuasa Hukum 1']; ?></p>

                                        <p> <strong>II. Pihak Ketiga - </strong>( <?= $p['Jenis Pihak 3']; ?> )</p>
                                        <p> a. <?= $p['Pihak 3']; ?></p>
                                        <p> b. <?= $p['No ID Pihak 3']; ?></p>
                                        <p> c. <?= $p['Kewarganegaraan Pihak 3']; ?></p>
                                        <p> d. <?= $p['Pekerjaan Pihak 3']; ?></p>
                                        <p> e. <?= $p['Alamat Pihak 3']; ?></p>
                                    </td>
                                <?php } elseif ($p['Jenis Pihak 1'] == 'Pemerintah') { ?>
                                    <td>
                                        <p> <strong>I. Penggugat - </strong>( <?= $p['Jenis Pihak 1']; ?> )<br></p>
                                        <p> a. <?= $p['Pihak 1']; ?> </p>
                                        <p> b. <?= $p['Kewarganegaraan Pihak 1']; ?> </p>
                                        <p> c. <?= $p['Alamat Pihak 1']; ?></p>
                                    </td>
                                <?php } ?>

                                <td>
                                    <p> <strong>I. Tergugat - </strong>( <?= $p['Jenis Pihak 2']; ?> )<br></p>
                                    <p> a. <?= $p['Pihak 2']; ?> </p>
                                    <p> b. <?= $p['Alamat Pihak 2']; ?></p>
                                </td>
                                <td>
                                    Posita : <br> <?= $p['Posita']; ?> <br>
                                    Petitum : <br> <?= $p['Petitum']; ?>
                                </td>
                                <td></td>

                                <?php if ($p['hasil'] == 1) { ?>
                                    <td><?= $p['Tanggal Penetapan Dismissal'] ?></td>
                                    <td></td>
                                <?php } elseif ($p['hasil'] == 2) { ?>
                                    <td></td>
                                    <td>
                                        a. <?= $p['Tanggal Penetapan Dismissal']; ?><br>
                                        b. <?= $p['Amar Penetapan Dismissal']; ?><br>
                                        c. <?= $p['Tanggal Pemberitahuan Penetapan Dismissal']; ?>
                                    </td>
                                <?php } else { ?>
                                    <td></td>
                                    <td></td>
                                <?php } ?>

                                <td></td>
                                <td>
                                    <p> a. <?= $p['Tanggal Penetapan Majelis Hakim']; ?> / <?= $p['Tanggal Penetapan Panitera Pengganti']; ?> </p>
                                    <p> b. <?= $p['Majelis Hakim']; ?> <br> <?= $p['Panitera Pengganti']; ?> </p>
                                    <p> c. <?= $p['Tanggal Penetapan Hari Sidang']; ?> </p>
                                    <p> d. <?= $p['Tanggal Sidang']; ?></p>
                                    <p> e. <?= $p['Tahapan Sidang']; ?> </p>
                                </td>

                                <?php if ($p['Jenis Acara'] == 2) { ?>
                                    <td>
                                        <p><Strong>Acara Biasa</Strong></p>
                                        <p>Tanggal Penunjukan Majelis Hakim / PP : <br> <?= $p['Tanggal Penetapan Majelis Hakim'] ?> / <?= $p['Tanggal Penetapan Panitera Pengganti'] ?> </p>
                                        <p>Susunan Majelis Hakim / PP : <br> <?= $p['Majelis Hakim']; ?> <br> <?= $p['Panitera Pengganti']; ?></p>
                                        <p>Tanggal Penetapan Hari Pemeriksaan Persiapan : <br> <?= $p['Tanggal Penetepan Hari Pemeriksaan Persiapan'] ?></p>
                                        <p>Tanggal Pemeriksaan Persiapan : <br> <?= $p['Tanggal Pemeriksaan Persiapan'] ?></p>
                                        <p>Tanggal Penertapan Hari Sidang : <br> <?= $p['Tanggal Penetapan Hari Sidang'] ?></p>
                                        <p>Tanggal Sidang dan Tahapan Sidang : <br> <?= $p['Tanggal Sidang']; ?></p>
                                        <p>Tahapan Sidang : <br> <?= $p['Tahapan Sidang']; ?> </p>
                                        <p>Tanggal Putusan : <br> <?= $p['Tanggal Putusan']; ?>
                                        <p>Amar Putusan : <br> <?= $p['Amar Putusan']; ?>
                                        <p>Tanggal Pemberitahuan Putusan : <br> <?= $p['Tanggal Pemberitahuan Putusan']; ?>
                                        </p>
                                    </td>
                                <?php } else { ?>
                                    <td>
                                        <p><Strong><i> Belum Dipilih</i></Strong></p>
                                        <p>Tanggal Penunjukan Majelis Hakim / PP : <br> <?= $p['Tanggal Penetapan Majelis Hakim'] ?> / <?= $p['Tanggal Penetapan Panitera Pengganti'] ?> </p>
                                        <p>Susunan Majelis Hakim / PP : <br> <?= $p['Majelis Hakim']; ?> <br> <?= $p['Panitera Pengganti']; ?></p>
                                        <p>Tanggal Penetapan Hari Pemeriksaan Persiapan : <br> <?= $p['Tanggal Penetepan Hari Pemeriksaan Persiapan'] ?></p>
                                        <p>Tanggal Pemeriksaan Persiapan : <br> <?= $p['Tanggal Pemeriksaan Persiapan'] ?></p>
                                        <p>Tanggal Penertapan Hari Sidang : <br> <?= $p['Tanggal Penetapan Hari Sidang'] ?></p>
                                        <p>Tanggal Sidang dan Tahapan Sidang : <br> <?= $p['Tanggal Sidang']; ?></p>
                                        <p>Tahapan Sidang : <br> <?= $p['Tahapan Sidang']; ?> </p>
                                        <p>Tanggal Putusan : <br> <?= $p['Tanggal Putusan']; ?>
                                        <p>Amar Putusan : <br> <?= $p['Amar Putusan']; ?>
                                        <p>Tanggal Pemberitahuan Putusan : <br> <?= $p['Tanggal Pemberitahuan Putusan']; ?>
                                        </p>
                                    </td>
                                <?php } ?>

                                <td>
                                    <p>a. <?= $p['Tanggal Akta Permohonan Banding']; ?></p>
                                    <p>b. <?= $p['nomor_perkara']; ?></p>
                                    <p>c. <?= $p['Tanggal Putusan Banding']; ?></p>
                                </td>
                                <td>
                                    <p>a. <?= $p['Tanggal Akta Permohonan Kasasi']; ?> </p>
                                    <p>b. <?= $p['Nomor Perkara Banding']; ?> </p>
                                    <p>c. <?= $p['Tanggal Putusan Kasasi']; ?> </p>
                                </td>
                                <td>
                                    <p>a. <?= $p['Tanggal Akta Permohonan Peninjauan Kembali'] ?></p>
                                    <p>b. <?= $p['nomor_perkara'] ?></p>
                                    <p>c. <?= $p['Tanggal Putusan Kasasi'] ?></p>
                                </td>
                                <td>
                                    <p>a. <?= $p['Tanggal Permohonan Eksekusi']; ?> </p>
                                    <p>b. <?= $p['Tanggal Panggilan Para Pihak']; ?> </p>
                                    <p>c. <?= $p['Tanggal Penetapan Eksekusi']; ?> </p>
                                    <p>d </p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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