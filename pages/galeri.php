<section id="galeri" class="relative py-20 bg-gradient-to-b from-slate-50 via-gray-100 to-slate-50 overflow-hidden">
    <!-- BACKGROUND DECORATIONS -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-100/50 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-green-100/50 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <!-- HEADER -->
        <div class="galeri-header flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14">
            <div class="space-y-3">
                <!-- LABEL -->
                <span class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500/10 to-teal-500/10 border border-emerald-500/20 text-emerald-700 px-4 py-1.5 rounded-full text-xs font-bold tracking-wide shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    DOKUMENTASI WARGA
                </span>

                <!-- JUDUL -->
                <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Galeri Kegiatan <span class="bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">RT 27</span>
                </h2>

                <p class="text-slate-600 text-sm md:text-base max-w-xl leading-relaxed">
                    Momen kebersamaan, gotong royong, dan berbagai kegiatan positif yang dilakukan oleh warga Lingkungan RT 27.
                </p>
            </div>

            <!-- FILTER BUTTONS -->
            <div class="flex flex-wrap items-center gap-2.5 bg-white/80 p-1.5 rounded-2xl border border-slate-200/80 shadow-sm backdrop-blur-md self-start lg:self-auto">
                <button class="filter-btn active bg-emerald-600 text-white shadow-md shadow-emerald-600/30 px-5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300" data-filter="all">
                    Semua
                </button>
                <button class="filter-btn bg-transparent text-slate-600 hover:text-emerald-600 hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300" data-filter="kebersihan">
                    Kebersihan
                </button>
                <button class="filter-btn bg-transparent text-slate-600 hover:text-emerald-600 hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300" data-filter="sosial">
                    Sosial & Rapat
                </button>
            </div>
        </div>

        <!-- GRID GALERI -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- ITEM 1 -->
            <div class="galeri-card group bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-category="kebersihan">
                <div class="relative overflow-hidden aspect-[4/3] cursor-pointer" onclick="openLightbox('../img/bersihgor.jpg', 'Kerja Bakti Membersihkan Saluran Air', '6 September 2026', 'Kebersihan')">
                    <img src="../img/bersihgor.jpg" alt="Kerja Bakti" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent opacity-90 group-hover:opacity-95 transition-opacity"></div>

                    <span class="absolute top-4 left-4 bg-emerald-500/90 backdrop-blur-md text-white text-[11px] font-bold tracking-wider px-3.5 py-1.5 rounded-xl shadow-lg border border-white/20">
                        Kebersihan
                    </span>

                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <div class="flex items-center gap-1.5 text-emerald-300 text-xs font-medium mb-1.5">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z" />
                            </svg>
                            <span>6 September 2026</span>
                        </div>
                        <h3 class="font-extrabold text-lg leading-snug group-hover:text-emerald-200 transition-colors">
                            Kerja Bakti Membersihkan Saluran Air
                        </h3>
                    </div>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="galeri-card group bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-category="sosial">
                <div class="relative overflow-hidden aspect-[4/3] cursor-pointer" onclick="openLightbox('../img/rapat.jpg', 'Musyawarah Bulanan Warga RT 27', '12 Agustus 2026', 'Sosial & Rapat')">
                    <img src="../img/rapat.jpg" alt="Rapat Warga" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent opacity-90 group-hover:opacity-95 transition-opacity"></div>

                    <span class="absolute top-4 left-4 bg-sky-500/90 backdrop-blur-md text-white text-[11px] font-bold tracking-wider px-3.5 py-1.5 rounded-xl shadow-lg border border-white/20">
                        Sosial & Rapat
                    </span>

                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <div class="flex items-center gap-1.5 text-sky-300 text-xs font-medium mb-1.5">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z" />
                            </svg>
                            <span>12 Agustus 2026</span>
                        </div>
                        <h3 class="font-extrabold text-lg leading-snug group-hover:text-sky-200 transition-colors">
                            Musyawarah Bulanan Warga RT 27
                        </h3>
                    </div>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="galeri-card group bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-category="sosial">
                <div class="relative overflow-hidden aspect-[4/3] cursor-pointer" onclick="openLightbox('../img/upacara.jpg', 'Perayaan & Syukuran HUT Kemerdekaan', '17 Agustus 2026', 'Sosial & Rapat')">
                    <img src="../img/upacara.jpg" alt="Kumpul Warga" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent opacity-90 group-hover:opacity-95 transition-opacity"></div>

                    <span class="absolute top-4 left-4 bg-teal-500/90 backdrop-blur-md text-white text-[11px] font-bold tracking-wider px-3.5 py-1.5 rounded-xl shadow-lg border border-white/20">
                        Sosial & Rapat
                    </span>

                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <div class="flex items-center gap-1.5 text-teal-300 text-xs font-medium mb-1.5">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z" />
                            </svg>
                            <span>17 Agustus 2026</span>
                        </div>
                        <h3 class="font-extrabold text-lg leading-snug group-hover:text-teal-200 transition-colors">
                            Perayaan & Syukuran HUT Kemerdekaan
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- LIGHTBOX MODAL (PRINCIAPL INTERACTIVITY IMPROVEMENT) -->
    <div id="lightbox-modal" class="fixed inset-0 z-50 bg-slate-950/90 backdrop-blur-xl flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">
        <button onclick="closeLightbox()" class="absolute top-6 right-6 w-11 h-11 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center text-xl transition-all border border-white/10 z-10">
            ✕
        </button>
        <div class="max-w-4xl w-full bg-slate-900 border border-white/10 rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row transform scale-95 transition-transform duration-300" id="lightbox-card">
            <div class="md:w-2/3 bg-black flex items-center justify-center min-h-[280px]">
                <img id="lightbox-img" src="" alt="" class="max-h-[70vh] w-full object-contain">
            </div>
            <div class="md:w-1/3 p-6 md:p-8 flex flex-col justify-between text-white">
                <div>
                    <span id="lightbox-tag" class="inline-block bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-xs font-bold px-3 py-1 rounded-lg mb-4"></span>
                    <h3 id="lightbox-title" class="text-xl font-bold leading-tight mb-2"></h3>
                    <p id="lightbox-date" class="text-sm text-slate-400 flex items-center gap-2 mb-4"></p>
                </div>
                <button onclick="closeLightbox()" class="w-full py-3 bg-emerald-600 hover:bg-emerald-500 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-all shadow-lg shadow-emerald-600/30">
                    Tutup Pratinjau
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    .galeri-header {
        opacity: 0;
        transform: translateY(35px);
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .galeri-header.show {
        opacity: 1;
        transform: translateY(0);
    }

    .galeri-card {
        opacity: 0;
        transform: translateY(40px);
    }

    .galeri-card.show {
        opacity: 1;
        transform: translateY(0);
    }

    .galeri-card.hide {
        display: none;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const galeriHeader = document.querySelector('.galeri-header');
        const galeriCards = document.querySelectorAll('.galeri-card');
        const filterButtons = document.querySelectorAll('.filter-btn');

        const galeriObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.15
        });

        if (galeriHeader) {
            galeriObserver.observe(galeriHeader);
        }

        galeriCards.forEach((card, index) => {
            card.style.transition = `opacity 0.8s ease ${index * 0.15}s, transform 0.8s ease ${index * 0.15}s, box-shadow 0.3s ease, border-color 0.3s ease`;
            galeriObserver.observe(card);
        });

        // Filter Functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-emerald-600', 'text-white', 'shadow-md', 'shadow-emerald-600/30');
                    btn.classList.add('bg-transparent', 'text-slate-600');
                });

                button.classList.add('active', 'bg-emerald-600', 'text-white', 'shadow-md', 'shadow-emerald-600/30');
                button.classList.remove('bg-transparent', 'text-slate-600');

                const filterValue = button.getAttribute('data-filter');

                galeriCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.classList.remove('hide');
                        setTimeout(() => card.classList.add('show'), 50);
                    } else {
                        card.classList.remove('show');
                        card.classList.add('hide');
                    }
                });
            });
        });
    });

    // Lightbox Functionality
    function openLightbox(src, title, date, tag) {
        const modal = document.getElementById('lightbox-modal');
        const card = document.getElementById('lightbox-card');
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox-title').innerText = title;
        document.getElementById('lightbox-date').innerText = '📅 ' + date;
        document.getElementById('lightbox-tag').innerText = tag;

        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.classList.add('opacity-100');
        card.classList.remove('scale-95');
        card.classList.add('scale-100');
    }

    function closeLightbox() {
        const modal = document.getElementById('lightbox-modal');
        const card = document.getElementById('lightbox-card');

        modal.classList.add('opacity-0', 'pointer-events-none');
        modal.classList.remove('opacity-100');
        card.classList.add('scale-95');
        card.classList.remove('scale-100');
    }
</script>