@extends('layouts.header')
@section('content')

<style>
  .hero-section {
    background: linear-gradient(135deg, #005C73 0%, #138496 100%);
    color: white;
    padding: 100px 0;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="30" cy="30" r="8" fill="rgba(255,255,255,0.1)"/><circle cx="70" cy="60" r="5" fill="rgba(255,255,255,0.1)"/><path d="M20,70 Q40,50 60,70 Q80,50 100,70" stroke="rgba(255,255,255,0.1)" stroke-width="2" fill="none"/></svg>');
    animation: water-flow 20s infinite ease-in-out;
}

@keyframes water-flow {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
}

.hero-title {
    font-size: clamp(24px, 5vw, 3.5rem); /* taille adaptative */
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    text-align: center; /* centre sur mobile */
}

.hero-subtitle {
    font-size: clamp(14px, 3vw, 1.3rem);
    opacity: 0.9;
    margin-bottom: 1.5rem;
    text-align: center;
}

.hero-section .lead {
    font-size: clamp(12px, 3vw, 1rem);
    text-align: center;
}

/* Mobile & tablette */
@media (max-width: 992px) {
    .hero-section .row {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hero-section .col-lg-8,
    .hero-section .col-lg-4 {
        max-width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }

    .hero-section .col-lg-4 i {
        font-size: 5rem;
        opacity: 0.2;
    }

    .hero-section {
        padding: 60px 15px;
    }
}


    .wash-stats {
        background: #e8f4f8;
        padding: 4rem 0;
    }

    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-top: 5px solid #005C73;
        margin-bottom: 2rem;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(23, 162, 184, 0.2);
    }

    .stat-number {
        font-size: 3.5rem;
        font-weight: 700;
        color: #FFD700;
        display: block;
        margin-bottom: 1rem;
    }

    .stat-label {
        color: #005C73;
        font-weight: 600;
        font-size: 1.2rem;
    }

    .stat-description {
        color: var(--medium-gray);
        font-size: 0.9rem;
        margin-top: 0.5rem;
    }

    .enjeu-card {
        background: white;
        border-radius: 15px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        border-left: 6px solid #005C73;
        position: relative;
        overflow: hidden;
    }

    /* Effet lumière au hover */
    .enjeu-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: -50px;
        width: 100px;
        height: 100%;
        background: linear-gradient(45deg, transparent, rgba(23, 162, 184, 0.05), transparent);
        transform: skewX(-15deg);
        transition: right 0.5s ease;
    }

    .enjeu-card:hover::before {
        right: 100%;
    }

    /* Effet global au hover */
    .enjeu-card:hover {
        transform: translateY(-7px) scale(1.02);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2),
            0 0 25px rgba(255, 215, 0, 0.5);
        /* halo doré */
    }

    /* Icône */
    .enjeu-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #005C73, #20c997);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 2rem;
        color: white;
        box-shadow: 0 5px 15px rgba(23, 162, 184, 0.3);
        transition: transform 0.4s ease, background 0.4s ease;
    }

    /* Animation icône au hover */
    .enjeu-card:hover .enjeu-icon {
        transform: rotate(10deg) scale(1.1);
        background: linear-gradient(135deg, #FFD700, #005C73);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.6);
    }

    /* Titre */
    .enjeu-title {
        color: #005C73;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.4rem;
        transition: color 0.4s ease;
    }

    .enjeu-card:hover .enjeu-title {
        color: #FFD700;
    }


    .process-section {
        background: var(--light-gray);
        padding: 4rem 0;
    }

    .process-step {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
    }

    .process-step:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .step-number {
        position: absolute;
        top: -15px;
        left: 30px;
        width: 40px;
        height: 40px;
        background: #005C73;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
        font-size: 1.2rem;
    }

    .step-icon {
        font-size: 2.5rem;
        color: #005C73;
        margin-bottom: 1rem;
    }

    .step-title {
        color: #005C73;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.3rem;
        margin-top: 1rem;
    }

    .breadcrumb-custom {
        background: var(--light-gray);
        padding: 1rem 0;
    }

    .impact-showcase {
        background: linear-gradient(135deg, #005C73, #20c997);
        color: white;
        padding: 4rem 0;
        text-align: center;
    }

    .impact-item {
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .impact-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
        opacity: 0.9;
    }

    .impact-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .cta-section {
        background: linear-gradient(135deg, #FFD700, #ffd700);
        padding: 4rem 0;
        text-align: center;
    }

    .btn-custom {
        background: #005C73;
        color: white;
        border: none;
        padding: 15px 35px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        font-size: 1.1rem;
    }

    .btn-custom:hover {
        background: #138496;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(23, 162, 184, 0.3);
        color: white;
    }

    .wash-cycle {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 3rem 0;
        flex-wrap: wrap;
    }

    .cycle-step {
        text-align: center;
        padding: 1rem;
        margin: 1rem;
        flex: 1;
        min-width: 200px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
    }

    .cycle-step:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 20px rgba(255, 215, 0, 0.5);
        /* glow doré */
    }

    .cycle-icon {
        width: 80px;
        height: 80px;
        background: #005C73;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 2rem;
        color: white;
        box-shadow: 0 5px 15px rgba(0, 92, 115, 0.3);
        transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cycle-step:hover .cycle-icon {
        background: #FFD700;
        color: #005C73;
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(255, 215, 0, 0.7);
        /* glow doré sur icône */
    }

    .cycle-title {
        color: #005C73;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .cycle-step:hover .cycle-title {
        color: #FFD700;
    }

    .cycle-arrow {
        font-size: 2rem;
        color: #005C73;
        margin: 0 1rem;
        transition: color 0.3s ease;
    }

    .cycle-step:hover~.cycle-arrow i {
        color: #FFD700;
    }

    @media (max-width: 768px) {
        .cycle-arrow {
            transform: rotate(90deg);
            margin: 1rem 0;
        }
    }
</style>
</head>

<body>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-title section-title " style="color: white;">Hygiène, Assainissement & Environnement</h1>
                    <p class="hero-subtitle">Fondements d'une Santé Publique Durable</p>
                    <p class="lead">L'hygiène, l'assainissement et la protection de l'environnement sont des piliers indissociables de la santé publique et du bien-être des populations. Un accès universel à des pratiques d'hygiène adéquates et à des infrastructures d'assainissement fiables est essentiel pour prévenir les maladies, garantir la dignité humaine et construire des communautés résilientes.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-hands-wash" style="font-size: 8rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- WASH Statistics -->
    <section class="wash-stats">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">L'Urgence WASH dans le Monde</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-card">
                        <span class="stat-number">2.2B</span>
                        <div class="stat-label">Sans Eau Potable</div>
                        <div class="stat-description">Personnes sans accès à l'eau potable gérée en sécurité</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <span class="stat-number">3.6B</span>
                        <div class="stat-label">Sans Assainissement</div>
                        <div class="stat-description">Personnes sans accès à un assainissement géré en sécurité</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <span class="stat-number">2.3B</span>
                        <div class="stat-label">Sans Hygiène</div>
                        <div class="stat-description">Personnes sans installations de lavage des mains</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <span class="stat-number">829K</span>
                        <div class="stat-label">Décès Annuels</div>
                        <div class="stat-description">Dus aux maladies diarrhéiques liées à l'eau</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cycle WASH -->
    <section class="py-5">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Le Cycle WASH Intégré</h2>
            <div class="wash-cycle">
                <div class="cycle-step">
                    <div class="cycle-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h4 style="color: #005C73;">Eau</h4>
                    <p>Accès à l'eau potable sûre et abordable</p>
                </div>
                <div class="cycle-arrow d-none d-md-block">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="cycle-step">
                    <div class="cycle-icon">
                        <i class="fas fa-toilet"></i>
                    </div>
                    <h4 style="color: #005C73;">Assainissement</h4>
                    <p>Installations sanitaires adéquates et gestion des déchets</p>
                </div>
                <div class="cycle-arrow d-none d-md-block">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="cycle-step">
                    <div class="cycle-icon">
                        <i class="fas fa-hands-wash"></i>
                    </div>
                    <h4 style="color: #005C73;">Hygiène</h4>
                    <p>Pratiques d'hygiène et lavage des mains</p>
                </div>
                <div class="cycle-arrow d-none d-md-block">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="cycle-step">
                    <div class="cycle-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 style="color: #005C73;">Environnement</h4>
                    <p>Protection et préservation des écosystèmes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enjeux Clés -->
    <section class="py-5">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Nos Enjeux Clés</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="enjeu-card">
                        <div class="enjeu-icon">
                            <i class="fas fa-droplet"></i>
                        </div>
                        <h3 class="enjeu-title">Accès à l'Eau Potable (WASH)</h3>
                        <p>Promotion de l'accès à l'eau potable, à des installations sanitaires sûres et à des pratiques d'hygiène essentielles (lavage des mains) pour réduire la morbidité et la mortalité liées aux maladies hydriques.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="enjeu-card">
                        <div class="enjeu-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h3 class="enjeu-title">Gestion des Eaux Usées</h3>
                        <p>Mise en place de systèmes efficaces de collecte, de traitement et d'élimination des eaux usées et des déchets solides, pour prévenir la pollution de l'environnement et protéger les ressources naturelles.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="enjeu-card">
                        <div class="enjeu-icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <h3 class="enjeu-title">Assainissement Urbain et Rural</h3>
                        <p>Développement de solutions d'assainissement adaptées aux contextes urbains (réseaux collectifs) et ruraux (assainissement autonome, latrines améliorées), en tenant compte des spécificités locales.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="enjeu-card">
                        <div class="enjeu-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="enjeu-title">Protection de l'Environnement</h3>
                        <p>Actions de sensibilisation et de mise en œuvre de pratiques respectueuses de l'environnement, telles que la gestion durable des ressources, la réduction de la pollution et la préservation des écosystèmes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus d'Intervention -->
    <section class="process-section">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Notre Processus d'Intervention</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 class="step-title">Diagnostic et Évaluation</h4>
                        <p>Analyse des besoins en WASH, évaluation des infrastructures existantes et identification des priorités d'intervention.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <h4 class="step-title">Conception et Planification</h4>
                        <p>Développement de solutions techniques adaptées au contexte local, planification des travaux et mobilisation des ressources.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4 class="step-title">Mise en Œuvre</h4>
                        <p>Construction des infrastructures, installation des équipements et formation des équipes locales pour la gestion et la maintenance.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="step-title">Suivi et Pérennité</h4>
                        <p>Monitoring de la qualité des services, accompagnement des communautés et évaluation de l'impact sur la santé publique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-showcase">
        <div class="container">
            <h2 class="custom-section-title" style="font-weight: 700;">Impact de Nos Interventions WASH</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="impact-item">
                        <div class="impact-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="impact-title">Réduction des Maladies</div>
                        <p>Diminution de 50% des maladies diarrhéiques dans les communautés bénéficiaires</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="impact-item">
                        <div class="impact-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="impact-title">Amélioration de l'Éducation</div>
                        <p>Augmentation de 30% de la fréquentation scolaire grâce aux installations WASH</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="impact-item">
                        <div class="impact-icon">
                            <i class="fas fa-female"></i>
                        </div>
                        <div class="impact-title">Autonomisation des Femmes</div>
                        <p>Réduction du temps consacré à la collecte d'eau, libérant du temps pour d'autres activités</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Animation des statistiques au scroll
        function animateStats() {
            const stats = document.querySelectorAll('.stat-number');
            stats.forEach(stat => {
                const finalValue = stat.textContent;
                stat.textContent = '0';

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            stat.textContent = finalValue;
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(stat);
            });
        }

        window.addEventListener('load', animateStats);
    </script>
    @endsection