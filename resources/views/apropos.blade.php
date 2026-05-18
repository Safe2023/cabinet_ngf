@extends('layouts.header')
@section('content')

<style>
    .about-section {
       padding: 80px 0 20px 0;

        background-color: #f8f9fa;
    }

    .about-section h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #005C73;
        margin-bottom: 40px;
    }

    .about-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #495057;
        margin-bottom: 20px;
    }

    .about-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #495057;
        margin-bottom: 20px;
    }

    .about-section .mission-vision-card {
        background-color: #ffffff;
        border-left: 5px solid #FFD700;
        /* Bordure verte */
        padding: 30px;
        border-radius: 8px;
        min-height: 100%;
        /* même hauteur */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .about-section .mission-vision-card h3 {
        color: #005C73;
        font-size: 1.8rem;
        margin-bottom: 15px;
        font-weight: 600;
    }

    /* Effet hover */
    .about-section .mission-vision-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .about-section .stats-card {
        background-color: #28a745;
        color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        margin-bottom: 30px;
    }

    .about-section .stats-card h3 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .about-section .stats-card p {
        font-size: 1.2rem;
        color: #ffffff;
        margin-bottom: 0;
    }

    .about-section .img-fluid {
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
</style>

<!-- Page Header Start -->
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
        <h1 class="display-2 text-white mb-3 animated slideInDown">A propos</h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-warning">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">A propos</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center section-title ">
                <h2>À Propos de NGF EXPERTISE CONSULTING</h2>
            </div>
        </div>
        <div class="row align-items-center ">
            <div class="col-md-6">
                <h5 class="text-uppercase fw-semibold mb-3 text-center" style="color: #005C73;">Qui sommes-nous ?</h5>
                <p>
                    Chez <strong>NGF Expertise Consulting</strong>, nous accompagnons les entreprises et organisations
                    dans la conception et la mise en œuvre de leurs projets stratégiques.
                    Notre rôle est de comprendre vos enjeux, d’analyser vos besoins et de vous proposer
                    des solutions sur mesure, innovantes et adaptées à votre réalité.
                </p>

                <p>
                    Notre approche repose sur trois piliers essentiels :
                    <strong>l’écoute</strong>, pour saisir la spécificité de chaque organisation ;
                    <strong>l’expertise</strong>, afin d’apporter des recommandations claires et efficaces ;
                    et <strong>le suivi</strong>, pour garantir des résultats concrets et mesurables.
                </p>

                <p>
                    Que ce soit dans le domaine de la <em>stratégie et du management</em>,
                    de la <em>finance et de l’audit</em>, de la <em>transformation digitale</em>
                    ou encore de la <em>formation et du coaching</em>,
                    nous mettons à votre disposition une équipe compétente et expérimentée.
                </p>

                <p>
                    Avec plus de <strong>10 ans d’expérience</strong> et une
                    <strong>cinquantaine de projets menés avec succès</strong>,
                    <strong>NGF Expertise Consulting</strong> est votre partenaire de confiance
                    pour transformer vos ambitions en réussites durables.
                </p>

                <!-- <p>
                    Opère au Bénin et dans la sous-région Ouest africaine.
                    Nous réunissons un personnel permanent multidisciplinaire ayant capitalisé de longues années d’expériences
                    solides dans des structures reconnues, béninoises et internationales. Nous disposons également d’un réseau
                    de collaborateurs expérimentés pour répondre aux défis les plus complexes.
                </p>
                <p>
                    Notre siège national est situé à Kindonou-Cotonou/Bénin. Nous sommes fiers de notre capacité à
                    offrir des solutions adaptées aux contextes locaux tout en respectant les standards internationaux.
                </p> -->
            </div>
            <div class="col-md-6">
                <img src="img/propos.jpeg" class="img-fluid" alt="Notre Équipe">
            </div>
        </div>

        <div class="row  about-section">
            <div class="col-md-6 mb-4">
                <div class="mission-vision-card">
                    <h3>Notre Mission</h3>
                    <p>
                        Faciliter l'opérationnalisation et la mise en œuvre des politiques, stratégies, et plans nationaux,
                        régionaux et locaux de développement durable. Nous appuyons également les dynamiques locales de
                        structuration et de développement de la société civile et de son tissu économique.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="mission-vision-card">
                    <h3>Notre Vision</h3>
                    <p>
                        Favoriser le développement de capacité conceptuelle et technique pour des cadres africains et
                        conduire des études socio-économiques, environnementales pour les orientations stratégiques de développement,
                        contribuant ainsi à un avenir durable pour l'Afrique de l'Ouest.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection