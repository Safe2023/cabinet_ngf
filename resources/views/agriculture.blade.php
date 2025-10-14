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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M20,80 Q30,70 40,80 Q50,70 60,80 Q70,70 80,80" stroke="rgba(255,140,0,0.2)" stroke-width="2" fill="none"/><circle cx="25" cy="30" r="3" fill="rgba(255,215,0,0.3)"/><circle cx="75" cy="40" r="2" fill="rgba(255,215,0,0.3)"/><path d="M10,60 L15,55 L20,65 L25,50 L30,70" stroke="rgba(50,205,50,0.2)" stroke-width="2" fill="none"/></svg>');
    animation: nature-sway 18s infinite ease-in-out;
}

@keyframes nature-sway {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-8px) rotate(1deg); }
}

.hero-title {
    font-size: clamp(24px, 5vw, 3.5rem); /* taille fluide pour mobile */
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    text-align: center; /* centre le titre sur mobile */
}

.hero-subtitle {
    font-size: clamp(14px, 3vw, 1.3rem); /* taille adaptative */
    opacity: 0.9;
    margin-bottom: 2rem;
    text-align: center;
}

.hero-section .lead {
    font-size: clamp(12px, 3vw, 1rem);
    text-align: center;
}

/* Mobile & tablette */
@media (max-width: 992px) {
    .hero-section {
        padding: 60px 15px;
    }

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
        font-size: 5rem; /* réduire l’icône */
        opacity: 0.2;
    }
}

    .food-security-banner {
        background-color: #f8f9fa;
        /* bg-light */
        padding: 60px 0;
        text-align: center;
    }

    .food-security-banner h2 {
        color: #005C73;
        /* bleu NGF */
        font-weight: 700;
        margin-bottom: 40px;
    }

    .security-stat {
        background: #ffffff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .security-stat:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .security-number {
        font-size: 2rem;
        font-weight: 800;
        color: #FFD700;
        /* doré NGF */
        display: block;
        margin-bottom: 10px;
    }

    .security-stat div {
        font-size: 1rem;
        color: #005C73;
        /* bleu NGF */
        font-weight: 500;
    }


    .challenge-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        border-left: 6px solid #FFD700;
        position: relative;
        overflow: hidden;
    }

    .challenge-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: -100px;
        width: 200px;
        height: 100%;
        background: linear-gradient(45deg, transparent, rgba(255, 140, 0, 0.05), transparent);
        transform: skewX(-20deg);
        transition: right 0.6s ease;
    }

    .challenge-card:hover::before {
        right: 100%;
    }

    .challenge-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(255, 140, 0, 0.2);
        border-left-color: #005C73;
    }

    .challenge-icon {
        width: 80px;
        height: 80px;
        background: #FFD700;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 2.2rem;
        color: white;
        box-shadow: 0 8px 20px rgba(255, 140, 0, 0.3);
    }

    .challenge-title {
        color: #005C73;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.4rem;
    }

    .breadcrumb-custom {
        background: #F8F9FA;
        padding: 1rem 0;
    }

    /* Cycle général */
.seasonal-cycle {
    background: #f8f9fa;
    padding: 4rem 0;
}
/* Centre de la roue */
.cycle-center {
    width: 50%; /* prend 50% du diamètre de la roue */
    aspect-ratio: 1/1; /* toujours un cercle parfait */
    background: white;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center; /* centrer le texte multi-ligne */
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    padding: 10px; /* pour respirer autour du texte */
}

/* Icône et texte dans le centre */
.cycle-center i {
    font-size: 2rem;
    color: #005C73;
    margin-bottom: 0.5rem;
}

.cycle-center div {
    font-weight: 600;
    color: #005C73;
    font-size: clamp(14px, 2vw, 1rem); /* responsive texte */
}

/* La roue */
.cycle-wheel {
    position: relative;
    width: 400px;
    height: 400px;
    margin: 0 auto;
    border-radius: 50%;
    background: linear-gradient(45deg, #005C73, #2e7d32, #FFD700, #8B5E3C);
    display: flex;
    align-items: center;
    justify-content: center;
    animation: slow-rotate 40s infinite linear;
}

/* Rotation */
@keyframes slow-rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Centre de la roue */
.cycle-center {
    width: 200px;
    height: 200px;
    background: white;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* Marqueurs de saison */
.season-marker {
    position: absolute;
    width: 80px;
    height: 80px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    font-size: 1.5rem;
}

/* Positions desktop */
.season-marker:nth-child(1) { top: -40px; left: 50%; transform: translateX(-50%); color: #FFD700; }
.season-marker:nth-child(2) { right: -40px; top: 50%; transform: translateY(-50%); color: #2e7d32; }
.season-marker:nth-child(3) { bottom: -40px; left: 50%; transform: translateX(-50%); color: #005C73; }
.season-marker:nth-child(4) { left: -40px; top: 50%; transform: translateY(-50%); color: #8B5E3C; }

/* Texte du cycle */
.seasonal-cycle h2 {
    font-size: clamp(24px, 5vw, 2.5rem);
    text-align: center;
    margin-bottom: 3rem;
}

/* Colonnes descriptives */
.seasonal-cycle .row > div {
    margin-bottom: 2rem;
    text-align: center;
}

/* ✅ Responsive : mobile et tablette */
@media (max-width: 768px) {
    .cycle-wheel {
        width: 250px;
        height: 250px;
      
    }

    .cycle-center {
        width: 140px;
        height: 140px;
    }

    .season-marker {
        width: 50px;
        height: 50px;
        font-size: 1rem;
    }

    /* Réalignement des marqueurs sur mobile (en carré) */
    .season-marker:nth-child(1) { top: 0; left: 50%; transform: translateX(-50%); }
    .season-marker:nth-child(2) { top: 50%; right: 0; transform: translateY(-50%); }
    .season-marker:nth-child(3) { bottom: 0; left: 50%; transform: translateX(-50%); }
    .season-marker:nth-child(4) { top: 50%; left: 0; transform: translateY(-50%); }

    .seasonal-cycle h2 {
        font-size: 1.8rem;
    }

    .seasonal-cycle .row > div {
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
    }
}


    /* Soudure */

    .approach-section {
        background: #f8f9fa;
        /* fond léger */
        padding: 4rem 0;
    }



    .approach-grid {
        margin-top: 3rem;
    }

    /* Espacement harmonieux entre les cards */
    .approach-grid .col-md-4 {
        margin-bottom: 2rem;
    }

    .approach-card {
        background: #fff;
        border-radius: 20px;
        /*  padding: 2.5rem; */
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        border-bottom: 5px solid #005C73;
        transition: all 0.4s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .approach-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(34, 139, 34, 0.25);
        border-bottom: 5px solid #FFD700;
    }

    .approach-card::before {
        content: "";
        position: absolute;
        top: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(34, 139, 34, 0.05);
        transition: top 0.5s ease;
        z-index: 0;
    }

    .approach-card:hover::before {
        top: 0;
    }

    .approach-icon {
        font-size: 3rem;
        color: #005C73;
        margin-bottom: 1.2rem;
        transition: color 0.4s ease, transform 0.4s ease;
        z-index: 1;
        position: relative;
    }

    .approach-card:hover .approach-icon {
        color: #FFD700;
        transform: rotate(10deg) scale(1.2);
    }

    .approach-title {
        color: #005C73;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.3rem;
        z-index: 1;
        position: relative;
    }

    .approach-card p {
        color: #444;
        font-size: 1rem;
        line-height: 1.6;
        z-index: 1;
        position: relative;
    }

    .comparison-section {
        padding: 4rem 0;
    }

    .comparison-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        margin-top: 3rem;
    }

    .comparison-side {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .comparison-side.traditional {
        border-top: 6px solid #005C73;
    }

    .comparison-side.modern {
        border-top: 6px solid #FFD700;
    }

    .comparison-icon {
        font-size: 4rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .comparison-side.traditional .comparison-icon {
        color: #005C73;
    }

    .comparison-side.modern .comparison-icon {
        color: #FFD700;
    }

    .comparison-title {
        color: #005C73;
        font-weight: 700;
        font-size: 1.8rem;
        text-align: center;
        margin-bottom: 2rem;
    }

    .comparison-feature {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 0.5rem;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .comparison-feature:hover {
        background: #f8f9fa;
    }

    .feature-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        font-size: 0.9rem;
        color: white;
    }

    .traditional .feature-icon {
        background: #005C73;
    }

    .modern .feature-icon {
        background: #FFD700;
    }

    .success-stories {
        background: linear-gradient(135deg, #f9f9f9, #e6f7ff);
        /* Dégradé light */
        color: #333;
        padding: 4rem 0;
    }

    .story-card {
        background: #fff;
        border-radius: 20px;
        padding: 2rem;
        margin: 1rem 0;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    /* Hover avec effet lumineux */
    .story-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 35px rgba(0, 92, 115, 0.2);
    }

    /* Icônes stylées */
    .story-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: #005C73;
        transition: transform 0.4s ease, color 0.4s ease, text-shadow 0.4s ease;
    }

    .story-card:hover .story-icon {
        color: #FFD700;
        transform: scale(1.2) rotate(8deg);
        text-shadow: 0 0 15px rgba(50, 205, 50, 0.5);
    }

    /* Titres */
    .story-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #005C73;
    }

    /* Texte */
    .story-card p {
        font-size: 0.95rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 0.5rem;
    }

    /* Auteur / source */
    .story-card small {
        display: block;
        margin-top: 0.5rem;
        font-style: italic;
        color: #777;
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
        background: #1e7e1e;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(34, 139, 34, 0.3);
        color: white;
    }

    @media (max-width: 768px) {
        .comparison-container {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .cycle-wheel {
            width: 300px;
            height: 300px;
        }

        .cycle-center {
            width: 150px;
            height: 150px;
        }

        .season-marker {
            width: 60px;
            height: 60px;
            font-size: 1.2rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title" style="color: white;">Agriculture & Pastoralisme</h1>
                <p class="hero-subtitle">Nourrir le Monde, Préserver les Terres</p>
                <p class="lead">L'agriculture et le pastoralisme sont des activités millénaires, fondamentales pour la sécurité alimentaire mondiale et la préservation des écosystèmes. L'agriculture, science et art de cultiver les sols et d'élever les animaux, et le pastoralisme, élevage extensif valorisant les pâturages naturels, sont confrontés à des défis majeurs mais recèlent aussi un immense potentiel pour un avenir durable.</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fas fa-seedling" style="font-size: 8rem; opacity: 0.3;"></i>
            </div>
        </div>
    </div>
</section>

<!-- Food Security Banner -->
<section class="food-security-banner">
    <div class="container">
        <h2 class="custom-section-title" style="font-weight: 700;">Sécurité Alimentaire Mondiale</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="security-stat">
                    <span class="security-number">828M</span>
                    <div>Personnes sous-alimentées</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="security-stat">
                    <span class="security-number">3.1B</span>
                    <div>Sans alimentation saine</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="security-stat">
                    <span class="security-number">70%</span>
                    <div>Augmentation nécessaire</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="security-stat">
                    <span class="security-number">500M</span>
                    <div>Pasteurs dans le monde</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cycle Saisonnier -->
<section class="seasonal-cycle">
    <div class="container">
        <h2 class="custom-section-title" style="color:#005C73; font-weight: 700;">
            Cycle Agricole et Pastoral en Afrique
        </h2>
        <div class="cycle-wheel">
            <div class="season-marker"><i class="fas fa-cloud-sun"></i></div>
            <div class="season-marker"><i class="fas fa-cloud-rain"></i></div>
            <div class="season-marker"><i class="fas fa-tractor"></i></div>
            <div class="season-marker"><i class="fas fa-seedling"></i></div>
            <div class="cycle-center">
                <i class="fas fa-sync-alt" style="font-size: 2rem; color: #005C73; margin-bottom: 0.5rem;"></i>
                <div style="color:#005C73; font-weight: 600;">Cycle Naturel Africain</div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 text-center">
                <h5 style="color:#FFD700;">Saison sèche</h5>
                <p>Repos des sols, stockage des récoltes, transhumance pastorale.</p>
            </div>
            <div class="col-md-3 text-center">
                <h5 style="color:#2e7d32;">Saison des pluies</h5>
                <p>Semis, croissance rapide des cultures, pâturage abondant.</p>
            </div>
            <div class="col-md-3 text-center">
                <h5 style="color:#005C73;">Récoltes</h5>
                <p>Collecte des céréales, fruits et tubercules, marchés locaux.</p>
            </div>
            <div class="col-md-3 text-center">
                <h5 style="color:#8B5E3C;">Période de soudure</h5>
                <p>Faible disponibilité alimentaire, préparation du prochain cycle.</p>
            </div>
        </div>
    </div>
</section>


<!-- Défis et Opportunités -->
<section class="py-5">
    <div class="container">
        <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Défis et Opportunités</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="challenge-card">
                    <div class="challenge-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="challenge-title">Sécurité Alimentaire</h3>
                    <p>
                        En Afrique, de nombreuses familles font face à l’insécurité alimentaire à cause de la faible productivité agricole
                        et de la dépendance aux importations. Il est crucial d’accroître la production locale, tout en valorisant
                        les produits traditionnels et nutritifs.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="challenge-card">
                    <div class="challenge-icon">
                        <i class="fas fa-thermometer-full"></i>
                    </div>
                    <h3 class="challenge-title">Changement Climatique</h3>
                    <p>
                        Les sécheresses, les inondations et les irrégularités pluviométriques touchent fortement l’Afrique subsaharienne.
                        Les systèmes agricoles doivent s’adapter pour assurer la résilience des communautés rurales les plus vulnérables.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="challenge-card">
                    <div class="challenge-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="challenge-title">Gestion des Ressources</h3>
                    <p>
                        La pression démographique entraîne une surexploitation des sols et une raréfaction de l’eau.
                        Préserver la fertilité des terres et protéger les écosystèmes devient une priorité
                        pour éviter la désertification et les conflits liés aux ressources naturelles.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="challenge-card">
                    <div class="challenge-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="challenge-title">Conflits Fonciers</h3>
                    <p>
                        En Afrique de l’Ouest et de l’Est, les tensions entre agriculteurs et éleveurs s’accentuent
                        avec la rareté des pâturages et des points d’eau. Le dialogue communautaire et des politiques
                        foncières inclusives sont essentiels pour une cohabitation pacifique.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Comparaison Traditionnel/Moderne -->
<section class="comparison-section">
    <div class="container">
        <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">
            Agriculture en Afrique : Traditionnelle vs Moderne
        </h2>
        <div class="comparison-container">
            <!-- Agriculture Traditionnelle -->
            <div class="comparison-side traditional">
                <div class="comparison-icon">
                    <i class="fas fa-horse"></i>
                </div>
                <h3 class="comparison-title">Agriculture Traditionnelle</h3>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-hand-paper"></i></div>
                    <div>Main-d’œuvre manuelle et familiale</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-seedling"></i></div>
                    <div>Utilisation de semences locales</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-recycle"></i></div>
                    <div>Pratiques écologiques traditionnelles</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-users"></i></div>
                    <div>Savoir-faire communautaire</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                    <div>Dépendance aux saisons pluvieuses</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-heart"></i></div>
                    <div>Respect culturel et lien avec la terre</div>
                </div>
            </div>

            <!-- Agriculture Moderne -->
            <div class="comparison-side modern">
                <div class="comparison-icon">
                    <i class="fas fa-tractor"></i>
                </div>
                <h3 class="comparison-title">Agriculture Moderne</h3>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                    <div>Mécanisation et engins agricoles</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-dna"></i></div>
                    <div>Amélioration des semences</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-satellite"></i></div>
                    <div>Agriculture de précision (données & GPS)</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <div>Augmentation des rendements</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-droplet"></i></div>
                    <div>Irrigation moderne et durable</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-mobile-alt"></i></div>
                    <div>Technologies numériques (applis & mobile money)</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Notre Approche -->
<section class="approach-section">
    <div class="container">
        <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Notre Approche Intégrée</h2>
        <div class="row approach-grid">
            <div class="col-md-4 fade-up">
                <div class="approach-card ">
                    <div class="approach-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h4 class="approach-title">Équilibre Tradition-Innovation</h4>
                    <p>Combinaison des savoirs traditionnels avec les technologies modernes pour des solutions durables et adaptées.</p>
                </div>
            </div>

            <div class="col-md-4 fade-up">
                <div class="approach-card h-100">
                    <div class="approach-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="approach-title">Formation et Capacités</h4>
                    <p>Renforcement des compétences des agriculteurs et pasteurs pour adopter des pratiques résilientes.</p>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="approach-card h-100">
                    <div class="approach-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="approach-title">Dialogue et Médiation</h4>
                    <p>Facilitation du dialogue entre agriculteurs et pasteurs pour une coexistence pacifique et productive.</p>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="approach-card ">
                    <div class="approach-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="approach-title">Résilience Climatique</h4>
                    <p>Développement de systèmes agricoles et pastoraux adaptés aux changements climatiques.</p>
                </div>
            </div>

            <div class="col-md-4 fade-up">
                <div class="approach-card ">
                    <div class="approach-icon">
                        <i class="fas fa-chart-network"></i>
                    </div>
                    <h4 class="approach-title">Chaînes de Valeur</h4>
                    <p>Renforcement des filières agricoles et pastorales pour améliorer les revenus des producteurs.</p>
                </div>
            </div>


            <div class="col-md-4 fade-up">

                <div class="approach-card ">
                    <div class="approach-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="approach-title">Agroécologie</h4>
                    <p>Promotion de pratiques agroécologiques pour une agriculture productive et respectueuse de l'environnement.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="success-stories">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold section-title " style="color:#005C73;">Histoires de Réussite</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="story-card">
                    <div class="story-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="story-title">Augmentation des Rendements</div>
                    <p>"Grâce aux nouvelles techniques, nos récoltes ont doublé et nous avons diversifié nos cultures."</p>
                    <small>- Coopérative agricole, Burkina Faso</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="story-card">
                    <div class="story-icon">
                        <i class="fas fa-peace"></i>
                    </div>
                    <div class="story-title">Coexistence Pacifique</div>
                    <p>"Le dialogue a permis de résoudre nos conflits et de créer des couloirs de transhumance."</p>
                    <small>- Chef de communauté, Mali</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="story-card">
                    <div class="story-icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <div class="story-title">Autonomisation des Femmes</div>
                    <p>"Les groupements féminins nous ont permis d'accéder au crédit et aux marchés."</p>
                    <small>- Productrice, Sénégal</small>
                </div>
            </div>

        </div>
    </div>
</section>



<script>
    // Animation des statistiques
    function animateStats() {
        const stats = document.querySelectorAll('.security-number');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalValue = target.textContent;
                    const numericValue = parseFloat(finalValue.replace(/[^\d.]/g, ''));
                    const suffix = finalValue.replace(/[\d.]/g, '');

                    let current = 0;
                    const increment = numericValue / 50;

                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= numericValue) {
                            target.textContent = numericValue + suffix;
                            clearInterval(timer);
                        } else {
                            if (numericValue < 10) {
                                target.textContent = current.toFixed(1) + suffix;
                            } else {
                                target.textContent = Math.floor(current) + suffix;
                            }
                        }
                    }, 30);

                    observer.unobserve(target);
                }
            });
        });

        stats.forEach(stat => observer.observe(stat));
    }

    // Animation des cartes d'approche
    function animateApproachCards() {
        const cards = document.querySelectorAll('.approach-card');
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease';

                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);
            }, index * 150);
        });
    }

    window.addEventListener('load', () => {
        animateStats();
        setTimeout(animateApproachCards, 1000);
    });
</script>

@endsection