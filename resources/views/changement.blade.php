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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="30" r="15" fill="rgba(255,107,53,0.1)"/><circle cx="80" cy="70" r="10" fill="rgba(0,168,107,0.1)"/><path d="M10,80 Q50,60 90,80" stroke="rgba(255,255,255,0.1)" stroke-width="2" fill="none"/></svg>');
            animation: climate-flow 25s infinite linear;
        }
        
        @keyframes climate-flow {
            0% { transform: translateX(-100px); }
            100% { transform: translateX(100px); }
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .urgency-banner {
            background: linear-gradient(90deg, #FFD700, #ff8c42);
            color: white;
            padding: 1rem 0;
            text-align: center;
            font-weight: 600;
            animation: pulse-banner 3s infinite ease-in-out;
        }
        
        @keyframes pulse-banner {
            0%, 100% { opacity: 0.9; }
            50% { opacity: 1; }
        }
        
        .climate-metric {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s ease;
            border-top: 4px solid #005C73;
        }
        
        .climate-metric:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,119,190,0.2);
        }
        
        .metric-value {
            font-size: 3rem;
            font-weight: 700;
            color: #FFD700;
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .metric-label {
            color: #005C73;
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .metric-trend {
            font-size: 0.9rem;
            color: #6C757D;
            margin-top: 0.5rem;
        }
        
        .causes-section {
            background: #e3f2fd;
            padding: 4rem 0;
        }
        
        .cause-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 5px solid #005C73;
        }
        
        .cause-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(0,0,0,0.15);
        }
        
        .cause-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #FFD700, #ff8c42);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: white;
        }
        
       .solution-card {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transition: all 0.5s ease;
    border-top: 5px solid #005C73;
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s forwards;
}

.solution-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0,168,107,0.1), transparent);
    transition: left 0.5s ease;
}

.solution-card:hover::before {
    left: 100%;
}

.solution-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 20px 40px rgba(0,168,107,0.25);
}

.solution-icon {
    font-size: 3rem;
    color: #005C73;
    margin-bottom: 1.5rem;
    transition: all 0.4s ease;
}

.solution-card:hover .solution-icon {
    color: #FFD700;
    transform: rotate(10deg) scale(1.2);
}

.solution-title {
    color: #005C73;
    font-weight: 600;
    margin-bottom: 1rem;
    font-size: 1.3rem;
    transition: color 0.4s ease;
}

.solution-card:hover .solution-title {
    color: #FFD700;
}

@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
}

        
        .breadcrumb-custom {
            background: var(--#F8F9FA);
            padding: 1rem 0;
        }
        
        .consequences-timeline {
            position: relative;
            padding: 3rem 0;
        }
        
        .consequence-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-left: 5px solid #FFD700;
        }
        
        .consequence-icon {
            width: 50px;
            height: 50px;
            background: #FFD700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            color: white;
            flex-shrink: 0;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #005C73, #00c975);
            padding: 4rem 0;
            text-align: center;
            color: white;
        }
        
        .btn-custom {
            background: #FFD700;
            color: #005C73;
            border: none;
            padding: 15px 35px;
            border-radius: 30px;
            font-weight: 700;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 1.1rem;
        }
        
        .btn-custom:hover {
            background: #e6c200;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255,215,0,0.3);
            color: #005C73;
        }
        
        .progress-bar-custom {
            height: 8px;
            border-radius: 4px;
            background: var(--#F8F9FA);
            margin: 1rem 0;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #FFD700, #005C73);
            border-radius: 4px;
            transition: width 2s ease;
        }
    </style>
</head>
<body>
   
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-title section-title" style="color: white;">Changement Climatique</h1>
                    <p class="hero-subtitle">Comprendre, Agir, S'Adapter</p>
                    <p class="lead">Le changement climatique est le défi majeur de notre siècle, une transformation profonde et rapide des équilibres climatiques mondiaux, principalement induite par les activités humaines.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-globe-americas" style="font-size: 8rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Métriques Climatiques -->
    <section class="py-5">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">État Actuel du Climat</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="climate-metric">
                        <span class="metric-value">+1.1°C</span>
                        <div class="metric-label">Réchauffement Global</div>
                        <div class="metric-trend">Depuis l'ère préindustrielle</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="climate-metric">
                        <span class="metric-value">421 ppm</span>
                        <div class="metric-label">CO₂ Atmosphérique</div>
                        <div class="metric-trend">Record historique en 2024</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="climate-metric">
                        <span class="metric-value">3.3 mm</span>
                        <div class="metric-label">Élévation des Mers</div>
                        <div class="metric-trend">Par an depuis 1993</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="climate-metric">
                        <span class="metric-value">13%</span>
                        <div class="metric-label">Glace Arctique Perdue</div>
                        <div class="metric-trend">Par décennie</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Causes -->
    <section class="causes-section">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Principales Causes Anthropiques</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="cause-card">
                        <div class="cause-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4 style="color: #005C73;">Production d'Énergie</h4>
                        <p>75% des émissions mondiales proviennent de la combustion des énergies fossiles (charbon, pétrole, gaz naturel) pour la production d'électricité et de chaleur.</p>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 75%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="cause-card">
                        <div class="cause-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h4 style="color: #005C73;">Transports</h4>
                        <p>16% des émissions globales dues aux véhicules routiers, au transport maritime, aérien et ferroviaire utilisant des combustibles fossiles.</p>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 16%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="cause-card">
                        <div class="cause-icon">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h4 style="color: #005C73;">Déforestation</h4>
                        <p>11% des émissions liées à l'abattage des forêts qui libère le carbone stocké et réduit la capacité d'absorption du CO₂.</p>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 11%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="cause-card">
                        <div class="cause-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h4 style="color: #005C73;">Agriculture Intensive</h4>
                        <p>24% des émissions dues à l'élevage (méthane), à l'utilisation d'engrais azotés et aux pratiques agricoles non durables.</p>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 24%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conséquences -->
    <section class="py-5">
        <div class="container">
            <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Conséquences Observées</h2>
            <div class="consequences-timeline">
                <div class="consequence-item">
                    <div class="consequence-icon">
                        <i class="fas fa-thermometer-full"></i>
                    </div>
                    <div>
                        <h4 style="color: #005C73;">Vagues de Chaleur Extrêmes</h4>
                        <p>Augmentation de la fréquence et de l'intensité des canicules, avec des records de température battus chaque année.</p>
                    </div>
                </div>
                <div class="consequence-item">
                    <div class="consequence-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <div>
                        <h4 style="color: #005C73;">Inondations et Sécheresses</h4>
                        <p>Intensification des phénomènes météorologiques extrêmes avec des précipitations plus intenses et des périodes de sécheresse prolongées.</p>
                    </div>
                </div>
                <div class="consequence-item">
                    <div class="consequence-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <div>
                        <h4 style="color: #005C73;">Fonte des Glaciers</h4>
                        <p>Accélération de la fonte des glaciers et des calottes glaciaires, contribuant à l'élévation du niveau des mers.</p>
                    </div>
                </div>
                <div class="consequence-item">
                    <div class="consequence-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div>
                        <h4 style="color: #005C73;">Perte de Biodiversité</h4>
                        <p>Bouleversement des écosystèmes et disparition d'espèces animales et végétales incapables de s'adapter rapidement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions -->
   <section class="py-5" style="background: #F8F9FA;">
    <div class="container">
        <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Nos Solutions pour l'Action Climatique</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <h4 class="solution-title">Transition Énergétique</h4>
                    <p>Développement des énergies renouvelables (solaire, éolien, hydraulique) et amélioration de l'efficacité énergétique pour réduire notre dépendance aux énergies fossiles.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h4 class="solution-title">Agriculture Durable</h4>
                    <p>Promotion de pratiques agricoles respectueuses de l'environnement, favorisant la séquestration du carbone et la réduction des émissions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-forest"></i>
                    </div>
                    <h4 class="solution-title">Protection des Écosystèmes</h4>
                    <p>Actions de reboisement, restauration des zones humides et conservation de la biodiversité pour renforcer la résilience des écosystèmes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="solution-title">Adaptation et Résilience</h4>
                    <p>Développement de stratégies d'adaptation pour les territoires vulnérables, incluant la gestion des risques et la planification résiliente.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="solution-title">Sensibilisation</h4>
                    <p>Information et mobilisation du public sur les enjeux climatiques pour encourager des comportements durables et soutenir les politiques climatiques.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h4 class="solution-title">Économie Circulaire</h4>
                    <p>Promotion de modèles économiques durables basés sur la réduction, la réutilisation et le recyclage pour minimiser l'impact environnemental.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation des barres de progression
        window.addEventListener('load', function() {
            const progressBars = document.querySelectorAll('.progress-fill');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
        });
    </script>
@endsection
