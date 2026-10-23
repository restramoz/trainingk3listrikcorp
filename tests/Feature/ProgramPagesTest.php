<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProgramPagesTest extends TestCase
{
    /**
     * Test that all 22 K3 Listrik programs render successfully.
     */
    public function test_all_twenty_two_services_render_successfully(): void
    {
        $programs = config('programs', []);
        $this->assertCount(22, $programs, 'There must be exactly 22 approved K3 Listrik programs.');

        foreach ($programs as $slug => $data) {
            $url = route('program.show', $slug);
            $response = $this->get($url);

            $response->assertStatus(200);
            $response->assertSee($data['hero_heading']);
            $response->assertSee($data['hero_highlight']);
        }
    }

    /**
     * Test canonical and legacy route aliases for programs.
     */
    public function test_program_routes_have_expected_url_paths(): void
    {
        $this->assertEquals('/layanan/training-ahli-k3-listrik', parse_url(route('program.show', 'training-ahli-k3-listrik'), PHP_URL_PATH));
        $this->assertEquals('/program/training-ahli-k3-listrik', parse_url(route('program.legacy.show', 'training-ahli-k3-listrik'), PHP_URL_PATH));

        // Legacy route returns 200
        $response = $this->get('/program/training-ahli-k3-listrik');
        $response->assertStatus(200);
        $response->assertSee('Ahli K3 Listrik');
    }

    /**
     * Test canonical and shorthand aliases on the canonical route.
     */
    public function test_short_alias_urls_resolve_to_canonical_program(): void
    {
        $aliases = [
            'plc'         => 'Listrik PLC',
            'non-plc'     => 'Listrik Non PLC',
            'scada'       => 'Listrik SCADA',
            'grounding'   => 'Instalasi Listrik Grounding',
            'tenaga-surya'=> 'Listrik Tenaga Surya',
            'otomasi'     => 'Otomasi Industri',
        ];

        foreach ($aliases as $alias => $expectedTitle) {
            $response = $this->get('/layanan/' . $alias);
            $response->assertStatus(200);
            $response->assertSee($expectedTitle);
        }
    }

    /**
     * Test distinct meta titles and meta descriptions for programs.
     */
    public function test_each_program_has_distinct_page_title_and_meta_description(): void
    {
        $ahliListrik  = $this->get(route('program.show', 'training-ahli-k3-listrik'));
        $teknisiListrik = $this->get(route('program.show', 'training-teknisi-k3-listrik'));
        $building     = $this->get(route('program.show', 'training-kelistrikan-building'));

        $ahliListrik->assertStatus(200);
        $teknisiListrik->assertStatus(200);
        $building->assertStatus(200);

        $ahliConfig  = config('programs.training-ahli-k3-listrik');
        $teknisiConfig = config('programs.training-teknisi-k3-listrik');
        $buildingConfig = config('programs.training-kelistrikan-building');

        $ahliListrik->assertSee($ahliConfig['meta_title']);
        $teknisiListrik->assertSee($teknisiConfig['meta_title']);
        $building->assertSee($buildingConfig['meta_title']);

        $this->assertNotEquals($ahliConfig['meta_description'], $teknisiConfig['meta_description']);
        $this->assertNotEquals($teknisiConfig['meta_description'], $buildingConfig['meta_description']);
    }

    /**
     * Test accessible breadcrumb markup on program detail page.
     */
    public function test_program_pages_include_accessible_breadcrumbs(): void
    {
        $response = $this->get(route('program.show', 'training-ahli-k3-listrik'));

        $response->assertStatus(200);
        $response->assertSee('aria-label="Breadcrumb"', false);
        $response->assertSee('itemtype="https://schema.org/BreadcrumbList"', false);
        $response->assertSee('href="' . route('home') . '"', false);
        $response->assertSee('Beranda', false);
        $response->assertSee('aria-current="page"', false);
    }

    /**
     * Test information card sections.
     */
    public function test_program_pages_display_transparent_unverified_info_notice(): void
    {
        $response = $this->get(route('program.show', 'training-ahli-k3-listrik'));

        $response->assertStatus(200);
        $response->assertSee('Informasi Penyelenggaraan &amp; Pelaksanaan', false);
        $response->assertSee('Jadwal Pelatihan');
        $response->assertSee('Durasi Program');
        $response->assertSee('Investasi Biaya');
    }

    /**
     * Test WhatsApp CTA formatting and prefilled message.
     */
    public function test_whatsapp_cta_prefills_specific_program_message(): void
    {
        config(['services.whatsapp.phone' => '089988776655']);

        $response = $this->get(route('program.show', 'training-ahli-k3-listrik'));
        $response->assertStatus(200);
        $expectedMsg = rawurlencode(config('programs.training-ahli-k3-listrik.wa_message'));
        $response->assertSee('https://wa.me/6289988776655?text=' . $expectedMsg, false);
    }

    /**
     * Test fallback when phone is empty.
     */
    public function test_whatsapp_cta_falls_back_when_phone_is_empty(): void
    {
        config(['services.whatsapp.phone' => '']);

        $response = $this->get(route('program.show', 'training-ahli-k3-listrik'));
        $response->assertStatus(200);

        $expectedText = rawurlencode(config('programs.training-ahli-k3-listrik.wa_message'));
        $response->assertSee('https://wa.me/?text=' . $expectedText, false);
    }

    /**
     * Test related services links on detail page.
     */
    public function test_each_program_page_links_to_other_programs(): void
    {
        $response = $this->get(route('program.show', 'training-ahli-k3-listrik'));
        $response->assertStatus(200);
        $response->assertSee(route('program.show', 'training-teknisi-k3-listrik'), false);
    }

    /**
     * Test responsive FAQ accordion on program pages.
     */
    public function test_program_pages_have_responsive_faq_section(): void
    {
        $response = $this->get(route('program.show', 'training-ahli-k3-listrik'));

        $response->assertStatus(200);
        $response->assertSee('<details', false);
        $response->assertSee('<summary', false);
        $response->assertSee('Pertanyaan Umum Seputar');
    }

    /**
     * Test safety rule: no fabricated claims or B3 contamination.
     */
    public function test_program_pages_have_no_invented_claims(): void
    {
        foreach (['training-ahli-k3-listrik', 'training-listrik-plc', 'training-kelistrikan-building'] as $slug) {
            $response = $this->get(route('program.show', $slug));
            $response->assertStatus(200);

            // No guaranteed outcomes
            $response->assertDontSee('100% garansi lulus');
            $response->assertDontSee('pasti lulus');
            $response->assertDontSee('tanpa tes');
            // No B3/environmental contamination on K3 Listrik pages
            $response->assertDontSee('Pengelolaan Limbah B3');
            $response->assertDontSee('FESTRONIK');
            $response->assertDontSee('air limbah industri');
            // No alat-berat/SIO house-of-cards claims
            $response->assertDontSee('Sertifikasi SIO');
            $response->assertDontSee('Permenaker No. 8/2020');
        }
    }

    /**
     * Test homepage and footer link to K3 Listrik programs.
     */
    public function test_homepage_and_footer_link_to_programs(): void
    {
        $home = $this->get(route('home'));

        $home->assertStatus(200);
        $home->assertSee(route('program.show', 'training-ahli-k3-listrik'), false);
        $home->assertSee(route('program.show', 'training-teknisi-k3-listrik'), false);
        $home->assertSee(route('program.show', 'training-kelistrikan-building'), false);
    }
}
