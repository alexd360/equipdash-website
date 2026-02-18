<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    use ClearsResponseCache;

    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(fn () => $this->afterDelete()),
        ];
    }
}
