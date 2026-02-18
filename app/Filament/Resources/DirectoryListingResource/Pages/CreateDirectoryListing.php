<?php

namespace App\Filament\Resources\DirectoryListingResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\DirectoryListingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDirectoryListing extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = DirectoryListingResource::class;
}
