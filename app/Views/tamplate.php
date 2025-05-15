<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Jepang | Lampu Neon Berkualitas</title>
    <style>
        /* Reset & Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #0d0d0d;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        * {
            color: inherit;
            text-decoration: none;
        }

        /* Neon effect */
        .neon-cyan {
            color: #00ffff;
            text-shadow:
                0 0 1px #00ffff,
                0 0 1px #00ffff,
                0 0 1px #00ced1;
        }

        .neon-pink {
            color: #ff4d46;
            text-shadow:
                0 0 5px #ff4d46,
                0 0 10px #ff4d46,
                0 0 20px #ff1cae;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: rgba(0, 0, 0, 0.85);
            border-bottom: 1px solid #222;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a:hover {
            color: #00ffff;
        }

        .hero {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 70vh;
            filter: brightness(70%);
            display: block;
        }

        .hero-tagline {
            background-color: #111;
            padding: 3rem 2rem;
            text-align: center;
        }

        .hero-tagline h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }

        .hero-tagline p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            color: #ccc;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            background-color: #0d0d0d;
            border-top: 1px solid #222;
            font-size: 0.9rem;
            color: #555;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-tagline h1 {
                font-size: 2rem;
            }

            .nav-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="logo neon-cyan">Neon<span class="neon-pink">Jepang</span></div>
        <div class="nav-links">
            <a href="#">Beranda</a>
            <a href="#">Produk</a>
            <a href="/about">Tentang</a>
            <a href="#">Kontak</a>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <footer>
        &copy; 2025 Neon Jepang, Dibuat dengan cinta dan cahaya.
    </footer>

</body>
</html>
