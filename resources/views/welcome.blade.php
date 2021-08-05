<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bengkel Las Aneka Karya</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('landing/assets/img/logo-bengkel-las.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('landing/css/styles.css') }}" rel="stylesheet" />
    <style type="text/css">
        .justify {
            text-align: justify;
        }

    </style>
</head>

<body id="page-top">
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('landing/assets/img/logo-bengkel-las.png') }}"
                    style="width: 160px; height: 60px;" alt="logoweb" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#katalog">Katalog</a></li>
                            <li><a class="dropdown-item" href="#datapesanan">Berita Pesanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#datacontact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About </a></li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                        Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <header class="masthead">
        <div class="container">
            <h3 class="masthead-heading text-uppercase">BENGKEL LAS ANEKA KARYA</h3>
            <h5 class="masthead-subheading">Menyediakan jasa dan layanan berbagai macam produk dari bahan besi dan baja
            </h5>
            <div class="row text-center">
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/pemesanan.png') }}" alt="..." />
                    <p class="my-3">PEMESANAN</p>
                </div>
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/perbaikan.png') }}" alt="..." />
                    <p class="my-3">PERBAIKAN</p>
                </div>
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/katalog.png') }}" alt="..." />
                    <p class="my-3">KATALOG</p>
                </div>
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/berita-pesanan.png') }}"
                        alt="..." />
                    <p class="my-3">BERITA PESANAN</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Services-->
    <!-- <section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">E-Commerce</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Responsive Design</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Web Security</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section> -->
    <!-- Katalog-->
    <section class="page-section bg-light" id="katalog">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Katalog</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#folding">
                            <img width="300" height="300"
                                src="{{ asset('landing/assets/img/folding/folding1.png') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Folding Gate</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#canopy">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/canopy/canopy1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Canopy</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#tangga">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Railling Tangga</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#tralis">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/tralis1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Tralis</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#pagar">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pagar/pagar1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Pagar</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#pintu">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pintu/pintu1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Pintu Henderson</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr>
    <!-- Folding Gate-->
    <section class="page-section bg-light" id="folding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Folding Gate </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300"
                                src="{{ asset('landing/assets/img/folding/folding1.png') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Folding Gate</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300"
                                src="{{ asset('landing/assets/img/folding/folding2.png') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Canopy</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- Canopy-->
    <section class="page-section bg-light" id="canopy">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Canopy</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/canopy/canopy1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Canopy Polycarbonate</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/canopy/canopy2.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Canopy Alderon</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/canopy/canopy3.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Canopy Kain</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/canopy/canopy4.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Canopy Kaca</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <!-- Tangga-->
    <section class="page-section bg-light" id="tangga">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Tangga</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga2.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 2</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga3.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga4.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga5.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 5</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga6.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 6</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tangga/tangga7.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 7</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <hr>

    <!-- Tralis-->
    <section class="page-section bg-light" id="tralis">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Tralis</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/model1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/model2.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 2</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/model3.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/model4.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/model5.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 5</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/model6.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 6</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/tralis/model7.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 7</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <hr>

    <!-- Pagar-->
    <section class="page-section bg-light" id="pagar">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Pagar</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pagar/model1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pagar/model2.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 2</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pagar/model3.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pagar/model4.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pagar/model5.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 5</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pagar/model6.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 6</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <hr>

    <!-- Pintu-->
    <section class="page-section bg-light" id="pintu">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Pintu</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pintu/model1.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pintu/model2.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 2</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pintu/model3.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pintu/model4.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pintu/model5.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 5</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#modalpesan">
                            <img width="300" height="300" src="{{ asset('landing/assets/img/pintu/model6.png') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model 6</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Contack Us-->
    <hr>
    <section class="page-section bg-light" id="datapesanan">
        <div class="container row">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><span class="text-muted">Irsad Hidayattullah</span></h2>
                    <p class="lead">Jl. Merdeka no. 28 01/08 Kel. Cikundul, Kec. Lembursitu, Sukabumi</p>
                    <p class="lead">Sukabumi</p>
                    <p class="lead">-</p>
                    <p class="lead">Jawa Barat</p>
                    <p class="lead">43168</p>
                    <p class="lead">081212*****</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('landing/assets/img/pintu/model1.png') }}" width="345" height="345"
                        class="rounded-start" alt="...">

                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- Contack Us-->
    <section class="page-section bg-light" id="datacontact">
        <div class="container row">
            <div class="row">
                <div class="col-md-6 mr-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6431688334474!2d106.74134041476891!3d-6.178496495526936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTAnNDIuNiJTIDEwNsKwNDQnMzYuNyJF!5e0!3m2!1sid!2sid!4v1628179877659!5m2!1sid!2sid"
                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div>
                        <small>
                            Alamat Bengkel Las : Jl. Joglo Raya No.21 E, RT.8/RW.3, Joglo, Kec. Kembangan, Kota Jakarta
                            Barat, Daerah Khusus Ibukota Jakarta 11640
                        </small>
                    </div>
                </div>
                <div class="col-md-6 ml-3 mt-3">
                    <u>Untuk lebih jelas mengenai pemesanan atau berkonsultasi mengenai kebutuhan anda silahkan hubungi
                        :</u>
                    <h2 class="featurette-heading"><span class="text-muted">0812-9776-130</span></h2>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- Contact-->
    <section class="page-section bg-dark" id="about">
        <div class="">
            <header class="masthead">
                <div class="container mb-2">
                    <img width="500" height="400" style="object-fit: cover;"
                        src="{{ asset('landing/assets/img/footer/img1.png') }}" alt="..." />
                    <img width="500" height="400" style="object-fit: cover;"
                        src="{{ asset('landing/assets/img/footer/img2.png') }}" alt="..." />
                </div>
                <div class="container">
                    <p class="justify"> Bengkel Las Aneka Karya merupakan bengkel las Professional yang sudah hadir
                        sejak tahun 1998 berlokasi di Joglo Raya no,21, Kembangan, Jakarta Barat. Tentunya lokasi bukan
                        menjadi penghalang, kita menerima pesanan untuk luar wilayah Jakarta Barat seperti DKI Jakarta,
                        Tangerang, Bogor, Depok, dan wilayah Jabodetabek lainnya. Didukung dengan teknisi terbaik dan
                        berpengalaman kita membuat kontruksi besi dan baja seperti Teralis Jendela, Kanopi Rumah,
                        Railing Tangga, Railing Balkon, Pintu Henderson, Pintu Pagar, Pagar Besi, Pintu Garasi, Tangga
                        Lurus, Tangga Putar dan juga lainnya.</p>
                    <br>
                    <p class="justify">Kami selalu menjaga kepercayaan pelanggan dengan memberikan service terbaik mulai
                        dari bahan baku yang terbaik dan juga pengerjaan yang tepat waktu dan kami pun siap datang ke
                        lokasi anda untuk survey ataupun konsultasi mengenai pembuatan pesanan.</p>
                </div>
            </header>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Bengkel Las 2021</div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="modalpesan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('landing/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <h2 class="featurette-heading"><span class="text-muted">Form Order</span></h2>
                <br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2">
                                <!-- <- -->
                                <form>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Kota</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Kabupaten</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Telepon</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary">PESAN SEKARANG</button>
                                </form>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img src="{{ asset('landing/assets/img/pintu/model1.png') }}" width="345"
                                    height="345" class="rounded-start" alt="...">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('landing/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
