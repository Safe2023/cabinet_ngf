@extends('layouts.header')
@section('content')


<section class="hero-section-hydraulique">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h1 class="hero-title">Hydraulique & Développement Rural</h1>
        <p class="hero-subtitle">Eau, infrastructures et résilience des communautés rurales</p>
        <p class="lead">
          L'accès fiable à l'eau potable, la gestion durable des ressources hydriques et le développement des infrastructures rurales
          sont essentiels pour améliorer la santé, la sécurité alimentaire et les conditions de vie en milieu rural. Des solutions
          adaptées, participatives et durables renforcent l'autonomie et la résilience des communautés.
        </p>

        <!-- petites puces optionnelles (responsive) -->
        <ul class="hero-features list-unstyled">
          <li><i class="fa-solid fa-check me-2" aria-hidden="true"></i>Forages & pompages durables</li>
          <li><i class="fa-solid fa-check me-2" aria-hidden="true"></i>Gestion participative de l'eau</li>
          <li><i class="fa-solid fa-check me-2" aria-hidden="true"></i>Maintenance et formation locale</li>
        </ul>
      </div>

      <div class="col-lg-4 text-center">
        <i class="fa-solid fa-water hero-icon" aria-hidden="true"></i>
        <p class="visually-hidden">Icône : goutte d'eau</p>
      </div>
    </div>
  </div>
</section>

<style>
.project-img {
  height: 280px; 
  object-fit: cover;
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}


.project-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  border-radius: 12px;
}
.project-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.2);
}
.hero-section-hydraulique{
    background: linear-gradient(135deg, #005C73 0%, #1e7e1e 100%);
  padding: 70px 0;
  color: #ffffff;
}
.hero-section-hydraulique .hero-title{
  color: #ffffff;
  font-weight: 700;
  font-size: 2.4rem;
  margin-bottom: 0.3rem;
}
.hero-section-hydraulique .hero-subtitle{
  font-size: 1.05rem;
  margin-bottom: 1rem;
  opacity: 0.95;
}
.hero-section-hydraulique .lead{
  font-size: 1rem;
  line-height: 1.6;
  max-width: 60rem;
}
.hero-section-hydraulique .hero-icon{
  font-size: 8rem;
  opacity: 0.18;
  margin-top: 10px;
}
.hero-section-hydraulique .hero-features li{
  margin-bottom: 0.6rem;
  font-weight: 500;
}
@media (max-width: 991.98px){
  .hero-section-hydraulique{
    padding: 50px 0;
    text-align: center;
  }
  .hero-section-hydraulique .lead{
    max-width: 100%;
  }
  .hero-section-hydraulique .hero-icon{
    margin-top: 20px;
  }
}
.solution-icon {
  color: #005C73;
  transition: color 0.3s ease, transform 0.3s ease;
}


.solution-card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.solution-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.solution-card:hover .solution-icon {
  color: #FFD700; 
}
.solution-card .card-title {
  color: #005C73;
}
.service-img {
  height: 220px; 
  object-fit: cover;
}


.service-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}
</style>

<section class="solutions-hydraulique py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color:#005C73;">Nos Solutions Hydrauliques</h2>
      <p class="text-muted">
        Des approches durables et adaptées pour répondre aux besoins en eau potable et en infrastructures rurales.
      </p>
    </div>
    <div class="row g-4">

      <!-- Solution 1 -->
      <div class="col-md-4">
        <div class="card solution-card h-100 text-center border-0">
          <div class="card-body">
            <i class="fa-solid fa-faucet fa-3x mb-3 solution-icon"></i>
            <h5 class="card-title fw-bold">Accès à l’eau potable</h5>
            <p class="card-text">
              Forages, puits modernes et réseaux de distribution pour assurer une eau de qualité aux communautés.
            </p>
          </div>
        </div>
      </div>

      <!-- Solution 2 -->
      <div class="col-md-4">
        <div class="card solution-card h-100 text-center border-0">
          <div class="card-body">
            <i class="fa-solid fa-hand-holding-water fa-3x mb-3 solution-icon"></i>
            <h5 class="card-title fw-bold">Gestion durable de l’eau</h5>
            <p class="card-text">
              Stratégies innovantes et participatives pour préserver les ressources hydriques et renforcer la résilience climatique.
            </p>
          </div>
        </div>
      </div>

      <!-- Solution 3 -->
      <div class="col-md-4">
        <div class="card solution-card h-100 text-center border-0">
          <div class="card-body">
            <i class="fa-solid fa-people-carry-box fa-3x mb-3 solution-icon"></i>
            <h5 class="card-title fw-bold">Infrastructures rurales</h5>
            <p class="card-text">
              Construction et réhabilitation d’ouvrages hydrauliques avec accompagnement technique et social des populations.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="services" class="py-5">
  <div class="container">
    <h2 class="text-center mb-5" style="color:#005C73; font-weight:700;">
      Nos Services Hydrauliques
    </h2>
    <div class="row g-4">
      
      <!-- Service 1 -->
      <div class="col-md-4">
        <div class="card service-card h-100 border-0">
          <img src="img/gestion.jpg" class="card-img-top service-img" alt="Gestion de l'eau">
          <div class="card-body text-center">
            <h5 class="card-title" style="color:#2e7d32;">Gestion de l’Eau</h5>
            <p class="card-text">
              Études, conception et entretien de réseaux d’eau potable et d’irrigation,
              pour garantir un accès fiable et durable à la ressource.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Service 2 -->
      <div class="col-md-4">
        <div class="card service-card h-100 border-0">
          <img src="img/assainissement1.webp" class="card-img-top service-img" alt="Assainissement">
          <div class="card-body text-center">
            <h5 class="card-title" style="color:#2e7d32;">Assainissement</h5>
            <p class="card-text">
              Solutions complètes et durables pour la collecte, le traitement et la valorisation
              des eaux usées et pluviales, respectueuses de l’environnement.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Service 3 -->
      <div class="col-md-4">
        <div class="card service-card h-100 border-0">
          <img src="img/irrigation.webp" class="card-img-top service-img" alt="Systèmes d'irrigation">
          <div class="card-body text-center">
            <h5 class="card-title" style="color:#2e7d32;">Systèmes d’Irrigation</h5>
            <p class="card-text">
              Conception et installation de solutions d’irrigation modernes, 
              adaptées aux besoins agricoles pour améliorer la productivité et économiser l’eau.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="projects" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5" style="color:#005C73; font-weight:700;">Nos Réalisations</h2>
    <div class="row g-4">

      <!-- Projet 1 -->
      <div class="col-md-6">
        <div class="card project-card border-0 h-100">
          <img src="img/realisation.jpg" class="card-img-top project-img" alt="Projet 1">
          <div class="card-body text-center">
            <h5 class="card-title" style="color:#005C73;">Projet Réseau d’Eau Potable</h5>
            <p class="card-text">
              Installation d’un réseau d’eau potable desservant une commune de 10 000 habitants,
              améliorant l’accès à une eau de qualité.
            </p>
          </div>
        </div>
      </div>

      <!-- Projet 2 -->
      <div class="col-md-6">
        <div class="card project-card border-0 h-100">
          <img src="img/irrigation2.jpg" class="card-img-top project-img" alt="Projet 2">
          <div class="card-body text-center">
            <h5 class="card-title" style="color:#005C73;">Système d’Irrigation Agricole</h5>
            <p class="card-text">
              Conception et mise en place de systèmes d’irrigation modernes pour renforcer
              la productivité agricole et optimiser l’utilisation de l’eau.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-5 section-title" style="color:#005C73; font-weight:700;">
      Nos Enjeux Clés en Hydraulique & Développement Rural
    </h2>
    <div class="row">
      
      <!-- Enjeu 1 -->
      <div class="col-lg-6 mb-4">
        <div class="enjeu-card">
          <div class="enjeu-icon">
            <i class="fas fa-faucet"></i>
          </div>
          <h3 class="enjeu-title">Accès à l’Eau Potable</h3>
          <p>
            Développement et extension de forages, puits modernes et réseaux
            d’adduction pour garantir une eau potable accessible et sûre aux
            populations rurales.
          </p>
        </div>
      </div>

      <!-- Enjeu 2 -->
      <div class="col-lg-6 mb-4">
        <div class="enjeu-card">
          <div class="enjeu-icon">
            <i class="fas fa-seedling"></i>
          </div>
          <h3 class="enjeu-title">Irrigation & Agriculture Durable</h3>
          <p>
            Mise en place de systèmes d’irrigation efficaces afin de soutenir
            l’agriculture familiale, accroître la productivité et optimiser
            l’utilisation des ressources en eau.
          </p>
        </div>
      </div>

      <!-- Enjeu 3 -->
      <div class="col-lg-6 mb-4">
        <div class="enjeu-card">
          <div class="enjeu-icon">
            <i class="fas fa-recycle"></i>
          </div>
          <h3 class="enjeu-title">Assainissement & Hygiène Rurale</h3>
          <p>
            Déploiement de solutions adaptées (latrines améliorées, systèmes
            écologiques) pour améliorer l’hygiène, réduire les maladies
            hydriques et protéger l’environnement.
          </p>
        </div>
      </div>

      <!-- Enjeu 4 -->
      <div class="col-lg-6 mb-4">
        <div class="enjeu-card">
          <div class="enjeu-icon">
            <i class="fas fa-people-carry"></i>
          </div>
          <h3 class="enjeu-title">Développement Communautaire</h3>
          <p>
            Implication des populations locales dans la gestion de l’eau et des
            infrastructures hydrauliques, pour renforcer la durabilité et
            l’appropriation des projets.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
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
.enjeu-card::before {
  content: '';
  position: absolute;
  top: 0;
  right: -50px;
  width: 100px;
  height: 100%;
  background: linear-gradient(45deg, transparent, rgba(255, 215, 0, 0.08), transparent);
  transform: skewX(-15deg);
  transition: right 0.5s ease;
}
.enjeu-card:hover::before {
  right: 100%;
}
.enjeu-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}
.enjeu-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #005C73, #FFD700);
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
  font-size: 2rem;
  color: white;
  box-shadow: 0 5px 15px rgba(0, 92, 115, 0.3);
}
.enjeu-title {
  color: #005C73;
  font-weight: 600;
  margin-bottom: 1rem;
  font-size: 1.4rem;
}
</style>


@endsection