<?php

namespace App\Filament\Resources\LandingPageResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\LandingPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandingPage extends EditRecord
{
    use ClearsResponseCache;

    protected static string $resource = LandingPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(fn () => $this->afterDelete()),
        ];
    }
}
