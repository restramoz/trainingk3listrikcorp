@extends('layouts.app')

@section('title', 'Training K3 Listrik — Pelatihan Keselamatan Kerja Kelistrikan Nasional')
@section('meta_description', 'Program pelatihan K3 Listrik untuk berbagai peran kelistrikan: pembinaan kompetensi keselamatan kerja listrik di industri, gedung, dan fasilitas di seluruh Indonesia.')

@section('content')
@php
    $regionalService = resolve(App\Services\RegionalService::class);
    $provinces = $regionalService->getAllProvinces();
    $allPrograms = config('programs', []);
@endphp

    <!-- HERO SECTION (LIGHT SURFACE) -->
    <section class="relative bg-white text-dark-mahogany overflow-hidden border-b border-neutral-200" aria-labelledby="hero-heading">
        <!-- Subtle Grid Pattern Accent -->
        <div class="absolute inset-0 opacity-[0.04] pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#481E14" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-pattern)" />
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-28">
            <div class="max-w-3xl">
                <!-- Focus Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-dark-mahogany text-white text-xs sm:text-sm font-semibold mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-safety-orange animate-pulse"></span>
                    Spesialisasi Keselamatan Kerja Kelistrikan
                </div>

                <!-- Main Heading -->
                <h1 id="hero-heading" class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-industry-black leading-tight uppercase">
                    Pelatihan <span class="text-burnt-brick">K3 Listrik</span> untuk Berbagai Peran
                </h1>

                <!-- Subheading / Paragraph -->
                <p class="mt-6 text-base sm:text-lg lg:text-xl text-dark-mahogany leading-relaxed">
                    Perkuat pemahaman bahaya kerja listrik dan disiplin kerja aman personel Anda melalui program pelatihan terstruktur, mulai dari operator panel, teknisi, pengawas, hingga manajer fungsi kelistrikan.
                </p>

                <!-- Actions -->
                <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                    <x-wa-cta variant="primary" size="lg" label="Konsultasi Program via WhatsApp" class="shadow-md bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold" />
                    <x-button href="#pelatihan" variant="secondary" size="lg" class="bg-white hover:bg-neutral-100 text-dark-mahogany font-bold border-2 border-dark-mahogany">
                        Lihat Program Pelatihan
                    </x-button>
                </div>

                <!-- Value Highlights Grid -->
                <div class="mt-12 pt-8 border-t border-neutral-300 grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-burnt-brick">{{ count($allPrograms) }} Program</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">Pelatihan K3 Listrik</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-industry-black">Peran</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">Operator hingga Manajer Listrik</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-burnt-brick">Spesialis</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">PV Surya, PLC, SCADA, Grounding</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-industry-black">Nasional</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">Jangkauan 38 Provinsi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: PROGRAM PELATIHAN K3 LISTRIK -->
    <section id="pelatihan" class="py-16 sm:py-24 bg-white" aria-labelledby="pelatihan-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">
                    Katalog Program
                </span>
                <h2 id="pelatihan-heading" class="mt-3 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-industry-black tracking-tight">
                    Program Pelatihan K3 Listrik
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">
                    Program pembinaan kompetensi keselamatan kerja kelistrikan yang disusun per peran dan lingkup: operasional, pemeliharaan, inspeksi, pengawasan, perencanaan, hingga spesialisasi seperti tenaga surya, PLC, dan SCADA.
                </p>
            </div>

            <!-- Program Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                @foreach($allPrograms as $slug => $item)
                    <div class="flex flex-col bg-white rounded-xl border border-neutral-200 shadow-sm hover:shadow-md transition-shadow overflow-hidden group">
                        <div class="h-2 bg-safety-orange"></div>
                        <div class="p-6 sm:p-7 flex-1 flex flex-col">
                            <div class="flex items-center justify-between text-xs font-bold uppercase tracking-wider text-burnt-brick mb-2">
                                <span>{{ $item['level'] }}</span>
                                <span class="text-[10px] bg-neutral-100 text-dark-mahogany px-2 py-0.5 rounded font-semibold border border-neutral-200">{{ $item['badge'] ?? 'K3 Listrik' }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-industry-black mb-3 group-hover:text-burnt-brick transition-colors">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-sm text-dark-mahogany leading-relaxed mb-6">
                                {{ Str::limit($item['introduction'], 140) }}
                            </p>

                            @if(!empty($item['curriculum_topics']) && count($item['curriculum_topics']) > 0)
                            <div class="mt-auto pt-4 border-t border-neutral-200 space-y-2 mb-6">
                                <div class="text-xs font-bold text-dark-mahogany uppercase tracking-wider">Cakupan Materi Utama:</div>
                                <ul class="text-xs text-dark-mahogany space-y-1.5" role="list">
                                    @foreach(array_slice($item['curriculum_topics'], 0, 3) as $topic)
                                        <li class="flex items-start gap-2">
                                            <svg class="w-4 h-4 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                            <span>{{ Str::limit($topic, 50) }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="space-y-2.5 mt-auto">
                                <x-wa-cta variant="secondary" size="md" :message="$item['wa_message']" :label="'Konsultasi ' . $item['title']" class="w-full justify-center" />
                                <a href="{{ route('program.show', $slug) }}" class="inline-flex items-center justify-center w-full text-xs font-bold text-burnt-brick hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                                    Detail Silabus &amp; Info Program &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN SECTION -->
    <section id="keunggulan" class="py-16 sm:py-24 bg-neutral-50 border-t border-neutral-200" aria-labelledby="keunggulan-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-white px-3 py-1 rounded-full border border-burnt-brick/20 shadow-xs">
                    Mengapa Memilih Kami
                </span>
                <h2 id="keunggulan-heading" class="mt-3 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-industry-black tracking-tight">
                    Keunggulan Pelatihan K3 Listrik
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">
                    Program yang selaras dengan kebutuhan nyata di fasilitas: dari pengoperasian panel harian hingga pengelolaan risiko kelistrikan lintas fungsi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pillar 1 -->
                <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Fokus Bahaya Kelistrikan</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Seluruh program memusatkan materi pada salah satu bahaya paling umum di tempat kerja: sengatan, busur api, kebakaran, dan gangguan sistem kelistrikan.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Disusun Per Peran</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Materi dipisahkan sesuai tanggung jawab kerja: operator, teknisi, inspektur, pengawas, supervisor, staff, hingga manajer fungsi kelistrikan.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Lingkup Lengkap</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Dari kelistrikan gedung, kendaraan, dan fasilitas produksi hingga spesialisasi seperti tenaga surya, kendali konvensional, PLC, dan pemantauan terpusat.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Konsultasi Responsif</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Informasi jadwal, persyaratan peserta, atau skema penyelenggaraan dikonfirmasi transparan melalui WhatsApp tanpa biaya tersembunyi di halaman web.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="py-16 sm:py-24 bg-white border-t border-neutral-200" aria-labelledby="faq-heading">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20 shadow-xs">
                    Tanya Jawab
                </span>
                <h2 id="faq-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="mt-3 text-sm sm:text-base text-dark-mahogany">
                    Seputar program pelatihan K3 Listrik dan pembinaan kompetensi keselamatan kerja kelistrikan.
                </p>
            </div>

            <div class="space-y-4">
                <details class="group bg-neutral-50 rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Apakah pelatihan ini membuat peserta memperoleh sertifikat atau lisensi resmi?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Program-program ini dirancang sebagai pembinaan kompetensi. Status sertifikasi resmi, penunjukan jabatan, atau lisensi khusus diatur oleh instansi berwenang dan perusahaan masing-masing melalui proses tersendiri. Verifikasi selalu dilakukan kepada pihak yang berwenang.
                    </p>
                </details>

                <details class="group bg-neutral-50 rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Program mana yang cocok untuk tim kami?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Pilih berdasarkan peran kerja: operator untuk pengoperasian panel, teknisi untuk pemeliharaan, inspektur untuk pemeriksaan instalasi, pengawas untuk pekerjaan berlangsung, dan manajer untuk pengelolaan fungsi kelistrikan. Untuk lingkup spesifik, tersedia program tenaga surya, kendali, dan sistem ilmiah lainnya. Konsultasi pengarahan tersedia via WhatsApp.
                    </p>
                </details>

                <details class="group bg-neutral-50 rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Apakah tersedia skema in-house training di lokasi perusahaan?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Kebutuhan penyelenggaraan dan ketersediaan skema in-house dikonfirmasi langsung bersama penyelenggara program, termasuk jadwal dan persyaratan fasilitas lokasi.
                    </p>
                </details>

                <details class="group bg-neutral-50 rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Bagaimana cara mendapatkan informasi jadwal dan biaya program?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Jadwal dan investasi biaya tidak dipublikasikan di halaman web. Hubungi kami melalui WhatsApp akan membantu mengonfirmasi ketersediaan program, jadwal, beserta penawaran resmi sesuai kebutuhan.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- FINAL CTA BANNER (DARK SURFACE) -->
    <section id="kontak" class="bg-dark-mahogany text-white py-16 sm:py-20 border-t border-industry-black relative overflow-hidden" aria-labelledby="cta-heading">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-wider text-safety-orange bg-industry-black rounded-full border border-dark-mahogany mb-4">
                Konsultasi &amp; Pendaftaran Program
            </span>
            <h2 id="cta-heading" class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white tracking-tight uppercase">
                Perkuat Keselamatan Kerja Kelistrikan Tim Anda
            </h2>
            <p class="mt-4 text-base sm:text-lg text-neutral-200 max-w-2xl mx-auto leading-relaxed">
                Hubungi kami via WhatsApp untuk konsultasi program pelatihan K3 Listrik, penawaran in-house training perusahaan, atau rekomendasi program sesuai peran tim Anda.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-wa-cta variant="primary" size="lg" label="Konsultasi via WhatsApp Sekarang" class="shadow-lg bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold" />
            </div>
        </div>
    </section>

    <!-- REGION DIRECTORY SECTION -->
    <section id="wilayah" class="py-14 bg-neutral-50 border-t border-neutral-200" aria-label="Jelajahi Wilayah">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-white px-3 py-1 rounded-full border border-burnt-brick/20">
                    Jangkauan Wilayah
                </span>
                <h2 class="text-2xl font-extrabold text-industry-black mt-2">Pelatihan K3 Listrik di 38 Provinsi</h2>
                <p class="text-sm text-dark-mahogany mt-1">Jelajahi halaman provinsi dan kota untuk konteks kebutuhan pelatihan di wilayah Anda.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($provinces as $prov)
                    <a href="{{ route('regional.province', $prov['slug']) }}" class="block p-4 bg-white rounded-lg border border-neutral-200 hover:border-burnt-brick hover:shadow-sm transition group">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-sm text-industry-black group-hover:text-burnt-brick transition-colors">{{ $prov['name'] }}</span>
                            @if(!empty($prov['total_cities']))
                                <span class="text-[11px] text-dark-mahogany bg-neutral-100 px-2 py-0.5 rounded border border-neutral-200">{{ $prov['total_cities'] }} Kab/Kota</span>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
