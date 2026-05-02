<header class="fixed top-0 left-0 w-full z-50 transition-all duration-700" id="header">
    <!-- Background sepenuhnya transparan -->
    <div class="absolute inset-0 bg-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-white/10 via-white/5 to-transparent opacity-0 transition-opacity duration-500"
        id="header-glow"></div>

    <nav class="relative container mx-auto px-4 sm:px-6 md:px-10 py-3 sm:py-4 md:py-5 flex justify-between items-center">
        <!-- Logo - tetap di kiri -->
        <div class="flex items-center group">
            <a href="/" class="relative">
                <div
                    class="absolute -inset-2 bg-blue-400/20 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-all duration-500">
                </div>
                <img src="{{ asset('assets/logo4.png') }}" alt="FinBank Logo"
                    class="relative h-8 sm:h-9 md:h-10 w-auto object-contain">
            </a>
        </div>

        <!-- Navigation Links Desktop - Tengah dengan dropdown -->
        <div class="hidden lg:flex items-center justify-center">
            <div class="glass-nav px-3 md:px-4 py-1 rounded-full backdrop-blur-lg bg-white/10 border border-white/20">
                <div class="flex items-center space-x-0.5 md:space-x-1">
                    <a href="#home"
                        class="nav-link px-2 sm:px-3 md:px-4 py-1.5 md:py-2 text-white/80 hover:text-white font-medium rounded-full transition-all duration-300 text-xs sm:text-sm md:text-base">Beranda</a>
                    <a href="#about"
                        class="nav-link px-2 sm:px-3 md:px-4 py-1.5 md:py-2 text-white/80 hover:text-white font-medium rounded-full transition-all duration-300 text-xs sm:text-sm md:text-base">Tentang
                        Kami</a>
                    <a href="#services"
                        class="nav-link px-2 sm:px-3 md:px-4 py-1.5 md:py-2 text-white/80 hover:text-white font-medium rounded-full transition-all duration-300 text-xs sm:text-sm md:text-base">Produk</a>
                    <a href="#features"
                        class="nav-link px-2 sm:px-3 md:px-4 py-1.5 md:py-2 text-white/80 hover:text-white font-medium rounded-full transition-all duration-300 text-xs sm:text-sm md:text-base">Penghargaan
                        & Mitra</a>

                    <!-- Dropdown Laporan (2 sub) -->
                    <div class="relative group/dropdown">
                        <a href="#"
                            class="nav-link px-2 sm:px-3 md:px-4 py-1.5 md:py-2 text-white/80 hover:text-white font-medium rounded-full transition-all duration-300 inline-flex items-center gap-1 text-xs sm:text-sm md:text-base">
                            Laporan <i class="fas fa-chevron-down text-[10px] sm:text-xs"></i>
                        </a>
                        <div class="dropdown-menu glass-dropdown">
                            <a href="#laporan-tahunan" class="block dropdown-item text-xs sm:text-sm">Laporan
                                Tahunan</a>
                            <a href="#laporan-keuangan" class="block dropdown-item text-xs sm:text-sm">Laporan
                                Keuangan</a>
                        </div>
                    </div>

                    <a href="#berita"
                        class="nav-link px-2 sm:px-3 md:px-4 py-1.5 md:py-2 text-white/80 hover:text-white font-medium rounded-full transition-all duration-300 text-xs sm:text-sm md:text-base">Berita</a>

                    <!-- Dropdown Hubungi Kami (1 sub) -->
                    <div class="relative group/dropdown">
                        <a href="#"
                            class="nav-link px-2 sm:px-3 md:px-4 py-1.5 md:py-2 text-white/80 hover:text-white font-medium rounded-full transition-all duration-300 inline-flex items-center gap-1 text-xs sm:text-sm md:text-base">
                            Hubungi Kami <i class="fas fa-chevron-down text-[10px] sm:text-xs"></i>
                        </a>
                        <div class="dropdown-menu glass-dropdown">
                            <a href="#kontak" class="block dropdown-item text-xs sm:text-sm">Kontak Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- === KANAN: MARKER MAPS + BUTUH BANTUAN (ikon & teks opsional) === -->
        <div class="hidden lg:flex items-center gap-2 md:gap-3">
            <!-- Marker Maps - mengarah ke halaman maps -->
            <a href="/peta-lokasi" id="maps-marker-link"
                class="relative flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 hover:bg-blue-500/30 hover:border-blue-400/50 transition-all duration-300 group/marker">
                <i
                    class="fas fa-map-marker-alt text-blue-300 text-sm md:text-lg group-hover/marker:text-white transition-colors"></i>
                <span
                    class="absolute -bottom-7 md:-bottom-8 left-1/2 -translate-x-1/2 text-[8px] md:text-[10px] font-medium text-white/70 whitespace-nowrap opacity-0 group-hover/marker:opacity-100 transition-opacity bg-black/40 backdrop-blur-sm px-1.5 md:px-2 py-0.5 rounded-full">Maps</span>
            </a>

            <!-- Butuh Bantuan? - ikon + teks ringkas (bisa berupa link ke helpdesk) -->
            <a href="/bantuan" id="help-link"
                class="flex items-center gap-1 md:gap-2 px-2 md:px-4 py-1.5 md:py-2 rounded-full bg-gradient-to-r from-blue-500/20 to-indigo-500/20 backdrop-blur-md border border-white/20 hover:from-blue-500/40 hover:to-indigo-500/40 transition-all duration-300 group/help">
                <i class="fas fa-headset text-blue-200 text-xs md:text-base group-hover/help:text-white transition"></i>
                <span class="text-xs md:text-sm font-medium text-white/90 hidden sm:inline-block">Butuh Bantuan?</span>
                <span class="text-xs md:text-sm font-medium text-white/90 sm:hidden">Bantuan</span>
            </a>
        </div>

        <!-- Mobile Menu Button + tambahan ikon untuk versi mobile (agar konsisten) -->
        <div class="flex items-center gap-1.5 sm:gap-2 lg:hidden">
            <!-- Marker maps versi mobile (lebih kecil) -->
            <a href="/peta-lokasi"
                class="flex items-center justify-center w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
                <i class="fas fa-map-marker-alt text-blue-300 text-xs sm:text-sm"></i>
            </a>
            <!-- Bantuan mobile -->
            <a href="/bantuan"
                class="flex items-center justify-center w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
                <i class="fas fa-headset text-blue-200 text-xs sm:text-sm"></i>
            </a>
            <!-- Tombol menu hamburger -->
            <button id="mobile-menu-button"
                class="relative w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 focus:outline-none hover:scale-105 transition-all duration-300">
                <i class="fas fa-bars text-white text-base sm:text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-black/40 backdrop-blur-xl border-t border-white/10 shadow-2xl">
        <div class="flex flex-col px-4 sm:px-6 py-4 sm:py-6 space-y-1 sm:space-y-2">
            <a href="#home"
                class="text-white/80 hover:text-white font-medium py-2 sm:py-3 px-3 sm:px-4 rounded-xl hover:bg-white/10 transition-all text-sm sm:text-base">Beranda</a>
            <a href="#about"
                class="text-white/80 hover:text-white font-medium py-2 sm:py-3 px-3 sm:px-4 rounded-xl hover:bg-white/10 transition-all text-sm sm:text-base">Tentang
                Kami</a>
            <a href="#services"
                class="text-white/80 hover:text-white font-medium py-2 sm:py-3 px-3 sm:px-4 rounded-xl hover:bg-white/10 transition-all text-sm sm:text-base">Produk</a>
            <a href="#features"
                class="text-white/80 hover:text-white font-medium py-2 sm:py-3 px-3 sm:px-4 rounded-xl hover:bg-white/10 transition-all text-sm sm:text-base">Penghargaan
                & Mitra</a>

            <!-- Mobile Laporan Dropdown -->
            <div class="mobile-dropdown-item">
                <div
                    class="mobile-dropdown-toggle flex justify-between items-center text-white/80 hover:text-white font-medium py-2 sm:py-3 px-3 sm:px-4 rounded-xl hover:bg-white/10 cursor-pointer transition-all text-sm sm:text-base">
                    <span>Laporan</span>
                    <i class="fas fa-chevron-down text-xs sm:text-sm transition-transform duration-200"></i>
                </div>
                <div class="mobile-submenu ml-3 sm:ml-4 mt-1 space-y-1">
                    <a href="#laporan-tahunan"
                        class="block text-white/70 hover:text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-lg hover:bg-white/10 transition-all text-xs sm:text-sm">Laporan
                        Tahunan</a>
                    <a href="#laporan-keuangan"
                        class="block text-white/70 hover:text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-lg hover:bg-white/10 transition-all text-xs sm:text-sm">Laporan
                        Keuangan</a>
                </div>
            </div>

            <a href="#berita"
                class="text-white/80 hover:text-white font-medium py-2 sm:py-3 px-3 sm:px-4 rounded-xl hover:bg-white/10 transition-all text-sm sm:text-base">Berita</a>

            <!-- Mobile Hubungi Kami Dropdown -->
            <div class="mobile-dropdown-item">
                <div
                    class="mobile-dropdown-toggle flex justify-between items-center text-white/80 hover:text-white font-medium py-2 sm:py-3 px-3 sm:px-4 rounded-xl hover:bg-white/10 cursor-pointer transition-all text-sm sm:text-base">
                    <span>Hubungi Kami</span>
                    <i class="fas fa-chevron-down text-xs sm:text-sm transition-transform duration-200"></i>
                </div>
                <div class="mobile-submenu ml-3 sm:ml-4 mt-1 space-y-1">
                    <a href="#kontak"
                        class="block text-white/70 hover:text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-lg hover:bg-white/10 transition-all text-xs sm:text-sm">Kontak
                        Kami</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Spacer untuk mencegah konten terpotong saat header muncul -->
<div class="h-0" id="header-spacer"></div>

<style>
    /* Glass effect untuk dropdown - sama persis dengan menu utama */
    .glass-dropdown {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Dropdown menu styling */
    .dropdown-menu {
        position: absolute;
        top: calc(100% + 0.6rem);
        left: 50%;
        transform: translateX(-50%) translateY(-8px);
        padding: 0.4rem;
        min-width: 160px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.2s ease;
        z-index: 100;
    }

    .group\/dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    /* Style dropdown item - bersih dan elegan */
    .dropdown-item {
        padding: 0.5rem 1rem;
        color: rgba(255, 255, 255, 0.85);
        font-weight: 500;
        transition: all 0.2s ease;
        white-space: nowrap;
        border-radius: 8px;
        margin: 2px 0;
    }

    .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.15);
        color: white;
        transform: translateX(4px);
    }

    /* Glass morphism navbar */
    .glass-nav {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    /* Nav link style */
    .nav-link {
        position: relative;
        transition: all 0.3s ease;
    }

    .nav-link.active {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.7), rgba(99, 102, 241, 0.7));
        color: white !important;
        box-shadow: 0 2px 10px rgba(59, 130, 246, 0.2);
    }

    /* Header default - tersembunyi */
    #header {
        transform: translateY(-100%);
    }

    /* Header saat visible - muncul */
    #header.header-visible {
        transform: translateY(0);
    }

    /* Header scroll effect - tambahan styling saat muncul */
    #header.header-visible {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(8px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    #header.header-visible .glass-nav {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
    }

    #header.header-visible .glass-dropdown {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
    }

    #header.header-visible #header-glow {
        opacity: 1;
    }

    /* Logo hover */
    .group:hover img {
        filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.4));
        transition: all 0.3s ease;
    }

    /* Mobile dropdown styles */
    .mobile-dropdown-toggle i {
        transition: transform 0.2s;
    }

    .mobile-submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 12px;
    }

    .mobile-submenu.open {
        max-height: 150px;
    }

    /* Tooltip marker khusus (opsional) */
    #maps-marker-link {
        position: relative;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .hidden\:lg\:flex {
            display: none;
        }
    }

    @media (max-width: 640px) {
        .dropdown-menu {
            min-width: 140px;
        }

        .dropdown-item {
            padding: 0.4rem 0.8rem;
            font-size: 0.75rem;
        }
    }
</style>

<script>
    // Header hide/show on scroll
    const header = document.getElementById('header');
    const headerSpacer = document.getElementById('header-spacer');
    let scrollTimer;
    let headerHeight = 0;

    function updateHeaderHeight() {
        if (header) {
            headerHeight = header.offsetHeight;
            if (headerSpacer) {
                if (header.classList.contains('header-visible')) {
                    headerSpacer.style.height = headerHeight + 'px';
                } else {
                    headerSpacer.style.height = '0px';
                }
            }
        }
    }

    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Header muncul saat scroll lebih dari 50px
        if (scrollTop > 50) {
            header.classList.add('header-visible');
        } else {
            // Header hilang saat di posisi atas (scroll < 50px)
            header.classList.remove('header-visible');
        }

        // Update spacer
        updateHeaderHeight();
    }

    // Throttle scroll event untuk performance
    window.addEventListener('scroll', function() {
        if (scrollTimer) clearTimeout(scrollTimer);
        scrollTimer = setTimeout(handleScroll, 10);
    });

    // Update header height on resize
    window.addEventListener('resize', function() {
        updateHeaderHeight();
    });

    // Initial call
    setTimeout(function() {
        updateHeaderHeight();
        handleScroll();
    }, 100);

    // Mobile menu toggle
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (menuButton) {
        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            const icon = menuButton.querySelector('i');
            if (!mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Mobile dropdown toggle
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const submenu = this.parentElement.querySelector('.mobile-submenu');
            const icon = this.querySelector('i');
            if (submenu) {
                submenu.classList.toggle('open');
                icon.style.transform = submenu.classList.contains('open') ? 'rotate(180deg)' :
                    'rotate(0deg)';
            }
        });
    });

    // Tutup mobile menu saat link diklik
    const mobileLinks = document.querySelectorAll('#mobile-menu a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            const icon = menuButton?.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });

    // Active link highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function updateActiveLink() {
        const scrollPosition = window.scrollY + 100;
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
            const sectionId = section.getAttribute('id');
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', updateActiveLink);
    updateActiveLink();

    // Prevent default untuk parent dropdown (Laporan dan Hubungi Kami) agar tidak ada konflik
    const dropdownParents = document.querySelectorAll('.group\\/dropdown > a');
    dropdownParents.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
        });
    });

    // Opsional: tambahkan event untuk marker maps & butuh bantuan agar smooth atau tracking
    const mapsLink = document.getElementById('maps-marker-link');
    if (mapsLink) {
        mapsLink.addEventListener('click', function(e) {
            console.log("Navigasi ke halaman peta lokasi");
        });
    }

    const helpLink = document.getElementById('help-link');
    if (helpLink) {
        helpLink.addEventListener('click', function(e) {
            console.log("Membuka halaman bantuan / butuh bantuan");
        });
    }
</script>
