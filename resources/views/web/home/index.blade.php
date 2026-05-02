@extends('layouts.app')

@section('title', 'FinBank - Solusi Keuangan Digital Masa Depan')

@section('meta_description',
    'Nikmati layanan perbankan digital terbaik dengan keamanan tingkat tinggi, bunga
    kompetitif, dan kemudahan transaksi 24/7.')

    @push('styles')
        <style>
            /* ==================== */
            /* HERO CAROUSEL OPTIMIZED */
            /* ==================== */
            .hero-carousel {
                height: 75vh;
                min-height: 550px;
                border-radius: 0 0 0 180px;
                overflow: hidden;
                position: relative;
                box-shadow: 0 30px 60px -20px rgba(0, 0, 0, 0.3);
                z-index: 1;
            }

            /* Fade transition untuk slide - lebih smooth */
            .carousel-slide {
                transition: opacity 0.9s cubic-bezier(0.4, 0, 0.2, 1);
                will-change: opacity;
            }

            /* Overlay gradient yang lebih halus */
            .carousel-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(135deg,
                        rgba(0, 0, 0, 0.55) 0%,
                        rgba(0, 0, 0, 0.35) 50%,
                        rgba(0, 0, 0, 0.2) 100%);
                z-index: 10;
            }

            /* Logo di kiri carousel */
            .carousel-logo {
                position: absolute;
                bottom: 35px;
                left: 35px;
                z-index: 25;
                display: flex;
                align-items: center;
                gap: 14px;
                background: rgba(255, 255, 255, 0.12);
                backdrop-filter: blur(12px);
                padding: 10px 24px;
                border-radius: 60px;
                border: 1px solid rgba(255, 255, 255, 0.25);
                pointer-events: none;
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .carousel-logo img {
                height: 42px;
                width: auto;
                filter: brightness(0) invert(1);
            }

            .carousel-logo span {
                color: white;
                font-weight: 600;
                font-size: 1.2rem;
                letter-spacing: 1px;
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            }

            /* ========== CURVE OVERLAY ========== */
            .carousel-curve-container {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 320px;
                height: 320px;
                z-index: 15;
                pointer-events: none;
                overflow: hidden;
            }

            .carousel-curve-glow {
                position: absolute;
                bottom: -100px;
                left: -100px;
                width: 260px;
                height: 260px;
                background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 70%);
                border-radius: 50%;
                filter: blur(15px);
                z-index: 16;
            }

            .carousel-curve-white {
                position: absolute;
                bottom: -70px;
                left: -70px;
                width: 200px;
                height: 200px;
                background: rgba(255, 255, 255, 0.08);
                border-radius: 50%;
                filter: blur(12px);
                z-index: 17;
            }

            .carousel-curve-gradient {
                position: absolute;
                bottom: -50px;
                left: -50px;
                width: 160px;
                height: 160px;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.05) 100%);
                border-radius: 50%;
                z-index: 18;
            }

            /* Navigation Buttons */
            .carousel-nav-btn {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                z-index: 30;
            }

            .carousel-nav-btn:hover {
                transform: translateY(-50%) scale(1.1);
                background: rgba(255, 255, 255, 0.35);
            }

            /* Dots */
            .dot {
                transition: all 0.3s ease;
                cursor: pointer;
            }

            .dot.active {
                width: 28px;
                background: white;
                box-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
            }

            /* ==================== */
            /* TAB NAVIGATION STYLES */
            /* ==================== */
            .info-section {
                width: 100%;
                background: linear-gradient(to bottom, #f8fafc, #f1f5f9);
                padding: 2rem 0 3rem;
            }

            .tab-buttons {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.5rem;
                margin-bottom: 2rem;
                padding: 0 1rem;
            }

            .tab-btn {
                padding: 0.75rem 1.75rem;
                font-size: 0.95rem;
                font-weight: 600;
                border: none;
                background: white;
                color: #64748b;
                cursor: pointer;
                transition: all 0.3s ease;
                border-radius: 50px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            }

            .tab-btn:hover {
                transform: translateY(-2px);
            }

            .tab-btn.active {
                color: white;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            }

            .tab-btn.promo.active {
                background: #d97706;
            }

            .tab-btn.berita.active {
                background: #2563eb;
            }

            .tab-btn.pemberitahuan.active {
                background: #4f46e5;
            }

            .tab-btn.waspada.active {
                background: #dc2626;
            }

            .tab-btn.promo:hover {
                color: #d97706;
                background: #fef3c7;
            }

            .tab-btn.berita:hover {
                color: #2563eb;
                background: #dbeafe;
            }

            .tab-btn.pemberitahuan:hover {
                color: #4f46e5;
                background: #e0e7ff;
            }

            .tab-btn.waspada:hover {
                color: #dc2626;
                background: #fee2e2;
            }

            .tab-content {
                display: none;
                animation: fadeIn 0.5s ease;
            }

            .tab-content.active {
                display: block;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .info-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 1.5rem;
                width: 100%;
                padding: 0 1rem;
            }

            .info-card {
                background: white;
                border-radius: 1rem;
                overflow: hidden;
                transition: all 0.35s ease;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
                cursor: pointer;
                border: 1px solid #e2e8f0;
            }

            .info-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.15);
            }

            .card-image {
                width: 100%;
                height: 160px;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            .info-card:hover .card-image {
                transform: scale(1.05);
            }

            .image-container {
                overflow: hidden;
                position: relative;
            }

            .card-badge {
                position: absolute;
                top: 12px;
                left: 12px;
                padding: 0.25rem 0.75rem;
                border-radius: 20px;
                font-size: 0.7rem;
                font-weight: 600;
            }

            .badge-promo {
                background: #fef3c7;
                color: #d97706;
            }

            .badge-news {
                background: #dbeafe;
                color: #2563eb;
            }

            .badge-info {
                background: #e0e7ff;
                color: #4f46e5;
            }

            .badge-warning {
                background: #fee2e2;
                color: #dc2626;
            }

            .card-content {
                padding: 1rem;
            }

            .card-title {
                font-size: 1rem;
                font-weight: 700;
                margin-bottom: 0.5rem;
            }

            .card-desc {
                font-size: 0.8rem;
                color: #64748b;
                margin-bottom: 0.75rem;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .card-date {
                font-size: 0.7rem;
                color: #94a3b8;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 0.75rem;
            }

            .readmore-link {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                font-size: 0.75rem;
                font-weight: 600;
                color: #2563eb;
                transition: all 0.3s ease;
                background: transparent;
                border: none;
                cursor: pointer;
                padding: 0;
            }

            .readmore-link:hover {
                color: #1d4ed8;
                gap: 0.75rem;
            }

            .readmore-link i {
                font-size: 0.7rem;
                transition: transform 0.3s ease;
            }

            .readmore-link:hover i {
                transform: translateX(3px);
            }

            .tab-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 1.5rem;
                padding: 0 1rem;
            }

            .tab-header h2 {
                font-size: 1.25rem;
                font-weight: 700;
                color: #1e293b;
            }

            .tab-header-link {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                font-size: 0.85rem;
                font-weight: 600;
                color: #2563eb;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .tab-header-link:hover {
                color: #1d4ed8;
                gap: 0.75rem;
            }

            /* Products */
            .products-container {
                width: 100%;
                position: relative;
                z-index: 2;
                background: linear-gradient(to bottom, #ffffff, #f8fafc);
            }

            .products-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 0;
                width: 100%;
                margin: 0;
            }

            .product-card {
                transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
                border-radius: 0;
                position: relative;
                z-index: 1;
            }

            .product-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.2);
                z-index: 10;
                background: white;
            }

            .product-icon {
                transition: all 0.3s ease;
            }

            .product-card:hover .product-icon {
                transform: scale(1.05);
            }

            .product-button {
                transition: all 0.3s ease;
            }

            .product-button:hover {
                background: #2563eb;
                color: white;
                transform: translateY(-2px);
            }

            .product-card:not(:last-child) {
                border-right: 1px solid #e2e8f0;
            }

            /* ==================== */
            /* ABOUT SECTION - FULL WIDTH DI BAWAH */
            /* ==================== */
            .about-full-section {
                width: 100%;
                background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
                position: relative;
                overflow: hidden;
            }

            .about-full-container {
                max-width: 1400px;
                margin: 0 auto;
                display: flex;
                align-items: center;
                gap: 0;
            }

            .about-full-content {
                flex: 1;
                padding: 4rem 3rem;
                color: white;
            }

            .about-full-title {
                font-size: 2.5rem;
                font-weight: 700;
                color: white;
                line-height: 1.3;
                margin-bottom: 1.5rem;
            }

            .about-full-title span {
                color: #60a5fa;
                position: relative;
            }

            .about-full-title span::after {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 100%;
                height: 3px;
                background: linear-gradient(90deg, #60a5fa, #3b82f6);
                border-radius: 3px;
            }

            .about-full-description {
                color: #cbd5e1;
                font-size: 1rem;
                line-height: 1.7;
                margin-bottom: 2rem;
            }

            .about-full-features {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 1.25rem;
                margin-bottom: 2rem;
            }

            .about-full-feature {
                display: flex;
                align-items: center;
                gap: 0.75rem;
            }

            .feature-full-icon {
                width: 44px;
                height: 44px;
                background: rgba(59, 130, 246, 0.15);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #60a5fa;
                font-size: 1.2rem;
                transition: all 0.3s ease;
            }

            .about-full-feature:hover .feature-full-icon {
                background: #3b82f6;
                color: white;
                transform: scale(1.05);
            }

            .feature-full-text h4 {
                font-size: 1rem;
                font-weight: 700;
                color: white;
                margin-bottom: 0.25rem;
            }

            .feature-full-text p {
                font-size: 0.8rem;
                color: #94a3b8;
            }

            .about-full-cta {
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                padding: 0.9rem 2rem;
                background: linear-gradient(135deg, #3b82f6, #2563eb);
                color: white;
                font-weight: 600;
                border-radius: 50px;
                text-decoration: none;
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
            }

            .about-full-cta:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
                gap: 1rem;
            }

            .about-full-image {
                flex: 1;
                position: relative;
                min-height: 550px;
                overflow: hidden;
            }

            .about-full-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
            }

            .image-overlay-stats {
                position: absolute;
                bottom: 40px;
                right: 40px;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                padding: 1.25rem 1.75rem;
                border-radius: 1rem;
                box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.2);
                z-index: 10;
                display: flex;
                align-items: center;
                gap: 1.5rem;
            }

            .stat-item {
                text-align: center;
            }

            .stat-number {
                font-size: 1.8rem;
                font-weight: 800;
                color: #1e293b;
                line-height: 1;
            }

            .stat-number span {
                font-size: 1rem;
                font-weight: 500;
                color: #64748b;
            }

            .stat-label {
                font-size: 0.7rem;
                color: #64748b;
                font-weight: 500;
                margin-top: 0.25rem;
            }

            .stat-divider {
                width: 1px;
                height: 40px;
                background: #e2e8f0;
            }

            /* ==================== */
            /* PARTNERS / KERJASAMA SECTION - MARQUEE */
            /* ==================== */
            .partners-section {
                width: 100%;
                background: white;
                padding: 3rem 0;
                overflow: hidden;
                border-top: 1px solid #e2e8f0;
                border-bottom: 1px solid #e2e8f0;
            }

            .partners-header {
                text-align: center;
                margin-bottom: 2rem;
            }

            .partners-title {
                font-size: 1.5rem;
                font-weight: 700;
                color: #1e293b;
                margin-bottom: 0.5rem;
            }

            .partners-subtitle {
                font-size: 0.9rem;
                color: #64748b;
            }

            /* Marquee Animation */
            .marquee-container {
                width: 100%;
                overflow: hidden;
                position: relative;
            }

            .marquee-track {
                display: flex;
                align-items: center;
                gap: 4rem;
                animation: marquee 25s linear infinite;
                width: max-content;
            }

            .marquee-track:hover {
                animation-play-state: paused;
            }

            @keyframes marquee {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .partner-logo {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-width: 140px;
                padding: 1rem;
                transition: all 0.3s ease;
                opacity: 0.7;
            }

            .partner-logo:hover {
                opacity: 1;
                transform: scale(1.05);
            }

            .partner-logo img {
                height: 60px;
                width: auto;
                object-fit: contain;
                filter: grayscale(100%);
                transition: filter 0.3s ease;
            }

            .partner-logo:hover img {
                filter: grayscale(0%);
            }

            .partner-name {
                font-size: 0.7rem;
                color: #94a3b8;
                margin-top: 0.5rem;
                text-align: center;
            }

            /* Responsive */
            @media (max-width: 1024px) {
                .about-full-container {
                    flex-direction: column;
                }

                .about-full-content {
                    padding: 3rem 2rem;
                }

                .about-full-image {
                    width: 100%;
                    min-height: 400px;
                }

                .about-full-image img {
                    position: relative;
                    height: 400px;
                    object-fit: cover;
                }

                .info-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 768px) {
                .hero-carousel {
                    height: 65vh;
                    border-radius: 0 0 0 80px;
                }

                .carousel-logo {
                    bottom: 20px;
                    left: 20px;
                    padding: 6px 16px;
                }

                .carousel-logo img {
                    height: 28px;
                }

                .products-grid {
                    grid-template-columns: 1fr;
                }

                .product-card:not(:last-child) {
                    border-right: none;
                    border-bottom: 1px solid #e2e8f0;
                }

                .about-full-features {
                    grid-template-columns: 1fr;
                }

                .about-full-title {
                    font-size: 1.8rem;
                }

                .image-overlay-stats {
                    bottom: 20px;
                    right: 20px;
                    left: 20px;
                    padding: 1rem;
                    gap: 1rem;
                }

                .stat-number {
                    font-size: 1.3rem;
                }

                .tab-btn {
                    padding: 0.5rem 1rem;
                    font-size: 0.75rem;
                }

                .info-grid {
                    grid-template-columns: 1fr;
                }

                .partner-logo {
                    min-width: 100px;
                }

                .partner-logo img {
                    height: 40px;
                }

                .marquee-track {
                    gap: 2rem;
                    animation-duration: 20s;
                }
            }

            @media (max-width: 480px) {
                .hero-carousel {
                    height: 60vh;
                    border-radius: 0 0 0 50px;
                }

                .carousel-logo span {
                    display: none;
                }

                .image-overlay-stats {
                    flex-direction: column;
                    gap: 0.75rem;
                    text-align: center;
                }

                .stat-divider {
                    display: none;
                }

                .partners-title {
                    font-size: 1.2rem;
                }
            }
        </style>
    @endpush

@section('content')
    <!-- Hero Carousel Section -->
    <section id="home" class="hero-carousel relative w-full bg-slate-900">
        <div class="carousel-curve-container">
            <div class="carousel-curve-glow"></div>
            <div class="carousel-curve-white"></div>
            <div class="carousel-curve-gradient"></div>
        </div>
        <div class="carousel-overlay"></div>
        <div class="carousel-logo">
            <img src="{{ asset('assets/logo4.png') }}" alt="FinBank Logo">
            <span>FinBank</span>
        </div>

        <div class="carousel-slide absolute top-0 left-0 w-full h-full opacity-0" data-slide="0">
            <img src="{{ asset('assets/test0.jpg') }}" alt="Slide 1"
                class="absolute top-0 left-0 w-full h-full object-cover">
        </div>
        <div class="carousel-slide absolute top-0 left-0 w-full h-full opacity-0" data-slide="1">
            <img src="{{ asset('assets/test1.jpg') }}" alt="Slide 2"
                class="absolute top-0 left-0 w-full h-full object-cover">
        </div>
        <div class="carousel-slide absolute top-0 left-0 w-full h-full opacity-0" data-slide="2">
            <img src="{{ asset('assets/test2.jpg') }}" alt="Slide 3"
                class="absolute top-0 left-0 w-full h-full object-cover">
        </div>
        <div class="carousel-slide absolute top-0 left-0 w-full h-full opacity-0" data-slide="3">
            <img src="{{ asset('assets/test3.jpg') }}" alt="Slide 4"
                class="absolute top-0 left-0 w-full h-full object-cover">
        </div>

        <button
            class="carousel-nav-btn prev absolute top-1/2 -translate-y-1/2 left-5 md:left-8 w-11 h-11 md:w-12 md:h-12 bg-white/15 backdrop-blur-md rounded-full flex items-center justify-center border border-white/25 transition-all duration-300 hover:bg-white/35 hover:scale-110"
            id="prevBtn">
            <i class="fas fa-chevron-left text-white text-sm md:text-base"></i>
        </button>
        <button
            class="carousel-nav-btn next absolute top-1/2 -translate-y-1/2 right-5 md:right-8 w-11 h-11 md:w-12 md:h-12 bg-white/15 backdrop-blur-md rounded-full flex items-center justify-center border border-white/25 transition-all duration-300 hover:bg-white/35 hover:scale-110"
            id="nextBtn">
            <i class="fas fa-chevron-right text-white text-sm md:text-base"></i>
        </button>

        <div class="carousel-dots absolute bottom-6 md:bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-30"
            id="carouselDots">
            <div class="dot w-2 h-2 rounded-full bg-white/50" data-slide="0"></div>
            <div class="dot w-2 h-2 rounded-full bg-white/50" data-slide="1"></div>
            <div class="dot w-2 h-2 rounded-full bg-white/50" data-slide="2"></div>
            <div class="dot w-2 h-2 rounded-full bg-white/50" data-slide="3"></div>
        </div>
    </section>

    <!-- Products Section -->
    <div class="products-container">
        <div class="products-grid">
            <div class="product-card bg-white transition-all duration-300 group overflow-hidden flex flex-col cursor-pointer"
                onclick="showProductDetail('kredit')">
                <div class="flex items-center p-6 md:p-8 gap-5 flex-1">
                    <div class="flex-shrink-0">
                        <div
                            class="product-icon w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-slate-700 to-slate-900 rounded-2xl flex items-center justify-center shadow-md transition-all duration-300 group-hover:scale-110">
                            <i class="fas fa-credit-card text-white text-2xl md:text-3xl"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-xl md:text-2xl">Kredit</h3>
                        <p class="text-slate-500 text-sm md:text-base mt-1">Konsumtif & Modal Kerja</p>
                        <div class="mt-3 flex flex-wrap items-center gap-2">
                            <span class="text-emerald-600 text-sm font-semibold">✓ Bunga 6,5%</span>
                            <span class="text-slate-300">|</span>
                            <span class="text-slate-500 text-sm">Limit Rp10M</span>
                            <span class="text-slate-300">|</span>
                            <span class="text-slate-500 text-sm">Tenor 10 th</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 md:px-8 pb-6 md:pb-8 pt-2">
                    <button
                        class="product-button w-full py-3 bg-slate-100 hover:bg-blue-600 text-slate-600 hover:text-white rounded-xl transition-all duration-300 text-base font-semibold flex items-center justify-center gap-2 group/btn">
                        Pelajari Selengkapnya
                        <i
                            class="fas fa-arrow-right text-sm transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                    </button>
                </div>
            </div>

            <div class="product-card bg-white transition-all duration-300 group overflow-hidden flex flex-col cursor-pointer"
                onclick="showProductDetail('dana')">
                <div class="flex items-center p-6 md:p-8 gap-5 flex-1">
                    <div class="flex-shrink-0">
                        <div
                            class="product-icon w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-emerald-600 to-emerald-800 rounded-2xl flex items-center justify-center shadow-md transition-all duration-300 group-hover:scale-110">
                            <i class="fas fa-hand-holding-usd text-white text-2xl md:text-3xl"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-xl md:text-2xl">Tabungan & Deposito</h3>
                        <p class="text-slate-500 text-sm md:text-base mt-1">Simpanan & Investasi</p>
                        <div class="mt-3 flex flex-wrap items-center gap-2">
                            <span class="text-emerald-600 text-sm font-semibold">✓ Bunga 7,5%</span>
                            <span class="text-slate-300">|</span>
                            <span class="text-slate-500 text-sm">Gratis admin</span>
                            <span class="text-slate-300">|</span>
                            <span class="text-slate-500 text-sm">Setoran Rp100rb</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 md:px-8 pb-6 md:pb-8 pt-2">
                    <button
                        class="product-button w-full py-3 bg-slate-100 hover:bg-blue-600 text-slate-600 hover:text-white rounded-xl transition-all duration-300 text-base font-semibold flex items-center justify-center gap-2 group/btn">
                        Pelajari Selengkapnya
                        <i
                            class="fas fa-arrow-right text-sm transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                    </button>
                </div>
            </div>

            <div class="product-card bg-white transition-all duration-300 group overflow-hidden flex flex-col cursor-pointer"
                onclick="showProductDetail('atm')">
                <div class="flex items-center p-6 md:p-8 gap-5 flex-1">
                    <div class="flex-shrink-0">
                        <div
                            class="product-icon w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl flex items-center justify-center shadow-md transition-all duration-300 group-hover:scale-110">
                            <i class="fas fa-credit-card text-white text-2xl md:text-3xl"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-xl md:text-2xl">ATM & Debit</h3>
                        <p class="text-slate-500 text-sm md:text-base mt-1">Transaksi Mudah</p>
                        <div class="mt-3 flex flex-wrap items-center gap-2">
                            <span class="text-emerald-600 text-sm font-semibold">✓ Bebas biaya</span>
                            <span class="text-slate-300">|</span>
                            <span class="text-slate-500 text-sm">Proteksi 24 jam</span>
                            <span class="text-slate-300">|</span>
                            <span class="text-slate-500 text-sm">Lock/unlock</span>
                        </div>
                    </div>
                </div>
                <div class="px-6 md:px-8 pb-6 md:pb-8 pt-2">
                    <button
                        class="product-button w-full py-3 bg-slate-100 hover:bg-blue-600 text-slate-600 hover:text-white rounded-xl transition-all duration-300 text-base font-semibold flex items-center justify-center gap-2 group/btn">
                        Pelajari Selengkapnya
                        <i
                            class="fas fa-arrow-right text-sm transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- INFO SECTION (Promosi, Berita, Pemberitahuan, Waspada) -->
    @php
        $categories = [
            [
                'id' => 1,
                'name' => 'Promosi',
                'slug' => 'promo',
                'icon' => 'fa-gift',
                'badge_class' => 'badge-promo',
                'color' => 'promo',
            ],
            [
                'id' => 2,
                'name' => 'Berita',
                'slug' => 'berita',
                'icon' => 'fa-newspaper',
                'badge_class' => 'badge-news',
                'color' => 'berita',
            ],
            [
                'id' => 3,
                'name' => 'Pemberitahuan',
                'slug' => 'pemberitahuan',
                'icon' => 'fa-bell',
                'badge_class' => 'badge-info',
                'color' => 'pemberitahuan',
            ],
            [
                'id' => 4,
                'name' => 'Waspada',
                'slug' => 'waspada',
                'icon' => 'fa-shield-alt',
                'badge_class' => 'badge-warning',
                'color' => 'waspada',
            ],
        ];

        $items = [
            1 => [
                [
                    'id' => 1,
                    'title' => 'Deposito Bunga 8% Khusus Akhir Tahun',
                    'desc' => 'Dapatkan bunga spesial 8% untuk deposito 12 bulan.',
                    'date' => '1 Nov - 31 Des 2024',
                    'badge' => 'Promo Terbatas',
                    'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 2,
                    'title' => 'Cashback 10% Transaksi E-commerce',
                    'desc' => 'Nikmati cashback 10% untuk setiap transaksi belanja online.',
                    'date' => '1 Nov - 30 Nov 2024',
                    'badge' => 'Cashback',
                    'image' => 'https://images.unsplash.com/photo-1556742031-c6961e8561b0?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 3,
                    'title' => 'Undian Berhadiah Umroh & Motor Listrik',
                    'desc' => 'Setiap transaksi minimal Rp500rb otomatis mengikuti undian.',
                    'date' => '1 Okt - 31 Des 2024',
                    'badge' => 'Hadiah',
                    'image' => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 4,
                    'title' => 'Ajak Teman Dapat Bonus Rp500rb',
                    'desc' => 'Ajak teman buka rekening, dapatkan bonus tunai.',
                    'date' => 'Sepanjang Tahun 2024',
                    'badge' => 'Referral',
                    'image' => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=400&h=200&fit=crop',
                ],
            ],
            2 => [
                [
                    'id' => 1,
                    'title' => 'FinBank Raih Penghargaan Bank Digital Terbaik 2024',
                    'desc' => 'FinBank dinobatkan sebagai Bank Digital Terbaik.',
                    'date' => '15 November 2024',
                    'badge' => 'Penghargaan',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 2,
                    'title' => 'FinBank Buka Kantor Cabang ke-100 di Surabaya',
                    'desc' => 'Ekspansi layanan untuk menjangkau lebih banyak nasabah.',
                    'date' => '10 November 2024',
                    'badge' => 'Ekspansi',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 3,
                    'title' => 'Fitur Biometrik Wajah Hadir di Mobile Banking',
                    'desc' => 'Keamanan transaksi semakin canggih.',
                    'date' => '5 November 2024',
                    'badge' => 'Fitur Baru',
                    'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 4,
                    'title' => 'FinBank Kerjasama dengan 100+ Merchant',
                    'desc' => 'Perluas jaringan merchant untuk kemudahan transaksi.',
                    'date' => '1 November 2024',
                    'badge' => 'Kerjasama',
                    'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=200&fit=crop',
                ],
            ],
            3 => [
                [
                    'id' => 1,
                    'title' => 'Jadwal Pemeliharaan Server 24 November 2024',
                    'desc' => 'Layanan Mobile Banking akan terganggu pukul 02.00 - 04.00 WIB.',
                    'date' => '24 November 2024',
                    'badge' => 'Pemeliharaan',
                    'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 2,
                    'title' => 'Pembaruan Aplikasi Mobile Banking Versi 4.0',
                    'desc' => 'Update aplikasi untuk pengalaman transaksi lebih cepat.',
                    'date' => '20 November 2024',
                    'badge' => 'Update Fitur',
                    'image' => 'https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 3,
                    'title' => 'Penyesuaian Suku Bunga Kredit per Desember',
                    'desc' => 'Informasi penting untuk nasabah kredit.',
                    'date' => '1 Desember 2024',
                    'badge' => 'Perubahan',
                    'image' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 4,
                    'title' => 'Operasional Bank Libur Natal & Tahun Baru',
                    'desc' => 'Informasi jadwal operasional kantor cabang.',
                    'date' => '24 Des - 1 Jan 2025',
                    'badge' => 'Libur Nasional',
                    'image' => 'https://images.unsplash.com/photo-1415369629372-26f2fe60c467?w=400&h=200&fit=crop',
                ],
            ],
            4 => [
                [
                    'id' => 1,
                    'title' => 'Waspada Modus Penipuan Mengatasnamakan Bank',
                    'desc' => 'Jangan pernah memberikan OTP, PIN, atau informasi pribadi.',
                    'date' => 'Update: 15 November 2024',
                    'badge' => 'Penipuan',
                    'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 2,
                    'title' => 'Awas! Link Palsu Mengatasnamakan FinBank',
                    'desc' => 'Jangan klik link mencurigakan untuk update data.',
                    'date' => 'Update: 10 November 2024',
                    'badge' => 'Link Phishing',
                    'image' => 'https://images.unsplash.com/photo-1614064641938-3bbee52942c7?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 3,
                    'title' => 'Waspada Telepon Mengaku Customer Service',
                    'desc' => 'FinBank tidak pernah meminta informasi via telepon.',
                    'date' => 'Update: 5 November 2024',
                    'badge' => 'Telepon',
                    'image' => 'https://images.unsplash.com/photo-1596526131083-a8c633c980d9?w=400&h=200&fit=crop',
                ],
                [
                    'id' => 4,
                    'title' => 'Modus Penipuan Baru Menggunakan AI Voice',
                    'desc' => 'Waspada modus penipuan dengan suara mirip pegawai bank.',
                    'date' => 'Update: 1 November 2024',
                    'badge' => 'AI Voice',
                    'image' => 'https://images.unsplash.com/photo-1582139329536-e7284fece509?w=400&h=200&fit=crop',
                ],
            ],
        ];
    @endphp

    <div class="info-section">
        <div class="tab-buttons">
            @foreach ($categories as $index => $cat)
                <button class="tab-btn {{ $cat['color'] }} {{ $loop->first ? 'active' : '' }}"
                    data-tab="{{ $cat['slug'] }}">
                    <i class="fas {{ $cat['icon'] }} mr-2"></i> {{ $cat['name'] }}
                </button>
            @endforeach
        </div>

        @foreach ($categories as $index => $cat)
            <div class="tab-content {{ $loop->first ? 'active' : '' }}" id="tab-{{ $cat['slug'] }}">
                <div class="tab-header">
                    <h2>{{ $cat['name'] }} Terbaru</h2>
                    <a href="{{ url('/' . $cat['slug']) }}" class="tab-header-link">
                        Lihat Semua {{ $cat['name'] }} <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="info-grid">
                    @foreach ($items[$cat['id']] as $item)
                        <div class="info-card" onclick="goToDetail('{{ $cat['slug'] }}', {{ $item['id'] }})">
                            <div class="image-container">
                                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="card-image">
                                <span class="card-badge {{ $cat['badge_class'] }}">
                                    <i class="fas {{ $cat['icon'] }} mr-1"></i> {{ $item['badge'] }}
                                </span>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">{{ $item['title'] }}</h3>
                                <p class="card-desc">{{ $item['desc'] }}</p>
                                <div class="card-date"><i class="far fa-calendar-alt"></i> {{ $item['date'] }}</div>
                                <button class="readmore-link"
                                    onclick="event.stopPropagation(); goToDetail('{{ $cat['slug'] }}', {{ $item['id'] }})">
                                    Selengkapnya <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- ABOUT SECTION - FULL WIDTH -->
    <div class="about-full-section">
        <div class="about-full-container">
            <div class="about-full-content">
                <h2 class="about-full-title">
                    Solusi Keuangan Digital<br>Untuk <span>Masa Depan Anda</span>
                </h2>
                <p class="about-full-description">
                    FinBank hadir sebagai solusi perbankan digital terdepan yang menggabungkan teknologi modern
                    dengan pelayanan prima. Kami berkomitmen untuk memberikan kemudahan akses keuangan bagi
                    seluruh lapisan masyarakat Indonesia.
                </p>

                <div class="about-full-features">
                    <div class="about-full-feature">
                        <div class="feature-full-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="feature-full-text">
                            <h4>Keamanan Terjamin</h4>
                            <p>Sistem enkripsi berlapis & proteksi 24 jam</p>
                        </div>
                    </div>
                    <div class="about-full-feature">
                        <div class="feature-full-icon"><i class="fas fa-clock"></i></div>
                        <div class="feature-full-text">
                            <h4>Layanan 24/7</h4>
                            <p>Akses transaksi kapan saja, di mana saja</p>
                        </div>
                    </div>
                    <div class="about-full-feature">
                        <div class="feature-full-icon"><i class="fas fa-mobile-alt"></i></div>
                        <div class="feature-full-text">
                            <h4>Fitur Digital Lengkap</h4>
                            <p>Mobile banking & internet banking canggih</p>
                        </div>
                    </div>
                    <div class="about-full-feature">
                        <div class="feature-full-icon"><i class="fas fa-hand-holding-usd"></i></div>
                        <div class="feature-full-text">
                            <h4>Bunga Kompetitif</h4>
                            <p>Produk simpanan & kredit terbaik</p>
                        </div>
                    </div>
                    <div class="about-full-feature">
                        <div class="feature-full-icon"><i class="fas fa-users"></i></div>
                        <div class="feature-full-text">
                            <h4>5+ Juta Nasabah</h4>
                            <p>Dipercaya oleh jutaan masyarakat Indonesia</p>
                        </div>
                    </div>
                    <div class="about-full-feature">
                        <div class="feature-full-icon"><i class="fas fa-certificate"></i></div>
                        <div class="feature-full-text">
                            <h4>Terlisensi & Terdaftar</h4>
                            <p>Resmi & diawasi oleh OJK</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="about-full-cta">
                    Selengkapnya Tentang FinBank
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="about-full-image">
                <img src="https://images.pexels.com/photos/164527/pexels-photo-164527.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop"
                    alt="FinBank Modern Office">
                <div class="image-overlay-stats">
                    <div class="stat-item">
                        <div class="stat-number">10+ <span>Tahun</span></div>
                        <div class="stat-label">Pengalaman</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Kantor Cabang</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-number">5M+</div>
                        <div class="stat-label">Nasabah</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PARTNERS / KERJASAMA SECTION - MARQUEE BERJALAN -->
    <div class="partners-section">
        <div class="partners-header">
            <h3 class="partners-title">🤝 Mitra Kerjasama FinBank</h3>
            <p class="partners-subtitle">Bergabung dengan lebih dari 500+ perusahaan terpercaya</p>
        </div>

        <div class="marquee-container">
            <div class="marquee-track">
                <!-- Logo 1 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Logo_Pertamina.svg/2560px-Logo_Pertamina.svg.png"
                        alt="Pertamina">
                    <span class="partner-name">Pertamina</span>
                </div>
                <!-- Logo 2 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Logo_Telkom_Indonesia.svg/2560px-Logo_Telkom_Indonesia.svg.png"
                        alt="Telkom Indonesia">
                    <span class="partner-name">Telkom Indonesia</span>
                </div>
                <!-- Logo 3 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Logo_PLN.svg/2560px-Logo_PLN.svg.png"
                        alt="PLN">
                    <span class="partner-name">PLN</span>
                </div>
                <!-- Logo 4 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Bank_Mandiri_logo.svg/2560px-Bank_Mandiri_logo.svg.png"
                        alt="Bank Mandiri">
                    <span class="partner-name">Bank Mandiri</span>
                </div>
                <!-- Logo 5 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/BRI_logo.svg/2560px-BRI_logo.svg.png"
                        alt="BRI">
                    <span class="partner-name">BRI</span>
                </div>
                <!-- Logo 6 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Gojek_logo_2019.svg/2560px-Gojek_logo_2019.svg.png"
                        alt="Gojek">
                    <span class="partner-name">Gojek</span>
                </div>
                <!-- Logo 7 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Grab_logo.svg/2560px-Grab_logo.svg.png"
                        alt="Grab">
                    <span class="partner-name">Grab</span>
                </div>
                <!-- Logo 8 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Shopee_logo.svg/2560px-Shopee_logo.svg.png"
                        alt="Shopee">
                    <span class="partner-name">Shopee</span>
                </div>
                <!-- Logo 9 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Logo_Unilever.svg/2560px-Logo_Unilever.svg.png"
                        alt="Unilever">
                    <span class="partner-name">Unilever</span>
                </div>
                <!-- Logo 10 -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Astra_International_logo.svg/2560px-Astra_International_logo.svg.png"
                        alt="Astra">
                    <span class="partner-name">Astra</span>
                </div>

                <!-- Duplikasi untuk efek infinite -->
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Logo_Pertamina.svg/2560px-Logo_Pertamina.svg.png"
                        alt="Pertamina">
                    <span class="partner-name">Pertamina</span>
                </div>
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Logo_Telkom_Indonesia.svg/2560px-Logo_Telkom_Indonesia.svg.png"
                        alt="Telkom Indonesia">
                    <span class="partner-name">Telkom Indonesia</span>
                </div>
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Logo_PLN.svg/2560px-Logo_PLN.svg.png"
                        alt="PLN">
                    <span class="partner-name">PLN</span>
                </div>
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Bank_Mandiri_logo.svg/2560px-Bank_Mandiri_logo.svg.png"
                        alt="Bank Mandiri">
                    <span class="partner-name">Bank Mandiri</span>
                </div>
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/BRI_logo.svg/2560px-BRI_logo.svg.png"
                        alt="BRI">
                    <span class="partner-name">BRI</span>
                </div>
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Gojek_logo_2019.svg/2560px-Gojek_logo_2019.svg.png"
                        alt="Gojek">
                    <span class="partner-name">Gojek</span>
                </div>
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Grab_logo.svg/2560px-Grab_logo.svg.png"
                        alt="Grab">
                    <span class="partner-name">Grab</span>
                </div>
                <div class="partner-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Shopee_logo.svg/2560px-Shopee_logo.svg.png"
                        alt="Shopee">
                    <span class="partner-name">Shopee</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;
        const totalSlides = slides.length;
        let autoPlayInterval;
        const autoPlayDelay = 6000;

        function updateCarousel() {
            slides.forEach((slide, index) => {
                if (index === currentIndex) {
                    slide.style.opacity = '1';
                    slide.style.zIndex = '10';
                } else {
                    slide.style.opacity = '0';
                    slide.style.zIndex = '1';
                }
            });
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('active');
                    dot.style.width = '28px';
                    dot.style.borderRadius = '14px';
                    dot.style.backgroundColor = 'white';
                    dot.style.boxShadow = '0 0 8px rgba(255,255,255,0.5)';
                } else {
                    dot.classList.remove('active');
                    dot.style.width = '8px';
                    dot.style.borderRadius = '50%';
                    dot.style.backgroundColor = 'rgba(255,255,255,0.5)';
                    dot.style.boxShadow = 'none';
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
            resetAutoPlay();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
            resetAutoPlay();
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, autoPlayDelay);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }

        function showProductDetail(product) {
            window.location.href = '/produk/' + product;
        }

        function goToDetail(category, id) {
            window.location.href = '/' + category + '/' + id;
        }

        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                btn.classList.add('active');
                document.getElementById(`tab-${tabId}`).classList.add('active');
            });
        });

        if (nextBtn && prevBtn) {
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
                resetAutoPlay();
            });
        });

        const heroSection = document.getElementById('home');
        if (heroSection) {
            heroSection.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
            heroSection.addEventListener('mouseleave', startAutoPlay);
        }

        if (slides[0]) {
            slides[0].style.opacity = '1';
            slides[0].style.zIndex = '10';
        }
        if (dots[0]) {
            dots[0].style.width = '28px';
            dots[0].style.borderRadius = '14px';
            dots[0].style.backgroundColor = 'white';
            dots[0].style.boxShadow = '0 0 8px rgba(255,255,255,0.5)';
        }

        startAutoPlay();
    </script>
@endpush
