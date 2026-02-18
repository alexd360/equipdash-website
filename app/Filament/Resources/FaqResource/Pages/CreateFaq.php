<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\FaqResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = FaqResource::class;
}
