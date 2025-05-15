<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HALAMAN 3</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(to bottom right, #1c1c1c, #2b2b2b);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #ffffff;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #111;
      box-shadow: 0 0 20px #d4af37aa;
    }

    .navbar .brand {
      font-size: 1.5rem;
      color: #d4af37;
      text-shadow: 0 0 10px #d4af37;
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
      transition: color 0.3s ease;
    }

    .navbar ul li a:hover {
      color: #d4af37;
      text-shadow: 0 0 8px #d4af37;
    }

    .container {
      padding: 3rem 2rem;
      text-align: center;
    }

    .container h1 {
      font-size: 2.8rem;
      margin-bottom: 2rem;
      color: #d4af37;
      text-shadow: 0 0 12px #d4af37;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
    }

    .card {
      background: linear-gradient(145deg, #2d2d2d, #1e1e1e);
      border-radius: 12px;
      padding: 2rem;
      width: 280px;
      box-shadow: 0 0 15px #d4af3733;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 25px #d4af37aa;
    }

    .card h3 {
      margin-bottom: 1rem;
      color: #d4af37;
      text-shadow: 0 0 6px #d4af37;
    }

    .card p {
      font-size: 0.95rem;
      color: #e0e0e0;
    }

    @media (max-width: 768px) {
      .cards {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar">
    <a href="#" class="brand">Ali muhammad thoyfur ahsyai</a>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Layanan</a></li>
      <li><a href="#">Proyek</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>HALAMAN 3</h1>
    <div class="cards">
      <div class="card">
        <h3>NYENI</h3>
        <p>Ali thoyfur adalah mahasiswa yang sangat nyeni atau bisa dibilang mahasiswa keren karena dia sangat rajin dan nyeni, Saking nyeni nya sampai dia (thoyfur) dikenal banyak orang karna dia (thoyfur) koneksi dan relasi nya sangat luas.</p>
      </div>
    </div>
  </div>

</body>

</html>