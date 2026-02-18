<?php

namespace App\Filament\Resources\RedirectResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\RedirectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRedirect extends EditRecord
{
    use ClearsResponseCache;

    protected static string $resource = RedirectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(fn () => $this->afterDelete()),
        ];
    }
}
