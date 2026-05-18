@extends('layouts.header')
@section('content')

<style>
    .nous{
    background: linear-gradient(50deg, #005c73, #ffd700);
    color: #fff;
    padding: 14px 40px;
    border-radius: 50px;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.4s ease;
    display: inline-block;
    }

    .nous:hover {
       background: linear-gradient(45deg, #FFD700, #FF9800);
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        color: #fff;
    }

    .ccsdcj{
        height: 300px;
    }

    .sec {
        color: #fff;
    }

    .sec:hover {
        background-color: #fff !important;
        border: 2px solid #FFD700;
        box-shadow: 0 8px 20px rgba(255, 215, 0, 0.6);
    }

    .sec:hover p,
    .sec:hover h1 {
        color: #005C73 !important;
    }
</style>
<!-- Carousel Start -->
<div class="container-fluid header-carousel px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="img/dev6.jpg" alt="Image" style="height:65vh; object-fit:cover;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <h1 class="display-4 text-white animated slideInRight mb-3" style="color: #004080;">
                                    Votre partenaire pour un développement durable
                                </h1>
                                <p class="mb-4 animated slideInRight">
                                    NGF Expertise Consulting accompagne les collectivités, entreprises et organisations
                                    dans la mise en œuvre de projets innovants et responsables.
                                </p>
                                <a href="/apropos" class="btn btn-primary py-3 px-5 animated slideInRight nous">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100" src="img/dev9.png" alt="Image" style="height:65vh; object-fit:cover;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <h1 class="display-4 text-white animated slideInLeft mb-3">
                                    Expertise pluridisciplinaire en Afrique de l’Ouest
                                </h1>
                                <p class="mb-4 animated slideInLeft">
                                    Environnement, agriculture, hydraulique, énergie, BTP :
                                    nos équipes apportent des solutions adaptées aux besoins locaux et régionaux.
                                </p>
                                <a href="/contact" class="btn btn-primary py-3 px-5 animated slideInLeft nous">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/dev7.jpg" alt="Image" style="height:65vh; object-fit:cover;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <h1 class="display-4 text-white animated slideInLeft mb-3">
                                    Expertise multidisciplinaire en Afrique de l’Ouest
                                </h1>
                                <p class="mb-4 animated slideInLeft">
                                    Environnement, agriculture, hydraulique, énergie, BTP :
                                    nos équipes apportent des solutions adaptées aux besoins locaux et régionaux.
                                </p>
                                <a href="#contact" class="btn btn-primary py-3 px-5 animated slideInLeft nous">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Contrôles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>

<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-6">
                        <img class="img-fluid ccsdcj" src="img/dev01.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid ccsdcj w-100" src="img/dev10.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid ccsdcj" src="img/dev5.webp">
                    </div>
                    <div class="col-6">
                        <div class="experience-box d-flex flex-column align-items-center justify-content-center">
                            <div class="icon-circle mb-3">
                                <i class="bi bi-award"></i>
                            </div>
                            <h1 class="display-2 fw-bold text-white mb-0" data-toggle="counter-up">25</h1>
                            <small class="fs-5 text-light">ans Experiences</small>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4 section-title ">Votre partenaire pour un développement durable et innovant</h1>
                <p class="lead text-muted">
                    <strong>NGF EXPERTISE CONSULTING</strong> est un cabinet pluridisciplinaire basé au Bénin,
                    actif dans toute l’Afrique de l’Ouest. Fort de nombreuses années d’expériences au sein de
                    structures nationales et internationales, notre équipe met son savoir-faire au service du
                    développement durable.
                </p>
                <p>
                    Nous accompagnons les collectivités, les organisations et les entreprises dans la mise en œuvre
                    de projets innovants dans les domaines de l’environnement, de l’agriculture, du développement local,
                    de l’hydraulique, du BTP et bien plus encore.
                </p>
                <div class="row g-4 g-sm-5 justify-content-center">
                    <div class="col-sm-6">
                        <div class="about-fact btn-square flex-column rounded-circle sec ms-sm-auto" style="background: #FFD700;">
                            <p class="mb-0">Projets réalisés</p>
                            <h1 class="mb-0" data-toggle="counter-up" style=" color:#fff ">200</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 text-start">
                        <div class="about-fact btn-square flex-column rounded-circle sec bg-secondary me-sm-auto">
                            <p class="mb-0">Partenaires</p>
                            <h1 class="mb-0" data-toggle="counter-up" style=" color:#fff ">20</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-fact mt-n130 btn-square flex-column rounded-circle sec mx-sm-auto" style="background:#005C73;">
                            <p class="mb-0">Clients satisfaits</p>
                            <h1 class="mb-0" data-toggle="counter-up" style=" color:#fff ">100</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid container-service py-5">
    <div class="container pt-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3 section-title ">Nos domaines d’expertise</h1>
            <p class="mb-5">NGF Expertise Consulting met à votre disposition une équipe pluridisciplinaire pour accompagner
                vos projets dans les secteurs stratégiques du développement durable en Afrique de l’Ouest.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-heart-pulse" style="color: #005C73;"></i>
                    </div>
                    <h5 class="mb-3">Environnement & Climat</h4>
                        <p class="mb-4">Études d’impact, gestion des aires protégées, stratégies d’adaptation aux changements climatiques.</p>
                        <a class="btn btn-light nous px-3" href="environnement">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>


                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-flower1" style="color: #005C73;"></i>

                    </div>
                    <h5 class="mb-3">Agriculture & Pastoralisme</h4>
                        <p class="mb-4">Conseil agricole, gestion des ressources pastorales, accompagnement des producteurs.</p>
                        <a class="btn btn-light nous px-3" href="agriculture">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>


                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-people-fill" style="color: #005C73;"></i>

                    </div>
                    <h5 class="mb-3">Développement local</h4>
                        <p class="mb-4">Études diagnostiques, planification communale, appui à la société civile et aux acteurs économiques.</p>
                        <a class="btn btn-light px-3 nous" href="developpement">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>


                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-droplet-half" style="color: #005C73;"></i>

                    </div>
                    <h5 class="mb-3">Hydraulique rurale</h4>
                        <p class="mb-4">Études, conception et accompagnement de projets d’eau potable et assainissement en zones rurales.</p>
                        <a class="btn btn-light nous px-3" href="hydraulique">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>


                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-building" style="color: #005C73;"></i>

                    </div>
                    <h5 class="mb-3">Travaux publics</h4>
                        <p class="mb-4">Études environnementales, suivi et accompagnement social pour les infrastructures et voiries</p>
                        <a class="btn btn-light nous px-3" href="travaux">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-lightning-charge-fill" style="color: #005C73;"></i>

                    </div>
                    <h5 class="mb-3">Énergie & Électrification</h4>
                        <p class="mb-4">Études et accompagnement de projets d’électrification urbaine et rurale pour améliorer l’accès à l’énergie..</p>
                        <a class="btn btn-light nous px-3"  href="electrification">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-trash-fill" style="color: #005C73;"></i>

                    </div>
                    <h5 class="mb-3">Hygiène & Assainissement</h4>
                        <p class="mb-4">Gestion des déchets solides, études d’impact et stratégies communales d’assainissement..</p>
                        <a class="btn btn-light nous px-3" href="hygiene">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-briefcase-fill" style="color: #005C73;"></i>

                    </div>
                    <h5 class="mb-3">Assistance technique</h4>
                        <p class="mb-4">Appui-conseil, structuration de projets et accompagnement des micro-entrepreneurs et collectivités.</p>
                        <a class="btn btn-light nous px-3" href="assistance">En savoir plus<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->






<!-- Section Nos Atouts -->
<!-- <section class="py-5">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Nos atouts</h2>
            <p class="text-muted">Pourquoi choisir NGF Expertise Consulting ?</p>
        </div>

        <div class="row g-4">
          
            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm p-4 border-0 h-100">
                    <div class="mb-3">
                        <i class="bi bi-award-fill display-4 text-warning"></i>
                    </div>
                    <h5 class="fw-bold">Expérience reconnue</h5>
                    <p class="text-muted">
                        Plus de 10 ans d’expertise dans l’accompagnement des projets de développement en Afrique de l’Ouest.
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm p-4 border-0 h-100">
                    <div class="mb-3">
                        <i class="bi bi-people-fill display-4 text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Équipe multidisciplinaire</h5>
                    <p class="text-muted">
                        Des experts en environnement, agriculture, hydraulique, énergie, BTP et développement local.
                    </p>
                </div>
            </div>

           
            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm p-4 border-0 h-100">
                    <div class="mb-3">
                        <i class="bi bi-globe2 display-4 text-success"></i>
                    </div>
                    <h5 class="fw-bold">Réseau international</h5>
                    <p class="text-muted">
                        Une collaboration avec des partenaires nationaux et internationaux pour maximiser l’impact des projets.
                    </p>
                </div>
            </div>

      
            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm p-4 border-0 h-100">
                    <div class="mb-3">
                        <i class="bi bi-lightbulb-fill display-4 text-info"></i>
                    </div>
                    <h5 class="fw-bold">Approche innovante</h5>
                    <p class="text-muted">
                        Des solutions adaptées et innovantes pour répondre aux défis actuels et futurs du développement durable.
                    </p>
                </div>
            </div>

       
            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm p-4 border-0 h-100">
                    <div class="mb-3">
                        <i class="bi bi-heart-fill display-4 text-danger"></i>
                    </div>
                    <h5 class="fw-bold">Engagement social</h5>
                    <p class="text-muted">
                        Un fort engagement pour l’inclusion, la participation citoyenne et le développement communautaire.
                    </p>
                </div>
            </div>

          
            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm p-4 border-0 h-100">
                    <div class="mb-3">
                        <i class="bi bi-check-circle-fill display-4 text-secondary"></i>
                    </div>
                    <h5 class="fw-bold">Qualité et fiabilité</h5>
                    <p class="text-muted">
                        Des services fiables et conformes aux standards internationaux pour garantir la réussite des projets.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Section Équipe -->
<!-- <section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Notre Équipe</h2>

    <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">

      
        <div class="carousel-item active">
          <div class="row g-3">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="Jean">
                <div class="card-body text-center">
                  <h5 class="fw-bold">Jean Dupont</h5>
                  <p class="text-primary mb-1">Développeur</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-none d-sm-block">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="Marie">
                <div class="card-body text-center">
                  <h5 class="fw-bold">Marie Claire</h5>
                  <p class="text-primary mb-1">Designer UI/UX</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 d-none d-md-block">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="Ali">
                <div class="card-body text-center">
                  <h5 class="fw-bold">Ali Konaté</h5>
                  <p class="text-primary mb-1">Chef de Projet</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 d-none d-lg-block">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="Sara">
                <div class="card-body text-center">
                  <h5 class="fw-bold">Sara Traoré</h5>
                  <p class="text-primary mb-1">Marketing</p>
                </div>
              </div>
            </div>
          </div>
        </div>

     
        <div class="carousel-item">
          <div class="row g-3">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="David">
                <div class="card-body text-center">
                  <h5 class="fw-bold">David Kam</h5>
                  <p class="text-primary mb-1">Support IT</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-none d-sm-block">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="Fatou">
                <div class="card-body text-center">
                  <h5 class="fw-bold">Fatou Diallo</h5>
                  <p class="text-primary mb-1">Finance</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 d-none d-md-block">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="Roland">
                <div class="card-body text-center">
                  <h5 class="fw-bold">Roland O.</h5>
                  <p class="text-primary mb-1">Comptabilité</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 d-none d-lg-block">
              <div class="card border-0 shadow-sm h-100">
                <img src="img/Portrait.jpg" class="team-img card-img-top" alt="Améyo">
                <div class="card-body text-center">
                  <h5 class="fw-bold">Améyo L.</h5>
                  <p class="text-primary mb-1">Secrétariat</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    
      <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section> -->

<style>
.team-img {
  width: 100%;
  height: 350px;
  object-fit: cover; /* recadre l'image */
}
</style>





<!-- /* Partners Section */ -->
<section class="partners-section">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h1 class="display-6 mb-3 section-title ">Nos Partenaires</h1>
            <p class="mb-5">
                NGF Expertise Consulting collabore avec des partenaires stratégiques et institutionnels de premier plan,
                afin de renforcer l’impact de nos actions dans la sous-région ouest-africaine.
                Grâce à cette synergie, nous assurons des solutions durables et innovantes au service du développement.
            </p>
        </div>


        <div class="partners-carousel-container">
            <div class="partners-carousel-track">
                <div class="partner-logo-item"><img src="img/pat1.png" alt="Partner 1"></div>
                <div class="partner-logo-item"><img src="img/pat2.jpg" alt="Partner 1"></div>
                <div class="partner-logo-item"><img src="img/pat3.jpg" alt="Partner 2"></div>
                <div class="partner-logo-item"><img src="img/pat4.png" alt="Partner 3"></div>
                <div class="partner-logo-item"><img src="img/pat5.png" alt="Partner 4"></div>
                <div class="partner-logo-item"><img src="img/pat6.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat7.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat8.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat9.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat10.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat11.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat12.jpg" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat13.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat14.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat15.png" alt="Partner 5"></div>
                <!-- Duplicated set for seamless loop -->
                <div class="partner-logo-item"><img src="img/pat1.png" alt="Partner 1"></div>
                <div class="partner-logo-item"><img src="img/pat2.jpg" alt="Partner 1"></div>
                <div class="partner-logo-item"><img src="img/pat3.jpg" alt="Partner 2"></div>
                <div class="partner-logo-item"><img src="img/pat4.png" alt="Partner 3"></div>
                <div class="partner-logo-item"><img src="img/pat5.png" alt="Partner 4"></div>
                <div class="partner-logo-item"><img src="img/pat6.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat7.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat8.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat9.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat10.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat11.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat12.jpg" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat13.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat14.png" alt="Partner 5"></div>
                <div class="partner-logo-item"><img src="img/pat15.png" alt="Partner 5"></div>
            </div>
        </div>
</section>
<style>
    .partners-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }

    .partners-carousel-container {
        overflow: hidden;
        position: relative;
        padding: 2rem 0;
    }

    .partners-carousel-track {
        display: flex;
        width: fit-content;
        animation: scroll-partners 30s linear infinite;
    }

    .partners-carousel-track:hover {
        animation-play-state: paused;
    }

    .partner-logo-item {
        flex-shrink: 0;
        width: 150px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 20px;
    }

    .partner-logo-item img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;

        transition: filter 0.3s ease;
    }

    .partner-logo-item img:hover {
        filter: grayscale(0%);
    }

    /* Animations */
    @keyframes scroll-partners {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>
@endsection