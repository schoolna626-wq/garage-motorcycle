
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DASHBOARD</title>
</head>
<body>

<h1>Welcome to the dashboard <?php echo session('u') ?></h1>

<form action="/tkry" method="GET">
    <button type="submit">Tambah Karyawan</button>
</form>

<form action="/tplg" method="GET">
    <button type="submit">Tambah Pelanggan</button>
</form>

<br>

<table border="1" width="550">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach ($data as $key => $value) {
    ?>

    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value->username ?></td>
        <td><?= $value->email ?></td>
        <td>
            <form action="/edit/<?= $value->id_user ?>" method="GET" style="display:inline;">
                <button type="submit">Edit</button>
            </form>

            <form action="/delete/<?= $value->id_user ?>" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>

    <?php
    }
    ?>

</table>

<br>

<a href="/logout">
    <button>Logout</button>
</a>

</body>
</html>
