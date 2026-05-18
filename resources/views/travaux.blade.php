@extends('layouts.header')
@section('content')

<style>
   

    .hero-section {
        background: linear-gradient(135deg, #005C73 0%, #1e7e1e 100%);
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
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect x="10" y="40" width="20" height="30" fill="rgba(253,126,20,0.1)"/><rect x="40" y="30" width="15" height="40" fill="rgba(255,215,0,0.1)"/><rect x="70" y="35" width="18" height="35" fill="rgba(70,130,180,0.1)"/></svg>');
        animation: construction-pulse 15s infinite ease-in-out;
    }

    @keyframes construction-pulse {

        0%,
        100% {
            opacity: 0.3;
        }

        50% {
            opacity: 0.6;
        }
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-subtitle {
        font-size: 1.3rem;
        opacity: 0.9;
        margin-bottom: 2rem;
    }

    .construction-stats {
        background: var(--light-gray);
        padding: 4rem 0;
    }

    .stat-block {
        background: white;
        border-radius: 15px;
        padding: 2.5rem;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-bottom: 4px solid #FFD700;
        margin-bottom: 2rem;
    }

    .stat-block:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(253, 126, 20, 0.2);
    }

    .stat-value {
        font-size: 3rem;
        font-weight: 700;
        color:#495057;
        display: block;
        margin-bottom: 0.5rem;
    }

    .stat-title {
        color: #005C73;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .stat-detail {
        color: var(--medium-gray);
        font-size: 0.9rem;
        margin-top: 0.5rem;
    }

    .project-type-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        border-top: 6px solid #005C73;
        position: relative;
        overflow: hidden;
    }

    .project-type-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #005C73, #FFD700);
        transition: left 0.5s ease;
    }

    .project-type-card:hover::before {
        left: 0;
    }

    .project-type-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(70, 130, 180, 0.2);
    }

    .project-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #005C73, #5a9bd4);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 2.2rem;
        color: white;
        box-shadow: 0 5px 15px rgba(70, 130, 180, 0.3);
    }

    .project-title {
        color: #005C73;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.4rem;
    }

    .breadcrumb-custom {
        background: var(--light-gray);
        padding: 1rem 0;
    }

    .expertise-showcase {
        background: linear-gradient(135deg, #f9f9f9, #e6f3fb);
        /* light bg */
        color: #333;
        padding: 4rem 0;
    }

    .expertise-item {
        background: #fff;
        border-radius: 20px;
        padding: 2.5rem 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    /* Effet hover */
    .expertise-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 92, 115, 0.15);
    }

    /* Icônes stylées */
    .expertise-icon {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        color: #005C73;
        transition: all 0.4s ease;
    }

    /* Animation au survol */
    .expertise-item:hover .expertise-icon {
        color: #FFD700;
        transform: scale(1.2) rotate(6deg);
        text-shadow: 0 0 15px rgba(90, 155, 212, 0.4);
    }

    /* Titre */
    .expertise-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #005C73;
    }

    /* Texte */
    .expertise-item p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.6;
    }


    .process-timeline {
    position: relative;
    padding: 4rem 0;
}

.timeline-line {
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 5px;
    background: linear-gradient(to bottom, #005C73, #FFD700);
    transform: translateX(-50%);
    border-radius: 5px;
}

.timeline-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 4rem;
    position: relative;
    animation: fadeSlide 0.8s ease forwards;
    opacity: 0;
}

.timeline-item:nth-child(even) {
    flex-direction: row-reverse;
}

.timeline-content {
    background: #fff;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    width: 45%;
    position: relative;
    transition: all 0.4s ease;
}

.timeline-content:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 12px 28px rgba(0, 92, 115, 0.25);
}

.timeline-item:nth-child(even) .timeline-content {
    margin-right: 10%;
}

.timeline-item:nth-child(odd) .timeline-content {
    margin-left: 10%;
}

.timeline-badge {
    position: absolute;
    top: -30px;
    left: 50%;
    transform: translateX(-50%);
    width: 65px;
    height: 65px;
    background: #005C73;
    border: 3px solid #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: #FFD700;
    box-shadow: 0 6px 18px rgba(0, 64, 128, 0.3);
    z-index: 10;
    transition: all 0.3s ease;
}

.timeline-badge:hover {
    background: #FFD700;
    color: #005C73;
    transform: translateX(-50%) scale(1.1);
    box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
}

@keyframes fadeSlide {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .timeline-line {
        left: 30px;
    }
    .timeline-item,
    .timeline-item:nth-child(even) {
        flex-direction: row;
    }
    .timeline-content,
    .timeline-item:nth-child(even) .timeline-content,
    .timeline-item:nth-child(odd) .timeline-content {
        width: calc(100% - 80px);
        margin-left: 80px;
        margin-right: 0;
    }
    .timeline-badge {
        left: 30px;
        transform: translateX(0);
    }
}

    .cta-section {
        background: linear-gradient(135deg, #FFD700, #ffd700);
        padding: 4rem 0;
        text-align: center;
    }

    .btn-custom {
        background:#495057;
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
        background: #343a40;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(73, 80, 87, 0.3);
        color: white;
    }

    .infrastructure-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .infrastructure-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-bottom: 4px solid #FFD700;
    }

    .infrastructure-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .infrastructure-icon {
        font-size: 3rem;
        color: #005C73;
        margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
        .timeline-connector {
            left: 30px;
        }

        .timeline-item,
        .timeline-item:nth-child(even) {
            flex-direction: row;
        }

        .timeline-content,
        .timeline-item:nth-child(even) .timeline-content,
        .timeline-item:nth-child(odd) .timeline-content {
            width: calc(100% - 80px);
            margin-left: 80px;
            margin-right: 0;
        }

        .timeline-badge {
            left: 30px;
        }
    }
</style>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-title" style="color: white;">Travaux Publics</h1>
                    <p class="hero-subtitle">Bâtir les Fondations de Demain</p>
                    <p class="lead">Les travaux publics sont le moteur invisible du développement de nos sociétés. Ils constituent l'ensemble des infrastructures et aménagements essentiels qui façonnent notre quotidien, de nos routes à nos réseaux d'eau, en passant par nos bâtiments publics.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-hard-hat" style="font-size: 8rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="construction-stats">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Notre Expertise en Chiffres</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-block">
                        <span class="stat-value">500+</span>
                        <div class="stat-title">Projets Réalisés</div>
                        <div class="stat-detail">Infrastructures majeures construites</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-block">
                        <span class="stat-value">2000km</span>
                        <div class="stat-title">Routes Construites</div>
                        <div class="stat-detail">Réseau routier développé</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-block">
                        <span class="stat-value">150</span>
                        <div class="stat-title">Ouvrages d'Art</div>
                        <div class="stat-detail">Ponts, tunnels et structures</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-block">
                        <span class="stat-value">25</span>
                        <div class="stat-title">Années d'Expérience</div>
                        <div class="stat-detail">Expertise reconnue</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types de Travaux Publics -->
    <section class="py-5">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Types de Travaux Publics</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="project-type-card">
                        <div class="project-icon">
                            <i class="fas fa-road"></i>
                        </div>
                        <h3 class="project-title">Infrastructures de Transport</h3>
                        <p>Construction et entretien de routes, autoroutes, ponts, tunnels, voies ferrées et infrastructures aéroportuaires et portuaires, pour assurer la mobilité des personnes et des biens.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="project-type-card">
                        <div class="project-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3 class="project-title">Réseaux et Canalisations (VRD)</h3>
                        <p>Mise en place et maintenance des réseaux d'eau potable, d'assainissement, d'électricité, de gaz et de télécommunications, indispensables au fonctionnement des villes et des campagnes.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="project-type-card">
                        <div class="project-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="project-title">Génie Civil et Ouvrages d'Art</h3>
                        <p>Réalisation d'ouvrages complexes tels que barrages, digues, fondations spéciales, travaux souterrains et structures de génie civil, garantissant la sécurité et la durabilité des infrastructures.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="project-type-card">
                        <div class="project-icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <h3 class="project-title">Aménagements Urbains</h3>
                        <p>Création et réhabilitation d'espaces publics (places, parcs), de zones d'activités, de lotissements et d'aménagements paysagers, pour améliorer le cadre de vie et l'attractivité des territoires.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus de Réalisation -->
   <section class="process-timeline-section py-5" style="background: #f7f9fc;">
    <div class="container">
        <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Notre Processus de Réalisation</h2>

        <div class="process-timeline">
            <div class="timeline-line"></div>

            <div class="timeline-item">
                <div class="timeline-badge">1</div>
                <div class="timeline-content">
                    <h4>Étude de Faisabilité</h4>
                    <p>Analyse technique, économique et environnementale du projet. Évaluation des contraintes et des opportunités du site.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-badge">2</div>
                <div class="timeline-content">
                    <h4>Conception et Plans</h4>
                    <p>Élaboration des plans détaillés, calculs de structure et spécifications techniques. Obtention des autorisations nécessaires.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-badge">3</div>
                <div class="timeline-content">
                    <h4>Préparation du Chantier</h4>
                    <p>Mobilisation des équipes et du matériel. Préparation du terrain et mise en place des mesures de sécurité.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-badge">4</div>
                <div class="timeline-content">
                    <h4>Réalisation des Travaux</h4>
                    <p>Exécution des travaux selon les normes de qualité et de sécurité. Suivi rigoureux du planning et du budget.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-badge">5</div>
                <div class="timeline-content">
                    <h4>Livraison et Maintenance</h4>
                    <p>Réception des ouvrages, formation des équipes de maintenance et mise en place du suivi post-livraison.</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Expertise Showcase -->
    <section class="expertise-showcase">
        <div class="container">
            <h2 class="custom-section-title" style="color:#005C73;">
                Notre Expertise Technique
            </h2>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="expertise-item">
                        <div class="expertise-icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <div class="expertise-title">Ingénierie Avancée</div>
                        <p>Maîtrise des technologies de pointe et des méthodes de construction innovantes pour des projets complexes.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="expertise-item">
                        <div class="expertise-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="expertise-title">Développement Durable</div>
                        <p>Intégration des principes environnementaux dans tous nos projets pour un développement responsable.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="expertise-item">
                        <div class="expertise-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="expertise-title">Sécurité Maximale</div>
                        <p>Respect strict des normes de sécurité et mise en place de protocoles rigoureux sur tous nos chantiers.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Infrastructure Types -->
    <!--  <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" style="color: #005C73; font-weight: 700;">Infrastructures Réalisées</h2>
            <div class="infrastructure-grid">
                <div class="infrastructure-card">
                    <div class="infrastructure-icon">
                        <i class="fas fa-bridge"></i>
                    </div>
                    <h4 style="color: #005C73;">Ponts et Viaducs</h4>
                    <p>Ouvrages d'art pour franchir vallées, rivières et obstacles naturels</p>
                </div>
                <div class="infrastructure-card">
                    <div class="infrastructure-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h4 style="color: #005C73;">Barrages</h4>
                    <p>Infrastructures hydrauliques pour la gestion de l'eau et l'énergie</p>
                </div>
                <div class="infrastructure-card">
                    <div class="infrastructure-icon">
                        <i class="fas fa-subway"></i>
                    </div>
                    <h4 style="color: #005C73;">Tunnels</h4>
                    <p>Passages souterrains pour routes, métros et réseaux techniques</p>
                </div>
                <div class="infrastructure-card">
                    <div class="infrastructure-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h4 style="color: #005C73;">Aéroports</h4>
                    <p>Infrastructures aéroportuaires complètes et modernes</p>
                </div>
                <div class="infrastructure-card">
                    <div class="infrastructure-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h4 style="color: #005C73;">Ports</h4>
                    <p>Installations portuaires pour le transport maritime et fluvial</p>
                </div>
                <div class="infrastructure-card">
                    <div class="infrastructure-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h4 style="color: #005C73;">Bâtiments Publics</h4>
                    <p>Hôpitaux, écoles, administrations et équipements collectifs</p>
                </div>
            </div>
        </div>
    </section> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation des statistiques
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-value');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/\D/g, ''));
                const suffix = counter.textContent.replace(/\d/g, '');
                let current = 0;
                const increment = target / 100;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target + suffix;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current) + suffix;
                    }
                }, 20);
            });
        }

        // Observer pour déclencher l'animation au scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });

        const statsSection = document.querySelector('.construction-stats');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
    @endsection