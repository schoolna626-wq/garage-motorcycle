
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA PELANGGAN</title>
</head>
<body>

<h1>Data Pelanggan</h1>

<a href="/tplg">Tambah Pelanggan</a>
<br><br>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>No HP</th>
    </tr>

    <?php
    $no=1;
    foreach ($pelanggan as $key => $value) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value->nama_plg ?></td>
        <td><?= $value->alamat_plg ?></td>
        <td><?= $value->no_hp ?></td>
    </tr>
    <?php
    }
    ?>
</table>

<br>
<a href="/home">Kembali ke Dashboard</a>

</body>
</html>
