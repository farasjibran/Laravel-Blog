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

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
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
                    <li class="nav-item hover">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item hover">
                        <a class="nav-link" href="/experience">Experience</a>
                    </li>
                    <li class="nav-item active hover">
                        <a class="nav-link" href="/portofolio">Portfolio</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Jumbotron -->
    <div class="jumboimg" style="z-index: 1;">
        <img style="width: 100%;" src="{{ asset('img/jumboimg.png') }}" alt="">
        <h1 class="porttext text-white">PORT- <span><br>-FOLIO</span></h1>
    </div>

    <!-- Text 1 -->
    <div class="textthis">
        <div class="row">
            <div class="col-sm" style="margin-right: -50%;">
                <h1 class="textheading">This Is <span style="font-weight: bold;">My</span> Portfolio</h1>
            </div>
            <div class="col-sm">
                <img style="width: 10%; margin-top: 52px;" class="gambartitik" src="{{ asset('img/titik3.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- Card View   -->
    <div class="row cardin">
        <div class="col-sm" style="margin-right: -10%;">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/sertilocal.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Juara 2 Web Development</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More...</a>
                </div>
            </div>
        </div>
        <div class="col-sm" style="margin-right: -10%;">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/iot.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="margin-top: 17%;">Lomba IOT Jabar</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More..</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/sertikelulusan.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lulusan Front-End Developer</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More...</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Text 2 -->
    <div class="textthis" style="margin-top: 1%;">
        <div class="row">
            <div class="col-sm" style="margin-right: -63%;">
                <h1 class="textheading">More <span style="font-weight: bold;">For</span> Me</h1>
            </div>
            <div class="col-sm">
                <img style="width: 10%; margin-top: 52px;" class="gambartitik" src="{{ asset('img/titik3.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- greybackground -->
    <div class="container greybackground text-white" style="text-align: center; padding-top: 5%;">
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-sm">
                <h1 style="font-size: 150px;"><b>16</b></h1>
                <h3 style="font-size: 20px;">Umur</h3>
            </div>
            <div class="col-sm">
                <h1 style="font-size: 150px;"><b>12</b></h1>
                <h3 style="font-size: 20px;">Tahun Sekolah</h3>
            </div>
            <div class="col-sm">
                <h1 style="font-size: 150px;"><b>50%</b></h1>
                <h3 style="font-size: 20px;">Win Rate</h3>
            </div>
        </div>
        <div class="row" style="padding-bottom: 100px;">
            <div class="col-sm">
                <h1 style="font-size: 150px;"><b>2</b></h1>
                <h3 style="font-size: 20px;">Lomba</h3>
            </div>
            <div class="col-sm">
                <h1 style="font-size: 150px;"><b>?</b></h1>
                <h3 style="font-size: 20px;">Sisa Umur</h3>
            </div>
            <div class="col-sm">
                <h1 style="font-size: 150px;"><b>4</b></h1>
                <h3 style="font-size: 20px;">Saudara</h3>
            </div>
        </div>
    </div>
</body>

</html>
