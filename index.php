<?php
$pageTitle = 'Accueil';
$currentPage = 'home';
include('inc/header.php');
?>

<!-- Navbar -->
<?php include('inc/navbar.php'); ?>

<!-- Hero Section -->
<section class="hero-section">
    <video autoplay muted loop>
        <source src="assets/videos/hero-video.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="hero-content">
            <h1>Expert en Systèmes d'Injection Automobile</h1>
            <p>Spécialiste dans la réparation, la maintenance et la vente de systèmes d'injection pour moteurs diesel et essence. Plus de 20 ans d'expérience à votre service.</p>
            <div class="hero-buttons">
                <a href="services.php" class="btn btn-primary">Nos Services</a>
                <a href="contact.php" class="btn btn-outline">Contactez-nous</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-img">
                    <img src="assets/images/about.jpg" alt="About Us" class="img-fluid">
                    <div class="experience">
                        <h3>20+</h3>
                        <p>Années d'expérience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-content">
                    <h2>Bienvenue chez Diesel Pump Engineering</h2>
                    <p>Diesel Pump Engineering est une entreprise spécialisée dans les systèmes d'injection pour moteurs diesel et essence. Avec plus de 20 ans d'expérience dans le domaine, nous offrons des services de haute qualité adaptés aux besoins spécifiques de nos clients.</p>
                    <p>Notre équipe d'experts qualifiés est formée aux technologies les plus récentes et utilise des équipements de pointe pour garantir un service irréprochable.</p>
                    <ul>
                        <li>Service de réparation rapide et fiable</li>
                        <li>Pièces détachées d'origine et garanties</li>
                        <li>Personnel hautement qualifié et certifié</li>
                        <li>Équipements et technologies de dernière génération</li>
                    </ul>
                    <a href="about.php" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Nos Services</h2>
            <p>Découvrez notre gamme complète de services spécialisés dans les systèmes d'injection automobile</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Réparation d'Injecteurs</h3>
                    <p>Service complet de diagnostic, nettoyage et réparation d'injecteurs pour tous types de moteurs diesel et essence.</p>
                    <a href="services.php" class="read-more">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Pompes à Injection</h3>
                    <p>Réparation et reconditionnement de pompes à injection haute pression pour les véhicules légers et poids lourds.</p>
                    <a href="services.php" class="read-more">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Maintenance Préventive</h3>
                    <p>Programmes de maintenance préventive pour prolonger la durée de vie de vos systèmes d'injection et éviter les pannes coûteuses.</p>
                    <a href="services.php" class="read-more">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Diagnostic Électronique</h3>
                    <p>Diagnostic complet des systèmes d'injection électroniques et des problèmes de gestion moteur avec équipements spécialisés.</p>
                    <a href="services.php" class="read-more">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Vente de Pièces</h3>
                    <p>Vente de pièces détachées d'origine et de qualité équivalente pour tous les systèmes d'injection automobile.</p>
                    <a href="services.php" class="read-more">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Formation Technique</h3>
                    <p>Formations spécialisées pour les professionnels sur les technologies modernes des systèmes d'injection automobile.</p>
                    <a href="services.php" class="read-more">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Section -->
<section class="counter-section section-padding" style="background: url('assets/images/counter-bg.jpg') center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(13, 88, 19, 0.8);"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="counter-item text-center text-white mb-4 mb-lg-0">
                    <div class="counter-icon mb-3">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h3 class="counter mb-2">5000</h3>
                    <p class="mb-0">Clients Satisfaits</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="counter-item text-center text-white mb-4 mb-lg-0">
                    <div class="counter-icon mb-3">
                        <i class="fas fa-tools fa-3x"></i>
                    </div>
                    <h3 class="counter mb-2">15000</h3>
                    <p class="mb-0">Réparations Réussies</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-item text-center text-white mb-4 mb-lg-0">
                    <div class="counter-icon mb-3">
                        <i class="fas fa-award fa-3x"></i>
                    </div>
                    <h3 class="counter mb-2">20</h3>
                    <p class="mb-0">Années d'Expérience</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="counter-item text-center text-white mb-4 mb-lg-0">
                    <div class="counter-icon mb-3">
                        <i class="fas fa-handshake fa-3x"></i>
                    </div>
                    <h3 class="counter mb-2">50</h3>
                    <p class="mb-0">Partenaires</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section section-padding">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Ils Nous Font Confiance</h2>
            <p>Découvrez ce que nos clients disent de nos services</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-item p-4 shadow-sm rounded mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/testimonial-1.jpg" alt="Client" class="rounded-circle" width="60" height="60">
                        <div class="ms-3">
                            <h5 class="mb-0">Martin Dubois</h5>
                            <p class="text-muted mb-0">Garage Auto Express</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p class="mb-2">"Nous travaillons avec Diesel Pump Engineering depuis 5 ans pour la réparation de nos injecteurs. Leur service est rapide, efficace et très professionnel. Je les recommande vivement."</p>
                        <div class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-item p-4 shadow-sm rounded mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/testimonial-2.jpg" alt="Client" class="rounded-circle" width="60" height="60">
                        <div class="ms-3">
                            <h5 class="mb-0">Sophie Laurent</h5>
                            <p class="text-muted mb-0">Transport Laurent</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p class="mb-2">"Une équipe technique de haut niveau. Ils ont résolu un problème complexe sur nos camions que d'autres n'avaient pas pu diagnostiquer. Service client exceptionnel."</p>
                        <div class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-item p-4 shadow-sm rounded mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/testimonial-3.jpg" alt="Client" class="rounded-circle" width="60" height="60">
                        <div class="ms-3">
                            <h5 class="mb-0">Jean Moreau</h5>
                            <p class="text-muted mb-0">Agriculteur</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p class="mb-2">"Réparation de qualité, conseil personnalisé et délais respectés. Une entreprise sérieuse qui a su remettre en état mon tracteur rapidement pendant la période des récoltes."</p>
                        <div class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="400">
            <a href="contact.php" class="btn btn-primary">Contactez-nous</a>
        </div>
    </div>
</section>

<!-- Partners Section Preview -->
<section class="partners-preview-section section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Nos Partenaires</h2>
            <p>Nous collaborons avec les meilleures marques du secteur automobile</p>
        </div>
        <div class="partners-slider text-center" data-aos="fade-up">
            <div class="row">
                <div class="col-md-2 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/images/partner-1.png" alt="Partner Logo" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/partner-2.png" alt="Partner Logo" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/partner-3.png" alt="Partner Logo" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/partner-4.png" alt="Partner Logo" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="500">
                    <img src="assets/images/partner-5.png" alt="Partner Logo" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="600">
                    <img src="assets/images/partner-6.png" alt="Partner Logo" class="img-fluid">
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="partners.php" class="btn btn-primary">Voir tous nos partenaires</a>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action Section -->
<section class="cta-section section-padding" style="background: url('assets/images/cta-bg.jpg') center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(13, 88, 19, 0.8);"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h2 class="mb-4" data-aos="fade-up">Prêt à résoudre vos problèmes d'injection ?</h2>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Contactez-nous dès aujourd'hui pour un diagnostic professionnel et une réparation fiable de vos systèmes d'injection automobile.</p>
                <a href="contact.php" class="btn btn-outline btn-lg" data-aos="fade-up" data-aos-delay="200">Contactez-nous</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('inc/footer.php'); ?>