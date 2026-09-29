<section id="kegiatan" class="relative py-16 md:py-24 bg-slate-50 overflow-hidden">
    <!-- Ambient Background Blobs -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-emerald-200/50 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-teal-200/40 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-5 lg:px-8">
        <!-- Header Section -->
        <div class="agenda-header flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
            <div>
                <span class="inline-flex items-center gap-1.5 bg-gradient-to-r from-emerald-500/10 to-teal-500/10 border border-emerald-500/20 text-emerald-800 px-4 py-1.5 rounded-full text-xs font-semibold mb-3 shadow-sm backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Agenda RT 27
                </span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Agenda Kegiatan Warga
                </h2>
                <p class="text-sm md:text-base text-slate-600 mt-3 max-w-xl leading-relaxed">
                    Pantau jadwal kegiatannya dan jangan lewatkan momen kebersamaan di lingkungan RT 27.
                </p>
            </div>

            <button onclick="bukaKalender()" class="group relative inline-flex items-center gap-2.5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white px-6 py-3 rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-emerald-500/25 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>Lihat Kalender Interaktif</span>
                <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </button>
        </div>

        <!-- LIST AGENDA CARD -->
        <div class="grid grid-cols-1 gap-4 md:gap-5">
            <!-- KEGIATAN 1 -->
            <div class="agenda-card group bg-white/80 backdrop-blur-md rounded-2xl border border-slate-200/80 p-5 md:p-6 shadow-sm hover:shadow-xl hover:border-emerald-300 hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 shrink-0 bg-gradient-to-br from-emerald-50 to-emerald-100/80 border border-emerald-200 rounded-2xl flex flex-col items-center justify-center group-hover:scale-105 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-inner">
                        <span class="text-2xl md:text-3xl font-black group-hover:text-white text-emerald-800 leading-none">06</span>
                        <span class="text-[10px] font-bold group-hover:text-emerald-100 text-emerald-600 uppercase tracking-wider mt-1">SEP</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1.5 flex-wrap">
                            <span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-2.5 py-0.5 rounded-md">Sosial</span>
                            <span class="text-xs text-slate-400 font-medium">• 📍 Sepanjang Jlr. 23</span>
                        </div>
                        <h3 class="font-bold text-slate-900 text-lg md:text-xl group-hover:text-emerald-700 transition-colors">Kerja Bakti Lingkungan</h3>
                        <p class="text-xs md:text-sm text-slate-500 mt-1 line-clamp-1">Membersihkan selokan utama dan merapikan tanaman liar fasilitas umum.</p>
                        <div class="flex items-center gap-4 mt-3 text-xs font-semibold text-slate-600">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> 07.00 WITA</span>
                        </div>
                    </div>
                    <button onclick="bukaDetailKalender('2026-09-06')" class="self-end sm:self-center shrink-0 w-full sm:w-auto bg-slate-100 hover:bg-emerald-600 hover:text-white text-slate-700 px-5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Detail Agenda</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- KEGIATAN 2 -->
            <div class="agenda-card group bg-white/80 backdrop-blur-md rounded-2xl border border-slate-200/80 p-5 md:p-6 shadow-sm hover:shadow-xl hover:border-blue-300 hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 shrink-0 bg-gradient-to-br from-blue-50 to-blue-100/80 border border-blue-200 rounded-2xl flex flex-col items-center justify-center group-hover:scale-105 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-inner">
                        <span class="text-2xl md:text-3xl font-black group-hover:text-white text-blue-800 leading-none">12</span>
                        <span class="text-[10px] font-bold group-hover:text-blue-100 text-blue-600 uppercase tracking-wider mt-1">SEP</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1.5 flex-wrap">
                            <span class="bg-blue-100 text-blue-800 text-[11px] font-bold px-2.5 py-0.5 rounded-md">Pemerintahan</span>
                            <span class="text-xs text-slate-400 font-medium">• 📍 Balai RT 27</span>
                        </div>
                        <h3 class="font-bold text-slate-900 text-lg md:text-xl group-hover:text-blue-700 transition-colors">Rapat Bulanan Warga</h3>
                        <p class="text-xs md:text-sm text-slate-500 mt-1 line-clamp-1">Membahas evaluasi kas RT, keamanan poskamling, dan perencanaan dana usaha.</p>
                        <div class="flex items-center gap-4 mt-3 text-xs font-semibold text-slate-600">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> 19.30 WITA</span>
                        </div>
                    </div>
                    <button onclick="bukaDetailKalender('2026-09-12')" class="self-end sm:self-center shrink-0 w-full sm:w-auto bg-slate-100 hover:bg-blue-600 hover:text-white text-slate-700 px-5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Detail Agenda</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- KEGIATAN 3 -->
            <div class="agenda-card group bg-white/80 backdrop-blur-md rounded-2xl border border-slate-200/80 p-5 md:p-6 shadow-sm hover:shadow-xl hover:border-amber-300 hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 shrink-0 bg-gradient-to-br from-amber-50 to-amber-100/80 border border-amber-200 rounded-2xl flex flex-col items-center justify-center group-hover:scale-105 group-hover:bg-amber-500 group-hover:text-white transition-all duration-300 shadow-inner">
                        <span class="text-2xl md:text-3xl font-black group-hover:text-white text-amber-800 leading-none">17</span>
                        <span class="text-[10px] font-bold group-hover:text-amber-100 text-amber-600 uppercase tracking-wider mt-1">SEP</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1.5 flex-wrap">
                            <span class="bg-amber-100 text-amber-800 text-[11px] font-bold px-2.5 py-0.5 rounded-md">Kesehatan</span>
                            <span class="text-xs text-slate-400 font-medium">• 📍 Posyandu Handil</span>
                        </div>
                        <h3 class="font-bold text-slate-900 text-lg md:text-xl group-hover:text-amber-700 transition-colors">Posyandu Balita & Lansia</h3>
                        <p class="text-xs md:text-sm text-slate-500 mt-1 line-clamp-1">Pemeriksaan tumbuh kembang anak, penimbangan, serta pemberian vitamin imunisasi.</p>
                        <div class="flex items-center gap-4 mt-3 text-xs font-semibold text-slate-600">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> 08.00 WITA</span>
                        </div>
                    </div>
                    <button onclick="bukaDetailKalender('2026-09-17')" class="self-end sm:self-center shrink-0 w-full sm:w-auto bg-slate-100 hover:bg-amber-500 hover:text-white text-slate-700 px-5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Detail Agenda</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- KEGIATAN 4 -->
            <div class="agenda-card group bg-white/80 backdrop-blur-md rounded-2xl border border-slate-200/80 p-5 md:p-6 shadow-sm hover:shadow-xl hover:border-purple-300 hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 shrink-0 bg-gradient-to-br from-purple-50 to-purple-100/80 border border-purple-200 rounded-2xl flex flex-col items-center justify-center group-hover:scale-105 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300 shadow-inner">
                        <span class="text-2xl md:text-3xl font-black group-hover:text-white text-purple-800 leading-none">25</span>
                        <span class="text-[10px] font-bold group-hover:text-purple-100 text-purple-600 uppercase tracking-wider mt-1">SEP</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1.5 flex-wrap">
                            <span class="bg-purple-100 text-purple-800 text-[11px] font-bold px-2.5 py-0.5 rounded-md">Olahraga</span>
                            <span class="text-xs text-slate-400 font-medium">• 📍 Lapangan RT 27</span>
                        </div>
                        <h3 class="font-bold text-slate-900 text-lg md:text-xl group-hover:text-purple-700 transition-colors">Senam Sehat Sehat Bersama</h3>
                        <p class="text-xs md:text-sm text-slate-500 mt-1 line-clamp-1">Senam erobik bersama instruktur profesional dilanjutkan sarapan sehat bersama warga.</p>
                        <div class="flex items-center gap-4 mt-3 text-xs font-semibold text-slate-600">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> 06.30 WITA</span>
                        </div>
                    </div>
                    <button onclick="bukaDetailKalender('2026-09-25')" class="self-end sm:self-center shrink-0 w-full sm:w-auto bg-slate-100 hover:bg-purple-600 hover:text-white text-slate-700 px-5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Detail Agenda</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN MODAL KALENDER -->
    <div id="kalender" class="hidden fixed inset-0 bg-slate-900/60 backdrop-blur-md z-[100] items-center justify-center p-3 sm:p-4">
        <div class="bg-white w-full max-w-4xl rounded-3xl shadow-2xl overflow-hidden max-h-[92vh] flex flex-col border border-slate-100 animate-in fade-in zoom-in-95 duration-200">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-slate-900 via-emerald-950 to-slate-900 text-white px-6 py-5 flex justify-between items-center shrink-0">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400 font-bold">📅</div>
                    <div>
                        <h2 class="text-lg md:text-xl font-extrabold tracking-wide">Kalender Warga RT 27</h2>
                        <p class="text-emerald-400 text-xs font-medium">Jadwal agenda & kegiatan lingkungan</p>
                    </div>
                </div>
                <button onclick="tutupKalender()" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 text-white/80 hover:text-white transition flex items-center justify-center text-xl font-bold">
                    &times;
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-5 md:p-6 overflow-y-auto flex-1">
                <!-- Dropdown & Controls Navigation -->
                <div class="flex items-center justify-between mb-6 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                    <button onclick="bulanSebelumnya()" class="w-10 h-10 rounded-xl bg-white text-slate-700 hover:bg-emerald-600 hover:text-white shadow-sm border border-slate-200/80 transition flex items-center justify-center font-bold">
                        ←
                    </button>

                    <div class="flex flex-col items-center gap-1">
                        <div class="flex items-center gap-2">
                            <select id="selectBulan" onchange="ubahBulanTahunDirect()" class="bg-white border border-slate-200 text-slate-800 font-bold text-sm md:text-base rounded-xl px-3 py-1.5 focus:ring-2 focus:ring-emerald-500 focus:outline-none cursor-pointer shadow-sm">
                                <option value="0">Januari</option>
                                <option value="1">Februari</option>
                                <option value="2">Maret</option>
                                <option value="3">April</option>
                                <option value="4">Mei</option>
                                <option value="5">Juni</option>
                                <option value="6">Juli</option>
                                <option value="7">Agustus</option>
                                <option value="8">September</option>
                                <option value="9">Oktober</option>
                                <option value="10">November</option>
                                <option value="11">Desember</option>
                            </select>

                            <select id="selectTahun" onchange="ubahBulanTahunDirect()" class="bg-white border border-slate-200 text-slate-800 font-bold text-sm md:text-base rounded-xl px-3 py-1.5 focus:ring-2 focus:ring-emerald-500 focus:outline-none cursor-pointer shadow-sm">
                            </select>
                        </div>

                        <button onclick="kembaliKeHariIni()" class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold hover:underline">
                            • Kembali ke Hari Ini
                        </button>
                    </div>

                    <button onclick="bulanBerikutnya()" class="w-10 h-10 rounded-xl bg-white text-slate-700 hover:bg-emerald-600 hover:text-white shadow-sm border border-slate-200/80 transition flex items-center justify-center font-bold">
                        →
                    </button>
                </div>

                <!-- Calendar Week Days Header -->
                <div class="grid grid-cols-7 text-center text-xs font-black uppercase tracking-wider mb-2 text-slate-400">
                    <div class="py-2">Sen</div>
                    <div class="py-2">Sel</div>
                    <div class="py-2">Rab</div>
                    <div class="py-2">Kam</div>
                    <div class="py-2">Jum</div>
                    <div class="py-2">Sab</div>
                    <div class="py-2 text-rose-500">Min</div>
                </div>

                <!-- Grid Tanggal -->
                <div id="hariKalender" class="grid grid-cols-7 gap-1.5 md:gap-2"></div>

                <!-- Daftar Kegiatan Bulan Ini -->
                <div class="mt-8 pt-6 border-t border-slate-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-extrabold text-slate-900 text-base">Agenda Bulan Ini</h3>
                        <span class="text-xs bg-slate-100 text-slate-600 px-2.5 py-1 rounded-full font-bold">RT 27 Info</span>
                    </div>
                    <div id="daftarKegiatan" class="grid grid-cols-1 md:grid-cols-2 gap-3"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- CUSTOM POPUP MODAL DETAIL KEGIATAN -->
    <div id="modalDetail" class="hidden fixed inset-0 bg-slate-950/70 backdrop-blur-sm z-[110] items-center justify-center p-4">
        <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl overflow-hidden border border-slate-100 animate-in fade-in zoom-in-95 duration-200">
            <div id="detailHeaderBg" class="p-6 bg-gradient-to-br from-emerald-600 to-teal-700 text-white relative">
                <button onclick="tutupDetailModal()" class="absolute top-4 right-4 w-8 h-8 rounded-full bg-black/20 hover:bg-black/30 text-white flex items-center justify-center text-lg">
                    &times;
                </button>
                <span id="detailKategori" class="inline-block bg-white/20 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full mb-3 uppercase tracking-wider">
                    Kategori
                </span>
                <h3 id="detailNama" class="text-xl font-black leading-snug">Nama Kegiatan</h3>
            </div>
            <div class="p-6 space-y-4">
                <div class="flex items-start gap-3 text-slate-600 text-sm">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center shrink-0">🕒</div>
                    <div>
                        <p class="text-xs text-slate-400 font-semibold">WAKTU</p>
                        <p id="detailWaktu" class="font-bold text-slate-800">00.00 WITA</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 text-slate-600 text-sm">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center shrink-0">📍</div>
                    <div>
                        <p class="text-xs text-slate-400 font-semibold">LOKASI</p>
                        <p id="detailTempat" class="font-bold text-slate-800">Lokasi Kegiatan</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 text-slate-600 text-sm">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center shrink-0">📝</div>
                    <div>
                        <p class="text-xs text-slate-400 font-semibold">KETERANGAN</p>
                        <p id="detailKet" class="text-slate-600 leading-relaxed text-xs mt-0.5">Deskripsi detail mengenai agenda warga.</p>
                    </div>
                </div>
                <div class="pt-3 border-t flex gap-2">
                    <button onclick="tutupDetailModal()" class="w-full bg-slate-100 hover:bg-slate-200 text-slate-700 py-2.5 rounded-xl font-bold text-xs transition">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .agenda-header,
    .agenda-card {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .agenda-header.show,
    .agenda-card.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    const kegiatanRT = {
        "2026-09-06": {
            nama: "Kerja Bakti Lingkungan",
            jam: "07.00 WITA",
            tempat: "Sepanjang Jlr. 23",
            kategori: "Sosial",
            badgeBg: "bg-emerald-100 text-emerald-800",
            dotBg: "bg-emerald-500",
            ket: "Membersihkan selokan utama dan merapikan tanaman liar fasilitas umum. Harap membawa cangkul & sapu lidi masing-masing."
        },
        "2026-09-12": {
            nama: "Rapat Warga RT 27",
            jam: "19.30 WITA",
            tempat: "Balai RT 27",
            kategori: "Pemerintahan",
            badgeBg: "bg-blue-100 text-blue-800",
            dotBg: "bg-blue-500",
            ket: "Membahas evaluasi kas RT, keamanan poskamling, dan persiapan menyambut lomba kebersihan antar RT."
        },
        "2026-09-17": {
            nama: "Posyandu Balita & Lansia",
            jam: "08.00 WITA",
            tempat: "Posyandu Handil",
            kategori: "Kesehatan",
            badgeBg: "bg-amber-100 text-amber-800",
            dotBg: "bg-amber-500",
            ket: "Pemeriksaan kesehatan rutin, penimbangan balita, pembagian Makanan Pendamping ASI (MPASI), dan vitamin lansia."
        },
        "2026-09-25": {
            nama: "Olahraga Bersama Warga",
            jam: "06.30 WITA",
            tempat: "Lapangan RT 27",
            kategori: "Olahraga",
            badgeBg: "bg-purple-100 text-purple-800",
            dotBg: "bg-purple-500",
            ket: "Senam erobik bersama instruktur, disediakan dorprise menarik dan sarapan bubur kacang hijau gratis."
        }
    };

    let tanggalKalender = new Date();

    function formatTanggal(tahun, bulan, hari) {
        return `${tahun}-${String(bulan + 1).padStart(2, "0")}-${String(hari).padStart(2, "0")}`;
    }

    function isiOptionTahun(tahunSaatIni) {
        const selectTahun = document.getElementById("selectTahun");
        if (!selectTahun) return;

        selectTahun.innerHTML = "";
        const tahunSekarang = new Date().getFullYear();
        const minTahun = tahunSekarang - 3;
        const maxTahun = tahunSekarang + 3;

        for (let t = minTahun; t <= maxTahun; t++) {
            const option = document.createElement("option");
            option.value = t;
            option.textContent = t;
            if (t === tahunSaatIni) option.selected = true;
            selectTahun.appendChild(option);
        }
    }

    function ubahBulanTahunDirect() {
        const bulanDipilih = parseInt(document.getElementById("selectBulan").value);
        const tahunDipilih = parseInt(document.getElementById("selectTahun").value);

        tanggalKalender.setDate(1);
        tanggalKalender.setFullYear(tahunDipilih);
        tanggalKalender.setMonth(bulanDipilih);

        tampilkanKalender();
    }

    function tampilkanKalender(fokusTanggal = null) {
        const tahun = tanggalKalender.getFullYear();
        const bulan = tanggalKalender.getMonth();

        const selectBulan = document.getElementById("selectBulan");
        const selectTahun = document.getElementById("selectTahun");

        if (selectBulan) selectBulan.value = bulan;

        if (selectTahun) {
            if (selectTahun.children.length === 0) {
                isiOptionTahun(tahun);
            } else {
                selectTahun.value = tahun;
            }
        }

        const kalender = document.getElementById("hariKalender");
        kalender.innerHTML = "";

        const hariPertama = new Date(tahun, bulan, 1).getDay();
        const jumlahHari = new Date(tahun, bulan + 1, 0).getDate();
        const posisiAwal = hariPertama === 0 ? 6 : hariPertama - 1;

        for (let i = 0; i < posisiAwal; i++) {
            kalender.innerHTML += `<div class="min-h-[68px] md:min-h-[88px] bg-slate-50/50 rounded-2xl border border-dashed border-slate-100"></div>`;
        }

        const sekarang = new Date();

        for (let hari = 1; hari <= jumlahHari; hari++) {
            const key = formatTanggal(tahun, bulan, hari);
            const kegiatan = kegiatanRT[key];

            const hariIni =
                hari === sekarang.getDate() &&
                bulan === sekarang.getMonth() &&
                tahun === sekarang.getFullYear();

            const sedangDipilih = key === fokusTanggal;
            const nomorHari = new Date(tahun, bulan, hari).getDay();
            const minggu = nomorHari === 0;

            kalender.innerHTML += `
        <div
          id="tanggal-${key}"
          class="group relative min-h-[68px] md:min-h-[88px] rounded-2xl border p-2 transition-all duration-300 flex flex-col justify-between
          ${hariIni ? "bg-emerald-500/10 border-emerald-500 shadow-sm" : "bg-white border-slate-100 hover:border-slate-300"}
          ${sedangDipilih ? "ring-4 ring-emerald-400/30 bg-emerald-50 border-emerald-500 scale-[1.02]" : ""}
          ${kegiatan ? "cursor-pointer hover:shadow-md hover:-translate-y-0.5" : ""}"
          ${kegiatan ? `onclick="tampilkanDetail('${key}')"` : ""}
        >
          <div class="flex justify-between items-start">
            <span class="${
              hariIni
                ? "bg-emerald-600 text-white w-7 h-7 flex items-center justify-center rounded-xl font-black shadow-sm"
                : minggu
                ? "text-rose-500 font-bold"
                : "text-slate-700 font-bold"
            } text-xs md:text-sm">
              ${hari}
            </span>
            ${kegiatan ? `<span class="w-2.5 h-2.5 rounded-full ${kegiatan.dotBg || 'bg-emerald-500'} animate-ping"></span>` : ""}
          </div>

          ${
            kegiatan
              ? `
                <div class="mt-1">
                  <span class="hidden md:block text-[10px] font-bold px-2 py-0.5 rounded-md leading-tight truncate ${kegiatan.badgeBg || 'bg-emerald-100 text-emerald-800'}">
                    ${kegiatan.nama}
                  </span>
                  <span class="md:hidden text-[9px] font-black text-emerald-700 bg-emerald-100 px-1.5 py-0.5 rounded">
                    Ada Agenda
                  </span>
                </div>
              `
              : ""
          }
        </div>
      `;
        }

        tampilkanKegiatan(tahun, bulan);

        if (fokusTanggal) {
            setTimeout(() => {
                const elementTanggal = document.getElementById(`tanggal-${fokusTanggal}`);
                if (elementTanggal) {
                    elementTanggal.scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });
                }
            }, 100);
        }
    }

    function tampilkanKegiatan(tahun, bulan) {
        const daftar = document.getElementById("daftarKegiatan");
        daftar.innerHTML = "";

        const dataBulan = Object.entries(kegiatanRT).filter(([key]) => {
            const [th, bl] = key.split("-").map(Number);
            return th === tahun && bl - 1 === bulan;
        });

        if (!dataBulan.length) {
            daftar.innerHTML = `
                <div class="col-span-full py-8 text-center bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                    <p class="text-xs text-slate-400 font-medium">Belum ada agenda kegiatan warga di bulan ini.</p>
                </div>
            `;
            return;
        }

        dataBulan.sort(([a], [b]) => a.localeCompare(b));

        dataBulan.forEach(([key, item]) => {
            const hari = Number(key.split("-")[2]);

            daftar.innerHTML += `
        <button
          onclick="tampilkanDetail('${key}')"
          class="w-full flex items-center gap-3.5 text-left bg-slate-50 hover:bg-emerald-50/60 border border-slate-100 hover:border-emerald-200 rounded-2xl p-3.5 transition group">
          <div class="w-12 h-12 shrink-0 rounded-xl bg-white border border-slate-200 group-hover:border-emerald-400 text-slate-800 group-hover:text-emerald-700 flex flex-col items-center justify-center shadow-sm transition">
            <span class="font-black text-base leading-none">${hari}</span>
            <span class="text-[9px] font-bold uppercase text-slate-400 mt-0.5">Tgl</span>
          </div>
          <div class="min-w-0 flex-1">
            <div class="flex items-center gap-2 mb-0.5">
                <span class="text-[9px] font-bold px-2 py-0.2 rounded ${item.badgeBg || 'bg-slate-200 text-slate-700'}">${item.kategori || 'Kegiatan'}</span>
            </div>
            <p class="font-bold text-slate-800 text-sm truncate group-hover:text-emerald-800 transition">${item.nama}</p>
            <p class="text-xs text-slate-500 mt-0.5">🕐 ${item.jam} • 📍 ${item.tempat}</p>
          </div>
        </button>
      `;
        });
    }

    function tampilkanDetail(key) {
        const item = kegiatanRT[key];
        if (!item) return;

        document.getElementById("detailNama").innerText = item.nama;
        document.getElementById("detailWaktu").innerText = item.jam;
        document.getElementById("detailTempat").innerText = item.tempat;
        document.getElementById("detailKet").innerText = item.ket;
        document.getElementById("detailKategori").innerText = item.kategori || "Agenda";

        const modal = document.getElementById("modalDetail");
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    }

    function tutupDetailModal() {
        const modal = document.getElementById("modalDetail");
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }

    function bukaDetailKalender(key) {
        const [tahun, bulan, hari] = key.split("-").map(Number);
        tanggalKalender = new Date(tahun, bulan - 1, hari);

        const kalender = document.getElementById("kalender");
        kalender.classList.remove("hidden");
        kalender.classList.add("flex");

        tampilkanKalender(key);
    }

    function bulanSebelumnya() {
        tanggalKalender.setDate(1);
        tanggalKalender.setMonth(tanggalKalender.getMonth() - 1);
        tampilkanKalender();
    }

    function bulanBerikutnya() {
        tanggalKalender.setDate(1);
        tanggalKalender.setMonth(tanggalKalender.getMonth() + 1);
        tampilkanKalender();
    }

    function kembaliKeHariIni() {
        tanggalKalender = new Date();
        tampilkanKalender();
    }

    function bukaKalender() {
        const kalender = document.getElementById("kalender");
        kalender.classList.remove("hidden");
        kalender.classList.add("flex");
        tampilkanKalender();
    }

    function tutupKalender() {
        const kalender = document.getElementById("kalender");
        kalender.classList.add("hidden");
        kalender.classList.remove("flex");
    }

    // Event Listeners Modal
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            tutupKalender();
            tutupDetailModal();
        }
    });

    const modalKalender = document.getElementById("kalender");
    if (modalKalender) {
        modalKalender.addEventListener("click", function(event) {
            if (event.target === this) tutupKalender();
        });
    }

    const modalDetail = document.getElementById("modalDetail");
    if (modalDetail) {
        modalDetail.addEventListener("click", function(event) {
            if (event.target === this) tutupDetailModal();
        });
    }

    // Intersection Observer Animation
    const agendaHeader = document.querySelector(".agenda-header");
    const agendaCards = document.querySelectorAll(".agenda-card");

    const agendaObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, {
            threshold: 0.1
        }
    );

    if (agendaHeader) agendaObserver.observe(agendaHeader);

    agendaCards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.12}s`;
        agendaObserver.observe(card);
    });
</script>