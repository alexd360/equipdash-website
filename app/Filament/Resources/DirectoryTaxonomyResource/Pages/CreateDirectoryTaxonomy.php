<?php

namespace App\Filament\Resources\DirectoryTaxonomyResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\DirectoryTaxonomyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDirectoryTaxonomy extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = DirectoryTaxonomyResource::class;
}
