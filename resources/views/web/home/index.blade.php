@extends('layouts.app')

@section('title', 'FinBank - Solusi Keuangan Digital Masa Depan')

@section('meta_description', 'Nikmati layanan perbankan digital terbaik dengan keamanan tingkat tinggi, bunga
    kompetitif, dan kemudahan transaksi 24/7.')

@section('content')
    <style>
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .wave svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
    </style>

    <!-- Hero Section -->
    <section id="home"
        class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-indigo-50 pt-20">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-300 rounded-full filter blur-3xl animate-pulse"></div>
            <div
                class="absolute bottom-20 right-10 w-96 h-96 bg-indigo-300 rounded-full filter blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="container mx-auto px-6 md:px-10 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full">
                        <span class="w-2 h-2 bg-blue-600 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-blue-700 text-sm font-semibold">#1 Digital Banking di Indonesia</span>
                    </div>
                    <h1
                        class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight bg-gradient-to-r from-gray-900 via-blue-800 to-gray-900 bg-clip-text text-transparent animate-gradient">
                        Masa Depan Keuangan Ada di Sini
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Kelola keuangan Anda dengan mudah, aman, dan cerdas. Nikmati berbagai fitur unggulan untuk mendukung
                        gaya hidup modern Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-5">
                        <a href="#contact"
                            class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-full font-semibold overflow-hidden hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <span class="relative z-10">Buka Rekening Gratis</span>
                            <i
                                class="fas fa-arrow-right ml-2 relative z-10 group-hover:translate-x-1 transition-transform"></i>
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-700 to-blue-800 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left">
                            </div>
                        </a>
                        <a href="#services"
                            class="inline-flex items-center justify-center px-8 py-4 border-2 border-blue-600 text-blue-600 rounded-full font-semibold hover:bg-blue-50 transition-all duration-300">
                            <i class="fas fa-play-circle mr-2"></i>
                            Lihat Layanan
                        </a>
                    </div>

                    <div class="flex items-center space-x-8 pt-6">
                        <div class="flex -space-x-3">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-400 to-blue-500 rounded-full border-2 border-white flex items-center justify-center text-white font-bold">
                                A</div>
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-indigo-400 to-indigo-500 rounded-full border-2 border-white flex items-center justify-center text-white font-bold">
                                B</div>
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-purple-400 to-purple-500 rounded-full border-2 border-white flex items-center justify-center text-white font-bold">
                                C</div>
                        </div>
                        <div>
                            <p class="text-gray-700 font-semibold">Dipercaya 5+ Juta Nasabah</p>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-gray-600 ml-2">4.8/5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative lg:block hidden">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
                        <img src="https://placehold.co/600x500/0891b2/white?text=Mobile+Banking+App"
                            alt="Mobile Banking App" class="w-full">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-xl flex items-center space-x-3 animate-bounce">
                        <i class="fas fa-check-circle text-green-500 text-2xl"></i>
                        <div>
                            <p class="font-bold">Transaksi Aman</p>
                            <p class="text-sm text-gray-500">100% Terenkripsi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="fill-white"></path>
            </svg>
        </div>
    </section>

    <!-- About Section with Wave -->
    <section id="about" class="relative py-24 bg-white">
        <div class="container mx-auto px-6 md:px-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Tentang Kami</span>
                <h2
                    class="text-4xl md:text-5xl font-bold mt-4 mb-6 bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
                    Inovasi Tanpa Batas untuk Keuangan Anda
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    FinBank hadir sebagai solusi perbankan digital yang menggabungkan keamanan tingkat tinggi dengan
                    kemudahan akses modern.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 rounded-2xl bg-gradient-to-b from-gray-50 to-white card-hover">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-shield-alt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Keamanan Terjamin</h3>
                    <p class="text-gray-600">Sistem keamanan berlapis dengan enkripsi end-to-end dan proteksi fraud 24/7.
                    </p>
                </div>
                <div
                    class="text-center p-8 rounded-2xl bg-gradient-to-b from-gray-50 to-white card-hover transform md:translate-y-8">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-bolt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Transaksi Cepat</h3>
                    <p class="text-gray-600">Proses transaksi real-time dengan teknologi high-frequency processing.</p>
                </div>
                <div class="text-center p-8 rounded-2xl bg-gradient-to-b from-gray-50 to-white card-hover">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-headset text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Customer Support 24/7</h3>
                    <p class="text-gray-600">Dukungan pelanggan siap membantu Anda kapan saja melalui berbagai channel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative py-24 bg-gradient-to-br from-gray-50 to-blue-50 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-400 rounded-full filter blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 md:px-10 relative">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Layanan Unggulan</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6">Solusi Lengkap Kebutuhan Finansial</h2>
                <p class="text-gray-600 text-lg">Dari perbankan sehari-hari hingga investasi jangka panjang, kami siap
                    membantu.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        [
                            'icon' => 'mobile-alt',
                            'title' => 'Mobile Banking',
                            'desc' => 'Akses rekening kapan saja dengan aplikasi mobile canggih.',
                            'color' => 'blue',
                        ],
                        [
                            'icon' => 'chart-line',
                            'title' => 'Investasi',
                            'desc' => 'Berbagai pilihan investasi dengan return kompetitif.',
                            'color' => 'purple',
                        ],
                        [
                            'icon' => 'hand-holding-usd',
                            'title' => 'Pinjaman Online',
                            'desc' => 'Proses cepat, bunga rendah, tanpa agunan.',
                            'color' => 'indigo',
                        ],
                        [
                            'icon' => 'credit-card',
                            'title' => 'Kartu Kredit',
                            'desc' => 'Nikmati berbagai promo dan cashback menarik.',
                            'color' => 'green',
                        ],
                        [
                            'icon' => 'shield-alt',
                            'title' => 'Asuransi',
                            'desc' => 'Perlindungan menyeluruh untuk diri dan keluarga.',
                            'color' => 'red',
                        ],
                        [
                            'icon' => 'globe',
                            'title' => 'Remitansi',
                            'desc' => 'Kirim uang ke luar negeri dengan kurs terbaik.',
                            'color' => 'orange',
                        ],
                    ];
                @endphp

                @foreach ($services as $service)
                    <div class="group bg-white rounded-2xl p-8 card-hover cursor-pointer">
                        <div
                            class="w-14 h-14 bg-{{ $service['color'] }}-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i class="fas fa-{{ $service['icon'] }} text-2xl text-{{ $service['color'] }}-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $service['desc'] }}</p>
                        <a href="#contact"
                            class="text-{{ $service['color'] }}-600 font-semibold inline-flex items-center group-hover:translate-x-2 transition-transform">
                            Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-24 bg-white">
        <div class="container mx-auto px-6 md:px-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Produk Pilihan</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6">Rekomendasi Terbaik untuk Anda</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="group relative overflow-hidden rounded-3xl shadow-xl card-hover">
                    <img src="https://placehold.co/600x400/2563eb/white?text=Tabungan+Plus" alt="Tabungan Plus"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <h3 class="text-2xl font-bold mb-2">Tabungan Plus</h3>
                        <p class="mb-4">Bunga hingga 5% per tahun, bebas biaya admin</p>
                        <a href="#contact"
                            class="inline-flex items-center text-white font-semibold border-b-2 border-white pb-1 hover:gap-2 transition-all">
                            Pelajari <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-3xl shadow-xl card-hover">
                    <img src="https://placehold.co/600x400/7c3aed/white?text=Deposito+Emas" alt="Deposito Emas"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <h3 class="text-2xl font-bold mb-2">Deposito Emas</h3>
                        <p class="mb-4">Imbal hasil menggiurkan hingga 7% per tahun</p>
                        <a href="#contact"
                            class="inline-flex items-center text-white font-semibold border-b-2 border-white pb-1 hover:gap-2 transition-all">
                            Pelajari <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section with Stats -->
    <section id="features" class="relative py-24 bg-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500 rounded-full filter blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 md:px-10 relative">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-blue-400 font-semibold text-sm uppercase tracking-wider">Keunggulan Kami</span>
                    <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6">Kenapa Memilih FinBank?</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check-circle text-blue-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-1">Tanpa Biaya Tersembunyi</h3>
                                <p class="text-gray-300">Transparansi penuh tanpa biaya administrasi yang membebani.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-lock text-blue-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-1">Keamanan Berlapis</h3>
                                <p class="text-gray-300">Verifikasi 2 faktor dan sistem deteksi fraud canggih.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-charging-station text-blue-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-1">Akses 24/7</h3>
                                <p class="text-gray-300">Layanan tersedia setiap saat melalui berbagai platform.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center card-hover">
                        <i class="fas fa-users text-4xl text-blue-400 mb-3"></i>
                        <div class="text-3xl font-bold">5M+</div>
                        <p class="text-gray-300">Nasabah Aktif</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center card-hover transform translate-y-4">
                        <i class="fas fa-chart-line text-4xl text-blue-400 mb-3"></i>
                        <div class="text-3xl font-bold">Rp 50T+</div>
                        <p class="text-gray-300">Total Aset</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center card-hover">
                        <i class="fas fa-mobile-alt text-4xl text-blue-400 mb-3"></i>
                        <div class="text-3xl font-bold">99.9%</div>
                        <p class="text-gray-300">Uptime</p>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center card-hover transform translate-y-4">
                        <i class="fas fa-star text-4xl text-blue-400 mb-3"></i>
                        <div class="text-3xl font-bold">4.8/5</div>
                        <p class="text-gray-300">Rating Kepuasan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6 md:px-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Testimoni</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6">Apa Kata Nasabah Kami</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $testimonials = [
                        [
                            'name' => 'Budi Santoso',
                            'role' => 'Pengusaha',
                            'text' =>
                                'FinBank sangat membantu mengembangkan bisnis saya. Proses pinjaman cepat dan bunga bersaing.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Dewi Lestari',
                            'role' => 'Karyawan Swasta',
                            'text' =>
                                'Aplikasinya mudah digunakan, transaksi lancar, dan fitur investasinya sangat menguntungkan.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Andi Wijaya',
                            'role' => 'Freelancer',
                            'text' =>
                                'Customer service responsif, keamanan terjamin. FinBank pilihan tepat untuk digital banking.',
                            'rating' => 5,
                        ],
                    ];
                @endphp

                @foreach ($testimonials as $testimonial)
                    <div class="bg-white rounded-2xl p-8 shadow-xl card-hover relative">
                        <i class="fas fa-quote-left text-4xl text-blue-200 absolute top-6 right-6"></i>
                        <div class="flex items-center mb-6">
                            <div
                                class="w-14 h-14 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                {{ substr($testimonial['name'], 0, 1) }}
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">{{ $testimonial['name'] }}</h4>
                                <p class="text-gray-500 text-sm">{{ $testimonial['role'] }}</p>
                            </div>
                        </div>
                        <div class="flex text-yellow-400 mb-4">
                            @for ($i = 0; $i < $testimonial['rating']; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <p class="text-gray-600 leading-relaxed">"{{ $testimonial['text'] }}"</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-24 bg-gradient-to-r from-blue-600 to-blue-800">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full filter blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 md:px-10 text-center relative">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Siap Memulai Perjalanan Finansial Anda?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Bergabunglah dengan 5+ juta nasabah yang sudah
                merasakan kemudahan bertransaksi dengan FinBank.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact"
                    class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-full font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300">
                    Buka Rekening <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#contact"
                    class="inline-flex items-center px-8 py-4 border-2 border-white text-white rounded-full font-semibold hover:bg-white/10 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white">
        <div class="container mx-auto px-6 md:px-10">
            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Hubungi Kami</span>
                    <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6">Ada Pertanyaan?<br>Kami Siap Membantu</h2>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-2xl">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone-alt text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Telepon</p>
                                <p class="font-semibold text-lg">1500-123</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-2xl">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Email</p>
                                <p class="font-semibold text-lg">care@finbank.co.id</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-2xl">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fab fa-whatsapp text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">WhatsApp</p>
                                <p class="font-semibold text-lg">+62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <form action="#" method="POST" class="space-y-6 bg-gray-50 p-8 rounded-3xl">
                        @csrf
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                            <input type="text"
                                class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email"
                                class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">No. Telepon</label>
                            <input type="tel"
                                class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Pesan</label>
                            <textarea rows="4"
                                class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 rounded-xl font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        // Smooth scroll
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

        // Intersection Observer untuk animasi
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('section, .card-hover').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.7s ease-out';
            observer.observe(el);
        });
    </script>
@endpush
