<header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-xl border-b border-gray-100 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="#beranda" class="flex items-center gap-3 group">
                <div class="relative w-12 h-12 flex items-center justify-center transition-all duration-500 group-hover:scale-110 group-hover:-rotate-3">
                    <div class="absolute inset-0 bg-green-100 rounded-2xl scale-0 group-hover:scale-100 transition-transform duration-500"></div>
                    <img src="img/logo.png" alt="Logo RT 27" class="relative w-11 h-11 object-contain z-10">
                </div>
                <div>
                    <h1 class="font-bold text-xl leading-none text-gray-900 transition-colors duration-300 group-hover:text-green-700">RT 27</h1>
                    <p class="text-xs text-gray-500 mt-1 transition-colors duration-300 group-hover:text-green-600">Lingkungan Kita</p>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-2 text-sm font-medium">
                <a href="#beranda" class="nav-link active relative px-4 py-2.5 rounded-full transition-all duration-300">Beranda</a>
                <a href="#warga" class="nav-link relative px-4 py-2.5 rounded-full transition-all duration-300">Data Warga</a>
                <a href="#program" class="nav-link relative px-4 py-2.5 rounded-full transition-all duration-300">Program</a>
                <a href="#pengumuman" class="nav-link relative px-4 py-2.5 rounded-full transition-all duration-300">Pengumuman</a>
                <a href="#kegiatan" class="nav-link relative px-4 py-2.5 rounded-full transition-all duration-300">Kegiatan</a>
                <a href="#galeri" class="nav-link relative px-4 py-2.5 rounded-full transition-all duration-300">Galeri</a>
                <a href="#kontak" class="nav-link relative px-4 py-2.5 rounded-full transition-all duration-300">Kontak</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="menuButton" aria-label="Buka menu" class="md:hidden relative w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center hover:bg-green-100 active:scale-90 transition-all duration-300">
                <span id="menuIcon" class="text-xl transition-transform duration-300 inline-block">☰</span>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="md:hidden grid grid-rows-[0fr] opacity-0 transition-all duration-300 ease-in-out">
            <div class="overflow-hidden">
                <div class="pb-5 pt-2 border-t border-gray-100 flex flex-col gap-2">
                    <a href="#beranda" class="mobile-link active px-4 py-3.5 rounded-xl font-medium transition-all duration-300"><span>Beranda</span></a>
                    <a href="#warga" class="mobile-link px-4 py-3.5 rounded-xl font-medium transition-all duration-300"><span>Data Warga</span></a>
                    <a href="#program" class="mobile-link px-4 py-3.5 rounded-xl font-medium transition-all duration-300"><span>Program</span></a>
                    <a href="#pengumuman" class="mobile-link px-4 py-3.5 rounded-xl font-medium transition-all duration-300"><span>Pengumuman</span></a>
                    <a href="#kegiatan" class="mobile-link px-4 py-3.5 rounded-xl font-medium transition-all duration-300"><span>Kegiatan</span></a>
                    <a href="#galeri" class="mobile-link px-4 py-3.5 rounded-xl font-medium transition-all duration-300"><span>Galeri</span></a>
                    <a href="#kontak" class="mobile-link px-4 py-3.5 rounded-xl font-medium transition-all duration-300"><span>Kontak</span></a>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .nav-link {
        color: #4b5563;
    }

    .nav-link:hover,
    .nav-link.active {
        color: #15803d;
        background: #f0fdf4;
    }

    .mobile-link {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #4b5563;
    }

    .mobile-link:hover {
        background: #f0fdf4;
        color: #15803d;
        transform: translateX(6px);
    }

    .mobile-link.active {
        background: #f0fdf4;
        color: #15803d;
    }

    #navbar.scrolled {
        background: rgba(255, 255, 255, 0.96);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border-bottom-color: rgba(22, 101, 52, 0.08);
    }

    @media (max-width: 767px) {
        #navbar {
            background: rgba(255, 255, 255, 0.95);
        }
    }
</style>

<script>
    const navbar = document.getElementById("navbar");
    const menuButton = document.getElementById("menuButton");
    const mobileMenu = document.getElementById("mobileMenu");
    const menuIcon = document.getElementById("menuIcon");
    const mobileLinks = document.querySelectorAll(".mobile-link");
    const sections = document.querySelectorAll("section[id], footer[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    let menuOpen = false;

    // Toggle Scroll Navbar Effect
    window.addEventListener("scroll", () => {
        if (window.scrollY > 20) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // Mobile Menu Toggle Functions
    function tutupMenu() {
        menuOpen = false;
        mobileMenu.classList.remove("grid-rows-[1fr]", "opacity-100");
        mobileMenu.classList.add("grid-rows-[0fr]", "opacity-0");
        menuIcon.innerHTML = "☰";
        menuIcon.style.transform = "rotate(0deg)";
        menuButton.setAttribute("aria-label", "Buka menu");
    }

    function bukaMenu() {
        menuOpen = true;
        mobileMenu.classList.remove("grid-rows-[0fr]", "opacity-0");
        mobileMenu.classList.add("grid-rows-[1fr]", "opacity-100");
        menuIcon.innerHTML = "✕";
        menuIcon.style.transform = "rotate(90deg)";
        menuButton.setAttribute("aria-label", "Tutup menu");
    }

    menuButton.addEventListener("click", (e) => {
        e.stopPropagation();
        if (menuOpen) {
            tutupMenu();
        } else {
            bukaMenu();
        }
    });

    // Close Mobile Menu on Outside Click
    document.addEventListener("click", (e) => {
        if (menuOpen && !navbar.contains(e.target)) {
            tutupMenu();
        }
    });

    // Close Mobile Menu on Link Click
    mobileLinks.forEach((link) => {
        link.addEventListener("click", tutupMenu);
    });

    // Active Link Highlighting on Scroll
    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 120;
            const sectionHeight = section.offsetHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });
    });
</script>