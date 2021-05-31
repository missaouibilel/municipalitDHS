@extends('dashboard')
@section('content')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox" >

          <!-- Sliders -->
          @foreach($sl as $key => $Slider)
            <div class="carousel-item @once {{'active'}} @endonce" style="background: url({{url('images_slider', $Slider->image)}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown"><span>{{$Slider->titre}}</span></h2>
                        <p class="animate__animated animate__fadeInUp">{{$Slider->description}}</p>
                            <div>
                            <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Plus d'informations</a>
                            </div>
                    </div>
                </div>
            </div>
          @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>
<!-- ======= End Carousel Hero ======= -->

<!-- Main -->
  <main id="main">

    <!-- ========= Reclamation Swiper =========-->
      <div class="blog-slider">
        <div class="blog-slider__wrp swiper-wrapper">
          @foreach($Rec as $key => $Rec1)
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">

              <img src="{{url('images', $Rec1->imageRec)}}" alt="">
            </div>
            <div class="blog-slider__content">
              <span class="blog-slider__code">{{$Rec1->dateReclamation}}</span>
              <div class="blog-slider__title">{{$Rec1->etat}}</div>
              <div class="blog-slider__text">{{$Rec1->description}}</div>
              <a href="{{url('Reclamation', $Rec1->id)}}" class="blog-slider__button">Voir Plus</a>
            </div>
          </div>
          @endforeach

        </div>
        <div class="blog-slider__pagination"></div>
      </div>
</div>
@endsection
