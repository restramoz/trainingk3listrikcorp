<?php

namespace App\Http\Controllers;

use App\Services\RegionalService;
use Illuminate\Contracts\View\View;

class ProgramController extends Controller
{
    /**
     * Map of shorthand aliases to canonical program keys.
     */
    protected array $aliasMap = [
        'ahli-k3-listrik'   => 'training-ahli-k3-listrik',
        'teknisi-k3-listrik'=> 'training-teknisi-k3-listrik',
        'inspektur-listrik' => 'training-inspektur-listrik',
        'pengawas-listrik'  => 'training-pengawas-listrik',
        'supervisor-listrik'=> 'training-supervisor-listrik',
        'manager-listrik'   => 'training-manager-listrik',
        'plc'               => 'training-listrik-plc',
        'non-plc'           => 'training-listrik-non-plc',
        'scada'             => 'training-listrik-scada',
        'grounding'         => 'training-instalasi-listrik-grounding',
        'tenaga-surya'      => 'training-listrik-tenaga-surya',
        'otomasi'           => 'training-otomasi-industri',
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
