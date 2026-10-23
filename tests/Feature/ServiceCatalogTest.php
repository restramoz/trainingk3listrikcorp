<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServiceCatalogTest extends TestCase
{
    /**
     * Guard the config-driven catalog: exactly 22 unique K3 Listrik services.
     */
    public function test_catalog_has_exactly_22_services(): void
    {
        $this->assertCount(22, config('programs'));
    }

    public function test_every_service_has_complete_required_structure(): void
    {
        foreach (config('programs') as $slug => $service) {
            foreach (['title', 'meta_title', 'meta_description', 'hero_heading', 'hero_highlight', 'hero_subheading', 'wa_message', 'introduction', 'curriculum_topics', 'training_info', 'faqs'] as $key) {
                $this->assertArrayHasKey($key, $service, "Service {$slug} is missing [{$key}].");
            }

            $this->assertCount(3, $service['roles_and_responsibilities'], "Service {$slug} must define exactly 3 roles.");
            $this->assertGreaterThanOrEqual(2, count($service['faqs']), "Service {$slug} needs at least 2 FAQs.");
            $this->assertLessThanOrEqual(3, count($service['faqs']), "Service {$slug} may have at most 3 FAQs.");
            $this->assertSame(
                ['jadwal', 'durasi', 'investasi', 'persyaratan', 'otorisasi'],
                array_keys($service['training_info']),
                "Service {$slug} training_info keys changed."
            );
        }
    }

    public function test_service_titles_meta_and_wa_messages_are_unique(): void
    {
        foreach (['title', 'meta_title', 'meta_description', 'wa_message'] as $key) {
            $values = array_map(fn (array $service) => $service[$key], config('programs'));

            $this->assertSame(
                count($values),
                count(array_unique($values)),
                "Duplicate [{$key}] values found in the service catalog."
            );
        }
    }
}
