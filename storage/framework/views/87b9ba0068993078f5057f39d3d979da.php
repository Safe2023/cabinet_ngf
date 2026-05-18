
<?php $__env->startSection('content'); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn position-relative"
    data-wow-delay="0.1s"
    style="background-image: url('img/contact-ngf.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
             height:600px;">

    <!-- Overlay pour lisibilité -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: rgba(0,0,0,0.55);"></div>

    <div class="container text-center py-5 mt-4 position-relative">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-warning">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
 
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="custom-section-title" style="color: #005C73;">Une question ? Contactez-nous dès maintenant</h1>
            <p class="mb-5">
                L’équipe <strong style="color: #005C73;">NGF Expertise Consulting</strong> est à votre disposition pour répondre à vos besoins
                en environnement, agriculture, hydraulique, énergie, BTP et développement local.
                N’hésitez pas à nous écrire ou à nous appeler pour plus d’informations.
            </p>
        </div>

        <div class="row g-4 justify-content-center pb-5">
            <!-- Bloc Téléphone -->
            <div class="col-md-6">
                <div class="card contact-card h-100 text-center p-4">
                    <div class="mb-3 text-center">
                        <i class="bi bi-telephone-inbound-fill icon"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #005C73;">Appelez-nous</h5>
                    <p class="text-muted">Pour toute demande d’information ou assistance</p>
                    <h4 style="color: #005C73;">(+229) 0195 698 878</h4>
                    <h4 style="color: #005C73;">(+229) 0166 653 766</h4>
                    <div class="mt-auto">
                        <a href="tel:+22995698878" class="btn btn-custom mt-3">Nous appeler</a>
                    </div>
                </div>
            </div>

            <!-- Bloc Email -->
            <div class="col-md-6">
                <div class="card contact-card h-100 text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-envelope-fill display-5 icon"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #005C73;">Écrivez-nous</h5>
                    <p class="text-muted">Nous répondons rapidement à vos emails</p>
                    <h5 style="color: #005C73;">ngfexpertconsult@gmail.com</h5>
                    <div class="mt-auto">
                        <a href="mailto:ngfexpertconsult@gmail.com" class="btn btn-custom mt-3">Nous écrire</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 mt-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="custom-section-title" style="color: #005C73; font-weight: 700;">Nous sommes à votre écoute</h2>
                <p class="mb-4">
                    Vous avez une question ou souhaitez en savoir plus sur le projet NGF ? Envoyez-nous un message et notre équipe vous répondra rapidement pour vous accompagner dans votre démarche.
                </p>
                <?php if(session('success')): ?><div class="alert alert-success"><?php echo e(session('success')); ?></div>
                 <?php endif; ?>
                 <?php if(session('error')): ?><div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                 <?php endif; ?>
                <form action="<?php echo e(route('envoie_mail')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Votre nom" name="nom_prenom">
                                <label for="name">Votre nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
                                <label for="email">Votre email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ex:0195000000">
                                <label for="phone">Votre numero</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Objet de votre message" name="suject">
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Écrivez votre message ici" id="message" name="message" style="height: 200px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-custom py-3 px-5" type="submit">Envoyer le message</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <iframe class="w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-custom {
        background: linear-gradient(50deg, #005C73, #FFD700);
        color:#fff;
        padding: 14px 40px;
        border-radius: 50px;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.4s ease;
        display: inline-block;
    }

    .btn-custom:hover {
        background: linear-gradient(45deg, #FFD700, #FF9800);
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        color: #fff;
    }

    .contact-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .contact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0px 12px 35px rgba(0, 0, 0, 0.35);
    }

    .custom-btn {
        background-color: #316d8c;
        color: #fff;
        padding: 10px 25px;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #f7d650;
        /* jaune du logo */
        color: #316d8c;
    }
</style>
<!-- Contact End -->

<style>
    .icon {
        font-size: 3rem;
        color: #005C73;
        /* Couleur de base */
        background-color: #E8F5F7;
        /* Fond léger autour de l'icône */
        padding: 20px;
        /* Espace autour de l'icône */
        border-radius: 50%;
        /* Cercle parfait */
        transition: all 0.3s ease;
        /* Animation fluide */
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .icon:hover {
        color: #FFD700;
        /* Changement de couleur de l'icône */
        background-color: #004C73;
        /* Fond sombre au hover */
        transform: scale(1.2) rotate(-10deg);
        /* Zoom + légère rotation */
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .team-carousel .card {
        transition: transform 0.3s ease;
    }

    .team-carousel .card:hover {
        transform: translateY(-5px);
    }
</style>
<script>
    $(document).ready(function() {
        $(".team-carousel").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: true, // Pause quand on passe la souris
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\Ngf\cabinet\resources\views/contact.blade.php ENDPATH**/ ?>