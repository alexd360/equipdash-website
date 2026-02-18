<?php

namespace App\Filament\Resources\DirectoryListingResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\DirectoryListingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirectoryListing extends EditRecord
{
    use ClearsResponseCache;

    protected static string $resource = DirectoryListingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(fn () => $this->afterDelete()),
        ];
    }
}
