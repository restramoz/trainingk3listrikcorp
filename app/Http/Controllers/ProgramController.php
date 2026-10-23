<?php

namespace App\Http\Controllers;

use App\Services\RegionalService;
use Illuminate\Contracts\View\View;

class ProgramController extends Controller
{
    /**
     * Map of legacy and SIO aliases to canonical program keys.
     */
    protected array $aliasMap = [
        'ahli-k3-umum'              => 'training-ahli-k3-umum',
        'k3-umum'                   => 'training-ahli-k3-umum',
        'muda'                      => 'training-ahli-k3-umum',
        'k3-konstruksi'             => 'training-k3-konstruksi',
        'k3-konstruksi-muda'        => 'training-k3-konstruksi',
        'k3-konstruksi-madya'       => 'training-k3-konstruksi',
        'k3-konstruksi-utama'       => 'training-k3-konstruksi',
        'madya'                     => 'training-k3-konstruksi',
        'k3-kimia'                  => 'training-k3-kimia',
        'k3-kebakaran'              => 'training-k3-kebakaran',
        'p3k'                       => 'training-p3k-di-tempat-kerja',
        'smk3'                      => 'jasa-audit-smk3',
        'utama'                     => 'jasa-audit-smk3',
        'hiradc'                    => 'jasa-identifikasi-bahaya-hiradc',

        // 9 SIO Alat Berat aliases mapped to Construction & Equipment K3 program
        'sio-excavator'             => 'training-k3-konstruksi',
        'training-sio-excavator'    => 'training-k3-konstruksi',
        'sio-wheel-loader'          => 'training-k3-konstruksi',
        'training-sio-wheel-loader' => 'training-k3-konstruksi',
        'sio-bulldozer'             => 'training-k3-konstruksi',
        'training-sio-bulldozer'    => 'training-k3-konstruksi',
        'sio-compactor'             => 'training-k3-konstruksi',
        'training-sio-compactor'    => 'training-k3-konstruksi',
        'sio-motor-grader'          => 'training-k3-konstruksi',
        'training-sio-motor-grader' => 'training-k3-konstruksi',
        'sio-rig-drilling'          => 'training-k3-konstruksi',
        'training-sio-rig-drilling' => 'training-k3-konstruksi',
        'sio-telehandler'           => 'training-k3-konstruksi',
        'training-sio-telehandler'  => 'training-k3-konstruksi',
        'sio-vibro'                 => 'training-k3-konstruksi',
        'training-sio-vibro'        => 'training-k3-konstruksi',
        'sio-dump-truck'            => 'training-k3-konstruksi',
        'training-sio-dump-truck'   => 'training-k3-konstruksi',
    ];

    /**
     * Display the specified program or service page by slug.
     */
    public function show(string $slug): View
    {
        $programs = config('programs', []);

        $resolvedSlug = isset($programs[$slug]) ? $slug : ($this->aliasMap[$slug] ?? null);

        if ($resolvedSlug === null || ! isset($programs[$resolvedSlug])) {
            abort(404, 'Layanan atau program pelatihan tidak ditemukan.');
        }

        $program = $programs[$resolvedSlug];

        // Recommend related programs in the same category or overall
        $relatedPrograms = collect($programs)
            ->filter(fn (array $p, string $key): bool => $key !== $resolvedSlug)
            ->values()
            ->take(6)
            ->all();

        return view('programs.show', [
            'program' => $program,
            'relatedPrograms' => $relatedPrograms,
            'otherPrograms' => $relatedPrograms,
        ]);
    }

    /**
     * Display a city-specific service detail page preserving regional context.
     *
     * @param string $city      Slug of the city/regency (e.g. "bandung", "kab-bekasi")
     * @param string $program   Service identifier (e.g. "training-plb3", "jasa-pertek-K3")
     */
    public function cityProgram(string $city, string $program, RegionalService $regional): View
    {
        $cityData = $regional->findCity($city);
        abort_if($cityData === null, 404, 'Kota/Kabupaten tidak ditemukan.');

        $programs = config('programs', []);

        // Direct key lookup
        $configKey = isset($programs[$program]) ? $program : ($this->aliasMap[$program] ?? null);

        abort_if($configKey === null || ! isset($programs[$configKey]), 404, 'Layanan tidak ditemukan.');
        $programData = $programs[$configKey];

        $relatedPrograms = collect($programs)
            ->filter(fn (array $p, string $key): bool => $key !== $configKey)
            ->values()
            ->take(6)
            ->all();

        $waMessage = "Halo, saya dari {$cityData['name']} dan ingin konsultasi mengenai {$programData['title']}.";

        return view('city.program-detail', [
            'city' => $cityData,
            'program' => $programData,
            'relatedPrograms' => $relatedPrograms,
            'otherPrograms' => $relatedPrograms,
            'waMessage' => $waMessage,
        ]);
    }
}
