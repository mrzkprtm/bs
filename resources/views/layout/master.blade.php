<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"> --}}

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>@yield('title','Sistem Informasi')</title>
    <style>
        /* body{
          background-image: url("../image/bg.jpg");
          background-repeat: repeat;

        } */

        .row .card:hover{
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.4);
            transform: scale();
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top position-relative mb-2">
        <div class="container">
            <a class="navbar-brand" href="/home"><img src="../image/logotextall.png" height="50" alt="logo"></a>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item">
                        <a class="nav-link @yield('menuBeranda')" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menuKerajinan')" href="/kerajinan">Kerajinan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menuBankSampah')" href="/banksampah">Bank Sampah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menuTentangkami')" href="/tentangkami">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            {{-- <h5><i class="fas fa-shopping-cart"></i></h5> --}}
            <a href="/alert"><img src="../image/bell.png" width="50" alt="notifikasi" class="p-2"></a>
            <a href="/keranjang"><img src="../image/cart.png" width="50" alt="keranjang" class="p-2"></a>
            <a href="/user"><img src="../image/user.png" width="50" alt="user" class="p-2"></a>
        </div>
    </nav>

    @yield('content')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <footer class="bg-success py-4 text-white mt-auto text-center bottom">
        <div>
            SI DALANG "Kreasi Daur Ulang" | Copyright © {{date("Y")}}
        </div>
    </footer>
</body>
</html>
