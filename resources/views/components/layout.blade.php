<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Page Title -->
        <title>Poulet Blog</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
        <link rel="manifest" href="img/favicons/site.webmanifest">
        <link rel="mask-icon" href="img/logo.png" color="#f23838">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Vendor Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700%7CRoboto:300,400,700" rel="stylesheet">
        <link href="assets/vendor/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="assets/vendor/jquery.mb.vimeo_player/dist/css/jquery.mb.vimeo_player.min.css" rel="stylesheet">

        <!-- Theme Stylesheets -->
        <link href="assets/css/theme.css" rel="stylesheet">

        <!-- Mystyles-->
        <link href="assets/css/mystyle.css" rel="stylesheet">

        <style>
            .pagination {
                display: flex;
                justify-content: center;
                margin-top: 2rem;
            }
        
            .page-item {
                margin: 0 0.25rem;
            }
        
            .page-link {
                font-size: 1.2rem; /* Adjust the font size as needed */
            }
        </style>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129313359-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-129313359-1');
        </script>
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="circles"></div>
            </div>
        </div>
        <!-- End of Preloader -->


        <!-- Header -->
        <header class="spyre-navbar navbar navbar-expand-lg bg-secondary navbar-dark fixed-top align-items-center" data-transparent data-text-color="#ffffff">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-xl-7" href="/">
                    <img src="img/logo.png" class="d-none d-lg-block" alt="Spyre" width="130" />
                    <img src="img/logo.png" class="d-block d-lg-none" alt="Spyre" width="100" />
                </a>

                <span class="navbar-text flex-fill d-none d-md-inline-block text-white">
                    Contact us: <a href="#" class="ps-2 text-white">admin@pouletmedia.ng</a><a href="#" class="ps-5 text-white"></a>
                </span>
                
                <div class="search d-none d-lg-flex justify-content-end ms-auto me-2">
                    <input class="form-control me-2" type="text">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="menu-toggle">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="cross">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <!-- Spyrenav Overlay -->
            <div class="spyre-navbar-overlay overlay-slide">
                <div class="container">
                    <div class="row">
                        <div class="spyre-navbar-nav-container col-md-6 col-lg-5 col-xl-4 bg-white ext-s position-relative">
                            <nav class="spyre-navbar-nav">
                                @include('partials._nav')

                            </nav>
                        </div>
        
                        <div class="col-lg-7 col-xl-8 d-none d-md-block">
                            <div class="d-flex flex-column h-100">
                                <div class="d-flex h-100">
                                    <div class="align-self-center">
                                        <div class="text-uppercase"
                                            data-background-text="communication"
                                            data-color="#7079a2"
                                            data-opacity="0.02"
                                            data-font-size="85px"
                                            data-font-weight="500"
                                            data-offset-x="-5%"
                                            data-letter-spacing="5px"
                                        ></div>
                                        <div class="text-uppercase"
                                            data-background-text="planning"
                                            data-color="#7079a2"
                                            data-opacity="0.04"
                                            data-font-size="175px"
                                            data-font-weight="500"
                                            data-offset-x="29%"
                                            data-padding="7vh 0 2vh 0"
                                            data-letter-spacing="5px"
                                        ></div>
                                        <div class="text-uppercase"
                                            data-background-text="delivering"
                                            data-color="#7079a2"
                                            data-opacity="0.03"
                                            data-font-size="140px"
                                            data-font-weight="500"
                                            data-offset-x="15%"
                                            data-letter-spacing="5px"
                                        ></div>
                                    </div>
                                </div>
                                
                                <div class="mt-auto">
                                    <ul class="nav flex-nowrap float-end">
                                        <li class="nav-item">
                                            <a class="nav-link px-2" href="#" target="_blank">
                                                <i class="zmdi zmdi-twitter text-white"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2" href="#" target="_blank">
                                                <i class="zmdi zmdi-instagram text-white"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2" href="#" target="_blank">
                                                <i class="zmdi zmdi-facebook-box text-white"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2" href="#" target="_blank">
                                                <i class="zmdi zmdi-pinterest text-white"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2" href="#" target="_blank">
                                                <i class="zmdi zmdi-flickr text-white"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2" href="#" target="_blank">
                                                <i class="zmdi zmdi-youtube text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Spyrenav Overlay -->
        </header>
        <!-- End of Header -->
        



            <!-- Main Content -->
            <main class="main minh-100vh">
            {{$slot}}
            </main>
        <!-- Footer -->
        <footer class="footer text-white" style="background-image: url(img/footer-bg.jpg)">
            <div class="container d-flex h-100">
                <div class="row flex-grow-1">
                    <div class="col-lg-3 pt-3 ext-s position-relative bg-secondary text-center text-lg-start position-relative">
                        <div class="d-flex flex-column h-100">
                            <div class="pt-5 pt-lg-8 pb-4">
                                <img src="img/logo-small.svg" alt="" width="92" class="mb-4" />
                                <p class="mb-4 mt-3 fs--1">Lagos, NGN<br /></p>
        
                                <p class="fs--1"><a href="#" class="text-white"><i class="zmdi zmdi-phone zmdi-hc-fw me-1"></i></a><br />
                                <a href="#" class="text-white"><i class="zmdi zmdi-email zmdi-hc-fw me-1"></i>admin@pouletmedia.ng</a></p>
                            </div>

                            <ul class="mt-4 mt-lg-auto mb-5 mb-lg-0 list-unstyled list-inline">
                                <li class="me-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-twitter text-white"></i>
                                    </a>
                                </li>
                                <li class="me-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-instagram text-white"></i>
                                    </a>
                                </li>
                                <li class="me-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-facebook-box text-white"></i>
                                    </a>
                                </li>
                                <li class="me-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-pinterest text-white"></i>
                                    </a>
                                </li>
                                <li class="me-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-flickr text-white"></i>
                                    </a>
                                </li>
                                <li class="me-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-youtube text-white"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col d-flex flex-column mb-2 mt-3 ps-lg-7 position-relative">
                        <div class="row pt-5 pt-lg-8 pb-4 pb-lg-6">
                            <div class="col-6 col-lg-3">
                                <h6 class="mb-1 mb-lg-4 text-uppercase">Services</h6>
                                <ul class="pt-2 mb-5 fw-light list-unstyled">
                                    <li class="my-1"><a href="#" class="text-white">Design</a></li>
                                    <li class="my-1"><a href="#" class="text-white">Development</a></li>
                                    <li class="my-1"><a href="#" class="text-white">Themes</a></li>
                                    <li class="my-1"><a href="#" class="text-white">CMS</a></li>
                                    <li class="my-1"><a href="#" class="text-white">Mobile</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-lg-3">
                                <h6 class="mb-1 mb-lg-4 text-uppercase">About</h6>
                                <ul class="pt-2 mb-5 fw-light list-unstyled">
                                    <li class="my-1"><a href="#" class="text-white">About Us</a></li>
                                    <li class="my-1"><a href="#" class="text-white">Contact</a></li>
                                    <li class="my-1"><a href="#" class="text-white">The team</a></li>
                                    <li class="my-1"><a href="#" class="text-white">Careers</a></li>
                                    <li class="my-1"><a href="#" class="text-white">Locate store</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-lg-3">
                                <h6 class="mb-1 mb-lg-4 text-uppercase">Help</h6>
                                <ul class="pt-2 mb-5 fw-light list-unstyled">
                                    <li class="my-1"><a href="#" class="text-white">Sponsors</a></li>
                                    <li class="my-1"><a href="#" class="text-white">FAQs</a></li>
                                    <li class="my-1"><a href="#" class="text-white">Stories & Ideas</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-auto d-flex justify-content-between">
                            <span class="fs--3 fs-lg--2">&copy; Poulet Media.</span>
                          
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
        
        <x-flash-message />


    <!-- Core Javascripts -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor Javascripts -->
    <script src="assets/vendor/rellax/rellax.min.js"></script>
    <script src="assets/vendor/jquery.mb.vimeo_player/dist/jquery.mb.vimeo_player.min.js"></script>

    <!-- Theme Javascripts -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>