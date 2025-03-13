<?php
$pageTitle = 'Galerie & Vidéos';
$currentPage = 'gallery';
include('inc/header.php');
?>

<!-- Navbar -->
<?php include('inc/navbar.php'); ?>

<!-- Page Header -->
<section class="page-header" style="background-image: url('assets/images/gallery-header.jpg');">
    <div class="container">
        <div class="page-title">
            <h1>Galerie & Vidéos</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galerie & Vidéos</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Notre Galerie</h2>
            <p>Découvrez notre atelier, nos équipements et notre travail en images</p>
        </div>
        
        <!-- Gallery Filter -->
        <div class="gallery-filter" data-aos="fade-up">
            <div class="filter-item active" data-filter="*">Tous</div>
            <div class="filter-item" data-filter=".atelier">Atelier</div>
            <div class="filter-item" data-filter=".equipements">Équipements</div>
            <div class="filter-item" data-filter=".reparations">Réparations</div>
            <div class="filter-item" data-filter=".projets">Projets Spéciaux</div>
        </div>
        
        <!-- Gallery Wrapper -->
        <div class="gallery-wrapper row" data-aos="fade-up">
            <!-- Gallery Item 1 -->
            <div class="col-lg-4 col-md-6 gallery-item atelier">
                <div class="gallery-img">
                    <img src="assets/images/gallery-1.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-1.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 2 -->
            <div class="col-lg-4 col-md-6 gallery-item equipements">
                <div class="gallery-img">
                    <img src="assets/images/gallery-2.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-2.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 3 -->
            <div class="col-lg-4 col-md-6 gallery-item reparations">
                <div class="gallery-img">
                    <img src="assets/images/gallery-3.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-3.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 4 -->
            <div class="col-lg-4 col-md-6 gallery-item projets">
                <div class="gallery-img">
                    <img src="assets/images/gallery-4.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-4.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 5 -->
            <div class="col-lg-4 col-md-6 gallery-item atelier">
                <div class="gallery-img">
                    <img src="assets/images/gallery-5.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-5.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 6 -->
            <div class="col-lg-4 col-md-6 gallery-item equipements">
                <div class="gallery-img">
                    <img src="assets/images/gallery-6.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-6.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 7 -->
            <div class="col-lg-4 col-md-6 gallery-item reparations">
                <div class="gallery-img">
                    <img src="assets/images/gallery-7.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-7.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 8 -->
            <div class="col-lg-4 col-md-6 gallery-item projets">
                <div class="gallery-img">
                    <img src="assets/images/gallery-8.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-8.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 9 -->
            <div class="col-lg-4 col-md-6 gallery-item atelier">
                <div class="gallery-img">
                    <img src="assets/images/gallery-9.jpg" alt="Gallery Image" class="img-fluid">
                    <div class="gallery-overlay">
                        <a href="assets/images/gallery-9.jpg" class="image-popup"><i class="fas fa-search-plus"></i></a>
                        <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="pagination-wrapper mt-5 text-center" data-aos="fade-up">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- Videos Section -->
<section class="videos-section section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Nos Vidéos</h2>
            <p>Découvrez nos processus de réparation et nos équipements en action</p>
        </div>
        
        <div class="row" data-aos="fade-up">
            <!-- Video Item 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-item">
                    <img src="assets/images/video-thumb-1.jpg" alt="Video Thumbnail" class="img-fluid rounded">
                    <div class="video-overlay">
                        <a href="https://www.youtube.com/watch?v=VIDEO_ID_1" class="play-btn"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="video-info mt-3">
                        <h5>Processus de Réparation d'Injecteurs</h5>
                        <p>Découvrez comment nous réparons et reconditionons les injecteurs diesel</p>
                    </div>
                </div>
            </div>
            
            <!-- Video Item 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-item">
                    <img src="assets/images/video-thumb-2.jpg" alt="Video Thumbnail" class="img-fluid rounded">
                    <div class="video-overlay">
                        <a href="https://www.youtube.com/watch?v=VIDEO_ID_2" class="play-btn"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="video-info mt-3">
                        <h5>Test de Pompes à Injection</h5>
                        <p>Visionnez notre processus de test avancé pour les pompes à injection</p>
                    </div>
                </div>
            </div>
            
            <!-- Video Item 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-item">
                    <img src="assets/images/video-thumb-3.jpg" alt="Video Thumbnail" class="img-fluid rounded">
                    <div class="video-overlay">
                        <a href="https://www.youtube.com/watch?v=VIDEO_ID_3" class="play-btn"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="video-info mt-3">
                        <h5>Calibration sur Banc d'Essai</h5>
                        <p>Découvrez notre processus de calibration précise des injecteurs</p>
                    </div>
                </div>
            </div>
            
            <!-- Video Item 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-item">
                    <img src="assets/images/video-thumb-4.jpg" alt="Video Thumbnail" class="img-fluid rounded">
                    <div class="video-overlay">
                        <a href="https://www.youtube.com/watch?v=VIDEO_ID_4" class="play-btn"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="video-info mt-3">
                        <h5>Présentation de Notre Atelier</h5>
                        <p>Visite guidée de nos installations et équipements</p>
                    </div>
                </div>
            </div>
            
            <!-- Video Item 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-item">
                    <img src="assets/images/video-thumb-5.jpg" alt="Video Thumbnail" class="img-fluid rounded">
                    <div class="video-overlay">
                        <a href="https://www.youtube.com/watch?v=VIDEO_ID_5" class="play-btn"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="video-info mt-3">
                        <h5>Diagnostic Électronique</h5>
                        <p>Comment nous utilisons la technologie pour diagnostiquer les problèmes</p>
                    </div>
                </div>
            </div>
            
            <!-- Video Item 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-item">
                    <img src="assets/images/video-thumb-6.jpg" alt="Video Thumbnail" class="img-fluid rounded">
                    <div class="video-overlay">
                        <a href="https://www.youtube.com/watch?v=VIDEO_ID_6" class="play-btn"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="video-info mt-3">
                        <h5>Témoignages de Clients</h5>
                        <p>Découvrez l'expérience de nos clients satisfaits</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Subscribe Button -->
        <div class="text-center mt-4" data-aos="fade-up">
            <a href="https://www.youtube.com/channel/CHANNEL_ID" class="btn btn-primary" target="_blank"><i class="fab fa-youtube me-2"></i> S'abonner à notre chaîne YouTube</a>
        </div>
    </div>
</section>

<!-- Before & After Section -->
<section class="before-after-section section-padding">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Avant & Après</h2>
            <p>Quelques exemples de nos travaux de réparation et reconditionnement</p>
        </div>
        
        <div class="row mt-5">
            <!-- Before & After Item 1 -->
            <div class="col-lg-6 mb-5" data-aos="fade-up">
                <div class="before-after-item">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="before-img">
                                <img src="assets/images/before-1.jpg" alt="Before" class="img-fluid rounded shadow">
                                <div class="label">Avant</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="after-img">
                                <img src="assets/images/after-1.jpg" alt="After" class="img-fluid rounded shadow">
                                <div class="label">Après</div>
                            </div>
                        </div>
                    </div>
                    <div class="before-after-content mt-3">
                        <h5>Reconditionnement d'Injecteurs Diesel</h5>
                        <p>Injecteurs diesel fortement encrassés et corrodés, restaurés à l'état neuf avec des performances optimales.</p>
                    </div>
                </div>
            </div>
            
            <!-- Before & After Item 2 -->
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="before-after-item">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="before-img">
                                <img src="assets/images/before-2.jpg" alt="Before" class="img-fluid rounded shadow">
                                <div class="label">Avant</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="after-img">
                                <img src="assets/images/after-2.jpg" alt="After" class="img-fluid rounded shadow">
                                <div class="label">Après</div>
                            </div>
                        </div>
                    </div>
                    <div class="before-after-content mt-3">
                        <h5>Réparation de Pompe à Injection</h5>
                        <p>Pompe à injection défaillante avec des composants internes endommagés, entièrement reconstruite et calibrée.</p>
                    </div>
                </div>
            </div>
            
            <!-- Before & After Item 3 -->
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up">
                <div class="before-after-item">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="before-img">
                                <img src="assets/images/before-3.jpg" alt="Before" class="img-fluid rounded shadow">
                                <div class="label">Avant</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="after-img">
                                <img src="assets/images/after-3.jpg" alt="After" class="img-fluid rounded shadow">
                                <div class="label">Après</div>
                            </div>
                        </div>
                    </div>
                    <div class="before-after-content mt-3">
                        <h5>Nettoyage de Rampe Common Rail</h5>
                        <p>Rampe common rail contaminée par des dépôts, nettoyée en profondeur pour restaurer la circulation optimale du carburant.</p>
                    </div>
                </div>
            </div>
            
            <!-- Before & After Item 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="before-after-item">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="before-img">
                                <img src="assets/images/before-4.jpg" alt="Before" class="img-fluid rounded shadow">
                                <div class="label">Avant</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="after-img">
                                <img src="assets/images/after-4.jpg" alt="After" class="img-fluid rounded shadow">
                                <div class="label">Après</div>
                            </div>
                        </div>
                    </div>
                    <div class="before-after-content mt-3">
                        <h5>Restauration de Régulateur de Pression</h5>
                        <p>Régulateur de pression défectueux causant des problèmes d'alimentation, restauré à ses spécifications d'origine.</p>
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
                <h2 class="mb-4" data-aos="fade-up">Vous avez un projet spécifique ?</h2>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Contactez-nous pour discuter de vos besoins particuliers. Notre équipe d'experts est prête à relever tous les défis liés aux systèmes d'injection.</p>
                <a href="contact.php" class="btn btn-outline btn-lg" data-aos="fade-up" data-aos-delay="200">Contactez-nous</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('inc/footer.php'); ?>