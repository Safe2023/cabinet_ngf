@extends('layouts.header')
<<<<<<< HEAD

@section('content')

@php
    $firstImage = $projet->images?->first();
@endphp

<!-- 🔥 HEADER -->
<div class="container-fluid page-header py-5 wow fadeIn position-relative"
     data-wow-delay="0.1s"
     style="background-image: url('{{ $firstImage 
        ? asset($firstImage->image) 
        : asset('img/default.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 400px;">

    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background: rgba(0,0,0,0.55);"></div>

    <div class="container text-center py-5 mt-4 position-relative">
        <h1 class="display-2 text-white mb-3">Nos réalisations</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a href="/" class="text-warning">Accueil</a>
                </li>
                <li class="breadcrumb-item active text-white">
                    Réalisations
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- 🔥 CONTENT -->
<div class="container my-5">
    <div class="row g-4">

        <h2 class="section-title">{{ $projet->titre }}</h2>

        <!-- 🔥 CAROUSEL -->
        <div class="col-md-6">

            @if($projet->images?->isNotEmpty())

                <div id="carouselProjet{{ $projet->id }}"
                     class="carousel slide"
                     data-bs-ride="carousel">

                    <div class="carousel-inner">

                        @foreach($projet->images as $key => $image)

                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">

                                <img src="{{ asset($image->image) }}"
                                     class="d-block w-100 img-fluid rounded shadow-sm"
                                     style="object-fit: cover; height: 450px;"
                                     alt="{{ $projet->titre }}">

                            </div>

                        @endforeach

                    </div>

                    <button class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselProjet{{ $projet->id }}"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselProjet{{ $projet->id }}"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

            @else

                <img src="{{ asset('img/default.jpg') }}"
                     class="img-fluid rounded shadow-sm"
                     style="object-fit: cover; height: 300px;"
                     alt="Image par défaut">

            @endif

        </div>

        <!-- 🔥 DETAILS -->
        <div class="col-md-6">

            <h6>Notre Intervention</h6>
            <p>{{ $projet->intervention }}</p>

            <h6>Contexte</h6>
            <p>{{ $projet->contexte }}</p>

            <h6>Description</h6>
            <p>{{ $projet->description }}</p>

            <h6>Message</h6>
            <p>{{ $projet->message }}</p>

        </div>

    </div>
</div>

<!-- 🔥 CTA -->
<section class="text-center py-5"
         style="background: linear-gradient(90deg, #FFD700, #005C73); color: #fff;">

    <div class="container">

        <h2 class="fw-bold mb-3">Un projet en tête ?</h2>

        <p class="mb-4">
            Contactez-nous dès aujourd’hui et construisons ensemble votre réussite.
        </p>

        <a href="/contact"
           class="btn px-4 py-2 rounded-pill fw-semibold"
           style="background-color: #fff; color: #005C73;">
            Nous contacter
        </a>

    </div>

=======
@section('content')


<div class="container-fluid page-header py-5 wow fadeIn position-relative"
  data-wow-delay="0.1s"
  style="background-image: url('{{ $projet->images->isNotEmpty() ? asset('storage/' . $projet->images->first()->image) : asset('img/default.jpg') }}'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            height: 400px;">



  <!-- Overlay pour lisibilité -->
  <div class="position-absolute top-0 start-0 w-100 h-100"
    style="background: rgba(0,0,0,0.55);"></div>

  <div class="container text-center py-5 mt-4 position-relative">
    <h1 class="display-2 text-white mb-3 animated slideInDown">Nos realisations</h1>
    <nav aria-label="breadcrumb" class="animated slideInDown">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="/" class="text-warning">Accueil</a></li>
        <li class="breadcrumb-item active text-white" aria-current="page">Realisations</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container my-5">
  <div class="row g-4">
    <h2 class="section-title">{{ $projet->titre }}</h2>

    <!-- 👉 Carrousel des images -->
    <div class="col-md-6">
      @if($projet->images->isNotEmpty())
      <div id="carouselProjet{{ $projet->id }}" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($projet->images as $key => $image)
          <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/' . $image->image) }}"
              class="d-block w-100 img-fluid rounded shadow-sm"
              style="object-fit: cover; height: 450px;"
              alt="{{ $projet->titre }}">
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjet{{ $projet->id }}" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProjet{{ $projet->id }}" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      @else
      <img src="{{ asset('img/default.jpg') }}"
        class="img-fluid rounded shadow-sm"
        style="object-fit: cover; height: 300px;"
        alt="Image par défaut">
      @endif
    </div>

    <!-- 👉 Détails -->
    <div class="col-md-6">

      <h6>Notre Intervention</h6>
      <p>{{ $projet->intervention }}</p>

      <h6>Contexte</h6>
      <p>{{ $projet->contexte }}</p>

      <h6>Description</h6>
      <p>{{ $projet->description }}</p>

      <p>{{ $projet->message }}</p>

    </div>
  </div>
</div>


<section class="text-center py-5" style="background: linear-gradient(90deg, #FFD700, #005C73); color: #fff;">
  <div class="container">
    <h2 class="fw-bold mb-3" style="font-size: 2.2rem;">Un projet en tête ?</h2>
    <p class="mb-4" style="font-size: 1.1rem; opacity: 0.95;">
      Contactez-nous dès aujourd’hui et construisons ensemble votre réussite.
    </p>
    <a href="contact.html"
      class="btn px-4 py-2 rounded-pill fw-semibold"
      style="background-color: #fff; color: #005C73; border: none; transition: all 0.3s ease;">
      Nous contacter
    </a>
  </div>
>>>>>>> d75851da67972809a7dfdb66abdaee1966f90223
</section>

@endsection