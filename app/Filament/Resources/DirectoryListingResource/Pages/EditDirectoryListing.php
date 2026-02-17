<?php

namespace App\Filament\Resources\DirectoryListingResource\Pages;

use App\Filament\Resources\DirectoryListingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirectoryListing extends EditRecord
{
    protected static string $resource = DirectoryListingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
