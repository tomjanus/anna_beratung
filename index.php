<?php
session_start();
$lang = isset($_GET['lang']) ? $_GET['lang'] : (isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en');
$_SESSION['lang'] = $lang;

$content = [
    'en' => [
        'title' => 'Dr. Anna Gamma - Psychological Counseling',
        'nav_home' => 'Home',
        'nav_services' => 'Services',
        'nav_process' => 'Process',
        'nav_about' => 'About',
        'nav_contact' => 'Contact',
        'hero_title' => 'Professional Psychological Support',
        'hero_subtitle' => 'Online counseling for children, adolescents, and adults',
        'hero_description' => 'Are you seeking professional support during personal or occupational challenges or times of crisis? As a psychologist, I support you through difficult life situations with a resource- and solution-oriented approach.',
        'hero_cta' => 'Schedule Consultation',
        'services_title' => 'My Services',
        'services_subtitle' => 'Professional counseling tailored to your individual needs',
        'life_work_title' => 'Life & Work',
        'life_work_items' => [
            'Personal/professional challenges',
            'Crisis management',
            'Stress management',
            'Decision-making & transitions',
            'Exam or interview stress',
            'Career-related goals'
        ],
        'emotions_title' => 'Emotions & Relationships',
        'emotions_items' => [
            'Relationship problems or separation',
            'Loss and grief',
            'Disturbing feelings or behaviours',
            'Communication',
            'Self-awareness'
        ],
        'growth_title' => 'Growth & Wellbeing',
        'growth_items' => [
            'Personal development',
            'Strengthen your self-esteem',
            'Becoming more mindful',
            'Transition to a new phase of life'
        ],
        'process_title' => 'My Approach',
        'process_subtitle' => 'Initial consultation & further course',
        'initial_title' => 'Initial Consultation',
        'initial_desc' => 'We get to know each other, clarify your concerns, define goals, and agree on the frequency of sessions.',
        'ongoing_title' => 'Ongoing Process',
        'ongoing_desc' => 'We develop a deeper understanding of your current situation and work in a solution-focused way, while also considering relevant biographical and social influences.',
        'integration_title' => 'Integration & Change',
        'integration_desc' => 'Together, we explore new perspectives, apply them to daily life, and make changes at your own pace in a safe space.',
        'about_title' => 'About Me',
        'about_subtitle' => 'Dr. Anna Gamma, psychologist and lecturer at university of applied sciences',
        'about_desc' => 'I combine in-depth psychological knowledge, scientific expertise, and extensive experience in counselling to support my clients with clarity, empathy, and effectiveness.',
        'experience_title' => 'Work Experience',
        'experience_items' => [
            'Over 15 years of experience providing counseling to children and adolescents',
            'Lecturer for psychological counselling at Kalaidos University of Applied Sciences',
            '14 years as project manager and public health consultant with UNICEF, Oxfam, and other NGOs',
            'Several years training experts in systematic behaviour change'
        ],
        'education_title' => 'Training & Education',
        'fees_title' => 'Fees & Conditions',
        'session_fee' => '130 CHF per 60-minute session',
        'payment_methods' => 'Payment: TWINT or Revolut',
        'cancellation' => 'Cancellations within 24 hours will be charged',
        'insurance_note' => 'Sessions cannot be billed through health insurance',
        'confidentiality' => 'All sessions are subject to legal confidentiality',
        'contact_title' => 'Contact',
        'contact_subtitle' => 'Ready to take the first step?',
        'contact_desc' => 'For an initial discussion or questions, please contact me directly by email. If necessary, we can also discuss open questions by telephone.',
        'contact_methods' => 'Online sessions via Skype, Zoom, or telephone',
        'footer_text' => '© 2024 Dr. Anna Gamma - Psychological Counseling. All rights reserved.'
    ],
    'de' => [
        'title' => 'Dr. Anna Gamma - Psychologische Beratung',
        'nav_home' => 'Startseite',
        'nav_services' => 'Angebot',
        'nav_process' => 'Vorgehen',
        'nav_about' => 'Über mich',
        'nav_contact' => 'Kontakt',
        'hero_title' => 'Professionelle psychologische Unterstützung',
        'hero_subtitle' => 'Psychologische Beratung online für Kinder, Jugendliche und Erwachsene',
        'hero_description' => 'Suchen Sie Unterstützung in persönlichen und beruflichen Belastungssituationen oder Krisen? Als Psychologin unterstütze ich Sie in schwierigen Lebenssituationen. Meine Arbeitsweise ist ressourcen- und lösungsorientiert.',
        'hero_cta' => 'Beratung vereinbaren',
        'services_title' => 'Mein Angebot',
        'services_subtitle' => 'Professionelle Beratung angepasst an Ihre individuellen Bedürfnisse',
        'life_work_title' => 'Leben & Beruf',
        'life_work_items' => [
            'Berufliche/persönliche Herausforderungen',
            'Krisenmanagement',
            'Stressmanagement',
            'Entscheidungsfindung & Übergänge',
            'Prüfungs- oder Vorstellungsangst',
            'Berufliche Ziele'
        ],
        'emotions_title' => 'Emotionen & Beziehungen',
        'emotions_items' => [
            'Beziehungsprobleme oder Trennung',
            'Verlust und Trauer',
            'Störende Gefühle oder Verhaltensweisen',
            'Kommunikation',
            'Selbstwahrnehmung'
        ],
        'growth_title' => 'Wachstum & Wohlbefinden',
        'growth_items' => [
            'Persönlichkeitsentwicklung',
            'Selbstwertgefühl stärken',
            'Achtsamer werden',
            'Übergang in eine neue Lebensphase'
        ],
        'process_title' => 'Mein Vorgehen',
        'process_subtitle' => 'Erstgespräch & weiterer Verlauf',
        'initial_title' => 'Erstgespräch',
        'initial_desc' => 'Im Erstgespräch lernen wir uns kennen, klären Ihr Anliegen, definieren Ziele und besprechen die Häufigkeit unserer Sitzungen.',
        'ongoing_title' => 'Prozess',
        'ongoing_desc' => 'Im weiteren Verlauf entwickeln wir ein tieferes Verständnis Ihrer aktuellen Situation. Dabei arbeiten wir lösungsorientiert und mit einem Fokus auf das Hier und Jetzt.',
        'integration_title' => 'Integration & Veränderung',
        'integration_desc' => 'Ziel ist es, neue Perspektiven zu entwickeln und in Ihren Alltag zu integrieren. In Ihrem eigenen Tempo gehen wir Schritt für Schritt Veränderungen an.',
        'about_title' => 'Über mich',
        'about_subtitle' => 'Dr. Anna Gamma, Psychologin und Fachhochschuldozentin',
        'about_desc' => 'Ich kombiniere fundiertes psychologisches Wissen, wissenschaftliche Expertise und umfangreiche Beratungserfahrung, um meine Klienten effektiv zu unterstützen.',
        'experience_title' => 'Arbeitserfahrungen',
        'experience_items' => [
            'Mehr als 15 Jahre Erfahrung in der Beratung von Kindern und Jugendlichen',
            'Dozentin für Psychologische Beratung an der Kalaidos Fachhochschule',
            '14 Jahre als Projektmanagerin und Public Health Beraterin für UNICEF, Oxfam und andere NGOs',
            'Mehrjährige Erfahrung in der Ausbildung von Experten in systematischer Verhaltensänderung'
        ],
        'education_title' => 'Aus- und Weiterbildungen',
        'fees_title' => 'Honorar & Konditionen',
        'session_fee' => '130 CHF pro 60-Minuten-Sitzung',
        'payment_methods' => 'Zahlung: per TWINT oder Revolut',
        'cancellation' => 'Absagen innerhalb von 24 Stunden werden verrechnet',
        'insurance_note' => 'Beratungen können nicht über die Krankenkasse abgerechnet werden',
        'confidentiality' => 'Die gemeinsame Arbeit unterliegt der gesetzlichen Schweigepflicht',
        'contact_title' => 'Kontakt',
        'contact_subtitle' => 'Bereit für den ersten Schritt?',
        'contact_desc' => 'Für ein erstes Gespräch oder Fragen, melden Sie sich bitte direkt per Mail. Bei Bedarf können wir offene Fragen auch telefonisch besprechen.',
        'contact_methods' => 'Online-Termine über Skype, Zoom oder Telefon',
        'footer_text' => '© 2024 Dr. Anna Gamma - Psychologische Beratung. Alle Rechte vorbehalten.'
    ]
];

$t = $content[$lang];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['title']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">Dr. Anna Gamma</div>
            <ul class="nav-links">
                <li><a href="#home"><?php echo $t['nav_home']; ?></a></li>
                <li><a href="#services"><?php echo $t['nav_services']; ?></a></li>
                <li><a href="#process"><?php echo $t['nav_process']; ?></a></li>
                <li><a href="#about"><?php echo $t['nav_about']; ?></a></li>
                <li><a href="#contact"><?php echo $t['nav_contact']; ?></a></li>
                <li class="lang-switcher">
                    <a href="?lang=en" class="<?php echo $lang === 'en' ? 'active' : ''; ?>">EN</a>
                    <a href="?lang=de" class="<?php echo $lang === 'de' ? 'active' : ''; ?>">DE</a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo $t['hero_title']; ?></h1>
                <h2><?php echo $t['hero_subtitle']; ?></h2>
                <p><?php echo $t['hero_description']; ?></p>
                <a href="#contact" class="cta-button"><?php echo $t['hero_cta']; ?></a>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2 class="section-title"><?php echo $t['services_title']; ?></h2>
            <p class="section-subtitle"><?php echo $t['services_subtitle']; ?></p>
            
            <div class="services-grid">
                <div class="service-card">
                    <h3><?php echo $t['life_work_title']; ?></h3>
                    <ul>
                        <?php foreach($t['life_work_items'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="service-card">
                    <h3><?php echo $t['emotions_title']; ?></h3>
                    <ul>
                        <?php foreach($t['emotions_items'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="service-card">
                    <h3><?php echo $t['growth_title']; ?></h3>
                    <ul>
                        <?php foreach($t['growth_items'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process">
        <!-- Added lake image as background element for calming therapeutic atmosphere -->
        <div class="process-background"></div>
        <div class="container">
            <h2 class="section-title"><?php echo $t['process_title']; ?></h2>
            <p class="section-subtitle"><?php echo $t['process_subtitle']; ?></p>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3><?php echo $t['initial_title']; ?></h3>
                    <p><?php echo $t['initial_desc']; ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3><?php echo $t['ongoing_title']; ?></h3>
                    <p><?php echo $t['ongoing_desc']; ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3><?php echo $t['integration_title']; ?></h3>
                    <p><?php echo $t['integration_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2 class="section-title"><?php echo $t['about_title']; ?></h2>
            <p class="section-subtitle"><?php echo $t['about_subtitle']; ?></p>
            
            <div class="about-content">
                <div class="about-text">
                    <p><?php echo $t['about_desc']; ?></p>
                    
                    <h3><?php echo $t['experience_title']; ?></h3>
                    <ul>
                        <?php foreach($t['experience_items'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="about-text">
                    <h3><?php echo $t['education_title']; ?></h3>
                    <ul>
                        <li><?php echo $lang === 'en' ? 'Master\'s degree in Psychology and Psychopathology, University of Zurich (2013)' : 'Lizentiat/Master in Psychologie und Psychopathologie der Universität Zürich (2013)'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Doctorate in social and health psychology, University of Zurich and EAWAG (2017)' : 'Doktorat in Sozial-und Gesundheitspsychologie an der Universität Zürich und der EAWAG (2017)'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Further training in emergency psychology at SBAP (2020)' : 'Weiterbildung in Notfallpsychologie beim SBAP (2020)'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Further training in hypnosystemic coaching at IEF (2024)' : 'Weiterbildung in hypnosystemischem Coaching am IEF (2024)'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Further training in medical hypnosis, University of Freiburg (2024-2025)' : 'Weiterbildung in medizinischer Hypnose an der Universität Freiburg i.B. (2024-2025)'; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="fees">
        <div class="container">
            <h2 class="section-title"><?php echo $t['fees_title']; ?></h2>
            
            <div class="fees-content">
                <div class="fee-highlight"><?php echo $t['session_fee']; ?></div>
                
                <ul class="fees-list">
                    <li><?php echo $t['payment_methods']; ?></li>
                    <li><?php echo $t['cancellation']; ?></li>
                    <li><?php echo $t['insurance_note']; ?></li>
                    <li><?php echo $t['confidentiality']; ?></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2 class="section-title"><?php echo $t['contact_title']; ?></h2>
            <p class="section-subtitle"><?php echo $t['contact_subtitle']; ?></p>
            
            <div class="contact-content">
                <p><?php echo $t['contact_desc']; ?></p>
                <p><strong><?php echo $t['contact_methods']; ?></strong></p>
                
                <div class="contact-info">
                    <h3>Email</h3>
                    <p><a href="mailto:mail@gammaberatung.ch">mail@gammaberatung.ch</a></p>
                    
                    <h3><?php echo $lang === 'en' ? 'Phone' : 'Telefon'; ?></h3>
                    <p><a href="tel:+41763694782">+41 76 369 47 82</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p><?php echo $t['footer_text']; ?></p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });
    </script>
</body>
</html>
