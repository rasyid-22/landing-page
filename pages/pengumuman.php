<section id="pengumuman" class="relative py-16 md:py-24 bg-gradient-to-b from-slate-50 via-slate-100/50 to-slate-50 overflow-hidden">
    <!-- LATAR BELAKANG DEKORASI INTERAKTIF -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-300/30 rounded-full blur-3xl pointer-events-none animate-pulse"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-sky-300/30 rounded-full blur-3xl pointer-events-none animate-pulse" style="animation-delay: 1s;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- HEADER SECTION -->
        <div class="pengumuman-header flex flex-col md:flex-row md:justify-between md:items-end gap-6 mb-12">
            <div>
                <!-- LABEL BADGE -->
                <span class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 px-4 py-1.5 rounded-full text-xs font-bold mb-3 border border-emerald-200/60 shadow-sm backdrop-blur-md">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    📢 Informasi RT 27
                </span>
                <!-- JUDUL MAIN -->
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                    Pengumuman <span class="bg-gradient-to-r from-emerald-600 to-teal-500 bg-clip-text text-transparent">Terbaru</span>
                </h2>
                <p class="text-sm md:text-base text-slate-600 mt-3 max-w-xl leading-relaxed">
                    Pusat informasi agenda, iuran, dan kegiatan warga Lingkungan RT 27 secara terpadu.
                </p>
            </div>
            <!-- BUTTON (MEMBUKA MODAL KALENDER) -->
            <button onclick="openCalendarModal()" class="group inline-flex items-center gap-2.5 self-start md:self-auto bg-slate-900 text-white px-6 py-3 rounded-2xl text-sm font-bold shadow-lg shadow-slate-900/10 hover:bg-emerald-600 hover:shadow-emerald-600/25 transition-all duration-300 active:scale-95">
                <span>Lihat semua agenda</span>
                <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
            </button>
        </div>

        <!-- CARD GRID UTAMA -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card 1: Kerja Bakti -->
            <div class="pengumuman-card group bg-white/80 backdrop-blur-lg rounded-3xl p-6 border border-slate-200/80 hover:border-emerald-300 hover:shadow-2xl hover:shadow-emerald-500/10 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-500/5 rounded-bl-full pointer-events-none"></div>
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-3xl shadow-inner border border-emerald-100 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            🧹
                        </div>
                        <span class="inline-block text-[10px] font-extrabold px-3 py-1 rounded-full bg-emerald-100/80 text-emerald-800 tracking-wide uppercase">Kegiatan</span>
                    </div>
                    <h3 class="font-extrabold text-slate-900 text-xl group-hover:text-emerald-600 transition-colors">
                        Kerja Bakti Lingkungan
                    </h3>
                    <p class="text-xs text-emerald-700 font-bold mt-1.5 flex items-center gap-1">
                        <span>📅</span> Minggu, 6 September 2026
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed mt-3">
                        Mari bersama-sama menjaga kebersihan lingkungan RT kita agar tetap sehat dan nyaman.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <button onclick="openDetailModal('Kerja Bakti Lingkungan', 'Minggu, 6 September 2026', '🧹', 'Kegiatan', 'Mari bersama-sama menjaga kebersihan lingkungan RT kita agar tetap sehat dan nyaman. Peralatan kebersihan harap dibawa masing-masing.')" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-700 group-hover:text-emerald-800 transition-colors">
                        Selengkapnya
                        <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </button>
                </div>
            </div>

            <!-- Card 2: Pembayaran Iuran -->
            <div class="pengumuman-card group bg-white/80 backdrop-blur-lg rounded-3xl p-6 border border-slate-200/80 hover:border-amber-300 hover:shadow-2xl hover:shadow-amber-500/10 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-amber-500/5 rounded-bl-full pointer-events-none"></div>
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-3xl shadow-inner border border-amber-100 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            💰
                        </div>
                        <span class="inline-block text-[10px] font-extrabold px-3 py-1 rounded-full bg-amber-100/80 text-amber-800 tracking-wide uppercase">Keuangan</span>
                    </div>
                    <h3 class="font-extrabold text-slate-900 text-xl group-hover:text-amber-600 transition-colors">
                        Pembayaran Iuran RT
                    </h3>
                    <p class="text-xs text-amber-700 font-bold mt-1.5 flex items-center gap-1">
                        <span>📅</span> Batas 10 September 2026
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed mt-3">
                        Mohon untuk membayar iuran RT tepat waktu demi mendukung kegiatan dan kebutuhan bersama.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <button onclick="openDetailModal('Pembayaran Iuran RT', 'Batas 10 September 2026', '💰', 'Keuangan', 'Mohon untuk membayar iuran RT tepat waktu demi mendukung kegiatan dan kebutuhan bersama seperti keamanan dan kebersihan.')" class="inline-flex items-center gap-2 text-xs font-bold text-amber-700 group-hover:text-amber-800 transition-colors">
                        Selengkapnya
                        <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </button>
                </div>
            </div>

            <!-- Card 3: Rapat Warga -->
            <div class="pengumuman-card group bg-white/80 backdrop-blur-lg rounded-3xl p-6 border border-slate-200/80 hover:border-sky-300 hover:shadow-2xl hover:shadow-sky-500/10 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-sky-500/5 rounded-bl-full pointer-events-none"></div>
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-sky-50 flex items-center justify-center text-3xl shadow-inner border border-sky-100 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            👨‍👩‍👧‍👦
                        </div>
                        <span class="inline-block text-[10px] font-extrabold px-3 py-1 rounded-full bg-sky-100/80 text-sky-800 tracking-wide uppercase">Rapat</span>
                    </div>
                    <h3 class="font-extrabold text-slate-900 text-xl group-hover:text-sky-600 transition-colors">
                        Rapat Warga
                    </h3>
                    <p class="text-xs text-sky-700 font-bold mt-1.5 flex items-center gap-1">
                        <span>📅</span> Sabtu, 12 September 2026
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed mt-3">
                        Rapat membahas program, kegiatan, dan perkembangan lingkungan RT 27.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <button onclick="openDetailModal('Rapat Warga', 'Sabtu, 12 September 2026', '👨‍👩‍👧‍👦', 'Rapat', 'Rapat membahas program, kegiatan, dan perkembangan lingkungan RT 27. Kehadiran perwakilan tiap rumah sangat diharapkan.')" class="inline-flex items-center gap-2 text-xs font-bold text-sky-700 group-hover:text-sky-800 transition-colors">
                        Selengkapnya
                        <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="calendarModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-md z-50 hidden opacity-0 transition-all duration-300 flex items-center justify-center p-4 sm:p-6 overflow-y-auto">
    <div id="calendarContent" class="bg-white w-full max-w-4xl rounded-3xl p-6 sm:p-8 shadow-2xl transform scale-95 transition-all duration-300 relative my-auto max-h-[90vh] overflow-y-auto border border-slate-100">
        <!-- TOMBOL CLOSE -->
        <button onclick="closeCalendarModal()" aria-label="Tutup Modal" class="absolute top-5 right-5 w-9 h-9 bg-slate-100 hover:bg-slate-200 rounded-full flex items-center justify-center text-slate-500 font-bold transition-all z-10 focus:outline-none focus:ring-2 focus:ring-emerald-500">
            ✕
        </button>

        <div class="mb-6">
            <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-xs font-bold mb-2">
                📅 Agenda Lengkap
            </span>
            <h3 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                Kalender Kegiatan RT 27
            </h3>
        </div>

        <!-- GRID KALENDER & LIST -->
        <div class="grid lg:grid-cols-3 gap-6">
            <!-- KALENDER INTERAKTIF -->
            <div class="lg:col-span-2 bg-slate-50/80 rounded-2xl p-4 sm:p-5 border border-slate-200/60">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-base font-extrabold text-slate-900">September 2026</h4>
                    <span class="text-[11px] text-slate-400 font-medium">Klik tanggal bernoda untuk detail</span>
                </div>

                <!-- NAMA HARI -->
                <div class="grid grid-cols-7 gap-1 text-center font-black text-[11px] text-slate-400 mb-2">
                    <div>MIN</div>
                    <div>SEN</div>
                    <div>SEL</div>
                    <div>RAB</div>
                    <div>KAM</div>
                    <div>JUM</div>
                    <div>SAB</div>
                </div>

                <!-- TANGGAL KALENDER -->
                <div class="grid grid-cols-7 gap-1.5">
                    <div class="h-12 sm:h-14 bg-slate-100/50 rounded-xl p-1 text-slate-300 text-[10px]">30</div>
                    <div class="h-12 sm:h-14 bg-slate-100/50 rounded-xl p-1 text-slate-300 text-[10px]">31</div>

                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">1</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">2</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">3</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">4</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">5</div>

                    <!-- TANGGAL 6 (KERJA BAKTI) -->
                    <button onclick="openDetailModal('Kerja Bakti Lingkungan', 'Minggu, 6 September 2026', '🧹', 'Kegiatan', 'Mari bersama-sama menjaga kebersihan lingkungan RT kita agar tetap sehat dan nyaman. Peralatan kebersihan harap dibawa masing-masing.')" class="h-12 sm:h-14 bg-emerald-100/90 border border-emerald-300 hover:bg-emerald-200 hover:scale-95 rounded-xl p-1 text-left cursor-pointer transition-all flex flex-col justify-between group focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm">
                        <span class="text-[10px] font-black text-emerald-900">6</span>
                        <span class="bg-emerald-600 text-white text-[9px] font-bold px-1 rounded truncate w-full group-hover:bg-emerald-700 transition-colors">🧹 Kerja Bakti</span>
                    </button>

                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">7</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">8</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">9</div>

                    <!-- TANGGAL 10 (IURAN RT) -->
                    <button onclick="openDetailModal('Pembayaran Iuran RT', 'Batas 10 September 2026', '💰', 'Keuangan', 'Mohon untuk membayar iuran RT tepat waktu demi mendukung kegiatan dan kebutuhan bersama seperti keamanan dan kebersihan.')" class="h-12 sm:h-14 bg-amber-100/90 border border-amber-300 hover:bg-amber-200 hover:scale-95 rounded-xl p-1 text-left cursor-pointer transition-all flex flex-col justify-between group focus:outline-none focus:ring-2 focus:ring-amber-500 shadow-sm">
                        <span class="text-[10px] font-black text-amber-900">10</span>
                        <span class="bg-amber-600 text-white text-[9px] font-bold px-1 rounded truncate w-full group-hover:bg-amber-700 transition-colors">💰 Iuran RT</span>
                    </button>

                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">11</div>

                    <!-- TANGGAL 12 (RAPAT) -->
                    <button onclick="openDetailModal('Rapat Warga', 'Sabtu, 12 September 2026', '👨‍👩‍👧‍👦', 'Rapat', 'Rapat membahas program, kegiatan, dan perkembangan lingkungan RT 27. Kehadiran perwakilan tiap rumah sangat diharapkan.')" class="h-12 sm:h-14 bg-sky-100/90 border border-sky-300 hover:bg-sky-200 hover:scale-95 rounded-xl p-1 text-left cursor-pointer transition-all flex flex-col justify-between group focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm">
                        <span class="text-[10px] font-black text-sky-900">12</span>
                        <span class="bg-sky-600 text-white text-[9px] font-bold px-1 rounded truncate w-full group-hover:bg-sky-700 transition-colors">👨‍👩‍👧‍👦 Rapat</span>
                    </button>

                    <!-- Tanggal Sisa (13-30) -->
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">13</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">14</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">15</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">16</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">17</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">18</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">19</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">20</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">21</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">22</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">23</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">24</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">25</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">26</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">27</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">28</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">29</div>
                    <div class="h-12 sm:h-14 bg-white rounded-xl p-1.5 text-xs text-slate-500 border border-slate-100">30</div>
                </div>
            </div>

            <!-- SIDEBAR ITEM LIST -->
            <div class="space-y-3 flex flex-col justify-start">
                <h4 class="text-xs font-black uppercase text-slate-400 tracking-wider mb-1">Daftar Pengumuman</h4>

                <div onclick="openDetailModal('Kerja Bakti Lingkungan', 'Minggu, 6 September 2026', '🧹', 'Kegiatan', 'Mari bersama-sama menjaga kebersihan lingkungan RT kita agar tetap sehat dan nyaman.')" class="bg-slate-50 p-3.5 rounded-2xl border border-slate-200/60 hover:border-emerald-300 hover:bg-emerald-50/40 cursor-pointer transition-all flex items-center gap-3 group shadow-sm">
                    <div class="w-10 h-10 shrink-0 rounded-xl bg-white flex items-center justify-center text-lg shadow-sm border border-slate-100 group-hover:scale-110 transition-transform">🧹</div>
                    <div class="overflow-hidden">
                        <h5 class="font-bold text-slate-900 text-xs truncate group-hover:text-emerald-700 transition-colors">Kerja Bakti Lingkungan</h5>
                        <p class="text-[11px] text-emerald-700 font-semibold mt-0.5">6 Sep 2026</p>
                    </div>
                </div>

                <div onclick="openDetailModal('Pembayaran Iuran RT', 'Batas 10 September 2026', '💰', 'Keuangan', 'Mohon untuk membayar iuran RT tepat waktu demi mendukung kegiatan bersama.')" class="bg-slate-50 p-3.5 rounded-2xl border border-slate-200/60 hover:border-amber-300 hover:bg-amber-50/40 cursor-pointer transition-all flex items-center gap-3 group shadow-sm">
                    <div class="w-10 h-10 shrink-0 rounded-xl bg-white flex items-center justify-center text-lg shadow-sm border border-slate-100 group-hover:scale-110 transition-transform">💰</div>
                    <div class="overflow-hidden">
                        <h5 class="font-bold text-slate-900 text-xs truncate group-hover:text-amber-700 transition-colors">Pembayaran Iuran RT</h5>
                        <p class="text-[11px] text-amber-700 font-semibold mt-0.5">Batas 10 Sep 2026</p>
                    </div>
                </div>

                <div onclick="openDetailModal('Rapat Warga', 'Sabtu, 12 September 2026', '👨‍👩‍👧‍👦', 'Rapat', 'Rapat membahas program, kegiatan, dan perkembangan lingkungan RT 27.')" class="bg-slate-50 p-3.5 rounded-2xl border border-slate-200/60 hover:border-sky-300 hover:bg-sky-50/40 cursor-pointer transition-all flex items-center gap-3 group shadow-sm">
                    <div class="w-10 h-10 shrink-0 rounded-xl bg-white flex items-center justify-center text-lg shadow-sm border border-slate-100 group-hover:scale-110 transition-transform">👨‍👩‍👧‍👦</div>
                    <div class="overflow-hidden">
                        <h5 class="font-bold text-slate-900 text-xs truncate group-hover:text-sky-700 transition-colors">Rapat Warga</h5>
                        <p class="text-[11px] text-sky-700 font-semibold mt-0.5">12 Sep 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========================================== -->
<!-- MODAL DETAIL SUB-ITEM                      -->
<!-- ========================================== -->
<div id="detailModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-md z-[60] hidden opacity-0 transition-all duration-300 flex items-center justify-center p-4">
    <div id="detailContent" class="bg-white w-full max-w-md rounded-3xl p-6 shadow-2xl transform scale-95 transition-all duration-300 relative border border-slate-100">
        <button onclick="closeDetailModal()" aria-label="Tutup Detail" class="absolute top-4 right-4 w-8 h-8 bg-slate-100 hover:bg-slate-200 rounded-full flex items-center justify-center text-slate-500 font-bold transition-all focus:outline-none">
            ✕
        </button>
        <div class="flex items-start gap-4 mb-4">
            <div id="detailIcon" class="w-12 h-12 rounded-2xl bg-slate-100 flex items-center justify-center text-2xl shadow-inner shrink-0"></div>
            <div>
                <span id="detailCategory" class="text-[10px] font-black px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 inline-block mb-1 uppercase tracking-wider"></span>
                <h4 id="detailTitle" class="text-base font-extrabold text-slate-900 leading-snug"></h4>
            </div>
        </div>
        <p id="detailDate" class="text-xs font-bold text-slate-500 mb-3 flex items-center gap-1"></p>
        <div class="border-t border-slate-100 pt-3">
            <p id="detailDesc" class="text-sm text-slate-600 leading-relaxed"></p>
        </div>
        <div class="mt-6 pt-3 border-t border-slate-100 flex justify-end">
            <button onclick="closeDetailModal()" class="bg-slate-900 hover:bg-emerald-600 text-white text-xs font-bold px-5 py-2.5 rounded-xl transition-all shadow-md active:scale-95">
                Tutup
            </button>
        </div>
    </div>
</div>

<style>
    /* ANIMASI OBSERVER */
    .pengumuman-header {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .pengumuman-header.show {
        opacity: 1;
        transform: translateY(0);
    }

    .pengumuman-card {
        opacity: 0;
        transform: translateY(32px);
    }

    .pengumuman-card.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    // INTERSECTION OBSERVER UNTUK ANIMASI SCROLL
    const pengumumanHeader = document.querySelector('.pengumuman-header');
    const pengumumanCards = document.querySelectorAll('.pengumuman-card');

    const pengumumanObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, {
        threshold: 0.1
    });

    if (pengumumanHeader) pengumumanObserver.observe(pengumumanHeader);

    pengumumanCards.forEach((card, index) => {
        card.style.transition = `opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1) ${index * 0.15}s, transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) ${index * 0.15}s, box-shadow 0.3s ease, border-color 0.3s ease`;
        pengumumanObserver.observe(card);
    });

    // KONTROL MODAL KALENDER & DETAIL
    const calendarModal = document.getElementById('calendarModal');
    const calendarContent = document.getElementById('calendarContent');
    const detailModal = document.getElementById('detailModal');
    const detailContent = document.getElementById('detailContent');

    function openCalendarModal() {
        calendarModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        setTimeout(() => {
            calendarModal.classList.remove('opacity-0');
            calendarContent.classList.remove('scale-95');
            calendarContent.classList.add('scale-100');
        }, 10);
    }

    function closeCalendarModal() {
        calendarModal.classList.add('opacity-0');
        calendarContent.classList.remove('scale-100');
        calendarContent.classList.add('scale-95');
        setTimeout(() => {
            calendarModal.classList.add('hidden');
            if (detailModal.classList.contains('hidden')) {
                document.body.classList.remove('overflow-hidden');
            }
        }, 300);
    }

    function openDetailModal(title, date, icon, category, desc) {
        document.getElementById('detailTitle').innerText = title;
        document.getElementById('detailDate').innerText = '📅 ' + date;
        document.getElementById('detailIcon').innerText = icon;
        document.getElementById('detailCategory').innerText = category;
        document.getElementById('detailDesc').innerText = desc;

        detailModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        setTimeout(() => {
            detailModal.classList.remove('opacity-0');
            detailContent.classList.remove('scale-95');
            detailContent.classList.add('scale-100');
        }, 10);
    }

    function closeDetailModal() {
        detailModal.classList.add('opacity-0');
        detailContent.classList.remove('scale-100');
        detailContent.classList.add('scale-95');
        setTimeout(() => {
            detailModal.classList.add('hidden');
            if (calendarModal.classList.contains('hidden')) {
                document.body.classList.remove('overflow-hidden');
            }
        }, 300);
    }

    // EVENT LISTENERS UNTUK TUTUP MODAL
    calendarModal.addEventListener('click', (e) => {
        if (e.target === calendarModal) closeCalendarModal();
    });
    detailModal.addEventListener('click', (e) => {
        if (e.target === detailModal) closeDetailModal();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (!detailModal.classList.contains('hidden')) closeDetailModal();
            else if (!calendarModal.classList.contains('hidden')) closeCalendarModal();
        }
    });
</script>