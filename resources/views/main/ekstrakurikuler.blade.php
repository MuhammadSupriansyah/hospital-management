<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EKSTRAKURIKULER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }

    .section-title {
      background-color: #ffc107;
      display: inline-block;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: bold;
      margin-bottom: 25px;
    }

    .program-img, .fasilitas-img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .section {
      padding: 60px 0;
    }

    .blue-bg {
      background-color: #e6f0ff;
      border-radius: 0 50px 50px 0;
      padding-left: 30px;
    }

    .rounded-orange {
      background-color: #ffa500;
      padding: 8px 15px;
      color: #fff;
      border-radius: 10px;
      font-weight: bold;
      display: inline-block;
    }

    footer {
      background-color: #ff7e00;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
    }

    ul {
      padding-left: 18px;
    }

    .navbar-orange {
      background-color: #fd7e14;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #fff8f0;
      scroll-behavior: smooth;
    }

    nav {
      background: linear-gradient(to right, #2e8b57, #66bb6a); /* Warna hijau */
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand img {
       height: 70px;
       margin-right: 12px;
    }

    .navbar-brand span {
      font-weight: 700;
      font-size: 1.5rem;
      color: white;
    }

    .nav-link, .dropdown-item {
      color: white !important;
      transition: transform 0.3s;
    }

    .nav-link:hover, .dropdown-item:hover {
      color: #fff !important;
      background-color: rgba(255, 255, 255, 0.1);
      transform: scale(1.05);
    }

    .dropdown-menu {
      background-color: #e0f2e9;
      border: none;
    }

    .dropdown-menu a {
      color: #2e8b57 !important;
    }

    .dropdown-menu a:hover {
      background-color: #c8e6c9;
    }

    .banner {
      background: linear-gradient(rgba(102, 187, 106, 0.8), rgba(102, 187, 106, 0.8)), url('image.png') no-repeat center center/cover;
      height: 450px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      color: white;
    }

    .banner h1 {
      font-size: 4rem;
      font-style: italic;
      font-weight: bold;
      color: black;
      text-shadow: 3px 3px 5px #f4c542;
      animation: fadeInUp 1.5s ease-out both;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .registration {
      padding: 60px 20px;
      background: #e8f5e9;
      text-align: center;
    }

    .registration h2 {
      color: #2e8b57;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .registration p {
      font-size: 1rem;
      color: #333;
    }

    .address {
      padding: 20px 0;
      background: #fff;
      font-size: 0.95rem;
      color: #000;
    }

    .address .location-icon {
      color: #2e8b57;
    }

    .info-sekolah {
      padding: 60px 20px;
      background-color: #f0fff5;
      text-align: center;
    }

    .info-sekolah h3 {
      color: #2e8b57;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .info-sekolah p {
      font-size: 1rem;
      color: #333;
    }

    footer {
      background-color: #2e8b57;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .banner h1 {
        font-size: 2.5rem;
      }
    }

    body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #fff8f0;
    scroll-behavior: smooth;
  }

  nav {
    background: linear-gradient(to right, #2e8b57, #66bb6a); /* Warna hijau gradasi */
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
  }

  .navbar-brand img {
    height: 70px; /* ukuran logo */
    margin-right: 12px;
  }

  .navbar-brand span {
    font-weight: 700;
    font-size: 1.5rem;
    color: white;
  }

  .nav-link, .dropdown-item {
    color: white !important;
    font-weight: 600;
    transition: transform 0.3s;
  }

  .nav-link:hover, .dropdown-item:hover {
    color: #fff !important;
    background-color: rgba(255, 255, 255, 0.1);
    transform: scale(1.05);
  }

  .dropdown-menu {
    background-color: #e0f2e9;
    border: none;
  }

  .dropdown-menu a {
    color: #2e8b57 !important;
  }

  .dropdown-menu a:hover {
    background-color: #c8e6c9;
  }

  .hero {
    background: linear-gradient(rgba(102, 187, 106, 0.8), rgba(102, 187, 106, 0.8)), url('image.png') no-repeat center center/cover;
    height: 450px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
  }

  .hero h1 {
    font-size: 4rem;
    font-style: italic;
    font-weight: bold;
    color: black;
    text-shadow: 3px 3px 5px #f4c542;
    animation: fadeInUp 1.5s ease-out both;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .section-box {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 40px;
    margin-bottom: 30px;
  }

  .section-title {
    background-color: #ffc107;
    padding: 8px 20px;
    border-radius: 50px;
    display: inline-block;
    font-weight: bold;
    font-size: 1.25rem;
    margin-bottom: 20px;
    color: #000;
  }

  .registration {
    padding: 60px 20px;
    background: #e8f5e9;
    text-align: center;
  }

  .registration h2 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .registration p {
    font-size: 1rem;
    color: #333;
  }

  .info-sekolah {
    padding: 60px 20px;
    background-color: #f0fff5;
    text-align: center;
  }

  .info-sekolah h3 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .info-sekolah p {
    font-size: 1rem;
    color: #333;
  }

  .address {
    padding: 20px 0;
    background: #fff;
    font-size: 0.95rem;
    color: #000;
  }

  .address .location-icon {
    color: #2e8b57;
  }

  footer {
    background-color: #2e8b57;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 0.9rem;
  }

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2.5rem;
    }
  }

  .ekskul-header {
  background: linear-gradient(to right, #388e3c, #66bb6a);
  color: #fff;
}

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #fff8f0;
    scroll-behavior: smooth;
  }

  nav {
    background: linear-gradient(to right, #2e8b57, #66bb6a); /* Warna hijau gradasi */
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
  }

  .navbar-brand img {
    height: 70px; /* ukuran logo */
    margin-right: 12px;
  }

  .navbar-brand span {
    font-weight: 700;
    font-size: 1.5rem;
    color: white;
  }

  .nav-link, .dropdown-item {
    color: white !important;
    font-weight: 600;
    transition: transform 0.3s;
  }

  .nav-link:hover, .dropdown-item:hover {
    color: #fff !important;
    background-color: rgba(255, 255, 255, 0.1);
    transform: scale(1.05);
  }

  .dropdown-menu {
    background-color: #e0f2e9;
    border: none;
  }

  .dropdown-menu a {
    color: #2e8b57 !important;
  }

  .dropdown-menu a:hover {
    background-color: #c8e6c9;
  }

  .hero {
    background: linear-gradient(rgba(102, 187, 106, 0.8), rgba(102, 187, 106, 0.8)), url('image.png') no-repeat center center/cover;
    height: 450px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
  }

  .hero h1 {
    font-size: 4rem;
    font-style: italic;
    font-weight: bold;
    color: black;
    text-shadow: 3px 3px 5px #f4c542;
    animation: fadeInUp 1.5s ease-out both;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .section-box {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 40px;
    margin-bottom: 30px;
  }

  .section-title {
    background-color: #ffc107;
    padding: 8px 20px;
    border-radius: 50px;
    display: inline-block;
    font-weight: bold;
    font-size: 1.25rem;
    margin-bottom: 20px;
    color: #000;
  }

  .registration {
    padding: 60px 20px;
    background: #e8f5e9;
    text-align: center;
  }

  .registration h2 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .registration p {
    font-size: 1rem;
    color: #333;
  }

  .info-sekolah {
    padding: 60px 20px;
    background-color: #f0fff5;
    text-align: center;
  }

  .info-sekolah h3 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .info-sekolah p {
    font-size: 1rem;
    color: #333;
  }

  .address {
    padding: 20px 0;
    background: #fff;
    font-size: 0.95rem;
    color: #000;
  }

  .address .location-icon {
    color: #2e8b57;
  }

  footer {
    background-color: #2e8b57;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 0.9rem;
  }

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2.5rem;
    }
  }
  </style>
</head>
<body onload="AOS.init();">

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="img/Logo Kemen1.png" alt="Logo Sekolah" />
      <span>SDIT AL IKHSAN</span>
    </a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Tentang Sekolah
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
            <li><a class="dropdown-item" href="{{ route('profil-sekolah') }}">Profil Sekolah</a></li>
            <li><a class="dropdown-item" href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
            <li><a class="dropdown-item" href="{{ route('kurikulumdanbiaya') }}">Kurikulum & Biaya</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pendaftaran') }}">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header Judul Ekstrakurikuler -->
<section class="hero">
  <div class="container">
    <h1 class="display-5 fw-bold">Ekstrakurikuler</h1>
    <p class="lead">Beragam kegiatan untuk menumbuhkan minat, bakat, dan karakter siswa.</p>
  </div>
</section>

<!-- Hero Section -->
<!-- ekstrakurikuler (diperbaiki) -->
<section class="section">
  <div class="container">
    <h2 class="text-center mb-5 section-title">Program Ekstrakurikuler</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-success">Olahraga</h5>
          <p class="small text-muted">Meningkatkan kebugaran dan kerja sama tim melalui kegiatan fisik.</p>
          <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Habsy  - Setiap Selasa, 15.00-17.00</li>
              <li>Robotik  - Setiap Selasa, 15.00-17.00</li>
              <li>Tahfidz  - Setiap Selasa, 15.00-17.00</li>
              <li>IT  - Setiap Selasa, 15.00-17.00</li>
              <li>Pramuka  - Setiap Selasa, 15.00-17.00</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-primary">Seni</h5>
          <p class="small text-muted">Mengembangkan kreativitas dan ekspresi diri melalui beragam media artistik.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Kaligrafi - Setiap Rabu, 13.00-15.00</li>
              <li>Desain grafis - Setiap Rabu, 13.00-15.00</li>
              <li>Seni lukis - Setiap Rabu, 13.00-15.00</li>
              <li>Seni tari - Setiap Rabu, 13.00-15.00</li>
              <li>Qiroah - Setiap Rabu, 13.00-15.00</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-warning">Pengetahuan</h5>
          <p class="small text-muted">Mendorong rasa ingin tahu dan kemampuan berpikir kritis melalui pembelajaran tambahan.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Bahasa Arab & Inggris - Setiap Rabu, 13.00-15.00</li>
              <li>Kelompok belajar - Setiap Rabu, 13.00-15.00</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-danger">Teknologi</h5>
          <p class="small text-muted">Membekali siswa dengan keterampilan abad 21 melalui eksplorasi dunia digital dan inovasi.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Robotik - Setiap Rabu, 13.00-15.00</li>
              <li>IT - Setiap Rabu, 13.00-15.00</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container my-5">
<div class="container">
    <h2 class="text-center mb-5 section-title">Jadwal Ekstrakurikuler</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-success">
                <tr>
                    <th>Hari</th>
                    <th>Ekstrakurikuler</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>Pramuka</td>
                    <td>14.00 – 16.00</td>
                    <td>Lapangan</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>Kaligrafi</td>
                    <td>13.30 – 15.00</td>
                    <td>Ruang Seni</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>Robotik</td>
                    <td>14.00 – 15.30</td>
                    <td>Lab Komputer</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>Desain Grafis</td>
                    <td>13.00 – 15.00</td>
                    <td>Lab Multimedia</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>Tahfidz</td>
                    <td>13.00 – 14.30</td>
                    <td>Ruang Tahfidz</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="section">
  <div class="container">
    <h3 class="section-title text-center mb-4">Galeri Kegiatan Siswa</h3>
    <div class="row justify-content-center text-center g-3">
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/robotik.png" class="img-fluid" style="width: 100px; height: auto;" alt="Robotik">
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/tahfidz.png" class="img-fluid" style="width: 100px; height: auto;" alt="Tahfidz">
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/bahasaarab.png" class="img-fluid" style="width: 100px; height: auto;" alt="Bahasa Arab">
      </div>
    </div>
  </div>
</section>


<section class="section">
  <div class="container">
    <h3 class="section-title text-center mb-4">Galeri Kegiatan Siswa</h3>
    <div class="row justify-content-center text-center g-3">
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/robotik.png" class="img-fluid" style="width: 100px; height: auto;" alt="Robotik">
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/tahfidz.png" class="img-fluid" style="width: 100px; height: auto;" alt="Tahfidz">
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/bahasaarab.png" class="img-fluid" style="width: 100px; height: auto;" alt="Bahasa Arab">
      </div>
    </div>
  </div>
</section>





<footer>
  <p>&copy; 2025 SDIT AL IKHSAN. All Rights Reserved.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
