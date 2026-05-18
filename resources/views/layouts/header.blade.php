<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NGF EXPERTISE CONSULTING</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
  <!-- Favicon -->
<link rel="icon" href="{{ asset('img/favicon.ico') }}">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheets -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheets -->
<link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Custom Stylesheet -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<style>
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

    .custom-section-title {
        font-size: clamp(24px, 5vw, 40px);
        /* taille responsive */
        font-weight: 700;
        color: #005C73;
        text-align: center;
        line-height: 1.2;
        margin: 0 auto 30px auto;
        max-width: 90%;
        /* limite la largeur sur mobile */
        word-wrap: break-word;
        /* coupe le texte long */
        position: relative;
    }

    /* Soulignement centré */
    .custom-section-title::after {
        content: "";
        display: block;
        width: 60px;
        /* largeur de la barre */
        height: 3px;
        /* épaisseur de la barre */
        background-color: #f99828;
        margin: 15px auto 0 auto;
        /* centré sous le texte */
        border-radius: 2px;
        /* coins arrondis optionnel */
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #FFD700;
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-light text-white pt-2 pb-3 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2" style="color:#FFD700"></i>
                    <div class="ms-3">
                        <h5 class=" mb-0" style="color:#316d8c;">Téléphone</h5>
                        <span style="color:#316d8c;">(+229) 0166 653 766 / 0195 698 878</span>
                    </div>
                </div>
                <img src="{{asset('img/logo.png')}}" class="logo-img" alt="Logo 1">

                <div class="d-flex">
                    <i class="bi bi-envelope fs-2" style="color:#FFD700"></i>
                    <div class="ms-3">
                        <h5 class=" mb-0" style="color:#316d8c;">E-mail</h5>
                        <span style="color:#316d8c;">ngfexpertconsult@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->



    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="/" class="navbar-brand d-lg-none">
                    <img src="img/logo.png" class="logo-img" alt="Logo 1">

                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active">Accueil</a>
                        <a href="apropos" class="nav-item nav-link">À propos</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="/assistance" class="dropdown-item">Assistance technique internationale</a>
                                <a href="/developpement" class="dropdown-item">Développement local</a>
                                <a href="/changement" class="dropdown-item">Changement climatique</a>
                                <a href="/hygiene" class="dropdown-item">Hygiène, assainissement & environnement</a>
                                <a href="/travaux" class="dropdown-item">Travaux publics</a>
                                <a href="/hydraulique" class="dropdown-item">Hydraulique rurale</a>
                                <a href="/electrification" class="dropdown-item">Électrification urbaine et rurale</a>
                                <a href="/agriculture" class="dropdown-item">Agriculture & pastoralisme</a>
                            </div>
                        </div>
                        <a href="/consultation" class="nav-item nav-link">Consultations</a>
                        <a href="/realisation" class="nav-item nav-link">Nos realisations</a>
                        <a href="/actualite" class="nav-item nav-link">Actualités</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>


                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="social-icon me-2" target="_blank" href="https://www.facebook.com/share/17Ve1yeWfC/"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon me-2" target="_blank" href="https://www.linkedin.com/in/ngf-expertise-consulting-713944264?utm_source=share_via&utm_content=profile&utm_medium=member_android"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-icon me-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <main>
        @yield('content')
    </main>
    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-light text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <!-- Logo + Présentation -->
                <div class="col-lg-6 pe-lg-5">
                    <a href="/l" class="navbar-brand">
                        <img src="{{asset('img/logo.png')}}" class="logo-img" alt="Logo 1">

                    </a>
                    <p class="fs-5 mb-4 mt-2" style="color: #005C73;">
                        NGF Expertise Consulting est un cabinet pluridisciplinaire basé au Bénin
                        et actif en Afrique de l’Ouest. Nous accompagnons les collectivités, institutions,
                        entreprises et organisations dans la mise en œuvre de projets durables et innovants.
                    </p>
                    <p style="color: #005C73;"><i class="fa fa-map-marker-alt me-2"></i>Kindonou – Cotonou, Bénin</p>
                    <p style="color: #005C73;"><i class="fa fa-phone-alt me-2"></i>(+229) 0120 606 034 / 0166 653 766</p>
                    <p style="color: #005C73;"><i class="fa fa-envelope me-2"></i>ngfexpertconsult@gmail.com</p>
                    <div class="d-flex mt-4">
                        <a class="social-icon me-2" target="_blank" href="https://www.facebook.com/share/17Ve1yeWfC/"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon me-2" target="_blank" href="https://www.linkedin.com/in/ngf-expertise-consulting-713944264?utm_source=share_via&utm_content=profile&utm_medium=member_android"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon me-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>

                    <style>
                        /* Style général */
                        .social-icon {
                            width: 50px;
                            height: 50px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border-radius: 50%;
                            /* rond */
                            background: #004C73;
                            /* Bleu du logo */
                            color: #fff;
                            font-size: 20px;
                            transition: all 0.3s ease-in-out;
                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
                            text-decoration: none;
                        }

                        /* Hover */
                        .social-icon:hover {
                            background: #F2C300;
                            /* Jaune du logo */
                            color: #004C73;
                            /* texte bleu */
                            transform: scale(1.2) rotate(10deg);
                            /* zoom + rotation */
                            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
                        }
                    </style>

                </div>

                <!-- Liens rapides -->
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="mb-4" style="color: #F2C300;">Liens utiles</h4>
                            <a class="btn btn-link" href="/apropos">À propos</a>
                            <a class="btn btn-link" href="/services">Nos services</a>
                            <a class="btn btn-link" href="/projects">Nos projets</a>
                            <a class="btn btn-link" href="/contact">Contact</a>
                            <a class="btn btn-link" href="/consultation">Consultation</a>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="mb-4" style="color: #F2C300;">Nos expertises</h4>
                            <a class="btn btn-link" href="/hygiene">Environnement</a>
                            <a class="btn btn-link" href="/agriculture">Agriculture</a>
                            <a class="btn btn-link" href="/hydraulique">Hydraulique</a>
                            <a class="btn btn-link" href="/travaux">Travaux publics</a>
                            <a class="btn btn-link" href="/electrification">Énergie</a>
                        </div>

                        <!-- Newsletter -->
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <div class="w-100">
                                <div class="input-group">
                                    @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    <form action="{{route('newsletter')}}" method="post" class="d-flex">
                                        @csrf
                                        <input type="email" class="form-control border-0 py-3 px-4 sdqs" name="mail"

                                            placeholder="Votre adresse email">
                                        <button class="btn btn-primary px-4">S’inscrire</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Copyright Start -->
    <!-- <div class="container-fluid copyright bg-dark text-white-50 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a href="https://htmlcodex.com">HTML Codex</a><br>Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
            </div>
        </div>
    </div>
</div> -->
    <!-- Copyright End -->
    <!-- Back to Top -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentUrl = window.location.pathname;
            let navLinks = document.querySelectorAll(".navbar .nav-link, .dropdown-item");

            navLinks.forEach(link => {
                let href = link.getAttribute("href");

                // Ignorer les # et les liens vides
                if (!href || href === "#") return;

                let linkPath = new URL(link.href).pathname;

                // Activer si l'URL correspond
                if (currentUrl === linkPath || currentUrl.startsWith(linkPath)) {
                    link.classList.add("active");

                    // ✅ Si c’est un dropdown-item → activer aussi son parent
                    let parentDropdown = link.closest(".dropdown");
                    if (parentDropdown) {
                        parentDropdown.querySelector(".nav-link").classList.add("active");
                    }
                }
            });
        });
    </script>



    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Bootstrap Bundle JS (inclut Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Libraries JS -->
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Custom JS -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>