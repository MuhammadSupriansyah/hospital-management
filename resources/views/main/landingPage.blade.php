<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDIT AL-IKHSAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        nav img {
            height: 50px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 15px;
            position: relative;
        }
        nav ul li a {
            color: black;
            text-decoration: none;
            font-size: 16px;
        }
        nav ul li a:hover {
            color: #003cff;
        }

        /* Dropdown styles */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 4px;
            z-index: 1000;
        }
        nav ul li:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu a {
            display: block;
            padding: 10px 15px;
            color: black;
            text-decoration: none;
            white-space: nowrap;
        }
        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }

        .banner {
            background: url('image.png') no-repeat center center/cover;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .registration {
            text-align: center;
            padding: 40px 20px;
            background: #f8f9fa;
        }
        .registration h1 {
            color: #003cff;
        }

        footer {
            background-color: #002b5c; 
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <img src="logo.png" alt="AL IKHSAN Logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li>
                <a href="#">Profil ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Visi</a></li>
                    <li><a href="#">Misi</a></li>
                    <li><a href="#">Tujuan</a></li>
                    <li><a href="#">Fasilitas</a></li>

                </ul>
            </li>
            <li>
                <a href="#">Akademik ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Visi</a></li>
                    <li><a href="#">Misi</a></li>
                </ul>
            </li>
            <li><a href="#">Program Unggulan</a></li>
            <li><a href="#">Ekstrakurikuler</a></li>
            <li><a href="#" class="btn btn-success">Pendaftaran</a></li>
        </ul>
    </nav>

    <section class="banner">
        <h1>PPDB 2025/2026 - Open Registration</h1>
    </section>

    <section class="registration">
        <h1>Daftar Sekarang</h1>
        <a>Jl Pahlawan Gg Inpres RT 02 RW 01,</a>
        <a>No. 60 Kelurahan : Sebrang Mesjid'</a>
        <a>Banjarmasin Kota, Kalsel.</a>
        <p>Kunjungi <a href="https://ppdb.nurulfikri.sch.id">ppdb.alikhsan.sch.id</a> untuk informasi lebih lanjut</p>
    </section>

    <footer>
        <p>&copy; 2025 SDIT AL-IKHSAN</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
