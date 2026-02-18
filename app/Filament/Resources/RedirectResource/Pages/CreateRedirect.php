<?php

namespace App\Filament\Resources\RedirectResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\RedirectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRedirect extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = RedirectResource::class;
}
