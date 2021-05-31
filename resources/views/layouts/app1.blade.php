<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

<!--leaflet fonts-->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>


  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/Swiper.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/Swiper2.css')}}" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
              <i class="bi bi-phone d-flex align-items-center"><a href="tel:+21675650020"><span>+216 75 650 020</span></a></i>
              <i class="bi bi-at ms-4 d-none d-lg-flex align-items-center"><a href="mailto:contact@commune-houmtsouk.gov.tn"><span>contact@commune-houmtsouk.gov.tn</span></a></i>

            </div>
          </section>
        <x-jet-banner />
    <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- ======= End Carousel Hero ======= -->

        <!-- Main -->
          <main id="main">


        </div>

  <!-- ======= Ajouter & Suivre reclamation ======= -->
    <section id="Reclamation" class="why-us">
        <div class="container">

          <div class="section-title">
            <h2><span>Reclamations</span></h2>
            <p>Pour Ajouter ou suivre votre reclamation .</p>
          </div>

          <div class="row">

            <div class="col-lg-6">

              <a href="{{route('ajoutReclamation')}}">
              <div class="box I-C">
                <i class='bx bx-add-to-queue'></i>
                <h4 src="ajoutReclamation">Ajouter Votre Reclamation</h4>
                </div>
            </a>
            </div>

            <div class="col-lg-6 mt-6 mt-lg-0">
              <a href="{{route('suivieReclamation')}}">
              <div class="box I-C">
                <i class='bx bxs-binoculars'></i>
                <h4 >Suvie Votre Reclamation</h4>
              </div>
              </a>
            </div>

          </div>

        </div>
      </section>
    <!-- ======= End Ajouter & Suivre reclamation ======= -->


    <!-- ======= Activités ======= -->
      <section id="menu" class="menu">
        <div class="container">

          <div class="section-title">
            <h2>Activités <span>Municipalité</span></h2>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="menu-flters">
                <li data-filter="*" class="filter-active">Show All</li>
                <li data-filter=".filter-starters">Sportif</li>
                <li data-filter=".filter-salads">Culturel</li>
                <li data-filter=".filter-specialty">Réunions</li>
              </ul>
            </div>
          </div>

          <div class="row menu-container">

            <div class="col-lg-6 menu-item filter-starters">
              <div class="menu-content">
                <a href="#">Titre (Spotif) </a><span>03/05/2021</span>
              </div>
              <div class="menu-ingredients">
                Rue , Adresse
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
              <div class="menu-content">
                <a href="#">Titre (Réunions)</a><span>03/05/2021</span>
              </div>
              <div class="menu-ingredients">
                Rue , Adresse
              </div>
            </div>


            <div class="col-lg-6 menu-item filter-salads">
              <div class="menu-content">
                <a href="#">Titre (Culturel)</a><span>03/05/2021</span>
              </div>
              <div class="menu-ingredients">
                Rue , Adresse
              </div>
            </div>

          </div>

        </div>
      </section>
    <!-- ======= End Activités ======= -->

    <!-- ======= Nos projets ======= -->
      <section id="specials" class="specials">
        <div class="container">

          <div class="section-title">
            <h2> Nos projets <span>2021</span></h2>
            <p>Les travaux d'entretien ...</p>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Projet municipal N°1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Projet municipal N°2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Projet municipal N°3</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Projet municipal N°4</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Projet municipal N°5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="/plus"> <i class="fas fa-search-plus"></i> Voir Plus</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Titre Projet 1</h3>
                      <p class="fst-italic">03/05/2021</p>
                      <p>Description technique simplifié du projet municipal ...</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="images_Projets/logo.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Titre Projet 2</h3>
                      <p class="fst-italic">03/05/2021</p>
                      <p>Description technique simplifié du projet municipal ...</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="images_Projets/logo.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Titre Projet 3</h3>
                      <p class="fst-italic">03/05/2021</p>
                      <p>Description technique simplifié du projet municipal ...</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="images_Projets/logo.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Titre Projet 4</h3>
                      <p class="fst-italic">03/05/2021</p>
                      <p>Description technique simplifié du projet municipal ...</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="images_Projets/logo.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Titre Projet 5</h3>
                      <p class="fst-italic">03/05/2021</p>
                      <p>Description technique simplifié du projet municipal ...</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="images_Projets/logo.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
    <!-- ======= End Nos projets ======= -->

    <!-- ======= Events Section ======= -->
      <section id="events" class="events">
        <div class="container">

          <div class="section-title">
            <h2>Organize Your <span>Events</span> in our Restaurant</h2>
          </div>

          <div class="events-Slider swiper-container">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Birthday Parties</h3>
                    <div class="price">
                      <p><span>$189</span></p>
                    </div>
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    </ul>
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Private Parties</h3>
                    <div class="price">
                      <p><span>$290</span></p>
                    </div>
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    </ul>
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Custom Parties</h3>
                    <div class="price">
                      <p><span>$99</span></p>
                    </div>
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    </ul>
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section>
    <!-- ======= End Events Section ======= -->

    <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2><span>Contactez-</span>nous</h2>
            <p>
              Vous pouvez nous contacter directement par email, téléphone ou courrier.
              Pour ne manquer aucune actualité, suivez-nous sur nos réseaux sociaux.
            </p>
          </div>
        </div>
<div class="map">
    <div id="mapid"></div>
</div>

        <div class="container mt-5">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-3 col-md-6 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Rue de liberté <br>houmt souk,Djerba </p>
              </div>

              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-clock"></i>
                <h4>Horaire de travail:</h4>
                <p>Du Lundi au Vendredi:<br>8h:00 - 13h:00 / 14h:00 - 17h:00<br>
                Le Samedi du 8h:00 - 13h:00</p>
              </div>

              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:contact@commune-houmtsouk.gov.tn">contact@commune-houmtsouk.gov.tn</a></p>
              </div>

              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Telephone:</h4>
                <p>
                  <a href="tel:+21675650020">+(216) 75 650 020</a>
                  <br>
                  <a href="tel:+21675652400">+(216) 75 652 400</a>
                  <br>
                  <a href="tel:+21675650416">+(216) 75 650 416</a>
                </p>
              </div>
            </div>
          </div>

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Envoyer</button></div>
          </form>

        </div>
      </section>
    <!-- End Contact Section -->

  </main>
<!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Commune Houmt Souk Djerba</h3>
      <p>Réseaux sociaux</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Commune Houmet Souk Djerba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="/">Iset Djerba</a>
      </div>
    </div>
  </footer>
<!-- ======= End Footer ======= -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Login Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">


        <div class="modal-body">
          <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Login</button>
        </div>
      </form>
    </x-jet-authentication-card>
      </div>
    </div>
  </div>
<!-- End login modal -->

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/Swiper.js')}}"></script>

<!-- script Leaflet -->
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin="">
</script>
<script>
    // initialize Leaflet
    var map = L.map('mapid').setView({lon:10.85745,lat: 33.87576},17);

    // add the OpenStreetMap tiles
    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
}).addTo(map);


    // show a marker on the map
    var marqueur = L.marker([33.87576,10.85745]).addTo(map);
    marqueur.bindPopup("<p>Municipalité Houmet-souk Djerba</p>")

  </script>
</body>

</html>
