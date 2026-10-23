<footer class="bg-industry-black text-white border-t border-dark-mahogany" role="contentinfo" aria-label="Informasi Kaki Halaman">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-24 sm:py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Col 1: Identity -->
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-burnt-brick border border-burnt-brick/80 flex items-center justify-center text-white shadow-inner">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="M12 8v8"/>
                            <path d="M8 12h8"/>
                        </svg>
                    </div>
                    <span class="text-base font-bold text-white tracking-tight uppercase">
                        Training <span class="text-safety-orange">Alat Berat</span>
                    </span>
                </div>
                <p class="text-sm text-neutral-300 leading-relaxed">
                    Portal resmi informasi pembinaan dan sertifikasi SIO operator alat berat, kepatuhan K3 pesawat angkat &amp; angkut, serta konsultansi SMK3 PP 50/2012 untuk industri di seluruh Indonesia.
                </p>
                <div class="pt-1">
                    <x-wa-cta variant="primary" size="sm" label="Konsultasi WhatsApp" class="bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold" />
                </div>
            </div>

            <!-- Col 2: Program & Layanan -->
            <div class="space-y-4">
                <h3 class="text-xs font-bold text-safety-orange uppercase tracking-wider">
                    Program &amp; Layanan Utama
                </h3>
                <ul class="space-y-2 text-xs sm:text-sm text-neutral-200" role="list">
                    <li>
                        <a href="{{ route('program.show', 'training-ahli-k3-umum') }}" class="hover:text-safety-orange transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                            Training Operator &amp; Alat Berat
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('program.show', 'training-k3-konstruksi') }}" class="hover:text-safety-orange transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                            Training K3 Konstruksi &amp; Alat Berat
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('program.show', 'jasa-audit-smk3') }}" class="hover:text-safety-orange transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                            Jasa Audit &amp; Pendampingan SMK3
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('articles.index') }}" class="hover:text-safety-orange transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                            Artikel &amp; Regulasi K3
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="mt-12 pt-8 border-t border-dark-mahogany/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-neutral-400">
            <p>
                &copy; {{ date('Y') }} Training Alat Berat. Seluruh hak cipta dilindungi.
            </p>
            <p class="text-neutral-400">
                Landasan regulasi: Permenaker No. 8/2020 &amp; PP No. 50/2012. Peta wilayah menampilkan konteks administratif jangkauan layanan.
            </p>
        </div>
    </div>
</footer>
