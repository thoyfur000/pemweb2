<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .kontak {
            margin-top: 20px;
        }

        .kontak p {
            margin: 5px 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Unipdu Press</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('home'); ?>">Beranda</a>
                    <a class="nav-link" href="pages/about">Tentang</a>
                    <a class="nav-link" href="#">Hubungi kami</a>
                    <a class="nav-link disabled" aria-disabled="true">Disable</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-4">Hubungi Kami</h1>
        <div class="kontak">
            <ul>
                <li>Rumah</li>
                <li>Desa Peterongan no 28</li>
                <li>Jombang</li>
            </ul>
            <ul>
                <li>Kantor</li>
                <li>Kompleks Ponpes Darul Ulum Peterongan</li>
                <li>Jombang</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>