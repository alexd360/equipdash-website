<?php

namespace App\Filament\Resources\DirectoryTaxonomyResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\DirectoryTaxonomyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirectoryTaxonomy extends EditRecord
{
    use ClearsResponseCache;

    protected static string $resource = DirectoryTaxonomyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(fn () => $this->afterDelete()),
        ];
    }
}
