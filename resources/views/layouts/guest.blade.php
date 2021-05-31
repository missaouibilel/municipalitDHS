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

          <header id="headerGuest" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                   <!-- ======= Logo ======= -->
               <div class="logo me-auto">
                   <h6>
                   <a href="{{ route('accueil') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
                   <a href="{{ route('accueil') }}">Commune Houmt Souk Djerba</a>
                   </h6>
               </div>
                   <!-- ======= NavBar ======= -->
               <nav id="navbar" class="navbar order-last order-lg-0">
                   <ul>
                   <li><a class="nav-link scrollto active" href="{{ route('accueil') }}">Accueil</a></li>

                   <li class="nav-link scrollto"> <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Reclamation</a></li>



                   <!-- drop down -->
                   <li class="dropdown"><a href="#infos"><span>Informations à distance</span> <i class="bi bi-chevron-down"></i></a>
                       <ul>
                       <li><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Demande d'info</a></li>
                       <li><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Suivie d'info</a></li>
                       </ul>
                   </li>
                   <!-- end drop down -->
                   <!-- drop down -->
                   <li class="dropdown"><a href="#"><span>Informations Publique</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#menu">Projets</a></li>
                        <li class="dropdown"><a href="#"><span>Activités Municipalité</span> <i class="bi bi-chevron-right"></i></a>
                          <ul>
                            <li><a href="#menu">Sportive</a></li>
                            <li><a href="#menu">Culturelle</a></li>
                          </ul>
                        </li>
                        <li><a href="#menu">Réunions</a></li>
                      </ul>
                   </li>
                   <!-- end drop down -->
                   <li><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Autorisation à distance</a></li>
                   <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                               <li class="dropdown"> <a href="#" class="book-a-table-btn scrollto"><span>Espace Citoyen</span> <i class="bi bi-chevron-right"></i></a>
                                   <ul>
                                       <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">S'authentifier</a></li>

                                       <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">S'inscrir</a></li>
                                   </ul>
                                   </li>
                   </ul>
                   <i class="bi bi-list mobile-nav-toggle"></i>
               </nav><!-- .navbar -->
           </div>
       </header>

            <!-- Page Heading -->


            <!-- Page Content -->


        @stack('modals')

        @livewireScripts
       <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>titre de page</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>nom de page</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs Section -->
      <main>
        {{ $slot }}
    </main>

  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Delicious</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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
