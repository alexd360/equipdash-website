<?php

namespace Tests\Feature;

use App\Models\FormSubmission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FormSubmissionTest extends TestCase
{
    use RefreshDatabase;

    // -------------------------------------------------------
    // Demo form
    // -------------------------------------------------------

    public function test_demo_form_submission_with_valid_data_succeeds(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567890',
            'company' => 'Acme Corp',
            'website' => 'https://acme.com',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('form_submissions', [
            'form_type' => 'demo_request',
        ]);
    }

    public function test_demo_form_submission_stores_correct_data(): void
    {
        $this->post('/forms/demo', [
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'jane@example.com',
            'phone' => null,
            'company' => 'Smith Rentals',
            'website' => 'https://smithrentals.com',
            'business_type' => 'Tour Operator',
        ]);

        $submission = FormSubmission::where('form_type', 'demo_request')->first();

        $this->assertNotNull($submission);
        $this->assertEquals('jane@example.com', $submission->data['email']);
        $this->assertEquals('Smith Rentals', $submission->data['company']);
    }

    public function test_demo_form_requires_first_name(): void
    {
        $response = $this->post('/forms/demo', [
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'website' => 'https://acme.com',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertSessionHasErrors('first_name');
    }

    public function test_demo_form_requires_last_name(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'website' => 'https://acme.com',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertSessionHasErrors('last_name');
    }

    public function test_demo_form_requires_email(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'company' => 'Acme Corp',
            'website' => 'https://acme.com',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_demo_form_requires_valid_email(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'not-an-email',
            'company' => 'Acme Corp',
            'website' => 'https://acme.com',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_demo_form_requires_company(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'website' => 'https://acme.com',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertSessionHasErrors('company');
    }

    public function test_demo_form_requires_website(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertSessionHasErrors('website');
    }

    public function test_demo_form_requires_valid_website_url(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'website' => 'not-a-url',
            'business_type' => 'Equipment Rental',
        ]);

        $response->assertSessionHasErrors('website');
    }

    public function test_demo_form_requires_business_type(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'website' => 'https://acme.com',
        ]);

        $response->assertSessionHasErrors('business_type');
    }

    public function test_demo_form_phone_is_optional(): void
    {
        $response = $this->post('/forms/demo', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'website' => 'https://acme.com',
            'business_type' => 'Equipment Rental',
            // phone intentionally omitted
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');
    }

    // -------------------------------------------------------
    // Contact form
    // -------------------------------------------------------

    public function test_contact_form_submission_with_valid_data_succeeds(): void
    {
        $response = $this->post('/forms/contact', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'General Inquiry',
            'message' => 'I would like to learn more about EquipDash.',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('form_submissions', [
            'form_type' => 'contact',
        ]);
    }

    public function test_contact_form_requires_name(): void
    {
        $response = $this->post('/forms/contact', [
            'email' => 'john@example.com',
            'message' => 'Test message.',
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_contact_form_requires_email(): void
    {
        $response = $this->post('/forms/contact', [
            'name' => 'John Doe',
            'message' => 'Test message.',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_contact_form_requires_valid_email(): void
    {
        $response = $this->post('/forms/contact', [
            'name' => 'John Doe',
            'email' => 'invalid-email',
            'message' => 'Test message.',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_contact_form_requires_message(): void
    {
        $response = $this->post('/forms/contact', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $response->assertSessionHasErrors('message');
    }

    public function test_contact_form_subject_is_optional(): void
    {
        $response = $this->post('/forms/contact', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Test message without a subject.',
            // subject intentionally omitted
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');
    }

    // -------------------------------------------------------
    // Newsletter form
    // -------------------------------------------------------

    public function test_newsletter_form_submission_with_valid_email_succeeds(): void
    {
        $response = $this->post('/forms/newsletter', [
            'email' => 'subscriber@example.com',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('form_submissions', [
            'form_type' => 'newsletter',
        ]);
    }

    public function test_newsletter_form_requires_email(): void
    {
        $response = $this->post('/forms/newsletter', []);

        $response->assertSessionHasErrors('email');
    }

    public function test_newsletter_form_requires_valid_email(): void
    {
        $response = $this->post('/forms/newsletter', [
            'email' => 'not-valid',
        ]);

        $response->assertSessionHasErrors('email');
    }

    // -------------------------------------------------------
    // Form submissions are persisted to the database
    // -------------------------------------------------------

    public function test_form_submission_records_ip_and_user_agent(): void
    {
        $this->post('/forms/newsletter', [
            'email' => 'test@example.com',
        ]);

        $submission = FormSubmission::where('form_type', 'newsletter')->first();

        $this->assertNotNull($submission);
        $this->assertNotNull($submission->ip_address);
        $this->assertNotNull($submission->user_agent);
    }
}
