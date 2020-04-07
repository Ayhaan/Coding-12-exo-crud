<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="preloader"></div>

    <div class="container p-5">
        <h1>Back Office:</h1>
        <nav class="nav">
            <h2><a href="/intro" class="btn">Intro</a></h2>
            <h2><a href="/service" class="btn">Services</a></h2>
            <h2><a href="/portfolio" class="btn">Portfolio</a></h2>
            <h2><a href="/testimonial" class="btn">Testimonials</a></h2>
            <h2><a href="/team" class="btn">Team</a></h2>
            <h2><a href="/" class="btn ">ReturnBack</a></h2>
        </nav>
    
        @yield('content')
    </div>



    
    {{-- SCRIPT --}}
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

     <!-- Template Specisifc Custom Javascript File -->
     <script src="/js/app.js"></script>
</body>
</html>