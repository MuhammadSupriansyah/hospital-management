<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Visi dan Misi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
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




<section class="hero">
  <div class="container">
    <h1 class="display-5 fw-bold">Visi, Misi & Tujuan</h1>
    <p class="lead">Menjadi lembaga pendidikan Qur’ani berwawasan global.</p>
  </div>
</section>

<div class="container my-5">
  <div class="section-box" data-aos="zoom-in">
    <div class="section-title">VISI</div>
    <p>Terwujudnya generasi Qur’ani yang berwawasan global</p>
  </div>

  <div class="section-box" data-aos="zoom-in" data-aos-delay="100">
    <div class="section-title">MISI</div>
    <ol>
      <li>Menanamkan aqidah akhlak sesuai ajaran Al-Qur’an dan alhussunah wal jama’ah</li>
      <li>Menciptakan generasi anak-anak yang hafidz dan hafidzah</li>
      <li>Menciptakan dan memelihara lingkungan sehat, kondusif, dan harmonis</li>
      <li>Mewujudkan SDIT standar internasional</li>
    </ol>
  </div>

  <div class="section-box" data-aos="zoom-in" data-aos-delay="200">
    <div class="section-title">TUJUAN</div>
    <ul>
      <li>Menjadikan peserta didik menjadi hamba Allah yang sholih secara individu dan sosial</li>
      <li>Menanamkan karakter Islami dalam kehidupan sehari-hari</li>
      <li>Meningkatkan prestasi akademik peserta didik</li>
      <li>Meningkatkan prestasi non-akademik peserta didik</li>
      <li>Menyelenggarakan pembelajaran yang aktif, kreatif dan harmonis</li>
      <li>Membentuk kepribadian yang peduli dan berwawasan lingkungan dan global</li>
    </ul>
  </div>
</div>

<footer>
  <p>&copy; 2025 SDIT AL IKHSAN. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
