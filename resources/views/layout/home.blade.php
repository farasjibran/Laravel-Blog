<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'>
    </script>
</head>

<body>

    <!-- Navbar -->
    <div class="NavBar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active hover">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item hover">
                        <a class="nav-link" href="/experience">Experience</a>
                    </li>
                    <li class="nav-item hover">
                        <a class="nav-link" href="/portofolio">Portfolio</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Welcome -->
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-sm">
                <h1 class="katasam">WEL- <span><br>-CO-</span> <span><br> -ME</span></h1>
            </div>
            <div class="col-sm">
                <img class="imgperempuan" src="{{ asset('img/perempuanbuku.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container greybackground">
        <div class="textmore">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-sm" style="margin-right: -450px;">
                    <h1 class="textheading">More <span style="font-weight: bold;">About</span> Me</h1>
                </div>
                <div class="col-sm" style="padding-top: 35px;">
                    <img class="gambartitik" src="{{ asset('img/titik3.png') }}" alt="">
                </div>
            </div>
            <p class="paragrap">Perkenalkan nama saya Muhammad Farras Jibran, saya sekarang <br>
                masih bersekolah di SMK Taruna Bhakti dan duduk di bangku kelas 12. Disini saya akan memberikan <br>
                pengalaman saya atau Experience saya selama bersekolah di SMK Taruna Bhakti dan pencapaian <br>
                apa saja yang telah saya dapatkan selama bersekolah di SMK Taruna Bhakti.
            </p>
            <!-- Row 2 -->
            <div class="row">
                <div class="col-sm" style="margin-right: -570px;">
                    <h1 class="textheading">Find <span style="font-weight: bold;">Me</span> On</h1>
                </div>
                <div class="col-sm" style="padding-top: 35px;">
                    <img class="gambartitik" src="{{ asset('img/titik3.png') }}" alt="">
                </div>
            </div>
            <!-- Row 3 -->
            <div class="findme">
                <div class="row" style="padding-bottom: 5%;">
                    <div class="col-sm" style="margin-right: -650px;">
                        <a href="https://www.instagram.com/farasjibran_/"><img class="igpict" src="{{ asset('img/instagram.png') }}" alt=""></a>
                    </div>
                    <div class="col-sm" style="margin-right: -650px;">
                        <a href="mailto:farasjibran@gmail.com"><img class="gmpict" src="{{ asset('img/gmail.png') }}" alt=""></a>
                    </div>
                    <div class="col-sm">
                        <a href="https://github.com/farasjibran?tab=repositories"><img class="gitpict" src="{{ asset('img/github.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- div img -->
    <div class="profilepict">
        <img style="width: 20%;" src="{{ asset('img/me.png') }}" alt="">
    </div>

</body>

</html>
