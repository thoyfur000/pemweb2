<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>HALAMAN 1</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #eef7f0;
            color: #2c3e50;
        }

        header {
            background-color: #2ecc71;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        header p {
            font-size: 18px;
        }

        .nav-bar {
            background-color: #27ae60;
            display: flex;
            justify-content: center;
            padding: 12px 0;
        }

        .nav-bar a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
        }

        .banner {
            background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1350&q=80');
            height: 350px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .banner::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.3);
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            padding: 40px 20px;
            gap: 30px;
            justify-content: center;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-body h3 {
            margin-top: 0;
            color: #27ae60;
        }

        .card-body p {
            font-size: 14px;
        }

        footer {
            background-color: #2ecc71;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Eksplorasi Alam Indonesia</h1>
        <p>Menelusuri Keindahan Alam dari Sabang hingga Merauke</p>
    </header>

    <div class="nav-bar">
        <a href="#">Beranda</a>
        <a href="#">Destinasi</a>
        <a href="#">Galeri</a>
        <a href="#">Tentang</a>
    </div>

    <div class="banner"></div>

    <div class="content">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?auto=format&fit=crop&w=1350&q=80" alt="Raja Ampat">
            <div class="card-body">
                <h3>Raja Ampat</h3>
                <p>Surga bawah laut di Papua Barat dengan terumbu karang yang spektakuler dan air laut jernih.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://www.google.com/imgres?q=gunung%20bromo&imgurl=https%3A%2F%2Feventdaerah.kemenparekraf.go.id%2Fstorage%2Fapp%2Fuploads%2Fpublic%2F676%2F3cd%2F917%2F6763cd9174641985422603.webp&imgrefurl=https%3A%2F%2Feventdaerah.kemenparekraf.go.id%2Fcerita-ken%2Fcerita%2Fgunung-bromo&docid=v5XIPH_17ojn1M&tbnid=Y50OvriTdGGg0M&vet=12ahUKEwihtZ6H36SNAxVvR2wGHS_ZM7cQM3oECGcQAA..i&w=1200&h=800&hcb=2&ved=2ahUKEwihtZ6H36SNAxVvR2wGHS_ZM7cQM3oECGcQAA" alt="Bromo">
            <div class="card-body">
                <h3>Gunung Bromo</h3>
                <p>Gunung berapi aktif yang menjadi ikon wisata di Jawa Timur dengan pemandangan matahari terbit yang menakjubkan.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1561089481-02e038e9f1aa?auto=format&fit=crop&w=1350&q=80" alt="Danau Toba">
            <div class="card-body">
                <h3>Danau Toba</h3>
                <p>Danau vulkanik terbesar di Asia Tenggara yang menyimpan keindahan dan legenda Samosir.</p>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 Eksplorasi Alam Indonesia | Dirancang oleh ali thoyfur
    </footer>

</body>

</html>