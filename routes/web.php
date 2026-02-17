<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Static pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/book-a-demo', [PageController::class, 'bookADemo'])->name('book-a-demo');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/help-docs', [PageController::class, 'helpDocs'])->name('help-docs');
Route::get('/terms-of-use', [PageController::class, 'termsOfUse'])->name('terms-of-use');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');

// Features - index page
Route::get('/features', [PageController::class, 'featuresIndex'])->name('features.index');

// Features - standalone pages
Route::get('/features/ai-automation', [PageController::class, 'aiAutomation'])->name('features.ai-automation');

// Integrations (standalone route, not under /features/)
Route::get('/integrations', [PageController::class, 'integrations'])->name('integrations');

// Features - categories & single pages
Route::get('/features/{slug}', [PageController::class, 'featureCategory'])->name('features.category');
Route::get('/features/{category}/{slug}', [PageController::class, 'featureSingle'])->name('features.single');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/author/{slug}', [BlogController::class, 'author'])->name('blog.author');

// Directory
Route::get('/directory', [DirectoryController::class, 'index'])->name('directory.index');
Route::get('/directory/{slug}', [DirectoryController::class, 'show'])->name('directory.show');

// Landing pages
Route::get('/l/{slug}', [LandingPageController::class, 'show'])->name('landing.show');

// SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Forms (POST)
Route::post('/forms/demo', [FormController::class, 'submitDemo'])->name('forms.demo');
Route::post('/forms/contact', [FormController::class, 'submitContact'])->name('forms.contact');
Route::post('/forms/newsletter', [FormController::class, 'submitNewsletter'])->name('forms.newsletter');

// Who We're For (must be last — catches /{slug} and /{parent}/{slug})
Route::get('/{slug}', [PageController::class, 'whoWeAreFor'])
    ->where('slug', 'equipment-rental-providers|experience-tour-operator')
    ->name('page.show');
Route::get('/{parent}/{slug}', [PageController::class, 'whoWeAreForChild'])
    ->where('parent', 'equipment-rental-providers|experience-tour-operator')
    ->name('page.child');
