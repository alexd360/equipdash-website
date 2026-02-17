<?php

namespace App\Filament\Resources\DirectoryTaxonomyResource\Pages;

use App\Filament\Resources\DirectoryTaxonomyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirectoryTaxonomy extends EditRecord
{
    protected static string $resource = DirectoryTaxonomyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
