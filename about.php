<?php
$pageTitle = 'À Propos';
$currentPage = 'about';
include('inc/header.php');
?>

<!-- Navbar -->
<?php include('inc/navbar.php'); ?>

<!-- Page Header -->
<section class="page-header" style="background-image: url('assets/images/about-header.jpg');">
    <div class="container">
        <div class="page-title">
            <h1>À Propos de Nous</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">À Propos</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-us-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-img position-relative">
                    <img src="assets/images/about-main.jpg" alt="About Us" class="img-fluid rounded shadow-lg">
                    <div class="experience">
                        <h3>20+</h3>
                        <p>Années d'expérience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-content">
                    <div class="section-title text-start">
                        <h2>Notre Histoire</h2>
                    </div>
                    <p>Diesel Pump Engineering a été fondée en 2003 par une équipe de techniciens passionnés qui avaient une vision commune : créer une entreprise spécialisée offrant des services de haute qualité dans le domaine des systèmes d'injection automobile.</p>
                    <p>Depuis nos débuts modestes dans un petit atelier, nous avons connu une croissance constante pour devenir l'un des leaders de la réparation de systèmes d'injection en France. Cette croissance a été possible grâce à notre engagement inébranlable envers la qualité, la précision technique et la satisfaction client.</p>
                    <p>Au fil des ans, nous avons investi dans les technologies les plus avancées et dans la formation continue de notre équipe pour rester à la pointe des innovations dans notre secteur. Aujourd'hui, Diesel Pump Engineering est reconnue pour son expertise technique, sa fiabilité et son service client exceptionnel.</p>
                    <a href="services.php" class="btn btn-primary mt-4">Découvrir nos services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission Section -->
<section class="vision-mission-section section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-up">
                <div class="vision-box p-4 bg-white rounded shadow h-100">
                    <div class="icon-box mb-4 text-center">
                        <i class="fas fa-eye fa-3x text-primary"></i>
                    </div>
                    <h3 class="text-center mb-4">Notre Vision</h3>
                    <p>Devenir le partenaire de référence pour tous les professionnels et particuliers cherchant des solutions d'excellence pour leurs systèmes d'injection automobile, en alliant expertise technique, innovation et service personnalisé.</p>
                    <p>Nous aspirons à être reconnus non seulement pour la qualité de nos réparations, mais aussi pour notre contribution à l'évolution technologique du secteur et à la formation des nouvelles générations de techniciens.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="mission-box p-4 bg-white rounded shadow h-100">
                    <div class="icon-box mb-4 text-center">
                        <i class="fas fa-bullseye fa-3x text-primary"></i>
                    </div>
                    <h3 class="text-center mb-4">Notre Mission</h3>
                    <p>Fournir des solutions de réparation et de maintenance de la plus haute qualité pour les systèmes d'injection, en utilisant les technologies les plus avancées et en s'appuyant sur l'expertise approfondie de notre équipe.</p>
                    <p>Nous nous engageons à offrir un service rapide, fiable et transparent, tout en garantissant des réparations durables qui optimisent les performances et la longévité des moteurs de nos clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Nos Valeurs</h2>
            <p>Les principes qui guident chacune de nos actions au quotidien</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="value-item text-center p-4 bg-white rounded shadow h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-heart fa-3x text-primary"></i>
                    </div>
                    <h4>Passion</h4>
                    <p>Notre passion pour la mécanique et la technologie nous pousse à toujours rechercher l'excellence et à rester à la pointe de l'innovation dans notre domaine.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="value-item text-center p-4 bg-white rounded shadow h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-check-double fa-3x text-primary"></i>
                    </div>
                    <h4>Qualité</h4>
                    <p>Nous ne faisons jamais de compromis sur la qualité. Chaque réparation est réalisée avec le plus grand soin, en utilisant des pièces fiables et des techniques éprouvées.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="value-item text-center p-4 bg-white rounded shadow h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h4>Service Client</h4>
                    <p>Nous plaçons le client au centre de notre activité, en offrant un service personnalisé, transparent et attentif à chaque besoin spécifique.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="value-item text-center p-4 bg-white rounded shadow h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h4>Expertise</h4>
                    <p>Notre équipe est composée de techniciens hautement qualifiés et certifiés, bénéficiant d'une formation continue pour maîtriser les technologies les plus récentes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="value-item text-center p-4 bg-white rounded shadow h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-hands-helping fa-3x text-primary"></i>
                    </div>
                    <h4>Intégrité</h4>
                    <p>Nous agissons avec honnêteté et transparence dans toutes nos interactions, en proposant toujours les solutions les plus adaptées aux besoins réels de nos clients.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="value-item text-center p-4 bg-white rounded shadow h-100">
                    <div class="value-icon mb-3">
                        <i class="fas fa-leaf fa-3x text-primary"></i>
                    </div>
                    <h4>Durabilité</h4>
                    <p>Nous nous engageons à adopter des pratiques respectueuses de l'environnement, en minimisant notre impact écologique et en promouvant des solutions durables.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Notre Équipe</h2>
            <p>Une équipe de professionnels passionnés et qualifiés à votre service</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member text-center">
                    <div class="member-img">
                        <img src="assets/images/team-1.jpg" alt="Team Member" class="img-fluid rounded shadow">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="member-info mt-3">
                        <h4>Pierre Martin</h4>
                        <p>Fondateur & Directeur Technique</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member text-center">
                    <div class="member-img">
                        <img src="assets/images/team-2.jpg" alt="Team Member" class="img-fluid rounded shadow">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="member-info mt-3">
                        <h4>Sophie Durand</h4>
                        <p>Responsable des Opérations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member text-center">
                    <div class="member-img">
                        <img src="assets/images/team-3.jpg" alt="Team Member" class="img-fluid rounded shadow">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="member-info mt-3">
                        <h4>Jean Dupont</h4>
                        <p>Chef d'Atelier</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member text-center">
                    <div class="member-img">
                        <img src="assets/images/team-4.jpg" alt="Team Member" class="img-fluid rounded shadow">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="member-info mt-3">
                        <h4>Marie Lambert</h4>
                        <p>Responsable Service Client</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section section-padding" style="background: url('assets/images/stats-bg.jpg') center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(13, 88, 19, 0.8);"></div>
    <div class="container position-relative">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="fade-up">
                <div class="stat-item text-white">
                    <h2 class="counter mb-2">20</h2>
                    <p>Années d'expérience</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-item text-white">
                    <h2 class="counter mb-2">15</h2>
                    <p>Techniciens qualifiés</p>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item text-white">
                    <h2 class="counter mb-2">5000</h2>
                    <p>Clients satisfaits</p>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item text-white">
                    <h2 class="counter mb-2">3</h2>
                    <p>Ateliers en France</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificates Section -->
<section class="certificates-section section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Nos Certifications</h2>
            <p>Des garanties de qualité et d'expertise reconnues</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="certificate-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/certificate-1.png" alt="Certification" class="img-fluid mb-3" style="max-height: 100px;">
                    <h4>Certification ISO 9001</h4>
                    <p>Certification internationale garantissant un système de management de la qualité répondant aux normes les plus strictes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="certificate-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/certificate-2.png" alt="Certification" class="img-fluid mb-3" style="max-height: 100px;">
                    <h4>Agrément Bosch Service</h4>
                    <p>Reconnaissance officielle de Bosch attestant notre expertise dans la maintenance et la réparation des systèmes d'injection.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="certificate-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/certificate-3.png" alt="Certification" class="img-fluid mb-3" style="max-height: 100px;">
                    <h4>Certification Delphi Technologies</h4>
                    <p>Certification attestant notre maîtrise des technologies Delphi pour les systèmes d'injection diesel et essence.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-about-section section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Ce que disent nos clients</h2>
            <p>Découvrez les témoignages de ceux qui nous font confiance</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-10 mx-auto" data-aos="fade-up">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial-item text-center p-5 bg-white rounded shadow">
                                <div class="client-img mb-3">
                                    <img src="assets/images/client-1.jpg" alt="Client" class="img-fluid rounded-circle" style="width: 80px;">
                                </div>
                                <p class="testimonial-text mb-4">"Diesel Pump Engineering a sauvé notre flotte de camions lors d'une panne majeure. Leur diagnostic rapide et leur réparation efficace nous ont permis de reprendre nos activités en un temps record. Un service exceptionnel !"</p>
                                <h4>Michel Fournier</h4>
                                <p class="client-position">Directeur, Transport Express</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center p-5 bg-white rounded shadow">
                                <div class="client-img mb-3">
                                    <img src="assets/images/client-2.jpg" alt="Client" class="img-fluid rounded-circle" style="width: 80px;">
                                </div>
                                <p class="testimonial-text mb-4">"Je fais confiance à Diesel Pump Engineering depuis plus de 10 ans pour l'entretien de mon parc automobile. Leur expertise technique et leur professionnalisme font toute la différence. Je les recommande vivement !"</p>
                                <h4>Nathalie Dubois</h4>
                                <p class="client-position">Gérante, Auto École Centrale</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center p-5 bg-white rounded shadow">
                                <div class="client-img mb-3">
                                    <img src="assets/images/client-3.jpg" alt="Client" class="img-fluid rounded-circle" style="width: 80px;">
                                </div>
                                <p class="testimonial-text mb-4">"Après avoir fait le tour des garages pour un problème complexe sur mon tracteur, Diesel Pump Engineering a été le seul à diagnostiquer correctement et à réparer efficacement mon système d'injection. Un grand merci à toute l'équipe !"</p>
                                <h4>Antoine Legrand</h4>
                                <p class="client-position">Agriculteur</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="cta-section section-padding" style="background: url('assets/images/cta-bg.jpg') center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(13, 88, 19, 0.8);"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h2 class="mb-4" data-aos="fade-up">Prêt à travailler avec des experts ?</h2>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Contactez notre équipe de professionnels dès aujourd'hui pour découvrir comment nous pouvons vous aider avec vos besoins en systèmes d'injection.</p>
                <a href="contact.php" class="btn btn-outline btn-lg" data-aos="fade-up" data-aos-delay="200">Contactez-nous</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('inc/footer.php'); ?>