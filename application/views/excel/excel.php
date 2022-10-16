<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Data Wisata Masuk Tanggal : <?= date('d F Y'); ?> </h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Wisata</th>
            <th>Kota</th>
            <th>Provisnis</th>
            <th>Deskripsi</th>
            <th>Tanggal Masuk Data</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($semuawisata as $wisata) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $wisata['nama']; ?></td>
                <td><?= $wisata['kota']; ?></td>
                <td><?= $wisata['provinsi']; ?></td>
                <td><?= $wisata['deskripsi']; ?></td>
                <td><?= date('d F Y', $wisata['date_created']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>