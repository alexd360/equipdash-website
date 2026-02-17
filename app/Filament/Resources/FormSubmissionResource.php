<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormSubmissionResource\Pages;
use App\Models\FormSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FormSubmissionResource extends Resource
{
    protected static ?string $model = FormSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationGroup = 'System';

    protected static ?int $navigationSort = 1;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Submission Details')
                    ->schema([
                        Infolists\Components\TextEntry::make('form_type')
                            ->badge(),

                        Infolists\Components\TextEntry::make('ip_address'),

                        Infolists\Components\IconEntry::make('is_read')
                            ->boolean(),

                        Infolists\Components\TextEntry::make('created_at')
                            ->dateTime(),
                    ])
                    ->columns(2),

                Infolists\Components\Section::make('Form Data')
                    ->schema([
                        Infolists\Components\KeyValueEntry::make('data')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('form_type')
                    ->badge()
                    ->searchable(),

                Tables\Columns\TextColumn::make('data')
                    ->label('Summary')
                    ->formatStateUsing(function ($state) {
                        if (is_string($state)) {
                            $state = json_decode($state, true);
                        }

                        if (! is_array($state)) {
                            return '-';
                        }

                        $name = $state['name'] ?? $state['first_name'] ?? null;
                        $email = $state['email'] ?? null;
                        $parts = array_filter([$name, $email]);

                        return implode(' - ', $parts) ?: '-';
                    })
                    ->limit(50),

                Tables\Columns\TextColumn::make('ip_address')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_read')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('form_type'),
                Tables\Filters\TernaryFilter::make('is_read'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('markAsRead')
                    ->label(fn (FormSubmission $record) => $record->is_read ? 'Mark Unread' : 'Mark Read')
                    ->icon(fn (FormSubmission $record) => $record->is_read ? 'heroicon-o-envelope-open' : 'heroicon-o-envelope')
                    ->action(fn (FormSubmission $record) => $record->update(['is_read' => ! $record->is_read]))
                    ->requiresConfirmation(false),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormSubmissions::route('/'),
            'view' => Pages\ViewFormSubmission::route('/{record}'),
        ];
    }
}
