<?php

namespace App\Filament\Resources\FormSubmissionResource\Pages;

use App\Filament\Resources\FormSubmissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFormSubmission extends ViewRecord
{
    protected static string $resource = FormSubmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('markAsRead')
                ->label(fn () => $this->record->is_read ? 'Mark Unread' : 'Mark Read')
                ->icon(fn () => $this->record->is_read ? 'heroicon-o-envelope-open' : 'heroicon-o-envelope')
                ->action(function () {
                    $this->record->update(['is_read' => ! $this->record->is_read]);
                    $this->refreshFormData(['is_read']);
                }),
        ];
    }
}
