<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yerodabi - Votre santé, notre priorité</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Yerodabi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hero">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="ms-3">
                    <a href="#" class="btn btn-outline-primary me-2">Se connecter</a>
                    <a href="#" class="btn btn-primary">S'inscrire</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="mb-4">Pour votre <span class="text-primary">santé</span>, mettez toutes les chances de
                        votre coté</h1>
                    <p class="lead mb-4">Concevoir un plan de traitement pour les patients, qu'il s'agisse de bilans de
                        santé, du suivi de maladies déjà diagnostiquées ou de l'achat de médicaments.</p>
                    <a href="#" class="btn btn-primary btn-lg">Prendre un rendez-vous</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <img src="/images/Healthcare.jpg" alt="Medical professionals" class="img-fluid floating">
                </div>
            </div>
        </div>
        <div class="wave-shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,165.3C672,139,768,117,864,128C960,139,1056,181,1152,181.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h5 class="subtitle">NOS SERVICES</h5>
                <h2 class="title">Nos services</h2>
            </div>
            <div class="row g-4">
                <!-- Service Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3>Bilan de santé</h3>
                        <p>Le check-up vous permet de faire un point sur votre état de santé.</p>
                    </div>
                </div>
                <!-- Service Card 2 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h3>Achat de médicaments</h3>
                        <p>Vos médicaments vous sont livrés dans les 48h des réceptions de votre ordonnance.</p>
                    </div>
                </div>
                <!-- Service Card 3 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Première consultation</h3>
                        <p>Cette consultation est indispensable à tous patients n'ayant pas encore utilisé la plateforme
                            yerodabi</p>
                    </div>
                </div>
                <!-- Service Card 4 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3>Examens médico-technique</h3>
                        <p>Examens complémentaires réalisés par nos spécialistes pour un diagnostic précis.</p>
                    </div>
                </div>
                <!-- Service Card 5 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="fas fa-file-medical"></i>
                        </div>
                        <h3>Maladie déjà identifiée</h3>
                        <p>Nos médecins vous donnent un avis sur votre maladie et proposent un suivi personnalisé.</p>
                    </div>
                </div>
                <!-- Service Card 6 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3>Consultation personnalisée</h3>
                        <p>Après la première consultation, nos médecins identifient vos maux pour vous proposer le bon
                            traitement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h5 class="subtitle">A PROPOS</h5>
                <h2 class="title">Qui sommes-nous ?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-img">
                        <img src="/images/Doctors.jpg" alt="About Yerodabi" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="about-content">
                        <p class="lead">Notre plateforme permet de prendre en charges des patients pour faire des
                            bilans de santé ou suivre l'état d'une maladie déjà identifiées mais aussi acheter des
                            médicaments en vente uniquement à l'étranger prescrit par un médecin.</p>
                        <p class="fw-bold mt-4">Nous avons le spécialiste dont vous avez besoin :</p>
                        <div class="specialists-grid">
                            <div class="specialist-item">Généraliste</div>
                            <div class="specialist-item">Neurologue</div>
                            <div class="specialist-item">Chirurgien</div>
                            <div class="specialist-item">Dentiste</div>
                            <div class="specialist-item">Ophtamologue</div>
                            <div class="specialist-item">Cardiologue</div>
                            <div class="specialist-item">Gériatre</div>
                            <div class="specialist-item">Pédiatre</div>
                            <div class="specialist-item">Gynécologue</div>
                            <div class="specialist-item">Médecin esthétique</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="counter"><span class="count" data-target="500">0</span><sup>+</sup></h3>
                            <p>Medecins</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="counter"><span class="count" data-target="58796">0</span><sup>+</sup></h3>
                            <p>Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="counter"><span class="count" data-target="500">0</span><sup>+</sup></h3>
                            <p>Cliniques partenaires</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile App Section -->
    <section class="app-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="title">DÉCOUVREZ NOTRE APPLICATION MOBILE</h2>
                <p>Bénéficiez de nos services de manière extrêmement simple grâce à notre application mobile.</p>
            </div>
            <div class="row mb-5">
                <!-- Patient App -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="app-card">
                        <div class="app-header">
                            <h3>JE SUIS PATIENT</h3>
                            <p>Gérez votre santé de manière simple et efficace</p>
                        </div>
                        <div class="app-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Consultation avec un specialiste</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Echanger avec un opérateur</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Suivre l'état d'avancement de mon dossier</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Faire un bilan de santé</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Acheter des médicaments</span>
                            </div>
                        </div>
                        <div class="app-download">
                            <h4>Télécharger l'application mobile</h4>
                            <div class="download-buttons">
                                <a href="#" class="download-btn"><img src="/images/playstore.png"
                                        alt="Google Play"></a>
                                <a href="#" class="download-btn"><img src="/images/appstore.png"
                                        alt="App Store"></a>
                            </div>
                        </div>
                        <div class="app-register">
                            <a href="#" class="btn btn-outline-primary">S'enregistrer</a>
                        </div>
                    </div>
                </div>

                <!-- Doctor App -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="app-card">
                        <div class="app-header">
                            <h3>JE SUIS MÉDECIN</h3>
                            <p>Gérez les dossiers médicaux et accédez rapidement aux informations vitales de vos
                                patients</p>
                        </div>
                        <div class="app-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Consulter un patient</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Echange par messagerie direct</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Monter le dossier médical d'un patient</span>
                            </div>
                        </div>
                        <div class="app-download">
                            <h4>Télécharger l'application mobile</h4>
                            <div class="download-buttons">
                                <a href="#" class="download-btn"><img src="/images/playstore.png"
                                        alt="Google Play"></a>
                                <a href="#" class="download-btn"><img src="/images/appstore.png"
                                        alt="App Store"></a>
                            </div>
                        </div>
                        <div class="app-register">
                            <a href="#" class="btn btn-outline-primary">S'enregistrer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="contact-img">
                        <img src="/images/Contact.jpg" alt="Contact Us" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="contact-form">
                        <div class="section-header mb-4">
                            <h5 class="subtitle">NOUS CONTACTER</h5>
                            <h2 class="title">Avez-vous d'autres préoccupations ?</h2>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Prénom" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Adresse mail" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Objet" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Commentaire" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="footer-brand">
                        <h3>Yerodabi</h3>
                        <p>Votre santé, notre priorité</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5>Navigation</h5>
                    <ul class="footer-links">
                        <li><a href="#hero">Accueil</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">A propos</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">Bilan de santé</a></li>
                        <li><a href="#">Consultation</a></li>
                        <li><a href="#">Achat de médicaments</a></li>
                        <li><a href="#">Examens médicaux</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Suivez-nous</h5>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-between align-items-center">
                <p class="mb-0">© {{ date('Y') }} Yerodabi, Tous les droits sont réservés.</p>
                <p class="mb-0">Par <a href="https://aptiotech.com/" target="_blank">AptioTech</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>

</html>
