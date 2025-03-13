<?php
$pageTitle = 'Contact';
$currentPage = 'contact';
include('inc/header.php');
?>

<!-- Navbar -->
<?php include('inc/navbar.php'); ?>

<!-- Page Header -->
<section class="page-header" style="background-image: url('assets/images/contact-header.jpg');">
    <div class="container">
        <div class="page-title">
            <h1>Contactez-nous</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="contact-info">
                    <h3 class="mb-4">Informations de Contact</h3>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5>Notre Adresse</h5>
                            <p>123 Rue de l'Industrie, 75001 Paris, France</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5>Téléphone</h5>
                            <p>+33 1 23 45 67 89</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h5>Email</h5>
                            <p>contact@dieselpumpengineering.com</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h5>Heures d'Ouverture</h5>
                            <p>Lundi - Vendredi: 8h00 - 18h00<br>Samedi: 9h00 - 13h00<br>Dimanche: Fermé</p>
                        </div>
                    </div>
                    
                    <div class="social-links mt-4">
                        <h5>Suivez-nous</h5>
                        <div class="d-flex mt-3">
                            <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8" data-aos="fade-left">
                <div class="contact-form">
                    <h3 class="mb-4">Envoyez-nous un Message</h3>
                    
                    <form id="contactForm" action="process-form.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Votre Nom *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Votre Email *" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Sujet *" required>
                        </div>
                        
                        <div class="form-group mb-4">
                            <textarea name="message" class="form-control" rows="5" placeholder="Votre Message *" required></textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="privacyPolicy" required>
                                <label class="form-check-label" for="privacyPolicy">
                                    J'accepte la politique de confidentialité et le traitement de mes données personnelles.
                                </label>
                            </div>
                        </div>
                        
                        <div id="formResponse"></div>
                        
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Envoyer le Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container-fluid p-0">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.292292615971938!3d48.85836360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1647697636096!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Questions Fréquentes</h2>
            <p>Réponses aux questions les plus posées par nos clients</p>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="accordion" id="contactFaqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Comment puis-je prendre rendez-vous pour un diagnostic ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Vous pouvez prendre rendez-vous de plusieurs façons : en nous appelant au +33 1 23 45 67 89, en nous envoyant un email à contact@dieselpumpengineering.com, ou en remplissant le formulaire de contact sur cette page. Notre équipe vous contactera rapidement pour confirmer votre rendez-vous.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Proposez-vous un service de dépannage ou de remorquage ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Nous ne proposons pas directement de service de remorquage, mais nous travaillons en partenariat avec plusieurs sociétés de dépannage fiables. Si votre véhicule est en panne, nous pouvons coordonner le remorquage jusqu'à notre atelier. N'hésitez pas à nous contacter pour plus d'informations.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Quel est le délai pour obtenir un devis ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Nous nous efforçons de fournir un devis dans les 24 à 48 heures suivant la réception de votre demande pour les services standard. Pour des projets plus complexes ou des réparations spéciales, le délai peut être légèrement plus long. Nous vous tiendrons informé tout au long du processus.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 4 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Acceptez-vous les paiements en plusieurs fois ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Oui, pour les réparations importantes, nous proposons des facilités de paiement et des options de financement. Veuillez nous contacter pour discuter des différentes possibilités adaptées à votre situation. Nous acceptons également la plupart des cartes de crédit, les virements bancaires et les chèques.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 5 -->
                    <div class="accordion-item border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Avez-vous des succursales dans d'autres villes ?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Actuellement, nous disposons de trois ateliers en France : notre siège principal à Paris, ainsi que des ateliers à Lyon et Marseille. Vous pouvez contacter chaque atelier directement ou utiliser notre formulaire de contact central. Nous prévoyons d'ouvrir de nouveaux ateliers dans d'autres régions prochainement.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Branch Locations -->
<section class="branch-locations section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Nos Ateliers</h2>
            <p>Retrouvez-nous dans nos différentes succursales en France</p>
        </div>
        
        <div class="row mt-5">
            <!-- Paris Location -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="location-item p-4 bg-white rounded shadow text-center h-100">
                    <div class="location-icon mb-3">
                        <i class="fas fa-building fa-3x text-primary"></i>
                    </div>
                    <h4>Paris (Siège)</h4>
                    <p class="mb-2">123 Rue de l'Industrie, 75001 Paris</p>
                    <p class="mb-2"><i class="fas fa-phone-alt me-2"></i> +33 1 23 45 67 89</p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i> paris@dieselpumpengineering.com</p>
                    <p><i class="fas fa-clock me-2"></i> Lun-Ven: 8h-18h, Sam: 9h-13h</p>
                    <a href="https://goo.gl/maps/LINK_TO_PARIS" class="btn btn-outline-primary mt-3" target="_blank">Voir sur la carte</a>
                </div>
            </div>
            
            <!-- Lyon Location -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="location-item p-4 bg-white rounded shadow text-center h-100">
                    <div class="location-icon mb-3">
                        <i class="fas fa-building fa-3x text-primary"></i>
                    </div>
                    <h4>Lyon</h4>
                    <p class="mb-2">45 Avenue de la Technique, 69002 Lyon</p>
                    <p class="mb-2"><i class="fas fa-phone-alt me-2"></i> +33 4 78 12 34 56</p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i> lyon@dieselpumpengineering.com</p>
                    <p><i class="fas fa-clock me-2"></i> Lun-Ven: 8h-18h, Sam: 9h-13h</p>
                    <a href="https://goo.gl/maps/LINK_TO_LYON" class="btn btn-outline-primary mt-3" target="_blank">Voir sur la carte</a>
                </div>
            </div>
            
            <!-- Marseille Location -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="location-item p-4 bg-white rounded shadow text-center h-100">
                    <div class="location-icon mb-3">
                        <i class="fas fa-building fa-3x text-primary"></i>
                    </div>
                    <h4>Marseille</h4>
                    <p class="mb-2">78 Boulevard Mécanique, 13008 Marseille</p>
                    <p class="mb-2"><i class="fas fa-phone-alt me-2"></i> +33 4 91 87 65 43</p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i> marseille@dieselpumpengineering.com</p>
                    <p><i class="fas fa-clock me-2"></i> Lun-Ven: 8h-18h, Sam: 9h-13h</p>
                    <a href="https://goo.gl/maps/LINK_TO_MARSEILLE" class="btn btn-outline-primary mt-3" target="_blank">Voir sur la carte</a>
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
                <h2 class="mb-4" data-aos="fade-up">Besoin d'une intervention rapide ?</h2>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Notre équipe est prête à répondre à vos besoins urgents. Contactez-nous dès maintenant pour un service prioritaire.</p>
                <a href="tel:+33123456789" class="btn btn-outline btn-lg" data-aos="fade-up" data-aos-delay="200"><i class="fas fa-phone-alt me-2"></i> Appeler Maintenant</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('inc/footer.php'); ?>