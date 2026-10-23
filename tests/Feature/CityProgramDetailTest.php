<?php

namespace Tests\Feature;

use Tests\TestCase;

class CityProgramDetailTest extends TestCase
{
    /**
     * Ensure the main K3 Listrik programs render with city context.
     */
    public function test_main_programs_render_canonical_content_with_city_context(): void
    {
        // 1. Training Ahli K3 Listrik in Bandung
        $response = $this->get(route('city.program.detail', ['city' => 'bandung', 'program' => 'training-ahli-k3-listrik']));
        $response->assertStatus(200);
        $response->assertSee('Ahli K3 Listrik');
        $content = $response->getContent();
        // Should not show placeholder text
        $this->assertFalse(strpos($content, 'Konten detail program belum tersedia.') !== false);

        // 2. Training Teknisi K3 Listrik in Malang
        $response2 = $this->get(route('city.program.detail', ['city' => 'malang', 'program' => 'training-teknisi-k3-listrik']));
        $response2->assertStatus(200);
        $response2->assertSee('Teknisi K3 Listrik');

        // 3. Kelistrikan Building in Surabaya
        $response3 = $this->get(route('city.program.detail', ['city' => 'surabaya', 'program' => 'training-kelistrikan-building']));
        $response3->assertStatus(200);
        $response3->assertSee('Kelistrikan Building');
    }

    /**
     * Ensure full program slugs resolve to a valid program.
     */
    public function test_full_program_slugs_resolve_correctly(): void
    {
        $response = $this->get(route('city.program.detail', ['city' => 'bandung', 'program' => 'training-ahli-k3-listrik']));
        $response->assertStatus(200);
        $response->assertSee('Training');
    }

    /**
     * Invalid city slug should return 404.
     */
    public function test_invalid_city_returns_404(): void
    {
        $response = $this->get(route('city.program.detail', ['city' => 'nonexistent-city', 'program' => 'training-ahli-k3-listrik']));
        $response->assertStatus(404);
    }

    /**
     * Invalid program slug should return 404.
     */
    public function test_invalid_program_returns_404(): void
    {
        $response = $this->get(route('city.program.detail', ['city' => 'bandung', 'program' => 'invalid']));
        $response->assertStatus(404);
    }
}
