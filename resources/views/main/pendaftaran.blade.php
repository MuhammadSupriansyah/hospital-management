<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Pendaftaran SDIT AL IKHSAN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #fff8f0;
      scroll-behavior: smooth;
    }

    nav {
      background: linear-gradient(to right, #ff7e00, #ffaa33);
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand img {
      height: 45px;
      margin-right: 10px;
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
      background-color: #ffe5cc;
      border: none;
    }

    .dropdown-menu a {
      color: black !important;
    }

    .dropdown-menu a:hover {
      background-color: #ffefdd;
    }

    .banner {
      background: linear-gradient(rgba(255, 204, 0, 0.7), rgba(255, 204, 0, 0.7)), url('image.png') no-repeat center center/cover;
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
      background: #fff1e0;
      text-align: center;
    }

    .registration h2 {
      color: #d35400;
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
      color: #ff7e00;
    }

    footer {
      background-color: #ff7e00;
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
      font-family: 'Poppins', sans-serif;
      background-color: #f4f8fb;
    }

    .navbar-orange {
      background-color: #fd7e14;
    }

    .navbar-orange .nav-link, .navbar-orange .navbar-brand, .dropdown-item {
      color: #fff !important;
    }

    .hero {
  background: linear-gradient(to right, #2e8b57, #66bb6a); /* Warna hijau */
  color: white;
  padding: 80px 0;
  text-align: center;
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

    footer {
      background-color: #ff7e00;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
    }

    .form-label {
      font-weight: 500;
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
    <h1 class="display-5 fw-bold">Formulir Pendaftaran Siswa Baru</h1>
    <p class="lead">Ayo bergabung bersama SDIT AL IKHSAN — Mendidik dengan hati, membina generasi Qur’ani.</p>
  </div>
</section>

<div class="container my-5">
  <div class="section-box" data-aos="fade-up">
    <div class="section-title">Syarat Pendaftaran</div>
    <ul>
      <li>Usia minimal 6 tahun per Juli 2025</li>
      <li>Fotokopi Akta Kelahiran (1 lembar)</li>
      <li>Fotokopi Kartu Keluarga (1 lembar)</li>
      <li>Pas foto ukuran 3x4 (2 lembar)</li>
      <li>Mengisi formulir pendaftaran secara lengkap</li>
    </ul>
  </div>

  <div class="section-box" data-aos="fade-up" data-aos-delay="100">
    <div class="section-title">Formulir Pendaftaran</div>
    <form>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama siswa">
      </div>
      <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" rows="2"></textarea>
      </div>
      <div class="mb-3">
        <label for="nama_ortu" class="form-label">Nama Orang Tua/Wali</label>
        <input type="text" class="form-control" id="nama_ortu">
      </div>
      <div class="mb-3">
        <label for="kontak" class="form-label">No. Telepon / WhatsApp</label>
        <input type="tel" class="form-control" id="kontak">
      </div>
      <button type="submit" class="btn btn-warning px-4">Daftar Sekarang</button>
    </form>
  </div>

  <div class="section-box mt-4" data-aos="fade-up" data-aos-delay="150">
  <div class="section-title">Metode Pembayaran</div>
  <p>Silakan transfer biaya pendaftaran sebesar <strong>Rp150.000</strong> ke salah satu rekening berikut:</p>
  <ul class="list-group text-start mb-3">
    <li class="list-group-item">🔸 <strong>Bank BSI</strong> - No. Rekening: <strong>1234567890</strong> a.n. <strong>Yayasan Al Ikhsan</strong></li>
    <li class="list-group-item">🔸 <strong>Dana</strong> - 0813-5175-0693 a.n. <strong>Yayasan Al Ikhsan</strong></li>
  </ul>
  <p>Setelah melakukan pembayaran, silakan kirim bukti transfer ke WhatsApp kami: <strong>0813-5175-0693</strong></p>
</div>
<div class="mb-3">
  <label for="pembayaran" class="form-label">Metode Pembayaran</label>
  <select class="form-select" id="pembayaran">
    <option selected disabled>Pilih metode pembayaran</option>
    <option value="transfer">Transfer Bank</option>
    <option value="tunai">Tunai (langsung ke sekolah)</option>
    <option value="digital">Pembayaran Digital (OVO, Dana, Gopay)</option>
  </select>
</div>


  <div class="text-center mt-5" data-aos="zoom-in" data-aos-delay="200">
    <h5>Ingin tahu lebih banyak? Hubungi kami di <strong>0813-5175-0693</strong></h5>
  </div>
</div>

<footer>
  <p>&copy; 2025 SDIT AL IKHSAN. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
