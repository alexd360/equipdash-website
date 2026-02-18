<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\AuthorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAuthor extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = AuthorResource::class;
}
