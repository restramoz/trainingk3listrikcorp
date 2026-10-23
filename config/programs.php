<?php

/**
 * Training Ahli K3 Umum — Program Configuration
 *
 * Single source of truth for all program and service descriptions.
 * Used by ProgramController, homepage, regional pages, and the article generator.
 *
 * Content verified against:
 *   - UU No. 1 Tahun 1970 tentang Keselamatan Kerja
 *   - Permenaker No. 2 Tahun 1992 tentang Tata Cara Penunjukan Ahli K3
 *   - Permenaker No. 38 Tahun 2016 (K3 Pesawat Tenaga dan Produksi)
 *   - Kepmenaker No. 187/1999 (K3 Bahan Kimia Berbahaya)
 *   - PP No. 50 Tahun 2012 tentang Penerapan SMK3
 * Unverified claims (jadwal, biaya, akreditasi) deliberately omitted.
 * Content review date: 2026-10-20
 */

return [

    // ─────────────────────────────────────────────────────────────────────────
    // SERTIFIKASI & PELATIHAN
    // ─────────────────────────────────────────────────────────────────────────

    'training-ahli-k3-umum' => [
        'slug'              => 'training-ahli-k3-umum',
        'category'          => 'training',
        'category_label'    => 'Sertifikasi & Pelatihan',
        'level'             => 'Ahli K3 Umum',
        'title'             => 'Training Ahli K3 Umum',
        'badge'             => 'Permenaker No. 2/1992 — Ahli K3',
        'meta_title'        => 'Training Ahli K3 Umum | Sertifikasi BNSP & Kemnaker',
        'meta_description'  => 'Program training Ahli K3 Umum sesuai Permenaker No. 2/1992. Persiapan uji kompetensi BNSP, penguasaan SMK3 PP 50/2012, identifikasi bahaya, dan manajemen risiko industri.',
        'hero_heading'      => 'Training',
        'hero_highlight'    => 'Ahli K3 Umum',
        'hero_subheading'   => 'Program pembinaan kompetensi Keselamatan dan Kesehatan Kerja (K3) Umum yang mempersiapkan peserta memenuhi persyaratan penunjukan Ahli K3 sesuai ketentuan yang berlaku, dengan penguasaan SMK3 dan manajemen risiko tempat kerja.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai jadwal dan persyaratan Training Ahli K3 Umum.',
        'introduction'      => 'Training Ahli K3 Umum dirancang untuk membekali profesional dengan pengetahuan dan keterampilan keselamatan dan kesehatan kerja yang komprehensif. Peserta mempelajari dasar hukum K3 (UU No. 1/1970), penerapan Sistem Manajemen K3 (SMK3) sesuai PP No. 50/2012, teknik identifikasi bahaya dan penilaian risiko, serta prosedur tanggap darurat dan investigasi kecelakaan kerja. Program ini merupakan langkah awal bagi profesional yang ingin berkarir sebagai Ahli K3 di berbagai sektor industri.',
        'target_audience'   => [
            'Supervisor, manajer, dan staf HSE di perusahaan manufaktur, konstruksi, pertambangan, dan jasa.',
            'Calon Ahli K3 yang ingin mempersiapkan diri untuk penunjukan resmi sesuai regulasi Kemnaker.',
            'Tenaga teknis yang bertanggung jawab atas keselamatan dan kesehatan kerja di tempat kerja.',
            'Profesional yang ingin meningkatkan kompetensi K3 sesuai standar nasional.',
        ],
        'roles_and_responsibilities' => [
            [
                'title'       => 'Identifikasi Bahaya & Penilaian Risiko K3',
                'description' => 'Menerapkan metode identifikasi bahaya (HIRADC/JSA), melakukan penilaian risiko, dan menyusun pengendalian risiko secara hierarkis.',
            ],
            [
                'title'       => 'Penerapan SMK3 sesuai PP No. 50/2012',
                'description' => 'Memahami dan menerapkan 12 elemen SMK3, menyusun kebijakan K3, dan mendukung audit internal maupun eksternal.',
            ],
            [
                'title'       => 'Pemantauan & Pengukuran Kinerja K3',
                'description' => 'Melaksanakan inspeksi rutin, pengukuran lingkungan kerja (kebisingan, pencahayaan, debu), dan pelaporan insiden.',
            ],
        ],
        'curriculum_topics' => [
            'Dasar Hukum K3: UU No. 1/1970 dan peraturan turunannya',
            'Penerapan Sistem Manajemen K3 (SMK3) — PP No. 50 Tahun 2012',
            'Identifikasi Bahaya, Penilaian, dan Pengendalian Risiko (HIRADC/JSA)',
            'Alat Pelindung Diri (APD): pemilihan, penggunaan, dan pemeliharaan',
            'K3 Konstruksi, Listrik, dan Kebakaran',
            'Higiene Industri dan Kesehatan Kerja',
            'Ergonomi dan Psikologi K3',
            'Pemantauan Lingkungan Kerja (kebisingan, pencahayaan, debu, kimia)',
            'Penanganan Bahan Kimia Berbahaya di Tempat Kerja',
            'Investigasi Kecelakaan dan Penyakit Akibat Kerja',
            'Tanggap Darurat, Evakuasi, dan Pertolongan Pertama',
            'Inspeksi K3 dan Audit Internal SMK3',
            'Komunikasi, Pelaporan, dan Budaya K3',
        ],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Pelatihan',      'status' => 'Hubungi kami', 'detail' => 'Jadwal batch reguler dan pelatihan in-house dikonfirmasi langsung melalui konsultasi.'],
            'durasi'     => ['label' => 'Durasi Program',        'status' => 'Perlu verifikasi', 'detail' => 'Durasi dan moda pelatihan (daring/luring/blended) dikonfirmasi sesuai kebutuhan penyelenggara resmi.'],
            'investasi'  => ['label' => 'Investasi Biaya',       'status' => 'Hubungi kami', 'detail' => 'Biaya pelatihan tidak dipublikasikan. Hubungi kami untuk penawaran resmi.'],
            'persyaratan'=> ['label' => 'Persyaratan Peserta',   'status' => 'Perlu verifikasi', 'detail' => 'Persyaratan akademis dan pengalaman kerja sesuai ketentuan penyelenggara resmi yang berwenang.'],
            'otorisasi'  => ['label' => 'Regulasi & Otorisasi',  'status' => 'Perlu verifikasi', 'detail' => 'Penunjukan Ahli K3 diatur oleh Kemnaker sesuai Permenaker No. 2/1992. Verifikasi status lembaga penyelenggara kepada pihak berwenang.'],
        ],
        'faqs' => [
            [
                'question' => 'Apa itu Ahli K3 Umum dan apa dasar hukumnya?',
                'answer'   => 'Ahli K3 Umum adalah tenaga teknis yang memiliki keahlian khusus di bidang K3 dan ditunjuk oleh Menteri untuk membantu pengawasan K3 di tempat kerja, sesuai UU No. 1/1970 dan Permenaker No. 2/1992. Penunjukan dilakukan oleh Kemnaker berdasarkan persyaratan yang ditetapkan.',
            ],
            [
                'question' => 'Apa perbedaan training K3 umum dengan penunjukan resmi Ahli K3?',
                'answer'   => 'Training K3 Umum adalah program pembinaan kompetensi yang mempersiapkan peserta. Penunjukan Ahli K3 merupakan keputusan administratif dari Kemnaker berdasarkan persyaratan, termasuk pendidikan, pengalaman, dan uji kompetensi. Konsultasikan persyaratan terkini langsung ke penyelenggara resmi yang berwenang.',
            ],
            [
                'question' => 'Apakah training ini menjamin kelulusan atau penunjukan Ahli K3?',
                'answer'   => 'Tidak. Program ini adalah pembinaan kompetensi, bukan jaminan kelulusan atau penunjukan. Penunjukan Ahli K3 sepenuhnya menjadi kewenangan Kemnaker. Kami tidak menjanjikan jaminan lulus atau penunjukan.',
            ],
            [
                'question' => 'Industri apa yang membutuhkan Ahli K3 Umum?',
                'answer'   => 'Berdasarkan UU No. 1/1970, perusahaan yang mempekerjakan 100 atau lebih tenaga kerja, atau yang memiliki risiko bahaya tinggi, wajib memiliki Ahli K3. Ini mencakup manufaktur, konstruksi, pertambangan, minyak dan gas, dan sektor jasa tertentu. Verifikasi kewajiban spesifik ke Disnaker setempat.',
            ],
        ],
    ],

    'training-k3-konstruksi' => [
        'slug'              => 'training-k3-konstruksi',
        'category'          => 'training',
        'category_label'    => 'Sertifikasi & Pelatihan',
        'level'             => 'Spesialisasi K3',
        'title'             => 'Training K3 Konstruksi',
        'badge'             => 'Permenaker No. 1/1980 — K3 Konstruksi',
        'meta_title'        => 'Training K3 Konstruksi | Keselamatan Proyek Bangunan',
        'meta_description'  => 'Training K3 Konstruksi untuk officer HSE, pelaksana, dan mandor proyek. Identifikasi bahaya konstruksi, perlindungan pekerja, dan kepatuhan regulasi K3 bangunan.',
        'hero_heading'      => 'Training K3',
        'hero_highlight'    => 'Konstruksi',
        'hero_subheading'   => 'Pembinaan kompetensi K3 khusus sektor konstruksi, mencakup identifikasi bahaya ketinggian, scaffolding, peralatan berat, dan pengelolaan keselamatan proyek sesuai Permenaker No. 1/1980 dan Permenaker No. 9/2016.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Training K3 Konstruksi.',
        'introduction'      => 'Training K3 Konstruksi dirancang untuk profesional di sektor bangunan dan infrastruktur yang perlu memahami risiko spesifik konstruksi: pekerjaan di ketinggian, galian, scaffolding, listrik sementara, dan pengangkatan. Materi mengacu pada Permenaker No. 1/1980 tentang K3 pada Konstruksi Bangunan dan regulasi terkait.',
        'target_audience'   => [
            'Officer HSE, pelaksana, dan mandor proyek konstruksi dan infrastruktur.',
            'Kontraktor dan subkontraktor yang membutuhkan penguatan K3 di lapangan.',
            'Tenaga teknis yang akan bertugas sebagai penanggung jawab K3 di proyek.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Identifikasi Bahaya Pekerjaan Ketinggian', 'description' => 'Memahami risiko jatuh dari ketinggian, persyaratan harness, dan prosedur perlindungan tepi.'],
            ['title' => 'Inspeksi Scaffolding & Peralatan Berat', 'description' => 'Melakukan inspeksi scaffolding, crane, dan alat angkut sesuai standar Permenaker yang berlaku.'],
            ['title' => 'Pengelolaan K3 Proyek', 'description' => 'Menyusun Rencana K3 Kontrak (RK3K) dan memimpin safety briefing harian di lapangan.'],
        ],
        'curriculum_topics' => [
            'Regulasi K3 Konstruksi: Permenaker No. 1/1980 dan Permenaker No. 9/2016',
            'Identifikasi Bahaya dan Penilaian Risiko Konstruksi (Job Safety Analysis)',
            'K3 Pekerjaan di Ketinggian dan Prosedur Perlindungan Jatuh',
            'K3 Scaffolding, Perancah, dan Bekisting',
            'K3 Pengoperasian Crane, Forklift, dan Alat Berat',
            'Keselamatan Galian, Terowongan, dan Pondasi',
            'Keselamatan Listrik Sementara di Proyek',
            'Alat Pelindung Diri untuk Konstruksi',
            'Penanganan Material Berbahaya di Konstruksi',
            'Penyusunan Rencana K3 Kontrak (RK3K)',
            'Investigasi Insiden dan Pelaporan K3 Konstruksi',
            'Komunikasi K3 dan Safety Meeting di Lapangan',
        ],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Pelatihan', 'status' => 'Hubungi kami', 'detail' => 'Jadwal batch reguler dan in-house dikonfirmasi melalui konsultasi.'],
            'durasi'     => ['label' => 'Durasi Program',   'status' => 'Perlu verifikasi', 'detail' => 'Durasi dikonfirmasi sesuai modul yang dipilih.'],
            'investasi'  => ['label' => 'Investasi Biaya',  'status' => 'Hubungi kami', 'detail' => 'Hubungi kami untuk penawaran resmi.'],
            'persyaratan'=> ['label' => 'Persyaratan Peserta', 'status' => 'Perlu verifikasi', 'detail' => 'Persyaratan dikonfirmasi ke penyelenggara resmi.'],
            'otorisasi'  => ['label' => 'Regulasi & Otorisasi', 'status' => 'Perlu verifikasi', 'detail' => 'Merujuk pada ketentuan Kemnaker terkait K3 Konstruksi.'],
        ],
        'faqs' => [
            [
                'question' => 'Mengapa K3 konstruksi diatur secara khusus?',
                'answer'   => 'Sektor konstruksi memiliki risiko kecelakaan yang tinggi, termasuk jatuh dari ketinggian, tertimpa material, dan kecelakaan alat berat. Permenaker No. 1/1980 mengatur K3 pada konstruksi bangunan sebagai respons atas risiko spesifik ini.',
            ],
            [
                'question' => 'Siapa yang wajib memiliki kompetensi K3 di proyek konstruksi?',
                'answer'   => 'Peraturan perundangan mewajibkan kontraktor yang mengerjakan proyek di atas nilai atau ukuran tertentu untuk memiliki petugas K3 atau Ahli K3 di proyek. Verifikasi kewajiban spesifik ke Disnaker atau dinas terkait di wilayah Anda.',
            ],
        ],
    ],

    'training-k3-kimia' => [
        'slug'              => 'training-k3-kimia',
        'category'          => 'training',
        'category_label'    => 'Sertifikasi & Pelatihan',
        'level'             => 'Spesialisasi K3',
        'title'             => 'Training K3 Kimia & Bahan Berbahaya',
        'badge'             => 'Kepmenaker No. 187/1999 — K3 Kimia',
        'meta_title'        => 'Training K3 Kimia & Bahan Berbahaya | Kepmenaker 187/1999',
        'meta_description'  => 'Training K3 penanganan bahan kimia berbahaya di industri. MSDS/SDS, penyimpanan, APD kimia, tanggap darurat tumpahan, dan kepatuhan Kepmenaker No. 187/1999.',
        'hero_heading'      => 'Training K3',
        'hero_highlight'    => 'Kimia & Bahan Berbahaya',
        'hero_subheading'   => 'Pembinaan kompetensi K3 penanganan bahan kimia berbahaya di tempat kerja, mencakup identifikasi bahaya bahan kimia, MSDS/SDS, prosedur penyimpanan aman, APD kimia, dan tanggap darurat tumpahan sesuai Kepmenaker No. 187/1999.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Training K3 Kimia dan Bahan Berbahaya.',
        'introduction'      => 'Training K3 Kimia dan Bahan Berbahaya membekali profesional dengan pengetahuan pengelolaan keselamatan bahan kimia berbahaya di tempat kerja. Materi mencakup pemahaman MSDS/SDS, klasifikasi bahaya (GHS), penyimpanan dan penanganan aman, pemilihan APD yang tepat, serta respons darurat tumpahan kimia sesuai Kepmenaker No. 187/1999.',
        'target_audience'   => [
            'Supervisor dan staf HSE di industri kimia, farmasi, dan manufaktur yang menggunakan bahan kimia berbahaya.',
            'Operator dan teknisi yang bekerja langsung dengan bahan kimia berbahaya.',
            'Petugas K3 yang bertanggung jawab atas pengelolaan bahan kimia di fasilitas industri.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Pengelolaan MSDS/SDS & Inventaris Kimia', 'description' => 'Memahami dan mengelola Material Safety Data Sheet untuk setiap bahan kimia berbahaya di tempat kerja.'],
            ['title' => 'Prosedur Penyimpanan Aman Bahan Kimia', 'description' => 'Menerapkan sistem penyimpanan yang aman, segregasi bahan incompatible, dan kontrol inventaris.'],
            ['title' => 'Tanggap Darurat Tumpahan & Kebocoran Kimia', 'description' => 'Melaksanakan prosedur respons darurat tumpahan bahan kimia berbahaya secara aman dan efektif.'],
        ],
        'curriculum_topics' => [
            'Dasar Hukum K3 Kimia: Kepmenaker No. 187/1999 dan ketentuan terkait',
            'Klasifikasi Bahaya Bahan Kimia: Sistem GHS/SDS/MSDS',
            'Identifikasi Bahaya dan Penilaian Risiko Kimia',
            'Penyimpanan dan Penanganan Aman Bahan Kimia Berbahaya',
            'Pemilihan dan Penggunaan APD untuk Pekerjaan Kimia',
            'Hygiene Industri dan Pemantauan Paparan Bahan Kimia',
            'Prosedur Tanggap Darurat Tumpahan dan Kebocoran Kimia',
            'Pengelolaan Sisa/Limbah Bahan Kimia di Tempat Kerja',
            'Komunikasi Bahaya: Label, Simbol, dan Signage K3 Kimia',
            'Investigasi Insiden Terkait Bahan Kimia',
        ],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Pelatihan', 'status' => 'Hubungi kami', 'detail' => 'Jadwal batch reguler dikonfirmasi melalui konsultasi.'],
            'durasi'     => ['label' => 'Durasi Program',   'status' => 'Perlu verifikasi', 'detail' => 'Durasi dikonfirmasi ke penyelenggara resmi.'],
            'investasi'  => ['label' => 'Investasi Biaya',  'status' => 'Hubungi kami', 'detail' => 'Hubungi kami untuk penawaran resmi.'],
            'persyaratan'=> ['label' => 'Persyaratan Peserta', 'status' => 'Perlu verifikasi', 'detail' => 'Persyaratan dikonfirmasi ke penyelenggara.'],
            'otorisasi'  => ['label' => 'Regulasi & Otorisasi', 'status' => 'Perlu verifikasi', 'detail' => 'Merujuk Kepmenaker No. 187/1999. Verifikasi status lembaga penyelenggara ke Kemnaker.'],
        ],
        'faqs' => [
            [
                'question' => 'Apa kewajiban perusahaan terkait bahan kimia berbahaya menurut Kepmenaker 187/1999?',
                'answer'   => 'Kepmenaker No. 187/1999 mewajibkan pengusaha yang memproduksi, menggunakan, atau menyimpan bahan kimia berbahaya untuk menyediakan MSDS, membuat daftar bahan kimia, menerapkan sistem label, dan memiliki petugas K3 yang kompeten. Verifikasi persyaratan spesifik ke Disnaker setempat.',
            ],
        ],
    ],

    'training-k3-kebakaran' => [
        'slug'              => 'training-k3-kebakaran',
        'category'          => 'training',
        'category_label'    => 'Sertifikasi & Pelatihan',
        'level'             => 'Spesialisasi K3',
        'title'             => 'Training K3 Kebakaran & Tanggap Darurat',
        'badge'             => 'Permenaker No. 4/1980 — K3 Kebakaran',
        'meta_title'        => 'Training K3 Kebakaran & Tanggap Darurat | Pencegahan & Penanggulangan',
        'meta_description'  => 'Training K3 kebakaran dan tanggap darurat industri. Teori api, APAR, hydrant, evakuasi, dan pembentukan Tim Pemadam Kebakaran (TPK) sesuai Permenaker No. 4/1980.',
        'hero_heading'      => 'Training K3',
        'hero_highlight'    => 'Kebakaran & Tanggap Darurat',
        'hero_subheading'   => 'Pembinaan kompetensi pencegahan dan penanggulangan kebakaran di tempat kerja, mencakup teori api, pengoperasian APAR dan hydrant, evakuasi, dan pembentukan Tim Pemadam Kebakaran Tingkat I sesuai Permenaker No. 4/1980.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Training K3 Kebakaran dan Tanggap Darurat.',
        'introduction'      => 'Training K3 Kebakaran dan Tanggap Darurat memberikan pengetahuan teoritis dan praktis pencegahan dan penanggulangan kebakaran di tempat kerja. Peserta memahami teori api (segitiga api), klasifikasi kebakaran, teknik penggunaan APAR dan hydrant, prosedur evakuasi darurat, dan peran Tim Pemadam Kebakaran sesuai Permenaker No. 4/1980.',
        'target_audience'   => [
            'Petugas K3 dan staf HSE yang bertanggung jawab atas kesiapsiagaan kebakaran.',
            'Anggota Tim Pemadam Kebakaran (TPK) internal perusahaan.',
            'Supervisor dan manajer yang perlu memahami prosedur tanggap darurat.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Inspeksi & Pemeliharaan APAR', 'description' => 'Melakukan inspeksi rutin, pencatatan, dan koordinasi pemeliharaan Alat Pemadam Api Ringan di area kerja.'],
            ['title' => 'Pemimpin Evakuasi Darurat', 'description' => 'Memimpin prosedur evakuasi darurat, memastikan semua personel terhitung, dan berkoordinasi dengan petugas terkait.'],
            ['title' => 'Anggota Tim Pemadam Kebakaran', 'description' => 'Mengoperasikan peralatan pemadam kebakaran dan mendukung pemadaman api tahap awal secara aman.'],
        ],
        'curriculum_topics' => [
            'Dasar Hukum K3 Kebakaran: Permenaker No. 4/1980 dan ketentuan terkait',
            'Teori Kebakaran: Segitiga Api, Kelas Kebakaran, dan Mekanisme Pemadaman',
            'Pencegahan Kebakaran dan Identifikasi Sumber Penyalaan',
            'Alat Pemadam Api Ringan (APAR): Jenis, Penggunaan, dan Pemeliharaan',
            'Sistem Hydrant, Sprinkler, dan Instalasi Pemadam Tetap',
            'Prosedur Evakuasi Darurat dan Assembly Point',
            'Pembentukan dan Pelatihan Tim Pemadam Kebakaran (TPK)',
            'Sistem Deteksi Kebakaran: Alarm, Detektor Asap, dan Panas',
            'Pemadaman Api Tahap Awal yang Aman',
            'Investigasi Insiden Kebakaran dan Pelaporan',
        ],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Pelatihan', 'status' => 'Hubungi kami', 'detail' => 'Jadwal batch dan in-house dikonfirmasi melalui konsultasi.'],
            'durasi'     => ['label' => 'Durasi Program',   'status' => 'Perlu verifikasi', 'detail' => 'Durasi termasuk sesi praktik dikonfirmasi ke penyelenggara.'],
            'investasi'  => ['label' => 'Investasi Biaya',  'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi melalui penawaran resmi.'],
            'persyaratan'=> ['label' => 'Persyaratan Peserta', 'status' => 'Perlu verifikasi', 'detail' => 'Persyaratan dikonfirmasi ke penyelenggara resmi.'],
            'otorisasi'  => ['label' => 'Regulasi & Otorisasi', 'status' => 'Perlu verifikasi', 'detail' => 'Merujuk Permenaker No. 4/1980 dan ketentuan terkait K3 Kebakaran.'],
        ],
        'faqs' => [
            [
                'question' => 'Apa kewajiban perusahaan terkait K3 Kebakaran?',
                'answer'   => 'Permenaker No. 4/1980 mewajibkan pemasangan APAR di tempat kerja sesuai klasifikasi risiko kebakaran. Perusahaan dengan risiko kebakaran tinggi wajib membentuk Tim Pemadam Kebakaran. Verifikasi kewajiban spesifik ke Disnaker atau Dinas Pemadam Kebakaran setempat.',
            ],
        ],
    ],

    'training-p3k-di-tempat-kerja' => [
        'slug'              => 'training-p3k-di-tempat-kerja',
        'category'          => 'training',
        'category_label'    => 'Sertifikasi & Pelatihan',
        'level'             => 'Kompetensi K3',
        'title'             => 'Training Petugas P3K di Tempat Kerja',
        'badge'             => 'Permenaker No. 15/2008 — Petugas P3K',
        'meta_title'        => 'Training Petugas P3K Tempat Kerja | Permenaker No. 15/2008',
        'meta_description'  => 'Training Petugas Pertolongan Pertama pada Kecelakaan (P3K) di tempat kerja sesuai Permenaker No. 15/2008. RJP, penanganan luka, penanganan patah tulang, dan prosedur evakuasi.',
        'hero_heading'      => 'Training Petugas',
        'hero_highlight'    => 'P3K di Tempat Kerja',
        'hero_subheading'   => 'Pembinaan kompetensi pertolongan pertama pada kecelakaan (P3K) untuk petugas di tempat kerja sesuai Permenaker No. 15/2008, mencakup RJP, penanganan luka, penanganan kedaruratan medis awal, dan penggunaan kotak P3K.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Training Petugas P3K di Tempat Kerja.',
        'introduction'      => 'Training Petugas P3K di Tempat Kerja membekali peserta dengan kemampuan memberikan pertolongan pertama yang efektif sebelum bantuan medis profesional tiba. Program mengacu pada Permenaker No. 15/2008 tentang Pertolongan Pertama pada Kecelakaan di Tempat Kerja, mencakup Resusitasi Jantung Paru (RJP), penanganan luka, patah tulang, sengatan panas, dan pengelolaan kotak P3K.',
        'target_audience'   => [
            'Karyawan yang akan ditunjuk sebagai Petugas P3K di tempat kerja.',
            'Supervisor dan staf HSE yang bertanggung jawab atas kesiapsiagaan medis dasar.',
            'Anggota Tim Tanggap Darurat yang membutuhkan kompetensi P3K.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Resusitasi Jantung Paru (RJP/CPR)', 'description' => 'Melaksanakan teknik RJP yang benar pada korban henti napas atau henti jantung di tempat kerja.'],
            ['title' => 'Penanganan Luka, Perdarahan & Patah Tulang', 'description' => 'Memberikan pertolongan pertama pada luka terbuka, perdarahan, patah tulang, dan trauma sebelum bantuan medis tiba.'],
            ['title' => 'Pengelolaan Kotak P3K & Inventaris', 'description' => 'Memelihara kelengkapan kotak P3K, memastikan ketersediaan perlengkapan, dan mendokumentasikan penggunaan.'],
        ],
        'curriculum_topics' => [
            'Dasar Hukum P3K di Tempat Kerja: Permenaker No. 15/2008',
            'Prinsip Dasar Pertolongan Pertama dan Chain of Survival',
            'Penilaian Korban: Kesadaran, Napas, dan Nadi',
            'Resusitasi Jantung Paru (RJP/CPR) dan Penggunaan AED',
            'Penanganan Tersedak (Heimlich Maneuver)',
            'Penanganan Luka Terbuka, Perdarahan, dan Pembidaian',
            'Penanganan Patah Tulang, Dislokasi, dan Cedera Sendi',
            'Penanganan Sengatan Panas, Hipotermia, dan Pingsan',
            'Penanganan Kecelakaan Listrik dan Luka Bakar',
            'Penanganan Keracunan dan Paparan Bahan Kimia',
            'Transportasi dan Evakuasi Korban yang Aman',
            'Pengelolaan Kotak P3K: Standar Isi dan Pemeliharaan',
        ],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Pelatihan', 'status' => 'Hubungi kami', 'detail' => 'Jadwal batch reguler dan in-house dikonfirmasi melalui konsultasi.'],
            'durasi'     => ['label' => 'Durasi Program',   'status' => 'Perlu verifikasi', 'detail' => 'Termasuk sesi praktik simulasi. Dikonfirmasi ke penyelenggara resmi.'],
            'investasi'  => ['label' => 'Investasi Biaya',  'status' => 'Hubungi kami', 'detail' => 'Hubungi kami untuk penawaran resmi.'],
            'persyaratan'=> ['label' => 'Persyaratan Peserta', 'status' => 'Perlu verifikasi', 'detail' => 'Persyaratan dikonfirmasi ke penyelenggara resmi.'],
            'otorisasi'  => ['label' => 'Regulasi & Otorisasi', 'status' => 'Perlu verifikasi', 'detail' => 'Merujuk Permenaker No. 15/2008. Verifikasi status lembaga penyelenggara ke Kemnaker.'],
        ],
        'faqs' => [
            [
                'question' => 'Berapa jumlah Petugas P3K yang wajib dimiliki perusahaan?',
                'answer'   => 'Permenaker No. 15/2008 mengatur rasio petugas P3K berdasarkan jumlah karyawan dan tingkat risiko tempat kerja. Misalnya, untuk tempat kerja dengan risiko rendah diperlukan minimal 1 petugas P3K per 150 karyawan. Verifikasi rasio spesifik ke Disnaker setempat.',
            ],
        ],
    ],

    // ─────────────────────────────────────────────────────────────────────────
    // JASA KONSULTANSI & PENGUJIAN K3
    // ─────────────────────────────────────────────────────────────────────────

    'jasa-audit-smk3' => [
        'slug'              => 'jasa-audit-smk3',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Konsultansi',
        'title'             => 'Jasa Audit & Penyusunan SMK3 (PP 50/2012)',
        'badge'             => 'PP No. 50 Tahun 2012 — SMK3',
        'meta_title'        => 'Jasa Audit & Penyusunan SMK3 | PP No. 50/2012',
        'meta_description'  => 'Layanan konsultansi audit internal dan penyusunan Sistem Manajemen K3 (SMK3) sesuai PP No. 50/2012. Gap analysis, dokumentasi kebijakan K3, dan persiapan audit eksternal.',
        'hero_heading'      => 'Jasa Audit &',
        'hero_highlight'    => 'Penyusunan SMK3',
        'hero_subheading'   => 'Layanan konsultansi penyusunan, implementasi, dan audit Sistem Manajemen K3 (SMK3) sesuai PP No. 50/2012, mencakup gap analysis, penyusunan dokumen kebijakan K3, dan pendampingan persiapan audit eksternal.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Audit dan Penyusunan SMK3.',
        'introduction'      => 'Layanan konsultansi SMK3 membantu perusahaan membangun, mengimplementasikan, dan mengaudit Sistem Manajemen K3 sesuai PP No. 50/2012. Kami melakukan gap analysis terhadap kondisi eksisting, menyusun dokumen kebijakan dan prosedur K3, dan mendampingi persiapan audit eksternal oleh lembaga audit SMK3 yang berwenang.',
        'target_audience'   => [
            'Perusahaan yang diwajibkan menerapkan SMK3 berdasarkan PP No. 50/2012.',
            'Manajemen dan departemen HSE yang ingin meningkatkan sistem K3 perusahaan.',
            'Perusahaan yang sedang mempersiapkan audit SMK3 eksternal.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Gap Analysis SMK3', 'description' => 'Menilai kondisi eksisting K3 perusahaan terhadap 12 elemen SMK3 dan mengidentifikasi area yang perlu perbaikan.'],
            ['title' => 'Penyusunan Dokumen Kebijakan & Prosedur K3', 'description' => 'Menyusun kebijakan K3, prosedur operasional, instruksi kerja, dan formulir K3 yang sesuai persyaratan SMK3.'],
            ['title' => 'Pendampingan Implementasi & Audit Internal', 'description' => 'Mendampingi implementasi SMK3 dan melakukan audit internal sebelum audit eksternal oleh lembaga yang berwenang.'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Konsultansi', 'status' => 'Fleksibel', 'detail' => 'Jadwal konsultansi disesuaikan dengan kebutuhan dan ketersediaan klien.'],
            'durasi'     => ['label' => 'Durasi Layanan',     'status' => 'Tergantung skala', 'detail' => 'Durasi layanan bergantung pada skala perusahaan dan kompleksitas sistem K3.'],
            'investasi'  => ['label' => 'Biaya Layanan',      'status' => 'Hubungi kami', 'detail' => 'Biaya layanan dikonfirmasi berdasarkan scope pekerjaan yang disepakati.'],
            'persyaratan'=> ['label' => 'Persyaratan Layanan', 'status' => 'Hubungi kami', 'detail' => 'Data perusahaan dan kondisi eksisting K3 diperlukan untuk gap analysis awal.'],
            'otorisasi'  => ['label' => 'Regulasi', 'status' => 'Perlu verifikasi', 'detail' => 'Audit SMK3 formal dilakukan oleh lembaga audit yang telah ditunjuk Kemnaker. Kami menyediakan layanan konsultansi persiapan.'],
        ],
        'faqs' => [
            [
                'question' => 'Perusahaan mana yang wajib menerapkan SMK3?',
                'answer'   => 'PP No. 50/2012 mewajibkan SMK3 bagi perusahaan yang mempekerjakan minimal 100 tenaga kerja atau yang memiliki tingkat potensi bahaya tinggi. Perusahaan dengan kurang dari 100 tenaga kerja juga dianjurkan menerapkan SMK3. Verifikasi kewajiban spesifik ke Disnaker setempat.',
            ],
        ],
    ],

    'jasa-identifikasi-bahaya-hiradc' => [
        'slug'              => 'jasa-identifikasi-bahaya-hiradc',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Konsultansi',
        'title'             => 'Jasa Identifikasi Bahaya & HIRADC',
        'badge'             => 'HIRADC / JSA — Manajemen Risiko K3',
        'meta_title'        => 'Jasa Identifikasi Bahaya HIRADC & JSA | Penilaian Risiko K3',
        'meta_description'  => 'Layanan penyusunan HIRADC (Hazard Identification, Risk Assessment & Determining Control) dan Job Safety Analysis (JSA) untuk industri. Identifikasi bahaya, penilaian risiko, dan hierarki pengendalian.',
        'hero_heading'      => 'Jasa Identifikasi Bahaya',
        'hero_highlight'    => '& Penilaian Risiko',
        'hero_subheading'   => 'Layanan konsultansi penyusunan Hazard Identification, Risk Assessment, and Determining Control (HIRADC) dan Job Safety Analysis (JSA) untuk mengidentifikasi bahaya, menilai risiko, dan menentukan pengendalian yang tepat di tempat kerja.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Identifikasi Bahaya dan HIRADC.',
        'introduction'      => 'Layanan identifikasi bahaya dan penilaian risiko membantu perusahaan menyusun dokumen HIRADC dan JSA yang komprehensif. Proses mencakup observasi lapangan, analisis tugas kritis, penilaian paparan dan kemungkinan, penetapan level risiko, dan rekomendasi hierarki pengendalian (eliminasi, substitusi, rekayasa, administratif, APD).',
        'target_audience'   => [
            'Perusahaan yang mewajibkan dokumentasi HIRADC sebagai bagian dari sistem K3.',
            'Departemen HSE yang membutuhkan pendampingan penyusunan analisis risiko.',
            'Proyek konstruksi dan industri yang membutuhkan JSA untuk pekerjaan kritis.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Observasi Lapangan & Inventarisasi Bahaya', 'description' => 'Melakukan observasi langsung di tempat kerja untuk mengidentifikasi seluruh bahaya potensial.'],
            ['title' => 'Penilaian Risiko & Penetapan Level Prioritas', 'description' => 'Menganalisis kombinasi likelihood dan severity untuk menetapkan level risiko dan prioritas pengendalian.'],
            ['title' => 'Rekomendasi Hierarki Pengendalian', 'description' => 'Menyusun rekomendasi pengendalian sesuai hierarki (eliminasi → substitusi → rekayasa → administratif → APD).'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Layanan',  'status' => 'Fleksibel', 'detail' => 'Jadwal disesuaikan dengan kebutuhan klien.'],
            'durasi'     => ['label' => 'Durasi Layanan',  'status' => 'Tergantung skala', 'detail' => 'Bergantung pada jumlah area/pekerjaan yang dianalisis.'],
            'investasi'  => ['label' => 'Biaya Layanan',   'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi berdasarkan scope pekerjaan.'],
            'persyaratan'=> ['label' => 'Kebutuhan Data',  'status' => 'Hubungi kami', 'detail' => 'Diperlukan data proses produksi dan layout fasilitas untuk analisis awal.'],
            'otorisasi'  => ['label' => 'Standar Referensi', 'status' => 'Perlu verifikasi', 'detail' => 'HIRADC mengacu pada standar manajemen risiko yang diterima secara luas. Verifikasi persyaratan spesifik ke Disnaker.'],
        ],
        'faqs' => [
            [
                'question' => 'Apa perbedaan HIRADC dan JSA?',
                'answer'   => 'HIRADC (Hazard Identification, Risk Assessment & Determining Control) adalah dokumen penilaian risiko tingkat fasilitas yang komprehensif. JSA (Job Safety Analysis) lebih spesifik pada tugas atau pekerjaan tertentu, menganalisis setiap langkah kerja untuk mengidentifikasi bahaya dan pengendaliannya. Keduanya saling melengkapi dalam sistem manajemen K3.',
            ],
        ],
    ],

    'jasa-pengukuran-lingkungan-kerja' => [
        'slug'              => 'jasa-pengukuran-lingkungan-kerja',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Teknis',
        'title'             => 'Jasa Pengukuran & Pemantauan Lingkungan Kerja',
        'badge'             => 'Permenaker No. 5/2018 — Lingkungan Kerja',
        'meta_title'        => 'Jasa Pengukuran Lingkungan Kerja | Kebisingan, Pencahayaan, Debu',
        'meta_description'  => 'Layanan pengukuran dan pemantauan faktor fisika dan kimia lingkungan kerja: kebisingan, pencahayaan, getaran, iklim kerja, dan debu sesuai Permenaker No. 5/2018.',
        'hero_heading'      => 'Jasa Pengukuran',
        'hero_highlight'    => 'Lingkungan Kerja',
        'hero_subheading'   => 'Layanan pengukuran dan pemantauan faktor fisika dan kimia di lingkungan kerja meliputi kebisingan, pencahayaan, getaran, iklim kerja (suhu, kelembaban, ISBB), dan debu sesuai Permenaker No. 5/2018 dan nilai ambang batas (NAB) yang berlaku.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Pengukuran Lingkungan Kerja.',
        'introduction'      => 'Layanan pengukuran lingkungan kerja membantu perusahaan memenuhi kewajiban pemantauan faktor bahaya fisika dan kimia sesuai Permenaker No. 5/2018 tentang Keselamatan dan Kesehatan Kerja Lingkungan Kerja. Pengukuran meliputi kebisingan, pencahayaan, getaran, iklim kerja (ISBB), dan kadar debu serta bahan kimia, dibandingkan dengan Nilai Ambang Batas (NAB) yang ditetapkan.',
        'target_audience'   => [
            'Perusahaan yang diwajibkan melakukan pengukuran lingkungan kerja secara berkala.',
            'Departemen HSE yang membutuhkan data baseline faktor bahaya lingkungan kerja.',
            'Fasilitas industri yang memperlukan penilaian pajanan kerja (occupational exposure assessment).',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Pengukuran Kebisingan, Pencahayaan & Getaran', 'description' => 'Melakukan pengukuran faktor fisika di area kerja menggunakan alat ukur yang terkalibrasi.'],
            ['title' => 'Pengukuran Iklim Kerja (ISBB) & Debu', 'description' => 'Mengukur Indeks Suhu Bola Basah (ISBB) dan kadar debu di area kerja sesuai NAB yang berlaku.'],
            ['title' => 'Laporan Hasil & Rekomendasi Pengendalian', 'description' => 'Menyajikan laporan pengukuran, perbandingan dengan NAB, dan rekomendasi pengendalian teknis atau administratif.'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Layanan',  'status' => 'Fleksibel', 'detail' => 'Jadwal pengukuran disesuaikan dengan jadwal operasional klien.'],
            'durasi'     => ['label' => 'Durasi Layanan',  'status' => 'Tergantung scope', 'detail' => 'Bergantung pada jumlah area dan parameter yang diukur.'],
            'investasi'  => ['label' => 'Biaya Layanan',   'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi berdasarkan scope pengukuran.'],
            'persyaratan'=> ['label' => 'Persyaratan',     'status' => 'Hubungi kami', 'detail' => 'Layout fasilitas dan daftar area kerja diperlukan untuk perencanaan.'],
            'otorisasi'  => ['label' => 'Regulasi',        'status' => 'Perlu verifikasi', 'detail' => 'Merujuk Permenaker No. 5/2018. Verifikasi persyaratan akreditasi lembaga pengujian ke instansi berwenang.'],
        ],
        'faqs' => [
            [
                'question' => 'Seberapa sering perusahaan wajib melakukan pengukuran lingkungan kerja?',
                'answer'   => 'Permenaker No. 5/2018 mengatur frekuensi pengukuran berdasarkan tingkat risiko faktor bahaya. Umumnya pengukuran dilakukan minimal sekali per tahun untuk faktor fisika, namun frekuensi dapat lebih tinggi untuk area dengan potensi bahaya tinggi. Verifikasi frekuensi spesifik ke Disnaker setempat.',
            ],
        ],
    ],

    'jasa-penyusunan-dokumen-k3' => [
        'slug'              => 'jasa-penyusunan-dokumen-k3',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Konsultansi',
        'title'             => 'Jasa Penyusunan Dokumen & Prosedur K3',
        'badge'             => 'PP No. 50/2012 — Dokumentasi K3',
        'meta_title'        => 'Jasa Penyusunan Dokumen K3 | Kebijakan, SOP & Prosedur Darurat',
        'meta_description'  => 'Layanan penyusunan dokumen dan prosedur K3 perusahaan: kebijakan K3, prosedur operasional standar, instruksi kerja, rencana tanggap darurat, dan formulir pelaporan insiden.',
        'hero_heading'      => 'Jasa Penyusunan',
        'hero_highlight'    => 'Dokumen & Prosedur K3',
        'hero_subheading'   => 'Layanan konsultansi penyusunan dokumentasi K3 yang komprehensif: kebijakan K3 perusahaan, prosedur operasional standar (SOP K3), instruksi kerja, rencana tanggap darurat, formulir inspeksi, dan pelaporan insiden sesuai persyaratan SMK3.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Penyusunan Dokumen dan Prosedur K3.',
        'introduction'      => 'Dokumentasi K3 yang baik adalah fondasi Sistem Manajemen K3 yang efektif. Layanan ini membantu perusahaan menyusun seluruh dokumen K3 yang diperlukan, mulai dari kebijakan K3 tingkat korporat, prosedur operasional standar, instruksi kerja keselamatan, rencana tanggap darurat, hingga formulir inspeksi dan pelaporan insiden, sesuai persyaratan PP No. 50/2012 dan standar yang berlaku.',
        'target_audience'   => [
            'Perusahaan yang baru membangun sistem K3 dan membutuhkan dokumentasi lengkap.',
            'Departemen HSE yang ingin memperbarui atau meningkatkan kualitas dokumen K3.',
            'Perusahaan yang mempersiapkan audit SMK3 dan membutuhkan kelengkapan dokumen.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Penyusunan Kebijakan K3 Perusahaan', 'description' => 'Membantu manajemen menyusun kebijakan K3 yang sesuai dengan visi, misi, dan risiko operasional perusahaan.'],
            ['title' => 'Penyusunan SOP & Instruksi Kerja K3', 'description' => 'Mendokumentasikan prosedur operasional standar dan instruksi kerja keselamatan untuk setiap area atau aktivitas berisiko.'],
            ['title' => 'Rencana Tanggap Darurat & Formulir K3', 'description' => 'Menyusun rencana tanggap darurat yang komprehensif dan formulir standar untuk inspeksi, audit, dan pelaporan insiden.'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Layanan',  'status' => 'Fleksibel', 'detail' => 'Jadwal penyusunan dikonfirmasi sesuai kebutuhan klien.'],
            'durasi'     => ['label' => 'Durasi Layanan',  'status' => 'Tergantung scope', 'detail' => 'Durasi bergantung pada jumlah dokumen yang perlu disusun.'],
            'investasi'  => ['label' => 'Biaya Layanan',   'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi berdasarkan jenis dan jumlah dokumen.'],
            'persyaratan'=> ['label' => 'Kebutuhan Data',  'status' => 'Hubungi kami', 'detail' => 'Diperlukan data operasional dan kebijakan internal perusahaan.'],
            'otorisasi'  => ['label' => 'Regulasi',        'status' => 'Perlu verifikasi', 'detail' => 'Dokumentasi K3 mengacu pada PP No. 50/2012 dan ketentuan Kemnaker yang berlaku.'],
        ],
        'faqs' => [
            [
                'question' => 'Dokumen K3 apa saja yang wajib dimiliki perusahaan?',
                'answer'   => 'PP No. 50/2012 mensyaratkan berbagai dokumen K3, termasuk kebijakan K3, tujuan dan program K3, prosedur identifikasi bahaya dan penilaian risiko, instruksi kerja keselamatan, prosedur tanggap darurat, dan rekaman hasil inspeksi dan insiden. Persyaratan lengkap bergantung pada skala dan kategori perusahaan.',
            ],
        ],
    ],

    'jasa-konsultansi-kecelakaan-kerja' => [
        'slug'              => 'jasa-konsultansi-kecelakaan-kerja',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Investigasi',
        'title'             => 'Jasa Investigasi & Analisis Kecelakaan Kerja',
        'badge'             => 'UU No. 1/1970 — Investigasi Insiden',
        'meta_title'        => 'Jasa Investigasi Kecelakaan Kerja | Analisis Root Cause & Rekomendasi',
        'meta_description'  => 'Layanan investigasi profesional kecelakaan kerja dan near-miss. Analisis akar penyebab (root cause analysis), penyusunan laporan insiden, dan rekomendasi pencegahan sesuai UU No. 1/1970.',
        'hero_heading'      => 'Jasa Investigasi',
        'hero_highlight'    => 'Kecelakaan Kerja',
        'hero_subheading'   => 'Layanan investigasi profesional kecelakaan kerja dan near-miss, mencakup analisis akar penyebab (root cause analysis), penyusunan laporan insiden sesuai regulasi, dan rekomendasi tindakan korektif dan preventif untuk mencegah pengulangan.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Investigasi dan Analisis Kecelakaan Kerja.',
        'introduction'      => 'Investigasi kecelakaan kerja yang efektif tidak hanya memenuhi kewajiban regulasi tetapi juga mengidentifikasi akar penyebab untuk mencegah pengulangan. Layanan ini menyediakan dukungan investigasi profesional, meliputi rekonstruksi kejadian, wawancara saksi, analisis faktor manusia dan teknis, penyusunan laporan sesuai UU No. 1/1970, dan rekomendasi CAPA (Corrective and Preventive Action).',
        'target_audience'   => [
            'Manajemen perusahaan yang menghadapi kecelakaan kerja dan membutuhkan investigasi independen.',
            'Departemen HSE yang memerlukan dukungan metodologi investigasi kecelakaan.',
            'Perusahaan yang perlu menyusun laporan kecelakaan kerja sesuai persyaratan regulasi.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Rekonstruksi Kejadian & Pengumpulan Bukti', 'description' => 'Melakukan rekonstruksi kronologi kecelakaan dan mengumpulkan bukti fisik serta dokumentasi.'],
            ['title' => 'Root Cause Analysis (RCA)', 'description' => 'Mengidentifikasi akar penyebab langsung, berkontribusi, dan sistemik menggunakan metode analisis yang terstruktur.'],
            ['title' => 'Laporan & Rekomendasi CAPA', 'description' => 'Menyusun laporan investigasi lengkap dan rekomendasi tindakan korektif dan preventif yang dapat ditindaklanjuti.'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Layanan',  'status' => 'Segera (on-call)', 'detail' => 'Layanan investigasi dapat diaktivasi segera setelah insiden terjadi.'],
            'durasi'     => ['label' => 'Durasi Layanan',  'status' => 'Tergantung kompleksitas', 'detail' => 'Bergantung pada kompleksitas kecelakaan dan ketersediaan bukti.'],
            'investasi'  => ['label' => 'Biaya Layanan',   'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi berdasarkan scope investigasi.'],
            'persyaratan'=> ['label' => 'Persyaratan',     'status' => 'Hubungi kami', 'detail' => 'Akses ke lokasi kejadian dan kesediaan manajemen untuk berkolaborasi diperlukan.'],
            'otorisasi'  => ['label' => 'Regulasi',        'status' => 'Perlu verifikasi', 'detail' => 'UU No. 1/1970 mewajibkan pelaporan kecelakaan. Verifikasi kewajiban pelaporan spesifik ke Disnaker.'],
        ],
        'faqs' => [
            [
                'question' => 'Apakah perusahaan wajib melaporkan kecelakaan kerja ke pemerintah?',
                'answer'   => 'Ya, UU No. 1/1970 dan Permenaker terkait mewajibkan pelaporan kecelakaan kerja kepada Disnaker dalam jangka waktu tertentu. Kewajiban pelaporan berlaku untuk kecelakaan yang mengakibatkan cedera, penyakit akibat kerja, atau kematian. Verifikasi prosedur dan batas waktu pelaporan ke Disnaker setempat.',
            ],
        ],
    ],

    'jasa-pelatihan-inhouse-k3' => [
        'slug'              => 'jasa-pelatihan-inhouse-k3',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Pelatihan',
        'title'             => 'Jasa Pelatihan In-House K3 Korporat',
        'badge'             => 'Custom Training — Inhouse',
        'meta_title'        => 'Jasa Pelatihan In-House K3 Korporat | Safety Training Perusahaan',
        'meta_description'  => 'Layanan pelatihan K3 in-house yang dirancang khusus sesuai kebutuhan industri dan risiko spesifik perusahaan. Program safety induction, safety refresher, dan pengembangan budaya K3.',
        'hero_heading'      => 'Jasa Pelatihan',
        'hero_highlight'    => 'In-House K3 Korporat',
        'hero_subheading'   => 'Program pelatihan K3 yang dirancang dan diselenggarakan khusus di fasilitas perusahaan, disesuaikan dengan jenis industri, risiko operasional, dan kebutuhan pengembangan kompetensi K3 spesifik organisasi Anda.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Pelatihan In-House K3 untuk perusahaan kami.',
        'introduction'      => 'Pelatihan K3 in-house memungkinkan perusahaan mendapatkan program yang sepenuhnya disesuaikan dengan kebutuhan, risiko, dan budaya organisasi. Layanan ini mencakup safety induction untuk karyawan baru, refresher training berkala, pelatihan spesialisasi K3 sesuai jenis industri, dan program pengembangan budaya K3. Materi dapat diintegrasikan dengan prosedur dan sistem K3 yang sudah ada di perusahaan.',
        'target_audience'   => [
            'Perusahaan yang membutuhkan program pelatihan K3 yang disesuaikan dengan risiko operasional spesifik.',
            'Departemen HSE yang ingin mengadakan safety refresher atau awareness training.',
            'Organisasi yang ingin membangun budaya K3 yang kuat di seluruh level karyawan.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Analisis Kebutuhan Pelatihan K3', 'description' => 'Mengidentifikasi kebutuhan pelatihan berdasarkan gap kompetensi, risiko operasional, dan tujuan K3 perusahaan.'],
            ['title' => 'Perancangan & Penyesuaian Materi', 'description' => 'Menyusun dan menyesuaikan materi pelatihan dengan prosedur, bahaya, dan budaya spesifik perusahaan.'],
            ['title' => 'Penyelenggaraan Pelatihan & Evaluasi', 'description' => 'Menyelenggarakan pelatihan di fasilitas perusahaan dan melakukan evaluasi efektivitas pembelajaran.'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Layanan',  'status' => 'Fleksibel', 'detail' => 'Jadwal disesuaikan sepenuhnya dengan jadwal operasional perusahaan.'],
            'durasi'     => ['label' => 'Durasi Program',  'status' => 'Custom', 'detail' => 'Durasi disesuaikan dengan kebutuhan dan ketersediaan peserta.'],
            'investasi'  => ['label' => 'Biaya Layanan',   'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi berdasarkan jumlah peserta, durasi, dan materi yang dipilih.'],
            'persyaratan'=> ['label' => 'Persyaratan',     'status' => 'Hubungi kami', 'detail' => 'Konsultasi awal diperlukan untuk mengidentifikasi kebutuhan spesifik pelatihan.'],
            'otorisasi'  => ['label' => 'Status Program',  'status' => 'Hubungi kami', 'detail' => 'Status sertifikasi program in-house dikonfirmasi sesuai jenis pelatihan dan kebutuhan.'],
        ],
        'faqs' => [
            [
                'question' => 'Apa keunggulan pelatihan K3 in-house dibandingkan pelatihan publik?',
                'answer'   => 'Pelatihan in-house dapat disesuaikan sepenuhnya dengan konteks, bahaya, prosedur, dan budaya organisasi. Semua peserta berasal dari lingkungan kerja yang sama sehingga diskusi lebih relevan dan studi kasus dapat menggunakan situasi nyata di tempat kerja. Pelatihan juga dapat dijadwalkan sesuai kebutuhan operasional tanpa mengorbankan produktivitas.',
            ],
        ],
    ],

    'jasa-pembentukan-p2k3' => [
        'slug'              => 'jasa-pembentukan-p2k3',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Konsultansi',
        'title'             => 'Jasa Pembentukan & Pembinaan P2K3',
        'badge'             => 'Permenaker No. 4/1987 — P2K3',
        'meta_title'        => 'Jasa Pembentukan P2K3 | Panitia Pembina K3 Perusahaan',
        'meta_description'  => 'Layanan konsultansi pembentukan, pendaftaran, dan pembinaan Panitia Pembina Keselamatan dan Kesehatan Kerja (P2K3) sesuai Permenaker No. 4/1987.',
        'hero_heading'      => 'Jasa Pembentukan',
        'hero_highlight'    => '& Pembinaan P2K3',
        'hero_subheading'   => 'Layanan konsultansi pembentukan, pendaftaran, dan pembinaan Panitia Pembina Keselamatan dan Kesehatan Kerja (P2K3) sesuai Permenaker No. 4/1987. P2K3 merupakan wadah kerja sama antara pengusaha dan pekerja untuk mengembangkan K3 di perusahaan.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Pembentukan dan Pembinaan P2K3.',
        'introduction'      => 'P2K3 (Panitia Pembina Keselamatan dan Kesehatan Kerja) adalah lembaga kerja sama bipartit di tingkat perusahaan yang berfungsi sebagai forum komunikasi dan konsultasi K3 antara pengusaha dan pekerja. Permenaker No. 4/1987 mewajibkan perusahaan dengan lebih dari 100 karyawan atau yang memiliki risiko bahaya tinggi untuk membentuk P2K3. Layanan ini membantu proses pembentukan, pendaftaran, penyusunan program kerja, dan pembinaan anggota P2K3.',
        'target_audience'   => [
            'Perusahaan yang diwajibkan membentuk P2K3 berdasarkan Permenaker No. 4/1987.',
            'Manajemen SDM dan HSE yang membutuhkan panduan pembentukan P2K3 sesuai regulasi.',
            'P2K3 yang telah terbentuk dan ingin meningkatkan efektivitas program kerja K3.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Pembentukan Struktur & Pendaftaran P2K3', 'description' => 'Membantu penyusunan SK pembentukan P2K3, struktur kepengurusan, dan proses pendaftaran ke Disnaker.'],
            ['title' => 'Penyusunan Program Kerja P2K3', 'description' => 'Mendampingi penyusunan program kerja K3 tahunan, jadwal rapat bulanan, dan rencana kegiatan inspeksi.'],
            ['title' => 'Pembinaan Anggota & Fasilitasi Rapat', 'description' => 'Memberikan pembinaan kepada anggota P2K3 dan memfasilitasi rapat serta pelaporan kegiatan P2K3 ke Disnaker.'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Layanan',  'status' => 'Fleksibel', 'detail' => 'Jadwal dikonfirmasi sesuai kebutuhan perusahaan.'],
            'durasi'     => ['label' => 'Durasi Layanan',  'status' => 'Tergantung proses', 'detail' => 'Bergantung pada kelengkapan dokumen dan proses pendaftaran.'],
            'investasi'  => ['label' => 'Biaya Layanan',   'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi berdasarkan scope layanan.'],
            'persyaratan'=> ['label' => 'Persyaratan',     'status' => 'Hubungi kami', 'detail' => 'Data perusahaan dan profil karyawan diperlukan untuk proses pembentukan.'],
            'otorisasi'  => ['label' => 'Regulasi',        'status' => 'Perlu verifikasi', 'detail' => 'Merujuk Permenaker No. 4/1987. Pendaftaran P2K3 dilakukan ke Disnaker setempat.'],
        ],
        'faqs' => [
            [
                'question' => 'Apa fungsi utama P2K3 di perusahaan?',
                'answer'   => 'P2K3 berfungsi sebagai wadah kerja sama antara pengusaha dan pekerja untuk mengembangkan K3, menggali permasalahan K3, dan merekomendasikan perbaikan. P2K3 juga berfungsi membantu Ahli K3 dalam pelaksanaan pengawasan K3 dan menyusun program peningkatan K3 secara berkelanjutan.',
            ],
        ],
    ],

    'jasa-konsultansi-ergonomi' => [
        'slug'              => 'jasa-konsultansi-ergonomi',
        'category'          => 'service',
        'category_label'    => 'Jasa Konsultansi K3',
        'level'             => 'Layanan Konsultansi',
        'title'             => 'Jasa Konsultansi Ergonomi & Higiene Industri',
        'badge'             => 'Permenaker No. 5/2018 — Higiene & Ergonomi',
        'meta_title'        => 'Jasa Konsultansi Ergonomi & Higiene Industri | Kesehatan Kerja',
        'meta_description'  => 'Layanan konsultansi ergonomi dan higiene industri: evaluasi workstation, analisis beban kerja, pemantauan pajanan kimia dan biologi, dan rekomendasi pengendalian untuk kesehatan pekerja.',
        'hero_heading'      => 'Jasa Konsultansi',
        'hero_highlight'    => 'Ergonomi & Higiene Industri',
        'hero_subheading'   => 'Layanan konsultansi ergonomi dan higiene industri untuk meningkatkan kesehatan dan kenyamanan kerja: evaluasi workstation, analisis beban kerja fisik, pemantauan pajanan bahan kimia dan biologi, serta rekomendasi pengendalian sesuai Permenaker No. 5/2018.',
        'wa_message'        => 'Halo, saya ingin konsultasi mengenai Jasa Konsultansi Ergonomi dan Higiene Industri.',
        'introduction'      => 'Ergonomi dan higiene industri adalah bagian integral dari program kesehatan kerja yang efektif. Layanan ini membantu perusahaan mengevaluasi risiko ergonomi di workstation, menganalisis beban kerja fisik dan kognitif, memantau pajanan bahan kimia dan faktor biologi, serta menyusun rekomendasi pengendalian untuk mengurangi risiko penyakit akibat kerja sesuai persyaratan Permenaker No. 5/2018.',
        'target_audience'   => [
            'Perusahaan manufaktur dengan pekerjaan berulang atau postur kerja yang berisiko ergonomi.',
            'Fasilitas industri dengan potensi pajanan bahan kimia atau faktor biologi.',
            'Departemen HR dan HSE yang ingin meningkatkan kesehatan dan produktivitas karyawan.',
        ],
        'roles_and_responsibilities' => [
            ['title' => 'Evaluasi Risiko Ergonomi di Workstation', 'description' => 'Melakukan penilaian ergonomi menggunakan metode standar (RULA, REBA, NIOSH Lifting Equation) untuk mengidentifikasi risiko muskuloskeletal.'],
            ['title' => 'Pemantauan Pajanan Faktor Kimia & Biologi', 'description' => 'Melakukan sampling dan analisis pajanan bahan kimia serta faktor biologi di lingkungan kerja sesuai NAB yang berlaku.'],
            ['title' => 'Rekomendasi Pengendalian & Redesain Kerja', 'description' => 'Menyusun rekomendasi teknis dan administratif untuk mengurangi risiko ergonomi dan higiene industri.'],
        ],
        'curriculum_topics' => [],
        'training_info' => [
            'jadwal'     => ['label' => 'Jadwal Layanan',  'status' => 'Fleksibel', 'detail' => 'Jadwal disesuaikan dengan kebutuhan klien.'],
            'durasi'     => ['label' => 'Durasi Layanan',  'status' => 'Tergantung scope', 'detail' => 'Bergantung pada jumlah area dan workstation yang dievaluasi.'],
            'investasi'  => ['label' => 'Biaya Layanan',   'status' => 'Hubungi kami', 'detail' => 'Biaya dikonfirmasi berdasarkan scope layanan.'],
            'persyaratan'=> ['label' => 'Kebutuhan Data',  'status' => 'Hubungi kami', 'detail' => 'Informasi proses produksi dan profil pekerja diperlukan.'],
            'otorisasi'  => ['label' => 'Regulasi',        'status' => 'Perlu verifikasi', 'detail' => 'Mengacu Permenaker No. 5/2018 dan standar ergonomi yang berlaku.'],
        ],
        'faqs' => [
            [
                'question' => 'Apa itu penyakit akibat kerja (PAK) dan bagaimana ergonomi berperan dalam pencegahannya?',
                'answer'   => 'Penyakit akibat kerja adalah gangguan kesehatan yang disebabkan atau diperburuk oleh faktor di lingkungan kerja. Ergonomi yang buruk dapat menyebabkan gangguan muskuloskeletal seperti nyeri punggung, carpal tunnel syndrome, dan tendinitis. Evaluasi dan perbaikan ergonomi dapat secara signifikan mengurangi risiko PAK.',
            ],
        ],
    ],

];
