<?php

namespace App\Filament\Resources\LandingPageResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\LandingPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLandingPage extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = LandingPageResource::class;
}
