@extends('layouts.app')

@section('title', 'Pelatihan K3 Listrik di ' . $city['name'] . ' — Konsultasi Resmi K3')
@section('meta_description', 'Informasi program pelatihan K3 Listrik dan pembinaan kompetensi keselamatan kerja untuk industri di ' . $city['name'] . ', Provinsi ' . $city['province'] . '.')
@section('wa_message', $waMessage)

@section('content')
    {{-- Breadcrumb --}}
    <div class="bg-neutral-100 border-b border-neutral-200">
        <x-breadcrumb :items="[
            ['label' => 'Wilayah', 'url' => null],
            ['label' => $city['province'], 'url' => route('regional.province', $city['province_slug'])],
            ['label' => $city['name'], 'url' => null],
        ]" />
    </div>

    {{-- Hero --}}
    <section class="relative bg-industry-black text-white overflow-hidden border-b border-dark-mahogany" aria-labelledby="city-hero-heading">
        <div class="absolute inset-0 opacity-10 pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs><pattern id="grid-c" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="#FFF" stroke-width="1"/></pattern></defs>
                <rect width="100%" height="100%" fill="url(#grid-c)" />
            </svg>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-20">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-burnt-brick border border-burnt-brick/80 text-white text-xs sm:text-sm font-semibold mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-safety-orange animate-pulse"></span>
                    Layanan Pembinaan &amp; Kepatuhan K3
                </div>
                <h1 id="city-hero-heading" class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight uppercase">
                    Pelatihan K3 Listrik<br><span class="text-safety-orange">{{ $city['name'] }}</span>
                </h1>
                <p class="mt-6 text-base sm:text-lg text-neutral-200 leading-relaxed">
                    Program pelatihan keselamatan kerja kelistrikan dan pembinaan kompetensi personil industri bagi fasilitas usaha di <strong class="text-white">{{ $city['name'] }}</strong>, Provinsi {{ $city['province'] }}.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <x-wa-cta variant="primary" size="lg" :message="$waMessage" label="Konsultasi Wilayah {{ $city['name'] }}" class="bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg" />
                </div>
                <div class="mt-10 pt-8 border-t border-neutral-800 grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Provinsi</div><div class="text-base font-extrabold text-white mt-0.5 truncate">{{ $city['province'] }}</div></div>
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Pulau</div><div class="text-base font-extrabold text-safety-orange mt-0.5">{{ $city['island'] }}</div></div>
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Layanan</div><div class="text-base font-extrabold text-white mt-0.5">{{ count($programs) }} Program</div></div>
                    <div><div class="text-xs text-neutral-400 uppercase tracking-wider">Regulasi</div><div class="text-base font-extrabold text-safety-orange mt-0.5">UU 1/1970</div></div>
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
                    <strong class="text-industry-black">Catatan penting:</strong> Halaman ini adalah portal informasi dan konsultasi resmi. Penyelenggaraan pelatihan fisik/in-house di {{ $city['name'] }}, jadwal pelaksanaan, dan asesmen kebutuhan K3 dikonfirmasi langsung melalui representasi konsultan kami.
                </p>
            </div>
        </div>
    </section>

    {{-- Program Links --}}
    <section id="program" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="city-program-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">Program Unggulan</span>
                <h2 id="city-program-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Program Pelatihan &amp; Jasa K3 di {{ $city['name'] }}
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">Pilih program yang sesuai dengan kebutuhan operasional dan kepatuhan K3 fasilitas Anda di {{ $city['name'] }}.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($programs as $prog)
                <a href="{{ route('city.program.detail', ['city' => $city['slug'], 'program' => $prog['slug']]) }}" class="group flex flex-col bg-white rounded-xl border border-neutral-200 hover:border-burnt-brick hover:shadow-md transition-all overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    <div class="h-1.5 bg-safety-orange"></div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="text-xs font-bold uppercase tracking-wider text-burnt-brick mb-1">{{ $prog['category_label'] ?? 'Layanan' }}</div>
                        <h3 class="text-lg font-bold text-industry-black mb-2 group-hover:text-burnt-brick transition-colors">{{ $prog['title'] }} — {{ $city['name'] }}</h3>
                        <p class="text-xs sm:text-sm text-dark-mahogany flex-1 leading-relaxed line-clamp-3">{{ $prog['hero_subheading'] }}</p>
                        <div class="mt-4 pt-4 border-t border-neutral-100 text-xs font-bold text-burnt-brick flex items-center justify-between">
                            <span>Rincian Layanan di {{ $city['name'] }}</span>
                            <span>&rarr;</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Districts List --}}
    @if(count($city['districts']) > 0)
    <section id="kecamatan" class="py-14 sm:py-20 bg-neutral-50 border-b border-neutral-200" aria-labelledby="city-kec-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="city-kec-heading" class="text-2xl font-extrabold text-industry-black mb-2">
                Kecamatan di {{ $city['name'] }}
            </h2>
            <p class="text-sm text-dark-mahogany mb-8">Daftar wilayah administratif di {{ $city['name'] }}. Layanan konsultasi dan pendampingan implementasi K3 menjangkau seluruh kecamatan.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach($city['districts'] as $dist)
                <a href="{{ route('regional.district', [$city['slug'], $dist['slug']]) }}" class="block px-3 py-2.5 rounded-lg bg-white border border-neutral-200 hover:border-burnt-brick hover:bg-neutral-100 text-sm font-medium text-dark-mahogany hover:text-burnt-brick transition-colors truncate focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    {{ $dist['name'] }}
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <x-regional-map :citySlug="$city['slug']" :regionName="$city['name']" />

    {{-- Articles --}}
    @if(isset($articles) && count($articles) > 0)
    <section id="artikel" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="city-article-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="city-article-heading" class="text-2xl font-extrabold text-industry-black mb-2">
                Artikel &amp; Panduan K3 di {{ $city['name'] }}
            </h2>
            <p class="text-sm text-dark-mahogany mb-8">Kumpulan artikel edukatif terkait keselamatan kerja kelistrikan untuk wilayah {{ $city['name'] }}.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($articles as $art)
                <a href="{{ route('articles.show', $art->slug) }}" class="group flex flex-col bg-white rounded-xl border border-neutral-200 hover:border-burnt-brick hover:shadow-md transition-all overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    {{-- Featured Image --}}
                    @if($art->featured_image)
                        <div class="relative overflow-hidden bg-neutral-100 aspect-video">
                            <img
                                src="/{{ ltrim($art->featured_image, '/') }}"
                                alt="{{ $art->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            >
                        </div>
                    @else
                        <div class="aspect-video bg-gradient-to-br from-neutral-100 to-neutral-200 flex items-center justify-center">
                            <svg class="w-10 h-10 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                    @endif
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-lg font-bold text-industry-black mb-2 group-hover:text-burnt-brick transition-colors line-clamp-2">{{ $art->title }}</h3>
                        <p class="text-xs sm:text-sm text-dark-mahogany flex-1 leading-relaxed line-clamp-3">{{ $art->excerpt }}</p>
                        <div class="mt-4 pt-4 border-t border-neutral-100 text-xs font-bold text-burnt-brick flex items-center justify-between">
                            <span>Baca Selengkapnya</span>
                            <span>&rarr;</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Nearby Cities --}}
    @if(count($nearbyCities) > 0)
    <section class="py-14 sm:py-20 bg-neutral-50 border-b border-neutral-200" aria-labelledby="city-nearby-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="city-nearby-heading" class="text-xl font-extrabold text-industry-black mb-6">
                Kabupaten &amp; Kota Lain di Provinsi {{ $city['province'] }}
            </h2>
            <div class="flex flex-wrap gap-3">
                @foreach($nearbyCities as $c)
                <a href="{{ route('regional.city', $c['slug']) }}" class="inline-flex px-4 py-2 rounded-full bg-white border border-neutral-200 hover:border-burnt-brick text-sm text-dark-mahogany hover:text-burnt-brick transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    {{ $c['name'] }}
                </a>
                @endforeach
                <a href="{{ route('regional.province', $city['province_slug']) }}" class="inline-flex px-4 py-2 rounded-full bg-white border border-burnt-brick text-sm font-semibold text-burnt-brick hover:bg-neutral-100 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    Lihat semua Provinsi {{ $city['province'] }} &rarr;
                </a>
            </div>
        </div>
    </section>
    @endif

    {{-- FAQ --}}
    <section id="faq" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="city-faq-heading">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">Tanya Jawab</span>
                <h2 id="city-faq-heading" class="mt-3 text-2xl font-extrabold text-industry-black tracking-tight">FAQ: Layanan K3 di {{ $city['name'] }}</h2>
            </div>
            <div class="space-y-4">
                @foreach([
                    [
                        'q' => 'Apakah layanan pembinaan K3 dan in-house training menjangkau ' . $city['name'] . '?',
                        'a' => 'Ya, kami melayani calon peserta dan korporasi dari ' . $city['name'] . ' untuk berbagai program pelatihan K3 Listrik sesuai peran dan kebutuhan tim Anda.',
                    ],
                    [
                        'q' => 'Bagaimana cara menentukan skema pelatihan K3 yang tepat untuk instansi kami?',
                        'a' => 'Kebutuhan pelatihan disesuaikan dengan peran dan profil risiko operasional perusahaan. Program pelatihan K3 Listrik tersedia untuk berbagai level, dari operator dan teknisi hingga supervisor dan manajer. Tim kami siap membantu mengarahkan program yang sesuai.',
                    ],
                    [
                        'q' => 'Bagaimana proses pengajuan penawaran in-house training K3 di ' . $city['name'] . '?',
                        'a' => 'Hubungi representasi konsultan kami melalui WhatsApp. Sampaikan kebutuhan jumlah peserta, jadwal yang diinginkan, dan fokus materi, lalu kami akan menerbitkan proposal teknis dan biaya penawaran resmi.',
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
    <section class="py-16 sm:py-24 bg-industry-black text-white" aria-labelledby="city-cta-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 id="city-cta-heading" class="text-2xl sm:text-3xl font-extrabold uppercase tracking-tight">
                    Konsultasi Pelatihan K3 Listrik<br><span class="text-safety-orange">{{ $city['name'] }}</span>
                </h2>
                <p class="mt-4 text-base text-neutral-200 leading-relaxed">
                    Hubungi kami untuk informasi materi, penawaran in-house, jadwal peserta, atau rekomendasi program K3 Listrik.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <x-wa-cta variant="primary" size="lg" :message="$waMessage" label="Konsultasi Sekarang" class="bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg" />
                    <x-button :href="route('regional.province', $city['province_slug'])" variant="outline" size="lg" class="text-white border-2 border-neutral-400 hover:bg-neutral-800">Provinsi {{ $city['province'] }}</x-button>
                </div>
                <div class="mt-10 pt-8 border-t border-neutral-800 flex flex-wrap justify-center gap-4 text-xs text-neutral-400">
                    <a href="{{ route('home') }}#pelatihan" class="hover:text-safety-orange transition-colors">Pelatihan Kompetensi K3</a>
                    <span>•</span>
                    <a href="{{ route('home') }}#jasa" class="hover:text-safety-orange transition-colors">Jasa Konsultansi K3</a>
                    <span>•</span>
                    <a href="{{ route('regional.province', $city['province_slug']) }}" class="hover:text-safety-orange transition-colors">Provinsi {{ $city['province'] }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
