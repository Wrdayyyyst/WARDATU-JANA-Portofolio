<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wardatul Jana | Portofolio</title>

    <!-- FAVICON LOGO WWRDA -->
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="apple-touch-icon" href="logo.png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap');
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
            color: #0f172a;
            overflow-x: hidden;
            min-height: 100vh;
        }

        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }

        /* Glassmorphism Styles Light Slate */
        .glasscard {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
        }

        .liquid-border-container {
    position: relative;
    width: 88px;
    height: 88px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    padding: 3px; /* Ketebalan border liquid */
}

/* Lapisan Cahaya Cairan yang Berputar */
.liquid-border-container::before {
    content: '';
    position: absolute;
    width: 150px;
    height: 150px;
    background: conic-gradient(
        from 0deg, 
        transparent 0%, 
        transparent 40%, 
        #0284c7 60%, 
        #38bdf8 80%, 
        #818cf8 95%, 
        transparent 100%
    );
    animation: rotate-liquid 2.5s linear infinite;
}

/* Efek Glow Luar Cairan */
.liquid-border-container::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(2, 132, 199, 0.6), inset 0 0 10px rgba(56, 189, 248, 0.4);
    pointer-events: none;
}

@keyframes rotate-liquid {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

        .glasscard-interactive {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), border-color 0.4s ease, box-shadow 0.4s ease;
        }

        .glasscard-interactive:hover {
            border-color: rgba(2, 132, 199, 0.4);
            box-shadow: 0 15px 35px -5px rgba(2, 132, 199, 0.15);
            transform: translateY(-4px);
        }

        /* EFEK SCROLL KELUAR-MASUK (FADE & SLIDE REVEAL DUA ARAH) */
        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Preloader Animation */
        #preloader {
            position: fixed;
            inset: 0;
            background: #f8fafc;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: opacity 0.6s ease, visibility 0.6s ease;
        }
        .loader-ring {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 2px solid rgba(2, 132, 199, 0.15);
            border-top-color: #0284c7;
            animation: spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
            box-shadow: 0 0 25px rgba(2, 132, 199, 0.25);
        }
        .loader-inner-ring {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            border: 2px dashed rgba(99, 102, 241, 0.4);
            animation: spin-reverse 2s linear infinite;
        }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        @keyframes spin-reverse { 0% { transform: rotate(360deg); } 100% { transform: rotate(0deg); } }

        /* TYPING CURSOR ANIMATION */
        .typing-cursor::after {
            content: '|';
            animation: blink 0.8s infinite;
            color: #0284c7;
            font-weight: 700;
        }
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

        .text-glow {
            text-shadow: 0 0 25px rgba(2, 132, 199, 0.25);
        }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #0284c7; }
    </style>
</head>
<body class="antialiased selection:bg-sky-500 selection:text-white pl-0 lg:pl-28">

    <!-- CANVAS ANIMASI BACKGROUND JARING-JARING DAN GARIS BERGERAK -->
    <canvas id="mesh-bg" class="fixed inset-0 w-full h-full pointer-events-none z-0"></canvas>

    <!-- PRELOADER FOTO PROFIL -->
    <div id="preloader">
    <div class="relative flex items-center justify-center mb-6">
        <!-- Container Border Liquid -->
        <div class="liquid-border-container shadow-[0_0_35px_rgba(2,132,199,0.5)]">
            <!-- Tempat Foto (Diberi bg-white & z-index agar menutupi tengahnya) -->
            <div class="w-full h-full rounded-full overflow-hidden z-10 bg-white relative">
                <img src="hirnoo.jpg" alt="Wardatul Jana" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
    <span class="text-xs font-mono tracking-[0.25em] text-sky-600 uppercase font-semibold animate-pulse">Sedang membuka ...</span>
</div>

<!-- SIDEBAR MELAYANG KIRI (ICONS GRADIENT BLUE) -->
    <aside 
        class="fixed left-6 top-1/2 -translate-y-1/2 z-50 hidden lg:flex flex-col items-center gap-8 py-8 px-4 rounded-[15px] shadow-[0_20px_40px_rgba(37,99,235,0.15)] border border-blue-200/30"

        style="background: linear-gradient(135deg, rgba(37, 99, 235, 0.25) 0%, rgba(79, 70, 229, 0.2) 50%, rgba(255, 255, 255, 0.15) 100%) !important; -webkit-backdrop-filter: blur(24px) saturate(180%); backdrop-filter: blur(24px) saturate(180%);"
    >
        <div class="flex flex-col gap-6 text-base">
            <a href="#about" title="Beranda" class="p-2.5 rounded-xl hover:bg-white/15 transition-all flex items-center justify-center">
                <i class="fas fa-home bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent"></i>
            </a>
            <a href="#about-me" title="Tentang Saya" class="p-2.5 rounded-xl hover:bg-white/15 transition-all flex items-center justify-center">
                <i class="fas fa-user bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent"></i>
            </a>
            <a href="#skills" title="Keahlian" class="p-2.5 rounded-xl hover:bg-white/15 transition-all flex items-center justify-center">
                <i class="fas fa-code bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent"></i>
            </a>
            <a href="#projects" title="Portofolio" class="p-2.5 rounded-xl hover:bg-white/15 transition-all flex items-center justify-center">
                <i class="fas fa-briefcase bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent"></i>
            </a>
            <a href="#contact" title="Kontak" class="p-2.5 rounded-xl hover:bg-white/15 transition-all flex items-center justify-center">
                <i class="fas fa-envelope bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent"></i>
            </a>
        </div>

        <a href="https://wa.me/6282341502007?text=Halo%20Wardatul%20Jana," target="_blank" title="WhatsApp Direct" class="w-10 h-10 rounded-2xl bg-emerald-600 hover:bg-emerald-500 text-white flex items-center justify-center transition-all shadow-md hover:scale-105">
            <i class="fab fa-whatsapp text-lg"></i>
        </a>
    </aside>

    <!-- NAVIGATION MOBILE -->
    <div class="fixed top-4 left-4 right-4 z-50 lg:hidden">
        <nav class="h-14 rounded-2xl bg-white/85 backdrop-blur-md border border-white/80 shadow-md px-4 flex items-center justify-between">
            <span class="font-bold text-slate-900 text-xs">WWRDA</span>
            <div class="flex gap-3 text-xs font-mono font-semibold text-slate-600">
                <a href="#about">Beranda</a>
                <a href="#about-me">Profil</a>
                <a href="#projects">Proyek</a>
                <a href="#contact">Kontak</a>
            </div>
        </nav>
    </div>

    <!-- HERO SECTION (TULISAN ANIMASI DI TENGAH) -->
    <section id="about" class="relative min-h-screen py-28 flex items-center justify-center overflow-hidden">
        <div class="max-w-4xl mx-auto px-6 text-center space-y-8 z-10 reveal">
            
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 backdrop-blur-md border border-sky-500/20 text-sky-700 text-xs font-mono font-semibold shadow-sm">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-ping"></span>
                <span>Pengembangan Perangkat Lunak & Gim </span>
            </div>

            <div class="space-y-4">
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Halo, Saya <span class="bg-gradient-to-r from-sky-600 via-indigo-600 to-blue-600 bg-clip-text text-transparent">Wardatul Jana</span>
                </h1>
                
                <div class="text-xl sm:text-3xl font-mono font-semibold text-slate-700 h-12 flex items-center justify-center">
                    <span id="typing-text" class="typing-cursor text-glow"></span>
                </div>
            </div>

            <p class="text-sm sm:text-base text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto">
                Siswa <span class="font-semibold text-slate-800">Jurusan PPLG di MAKN Ende.</span> Berfokus dalam merancang antarmuka web modern yang cepat, fleksibel, serta memiliki nilai estetika dan struktur data yang rapi.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                <a href="https://canva.link/k6sbctnevstfmv7" class="px-8 py-4 rounded-2xl bg-gradient-to-r from-sky-600 to-indigo-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:shadow-sky-500/25 active:scale-95 transition-all">
                    Download CV
                </a>
                <a href="#projects" class="px-8 py-4 rounded-2xl bg-white hover:bg-slate-50 border border-slate-300 text-slate-800 font-bold text-xs uppercase tracking-wider transition-all shadow-sm">
                    Lihat Portofolio
                </a>
            </div>

        </div>
    </section>

    <!-- SECTION ABOUT ME (TENTANG SAYA DENGAN FOTO PROFIL) -->
    <section id="about-me" class="py-24 relative border-t border-slate-200/80">
        <div class="max-w-6xl mx-auto px-6">
            
            <div class="text-center max-w-xl mx-auto mb-16 space-y-3 reveal">
                <span class="text-xs font-mono text-sky-700 uppercase tracking-widest bg-sky-500/10 px-3 py-1 rounded-full border border-sky-500/20 font-semibold">
                    Kenalan Lebih Dekat
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Tentang Saya</h2>
                <p class="text-xs sm:text-sm text-slate-500 font-normal">Profil singkat, latar belakang pendidikan, dan perjalanan digital saya.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- SISI KIRI: FOTO PROFIL DALAM CARD KACA -->
               <div class="lg:col-span-5 reveal flex justify-center">
    <!-- KARTU KIRI: FOTO DI ATAS, TEKS NAMA & SOSMED DI BAWAHNYA -->
    <div class="glasscard p-4 rounded-3xl border border-white/90 shadow-xl max-w-sm w-full text-center space-y-4 group relative">
        
        <!-- 1. FOTO PROFIL DENGAN EFEK HOVER BLUR -> CLEAR -->
        <div class="relative w-full h-80 rounded-2xl overflow-hidden shadow-md bg-slate-200">
            <img src="fto.jpeg" alt="Wardatul Jana" 
                 class="w-full h-full object-cover blur-md group-hover:blur-none transition-all duration-500 ease-in-out scale-105 group-hover:scale-100">
            
            <!-- Overlay Petunjuk (Hilang saat kursor diarahkan) -->
            <div class="absolute inset-0 bg-black/20 flex flex-col items-center justify-center gap-2 text-white group-hover:opacity-0 transition-opacity duration-300 pointer-events-none">
                <i class="fas fa-eye text-2xl animate-bounce"></i>
                <span class="text-xs font-medium tracking-wide bg-slate-900/60 px-3 py-1 rounded-full backdrop-blur-sm">Arahkan kursor</span>
            </div>
        </div>

        <!-- 2. TEKS NAMA & SUBTEKS (TEPAT DI BAWAH FOTO) -->
        <div class="space-y-1">
            <h3 class="font-extrabold text-slate-900 text-base">Wardatul Jana</h3>
            <p class="text-xs font-mono text-sky-600 font-semibold">WWRDA • Siswa PPLG MAKN Ende</p>
        </div>

        <!-- 3. IKON SOSIAL MEDIA (DI BAWAH NAMA) -->
        <div class="pt-2 border-t border-slate-200/60 flex justify-center gap-4 text-slate-600 text-sm">
            <a href="https://github.com/Wrdayyyyst" target="_blank" class="hover:text-sky-600 transition-colors"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/wwrdtll__/" target="_blank" class="hover:text-sky-600 transition-colors"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/wardatul-jana-884a61441/" target="_blank" class="hover:text-sky-600 transition-colors"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://wa.me/6282341502007" target="_blank" class="hover:text-emerald-600 transition-colors"><i class="fab fa-whatsapp"></i></a>
        </div>

    </div>
</div>

                <!-- SISI KANAN: NARASI / BIOGRAFI LENGKAP -->
                <div class="lg:col-span-7 space-y-6 reveal">
                    <div class="glasscard p-8 rounded-3xl border-white/90 space-y-4">
                        <h3 class="text-xl font-extrabold text-slate-900">
                            Halo! Saya Wardatul Jana, Pengembang Web & Perancang UI/UX.
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                            Saya adalah seorang siswa yang menempuh pendidikan di <strong class="text-slate-800">MAKN Ende, Nusa Tenggara Timur</strong>, mengambil jurusan <strong class="text-slate-800">Pengembangan Perangkat Lunak dan Gim (PPLG)</strong>. 
                        </p>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
Saat ini, saya sedang aktif mendalami dasar-dasar pengembangan web dan desain UI/UX. Saya telah mempelajari pembuatan antarmuka di Figma serta alur logika dasar backend menggunakan PHP, Laravel, dan MySQL.
Sebagai pengembang muda yang terus belajar, saya menyadari masih banyak hal di dunia teknologi yang perlu saya eksplorasi. Saya sangat antusias untuk mendapatkan bimbingan, arahan, serta pengalaman baru dari para profesional di industri agar dapat terus mengasah keahlian dan berkembang menjadi developer yang lebih baik.</strong>
                        </p>
                        
                        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-200/80 text-xs font-mono">
                            <div>
                                <span class="text-slate-400 block">Lokasi:</span>
                                <span class="font-bold text-slate-800">Ende, NTT, Indonesia</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block">Status Studi:</span>
                                <span class="font-bold text-slate-800">Siswa PPLG MAKN Ende</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block">Email Utama:</span>
                                <span class="font-bold text-sky-600">wardatul995599@gmail.com</span>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SECTION CARA KERJA (WORKFLOW) -->
    <section id="workflow" class="py-20 relative border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-xl mx-auto mb-14 space-y-3 reveal">
                <span class="text-xs font-mono text-sky-700 uppercase tracking-widest bg-sky-500/10 px-3 py-1 rounded-full border border-sky-500/20 font-semibold">
                    Sistem Operasional
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Cara Kerja Saya</h2>
                <p class="text-xs text-slate-500 font-normal">Langkah terstruktur dari konsep ide hingga penerapan kode web fungsional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glasscard p-6 rounded-3xl space-y-3 border-white/80 relative group hover:border-sky-500/40 transition-all reveal">
                    <div class="w-10 h-10 rounded-xl bg-sky-500/10 text-sky-600 flex items-center justify-center font-mono font-bold border border-sky-500/20">01</div>
                    <h3 class="text-sm font-bold text-slate-900">Analisis & Riset</h3>
                    <p class="text-xs text-slate-500 leading-relaxed font-normal">Memahami kebutuhan sistem, spesifikasi pengguna, dan target fitur proyek secara mendalam.</p>
                </div>
                <div class="glasscard p-6 rounded-3xl space-y-3 border-white/80 relative group hover:border-sky-500/40 transition-all reveal">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center font-mono font-bold border border-indigo-500/20">02</div>
                    <h3 class="text-sm font-bold text-slate-900">Desain UI/UX (Figma)</h3>
                    <p class="text-xs text-slate-500 leading-relaxed font-normal">Merancang tata letak visual, wireframe, dan skema warna interaktif menggunakan Figma.</p>
                </div>
                <div class="glasscard p-6 rounded-3xl space-y-3 border-white/80 relative group hover:border-sky-500/40 transition-all reveal">
                    <div class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-600 flex items-center justify-center font-mono font-bold border border-blue-500/20">03</div>
                    <h3 class="text-sm font-bold text-slate-900">Development & Coding</h3>
                    <p class="text-xs text-slate-500 leading-relaxed font-normal">Implementasi frontend dengan Tailwind CSS & JavaScript serta backend menggunakan PHP / Laravel.</p>
                </div>
                <div class="glasscard p-6 rounded-3xl space-y-3 border-white/80 relative group hover:border-sky-500/40 transition-all reveal">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center font-mono font-bold border border-emerald-500/20">04</div>
                    <h3 class="text-sm font-bold text-slate-900">Testing & Deployment</h3>
                    <p class="text-xs text-slate-500 leading-relaxed font-normal">Pengujian performa, validasi form, dan peluncuran web agar siap diakses secara optimal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION KEAHLIAN & TOOLS -->
    <section id="skills" class="py-20 relative border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-xl mx-auto mb-14 space-y-3 reveal">
                <span class="text-xs font-mono text-sky-700 uppercase tracking-widest bg-sky-500/10 px-3 py-1 rounded-full border border-sky-500/20 font-semibold">
                    Keahlian & Teknologi
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Stack & Tools Utama</h2>
                <p class="text-xs text-slate-500 font-normal">Teknologi yang dikuasai untuk merancang dan membangun ekosistem digital.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
                <div class="glasscard p-5 rounded-2xl flex flex-col items-center gap-2.5 border-white/80 group hover:border-sky-500/40 transition-all reveal">
                    <i class="fab fa-figma text-2xl text-purple-600 group-hover:scale-110 transition-transform"></i>
                    <span class="text-xs font-bold text-slate-800">Figma UI/UX</span>
                </div>
                <div class="glasscard p-5 rounded-2xl flex flex-col items-center gap-2.5 border-white/80 group hover:border-sky-500/40 transition-all reveal">
                    <i class="fab fa-html5 text-2xl text-orange-500 group-hover:scale-110 transition-transform"></i>
                    <span class="text-xs font-bold text-slate-800">HTML5 & CSS3</span>
                </div>
                <div class="glasscard p-5 rounded-2xl flex flex-col items-center gap-2.5 border-white/80 group hover:border-sky-500/40 transition-all reveal">
                    <i class="fab fa-js text-2xl text-yellow-500 group-hover:scale-110 transition-transform"></i>
                    <span class="text-xs font-bold text-slate-800">JavaScript</span>
                </div>
                <div class="glasscard p-5 rounded-2xl flex flex-col items-center gap-2.5 border-white/80 group hover:border-sky-500/40 transition-all reveal">
                    <i class="fab fa-php text-2xl text-indigo-600 group-hover:scale-110 transition-transform"></i>
                    <span class="text-xs font-bold text-slate-800">PHP & Laravel</span>
                </div>
                <div class="glasscard p-5 rounded-2xl flex flex-col items-center gap-2.5 border-white/80 group hover:border-sky-500/40 transition-all reveal">
                    <i class="fas fa-database text-2xl text-sky-600 group-hover:scale-110 transition-transform"></i>
                    <span class="text-xs font-bold text-slate-800">MySQL Database</span>
                </div>
                <div class="glasscard p-5 rounded-2xl flex flex-col items-center gap-2.5 border-white/80 group hover:border-sky-500/40 transition-all reveal">
                    <i class="fab fa-wordpress text-2xl text-blue-600 group-hover:scale-110 transition-transform"></i>
                    <span class="text-xs font-bold text-slate-800">WordPress</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7 PROJECTS PORTFOLIO -->
    <section id="projects" class="py-24 relative border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3 reveal">
                <span class="text-xs font-mono text-sky-700 uppercase tracking-widest bg-sky-500/10 px-3 py-1 rounded-full border border-sky-500/20 font-semibold">
                    Koleksi Hasil Karya
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Portofolio Proyek Terpilih
                </h2>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- CARD 1: e-Kantin RSUD -->
<div class="glasscard rounded-3xl overflow-hidden glasscard-interactive flex flex-col group relative reveal">
    <div class="h-48 w-full bg-slate-100 flex items-center justify-center border-b border-slate-200/80 relative shrink-0 overflow-hidden">
        <img src="kantin.png" alt="e-Kantin" class="absolute inset-0 w-full h-full object-cover filter blur-sm brightness-90 group-hover:blur-0 group-hover:brightness-100 group-hover:scale-105 transition-all duration-500">
        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/0 transition-colors duration-500"></div>
        <span class="text-xs font-mono tracking-wider text-white font-semibold z-10 bg-slate-900/80 px-4 py-2 rounded-xl border border-white/20 shadow-lg group-hover:opacity-0 group-hover:scale-95 transition-all duration-300">
            🛒 Aplikasi e-Kantin
        </span>
    </div>
    <div class="p-6 space-y-4 flex-grow flex flex-col justify-between bg-white/70">
        <div>
            <h3 class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors mb-1.5">Sistem Layanan E-Kantin</h3>
            <p class="text-xs text-slate-500 font-normal leading-relaxed">Aplikasi manajemen kantin digital untuk transaksi pesanan makanan dan rekap pelaporan harian.</p>
        </div>
        <div class="space-y-3 pt-2">
            <div class="flex gap-2">
                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">PHP</span>
                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">MySQL</span>
                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">Tailwind</span>
                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">JavaScript</span>
            </div>
            <!-- Tombol Pemicu Modal -->
            <button onclick="openEKantinModal()" class="w-full py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white text-xs font-mono font-bold transition-all flex items-center justify-center gap-2 shadow-sm cursor-pointer">
                <i class="fas fa-external-link-alt text-[10px]"></i> Lihat Demo Proyek
            </button>
        </div>
    </div>
</div>

<!-- MODAL PILIHAN DEMO E-KANTIN -->
<div id="ekantinModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-slate-900/60 backdrop-blur-md p-4 transition-all duration-300">
    <div class="bg-white/90 backdrop-blur-xl border border-white/40 rounded-3xl p-6 sm:p-8 max-w-xl w-full shadow-2xl space-y-6 relative animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Header Modal -->
        <div class="flex justify-between items-start border-b border-slate-200/80 pb-4">
            <div>
                <h3 class="text-base font-bold text-slate-900 flex items-center gap-2">
                    <span>🛒</span> Pilih Moda Akses Demo e-Kantin
                </h3>
                <p class="text-xs text-slate-500 mt-1">Silakan pilih jenis antarmuka yang ingin Anda jelajahi:</p>
            </div>
            <button onclick="closeEKantinModal()" class="text-slate-400 hover:text-slate-700 p-1.5 rounded-xl hover:bg-slate-100 transition-colors">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <!-- 2 Card Pilihan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            
            <!-- Card 1: Halaman Katalog -->
            <a href="#about" target="_blank" rel="noopener noreferrer" class="group p-5 bg-white rounded-2xl border border-slate-200 hover:border-sky-500 hover:shadow-lg transition-all duration-300 flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-sky-500/10 text-sky-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-store text-base"></i>
                    </div>
                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Halaman Katalog</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">Akses halaman utama untuk pelanggan/pembeli memantau daftar menu dan transaksi kantin.</p>
                </div>
                <span class="text-[11px] font-mono font-semibold text-sky-600 flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                    Buka Katalog <i class="fas fa-arrow-right text-[9px]"></i>
                </span>
            </a>

            <!-- Card 2: Halaman Login (Admin, Pengurus, Pengelola) -->
            <a href="" target="_blank" rel="noopener noreferrer" class="group p-5 bg-white rounded-2xl border border-slate-200 hover:border-indigo-500 hover:shadow-lg transition-all duration-300 flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-user-shield text-base"></i>
                    </div>
                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-indigo-600 transition-colors">Login Management</h4>
                    <p class="text-[11px] text-slate-500 leading-relaxed">Akses halaman login sistem untuk peran Admin, Pengurus, dan Pengelola Kantin.</p>
                </div>
                <span class="text-[11px] font-mono font-semibold text-indigo-600 flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                    Halaman Login <i class="fas fa-arrow-right text-[9px]"></i>
                </span>
            </a>

        </div>

        <!-- Footer Modal Info -->
        <div class="text-[10px] text-slate-400 text-center font-mono pt-2 border-t border-slate-100">
            RSUD Ende • Software & Game Development
        </div>
    </div>
</div>

<!-- SCRIPT UNTUK BUKA/TUTUP MODAL -->
<script>
    function openEKantinModal() {
        document.getElementById('ekantinModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Cegah scroll saat modal terbuka
    }

    function closeEKantinModal() {
        document.getElementById('ekantinModal').classList.add('hidden');
        document.body.style.overflow = 'auto'; // Kembalikan scroll
    }

    // Tutup modal jika klik di luar area modal (backdrop)
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('ekantinModal');
        if (event.target === modal) {
            closeEKantinModal();
        }
    });
</script>

                <!-- CARD 2: Nuscine -->
                <div class="glasscard rounded-3xl overflow-hidden glasscard-interactive flex flex-col group relative reveal">
                    <div class="h-48 w-full bg-slate-100 flex items-center justify-center border-b border-slate-200/80 relative shrink-0 overflow-hidden">
                        <img src="biskop.png" alt="Nuscine" class="absolute inset-0 w-full h-full object-cover filter blur-sm brightness-90 group-hover:blur-0 group-hover:brightness-100 group-hover:scale-105 transition-all duration-500">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/0 transition-colors duration-500"></div>
                        <span class="text-xs font-mono tracking-wider text-white font-semibold z-10 bg-slate-900/80 px-4 py-2 rounded-xl border border-white/20 shadow-lg group-hover:opacity-0 group-hover:scale-95 transition-all duration-300">
                             Platform Nusacine
                        </span>
                    </div>
                    <div class="p-6 space-y-4 flex-grow flex flex-col justify-between bg-white/70">
                        <div>
                            <h3 class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors mb-1.5">Nusacine</h3>
                            <p class="text-xs text-slate-500 font-normal leading-relaxed">NusaCine adalah platform pemesanan tiket bioskop digital modern dengan alur transaksi yang praktis, cepat, dan interaktif.</p>
                        </div>
                        <div class="space-y-3 pt-2">
                            <div class="flex gap-2">
                                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">Laravel</span>
                                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">PHP</span>
                                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">Tailwind</span>
                                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">MySQL</span>
                            </div>
                            <a href=""  target="_blank" class="w-full py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white text-xs font-mono font-bold transition-all flex items-center justify-center gap-2 shadow-sm">
                                <i class="fas fa-external-link-alt text-[10px]"></i> Lihat Demo Proyek
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD 3: Wisata Alam -->
                <div class="glasscard rounded-3xl overflow-hidden glasscard-interactive flex flex-col group relative reveal">
                    <div class="h-48 w-full bg-slate-100 flex items-center justify-center border-b border-slate-200/80 relative shrink-0 overflow-hidden">
                        <img src="wedding.png" alt="Wisata" class="absolute inset-0 w-full h-full object-cover filter blur-sm brightness-90 group-hover:blur-0 group-hover:brightness-100 group-hover:scale-105 transition-all duration-500">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/0 transition-colors duration-500"></div>
                        <span class="text-xs font-mono tracking-wider text-white font-semibold z-10 bg-slate-900/80 px-4 py-2 rounded-xl border border-white/20 shadow-lg group-hover:opacity-0 group-hover:scale-95 transition-all duration-300">
                            WordPress : Undangan Pernikahan
                        </span>
                    </div>
                    <div class="p-6 space-y-4 flex-grow flex flex-col justify-between bg-white/70">
                        <div>
                            <h3 class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors mb-1.5">WordPress : Undangan Pernikahan</h3>
                            <p class="text-xs text-slate-500 font-normal leading-relaxed">Website undangan nikah digital berbasis WordPress sebagai proyek latihan untuk mengasah desain responsif, tata letak visual, integrasi formulir RSVP, dan user experience di bawah bimbingan.</p>
                        </div>
                        <div class="space-y-3 pt-2">
                            <div class="flex gap-2">
                                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">JavaScript</span>
                                <span class="text-[10px] font-mono px-2 py-0.5 bg-sky-500/10 text-sky-700 rounded-md border border-sky-500/20 font-semibold">WordPress</span>
                            </div>
                            <a href=""  target="_blank" class="w-full py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white text-xs font-mono font-bold transition-all flex items-center justify-center gap-2 shadow-sm">
                                <i class="fas fa-external-link-alt text-[10px]"></i> Lihat Demo Proyek
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- LINK INTERAKTIF DENGAN TEKS JELAS DAN SATURASI TINGGI -->
<div class="mt-14 flex justify-center w-full">
    <a href="https://github.com/Wrdayyyyst" target="_blank" rel="noopener noreferrer" 
       class="group relative inline-flex items-center gap-3 py-3 px-6 rounded-full text-sky-300 hover:text-sky-200 transition-all duration-300">
        
        <!-- Efek background blur tipis yang membesar saat di-hover -->
        <div class="absolute inset-0 bg-sky-500/15 rounded-full blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

        <!-- Teks dengan warna solid yang jelas dan tajam -->
        <span class="relative z-10 text-sm font-bold tracking-wide text-sky-300 animate-pulse group-hover:animate-none">
            Want to see more projects?
        </span>

        <!-- Panah dengan animasi geser -->
        <i class="fas fa-arrow-right relative z-10 text-xs text-sky-400 transform group-hover:translate-x-2 transition-transform duration-300"></i>

        <!-- Garis bawah bercahaya -->
        <div class="absolute bottom-1 left-1/2 -translate-x-1/2 w-1/3 h-[2px] bg-gradient-to-r from-transparent via-sky-400 to-transparent group-hover:w-4/5 transition-all duration-500"></div>
    </a>
</div>
    </section>

    <!-- SECTION KONTAK (WEB3FORMS AJAX + WHATSAPP DIRECT) -->
    <section id="contact" class="py-24 relative border-t border-slate-200/80">
        <div class="max-w-xl mx-auto px-6 reveal">
            
            <div class="text-center space-y-3 mb-10">
                <span class="text-xs font-mono text-sky-700 uppercase tracking-widest bg-sky-500/10 px-3 py-1 rounded-full border border-sky-500/20 font-semibold">
                    Formulir Kolaborasi
                </span>
                <h2 class="text-3xl font-bold text-slate-900">Hubungi Saya</h2>
                <p class="text-xs text-slate-500">Kirim pesan langsung ke email atau chat via WhatsApp.</p>
            </div>

            <!-- Form Web3Forms AJAX -->
            <form id="contact-form" class="glasscard p-8 rounded-3xl space-y-5 border-white/80">
                <input type="hidden" name="access_key" value="3e558154-33e2-481e-acff-bbe7e11f6472">
                <input type="hidden" name="subject" value="Pesan Kolaborasi Baru dari Portofolio WWRDA">
                <input type="hidden" name="from_name" value="Portofolio Wardatul Jana">

                <div class="space-y-1.5">
                    <label class="text-xs font-medium text-slate-700">Nama Lengkap</label>
                    <input type="text" name="name" required placeholder="Masukkan nama Anda..." class="w-full px-4 py-3 bg-white/80 border border-slate-300 rounded-xl text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 transition-all">
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-medium text-slate-700">Alamat Email</label>
                    <input type="email" name="email" required placeholder="nama@email.com" class="w-full px-4 py-3 bg-white/80 border border-slate-300 rounded-xl text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 transition-all">
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-medium text-slate-700">Pesan / Kolaborasi</label>
                    <textarea name="message" rows="4" required placeholder="Tuliskan pesan..." class="w-full px-4 py-3 bg-white/80 border border-slate-300 rounded-xl text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 transition-all resize-none"></textarea>
                </div>
                
                <div class="flex gap-3">
                    <button type="submit" id="submit-btn" class="flex-1 py-3.5 px-6 rounded-xl bg-gradient-to-r from-sky-600 to-indigo-600 text-white font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-sky-500/25 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                        <span id="btn-text">Kirim Email</span>
                        <i class="fas fa-paper-plane text-xs"></i>
                    </button>
                    <a href="https://wa.me/6282341502007?text=Halo%20Wardatul%20Jana," target="_blank" class="py-3.5 px-6 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider shadow-md transition-all flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp"><span>WhatsApp</span></i>
                    </a>
                </div>

                <p id="form-status" class="text-xs text-center font-medium mt-2"></p>
            </form>

        </div>
    </section>

    <!-- FOOTER DENGAN DESAIN & SOSIAL MEDIA -->
    <footer class="bg-white/80 backdrop-blur-md border-t border-slate-200/80 py-16 text-slate-600 relative z-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10 mb-12 reveal">
            <div class="space-y-3 md:col-span-1">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-gradient-to-tr from-sky-600 to-indigo-600 flex items-center justify-center font-bold text-white text-xs">W</div>
                    <span class="font-bold text-slate-900 text-sm">Wardatul Jana</span>
                </div>
                <p class="text-xs text-slate-500 font-normal leading-relaxed">Siswa PPLG di MAKN Ende, NTT, Indonesia. Menghadirkan solusi web modern, cepat, dan terstruktur.</p>
            </div>
            <div class="space-y-2">
                <h4 class="text-xs font-mono text-slate-900 uppercase tracking-wider font-semibold">Navigasi</h4>
                <ul class="space-y-1.5 text-xs">
                    <li><a href="#about" class="hover:text-sky-600 transition-colors">Beranda</a></li>
                    <li><a href="#about-me" class="hover:text-sky-600 transition-colors">Tentang Saya</a></li>
                    <li><a href="#projects" class="hover:text-sky-600 transition-colors">Portofolio</a></li>
                    <li><a href="#contact" class="hover:text-sky-600 transition-colors">Kontak</a></li>
                </ul>
            </div>
            <div class="space-y-2">
                <h4 class="text-xs font-mono text-slate-900 uppercase tracking-wider font-semibold">Spesialisasi</h4>
                <ul class="space-y-1.5 text-xs">
                    <li>Figma UI/UX Design</li>
                    <li>Web Application Development</li>
                    <li>PHP & Laravel Backend</li>
                    <li>Database Architecture</li>
                </ul>
            </div>
            <div class="space-y-3">
                <h4 class="text-xs font-mono text-slate-900 uppercase tracking-wider font-semibold">Lokasi & Kontak</h4>
                <p class="text-xs leading-relaxed">MAKN Ende, Jurusan PPLG<br>Ende, NTT, Indonesia<br><span class="font-mono text-sky-600 font-semibold">wardatul995599@gmail.com</span></p>
                
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 pt-8 border-t border-slate-200/80 text-center text-xs font-mono text-slate-400">
            <p>© 2026 Wardatul Jana (WWRDA) • MAKN Ende, Jurusan PPLG, Ende, NTT, Indonesia. All rights reserved.</p>
        </div>
    </footer>

    <!-- SCRIPT ANIMASI BACKGROUND JARING-JARING DAN GARIS BERGERAK -->
    <script>
        const canvas = document.getElementById('mesh-bg');
        const ctx = canvas.getContext('2d');

        let width, height;
        let particles = [];

        function resizeCanvas() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class Particle {
            constructor() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.vx = (Math.random() - 0.5) * 0.8;
                this.vy = (Math.random() - 0.5) * 0.8;
                this.radius = Math.random() * 1.5 + 1;
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < 0 || this.x > width) this.vx *= -1;
                if (this.y < 0 || this.y > height) this.vy *= -1;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(2, 132, 199, 0.4)';
                ctx.fill();
            }
        }

        function initParticles() {
            particles = [];
            const count = Math.floor((width * height) / 14000);
            for (let i = 0; i < count; i++) {
                particles.push(new Particle());
            }
        }
        initParticles();

        function animateMesh() {
            ctx.clearRect(0, 0, width, height);

            for (let i = 0; i < particles.length; i++) {
                particles[i].update();
                particles[i].draw();

                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < 130) {
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = `rgba(2, 132, 199, ${0.18 * (1 - dist / 130)})`;
                        ctx.lineWidth = 0.8;
                        ctx.stroke();
                    }
                }
            }
            requestAnimationFrame(animateMesh);
        }
        animateMesh();
    </script>

    <!-- SCRIPT DYNAMIC ANIMATED TYPING TEXT -->
    <script>
        const words = [
            "Web Developer",
            "Figma UI/UX Designer",
            "Siswa PPLG MAKN Ende",
            
        ];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingSpeed = 100;
        const deletingSpeed = 50;
        const delayBetweenWords = 1800;
        const typingTextElement = document.getElementById("typing-text");

        function typeEffect() {
            const currentWord = words[wordIndex];
            
            if (isDeleting) {
                typingTextElement.innerText = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingTextElement.innerText = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }

            if (!isDeleting && charIndex === currentWord.length) {
                isDeleting = true;
                setTimeout(typeEffect, delayBetweenWords);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                setTimeout(typeEffect, 400);
            } else {
                setTimeout(typeEffect, isDeleting ? deletingSpeed : typingSpeed);
            }
        }

        document.addEventListener("DOMContentLoaded", typeEffect);
    </script>

    <!-- SCRIPT SCROLL REVEAL (EFEK KELUAR-MASUK DUA ARAH) -->
    <script>
        const reveals = document.querySelectorAll('.reveal');

        function handleScrollReveal() {
            const windowHeight = window.innerHeight;
            reveals.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementBottom = element.getBoundingClientRect().bottom;
                
                if (elementTop < windowHeight - 80 && elementBottom > 60) {
                    element.classList.add('active');
                } else {
                    element.classList.remove('active');
                }
            });
        }

        window.addEventListener('scroll', handleScrollReveal);
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                    handleScrollReveal();
                }, 600);
            }, 800);
        });
    </script>

    <!-- SCRIPT WEB3FORMS AJAX -->
    <script>
        const form = document.getElementById('contact-form');
        const statusText = document.getElementById('form-status');
        const submitBtn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            btnText.innerText = "Mengirim...";
            submitBtn.disabled = true;

            const formData = new FormData(form);
            const object = Object.fromEntries(formData);
            const json = JSON.stringify(object);

            fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: json
                })
                .then(async (response) => {
                    let jsonResponse = await response.json();
                    if (response.status == 200) {
                        statusText.innerText = "Pesan berhasil terkirim ke email!";
                        statusText.className = "text-xs text-center font-medium mt-2 text-emerald-600";
                        form.reset();
                    } else {
                        statusText.innerText = jsonResponse.message || "Terjadi kesalahan saat mengirim.";
                        statusText.className = "text-xs text-center font-medium mt-2 text-red-600";
                    }
                })
                .catch(error => {
                    statusText.innerText = "Gagal terhubung ke server.";
                    statusText.className = "text-xs text-center font-medium mt-2 text-red-600";
                })
                .then(() => {
                    btnText.innerText = "Kirim Email";
                    submitBtn.disabled = false;
                    setTimeout(() => { statusText.innerText = ""; }, 6000);
                });
        });
    </script>
</body>
</html>