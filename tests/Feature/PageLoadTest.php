<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageLoadTest extends TestCase
{
    use RefreshDatabase;

    // -------------------------------------------------------
    // Static marketing pages
    // -------------------------------------------------------

    public function test_homepage_returns_200(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_pricing_page_returns_200(): void
    {
        $response = $this->get('/pricing');

        $response->assertStatus(200);
    }

    public function test_contact_us_page_returns_200(): void
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
    }

    public function test_book_a_demo_page_returns_200(): void
    {
        $response = $this->get('/book-a-demo');

        $response->assertStatus(200);
    }

    public function test_help_docs_page_returns_200(): void
    {
        $response = $this->get('/help-docs');

        $response->assertStatus(200);
    }

    public function test_terms_of_use_page_returns_200(): void
    {
        $response = $this->get('/terms-of-use');

        $response->assertStatus(200);
    }

    public function test_privacy_policy_page_returns_200(): void
    {
        $response = $this->get('/privacy-policy');

        $response->assertStatus(200);
    }

    // -------------------------------------------------------
    // Features index
    // -------------------------------------------------------

    public function test_features_index_returns_200(): void
    {
        $response = $this->get('/features');

        $response->assertStatus(200);
    }

    // -------------------------------------------------------
    // Feature category pages
    // -------------------------------------------------------

    public function test_features_bookings_returns_200(): void
    {
        $response = $this->get('/features/bookings');

        $response->assertStatus(200);
    }

    public function test_features_customer_experience_returns_200(): void
    {
        $response = $this->get('/features/customer-experience');

        $response->assertStatus(200);
    }

    public function test_features_operations_returns_200(): void
    {
        $response = $this->get('/features/operations');

        $response->assertStatus(200);
    }

    public function test_features_planning_returns_200(): void
    {
        $response = $this->get('/features/planning');

        $response->assertStatus(200);
    }

    public function test_features_resources_management_returns_200(): void
    {
        $response = $this->get('/features/resources-management');

        $response->assertStatus(200);
    }

    public function test_features_ai_automation_returns_200(): void
    {
        $response = $this->get('/features/ai-automation');

        $response->assertStatus(200);
    }

    public function test_features_integrations_returns_200(): void
    {
        $response = $this->get('/features/integrations');

        $response->assertStatus(200);
    }

    // -------------------------------------------------------
    // Feature single pages (a sample from each category)
    // -------------------------------------------------------

    public function test_features_bookings_online_booking_returns_200(): void
    {
        $response = $this->get('/features/bookings/online-booking');

        $response->assertStatus(200);
    }

    public function test_features_bookings_booking_management_returns_200(): void
    {
        $response = $this->get('/features/bookings/booking-management');

        $response->assertStatus(200);
    }

    public function test_features_bookings_pos_management_returns_200(): void
    {
        $response = $this->get('/features/bookings/pos-management');

        $response->assertStatus(200);
    }

    public function test_features_customer_experience_crm_returns_200(): void
    {
        $response = $this->get('/features/customer-experience/crm');

        $response->assertStatus(200);
    }

    public function test_features_customer_experience_digital_waivers_returns_200(): void
    {
        $response = $this->get('/features/customer-experience/digital-waivers');

        $response->assertStatus(200);
    }

    public function test_features_operations_reports_insights_returns_200(): void
    {
        $response = $this->get('/features/operations/reports-insights');

        $response->assertStatus(200);
    }

    public function test_features_planning_staff_rostering_returns_200(): void
    {
        $response = $this->get('/features/planning/staff-rostering');

        $response->assertStatus(200);
    }

    public function test_features_resources_management_inventory_management_returns_200(): void
    {
        $response = $this->get('/features/resources-management/inventory-management');

        $response->assertStatus(200);
    }

    // -------------------------------------------------------
    // Non-existent feature page returns 404
    // -------------------------------------------------------

    public function test_nonexistent_feature_category_returns_404(): void
    {
        $response = $this->get('/features/nonexistent-category');

        $response->assertStatus(404);
    }

    public function test_nonexistent_feature_single_returns_404(): void
    {
        $response = $this->get('/features/bookings/nonexistent-page');

        $response->assertStatus(404);
    }

    // -------------------------------------------------------
    // Who We're For - parent pages
    // -------------------------------------------------------

    public function test_equipment_rental_providers_returns_200(): void
    {
        $response = $this->get('/equipment-rental-providers');

        $response->assertStatus(200);
    }

    public function test_experience_tour_operator_returns_200(): void
    {
        $response = $this->get('/experience-tour-operator');

        $response->assertStatus(200);
    }

    // -------------------------------------------------------
    // Who We're For - sub-industry child pages
    // -------------------------------------------------------

    public function test_equipment_rental_ski_snowboard_returns_200(): void
    {
        $response = $this->get('/equipment-rental-providers/ski-snowboard');

        $response->assertStatus(200);
    }

    public function test_equipment_rental_bikes_returns_200(): void
    {
        $response = $this->get('/equipment-rental-providers/bikes');

        $response->assertStatus(200);
    }

    public function test_equipment_rental_water_sports_returns_200(): void
    {
        $response = $this->get('/equipment-rental-providers/water-sports');

        $response->assertStatus(200);
    }

    public function test_equipment_rental_boats_returns_200(): void
    {
        $response = $this->get('/equipment-rental-providers/boats');

        $response->assertStatus(200);
    }

    public function test_equipment_rental_camping_hiking_returns_200(): void
    {
        $response = $this->get('/equipment-rental-providers/camping-hiking');

        $response->assertStatus(200);
    }

    public function test_experience_tour_operator_tours_returns_200(): void
    {
        $response = $this->get('/experience-tour-operator/tours');

        $response->assertStatus(200);
    }

    public function test_experience_tour_operator_activities_adventure_returns_200(): void
    {
        $response = $this->get('/experience-tour-operator/activities-adventure');

        $response->assertStatus(200);
    }

    public function test_experience_tour_operator_attractions_returns_200(): void
    {
        $response = $this->get('/experience-tour-operator/attractions');

        $response->assertStatus(200);
    }

    public function test_experience_tour_operator_charters_returns_200(): void
    {
        $response = $this->get('/experience-tour-operator/charters');

        $response->assertStatus(200);
    }

    // -------------------------------------------------------
    // Sitemap
    // -------------------------------------------------------

    public function test_sitemap_xml_returns_200(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
    }
}
