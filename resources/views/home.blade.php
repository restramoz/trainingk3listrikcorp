@extends('layouts.app')

@section('title', 'Training Alat Berat — Sertifikasi SIO & Pembinaan K3 Nasional')
@section('meta_description', 'Portal resmi layanan sertifikasi SIO operator alat berat, pembinaan K3 pesawat angkat & angkut, serta konsultansi SMK3 PP No. 50/2012 di seluruh Indonesia.')

@section('content')
@php
    $regionalService = resolve(App\Services\RegionalService::class);
    $provinces = $regionalService->getAllProvinces();
    $allPrograms = config('programs', []);

    $trainings = collect($allPrograms)->filter(fn($p) => ($p['category'] ?? '') === 'training')->all();
    $services = collect($allPrograms)->filter(fn($p) => ($p['category'] ?? '') === 'service')->all();

    $sioCategories = [
        ['slug' => 'sio-excavator', 'name' => 'Excavator', 'spec' => 'Hydraulic Excavator', 'class' => 'Kelas I, II & III'],
        ['slug' => 'sio-wheel-loader', 'name' => 'Wheel Loader', 'spec' => 'Dozer Shovel & Loader', 'class' => 'Kelas I & II'],
        ['slug' => 'sio-bulldozer', 'name' => 'Bulldozer', 'spec' => 'Crawler Tractor Bulldozer', 'class' => 'Kelas I & II'],
        ['slug' => 'sio-compactor', 'name' => 'Compactor / Roller', 'spec' => 'Road Roller & Tandem', 'class' => 'Kelas I & II'],
        ['slug' => 'sio-motor-grader', 'name' => 'Motor Grader', 'spec' => 'Alat Perata Tanah Grader', 'class' => 'Kelas I & II'],
        ['slug' => 'sio-rig-drilling', 'name' => 'Rig Drilling', 'spec' => 'Mesin Bor Pondasi/Tambang', 'class' => 'Operator Utama'],
        ['slug' => 'sio-telehandler', 'name' => 'Telehandler', 'spec' => 'Telescopic Material Handler', 'class' => 'Semua Kapasitas'],
        ['slug' => 'sio-vibro', 'name' => 'Vibro Roller', 'spec' => 'Vibratory Soil Compactor', 'class' => 'Kelas I & II'],
        ['slug' => 'sio-dump-truck', 'name' => 'Dump Truck', 'spec' => 'Rigid & Articulated Hauler', 'class' => 'Operator Berat'],
    ];
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
                <!-- Regulatory Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-dark-mahogany text-white text-xs sm:text-sm font-semibold mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-safety-orange animate-pulse"></span>
                    Landasan Regulasi Permenaker No. 8/2020 &amp; PP No. 50/2012
                </div>

                <!-- Main Heading -->
                <h1 id="hero-heading" class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-industry-black leading-tight uppercase">
                    Pembinaan Operator &amp; <span class="text-burnt-brick">Training Alat Berat</span>
                </h1>

                <!-- Subheading / Paragraph -->
                <p class="mt-6 text-base sm:text-lg lg:text-xl text-dark-mahogany leading-relaxed">
                    Tingkatkan kualifikasi keselamatan dan kompetensi teknis personil Anda melalui pembinaan terstruktur, sertifikasi SIO resmi Kemnaker RI, dan kepatuhan norma K3 pesawat angkat &amp; angkut di tempat kerja.
                </p>

                <!-- Actions -->
                <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                    <x-wa-cta variant="primary" size="lg" label="Konsultasi Program via WhatsApp" class="shadow-md bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold" />
                    <x-button href="#pelatihan" variant="secondary" size="lg" class="bg-white hover:bg-neutral-100 text-dark-mahogany font-bold border-2 border-dark-mahogany">
                        Lihat Program Training Alat Berat
                    </x-button>
                </div>

                <!-- Value Highlights Grid -->
                <div class="mt-12 pt-8 border-t border-neutral-300 grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-burnt-brick">9 SIO Resmi</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">Excavator, Loader, Bulldozer dll</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-industry-black">{{ count($trainings) }} Pelatihan</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">Operator Alat Berat, Konstruksi & K3</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-burnt-brick">{{ count($services) }} Jasa K3</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">Audit SMK3, HIRADC, SOP</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-industry-black">Nasional</div>
                        <div class="text-xs sm:text-sm text-dark-mahogany mt-1 font-semibold">Jangkauan 38 Provinsi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: 9 KATEGORI SIO ALAT BERAT -->
    <section id="sio-categories" class="py-14 sm:py-18 bg-neutral-50 border-b border-neutral-200" aria-labelledby="sio-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-white px-3 py-1 rounded-full border border-burnt-brick/20 shadow-xs">
                    Sertifikasi Kompetensi Operator
                </span>
                <h2 id="sio-heading" class="mt-3 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-industry-black tracking-tight">
                    9 Kategori Layanan SIO Alat Berat
                </h2>
                <p class="mt-3 text-base text-dark-mahogany">
                    Layanan pembinaan dan persiapan uji Surat Ijin Operator (SIO) Pesawat Angkat dan Pesawat Angkut sesuai Permenaker No. 8 Tahun 2020.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($sioCategories as $cat)
                    <div class="flex flex-col bg-white rounded-xl border border-neutral-200 p-6 shadow-sm hover:shadow-md hover:border-burnt-brick transition duration-150">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-burnt-brick/10 px-2.5 py-0.5 rounded border border-burnt-brick/20">
                                {{ $cat['class'] }}
                            </span>
                            <span class="text-[11px] font-semibold text-neutral-500">Permenaker 8/2020</span>
                        </div>
                        <h3 class="text-lg font-bold text-industry-black mb-1">
                            SIO {{ $cat['name'] }}
                        </h3>
                        <p class="text-xs text-dark-mahogany mb-4">
                            {{ $cat['desc'] ?? $cat['spec'] }}
                        </p>
                        <div class="mt-auto pt-3 border-t border-neutral-100 flex items-center justify-between">
                            <span class="text-xs text-neutral-600 font-medium">Sertifikasi Resmi</span>
                            <x-wa-cta variant="secondary" size="sm" :message="'Halo, saya ingin konsultasi mengenai jadwal dan persyaratan SIO ' . $cat['name'] . '.'" label="Konsultasi SIO" class="text-xs py-1" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 1: SERTIFIKASI & PELATIHAN -->
    <section id="pelatihan" class="py-16 sm:py-24 bg-white" aria-labelledby="pelatihan-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">
                    Sertifikasi &amp; Pelatihan
                </span>
                <h2 id="pelatihan-heading" class="mt-3 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-industry-black tracking-tight">
                    Program Pelatihan Operator &amp; K3
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">
                    Program pembinaan teknis, sertifikasi SIO operator alat berat, dan persiapan uji kompetensi profesi bidang Keselamatan dan Kesehatan Kerja (K3) sesuai peraturan perundangan yang berlaku.
                </p>
            </div>

            <!-- Training Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                @foreach($trainings as $slug => $item)
                    <div class="flex flex-col bg-white rounded-xl border border-neutral-200 shadow-sm hover:shadow-md transition-shadow overflow-hidden group">
                        <div class="h-2 bg-safety-orange"></div>
                        <div class="p-6 sm:p-7 flex-1 flex flex-col">
                            <div class="flex items-center justify-between text-xs font-bold uppercase tracking-wider text-burnt-brick mb-2">
                                <span>{{ $item['level'] }}</span>
                                <span class="text-[10px] bg-neutral-100 text-dark-mahogany px-2 py-0.5 rounded font-semibold border border-neutral-200">{{ $item['badge'] ?? 'Alat Berat / K3' }}</span>
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
                                <x-wa-cta variant="secondary" size="md" :message="$item['wa_message']" :label="'Konsultasi ' . explode('(', $item['title'])[0]" class="w-full justify-center" />
                                <a href="{{ route('program.show', $slug) }}" class="inline-flex items-center justify-center w-full text-xs font-bold text-burnt-brick hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                                    Detail Silabus &amp; Persyaratan &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 2: JASA KONSULTANSI & PENGUJIAN K3 -->
    <section id="jasa" class="py-16 sm:py-24 bg-neutral-50 border-t border-neutral-200" aria-labelledby="jasa-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-white px-3 py-1 rounded-full border border-burnt-brick/20 shadow-xs">
                    Layanan Konsultansi &amp; Teknis
                </span>
                <h2 id="jasa-heading" class="mt-3 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-industry-black tracking-tight">
                    Jasa Audit &amp; Penyusunan SMK3
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">
                    Pendampingan penerapan Sistem Manajemen K3 (SMK3 PP 50/2012), penilaian risiko HIRADC pesawat angkat &amp; angkut, serta penyusunan SOP keselamatan operasional.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                @foreach($services as $slug => $item)
                    <div class="flex flex-col bg-white rounded-xl border border-neutral-200 shadow-sm hover:shadow-md transition-shadow overflow-hidden group">
                        <div class="h-2 bg-burnt-brick"></div>
                        <div class="p-6 sm:p-7 flex-1 flex flex-col">
                            <div class="text-xs font-bold uppercase tracking-wider text-burnt-brick mb-2">
                                {{ $item['level'] }}
                            </div>
                            <h3 class="text-xl font-bold text-industry-black mb-3 group-hover:text-burnt-brick transition-colors">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-sm text-dark-mahogany leading-relaxed mb-6">
                                {{ Str::limit($item['introduction'], 140) }}
                            </p>
                            
                            @if(!empty($item['roles_and_responsibilities']) && count($item['roles_and_responsibilities']) > 0)
                            <div class="mt-auto pt-4 border-t border-neutral-200 space-y-2 mb-6">
                                <div class="text-xs font-bold text-dark-mahogany uppercase tracking-wider">Ruang Lingkup Kerja:</div>
                                <ul class="text-xs text-dark-mahogany space-y-1.5" role="list">
                                    @foreach(array_slice($item['roles_and_responsibilities'], 0, 3) as $deliverable)
                                        <li class="flex items-start gap-2">
                                            <svg class="w-4 h-4 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/></svg>
                                            <span>{{ $deliverable['title'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="space-y-2.5 mt-auto">
                                <x-wa-cta variant="primary" size="md" :message="$item['wa_message']" label="Minta Proposal Penawaran" class="w-full justify-center bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold" />
                                <a href="{{ route('program.show', $slug) }}" class="inline-flex items-center justify-center w-full text-xs font-bold text-burnt-brick hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                                    Lihat Detail Layanan &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN SECTION -->
    <section id="keunggulan" class="py-16 sm:py-24 bg-white border-t border-neutral-200" aria-labelledby="keunggulan-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">
                    Mengapa Memilih Kami
                </span>
                <h2 id="keunggulan-heading" class="mt-3 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-industry-black tracking-tight">
                    Keunggulan Training Alat Berat &amp; Konsultansi K3
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">
                    Pengalaman mendampingi kepatuhan keselamatan kerja industri, instruktur bersertifikasi resmi, dan kurikulum yang aplikatif di lapangan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pillar 1 -->
                <div class="p-6 rounded-xl bg-neutral-50 border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Dasar Regulasi Resmi</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Materi pelatihan dan acuan teknis mengacu pada Permenaker No. 8/2020 (Pesawat Angkat &amp; Angkut), UU No. 1/1970, dan PP No. 50/2012 (SMK3).
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="p-6 rounded-xl bg-neutral-50 border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Instruktur Berpengalaman</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Didukung praktisi dan instruktur alat berat senior yang memiliki jam terbang tinggi dalam operasional tambang, konstruksi, dan industri manufaktur.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="p-6 rounded-xl bg-neutral-50 border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Materi Praktis &amp; Terstruktur</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Kurikulum mengombinasikan pemahaman regulasi K3, inspeksi harian pra-operasi (P2H), teknik manuver aman, dan penanganan kondisi darurat.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="p-6 rounded-xl bg-neutral-50 border border-neutral-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-industry-black mb-2">Konsultasi Responsif</h3>
                    <p class="text-sm text-dark-mahogany leading-relaxed">
                        Layanan konsultasi cepat dan transparan mengenai jadwal sertifikasi SIO, persyaratan peserta, dan skema in-house training via WhatsApp.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="py-16 sm:py-24 bg-neutral-50 border-t border-neutral-200" aria-labelledby="faq-heading">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-white px-3 py-1 rounded-full border border-burnt-brick/20 shadow-xs">
                    Tanya Jawab
                </span>
                <h2 id="faq-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="mt-3 text-sm sm:text-base text-dark-mahogany">
                    Seputar sertifikasi Surat Ijin Operator (SIO) alat berat dan konsultansi kepatuhan SMK3.
                </p>
            </div>

            <div class="space-y-4">
                <details class="group bg-white rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Apakah setiap operator alat berat wajib memiliki SIO resmi?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Ya. Berdasarkan UU No. 1 Tahun 1970 dan Permenaker No. 8 Tahun 2020 tentang Keselamatan dan Kesehatan Kerja Pesawat Angkat dan Pesawat Angkut, setiap operator alat berat wajib memiliki Lisensi K3 / Surat Ijin Operator (SIO) yang diterbitkan oleh Kementerian Ketenagakerjaan RI.
                    </p>
                </details>

                <details class="group bg-white rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Apa dasar hukum penerapan Sistem Manajemen K3 (SMK3)?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Penerapan SMK3 diatur dalam Peraturan Pemerintah No. 50 Tahun 2012. Perusahaan yang mempekerjakan minimal 100 orang pekerja atau mempunyai potensi bahaya tinggi (termasuk operasional alat berat) wajib menerapkan SMK3 yang dibuktikan melalui audit internal maupun eksternal.
                    </p>
                </details>

                <details class="group bg-white rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Apa perbedaan antara pelatihan teknis alat berat dan lisensi SIO resmi?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Pelatihan alat berat adalah pembinaan pengetahuan operasional dan keselamatan. Lisensi K3 / SIO merupakan dokumen resmi yang diterbitkan oleh Kementerian Ketenagakerjaan RI setelah peserta memenuhi seluruh persyaratan administratif, evaluasi teori, dan uji praktik lapangan.
                    </p>
                </details>

                <details class="group bg-white rounded-lg border border-neutral-200 p-5 open:ring-2 open:ring-burnt-brick transition-all shadow-xs">
                    <summary class="font-bold text-industry-black cursor-pointer list-none flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>Bagaimana cara mendaftar in-house training alat berat untuk perusahaan?</span>
                        <svg class="w-5 h-5 text-burnt-brick group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-3 text-sm text-dark-mahogany leading-relaxed">
                        Hubungi konsultan kami melalui WhatsApp. Tim kami akan melakukan asesmen awal mengenai jenis unit alat berat yang digunakan di lokasi kerja, jumlah personil operator, dan menyusun proposal jadwal pelatihan yang fleksibel.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- FINAL CTA BANNER (DARK SURFACE) -->
    <section id="kontak" class="bg-dark-mahogany text-white py-16 sm:py-20 border-t border-industry-black relative overflow-hidden" aria-labelledby="cta-heading">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-wider text-safety-orange bg-industry-black rounded-full border border-dark-mahogany mb-4">
                Konsultasi &amp; Pendaftaran SIO Alat Berat
            </span>
            <h2 id="cta-heading" class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white tracking-tight uppercase">
                Pastikan Kepatuhan K3 &amp; Keselamatan Operasi Alat Berat
            </h2>
            <p class="mt-4 text-base sm:text-lg text-neutral-200 max-w-2xl mx-auto leading-relaxed">
                Hubungi tim konsultan kami via WhatsApp untuk konsultasi jadwal sertifikasi SIO operator alat berat, penawaran in-house training perusahaan, atau pendampingan penerapan SMK3.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-wa-cta variant="primary" size="lg" label="Konsultasi via WhatsApp Sekarang" class="shadow-lg bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold" />
            </div>
        </div>
    </section>

    <!-- REGION DIRECTORY SECTION -->
    <section id="wilayah" class="py-14 bg-white border-t border-neutral-200" aria-label="Jelajahi Wilayah">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">
                    Jangkauan Wilayah
                </span>
                <h2 class="text-2xl font-extrabold text-industry-black mt-2">Layanan Sertifikasi Alat Berat di 38 Provinsi</h2>
                <p class="text-sm text-dark-mahogany mt-1">Kami melayani pembinaan sertifikasi publik daring dan bimbingan teknis on-site di seluruh Indonesia.</p>
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
