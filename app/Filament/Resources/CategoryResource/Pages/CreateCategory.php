<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = CategoryResource::class;
}
