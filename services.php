<?php
$pageTitle = 'Nos Services';
$currentPage = 'services';
include('inc/header.php');
?>

<!-- Navbar -->
<?php include('inc/navbar.php'); ?>

<!-- Page Header -->
<section class="page-header" style="background-image: url('assets/images/image-de-fond-services.jpg');">
    <div class="container">
        <div class="page-title">
            <h1>Nos Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="services-overview section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Solutions Complètes pour Systèmes d'Injection</h2>
            <p>Diesel Pump Engineering vous propose une gamme complète de services spécialisés pour garantir les performances optimales de vos systèmes d'injection.</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="service-overview-img">
                    <img src="assets/images/services-overview.jpg" alt="Service Overview" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="service-overview-content">
                    <h3 class="mb-4">Expertise en Systèmes d'Injection</h3>
                    <p>Avec plus de 20 ans d'expérience, notre équipe de techniciens hautement qualifiés est spécialisée dans la réparation, la maintenance et la vente de systèmes d'injection pour tous types de moteurs diesel et essence.</p>
                    <p>Nous intervenons sur tous les types de véhicules :</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Véhicules particuliers</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Véhicules utilitaires</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Poids lourds</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Engins agricoles</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Bateaux</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Groupes électrogènes</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-3">Nous utilisons des équipements de dernière génération et des pièces d'origine ou de qualité équivalente pour garantir des réparations durables et fiables.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Services -->
<section class="detailed-services section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Nos Services Détaillés</h2>
            <p>Découvrez notre gamme complète de services spécialisés</p>
        </div>
        
        <!-- Service 1 -->
        <div class="service-detailed mb-5" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="service-img">
                        <img src="assets/images/service-1.jpg" alt="Réparation d'Injecteurs" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-content">
                        <h3 class="mb-3">Réparation d'Injecteurs</h3>
                        <p>Notre service de réparation d'injecteurs offre un diagnostic complet, un nettoyage professionnel et une réparation précise pour tous types d'injecteurs diesel et essence.</p>
                        <div class="mt-4">
                            <h5>Ce que nous proposons :</h5>
                            <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Test de débit et d'étanchéité</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Nettoyage par ultrasons</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Remplacement des pièces défectueuses</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Réglage électronique</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Calibration précise</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Test final sur banc d'essai</li>
                            </ul>
                        </div>
                        <div class="service-info mt-4">
                            <p><strong>Marques traitées :</strong> Bosch, Delphi, Denso, Siemens, Continental, Yanmar et plus</p>
                            <p><strong>Délai moyen :</strong> 1 à 3 jours ouvrables</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Service 2 -->
        <div class="service-detailed mb-5" data-aos="fade-up">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="service-img">
                        <img src="assets/images/service-2.jpg" alt="Pompes à Injection" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-content">
                        <h3 class="mb-3">Pompes à Injection</h3>
                        <p>Nous offrons un service complet de réparation et reconditionnement de pompes à injection pour tous types de véhicules, des voitures aux poids lourds.</p>
                        <div class="mt-4">
                            <h5>Ce que nous proposons :</h5>
                            <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Diagnostic complet sur banc d'essai</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Démontage et inspection détaillée</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Remplacement des pièces d'usure</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Réparation des systèmes mécaniques et électroniques</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Réglage et calibration</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Test final et garantie</li>
                            </ul>
                        </div>
                        <div class="service-info mt-4">
                            <p><strong>Types de pompes :</strong> Pompes en ligne, Rotatives, Common Rail, Pompes haute pression</p>
                            <p><strong>Délai moyen :</strong> 2 à 5 jours ouvrables</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Service 3 -->
        <div class="service-detailed mb-5" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="service-img">
                        <img src="assets/images/service-3.jpg" alt="Maintenance Préventive" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-content">
                        <h3 class="mb-3">Maintenance Préventive</h3>
                        <p>Notre programme de maintenance préventive est conçu pour prolonger la durée de vie de vos systèmes d'injection et prévenir les pannes coûteuses.</p>
                        <div class="mt-4">
                            <h5>Ce que nous proposons :</h5>
                            <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Inspection périodique des systèmes d'injection</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Nettoyage préventif des injecteurs</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Vérification des pressions et débits</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Contrôle électronique des paramètres</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Remplacement planifié des pièces d'usure</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Rapport détaillé de maintenance</li>
                            </ul>
                        </div>
                        <div class="service-info mt-4">
                            <p><strong>Contrats disponibles :</strong> Annuel, Semestriel, Trimestriel</p>
                            <p><strong>Idéal pour :</strong> Flottes de véhicules, Entreprises de transport, Exploitations agricoles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Service 4 -->
        <div class="service-detailed mb-5" data-aos="fade-up">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="service-img">
                        <img src="assets/images/service-4.jpg" alt="Diagnostic Électronique" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-content">
                        <h3 class="mb-3">Diagnostic Électronique</h3>
                        <p>Notre service de diagnostic électronique utilise des équipements de pointe pour identifier avec précision les problèmes liés à votre système d'injection.</p>
                        <div class="mt-4">
                            <h5>Ce que nous proposons :</h5>
                            <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Lecture des codes défauts</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Analyse des paramètres en temps réel</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Tests de performance et de consommation</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Diagnostic des capteurs et actuateurs</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Reprogrammation des calculateurs</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Rapport détaillé et recommandations</li>
                            </ul>
                        </div>
                        <div class="service-info mt-4">
                            <p><strong>Équipements utilisés :</strong> Valises de diagnostic multimarques, Testeurs spécifiques</p>
                            <p><strong>Durée moyenne :</strong> 1 à 2 heures</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Service 5 -->
        <div class="service-detailed mb-5" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="service-img">
                        <img src="assets/images/service-5.jpg" alt="Vente de Pièces" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-content">
                        <h3 class="mb-3">Vente de Pièces</h3>
                        <p>Nous proposons une large gamme de pièces détachées d'origine et de qualité équivalente pour tous les systèmes d'injection automobile.</p>
                        <div class="mt-4">
                            <h5>Ce que nous proposons :</h5>
                            <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Injecteurs neufs et reconditionnés</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Pompes à injection</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Rampes d'injection Common Rail</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Capteurs et actionneurs</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Kits de réparation</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Filtres à carburant spécifiques</li>
                            </ul>
                        </div>
                        <div class="service-info mt-4">
                            <p><strong>Marques disponibles :</strong> Toutes les grandes marques du marché</p>
                            <p><strong>Garantie :</strong> 12 mois sur toutes les pièces</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Service 6 -->
        <div class="service-detailed" data-aos="fade-up">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="service-img">
                        <img src="assets/images/service-6.jpg" alt="Formation Technique" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-content">
                        <h3 class="mb-3">Formation Technique</h3>
                        <p>Nous proposons des formations spécialisées pour les professionnels sur les technologies modernes des systèmes d'injection automobile.</p>
                        <div class="mt-4">
                            <h5>Ce que nous proposons :</h5>
                            <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Formations théoriques et pratiques</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Sessions adaptées à différents niveaux</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Études de cas réels</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Travaux pratiques sur banc d'essai</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Documentation technique complète</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Certificat de formation</li>
                            </ul>
                        </div>
                        <div class="service-info mt-4">
                            <p><strong>Public cible :</strong> Mécaniciens, Techniciens, Étudiants en mécanique</p>
                            <p><strong>Durée des formations :</strong> De 1 à 5 jours selon le programme</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section section-padding">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Questions Fréquentes</h2>
            <p>Réponses aux questions les plus fréquemment posées sur nos services</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="accordion" id="faqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quel est le délai de réparation pour des injecteurs diesel ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Pour la réparation d'injecteurs diesel, notre délai standard est de 1 à 3 jours ouvrables. Cependant, en cas d'urgence, nous proposons également un service express avec une intervention sous 24 heures (sous réserve de disponibilité des pièces nécessaires).
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Offrez-vous une garantie sur vos réparations ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Oui, toutes nos réparations sont garanties. Nous offrons une garantie de 12 mois sur les pièces et la main-d'œuvre pour les réparations d'injecteurs et de pompes à injection. Cette garantie couvre tout défaut de fonctionnement lié à notre intervention.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Comment puis-je savoir si mes injecteurs doivent être réparés ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Plusieurs symptômes peuvent indiquer un problème d'injecteurs : démarrage difficile, ralenti instable, augmentation de la consommation de carburant, perte de puissance, fumée excessive à l'échappement ou voyant moteur allumé. Si vous constatez un ou plusieurs de ces symptômes, nous vous recommandons de faire diagnostiquer votre véhicule.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 4 -->
                    <div class="accordion-item mb-3 border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Travaillez-vous sur tous les types de véhicules ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Oui, notre expertise couvre tous les types de véhicules : voitures particulières, véhicules utilitaires, poids lourds, engins agricoles, bateaux et groupes électrogènes. Nous intervenons sur toutes les marques et tous les modèles, qu'ils soient diesel ou essence.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 5 -->
                    <div class="accordion-item border rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Proposez-vous un service de diagnostic à distance ?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Pour certains problèmes, nous pouvons fournir une première évaluation à distance en fonction des symptômes décrits. Cependant, pour un diagnostic précis et fiable, il est préférable d'amener votre véhicule dans notre atelier où nous disposons de l'équipement spécialisé nécessaire pour effectuer des tests complets.
                            </div>
                        </div>
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
                <h2 class="mb-4" data-aos="fade-up">Besoin d'un service spécifique ?</h2>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="100">N'hésitez pas à nous contacter pour discuter de vos besoins spécifiques. Notre équipe d'experts est à votre disposition pour vous conseiller et vous proposer la solution la mieux adaptée.</p>
                <a href="contact.php" class="btn btn-outline btn-lg" data-aos="fade-up" data-aos-delay="200">Contactez-nous</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('inc/footer.php'); ?>