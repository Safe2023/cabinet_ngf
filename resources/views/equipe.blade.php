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
            color: #004080; /* Bleu Foncé du logo */
            margin-bottom: 60px;
            text-align: center;
        }
        .news-card {
            background-color: #fff;
            border: 1px solid #e9ecef;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            height: 100%; /* Ensure cards in a row have equal height */
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-color: #FFD700; /* Jaune Vif au survol */
        }
        .news-card img {
            width: 100%;
            height: 200px; /* Fixed height for news images */
            object-fit: cover;
        }
        .news-card-body {
            padding: 25px;
        }
        .news-card-body h5 {
            font-size: 1.4rem;
            font-weight: bold;
            color: #004080; /* Bleu Foncé du logo */
            margin-bottom: 10px;
        }
        .news-card-body .news-date {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 15px;
        }
        .news-card-body p {
            font-size: 1rem;
            color: #495057;
            margin-bottom: 20px;
        }
        .news-card-body .btn-read-more {
            background-color: #FFD700; /* Jaune Vif du logo */
            color: #004080; /* Bleu Foncé du logo */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .news-card-body .btn-read-more:hover {
            background-color: #004080; /* Bleu Foncé au survol */
            color: #FFD700; /* Jaune Vif au survol */
        }
        .closing-section .btn-custom {
            background-color: #004080; /* Bleu Foncé du logo */
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .closing-section .btn-custom:hover {
            background-color: #FFD700; /* Jaune Vif au survol */
            color: #004080; /* Bleu Foncé au survol */
        }
    </style>
</head>
<body>

    <section id="actualites" class="news-section">
        <div class="container">
            <h2 class="section-title">Nos Dernières Actualités</h2>
            <div class="row g-4">
                <!-- News Article 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <img src="https://via.placeholder.com/400x200?text=Actualite+1" class="card-img-top" alt="Actualité 1">
                        <div class="news-card-body">
                            <h5>Lancement d'un Projet Pilote d'Agriculture Durable</h5>
                            <div class="news-date">20 août 2025</div>
                            <p>NGF EXPERTISE CONSULTING est fier d'annoncer le démarrage d'un projet innovant visant à promouvoir des pratiques agricoles respectueuses de l'environnement...</p>
                            <a href="#" class="btn btn-read-more">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- News Article 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <img src="https://via.placeholder.com/400x200?text=Actualite+2" class="card-img-top" alt="Actualité 2">
                        <div class="news-card-body">
                            <h5>Formation sur la Gestion des Déchets Solides Urbains</h5>
                            <div class="news-date">15 juillet 2025</div>
                            <p>Notre équipe a récemment animé une session de formation intensive pour les collectivités locales sur les meilleures pratiques de gestion des déchets...</p>
                            <a href="#" class="btn btn-read-more">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- News Article 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <img src="https://via.placeholder.com/400x200?text=Actualite+3" class="card-img-top" alt="Actualité 3">
                        <div class="news-card-body">
                            <h5>NGF Partenaire d'un Sommet Régional sur le Climat</h5>
                            <div class="news-date">5 juin 2025</div>
                            <p>Nous avons eu l'honneur de participer en tant que partenaire clé au Sommet Régional sur le Changement Climatique, partageant notre expertise...</p>
                            <a href="#" class="btn btn-read-more">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Add more news articles as needed -->

            </div>
        </div>
    </section>

    <!-- Closing Section -->
    <section class="closing-section text-center py-5 bg-light">
        <div class="container">
            <h3 class="mb-3">Restez Informés de Nos Dernières Actualités !</h3>
            <p class="lead mb-4">Abonnez-vous à notre newsletter ou contactez-nous pour plus d'informations sur nos projets et événements.</p>
            <a href="#contact" class="btn btn-custom btn-lg">Nous Contacter</a>
        </div>
    </section>

   @endsection


