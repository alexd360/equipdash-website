<?php

namespace App\Filament\Resources\TagResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\TagResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTag extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = TagResource::class;
}
