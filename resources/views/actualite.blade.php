@extends('layouts.header')
@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .news-section {
        padding: 80px 0;
        background-color: #fff;
    }

    .section-title {
        font-size: 2.8rem;
        font-weight: bold;
        color: #005C73;
        /* Dark green */
        margin-bottom: 60px;
        text-align: center;
    }

    .news-card {
        background-color: #fff;
        border: 1px solid #e9ecef;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        /* Ensure cards in a row have equal height */
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .news-card img {
        /*width: 100%;
        height: 200px;
        Fixed height for news images */
        object-fit: cover;
    }

    .news-card-body {
        padding: 25px;
    }

    .news-card-body h5 {
        font-size: 1.4rem;
        font-weight: bold;
        color: #005C73;
        margin-bottom: 10px;
    }

    .news-card-body .news-date {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 15px;
    }

    .news-card-body p {
        font-size: 1rem;
        color: #005C73;
        margin-bottom: 20px;
    }

    .news-card-body .btn-read-more {
        background-color: #005C73;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 0.9rem;
        transition: background-color 0.3s ease;
    }

    .news-card-body .btn-read-more:hover {
        background-color: #005C73;
    }

    .btn-custom {
        background: linear-gradient(50deg, #005C73, #FFD700);
        color: #fff;
        padding: 14px 40px;
        border-radius: 50px;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.4s ease;
        display: inline-block;
    }

    .btn-custom:hover {
        background: linear-gradient(45deg, #FFD700, #FF9800);
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        color: #fff;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn position-relative"
    data-wow-delay="0.1s"
    style="background-image: url('img/actu.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
             height:400px;">

    <!-- Overlay pour lisibilité -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: rgba(0,0,0,0.55);"></div>

    <div class="container text-center py-5 mt-4 position-relative">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Actualités</h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-warning">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<section class="closing-section py-5" style="background: linear-gradient(135deg, #005C73, #FFD700);">
    <div class="container">
        <div class="card shadow-lg border-0 mx-auto text-center p-5 text-white" style="max-width: 750px; border-radius: 25px; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
            <div class="card-body">
                <h3 class="fw-bold mb-3">
                    🌟 Restez Connectés à Nos Dernières Actualités !
                </h3>
                <p class="lead mb-4">
                    Abonnez-vous dès maintenant pour recevoir en exclusivité nos projets, événements et inspirations.
                </p>
                @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form class="d-flex justify-content-center flex-wrap gap-2" action="{{route('newsletter')}}" method="post">
                    @csrf
                    <input type="email" class="form-control form-control-lg w-50" name="mail" placeholder="Entrez votre email" required>
                    <button type="submit" class="btn btn-light btn-lg fw-bold px-4">
                        S’abonner
                    </button>
                </form>
                <div class="mt-4">
                    <a href="#contact" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-envelope me-2"></i> Nous Contacter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="actualites" class="news-section">
    <div class="container">
        <h2 class="section-title">Nos Dernières Actualités</h2>
        <div class="row g-4">
            @foreach ($actualite as $actu)
            <div class="col-lg-4 col-md-6">
                <div class="news-card">
                    <img src="{{ asset('storage/' . $actu->image_actu) }}" class="card-img-top" style="object-fit: cover; height: 250px;" alt="Image actualité">
                    
                


                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"
                        style="color: #005C73; font-size: 1.1rem;">
                        {{ $actu->titre_actu }}
                    </h5>
                    <div class="news-date"> {{ \Carbon\Carbon::parse($actu->date_actu)->format('d M Y') }}</div>

                    <p class="card-text text-truncate">
                        {{ Str::limit($actu->description_actu, 100) }}
                    </p>

                    <a href="{{ $actu->lien_actu }}" target="_blank" class="btn-gradient-outline mt-auto">
                        Lire la suite
                    </a>
                </div>
                </div>
            </div>
            @endforeach

           
 <div class="container d-flex justify-content-center mt-4">
        @if ($actualite->hasPages())
        <nav>
            <ul class="pagination custom-pagination">

                {{-- Bouton Précédent --}}
                @if ($actualite->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $actualite->appends(request()->query())->previousPageUrl() }}" rel="prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
                @endif

                {{-- Numéros de pages --}}
                @foreach ($actualite->getUrlRange(1, $actualite->lastPage()) as $page => $url)
                @if ($page == $actualite->currentPage())
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
                @if ($actualite->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $actualite->appends(request()->query())->nextPageUrl() }}" rel="next">
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
        </div>
    </div>
</section>

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

@endsection