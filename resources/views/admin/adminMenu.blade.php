
<!DOCTYPE html>
<html lang="en">
    
<!-- Insialisasi css, bootstrap dan scripts-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./Scripts/Admin.js" ></script>
    <link rel="stylesheet" href="{{asset('css/adminStyles/CRUDMenu.css')}}">
    <title>SIPTEK-Admin Beranda</title>
    <!--Style khusus untuk hovering button navbar-->
    <style>

        body {
            background-image: url('{{ asset('img/rumahsakit.jpg') }}'); /* Path gambar */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        #banner {
            background-color: rgba(0, 0, 0, 0.6); /* Warna overlay pada banner */
            padding: 80px 0;
        }

        footer {
            background-color: #002b5c; /* Warna footer */
            color: white;
        }


        .btn-hover:hover{
            background-color: white;
            color: #2563EB !important;
        }

    </style>
    </head>
    <body>
        <!--Navbar stuffs-->
        <nav>
            <div class="container-fluid" style="padding: 0;">
                <div class="navbar" style="background-color: #2563EB; height: 100px;">
                    <div class="d-flex justify-content-start align-items-left">
                        <a href="{{ route('adminMenu')}}" target="_blank" style="padding-left: 20px;">
                        <img src="{{asset('img/rshdLogo.png')}}" alt="rshd" class="image" style="height: 70px; padding-right: 0px;">
                        </a>
                        <h1 style="color: white; font-weight: bold;padding-top: 10px; padding-left: 0px;">SiPTEK</h1>
                    </div>
                    <ul>
                        <li>
                        <a href="{{ route('CRUDMitra.index') }}">MITRA</a>
                        </li>
                        <li>
                            <a href = "{{ route('admin.CRUDObat')}}">OBAT</a>
                        </li>
                        <li>
                            <a href = "{{ route('landingPage')}}">LOGOUT</a>
                        </li>
                    </ul>            
                </div>
            </div>
        </nav>

        <!--Selamat datang admin stuffs-->

        <div class="container-fluid">
            <div class="w-100 p-3" style="background-color: white; height: 700px;">
                <div class="text-center">
                    <!--Nanti ganti routesnya ke main landing page-->
                    <a href="{{route('landingPage')}}" target="_blank">
                        <img src="{{asset('img/rshdLogo.png')}}" alt="rshdLogo" class="img-thumbnail" style="height: 600px; background-color: white; border: none;">
                    </a>
                    <h1 style="color: #2563EB;">Selamat Datang Sanak!</h1>
                    <h2 style="color: #2563EB;">Handak meapai hari ini?</h2>
                </div>
            </div>
            
        </div>
    </body>
    </html>