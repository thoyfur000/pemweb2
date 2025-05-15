<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NYENI</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #e0f7fa;
      /* Latar belakang biru pastel */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #2e3c43;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #00796b;
      /* Warna hijau tua */
      box-shadow: 0 0 10px #80cbc4;
    }

    .navbar .brand {
      font-size: 1.7rem;
      color: #fff9c4;
      text-shadow: 0 0 4px #fff59d;
      font-weight: bold;
      text-decoration: none;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .navbar ul li a {
      color: #ffffff;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .navbar ul li a:hover {
      color: #ffcc80;
      text-shadow: 0 0 6px #ffe082;
    }

    .container {
      padding: 3rem 2rem;
      text-align: center;
    }

    .container h1 {
      font-size: 3.2rem;
      margin-bottom: 1rem;
      color: #00796b;
      text-shadow: 0 0 6px #b2dfdb;
    }

    .container p {
      font-size: 1.3rem;
      max-width: 600px;
      margin: 0 auto;
      line-height: 1.7;
      color: #37474f;
    }

    @media (max-width: 768px) {
      .navbar ul {
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar">
    <a href="#" class="brand">NYENI</a>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Tentang</a></li>
      <li><a href="#">Layanan</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>HALAMAN 2</h1>
    <p>Ali Thoyfur adalah mahasiswa yang rajin tidak pernah bolos mata kuliah. Ali thoyfur adalah salah satu mahasiswa yang patut dicontoh di kampus karena kerajinan nya ke disiplinan nya.</p>
  </div>

</body>

</html>