@extends('layouts.app')

@section('title', 'FinBank - Solusi Keuangan Digital Masa Depan')

@section('meta_description',
    'Nikmati layanan perbankan digital terbaik dengan keamanan tingkat tinggi, bunga
    kompetitif, dan kemudahan transaksi 24/7.')

    @push('styles')
        <style>
            /* Custom styles that are hard to do with Tailwind */
            .hero-carousel {
                border-radius: 0 0 0 180px;
            }

            .carousel-slide {
                transition: opacity 0.9s cubic-bezier(0.4, 0, 0.2, 1);
                will-change: opacity;
            }

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

            @keyframes marquee {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .animate-marquee {
                animation: marquee 25s linear infinite;
            }

            .animate-marquee:hover {
                animation-play-state: paused;
            }

            .card-desc {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    @endpush

@section('content')
    <!-- Hero Carousel Section -->
    <section id="home"
        class="hero-carousel relative w-full bg-slate-900 h-[75vh] min-h-[550px] overflow-hidden shadow-2xl z-1">
        <div class="carousel-curve-container">
            <div class="carousel-curve-glow"></div>
            <div class="carousel-curve-white"></div>
            <div class="carousel-curve-gradient"></div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-black/55 via-black/35 to-black/20 z-10"></div>

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
            class="carousel-nav-btn prev absolute top-1/2 -translate-y-1/2 left-5 md:left-8 w-11 h-11 md:w-12 md:h-12 bg-white/15 backdrop-blur-md rounded-full flex items-center justify-center border border-white/25 transition-all duration-300 hover:bg-white/35 hover:scale-110 z-30"
            id="prevBtn">
            <i class="fas fa-chevron-left text-white text-sm md:text-base"></i>
        </button>
        <button
            class="carousel-nav-btn next absolute top-1/2 -translate-y-1/2 right-5 md:right-8 w-11 h-11 md:w-12 md:h-12 bg-white/15 backdrop-blur-md rounded-full flex items-center justify-center border border-white/25 transition-all duration-300 hover:bg-white/35 hover:scale-110 z-30"
            id="nextBtn">
            <i class="fas fa-chevron-right text-white text-sm md:text-base"></i>
        </button>

        <div class="absolute bottom-6 md:bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-30" id="carouselDots">
            <div class="dot w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" data-slide="0">
            </div>
            <div class="dot w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" data-slide="1">
            </div>
            <div class="dot w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" data-slide="2">
            </div>
            <div class="dot w-2 h-2 rounded-full bg-white/50 transition-all duration-300 cursor-pointer" data-slide="3">
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <div class="w-full relative z-2 bg-gradient-to-b from-white to-slate-50">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 w-full">
            <!-- Product Card 1 -->
            <div class="bg-white transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:z-10 border-r border-slate-200 cursor-pointer"
                onclick="showProductDetail('kredit')">
                <div class="flex items-center p-6 md:p-8 gap-5">
                    <div class="flex-shrink-0">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-slate-700 to-slate-900 rounded-2xl flex items-center justify-center shadow-md transition-all duration-300">
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
                        class="w-full py-3 bg-slate-100 hover:bg-blue-600 text-slate-600 hover:text-white rounded-xl transition-all duration-300 text-base font-semibold flex items-center justify-center gap-2 group">
                        Pelajari Selengkapnya
                        <i
                            class="fas fa-arrow-right text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
                    </button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:z-10 border-r border-slate-200 cursor-pointer"
                onclick="showProductDetail('dana')">
                <div class="flex items-center p-6 md:p-8 gap-5">
                    <div class="flex-shrink-0">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-emerald-600 to-emerald-800 rounded-2xl flex items-center justify-center shadow-md transition-all duration-300">
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
                        class="w-full py-3 bg-slate-100 hover:bg-blue-600 text-slate-600 hover:text-white rounded-xl transition-all duration-300 text-base font-semibold flex items-center justify-center gap-2 group">
                        Pelajari Selengkapnya
                        <i
                            class="fas fa-arrow-right text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
                    </button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:z-10 cursor-pointer"
                onclick="showProductDetail('atm')">
                <div class="flex items-center p-6 md:p-8 gap-5">
                    <div class="flex-shrink-0">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl flex items-center justify-center shadow-md transition-all duration-300">
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
                        class="w-full py-3 bg-slate-100 hover:bg-blue-600 text-slate-600 hover:text-white rounded-xl transition-all duration-300 text-base font-semibold flex items-center justify-center gap-2 group">
                        Pelajari Selengkapnya
                        <i
                            class="fas fa-arrow-right text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- INFO SECTION -->
    @php
        $categories = [
            [
                'id' => 1,
                'name' => 'Promosi',
                'slug' => 'promo',
                'icon' => 'fa-gift',
                'badge_class' => 'bg-amber-100 text-amber-700',
                'color' => 'promo',
                'bg_active' => '#d97706',
                'bg_default' => '#fffbeb',
                'text_default' => '#d97706',
                'hover_bg' => '#f59e0b',
            ],
            [
                'id' => 2,
                'name' => 'Berita',
                'slug' => 'berita',
                'icon' => 'fa-newspaper',
                'badge_class' => 'bg-blue-100 text-blue-700',
                'color' => 'berita',
                'bg_active' => '#2563eb',
                'bg_default' => '#eff6ff',
                'text_default' => '#2563eb',
                'hover_bg' => '#3b82f6',
            ],
            [
                'id' => 3,
                'name' => 'Pemberitahuan',
                'slug' => 'pemberitahuan',
                'icon' => 'fa-bell',
                'badge_class' => 'bg-indigo-100 text-indigo-700',
                'color' => 'pemberitahuan',
                'bg_active' => '#4f46e5',
                'bg_default' => '#eef2ff',
                'text_default' => '#4f46e5',
                'hover_bg' => '#6366f1',
            ],
            [
                'id' => 4,
                'name' => 'Waspada',
                'slug' => 'waspada',
                'icon' => 'fa-shield-alt',
                'badge_class' => 'bg-red-100 text-red-700',
                'color' => 'waspada',
                'bg_active' => '#dc2626',
                'bg_default' => '#fef2f2',
                'text_default' => '#dc2626',
                'hover_bg' => '#ef4444',
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

    <div class="w-full bg-gradient-to-b from-slate-50 to-slate-100 py-8 pb-12">
        <div class="flex flex-wrap justify-center gap-3 mb-8 px-4">
            @foreach ($categories as $index => $cat)
                <button
                    class="tab-btn px-5 py-2.5 md:px-7 md:py-3 text-sm md:text-base font-semibold border-none cursor-pointer transition-all duration-300 rounded-full shadow-sm hover:shadow-md hover:-translate-y-0.5 {{ $loop->first ? 'active' : '' }}"
                    data-tab="{{ $cat['slug'] }}" data-default-bg="{{ $cat['bg_default'] }}"
                    data-default-text="{{ $cat['text_default'] }}" data-hover-bg="{{ $cat['hover_bg'] }}"
                    data-active-bg="{{ $cat['bg_active'] }}"
                    style="background-color: {{ $loop->first ? $cat['bg_active'] : $cat['bg_default'] }}; color: {{ $loop->first ? 'white' : $cat['text_default'] }};">
                    <i class="fas {{ $cat['icon'] }} mr-2"></i> {{ $cat['name'] }}
                </button>
            @endforeach
        </div>

        @foreach ($categories as $index => $cat)
            <div class="tab-content {{ $loop->first ? 'active' : 'hidden' }}" id="tab-{{ $cat['slug'] }}">
                <div class="flex justify-between items-center mb-6 px-4">
                    <h2 class="text-xl font-bold text-slate-800">{{ $cat['name'] }} Terbaru</h2>
                    <a href="{{ url('/' . $cat['slug']) }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 hover:text-blue-800 transition-all duration-300 hover:gap-3">
                        Lihat Semua {{ $cat['name'] }} <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
                    @foreach ($items[$cat['id']] as $item)
                        <div class="bg-white rounded-xl overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl cursor-pointer border border-slate-200 group"
                            onclick="goToDetail('{{ $cat['slug'] }}', {{ $item['id'] }})">
                            <div class="relative overflow-hidden">
                                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                    class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-105">
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-semibold {{ $cat['badge_class'] }}">
                                    <i class="fas {{ $cat['icon'] }} mr-1"></i> {{ $item['badge'] }}
                                </span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-base mb-2">{{ $item['title'] }}</h3>
                                <p class="text-sm text-slate-500 mb-3 card-desc">{{ $item['desc'] }}</p>
                                <div class="text-xs text-slate-400 flex items-center gap-2 mb-3">
                                    <i class="far fa-calendar-alt"></i> {{ $item['date'] }}
                                </div>
                                <button
                                    class="inline-flex items-center gap-2 text-xs font-semibold text-blue-600 hover:text-blue-800 transition-all duration-300 bg-transparent border-none cursor-pointer p-0 hover:gap-3"
                                    onclick="event.stopPropagation(); goToDetail('{{ $cat['slug'] }}', {{ $item['id'] }})">
                                    Selengkapnya <i class="fas fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- ABOUT SECTION -->
    <div class="w-full bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto flex flex-col lg:flex-row items-center">
            <div class="flex-1 p-8 md:p-12 text-white">
                <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6">
                    Solusi Keuangan Digital<br>Untuk <span class="text-blue-400 relative inline-block">Masa Depan Anda<span
                            class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full"></span></span>
                </h2>
                <p class="text-slate-300 text-base leading-relaxed mb-8">
                    FinBank hadir sebagai solusi perbankan digital terdepan yang menggabungkan teknologi modern
                    dengan pelayanan prima. Kami berkomitmen untuk memberikan kemudahan akses keuangan bagi
                    seluruh lapisan masyarakat Indonesia.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-8">
                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-11 h-11 bg-blue-500/15 rounded-xl flex items-center justify-center text-blue-400 text-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-105">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Keamanan Terjamin</h4>
                            <p class="text-sm text-slate-400">Sistem enkripsi berlapis & proteksi 24 jam</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-11 h-11 bg-blue-500/15 rounded-xl flex items-center justify-center text-blue-400 text-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-105">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Layanan 24/7</h4>
                            <p class="text-sm text-slate-400">Akses transaksi kapan saja, di mana saja</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-11 h-11 bg-blue-500/15 rounded-xl flex items-center justify-center text-blue-400 text-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-105">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Fitur Digital Lengkap</h4>
                            <p class="text-sm text-slate-400">Mobile banking & internet banking canggih</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-11 h-11 bg-blue-500/15 rounded-xl flex items-center justify-center text-blue-400 text-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-105">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Bunga Kompetitif</h4>
                            <p class="text-sm text-slate-400">Produk simpanan & kredit terbaik</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-11 h-11 bg-blue-500/15 rounded-xl flex items-center justify-center text-blue-400 text-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-105">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">5+ Juta Nasabah</h4>
                            <p class="text-sm text-slate-400">Dipercaya oleh jutaan masyarakat Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-11 h-11 bg-blue-500/15 rounded-xl flex items-center justify-center text-blue-400 text-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-105">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Terlisensi & Terdaftar</h4>
                            <p class="text-sm text-slate-400">Resmi & diawasi oleh OJK</p>
                        </div>
                    </div>
                </div>

                <a href="#"
                    class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-full transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-blue-500/40 hover:gap-4">
                    Selengkapnya Tentang FinBank
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="flex-1 relative min-h-[400px] lg:min-h-[550px] w-full">
                <img src="https://images.pexels.com/photos/164527/pexels-photo-164527.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop"
                    alt="FinBank Modern Office" class="w-full h-full object-cover absolute top-0 left-0">
                <div
                    class="absolute bottom-4 right-4 md:bottom-10 md:right-10 bg-white/95 backdrop-blur-md p-4 md:p-5 rounded-xl shadow-2xl z-10 flex flex-col sm:flex-row items-center gap-4">
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-extrabold text-slate-800">10+ <span
                                class="text-base font-medium text-slate-500">Tahun</span></div>
                        <div class="text-xs text-slate-500 font-medium">Pengalaman</div>
                    </div>
                    <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-extrabold text-slate-800">500+</div>
                        <div class="text-xs text-slate-500 font-medium">Kantor Cabang</div>
                    </div>
                    <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-extrabold text-slate-800">5M+</div>
                        <div class="text-xs text-slate-500 font-medium">Nasabah</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MITRA KERJA SAMA - VERSI PREMIUM DENGAN LOGO LEBIH BESAR (TANPA NAMA) -->
        <div
            class="w-full overflow-hidden relative py-10 px-4 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 shadow-2xl my-8 border border-white/10">
            <!-- Decorative background elements -->
            <div class="absolute top-0 right-0 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-purple-500/5 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-gradient-to-r from-blue-500/5 to-purple-500/5 blur-3xl">
            </div>

            <div class="relative z-10">
                <!-- Header with icon -->
                <div class="text-center mb-8">
                    <h1 class="text-2xl md:text-4xl font-bold text-white mb-2">
                        Mitra Kerja Sama <span
                            class="bg-gradient-to-r from-blue-400 to-blue-300 bg-clip-text text-transparent">FinBank</span>
                    </h1>
                    <p class="text-slate-400 text-sm">Bergabung dengan mitra terpercaya</p>
                </div>

                <!-- Marquee / Running text mitra dengan background putih dan logo besar (tanpa nama) -->
                <div class="w-full overflow-hidden relative">
                    <div class="flex items-center gap-10 animate-marquee w-max">
                        @for ($i = 1; $i <= 24; $i++)
                            @php
                                $ext = $i >= 12 && $i <= 15 ? 'jpg' : 'png';
                            @endphp
                            <div
                                class="flex items-center justify-center min-w-[130px] md:min-w-[160px] p-5 bg-white rounded-2xl shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl hover:-translate-y-1 border border-slate-100">
                                <img src="{{ asset('assets/' . $i . '.' . $ext) }}" alt="Mitra {{ $i }}"
                                    class="h-16 md:h-24 w-auto object-contain">
                            </div>
                        @endfor
                        @for ($i = 1; $i <= 24; $i++)
                            @php
                                $ext = $i >= 12 && $i <= 15 ? 'jpg' : 'png';
                            @endphp
                            <div
                                class="flex items-center justify-center min-w-[130px] md:min-w-[160px] p-5 bg-white rounded-2xl shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl hover:-translate-y-1 border border-slate-100">
                                <img src="{{ asset('assets/' . $i . '.' . $ext) }}" alt="Mitra {{ $i }}"
                                    class="h-16 md:h-24 w-auto object-contain">
                            </div>
                        @endfor
                    </div>
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

        // Tab navigation with improved hover and active states
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        // Store original styles for each button
        tabBtns.forEach(btn => {
            const defaultBg = btn.getAttribute('data-default-bg');
            const defaultText = btn.getAttribute('data-default-text');
            const hoverBg = btn.getAttribute('data-hover-bg');

            // Store data attributes
            btn.defaultBg = defaultBg;
            btn.defaultText = defaultText;
            btn.hoverBg = hoverBg;

            // Add hover event listeners
            btn.addEventListener('mouseenter', function() {
                if (!this.classList.contains('active')) {
                    this.style.backgroundColor = this.hoverBg;
                    this.style.color = 'white';
                }
            });

            btn.addEventListener('mouseleave', function() {
                if (!this.classList.contains('active')) {
                    this.style.backgroundColor = this.defaultBg;
                    this.style.color = this.defaultText;
                }
            });
        });

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                const activeBg = btn.getAttribute('data-active-bg');

                // Reset all buttons to default style
                tabBtns.forEach(b => {
                    b.classList.remove('active');
                    b.style.backgroundColor = b.defaultBg;
                    b.style.color = b.defaultText;
                });

                // Hide all tab contents
                tabContents.forEach(c => {
                    c.classList.add('hidden');
                    c.classList.remove('active');
                });

                // Set active style for clicked button
                btn.classList.add('active');
                btn.style.backgroundColor = activeBg;
                btn.style.color = 'white';

                // Show selected tab content
                const activeTab = document.getElementById(`tab-${tabId}`);
                activeTab.classList.remove('hidden');
                activeTab.classList.add('active');
            });
        });

        // Set initial active tab style - Pastikan tab Promosi aktif saat load
        document.addEventListener('DOMContentLoaded', function() {
            // Cari tab yang memiliki class active (Promosi)
            const activeTabBtn = document.querySelector('.tab-btn.active');

            if (activeTabBtn) {
                const activeBg = activeTabBtn.getAttribute('data-active-bg');
                const activeTabId = activeTabBtn.getAttribute('data-tab');

                // Set style untuk tombol aktif
                activeTabBtn.style.backgroundColor = activeBg;
                activeTabBtn.style.color = 'white';

                // Sembunyikan semua tab content terlebih dahulu
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                    content.classList.remove('active');
                });

                // Tampilkan tab content yang aktif
                const activeTabContent = document.getElementById(`tab-${activeTabId}`);
                if (activeTabContent) {
                    activeTabContent.classList.remove('hidden');
                    activeTabContent.classList.add('active');
                }
            } else if (tabBtns.length > 0) {
                // Fallback: aktifkan tab pertama (Promosi)
                const firstBtn = tabBtns[0];
                const firstActiveBg = firstBtn.getAttribute('data-active-bg');
                const firstTabId = firstBtn.getAttribute('data-tab');

                firstBtn.classList.add('active');
                firstBtn.style.backgroundColor = firstActiveBg;
                firstBtn.style.color = 'white';

                tabContents.forEach(content => {
                    content.classList.add('hidden');
                    content.classList.remove('active');
                });

                const firstTabContent = document.getElementById(`tab-${firstTabId}`);
                if (firstTabContent) {
                    firstTabContent.classList.remove('hidden');
                    firstTabContent.classList.add('active');
                }
            }
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
