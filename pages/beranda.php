<section id="beranda" class="relative min-h-[600px] md:min-h-[680px] flex items-center overflow-hidden bg-gradient-to-br from-green-950 via-emerald-950 to-slate-900 pt-28 pb-20 md:pt-24">
    <!-- Background Elements -->
    <img src="../img/background.jpeg" alt="Pemandangan desa" class="absolute inset-0 md:left-[25%] md:w-[75%] w-full h-full object-cover object-center scale-105 filter brightness-95">

    <!-- Gradient Overlays for Smooth Blending -->
    <div class="absolute inset-0 bg-gradient-to-r from-green-950 via-green-950/90 via-50% to-transparent hidden md:block"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-green-950/80 via-green-950/95 to-green-950 md:hidden"></div>

    <!-- Decorative Glow Effects -->
    <div class="absolute top-1/4 left-10 w-72 h-72 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-green-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-5 lg:px-8">
        <div class="max-w-2xl text-white">
            <!-- Badge -->
            <div class="hero-item inline-flex items-center gap-2.5 bg-white/10 hover:bg-white/15 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full text-xs font-semibold mb-6 shadow-inner transition">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                <span class="tracking-wide text-emerald-200">Selamat Datang di Lingkungan RT 27</span>
            </div>

            <!-- Title -->
            <h1 class="hero-item text-4xl sm:text-5xl md:text-6xl font-extrabold leading-[1.15] mb-6 tracking-tight">
                Bersama Membangun <br class="hidden sm:inline" />
                <span class="bg-gradient-to-r from-emerald-400 via-green-300 to-teal-200 bg-clip-text text-transparent">
                    Lingkungan Yang Harmonis
                </span>
            </h1>

            <!-- Paragraph -->
            <p class="hero-item text-gray-200 text-sm sm:text-base md:text-lg leading-relaxed mb-8 max-w-xl font-normal">
                Wadah informasi dan kebersamaan warga. Mewujudkan lingkungan yang aman, bersih, nyaman, dan guyub untuk seluruh keluarga RT 27.
            </p>

            <!-- CTA Buttons -->
            <div class="hero-item flex flex-wrap gap-4">
                <a href="#kegiatan" class="group relative inline-flex items-center gap-3 bg-emerald-500 hover:bg-emerald-400 text-slate-950 px-6 py-3.5 rounded-full font-bold text-sm shadow-lg shadow-emerald-500/25 transition-all duration-300 hover:-translate-y-1 hover:shadow-emerald-500/40">
                    <span>Lihat Kegiatan</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="#warga" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 text-white px-6 py-3.5 rounded-full font-semibold text-sm transition-all duration-300 hover:-translate-y-1 hover:border-white/40">
                    Informasi RT
                </a>
            </div>

            <!-- Highlights -->
            <div class="hero-item grid grid-cols-3 gap-3 sm:gap-6 mt-12 pt-8 border-t border-white/10 text-xs sm:text-sm font-medium text-gray-300">
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold">✓</div>
                    <span>Lingkungan Aman</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold">✓</div>
                    <span>Warga Kompak</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold">✓</div>
                    <span>Kegiatan Aktif</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-50 to-transparent"></div>
</section>

<section id="warga" class="bg-gray-50 py-16 md:py-24 relative">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-14 warga-title">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-3">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                Tentang RT 27
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">Data & Informasi Lingkungan</h2>
            <p class="text-gray-600 text-sm sm:text-base mt-3 max-w-xl mx-auto">Gambaran umum kependudukan, keaktifan kegiatan, dan program pembangunan di wilayah kami.</p>
        </div>

        <!-- Stat Cards Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Card 1 -->
            <div class="stat-card group relative bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-2xl hover:border-emerald-200 hover:-translate-y-2 transition-all duration-300">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <div class="w-12 h-12 shrink-0 bg-gradient-to-br from-emerald-500 to-green-600 text-white rounded-2xl flex items-center justify-center text-2xl shadow-md shadow-emerald-500/20 group-hover:scale-110 transition-transform duration-300">
                        👨‍👩‍👧‍👦
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                            <span class="counter" data-target="128">0</span>
                        </p>
                        <p class="text-xs sm:text-sm font-medium text-gray-500 mt-0.5">Kepala Keluarga</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="stat-card group relative bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-2xl hover:border-blue-200 hover:-translate-y-2 transition-all duration-300">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <div class="w-12 h-12 shrink-0 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl shadow-md shadow-blue-500/20 group-hover:scale-110 transition-transform duration-300">
                        👥
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                            <span class="counter" data-target="342">0</span>
                        </p>
                        <p class="text-xs sm:text-sm font-medium text-gray-500 mt-0.5">Total Warga</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="stat-card group relative bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-2xl hover:border-amber-200 hover:-translate-y-2 transition-all duration-300">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <div class="w-12 h-12 shrink-0 bg-gradient-to-br from-amber-400 to-orange-500 text-white rounded-2xl flex items-center justify-center text-2xl shadow-md shadow-amber-500/20 group-hover:scale-110 transition-transform duration-300">
                        📅
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                            <span class="counter" data-target="24">0</span>+
                        </p>
                        <p class="text-xs sm:text-sm font-medium text-gray-500 mt-0.5">Kegiatan / Tahun</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="stat-card group relative bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-2xl hover:border-teal-200 hover:-translate-y-2 transition-all duration-300">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <div class="w-12 h-12 shrink-0 bg-gradient-to-br from-teal-400 to-emerald-600 text-white rounded-2xl flex items-center justify-center text-2xl shadow-md shadow-teal-500/20 group-hover:scale-110 transition-transform duration-300">
                        🌱
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                            <span class="counter" data-target="12">0</span>
                        </p>
                        <p class="text-xs sm:text-sm font-medium text-gray-500 mt-0.5">Program Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-item {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .hero-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .hero-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .hero-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .hero-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .hero-item:nth-child(5) {
        animation-delay: 0.5s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .warga-title,
    .stat-card {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .warga-title.show,
    .stat-card.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    // Intersection Observer untuk animasi fade-in saat scroll
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                // Jalankan animasi angka jika elemen tersebut adalah card
                if (entry.target.classList.contains('stat-card')) {
                    const counter = entry.target.querySelector('.counter');
                    if (counter && !counter.classList.contains('counted')) {
                        runCounter(counter);
                    }
                }
            }
        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll('.warga-title, .stat-card').forEach((el, i) => {
        el.style.transitionDelay = `${i * 0.1}s`;
        observer.observe(el);
    });

    // Animasi Penghitung Angka (Number Counter)
    function runCounter(el) {
        el.classList.add('counted');
        const target = +el.getAttribute('data-target');
        const duration = 1500; // durasi animasi ms
        const stepTime = 20;
        const steps = duration / stepTime;
        const increment = target / steps;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                el.innerText = target;
                clearInterval(timer);
            } else {
                el.innerText = Math.ceil(current);
            }
        }, stepTime);
    }
</script>