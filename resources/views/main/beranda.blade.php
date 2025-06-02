<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SDIT AL-IKHSAN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <style>
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
  background: linear-gradient(rgba(102, 187, 106, 0.8), rgba(102, 187, 106, 0.8)), 
              url('/img/sd.png') no-repeat center center/cover;
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

    .section {
  margin: 60px 0; /* atas dan bawah 60px */
}

AOS.init({
    duration: 1000, // Durasi animasi (ms)
    once: true      // Hanya animasi 1x saat scroll ke elemen
  });

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


<div class="banner">
  <h1>SDIT AL-IHSAN<br>INTERNASIONAL</h1>
</div>

<section class="registration" data-aos="fade-up">
  <h2>Menerima Peserta Didik Baru</h2>
  <p>Tahun Pelajaran 2025/2026</p>
  <p>Silakan klik menu pendaftaran di atas untuk informasi lebih lanjut mengenai proses pendaftaran tahun ajaran baru.</p>
</section>

<center>
<section class="address" data-aos="fade-up" data-aos-delay="200">
  <div class="container">
    <p><span class="location-icon">📍</span> Jl Pahlawan Gg Inpres RT 02 RW 01, No. 60 Kelurahan: Seberang Masjid, Banjarmasin Kota, Kalsel.</p>
  </div>
</section>
</center>
<iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="300" style="border:0;" allowfullscreen></iframe>


<section class="info-sekolah" data-aos="fade-up" data-aos-delay="300">
  <div class="container">
    <h3>Tentang SDIT AL-IHSAN</h3>
    <p>SDIT AL-IHSAN Internasional adalah sekolah dasar Islam terpadu yang berkomitmen untuk mencetak generasi Qurani, cerdas, dan berakhlak mulia.</p>
    <p>Kami mengintegrasikan kurikulum nasional dengan pendidikan agama yang kuat dan program ekstrakurikuler yang beragam.</p>
    <p>Fasilitas lengkap, tenaga pengajar profesional, serta lingkungan yang nyaman dan islami menjadi keunggulan utama kami.</p>
  </div>
</section>

<center>
<section class="section">
  <div class="container">
    <div class="section-title text-center">Galeri Kegiatan Siswa</div>
    <div class="row g-3">
    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
      <img src="img/robotik.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
      <img src="img/tahfidz.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
      <img src="img/bahasaarab.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
      </div>
    </div>
  </div>
</section>
</center>

<section class="section bg-light">
  <div class="container">
    <div class="row text-center">
    <div class="col-md-3 col-6" data-aos="zoom-in">
        <h2>300+</h2>
        <p>Siswa Aktif</p>
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <h2>25+</h2>
        <p>Guru Profesional</p>
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in">
        <h2>15+</h2>
        <p>Prestasi Tingkat Kota</p>
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <h2>100%</h2>
        <p>Lulus & Melanjutkan</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-light">
  <div class="container">
    <div class="section-title text-center">Testimoni Orang Tua</div>
    <div class="row g-4">
    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="testimonial p-3 shadow rounded">
          <p>"Anak saya berkembang sangat pesat di SDIT AL-IHSAN. Gurunya perhatian dan pembelajarannya menyenangkan!"</p>
          <strong>- Ibu Nur, Wali Murid</strong>
        </div>
      </div>
      <!-- Tambahkan lebih banyak testimoni -->
    </div>
  </div>
</section>


<footer>
  <p>&copy; 2025 SDIT AL IKHSAN. All Rights Reserved.</p>
</footer>

</body>
</html>
