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
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.hero-subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    margin-bottom: 2rem;
}

/* 📱 Mobile */
@media (max-width: 768px) {
    .hero-section {
        padding: 60px 15px;
    }

    .hero-title {
        font-size: 2rem;
        text-align: center;
    }

    .hero-subtitle,
    .hero-section .lead {
        font-size: 1rem;
        text-align: center;
    }

    .hero-section .col-lg-8,
    .hero-section .col-lg-4 {
        text-align: center;
        margin-bottom: 20px;
    }

    .hero-section .col-lg-4 i {
        font-size: 5rem;
        opacity: 0.2;
    }

    .hero-section .row {
        flex-direction: column;
    }
}

        
        .pillar-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            border-left: 5px solid #005C73;
            position: relative;
            overflow: hidden;
        }
        
        .pillar-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #005C73, #FFD700);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }
        
        .pillar-card:hover::before {
            transform: scaleX(1);
        }
        
        .pillar-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(40,167,69,0.2);
        }
        
        .pillar-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #005C73, #20c997);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: white;
            box-shadow: 0 5px 15px rgba(40,167,69,0.3);
        }
        
        .pillar-title {
            color: #005C73;
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.4rem;
        }
        
        .breadcrumb-custom {
            background: #F8F9FA;
            padding: 1rem 0;
        }
        
        .impact-section {
            background: #d4edda;
            padding: 4rem 0;
            position: relative;
        }
        
        .impact-item {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .impact-item:hover {
            transform: scale(1.05);
        }
        
        .impact-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #005C73;
            display: block;
        }
        
        .impact-label {
            color:#6C757D;
            font-weight: 500;
            margin-top: 0.5rem;
        }
        
        .process-timeline {
    position: relative;
    padding: 3rem 0;
}

.process-step {
    display: flex;
    align-items: center;
    margin-bottom: 3rem;
    padding: 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    position: relative;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s forwards;
}

.process-step:nth-child(even) {
    flex-direction: row-reverse;
    background: #d4edda;
}

.process-step:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 35px rgba(0, 92, 115, 0.25);
}

.step-number {
    width: 60px;
    height: 60px;
    background: #005C73;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: white;
    margin: 0 2rem;
    flex-shrink: 0;
    font-size: 1.5rem;
    box-shadow: 0 5px 15px rgba(40,167,69,0.3);
    transition: all 0.3s ease;
}

.step-number:hover {
    background: #FFD700;
    color: #ffffff;
    transform: scale(1.2);
    box-shadow: 0 8px 25px rgba(50,205,50,0.4);
}

.step-content h4 {
    color: #005C73;
    margin-bottom: 1rem;
}

/* Animation d'apparition */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .process-step {
        flex-direction: column;
        text-align: center;
    }

    .process-step:nth-child(even) {
        flex-direction: column;
        background: #d4edda;
    }

    .step-number {
        margin: 0 0 1rem 0;
    }

    .step-content h4 {
        margin-top: 0.5rem;
    }
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
            background: #1e7e34;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(40,167,69,0.3);
            color: white;
        }
        
        .community-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .community-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .community-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .community-icon {
            font-size: 3rem;
            color: #005C73;
            margin-bottom: 1rem;
        }
        .community-icon:hover {
            font-size: 3rem;
            color: #FFD700;
            margin-bottom: 1rem;
        }
        .custom-section-title {
    font-size: clamp(24px, 5vw, 40px); /* taille responsive */
    font-weight: 700;
    color: #005C73;
    text-align: center;
    line-height: 1.2;
    margin: 0 auto 30px auto;
    max-width: 90%; /* limite la largeur sur mobile */
    word-wrap: break-word; /* coupe le texte long */
    position: relative;
}

/* Soulignement centré */
.custom-section-title::after {
    content: "";
    display: block;
    width: 60px; /* largeur de la barre */
    height: 3px; /* épaisseur de la barre */
    background-color: #f99828;
    margin: 15px auto 0 auto; /* centré sous le texte */
    border-radius: 2px; /* coins arrondis optionnel */
}

    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-title section-title" style="color: white;">Développement Local</h1>
                    <p class="hero-subtitle">Construire l'Avenir de Nos Territoires</p>
                    <p class="lead">Le développement local est au cœur de la vitalité de nos communautés. C'est un processus dynamique qui vise à renforcer les capacités endogènes d'un territoire pour améliorer la qualité de vie de ses habitants.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-city" style="font-size: 8rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-section">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Notre Impact sur les Territoires</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="impact-item">
                        <span class="impact-number">150+</span>
                        <div class="impact-label">Territoires Accompagnés</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="impact-item">
                        <span class="impact-number">5000+</span>
                        <div class="impact-label">Emplois Créés</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="impact-item">
                        <span class="impact-number">300+</span>
                        <div class="impact-label">Projets Réalisés</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="impact-item">
<<<<<<< HEAD
                        <span class="impact-number">100%</span>
=======
                        <span class="impact-number">85%</span>
>>>>>>> d75851da67972809a7dfdb66abdaee1966f90223
                        <div class="impact-label">Taux de Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Piliers du Développement Local -->
    <section class="py-5">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Les Piliers du Développement Local</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="pillar-title">Développement Économique</h3>
                        <p>Soutien à l'entrepreneuriat local, promotion des filières économiques spécifiques au territoire, et création d'emplois non délocalisables pour dynamiser l'économie locale.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon">
                            <i class="fas fa-road"></i>
                        </div>
                        <h3 class="pillar-title">Infrastructures et Services</h3>
                        <p>Réhabilitation et construction d'infrastructures essentielles (routes, écoles, centres de santé) et amélioration de l'accès aux services publics pour tous les citoyens.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="pillar-title">Participation Citoyenne</h3>
                        <p>Renforcement de la démocratie participative, implication des citoyens dans les décisions locales et promotion d'une gouvernance transparente et responsable.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3 class="pillar-title">Patrimoine et Culture</h3>
                        <p>Promotion des richesses culturelles et naturelles du territoire, développement du tourisme durable et préservation de l'identité locale.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus d'Accompagnement -->
    <section class="py-5" style="background: #F8F9FA;">
        <div class="container">
           <h2 class="custom-section-title">Notre Processus d'Accompagnement</h2>

            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Diagnostic Territorial</h4>
                        <p>Analyse approfondie des forces, faiblesses, opportunités et menaces du territoire pour identifier les leviers de développement.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Concertation et Vision Partagée</h4>
                        <p>Animation d'ateliers participatifs avec tous les acteurs locaux pour co-construire une vision commune du développement.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Stratégie et Plan d'Action</h4>
                        <p>Élaboration d'une stratégie de développement avec des objectifs clairs et un plan d'action opérationnel.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Mise en Œuvre et Suivi</h4>
                        <p>Accompagnement dans la réalisation des projets avec un suivi régulier et des ajustements si nécessaire.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Acteurs du Développement -->
    <section class="py-5">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Les Acteurs du Développement Local</h2>
            <div class="community-grid">
                <div class="community-card">
                    <div class="community-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h4 style="color: #005C73;">Collectivités Locales</h4>
                    <p>Pilotage des politiques publiques locales et coordination des actions de développement.</p>
                </div>
                <div class="community-card">
                    <div class="community-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h4 style="color: #005C73;">Entreprises Locales</h4>
                    <p>Création d'emplois, innovation et dynamisme économique du territoire.</p>
                </div>
                <div class="community-card">
                    <div class="community-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 style="color: #005C73;">Associations</h4>
                    <p>Animation sociale, services aux habitants et portage de projets citoyens.</p>
                </div>
                <div class="community-card">
                    <div class="community-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h4 style="color: #005C73;">Citoyens</h4>
                    <p>Participation active aux décisions et initiatives locales pour un développement inclusif.</p>
                </div>
            </div>
        </div>
    </section>

 @endsection