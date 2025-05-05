<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPTEK-LoginAdmin</title>
    <link rel="stylesheet" href="{{asset('css/adminStyles/LoginAdmin.css')}}" type="text/css">
    <script>
        const routes = {
            adminMenu: @json(route('adminMenu'))
        };
    </script>

    <style> 
        body {
            background-image: url('{{ asset('img/obats.png') }}'); /* Path gambar */
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
    </style>

</head>
<body>
    <div class="SquareLogin">
        <div class="LoginText">
            <h1>Admin Login</h1>
        </div>
        <div style="display: flex; justify-content: center; align-items: center; height: 100px; background-color: #f8f9fa;">
        <img src="{{ asset('img/rshdLogo.png') }}" alt="rshdLogo" class="img-thumbnail" style="height: 100px; background-color: white; border: none;">
    </div>
        <div class="InputForm">
            <form action="{{ route('login.submit') }}" method="post">
                @csrf
                <h2>Email Address</h2>
                <input type="text" style="height: 25px;" id="email" name="email">
                <br>
                <h2>Password</h2>
                <input type="password" style="height: 25px;" id="password" name="password">
                <div class="LoginButton">
                <button type="submit" style="font-size: 25px; border: none; border-radius: 5px; color: #2569FF;">LOGIN</button>
                </div>
            </form>
            @if(session('failed'))
            <h3 class = "text-center text-danger">{{session('failed')}}</h3>
            @endif
        </div> 
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/adminScripts/Admin.js')}}"></script>
</body>
</html>