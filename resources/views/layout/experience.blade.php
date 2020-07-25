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

    <div class="NavBar">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item hover">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active hover">
                        <a class="nav-link" href="/experience">Experience</a>
                    </li>
                    <li class="nav-item hover">
                        <a class="nav-link" href="/portofolio">Portfolio</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Img -->
    <div class="container">
        <img class="imgex" src="{{ asset('img/eximg.png') }}" alt="">
    </div>

    <!-- Icon Divider-->
    <div class="divider-custom divider-light" style="margin-top: 10%; margin-bottom: 10%;">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
    </div>

    <!-- Experience -->
    <div class="container">
        <h2 class="mb-5" style="text-align: center;">Experience</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Senior Web Developer</h3>
                <div class="subheading mb-3">Intelitec Solutions</div>
                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Web Developer</h3>
                <div class="subheading mb-3">Intelitec Solutions</div>
                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Junior Web Designer</h3>
                <div class="subheading mb-3">Shout! Media Productions</div>
                <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="flex-grow-1">
                <h3 class="mb-0">Web Design Intern</h3>
                <div class="subheading mb-3">Shout! Media Productions</div>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
        </div>
    </div>
</body>

</html>
