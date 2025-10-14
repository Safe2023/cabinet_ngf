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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M20,50 L30,40 L40,60 L50,30 L60,70 L70,45 L80,55" stroke="rgba(255,204,0,0.3)" stroke-width="3" fill="none"/><circle cx="25" cy="45" r="2" fill="rgba(255,204,0,0.4)"/><circle cx="75" cy="50" r="3" fill="rgba(255,204,0,0.4)"/></svg>');
    animation: electric-pulse 8s infinite ease-in-out;
}

@keyframes electric-pulse {
    0%, 100% { opacity: 0.3; transform: translateX(0px); }
    50% { opacity: 0.7; transform: translateX(10px); }
}

.hero-title {
    font-size: clamp(24px, 5vw, 3.5rem); /* taille fluide */
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


    .energy-access-stats {
        background: #e6f0ff;
        padding: 4rem 0;
    }

    .access-stat-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-top: 5px solid  #005C73;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }

    .access-stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg,  #005C73, #FFD700);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }

    .access-stat-card:hover::before {
        transform: scaleX(1);
    }

    .access-stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 102, 255, 0.2);
    }

    .stat-icon {
        font-size: 3rem;
        color:  #005C73;
        margin-bottom: 1rem;
    }

    .stat-number {
        font-size: 2.8rem;
        font-weight: 700;
        color: #FFD700;
        display: block;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        color: #005C73;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .stat-description {
        color:  #6C757D;
        font-size: 0.9rem;
        margin-top: 0.5rem;
    }

    .solution-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        border-left: 6px solid #FFD700;
        position: relative;
        overflow: hidden;
    }

    .solution-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: -150px;
        width: 300px;
        height: 100%;
        background: linear-gradient(45deg, transparent, rgba(255, 204, 0, 0.05), transparent);
        transform: skewX(-25deg);
        transition: right 0.6s ease;
    }

    .solution-card:hover::before {
        right: 100%;
    }

    .solution-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(255, 204, 0, 0.2);
        border-left-color:  #005C73;
    }

    .solution-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #FFD700, #ffdd44);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 2.2rem;
        color: #005C73;
        box-shadow: 0 8px 20px rgba(255, 204, 0, 0.3);
    }

    .solution-title {
        color: #005C73;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.4rem;
    }

    .breadcrumb-custom {
        background: #F8F9FA;
        padding: 1rem 0;
    }

    .comparison-section {
    background: #F8F9FA;
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

.comparison-side.urban {
    border-top: 6px solid #005C73;
}

.comparison-side.rural {
    border-top: 6px solid #FFD700;
}

.comparison-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    text-align: center;
}

.comparison-side.urban .comparison-icon {
    color: #005C73;
}

.comparison-side.rural .comparison-icon {
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
    background: #005C73;
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

.urban .feature-icon {
    background: #005C73;
}

.rural .feature-icon {
    background: #FFD700;
}

/* 📱 Mobile & tablette */
@media (max-width: 768px) {
    .comparison-container {
        grid-template-columns: 1fr; /* une seule colonne */
        gap: 2rem;
    }

    .comparison-side {
        padding: 1.5rem;
    }

    .comparison-icon {
        font-size: 3rem; /* réduire l’icône */
        margin-bottom: 1rem;
    }

    .comparison-title {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .comparison-feature {
        font-size: 0.9rem;
    }

    .feature-icon {
        width: 25px;
        height: 25px;
        font-size: 0.8rem;
        margin-right: 0.7rem;
    }
}


   .tech-showcase {
    background: linear-gradient(135deg, #f9f9f9, #e6f7ff); /* Light background */
    color: #333;
    padding: 4rem 0;
}

.tech-item {
    background: #fff;
    border-radius: 20px;
    padding: 2.5rem 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    text-align: center;
    height: 100%;
}

/* Effet hover avec élévation */
.tech-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,92,115,0.15);
}

/* Icônes colorées */
.tech-icon {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    color: #005C73;
    transition: all 0.4s ease;
}

/* Icône animée au survol */
.tech-item:hover .tech-icon {
    color:#FFD700;
    transform: scale(1.2) rotate(8deg);
    text-shadow: 0 0 15px rgba(138,43,226,0.4);
}

/* Titre */
.tech-title {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: #005C73;
}

/* Texte */
.tech-item p {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.6;
}


/* SECTION */
.impact-timeline {
  position: relative;
  padding: 4rem 0;
}

.timeline-line {
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 4px;
  background: linear-gradient(to bottom, #005C73, #FFD700);
  transform: translateX(-50%);
}

/* ITEM */
.impact-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 3rem;
  position: relative;
  animation: fadeSlide 0.8s ease forwards;
  opacity: 0;
}

.impact-item:nth-child(even) {
  flex-direction: row-reverse;
}

/* CONTENT */
.impact-content {
  background: #fff;
  border-radius: 16px;
  padding: 2rem;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  width: 45%;
  position: relative;
  transition: all 0.4s ease;
}

.impact-content:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 28px rgba(0, 64, 128, 0.25);
}

/* Décalage */
.impact-item:nth-child(even) .impact-content {
  margin-right: 10%;
}

.impact-item:nth-child(odd) .impact-content {
  margin-left: 10%;
}

/* BADGE */
.impact-badge {
  position: absolute;
  top: -30px; /* décalage vers le haut */
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

.impact-badge:hover {
  background: #FFD700;
  color: #005C73;
  transform: translateX(-50%) scale(1.1);
  box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
}

/* ANIMATIONS */
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

/* RESPONSIVE */
@media (max-width: 768px) {
  .timeline-line {
    left: 30px;
  }

  .impact-item,
  .impact-item:nth-child(even) {
    flex-direction: row;
  }

  .impact-content,
  .impact-item:nth-child(even) .impact-content,
  .impact-item:nth-child(odd) .impact-content {
    width: calc(100% - 80px);
    margin-left: 80px;
    margin-right: 0;
  }

  .impact-badge {
    left: 30px;
    transform: translateX(0);
  }
}

</style>

<!-- Breadcrumb -->


<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title section-title" style="color: white;">Électrification</h1>
                <p class="hero-subtitle">Éclairer l'Avenir des Villes et des Campagnes</p>
                <p class="lead">L'accès à l'électricité est un droit fondamental et un moteur essentiel du développement. L'électrification urbaine et rurale vise à apporter cette énergie vitale à toutes les populations, qu'elles résident dans les centres urbains dynamiques ou les zones rurales isolées.</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fas fa-bolt" style="font-size: 8rem; opacity: 0.3;"></i>
            </div>
        </div>
    </div>
</section>

<!-- Energy Access Statistics -->
<section class="energy-access-stats">
    <div class="container">
        <h2 class="custom-section-title " style="color: #005C73; font-weight: 700;">L'Accès à l'Électricité dans le Monde</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="access-stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <span class="stat-number">733M</span>
                    <div class="stat-label">Sans Électricité</div>
                    <div class="stat-description">Personnes sans accès à l'électricité</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="access-stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <span class="stat-number">84%</span>
                    <div class="stat-label">En Milieu Rural</div>
                    <div class="stat-description">Vivent dans les zones rurales</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="access-stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <span class="stat-number">75%</span>
                    <div class="stat-label">En Afrique</div>
                    <div class="stat-description">Concentrés en Afrique subsaharienne</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="access-stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span class="stat-number">+100M</span>
                    <div class="stat-label">Connectés/An</div>
                    <div class="stat-description">Nouvelles connexions annuelles</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparaison Urbain/Rural -->
<section class="comparison-section">
    <div class="container">
        <h2 class="custom-section-title ">Électrification : Urbaine vs Rurale</h2>
        <div class="comparison-container">
            <div class="comparison-side urban">
                <div class="comparison-icon">
                    <i class="fas fa-city"></i>
                </div>
                <h3 class="comparison-title">Électrification Urbaine</h3>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-network-wired"></i></div>
                    <div>Réseaux électriques centralisés</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-building"></i></div>
                    <div>Modernisation des infrastructures</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                    <div>Intégration énergies renouvelables</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-car-battery"></i></div>
                    <div>Électrification des transports</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-thermometer-half"></i></div>
                    <div>Chauffage électrique durable</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-chart-bar"></i></div>
                    <div>Efficacité énergétique</div>
                </div>
            </div>

            <div class="comparison-side rural">
                <div class="comparison-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="comparison-title">Électrification Rurale</h3>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-solar-panel"></i></div>
                    <div>Solutions hors réseau (off-grid)</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-network-wired"></i></div>
                    <div>Extension des réseaux électriques</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-battery-full"></i></div>
                    <div>Kits solaires individuels</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-water"></i></div>
                    <div>Micro-centrales hydroélectriques</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-project-diagram"></i></div>
                    <div>Mini-réseaux communautaires</div>
                </div>
                <div class="comparison-feature">
                    <div class="feature-icon"><i class="fas fa-users"></i></div>
                    <div>Gestion communautaire</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions et Enjeux -->
<section class="py-5">
    <div class="container">
        <h2 class="custom-section-title ">Nos Solutions d'Électrification</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3 class="solution-title">Accès aux Services Essentiels</h3>
                    <p>L'électricité permet l'accès à l'éclairage, à la réfrigération (conservation des médicaments et aliments), à la recharge des téléphones, et facilite l'utilisation d'équipements éducatifs et médicaux.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="solution-title">Développement Économique Local</h3>
                    <p>L'électrification stimule la création d'activités génératrices de revenus (petites entreprises, artisanat), prolonge les heures d'activité et améliore la productivité agricole.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="solution-title">Transition Énergétique</h3>
                    <p>Promotion des sources d'énergie propres et renouvelables pour réduire les émissions de gaz à effet de serre et lutter contre le changement climatique, en particulier dans les zones urbaines.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="solution-title">Technologies Adaptées</h3>
                    <p>Développement de solutions innovantes et adaptées à chaque contexte : réseaux intelligents, stockage d'énergie, systèmes hybrides et technologies de pointe pour l'efficacité énergétique.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Showcase -->
<section class="tech-showcase">
  <div class="container">
    <h2 class="custom-section-title ">
      Technologies d'Électrification
    </h2>
    <div class="row g-4">
      
      <div class="col-md-4">
        <div class="tech-item">
          <div class="tech-icon">
            <i class="fas fa-solar-panel"></i>
          </div>
          <div class="tech-title">Énergie Solaire</div>
          <p>Panneaux photovoltaïques, centrales solaires et systèmes de stockage pour une énergie propre et durable.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tech-item">
          <div class="tech-icon">
            <i class="fas fa-wind"></i>
          </div>
          <div class="tech-title">Énergie Éolienne</div>
          <p>Éoliennes de différentes tailles adaptées aux conditions locales pour exploiter la force du vent.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tech-item">
          <div class="tech-icon">
            <i class="fas fa-microchip"></i>
          </div>
          <div class="tech-title">Réseaux Intelligents</div>
          <p>Smart grids et systèmes de gestion intelligente pour optimiser la distribution et la consommation d'énergie.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Impact Timeline -->
<section class="py-5" style="background: #F8F9FA;">
    <div class="container">
        <h2 class="custom-section-title ">Impact Transformateur de l'Électrification</h2>
        <div class="impact-timeline">
            <div class="timeline-line"></div>

            <div class="impact-item">
                <div class="impact-badge"><i class="fas fa-lightbulb"></i></div>
                <div class="impact-content">
                    <h4 style="color: #005C73;">Amélioration de la Qualité de Vie</h4>
                    <p>L'éclairage électrique prolonge les heures d'activité, améliore la sécurité et permet l'accès à l'information et à l'éducation.</p>
                </div>
            </div>

            <div class="impact-item">
                <div class="impact-badge"><i class="fas fa-hospital"></i></div>
                <div class="impact-content">
                    <h4 style="color: #005C73;">Santé et Éducation</h4>
                    <p>Fonctionnement des centres de santé, conservation des vaccins, éclairage des écoles et accès aux technologies éducatives.</p>
                </div>
            </div>

            <div class="impact-item">
                <div class="impact-badge"><i class="fas fa-female"></i></div>
                <div class="impact-content">
                    <h4 style="color: #005C73;">Autonomisation des Femmes</h4>
                    <p>Réduction du temps consacré aux tâches ménagères, création d'opportunités économiques et amélioration de la sécurité.</p>
                </div>
            </div>

            <div class="impact-item">
                <div class="impact-badge"><i class="fas fa-seedling"></i></div>
                <div class="impact-content">
                    <h4 style="color: #005C73;">Développement Durable</h4>
                    <p>Contribution aux Objectifs de Développement Durable et à la lutte contre le changement climatique.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->


<script>
    // Animation des statistiques
    function animateStats() {
        const stats = document.querySelectorAll('.stat-number');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalValue = target.textContent;
                    const numericValue = parseInt(finalValue.replace(/\D/g, ''));
                    const suffix = finalValue.replace(/\d/g, '');

                    let current = 0;
                    const increment = numericValue / 60;

                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= numericValue) {
                            target.textContent = numericValue + suffix;
                            clearInterval(timer);
                        } else {
                            target.textContent = Math.floor(current) + suffix;
                        }
                    }, 25);

                    observer.unobserve(target);
                }
            });
        });

        stats.forEach(stat => observer.observe(stat));
    }

    // Animation des cartes de comparaison
    function animateComparison() {
        const features = document.querySelectorAll('.comparison-feature');
        features.forEach((feature, index) => {
            setTimeout(() => {
                feature.style.opacity = '0';
                feature.style.transform = 'translateX(-20px)';
                feature.style.transition = 'all 0.5s ease';

                setTimeout(() => {
                    feature.style.opacity = '1';
                    feature.style.transform = 'translateX(0)';
                }, 100);
            }, index * 100);
        });
    }

    window.addEventListener('load', () => {
        animateStats();
        setTimeout(animateComparison, 1000);
    });
</script>
@endsection