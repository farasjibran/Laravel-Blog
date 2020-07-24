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
                        <a class="nav-link" href="/portofolio">Portofolio</a>
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


</body>

</html>
