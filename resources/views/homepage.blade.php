<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:600" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        <div class="col-lg-8">
        <img src="images/homepage1.png" width="100%" height="auto" style="position:absolute">
        </div>
        <nav class="navbar navbar-expand-lg bg-dark border-body" data-bs-theme="dark">  
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="ms-5" src="images/Yum logo.jpg" width="80" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto p-2">
                        <a class="nav-link active" href="#">Home</a>
                        <a class="nav-link active" href="#">About</a>
                        <a class="nav-link active" href="#">Menu</a>
                        <a class="nav-link active" href="#">Contact</a>
                    </div>
                </div>
                <i class="bi bi-search me-2"></i>
                <a class="btn btn-primary me-2" href="#" role="button">Login</a>
                <i class="bi bi-cart me-2"></i>
            </div>
        </nav>
        
        <div class="row mb-5" style="position: absolute; font-family:poppins; color:#F5F5F5; font-size:3.646vw">
            <p>Discover the Incredible flavors <br> of <span style="color: #EEC82F;">goat cuisine</span>, expertly <br> prepared and <br>delivered.</p>

        </div>

    </body>
</html>