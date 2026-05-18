@extends('layouts.header')
@section('content')
<style>
    .section-title {
        font-size: 2.8rem;
        font-weight: bold;
        color: #005C73;
        /* Bleu Foncé du logo */
        margin-bottom: 60px;
        text-align: center;
    }

    .hero-international {
        background: linear-gradient(135deg, #005C73 0%, #1e7e1e 100%);
        padding: 100px 0;
        text-align: center;
    }

    .hero-international h1 {
        font-size: 3.5rem;
        font-weight: 700;
        color: #005C73;
        margin-bottom: 20px;
    }

    .hero-international p {
        font-size: 1.3rem;
        color: #6c757d;
        max-width: 900px;
        margin: 0 auto 40px;
    }

    /* ✅ Responsive */
    @media (max-width: 992px) {

        /* Tablette */
        .hero-international {
            padding: 70px 20px;
        }

        .hero-international h1 {
            font-size: 2.5rem;
        }

        .hero-international p {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 576px) {

        /* Téléphone */
        .hero-international {
            padding: 50px 15px;
        }

        .hero-international h1 {
            font-size: 1.8rem;
            line-height: 2.2rem;
        }

        .hero-international p {
            font-size: 1rem;
        }
    }

    .btn-custom-primary {
        background-color: #005C73;
        /* Bleu Foncé du logo */
        color: white;
        border: 2px solid#005C73;
        padding: 15px 30px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom-primary:hover {
        background-color: #FFD700;
        /* Jaune Vif du logo au survol */
        color: #005C73;
        border-color: #005C73;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .services-list-section {
        padding: 80px 0;
        background-color: #fff;
    }

    .service-item-card {
        background-color: #fff;
        border: 1px solid #e9ecef;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        height: 100%;
    }

    .service-item-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-color: #FFD700;
        /* Jaune Vif au survol */
    }

    .service-item-card .card-body {
        padding: 25px;
    }

    .service-item-card .card-title {
        font-size: 1.6rem;
        font-weight: bold;
        color: #005C73;
        margin-bottom: 15px;
    }

    .service-item-card .card-text {
        color: #555;
    }

    .service-item-card i {
        font-size: 2.5rem;
        color: #FFD700;
        margin-bottom: 20px;
    }

    .process-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }

    .process-step {
        text-align: center;
        padding: 30px;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .process-step .step-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: #FFD700;
        margin-bottom: 15px;
    }

    .process-step h4 {
        font-size: 1.8rem;
        color: #005C73;
        margin-bottom: 15px;
    }

    .why-ngf-section {
        padding: 80px 0;
        background-color: #fff;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
    }

    .feature-item i {
        font-size: 2rem;
        color: #FFD700;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .feature-item h5 {
        font-size: 1.4rem;
        color: #005C73;
        margin-bottom: 5px;
    }

    .cta-section {
        background-color: #005C73;
        /* Bleu Foncé */
        color: white;
        padding: 80px 0;
        text-align: center;
    }

    .cta-section h2 {
        color: white;
        margin-bottom: 30px;
    }
</style>


<!-- Hero Section -->
<section class="hero-international">
    <div class="container">
        <h1 class="text-white">Assistance Technique Internationale</h1>
        <p class="text-white">
            NGF EXPERTISE CONSULTING met son savoir-faire et son réseau international à votre disposition pour vous accompagner
            dans vos projets de développement durable et d'ingénierie à travers le monde.
        </p>

    </div>
</section>

<!-- Services List Section -->
<section class="services-list-section">
    <div class="container">
        <h2 class="custom-section-title ">Nos Domaines d'Intervention en Assistance Technique</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-item-card">
                    <div class="card-body">
                        <i class="fas fa-globe"></i>
                        <h5 class="card-title">Études et Diagnostics Transnationaux</h5>
                        <p class="card-text">Réalisation d'études de faisabilité, d'impact environnemental et social, et de diagnostics sectoriels à l'échelle internationale.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item-card">
                    <div class="card-body">
                        <i class="fas fa-hands-helping"></i>
                        <h5 class="card-title">Renforcement de Capacités et Formation</h5>
                        <p class="card-text">Conception et animation de programmes de formation pour les acteurs locaux et internationaux sur les thématiques du développement durable.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item-card">
                    <div class="card-body">
                        <i class="fas fa-project-diagram"></i>
                        <h5 class="card-title">Gestion et Suivi de Projets Complexes</h5>
                        <p class="card-text">Appui à la gestion de projets multi-acteurs et multi-pays, de la planification à l'évaluation finale.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item-card">
                    <div class="card-body">
                        <i class="fas fa-lightbulb"></i>
                        <h5 class="card-title">Conseil Stratégique et Institutionnel</h5>
                        <p class="card-text">Accompagnement des gouvernements, ONG et organisations internationales dans l'élaboration de politiques et stratégies de développement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item-card">
                    <div class="card-body">
                        <i class="fas fa-chart-line"></i>
                        <h5 class="card-title">Évaluation de Programmes et Politiques</h5>
                        <p class="card-text">Évaluation indépendante de l'efficacité et de l'impact des programmes et politiques de développement à l'échelle régionale ou internationale.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item-card">
                    <div class="card-body">
                        <i class="fas fa-users-cog"></i>
                        <h5 class="card-title">Mobilisation des Parties Prenantes</h5>
                        <p class="card-text">Facilitation du dialogue et de la collaboration entre les différentes parties prenantes pour des projets inclusifs et durables.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section class="process-section">
    <div class="container">
        <h2 class="custom-section-title">Notre Approche en Assistance Technique</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h4>Analyse des Besoins</h4>
                    <p>Compréhension approfondie de vos défis et objectifs spécifiques.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h4>Conception de la Solution</h4>
                    <p>Élaboration d'une stratégie d'assistance sur mesure et adaptée au contexte.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h4>Mise en Œuvre et Suivi</h4>
                    <p>Déploiement de l'assistance avec un suivi rigoureux et une adaptation continue.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h4>Évaluation et Capitalisation</h4>
                    <p>Mesure des résultats et capitalisation des leçons apprises pour l'avenir.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why NGF Section -->
<section class="why-ngf-section">
    <div class="container">
        <h2 class="custom-section-title">Pourquoi Choisir NGF pour Votre Assistance technique ?</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-item">
                    <i class="fas fa-network-wired"></i>
                    <div>
                        <h5>Réseau Global d'Experts</h5>
                        <p>Accès à un vaste réseau de spécialistes et de partenaires à travers le monde.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <i class="fas fa-crosshairs"></i>
                    <div>
                        <h5>Approche Ciblée et Adaptée</h5>
                        <p>Des solutions conçues spécifiquement pour les contextes locaux et les défis transnationaux.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <i class="fas fa-award"></i>
                    <div>
                        <h5>Expérience Avérée</h5>
                        <p>Des années d'expérience dans la conduite de projets complexes en Afrique et au-delà.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/600x400?text=Assistance+Internationale" class="img-fluid rounded" alt="Assistance Internationale">
            </div>
        </div>
    </div>
</section>

@endsection