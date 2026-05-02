<header
    class="fixed top-0 left-0 w-full bg-white/95 backdrop-blur-md z-50 transition-all duration-500 border-b border-gray-100"
    id="header">
    <nav class="container mx-auto px-6 md:px-10 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/"
                class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                Fin<span class="text-gray-900">Bank</span>
            </a>
        </div>

        <div class="hidden lg:flex space-x-10">
            <a href="#home"
                class="text-gray-600 hover:text-blue-600 font-medium transition-all duration-300 hover:-translate-y-0.5">Beranda</a>
            <a href="#about"
                class="text-gray-600 hover:text-blue-600 font-medium transition-all duration-300 hover:-translate-y-0.5">Tentang</a>
            <a href="#services"
                class="text-gray-600 hover:text-blue-600 font-medium transition-all duration-300 hover:-translate-y-0.5">Layanan</a>
            <a href="#features"
                class="text-gray-600 hover:text-blue-600 font-medium transition-all duration-300 hover:-translate-y-0.5">Fitur</a>
            <a href="#products"
                class="text-gray-600 hover:text-blue-600 font-medium transition-all duration-300 hover:-translate-y-0.5">Produk</a>
            <a href="#contact"
                class="text-gray-600 hover:text-blue-600 font-medium transition-all duration-300 hover:-translate-y-0.5">Kontak</a>
        </div>

        <div class="hidden lg:flex items-center space-x-4">
            <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Masuk</a>
            <a href="#contact"
                class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-2.5 rounded-full font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300">
                Daftar Sekarang
            </a>
        </div>

        <button id="mobile-menu-button" class="lg:hidden text-gray-700 focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden lg:hidden bg-white/95 backdrop-blur-md border-t shadow-xl">
        <div class="flex flex-col space-y-4 px-6 py-6">
            <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Beranda</a>
            <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Tentang</a>
            <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Layanan</a>
            <a href="#features" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Fitur</a>
            <a href="#products" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Produk</a>
            <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Kontak</a>
            <div class="pt-4 space-y-3">
                <a href="#contact" class="block text-center text-gray-700 font-medium py-2">Masuk</a>
                <a href="#contact"
                    class="block text-center bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-full font-semibold">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-lg', 'py-0');
            header.classList.remove('border-b');
        } else {
            header.classList.remove('shadow-lg', 'py-0');
            header.classList.add('border-b');
        }
    });

    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (menuButton) {
        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
</script>
