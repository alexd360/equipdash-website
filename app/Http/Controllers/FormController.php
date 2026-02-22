<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use App\Notifications\FormSubmissionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class FormController extends Controller
{
    public function submitDemo(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
            'business_type' => 'nullable|string|max:255',
        ]);

        $submission = FormSubmission::create([
            'form_type' => 'demo_request',
            'data' => $validated,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'referrer_url' => $request->headers->get('referer'),
        ]);

        // Send notification to admin
        try {
            Notification::route('mail', config('mail.from.address', 'admin@equipdash.com'))
                ->notify(new FormSubmissionNotification($submission));
        } catch (\Exception $e) {
            // Silently fail - don't block form submission if email fails
            Log::warning('Form notification email failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you! We\'ll be in touch soon to schedule your demo.');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $submission = FormSubmission::create([
            'form_type' => 'contact',
            'data' => $validated,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'referrer_url' => $request->headers->get('referer'),
        ]);

        // Send notification to admin
        try {
            Notification::route('mail', config('mail.from.address', 'admin@equipdash.com'))
                ->notify(new FormSubmissionNotification($submission));
        } catch (\Exception $e) {
            // Silently fail - don't block form submission if email fails
            Log::warning('Form notification email failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for reaching out! We\'ll get back to you shortly.');
    }

    public function submitNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $submission = FormSubmission::create([
            'form_type' => 'newsletter',
            'data' => $validated,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'referrer_url' => $request->headers->get('referer'),
        ]);

        // Send notification to admin
        try {
            Notification::route('mail', config('mail.from.address', 'admin@equipdash.com'))
                ->notify(new FormSubmissionNotification($submission));
        } catch (\Exception $e) {
            // Silently fail - don't block form submission if email fails
            Log::warning('Form notification email failed: ' . $e->getMessage());
        }

        return back()->with('success', 'You\'ve been subscribed to our newsletter!');
    }
}
