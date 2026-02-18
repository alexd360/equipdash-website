<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    use ClearsResponseCache;

    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(fn () => $this->afterDelete()),
        ];
    }
}
