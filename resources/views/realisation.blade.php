@extends('layouts.header')
@section('content')
<style>
    .hero {
        background: url('images/hero-consulting.jpg') center/cover no-repeat;
        color: white;
        padding: 120px 20px;
        text-align: center;
    }

    .project-card img {
        height: 220px;
        object-fit: cover;
    }

    .btn-gradient-outline {
        display: inline-block;
        /* ✅ rend le bouton à la taille du texte */
        color: #005C73;
        font-weight: 600;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 8px 20px;
        border-radius: 30px;
        border: 2px solid transparent;
        background: linear-gradient(90deg, #FFD700, #005C73);
        background-clip: padding-box, border-box;
        -webkit-background-clip: text, border-box;
        -webkit-text-fill-color: #005C73;
        position: relative;
        transition: all 0.3s ease;
        align-self: flex-start;
        /* ✅ empêche le bouton de s'étirer */
    }

    .btn-gradient-outline::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 30px;
        padding: 2px;
        background: linear-gradient(90deg, #FFD700, #005C73);
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
    }

    .btn-gradient-outline:hover {
        background: linear-gradient(90deg, #FFD700, #005C73);
        color: #fff !important;
        -webkit-text-fill-color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 92, 115, 0.3);
    }
   /*  //////////////////////////////////////////////////////// */
    .project-card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.4s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    background-color: #fff;
}

.project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 20px rgba(0, 92, 115, 0.25);
    border-top: 4px solid transparent;
    border-image: linear-gradient(90deg, #FFD700, #005C73) 1;
}

/* Animation sur l’image au survol */
.project-card img {
    transition: transform 0.5s ease;
}

.project-card:hover img {
    transform: scale(1.05);
}

/* Texte & bouton harmonisés */
.card-title {
    transition: color 0.3s ease;
}

.project-card:hover .card-title {
    color: #FFD700;
}

</style>

<div class="container-fluid page-header py-5 wow fadeIn position-relative"
    data-wow-delay="0.1s"
    style="background-image: url('img/propos.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
             height:400px;">

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


<!-- Intro -->
<section class="container py-5 text-center">
    <div class="row">
        <div class="col-12 text-center section-title ">
            <h2>Nos realisations</h2>
        </div>
        <p class="mx-auto text-justify" style="max-width: 800px; text-align: justify;">
            Découvrez quelques-unes de nos réalisations, témoins de notre savoir-faire
            et de l’engagement de <strong>NGF Expertise Consulting</strong>
            à transformer les ambitions de nos clients en succès concrets et durables.
        </p>
    </div>
   <div class="row">
    @foreach($projets as $projet)
    <div class="col-md-4 mb-5">
        <div class="card project-card h-100">
            @if($projet->images->isNotEmpty())
            <img src="{{ asset('storage/' . $projet->images->first()->image) }}"
                class="card-img-top img-fluid"
                alt="{{ $projet->titre }}"
                style="object-fit: cover; height: 250px;">
            @else
            <img src="{{ asset('img/default.jpg') }}"
                class="card-img-top img-fluid"
                alt="Image par défaut"
                style="object-fit: cover; height: 250px;">
            @endif

            <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold"
                    style="color: #005C73; font-size: 1.1rem;">
                    {{ $projet->titre }}
                </h5>

                <p class="card-text text-truncate">
                    {{ Str::limit($projet->description, 100) }}
                </p>

                <a href="{{ route('detail', $projet->id) }}" class="btn-gradient-outline mt-auto">
                    Voir détails
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

    <div class="container d-flex justify-content-center mt-4">
        @if ($projets->hasPages())
        <nav>
            <ul class="pagination custom-pagination">

                {{-- Bouton Précédent --}}
                @if ($projets->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $projets->appends(request()->query())->previousPageUrl() }}" rel="prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
                @endif

                {{-- Numéros de pages --}}
                @foreach ($projets->getUrlRange(1, $projets->lastPage()) as $page => $url)
                @if ($page == $projets->currentPage())
                <li class="page-item active">
                    <span class="page-link">{{ $page }}</span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endif
                @endforeach

                {{-- Bouton Suivant --}}
                @if ($projets->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $projets->appends(request()->query())->nextPageUrl() }}" rel="next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="page-link">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </li>
                @endif

            </ul>
        </nav>
        @endif
    </div>


    <style>
        /* Pagination custom */
        .custom-pagination .page-link {
            background: #fff;
            /* blanc par défaut */
            color: #005C73;
            /* texte bleu */
            border: 2px solid transparent;
            border-image: linear-gradient(90deg, #FFD700, #005C73) 1;
            margin: 0 5px;
            border-radius: 50%;
            /* rond */
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        /* Hover effet lumineux */
        .custom-pagination .page-link:hover {
            background: linear-gradient(90deg, #FFD700, #005C73);
            border: none;
            color: #fff;
            transform: scale(1.15);
            box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.3);
        }

        /* Page active */
        .custom-pagination .page-item.active .page-link {
            background: linear-gradient(90deg, #FFD700, #005C73);
            color: #fff;
            transform: scale(1.2);
            font-weight: bold;
            border: none;
            box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.4);
        }

        /* Désactivé */
        .custom-pagination .page-item.disabled .page-link {
            background: #f0f0f0;
            color: #999;
            border: none;
            cursor: not-allowed;
            box-shadow: none;
            transform: none;
        }
    </style>

</section>


<!-- Call to Action -->
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
</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Animation des compteurs
    function animateCounter(id, target) {
        let count = 0;
        const interval = setInterval(() => {
            if (count >= target) clearInterval(interval);
            else {
                count++;
                document.getElementById(id).textContent = count;
            }
        }, 30);
    }

    animateCounter("clients", 100);
    animateCounter("projets", 50);
    animateCounter("annees", 10);
</script>

@endsection