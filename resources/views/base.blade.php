<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Una web to guapa" />
        <meta name="author" content="Aitor Trillo Díaz" />
        <title>Coches brum brum</title>
        <!--<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet" />
        @yield("css")
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img style="width:300px; height:200px; margin-top: -130px" src="{{ url ('assets/assets/img/navbar-logo.svg') }}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('resource/create') }}">Añadir coche</a></li>
                        <li class="nav-item"><a class="nav-link"  href="{{ url('resource') }}">Mostrar todos los coches</a></li>
                        <li class="nav-item"><a class="nav-link"  href="{{ url('resource/all/flush') }}">Quemar el concesionario (flush)</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <div>
                @yield("container")
            </div>
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-lg-start">Copyright &copy; Carmelo S.L 2021</div>
                    <div class="col-lg-3 text-lg-start">Distributed By <a href="https://themewagon.com/">Aitor Trillo Díaz</a></div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url ('assets/js/scripts.js') }}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @yield("js")
    </body>
</html>
