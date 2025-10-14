@extends('layouts.header')
@section('content')
<style>
    /* === TITRES AVEC ANIMATION === */
    .section-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: #005C73;
        margin-bottom: 60px;
        text-align: center;
        position: relative;
    }

    .section-title::after {
        content: "";
        width: 90px;
        height: 4px;
        background: linear-gradient(90deg, #FFD700, #FF9800);
        display: block;
        margin: 15px auto 0;
        border-radius: 5px;
        animation: slideIn 1s ease;
    }

    @keyframes slideIn {
        from {
            width: 0;
            opacity: 0;
        }

        to {
            width: 90px;
            opacity: 1;
        }
    }

    /* === HERO === */
    .hero-consultation {
        background: linear-gradient(135deg, #005C73 0%, #20c997 100%);
        color: white;
        padding: 120px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-consultation h1 {
        font-size: 3.5rem;
        font-weight: 900;
        margin-bottom: 20px;
        animation: fadeDown 1.2s ease;
    }

    .hero-consultation p {
        font-size: 1.2rem;
        max-width: 750px;
        margin: 0 auto 35px;
        color: #e6e6e6;
    }

    @keyframes fadeDown {
        from {
            transform: translateY(-40px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* === BUTTON CUSTOM === */
    .btn-custom {
        background: linear-gradient(45deg, #FFD700, #FF9800);
        color: #005C73;
        padding: 14px 40px;
        border-radius: 50px;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.4s ease;
        display: inline-block;
    }

    .btn-custom:hover {
        background: linear-gradient(45deg, #005C73, #FFD700);
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        color: #fff;
    }

    /* === SERVICES (Cards modernes) === */
    .consultation-services-section {
        padding: 90px 0;
        background: #f7f9fc;
    }

    .service-item {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border-radius: 18px;
        padding: 35px 25px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        text-align: center;
        transition: all 0.4s ease;
        cursor: pointer;
    }

    .service-item i {
        font-size: 3rem;
        background: linear-gradient(45deg, #FFD700, #FF9800);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
        transition: transform 0.4s ease;
    }

    .service-item h3 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: #005C73;
    }

    .service-item p {
        color: #555;
        font-size: 1rem;
    }

    .service-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }

    .service-item:hover i {
        transform: rotate(-5deg) scale(1.2);
    }

    /* === WHY CHOOSE US === */
    .why-choose-us-section {
        padding: 100px 0;
        background: linear-gradient(135deg, #fdfdfd, #f5f9ff);
    }

    .feature-box {
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
        text-align: center;
        transition: all 0.4s ease;
    }

    .feature-box i {
        font-size: 2.8rem;
        color: #FF9800;
        margin-bottom: 15px;
    }

    .feature-box:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }

    /* === FORM === */
    .contact-form-card {
        background: #fff;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        animation: fadeUp 1s ease;
    }

    .contact-form-card .btn-submit {
        background: linear-gradient(45deg, #005C73, #005C73);
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .contact-form-card .btn-submit:hover {
        background: linear-gradient(45deg, #005C73, #005C73);
        transform: translateY(-3px);
    }

    /* === FAQ === */
    .faq-section {
        background: #f9f9f9;
    }

    .faq-section .section-title {
        font-weight: bold;
        color: #005C73;
    }

    .accordion-button {
        font-weight: 600;
        color: #005C73;
    }

    .accordion-button:not(.collapsed) {
        background-color: #FFD700;
        color: #005C73;
    }

    .accordion-body {
        font-size: 0.95rem;
        color: #333;
        line-height: 1.6;
    }
</style>



<section class="hero-consultation">
    <div class="container">
        <h1 class="text-white" >Obtenez l’Expertise qu’il Vous Faut</h1>
        <p>
            Chez <strong>NGF EXPERTISE CONSULTING</strong>, nous vous accompagnons avec des solutions stratégiques,
            techniques et adaptées aux réalités africaines pour relever vos défis en matière de
            développement durable, environnement et agriculture.
        </p>
        <a href="#contact-form" class="btn btn-custom btn-lg">Demander une Consultation</a>
    </div>
</section>

<section class="consultation-services-section">
    <div class="container">
        <h2 class="section-title">Nos Domaines d’Intervention</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-item">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Conseil Stratégique</h3>
                    <p>Plans d’action, politiques durables et orientation pour la réussite de vos projets.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="fas fa-chart-line"></i>
                    <h3>Études de Faisabilité</h3>
                    <p>Analyses techniques, économiques et environnementales pour orienter vos décisions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="fas fa-handshake"></i>
                    <h3>Accompagnement de Projets</h3>
                    <p>De la conception à la mise en œuvre, avec suivi et évaluation continue.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="fas fa-book-open"></i>
                    <h3>Recherche & Analyse</h3>
                    <p>Études sectorielles, collecte de données et rapports détaillés pour vos choix stratégiques.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Formation & Renforcement</h3>
                    <p>Programmes personnalisés pour renforcer les compétences de vos équipes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="fas fa-globe-africa"></i>
                    <h3>Expertise Locale & Régionale</h3>
                    <p>Solutions adaptées aux contextes africains pour des résultats concrets et durables.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why Choose Us Section -->
<section class="why-choose-us-section">
    <div class="container">
        <h2 class="section-title">Pourquoi Choisir NGF pour Votre Consultation ?</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fas fa-award"></i>
                    <h3>Expertise Reconnue</h3>
                    <p>Une équipe de consultants expérimentés et multidisciplinaires avec une connaissance approfondie des enjeux locaux et internationaux.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fas fa-cogs"></i>
                    <h3>Approche Personnalisée</h3>
                    <p>Des solutions sur mesure, conçues pour répondre spécifiquement à vos besoins et objectifs uniques.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fas fa-chart-pie"></i>
                    <h3>Résultats Concrets</h3>
                    <p>Nous nous engageons à fournir des recommandations actionnables et à mesurer l'impact de nos interventions.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Form Section for Consultation -->
<section id="contact-form" class="contact-form-section">
    <div class="container">
        <h2 class="section-title" data-aos="zoom-in">Demandez Votre Consultation Gratuite</h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-form-card" data-aos="fade-up">
                    @if (session('success'))<div class="alert alert-success">{{session('success')}}</div>
                 @endif
                 @if (session('error'))<div class="alert alert-danger">{{session('error')}}</div>
                 @endif
                    <form action="{{route('consultation.consultationMail')}}" method="post" id="consultationForm" novalidate  >
                        @csrf
                        <div class="row g-4">
                            <!-- Nom -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nom complet</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Jean Dupont" required>
                                <small class="text-danger d-none" id="error-name">Veuillez entrer votre nom.</small>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ex: votre@email.com" required>
                                <small class="text-danger d-none" id="error-email">Veuillez entrer un email valide.</small>
                            </div>
                            <!-- Téléphone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Ex: +229 98 76 54 32">
                            </div>
                            <!-- Entreprise -->
                            <div class="col-md-6">
                                <label for="company" class="form-label">Entreprise / Organisation</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Ex: Ma Société S.A.">
                            </div>
                            <!-- Sujet -->
                            <div class="col-12">
                                <label for="subject" class="form-label">Sujet de la Consultation</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Ex: Étude d’impact environnemental" required>
                                <small class="text-danger d-none" id="error-subject">Veuillez préciser un sujet.</small>
                            </div>
                            <!-- Message -->
                            <div class="col-12">
                                <label for="message" class="form-label">Votre message</label>
                                <textarea class="form-control" id="message" rows="5" name="message" placeholder="Décrivez brièvement votre besoin..." required></textarea>
                                <small class="text-danger d-none" id="error-message">Veuillez écrire un message.</small>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn  px-5 py-3 btn btn-custom btn-lg">
                                <i class="fas fa-paper-plane me-2"></i> Envoyer la Demande
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Questions Fréquemment Posées</h2>
        <div class="row align-items-center">
            <!-- Colonne FAQ -->
            <div class="col-md-6">
                <div class="accordion" id="faqAccordion">

                    <!-- Question 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quels sont les délais pour une consultation ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-5">
                                Les délais varient en fonction de la complexité et de l'étendue de votre besoin.
                                Après réception de votre demande via le formulaire, nous vous contacterons sous 48 heures
                                pour convenir d’un calendrier clair et précis.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Proposez-vous des consultations à distance ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Oui, nous offrons des consultations en visioconférence (Zoom, Google Meet, Teams)
                                pour nos clients nationaux et internationaux.
                                Vous bénéficiez ainsi d’un suivi personnalisé, où que vous soyez.
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Comment sont définis vos tarifs ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Nos tarifs sont calculés sur mesure en tenant compte de la nature du projet,
                                des ressources mobilisées et de la durée prévue.
                                Un devis détaillé vous est envoyé après un premier échange.
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Puis-je demander une révision après la consultation ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolument ! Nous proposons un suivi post-consultation afin de répondre à vos
                                questions complémentaires ou d’ajuster nos recommandations selon vos retours.
                            </div>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Offrez-vous un premier rendez-vous gratuit ?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Oui, une première consultation de 30 minutes est offerte pour analyser vos besoins
                                et vous proposer la solution la plus adaptée avant tout engagement.
                            </div>
                        </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Quels secteurs couvrez-vous ?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Nous intervenons dans plusieurs secteurs : environnement, développement durable,
                                agriculture, gestion de projet, et accompagnement stratégique pour entreprises et ONG.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne image -->
            <div class="col-md-6 text-center">
                <img src="img/fas.webp"
                    alt="FAQ Illustration"
                    class="img-fluid rounded shadow-lg" data-aos="zoom-in">
            </div>
        </div>
    </div>
</section>


@endsection