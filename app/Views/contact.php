<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
</head>

<body>
    <h1>Daftar Alamat</h1>
    <ul>
        <?php foreach ($addresses as $address): ?>
            <ul>
                <li> <?= $a['tipe']; ?> </li>
                <li> <?= $a['alamat']; ?> </li>
                <li> <?= $a['kota']; ?> </li>
            </ul>
        <?php endforeach; ?>
    </ul>
</body>

</html>