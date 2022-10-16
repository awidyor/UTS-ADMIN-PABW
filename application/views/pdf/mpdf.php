<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Wisata Masuk</title>
</head>

<body>
    Tanggal Cetak : <?= date('d F Y'); ?>
    <table width="100%" style="border: 0.1mm solid #000000;" cellpaddin="8">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Kota</th>
                <th>Provisni</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($semuawisata as $wisata) : ?>
                <tr>
                    <td>&nbsp;<?= $i ?></td>
                    <td>&nbsp;&nbsp;
                        <?= $wisata['nama']; ?>&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;
                        <?= $wisata['kota']; ?></td>
                         <td>&nbsp;&nbsp;
                        <?= $wisata['provinsi']; ?></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $wisata['deskripsi']; ?>&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;
                        <?= date('d F Y', $wisata['date_created']);  ?></td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>