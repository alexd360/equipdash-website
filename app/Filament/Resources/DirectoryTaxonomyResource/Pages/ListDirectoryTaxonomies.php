<?php

namespace App\Filament\Resources\DirectoryTaxonomyResource\Pages;

use App\Filament\Resources\DirectoryTaxonomyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDirectoryTaxonomies extends ListRecords
{
    protected static string $resource = DirectoryTaxonomyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
