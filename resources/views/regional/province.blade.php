@extends('layouts.app')

@section('title', 'Training Alat Berat & Layanan K3 Provinsi ' . $province['name'] . ' — Konsultasi Resmi')
@section('meta_description', 'Informasi draft Training Alat Berat untuk wilayah Provinsi ' . $province['name'] . '.')
@section('wa_message', $waMessage)

@section('content')
    {{-- Breadcrumb --}}
    <div class="bg-neutral-100 border-b border-neutral-200">
        <x-breadcrumb :items="[
            ['label' => 'Wilayah', 'url' => null],
            ['label' => $province['name'], 'url' => null],
        ]" />
    </div>

    {{-- Hero --}}
    <section class="relative bg-industry-black text-white overflow-hidden border-b border-dark-mahogany" aria-labelledby="prov-hero-heading">
        <div class="absolute inset-0 opacity-10 pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs><pattern id="grid-p" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="#FFF" stroke-width="1"/></pattern></defs>
                <rect width="100%" height="100%" fill="url(#grid-p)" />
            </svg>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-20">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-burnt-brick border border-burnt-brick/80 text-white text-xs sm:text-sm font-semibold mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-safety-orange animate-pulse"></span>
                    Layanan Informasi &amp; Pembinaan K3
                </div>
                <h1 id="prov-hero-heading" class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight uppercase">
                    Training Alat Berat &amp; Layanan K3<br><span class="text-safety-orange">Provinsi {{ $province['name'] }}</span>
                </h1>
                <p class="mt-6 text-base sm:text-lg text-neutral-200 leading-relaxed">
                    Pusat informasi konsultasi pembinaan kompetensi K3 dan jasa konsultansi penerapan SMK3 (PP 50/2012) untuk industri, fasilitas layanan, dan badan usaha di <strong class="text-white">Provinsi {{ $province['name'] }}</strong>.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <x-wa-cta variant="primary" size="lg" :message="$waMessage" label="Konsultasi Wilayah {{ $province['name'] }}" class="bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg" />
                </div>
                <div class="mt-10 pt-8 border-t border-neutral-800 grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Pulau</div><div class="text-lg font-extrabold text-white mt-0.5">{{ $province['island'] }}</div></div>
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Kab/Kota</div><div class="text-lg font-extrabold text-safety-orange mt-0.5">{{ $province['total_cities'] }}</div></div>
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Layanan</div><div class="text-lg font-extrabold text-white mt-0.5">{{ count($programs) }} Program</div></div>
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Regulasi</div><div class="text-lg font-extrabold text-safety-orange mt-0.5">UU 1/1970</div></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Disclaimer --}}
    <section class="py-10 bg-neutral-50 border-b border-neutral-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-start gap-4">
                <svg class="w-6 h-6 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <p class="text-sm text-dark-mahogany leading-relaxed">
                    <strong class="text-industry-black">Catatan penting:</strong> Halaman ini adalah portal informasi dan konsultasi program. Penyelenggaraan pelatihan tatap muka, in-house training di kota/kabupaten dalam Provinsi {{ $province['name'] }}, jadwal batch, dan persyaratan administrasi dikoordinasikan secara langsung melalui tim konsultan kami.
                </p>
            </div>
        </div>
    </section>

    {{-- Program Links --}}
    <section id="program" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="prov-program-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">Layanan Unggulan</span>
                <h2 id="prov-program-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Program Pelatihan &amp; Konsultansi K3 di {{ $province['name'] }}
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">Pilih program pembinaan kompetensi atau jasa konsultansi K3 sesuai kebutuhan organisasi dan industri Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($programs as $prog)
                <a href="{{ route('program.show', $prog['slug']) }}" class="group flex flex-col bg-white rounded-xl border border-neutral-200 hover:border-burnt-brick hover:shadow-md transition-all overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    <div class="h-1.5 bg-safety-orange"></div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="text-xs font-bold uppercase tracking-wider text-burnt-brick mb-1">{{ $prog['category_label'] ?? 'Layanan' }}</div>
                        <h3 class="text-lg font-bold text-industry-black mb-2 group-hover:text-burnt-brick transition-colors">{{ $prog['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-dark-mahogany flex-1 leading-relaxed line-clamp-3">{{ $prog['hero_subheading'] }}</p>
                        <div class="mt-4 pt-4 border-t border-neutral-100 text-xs font-bold text-burnt-brick flex items-center justify-between">
                            <span>Rincian Program</span>
                            <span>&rarr;</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Cities in Province --}}
    @if(count($province['cities']) > 0)
    <section id="kota" class="py-14 sm:py-20 bg-neutral-50 border-b border-neutral-200" aria-labelledby="prov-kota-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="prov-kota-heading" class="text-2xl font-extrabold text-industry-black mb-8">
                Kabupaten &amp; Kota di Provinsi {{ $province['name'] }}
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach($province['cities'] as $c)
                <a href="{{ route('regional.city', $c['slug']) }}" class="block px-3 py-2.5 rounded-lg bg-white border border-neutral-200 hover:border-burnt-brick hover:bg-neutral-100 text-sm font-medium text-dark-mahogany hover:text-burnt-brick transition-colors truncate focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    {{ $c['name'] }}
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- FAQ --}}
    <section id="faq" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="prov-faq-heading">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">Tanya Jawab</span>
                <h2 id="prov-faq-heading" class="mt-3 text-2xl font-extrabold text-industry-black tracking-tight">FAQ: Layanan K3 di {{ $province['name'] }}</h2>
            </div>
            <div class="space-y-4">
                @foreach([
                    [
                        'q' => 'Apakah pelatihan kompetensi K3 dan jasa konsultansi melayani wilayah Provinsi ' . $province['name'] . '?',
                        'a' => 'Ya, kami melayani konsultasi dan pelaksanaan pelatihan publik daring, pelatihan tatap muka, serta in-house training dan konsultansi SMK3 untuk seluruh kota dan kabupaten di Provinsi ' . $province['name'] . '.',
                    ],
                    [
                        'q' => 'Program apa saja yang tersedia untuk pemenuhan kepatuhan K3?',
                        'a' => 'Tersedia program pembinaan kompetensi Alat Berat, K3 Konstruksi, K3 Kimia, K3 Kebakaran, Petugas P3K, serta jasa konsultansi audit SMK3, HIRADC, dan pengukuran lingkungan kerja.',
                    ],
                    [
                        'q' => 'Bagaimana cara mengajukan proposal in-house training K3 di ' . $province['name'] . '?',
                        'a' => 'Hubungi konsultan kami melalui WhatsApp. Tim kami akan mendiskusikan kebutuhan pelatihan, profil risiko fasilitas kerja, dan menyiapkan proposal penawaran resmi yang disesuaikan.',
                    ],
                ] as $faq)
                <details class="group bg-white rounded-xl border border-neutral-200 p-5 sm:p-6 open:border-burnt-brick shadow-xs">
                    <summary class="flex justify-between items-center gap-4 font-bold text-industry-black cursor-pointer list-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span>{{ $faq['q'] }}</span>
                        <span class="w-7 h-7 rounded-full bg-neutral-100 flex items-center justify-center shrink-0 group-open:rotate-180 transition-transform">
                            <svg class="w-4 h-4 text-burnt-brick" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </span>
                    </summary>
                    <p class="mt-4 pt-4 border-t border-neutral-100 text-sm text-dark-mahogany leading-relaxed">{{ $faq['a'] }}</p>
                </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="py-16 sm:py-24 bg-industry-black text-white" aria-labelledby="prov-cta-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 id="prov-cta-heading" class="text-2xl sm:text-3xl font-extrabold uppercase tracking-tight">
                    Konsultasi Training Alat Berat<br><span class="text-safety-orange">Provinsi {{ $province['name'] }}</span>
                </h2>
                <p class="mt-4 text-base text-neutral-200 leading-relaxed">
                    Hubungi konsultan kami untuk informasi silabus, pendaftaran batch pelatihan K3, atau penjadwalan in-house training dan audit SMK3.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <x-wa-cta variant="primary" size="lg" :message="$waMessage" label="Konsultasi Sekarang" class="bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg" />
                    <x-button :href="route('home')" variant="outline" size="lg" class="text-white border-2 border-neutral-400 hover:bg-neutral-800">Kembali ke Beranda</x-button>
                </div>
            </div>
        </div>
    </section>
@endsection
