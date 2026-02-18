<?php

namespace App\Http\Middleware;

use App\Models\Redirect;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class HandleRedirects
{
    public function handle(Request $request, Closure $next): Response
    {
        $path = '/' . ltrim($request->path(), '/');

        // Permanent structural redirects (URL renames)
        $structuralRedirects = [
            '/features/ai-automation' => '/features/dash-ai',
            '/features/resources-management' => '/features/resource-management',
            '/features/resources-management/inventory-management' => '/features/resource-management/inventory-management',
            '/features/resources-management/guide-management' => '/features/resource-management/guide-management',
            '/features/resources-management/product-catalogue' => '/features/resource-management/product-catalogue',
            '/features/resources-management/experience-catalogue' => '/features/resource-management/experience-catalogue',
            '/features/resources-management/season-schedule' => '/features/resource-management/season-schedule',
            '/features/customer-experience/promotionsand-campaigns' => '/features/customer-experience/promotions-campaigns',
            '/features/operations/secure-payments' => '/features/bookings/secure-payment',
            '/features/operations/waitlist-management' => '/features/bookings/waitlist-management',
            '/features/operations/workflow-automation' => '/features/bookings/workflow-automation',
            '/features/planning' => '/features/scheduling-logistics',
            '/features/planning/guestlist-manifest' => '/features/scheduling-logistics/guestlist-manifest',
            '/features/planning/staff-rostering' => '/features/scheduling-logistics/staff-rostering',
        ];

        if (isset($structuralRedirects[$path])) {
            return redirect($structuralRedirects[$path], 301);
        }

        try {
            $redirects = Cache::remember('redirects', 3600, function () {
                return Redirect::where('is_active', true)->pluck('to_path', 'from_path')->toArray();
            });
        } catch (\Throwable $e) {
            return $next($request);
        }

        if (isset($redirects[$path])) {
            $redirect = Redirect::where('from_path', $path)->where('is_active', true)->first();
            $statusCode = $redirect ? $redirect->status_code : 301;
            return redirect($redirects[$path], $statusCode);
        }

        return $next($request);
    }
}
