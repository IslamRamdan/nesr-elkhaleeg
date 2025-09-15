<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نسر الخليج - إلحاق العمالة المصرية بالخارج</title>
    <meta name="description"
        content="نسر الخليج - شركة رائدة في إلحاق العمالة المصرية بدول الخليج والعالم، نربط المواهب بأفضل الفرص الوظيفية">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }

        :root {
            --primary-color: #1B365D;
            --secondary-color: #C9A961;
            --accent-color: #F4E4BC;
            --text-dark: #2C3E50;
            --text-light: #6C757D;
            --white: #FFFFFF;
            --light-bg: #F8F9FA;
        }

        body {
            background: var(--white);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Header Styles */
        .navbar {
            background: var(--white) !important;
            box-shadow: 0 2px 20px rgba(27, 54, 93, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-color) !important;
            display: flex;
            align-items: center;
        }

        .navbar-brand i {
            color: var(--secondary-color);
            margin-left: 10px;
            font-size: 2rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .navbar-nav .nav-link {
            color: var(--primary-color) !important;
            font-weight: 600;
            padding: 0.5rem 1rem !important;
            margin: 0 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background: var(--accent-color);
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Hero Section */
        .hero-section-modern {
            background: linear-gradient(135deg, var(--white) 0%, var(--accent-color) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 120px 0 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-title-modern {
            color: var(--primary-color) !important;
            font-weight: 900 !important;
            font-size: clamp(1.5rem, 5vw, 2.7rem) !important;
            line-height: 1.2 !important;
            margin-bottom: 1.5rem !important;
            text-shadow: 0 2px 8px rgba(255, 255, 255, 0.5);
            animation: heroFadeIn 1.2s cubic-bezier(.4, 2, .6, 1);
        }

        @keyframes heroFadeIn {
            0% {
                opacity: 0;
                transform: translateY(40px) scale(0.98);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .typewriter-wrap {
            display: inline-block;
            white-space: nowrap;
        }

        #typewriter-cursor {
            display: inline-block;
            width: 2px;
            height: 1em;
            background: var(--secondary-color);
            margin: 0 2px;
            border-radius: 2px;
            vertical-align: -0.1em;
            animation: blink 0.9s steps(1) infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .gold-underline {
            width: 80px;
            height: 5px;
            background: var(--secondary-color);
            border-radius: 3px;
            margin: 12px 0 24px 0;
            box-shadow: 0 2px 12px rgba(201, 169, 97, 0.3);
            animation: goldLineIn 1.2s 0.5s cubic-bezier(.4, 2, .6, 1) backwards;
        }

        @keyframes goldLineIn {
            0% {
                width: 0;
                opacity: 0;
            }

            100% {
                width: 80px;
                opacity: 1;
            }
        }

        .hero-subtitle-modern {
            color: var(--primary-color) !important;
            font-size: clamp(1rem, 3vw, 1.2rem);
            margin-bottom: 2rem;
            max-width: 500px;
        }

        .hero-buttons-modern {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: flex-start;
        }

        .hero-btn-primary,
        .hero-btn-secondary {
            background: var(--primary-color) !important;
            color: var(--white) !important;
            border: none;
            border-radius: 30px;
            padding: 12px 32px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 4px 15px rgba(27, 54, 93, 0.3);
        }

        .hero-btn-secondary {
            background: var(--white) !important;
            color: var(--primary-color) !important;
            border: 2px solid var(--primary-color);
        }

        .hero-btn-primary:hover,
        .hero-btn-secondary:hover {
            background: var(--secondary-color) !important;
            color: var(--white) !important;
            border-color: var(--secondary-color) !important;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(201, 169, 97, 0.4);
        }

        .hero-logo-wrapper {
            background: var(--white) !important;
            border-radius: 30px;
            box-shadow: 0 8px 32px rgba(27, 54, 93, 0.1);
            padding: 20px;
            border: 3px solid rgba(27, 54, 93, 0.1);
            animation: floatLogo 3.5s ease-in-out infinite;
            max-width: 200px;
            margin: 0 auto;
        }

        @keyframes floatLogo {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .hero-logo {
            width: 100%;
            height: auto;
            max-width: 150px;
        }

        /* Services Section */
        .services-section {
            background: var(--white);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .services-title-modern,
        .features-title-modern {
            color: var(--primary-color) !important;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: 800;
            text-align: center;
            margin-bottom: 1rem;
        }

        .services-subtitle-modern,
        .features-subtitle-modern {
            color: var(--secondary-color);
            font-size: clamp(1rem, 3vw, 1.3rem);
            text-align: center;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .creative-service-card {
            background: var(--white);
            border-radius: 24px;
            box-shadow: 0 4px 24px rgba(27, 54, 93, 0.1);
            padding: 2rem;
            text-align: center;
            position: relative;
            transition: all 0.3s cubic-bezier(.4, 2, .6, 1);
            min-height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1.5px solid #f2f2f2;
        }

        .creative-service-card:hover {
            box-shadow: 0 8px 32px rgba(201, 169, 97, 0.3), 0 2px 8px rgba(27, 54, 93, 0.15);
            border-color: var(--secondary-color);
            transform: translateY(-6px) scale(1.02);
        }

        .creative-service-icon {
            width: 80px;
            height: 80px;
            background: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            box-shadow: 0 4px 18px rgba(27, 54, 93, 0.1);
            font-size: 2.3rem;
            color: var(--primary-color);
            border: 2px solid rgba(27, 54, 93, 0.2);
            transition: all 0.3s ease;
        }

        .creative-service-card:hover .creative-service-icon {
            color: var(--secondary-color);
            border-color: var(--secondary-color);
            box-shadow: 0 8px 24px rgba(201, 169, 97, 0.3);
        }

        .creative-service-title {
            font-size: clamp(1.1rem, 3vw, 1.35rem);
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .creative-service-description {
            color: var(--text-light);
            font-size: clamp(0.9rem, 2.5vw, 1rem);
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .creative-service-btn {
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 30px;
            padding: 10px 28px;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .creative-service-btn:hover {
            background: var(--secondary-color);
            color: var(--white);
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 6px 24px rgba(201, 169, 97, 0.3);
        }

        /* Features Section */
        .features-section {
            background: var(--light-bg);
            padding: 80px 0;
        }

        .feature-card-modern {
            background: var(--white);
            border-radius: 24px;
            box-shadow: 0 4px 24px rgba(27, 54, 93, 0.1);
            padding: 2rem;
            text-align: center;
            position: relative;
            transition: all 0.3s cubic-bezier(.4, 2, .6, 1);
            min-height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: 1.5px solid #f2f2f2;
        }

        .feature-card-modern:hover {
            box-shadow: 0 8px 32px rgba(201, 169, 97, 0.3), 0 2px 8px rgba(27, 54, 93, 0.15);
            border-color: var(--secondary-color);
            transform: translateY(-6px) scale(1.02);
        }

        .feature-icon-modern {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            font-size: 2rem;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .feature-card-modern:hover .feature-icon-modern {
            transform: scale(1.1);
            box-shadow: 0 8px 24px rgba(201, 169, 97, 0.4);
        }

        .feature-title {
            font-size: clamp(1rem, 3vw, 1.2rem);
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .feature-description {
            color: var(--text-light);
            font-size: clamp(0.9rem, 2.5vw, 1rem);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--light-bg) 0%, var(--white) 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 3rem;
            color: var(--white);
            box-shadow: 0 8px 32px rgba(27, 54, 93, 0.3);
            animation: float 3s ease-in-out infinite;
        }

        .cta-title {
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 1rem;
            text-align: center;
        }

        .cta-subtitle {
            font-size: clamp(1rem, 3vw, 1.2rem);
            color: var(--text-light);
            margin-bottom: 2rem;
            text-align: center;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(27, 54, 93, 0.3);
            display: inline-flex;
            align-items: center;
            margin: 0.5rem;
        }

        .cta-btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(201, 169, 97, 0.4);
            color: var(--white);
        }

        .cta-btn-secondary {
            background: var(--white);
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            margin: 0.5rem;
        }

        .cta-btn-secondary:hover {
            background: var(--secondary-color);
            color: var(--white);
            border-color: var(--secondary-color);
            transform: translateY(-3px);
        }

        /* Footer */
        .footer {
            background: var(--primary-color);
            color: var(--white);
            padding: 50px 0 20px;
        }

        .footer-brand {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .footer-brand i {
            color: var(--secondary-color);
            margin-left: 10px;
            font-size: 2rem;
        }

        .footer-description {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .footer-title {
            color: var(--secondary-color);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: block;
            padding: 0.3rem 0;
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: var(--secondary-color);
            padding-right: 10px;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--secondary-color);
            color: var(--white);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 2rem;
            padding-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }

            .hero-section-modern {
                padding: 100px 0 50px 0;
                text-align: center;
            }

            .hero-buttons-modern {
                justify-content: center;
            }

            .hero-logo-wrapper {
                max-width: 150px;
                margin-bottom: 2rem;
            }

            .services-section,
            .features-section,
            .cta-section {
                padding: 60px 0;
            }

            .creative-service-card,
            .feature-card-modern {
                margin-bottom: 2rem;
                min-height: auto;
                padding: 1.5rem;
            }

            .creative-service-icon,
            .feature-icon-modern {
                width: 60px;
                height: 60px;
                font-size: 1.8rem;
            }

            .cta-icon {
                width: 100px;
                height: 100px;
                font-size: 2.5rem;
            }

            .cta-btn-primary,
            .cta-btn-secondary {
                display: block;
                text-align: center;
                margin: 0.5rem auto;
                width: fit-content;
            }
        }

        @media (max-width: 576px) {
            .hero-section-modern {
                padding: 80px 0 40px 0;
            }

            .hero-logo-wrapper {
                max-width: 120px;
            }

            .creative-service-card,
            .feature-card-modern {
                padding: 1rem;
            }

            .creative-service-icon,
            .feature-icon-modern {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }

            .footer {
                text-align: center;
            }

            .social-links {
                justify-content: center;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            animation: fadeInUp 0.8s ease-out;
        }

        .company-logo {
            height: 40px;
            /* ثابت */
            width: auto;
            /* يتناسب مع الارتفاع */
            margin-left: 10px;
            /* لو محتاج تبعدها شوية */
        }

        .hero-logo-wrapper {
            display: flex;
            justify-content: center;
            /* يخلي اللوجو في النص أفقي */
            align-items: center;
            /* في النص رأسي */
            padding: 10px;
        }

        .hero-logo {
            max-height: 80px;
            /* أقصى ارتفاع */
            width: auto;
            /* يحافظ على النسبة */
            object-fit: contain;
        }

        .fallback-icon {
            font-size: 4rem;
            /* حجم الأيقونة */
            color: var(--secondary-color);
        }

        .hero-logo-wrapper {
            display: flex;
            justify-content: center;
            /* يخلي اللوجو في النص أفقي */
            align-items: center;
            /* يخليها في النص رأسي */
            padding: 20px;
            max-width: 250px;
            /* أقصى عرض للـ Wrapper */
            margin: 0 auto 2rem auto;
            /* في النص + مسافة تحت */
        }

        .hero-logo {
            max-width: 100%;
            /* ما تتعداش حجم الـ Wrapper */
            max-height: 150px;
            /* أقصى ارتفاع للصورة */
            width: auto;
            /* يحافظ على النسبة */
            height: auto;
            /* علشان ما تتمددش */
            object-fit: contain;
            /* يخلي الصورة كاملة من غير قص */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#home">
                @if (App\Models\CompanySetting::first() && App\Models\CompanySetting::first()->logo)
                    <img src="{{ asset('storage/' . App\Models\CompanySetting::first()->logo) }}" alt="Logo"
                        class="company-logo">
                @else
                    <i class="fas fa-dove"></i>
                @endif
                نسر الخليج
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars" style="color: var(--primary-color);"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">مميزاتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jobs">الوظائف</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="home" class="hero-section-modern">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <h1 class="hero-title-modern">
                        <span class="typewriter-wrap">
                            <span id="typewriter"></span>
                            <span id="typewriter-cursor">|</span>
                        </span>
                    </h1>
                    <div class="gold-underline"></div>
                    <p class="hero-subtitle-modern">
                        نحلق بأحلامكم عالياً ونربط المواهب المصرية بأفضل الفرص الوظيفية في دول الخليج والعالم مع ضمان
                        الجودة والمصداقية
                    </p>
                    <div class="hero-buttons-modern">
                        <a href="{{ route('sign.lead') }}" class="hero-btn-primary">
                            <i class="fas fa-rocket me-2"></i>
                            سجل معنا
                        </a>
                        <a href="#about" class="hero-btn-secondary">
                            <i class="fas fa-info-circle me-2"></i>
                            اكتشف خدماتنا
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2 text-center">
                    <div class="hero-logo-wrapper">
                        @if (App\Models\CompanySetting::first() && App\Models\CompanySetting::first()->logo)
                            <img src="{{ asset('storage/' . App\Models\CompanySetting::first()->logo) }}" alt="Logo"
                                class="hero-logo">
                        @else
                            <i class="fas fa-dove fallback-icon"></i>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="services-title-modern">خدماتنا لإلحاق العمالة بالخارج</h2>
                <p class="services-subtitle-modern">
                    نقدم مجموعة متكاملة من الخدمات لتسهيل إلحاق العمالة المصرية بالوظائف الخارجية المناسبة
                </p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="creative-service-card h-100">
                        <div class="creative-service-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4 class="creative-service-title">فرص عمل بالخارج</h4>
                        <p class="creative-service-description">
                            انطلق نحو مستقبلك المهني. وظائف حقيقية في شركات موثوقة حول العالم ودول الخليج
                        </p>
                        <a href="#jobs" class="creative-service-btn">
                            <i class="fas fa-search me-2"></i>
                            استكشف الوظائف
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="creative-service-card h-100">
                        <div class="creative-service-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="creative-service-title">تسجيل العمالة المصرية</h4>
                        <p class="creative-service-description">
                            سجّل بياناتك معنا وكن أول من يحصل على أفضل الفرص الوظيفية بالخارج
                        </p>
                        <a href="#register" class="creative-service-btn">
                            <i class="fas fa-user-edit me-2"></i>
                            سجّل الآن
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="creative-service-card h-100">
                        <div class="creative-service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="creative-service-title">خدمات الشركات</h4>
                        <p class="creative-service-description">
                            نساعد الشركات في العثور على أفضل الكفاءات المصرية المتخصصة
                        </p>
                        <a href="#companies" class="creative-service-btn">
                            <i class="fas fa-handshake me-2"></i>
                            للشركات
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="creative-service-card h-100">
                        <div class="creative-service-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4 class="creative-service-title">الدول المتاحة</h4>
                        <p class="creative-service-description">
                            اختر وجهتك بثقة. فرص عمل في دول الخليج وأبرز الدول حول العالم
                        </p>
                        <a href="#countries" class="creative-service-btn">
                            <i class="fas fa-map me-2"></i>
                            الوجهات المتاحة
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="creative-service-card h-100">
                        <div class="creative-service-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h4 class="creative-service-title">إرشادات ونصائح</h4>
                        <p class="creative-service-description">
                            نصائح ذهبية وإرشادات مهمة للنجاح في العمل بالخارج وتجنب المشاكل
                        </p>
                        <a href="#tips" class="creative-service-btn">
                            <i class="fas fa-lightbulb me-2"></i>
                            اقرأ النصائح
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="creative-service-card h-100">
                        <div class="creative-service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="creative-service-title">دعم واستشارات</h4>
                        <p class="creative-service-description">
                            دعم فوري واستشارات مجانية. معك في كل خطوة نحو تحقيق حلمك
                        </p>
                        <a href="#contact" class="creative-service-btn">
                            <i class="fas fa-phone me-2"></i>
                            تواصل معنا
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="features-title-modern">
                    <i class="fas fa-star me-3" style="color: var(--secondary-color);"></i>
                    لماذا تختار نسر الخليج؟
                </h2>
                <p class="features-subtitle-modern">
                    نتميز بالجودة والسرعة والأمان لضمان تجربة موثوقة للعمالة المصرية والشركات الخارجية
                </p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100">
                        <div class="feature-icon-modern">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-title">أمان تام للبيانات</h4>
                        <p class="feature-description">
                            نحافظ على سرية بياناتك ونستخدم أحدث تقنيات الحماية والتشفير المتقدمة
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100">
                        <div class="feature-icon-modern">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="feature-title">سرعة في الإجراءات</h4>
                        <p class="feature-description">
                            ننجز معاملاتك بسرعة وكفاءة عالية لتسهيل سفرك للعمل بالخارج في أقل وقت
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100">
                        <div class="feature-icon-modern">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="feature-title">دعم فني متميز</h4>
                        <p class="feature-description">
                            فريق دعم متخصص متواجد على مدار الساعة لمساعدتك في كل خطوة
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100">
                        <div class="feature-icon-modern">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h4 class="feature-title">أسعار تنافسية</h4>
                        <p class="feature-description">
                            نقدم خدماتنا بأفضل الأسعار في السوق وبدون أي رسوم خفية
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100">
                        <div class="feature-icon-modern">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="feature-title">فريق متخصص</h4>
                        <p class="feature-description">
                            خبراء في مجال التوظيف الدولي وإلحاق العمالة بدول الخليج والعالم
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-card-modern h-100">
                        <div class="feature-icon-modern">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4 class="feature-title">مصداقية وموثوقية</h4>
                        <p class="feature-description">
                            سجل حافل بالنجاحات وآلاف العملاء الراضين عن خدماتنا المتميزة
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="jobs" class="cta-section">
        <div class="container">
            <div class="text-center">
                <div class="cta-icon">
                    <i class="fas fa-rocket"></i>
                </div>

                <h2 class="cta-title">هل تبحث عن فرصة عمل بالخارج؟</h2>

                <p class="cta-subtitle">
                    سجل بياناتك أو تواصل معنا الآن لتحصل على أفضل الفرص مع ضمان المصداقية والسرعة في الإجراءات
                </p>

                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#contact" class="cta-btn-primary">
                        <i class="fas fa-phone me-2"></i>
                        تواصل معنا الآن
                    </a>
                    <a href="https://wa.me/201000000000" class="cta-btn-secondary" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>
                        واتساب
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-brand">
                        @if (App\Models\CompanySetting::first() && App\Models\CompanySetting::first()->logo)
                            <img src="{{ asset('storage/' . App\Models\CompanySetting::first()->logo) }}"
                                alt="Logo" class="company-logo">
                        @else
                            <i class="fas fa-dove"></i>
                        @endif
                        نسر الخليج
                    </div>
                    <p class="footer-description">
                        شركة رائدة في مجال إلحاق العمالة المصرية بالخارج، نحلق بأحلامكم عالياً ونربط المواهب بأفضل الفرص
                        الوظيفية في دول الخليج والعالم.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2">
                    <h5 class="footer-title">روابط سريعة</h5>
                    <a href="#home" class="footer-link">الرئيسية</a>
                    <a href="#services" class="footer-link">خدماتنا</a>
                    <a href="#features" class="footer-link">مميزاتنا</a>
                    <a href="#jobs" class="footer-link">الوظائف</a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="footer-title">خدماتنا</h5>
                    <a href="#" class="footer-link">فرص عمل بالخليج</a>
                    <a href="#" class="footer-link">تسجيل العمالة</a>
                    <a href="#" class="footer-link">خدمات الشركات</a>
                    <a href="#" class="footer-link">استشارات مجانية</a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="footer-title">تواصل معنا</h5>
                    <div class="footer-link">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        القاهرة، مصر
                    </div>
                    <div class="footer-link">
                        <i class="fas fa-phone me-2"></i>
                        +20 100 000 0000
                    </div>
                    <div class="footer-link">
                        <i class="fas fa-envelope me-2"></i>
                        info@nasrgulf.com
                    </div>
                    <div class="footer-link">
                        <i class="fab fa-whatsapp me-2"></i>
                        واتساب: +20 100 000 0000
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 نسر الخليج. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Typewriter Effect Script -->
    <script>
        const typewriterTexts = [
            'نحلق بأحلامكم عالياً',
            'بوابتكم لسوق العمل الخليجي',
            'نسر الخليج... رحلتكم للنجاح تبدأ هنا'
        ];

        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingSpeed = 80;
        let pauseAfterTyping = 1500;
        let pauseAfterDeleting = 500;

        function typeWriterEffect() {
            const typewriterElement = document.getElementById('typewriter');
            const cursor = document.getElementById('typewriter-cursor');

            if (!typewriterElement || !cursor) return;

            const currentText = typewriterTexts[textIndex];

            if (!isDeleting) {
                typewriterElement.textContent = currentText.slice(0, charIndex + 1);
                charIndex++;

                if (charIndex === currentText.length) {
                    isDeleting = true;
                    setTimeout(typeWriterEffect, pauseAfterTyping);
                } else {
                    setTimeout(typeWriterEffect, typingSpeed);
                }
            } else {
                typewriterElement.textContent = currentText.slice(0, charIndex - 1);
                charIndex--;

                if (charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % typewriterTexts.length;
                    setTimeout(typeWriterEffect, pauseAfterDeleting);
                } else {
                    setTimeout(typeWriterEffect, typingSpeed / 2);
                }
            }
        }

        // Start typewriter effect when page loads
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(typeWriterEffect, 1000);
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.background = 'var(--white)';
                navbar.style.backdropFilter = 'none';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-on-scroll');
                }
            });
        }, observerOptions);

        // Observe all service and feature cards
        document.querySelectorAll('.creative-service-card, .feature-card-modern').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>

</html>
