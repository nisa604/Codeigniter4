<?php
/**
 * @Author: Your name
 * @Date:   2023-01-31 14:55:44
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-18 17:28:33
 */
?>
<?= $this->extend('v_template') ?>

<?= $this->section('content')?>

<td class="">
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <a href="/mahasiswa">Tambah Data</a>
            <a href='/v_detail_mahasiswa'>search</a>
            <?php if($mahasiswa): ?>
                <?php foreach($mahasiswa as $row): ?>
                <tr>
                <td><?= $row->NIM ?></td>
                <td><?= $row->Nama ?></td>
                <td><?= $row->Umur ?></td>
                <td>
                    <a href='v_detail_mahasiswa/<?= $row->NIM ?>'>Edit</a>
                    <a href='v_detail_mahasiswa/<?= $row->NIM ?>'>Detail</a>
                    
                </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</td>
<?= $this->endSection()?>