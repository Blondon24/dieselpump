<?php
$pageTitle = 'Partenaires';
$currentPage = 'partners';
include('inc/header.php');
?>

<!-- Navbar -->
<?php include('inc/navbar.php'); ?>

<!-- Page Header -->
<section class="page-header" style="background-image: url('assets/images/partners-header.jpg');">
    <div class="container">
        <div class="page-title">
            <h1>Nos Partenaires</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Partenaires</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Partners Overview -->
<section class="partners-overview section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Nos Partenaires Stratégiques</h2>
            <p>Nous collaborons avec les meilleures marques et entreprises du secteur pour vous offrir des services et des produits de qualité supérieure</p>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="partners-img">
                    <img src="assets/images/partners-overview.jpg" alt="Partenaires" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="partners-content">
                    <h3 class="mb-4">Une Collaboration pour l'Excellence</h3>
                    <p>Chez Diesel Pump Engineering, nous croyons fermement que la qualité de nos services repose également sur la qualité des partenaires avec lesquels nous travaillons. C'est pourquoi nous avons établi des partenariats solides avec les leaders de l'industrie automobile et des systèmes d'injection.</p>
                    <p>Ces collaborations stratégiques nous permettent de :</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Accéder aux pièces d'origine et aux dernières technologies</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Bénéficier de formations techniques avancées pour notre équipe</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Offrir des garanties constructeur sur toutes nos réparations</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Proposer des solutions innovantes et durables</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> Vous garantir un service conforme aux standards les plus exigeants</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Manufacturers Partners -->
<section class="manufacturers-partners section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Fabricants de Systèmes d'Injection</h2>
            <p>Partenaires officiels des plus grands fabricants mondiaux</p>
        </div>
        
        <div class="row mt-5">
            <!-- Partner 1 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/partner-logo-1.png" alt="Bosch" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Bosch</h4>
                    <p>Partenaire officiel de Bosch, leader mondial dans la fabrication de systèmes d'injection diesel et essence. Nous sommes agréés Bosch Diesel Center pour la réparation et le diagnostic de tous les systèmes d'injection Bosch.</p>
                    <div class="partner-services mt-4">
                        <h5>Services associés :</h5>
                        <ul>
                            <li>Réparation de systèmes Common Rail</li>
                            <li>Diagnostic électronique avancé</li>
                            <li>Fourniture de pièces d'origine</li>
                            <li>Calibration de haute précision</li>
                        </ul>
                    </div>
                    <div class="text-center mt-4">
                        <a href="https://www.bosch.fr" class="btn btn-outline-primary" target="_blank">Site officiel</a>
                    </div>
                </div>
            </div>
            
            <!-- Partner 2 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/partner-logo-2.png" alt="Delphi" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Delphi Technologies</h4>
                    <p>Centre agréé Delphi Technologies pour la réparation et la maintenance des systèmes d'injection. Notre équipe est certifiée pour intervenir sur toute la gamme des produits Delphi, garantissant des réparations conformes aux spécifications d'origine.</p>
                    <div class="partner-services mt-4">
                        <h5>Services associés :</h5>
                        <ul>
                            <li>Réparation d'injecteurs Delphi</li>
                            <li>Maintenance de pompes DFP</li>
                            <li>Test et calibration sur banc d'essai</li>
                            <li>Diagnostic électronique spécifique</li>
                        </ul>
                    </div>
                    <div class="text-center mt-4">
                        <a href="https://www.delphiautoparts.com" class="btn btn-outline-primary" target="_blank">Site officiel</a>
                    </div>
                </div>
            </div>
            
            <!-- Partner 3 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/partner-logo-3.png" alt="Denso" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Denso</h4>
                    <p>Partenaire officiel de Denso pour les systèmes d'injection. Notre collaboration avec ce fabricant japonais de renommée mondiale nous permet d'offrir des solutions de réparation et de maintenance pour tous les systèmes Denso équipant les véhicules asiatiques et européens.</p>
                    <div class="partner-services mt-4">
                        <h5>Services associés :</h5>
                        <ul>
                            <li>Réparation d'injecteurs diesel et essence</li>
                            <li>Maintenance de pompes à injection</li>
                            <li>Diagnostic spécifique pour véhicules asiatiques</li>
                            <li>Fourniture de pièces d'origine</li>
                        </ul>
                    </div>
                    <div class="text-center mt-4">
                        <a href="https://www.denso.com" class="btn btn-outline-primary" target="_blank">Site officiel</a>
                    </div>
                </div>
            </div>
            
            <!-- Partner 4 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/partner-logo-4.png" alt="Continental/VDO" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Continental/VDO</h4>
                    <p>Partenaire certifié Continental/VDO pour les systèmes d'injection et composants électroniques. Notre collaboration nous permet d'offrir des solutions complètes pour tous les systèmes Continental/VDO équipant une large gamme de véhicules européens.</p>
                    <div class="partner-services mt-4">
                        <h5>Services associés :</h5>
                        <ul>
                            <li>Réparation d'injecteurs et pompes VDO</li>
                            <li>Diagnostic électronique spécifique</li>
                            <li>Reprogrammation de calculateurs</li>
                            <li>Solutions pour systèmes AdBlue</li>
                        </ul>
                    </div>
                    <div class="text-center mt-4">
                        <a href="https://www.continental-automotive.com" class="btn btn-outline-primary" target="_blank">Site officiel</a>
                    </div>
                </div>
            </div>
            
            <!-- Partner 5 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/partner-logo-5.png" alt="Siemens" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Siemens</h4>
                    <p>Partenaire technique de Siemens pour les systèmes d'injection électroniques. Notre expertise sur les produits Siemens nous permet d'offrir des services de diagnostic et de réparation avancés pour ces systèmes d'injection de haute précision.</p>
                    <div class="partner-services mt-4">
                        <h5>Services associés :</h5>
                        <ul>
                            <li>Réparation de systèmes d'injection</li>
                            <li>Diagnostic électronique avancé</li>
                            <li>Reprogrammation de calculateurs</li>
                            <li>Maintenance préventive</li>
                        </ul>
                    </div>
                    <div class="text-center mt-4">
                        <a href="https://www.siemens.com/mobility" class="btn btn-outline-primary" target="_blank">Site officiel</a>
                    </div>
                </div>
            </div>
            
            <!-- Partner 6 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/partner-logo-6.png" alt="Yanmar" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Yanmar</h4>
                    <p>Partenaire autorisé Yanmar pour les systèmes d'injection destinés aux moteurs industriels, marins et agricoles. Notre collaboration avec ce fabricant japonais spécialisé nous permet d'offrir des solutions adaptées aux applications exigeantes.</p>
                    <div class="partner-services mt-4">
                        <h5>Services associés :</h5>
                        <ul>
                            <li>Réparation de systèmes d'injection industriels</li>
                            <li>Solutions pour moteurs marins</li>
                            <li>Maintenance d'équipements agricoles</li>
                            <li>Fourniture de pièces spécifiques</li>
                        </ul>
                    </div>
                    <div class="text-center mt-4">
                        <a href="https://www.yanmar.com" class="btn btn-outline-primary" target="_blank">Site officiel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Distributors Partners -->
<section class="distributors-partners section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Distributeurs et Fournisseurs</h2>
            <p>Nos partenaires pour la fourniture de pièces et d'équipements de qualité</p>
        </div>
        
        <div class="row mt-5">
            <!-- Distributor 1 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-1.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>Automotion</h5>
                </div>
            </div>
            
            <!-- Distributor 2 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-2.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>EuroDiesel</h5>
                </div>
            </div>
            
            <!-- Distributor 3 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-3.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>Parts Alliance</h5>
                </div>
            </div>
            
            <!-- Distributor 4 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-4.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>TechPart</h5>
                </div>
            </div>
            
            <!-- Distributor 5 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-5.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>Diesel Systems</h5>
                </div>
            </div>
            
            <!-- Distributor 6 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-6.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>AutoTech</h5>
                </div>
            </div>
            
            <!-- Distributor 7 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-7.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>Injection Pro</h5>
                </div>
            </div>
            
            <!-- Distributor 8 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="distributor-item text-center p-4 bg-white rounded shadow">
                    <img src="assets/images/distributor-8.png" alt="Distributor" class="img-fluid mb-3" style="max-height: 70px;">
                    <h5>DieselTech</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Partners -->
<section class="technical-partners section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Partenaires Techniques et Formation</h2>
            <p>Nos partenaires pour la formation et la recherche technologique</p>
        </div>
        
        <div class="row mt-5">
            <!-- Technical Partner 1 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/technical-partner-1.png" alt="Technical Partner" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Centre de Formation Technique</h4>
                    <p>Partenariat avec un centre de formation spécialisé qui assure la mise à jour des connaissances de notre équipe technique sur les dernières innovations en matière de systèmes d'injection.</p>
                    <div class="partner-services mt-4">
                        <h5>Avantages du partenariat :</h5>
                        <ul>
                            <li>Formation continue de nos techniciens</li>
                            <li>Accès aux dernières techniques de réparation</li>
                            <li>Certification officielle des compétences</li>
                            <li>Partage d'expertise et de cas pratiques</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Technical Partner 2 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/technical-partner-2.png" alt="Technical Partner" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">Institut de Recherche Automobile</h4>
                    <p>Collaboration avec un institut de recherche automobile pour rester à la pointe des avancées technologiques dans le domaine des systèmes d'injection et des motorisations alternatives.</p>
                    <div class="partner-services mt-4">
                        <h5>Avantages du partenariat :</h5>
                        <ul>
                            <li>Accès aux résultats de recherche</li>
                            <li>Participation à des projets innovants</li>
                            <li>Développement de solutions personnalisées</li>
                            <li>Préparation aux technologies futures</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Technical Partner 3 -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="partner-item p-4 bg-white rounded shadow h-100">
                    <div class="text-center mb-4">
                        <img src="assets/images/technical-partner-3.png" alt="Technical Partner" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h4 class="text-center mb-3">École d'Ingénieurs Automobile</h4>
                    <p>Partenariat avec une école d'ingénieurs spécialisée dans le domaine automobile, permettant l'accueil de stagiaires et le développement de projets communs dans le domaine des systèmes d'injection.</p>
                    <div class="partner-services mt-4">
                        <h5>Avantages du partenariat :</h5>
                        <ul>
                            <li>Recrutement des meilleurs talents</li>
                            <li>Projets de recherche appliquée</li>
                            <li>Transfert de connaissances</li>
                            <li>Développement d'outils spécifiques</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Become Partner -->
<section class="become-partner-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="become-partner-content">
                    <h2 class="mb-4">Devenez notre partenaire</h2>
                    <p>Chez Diesel Pump Engineering, nous sommes constamment à la recherche de nouveaux partenariats stratégiques qui permettent d'enrichir notre offre de services et d'apporter une valeur ajoutée à nos clients.</p>
                    <p>Si vous êtes un fabricant, un distributeur ou un prestataire de services dans le domaine automobile et que vous souhaitez explorer les possibilités de collaboration, nous serions ravis d'en discuter avec vous.</p>
                    <h5 class="mt-4">Les avantages de notre programme de partenariat :</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Visibilité auprès de notre clientèle fidèle</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Accès à notre réseau d'ateliers spécialisés</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Promotion de vos produits et services</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Développement de solutions techniques communes</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> Partage d'expertise et d'expérience</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary mt-4">Contactez-nous pour en savoir plus</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="become-partner-img">
                    <img src="assets/images/become-partner.jpg" alt="Become Partner" class="img-fluid rounded shadow-lg">
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
                <h2 class="mb-4" data-aos="fade-up">Prêt à travailler avec les meilleurs ?</h2>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Faites confiance à notre réseau de partenaires pour la réparation et la maintenance de vos systèmes d'injection. Contactez-nous dès aujourd'hui pour découvrir nos services de qualité.</p>
                <a href="contact.php" class="btn btn-outline btn-lg" data-aos="fade-up" data-aos-delay="200">Contactez-nous</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('inc/footer.php'); ?>