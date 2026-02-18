<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RedirectResource\Pages;
use App\Models\Redirect;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Spatie\ResponseCache\Facades\ResponseCache;

class RedirectResource extends Resource
{
    protected static ?string $model = Redirect::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-uturn-right';

    protected static ?string $navigationGroup = 'System';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('from_path')
                    ->required()
                    ->maxLength(255)
                    ->helperText('The path to redirect from, e.g. /old-page'),

                Forms\Components\TextInput::make('to_path')
                    ->required()
                    ->maxLength(255)
                    ->helperText('The path to redirect to, e.g. /new-page'),

                Forms\Components\Select::make('status_code')
                    ->options([
                        301 => '301 - Permanent Redirect',
                        302 => '302 - Temporary Redirect',
                    ])
                    ->required()
                    ->default(301),

                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('from_path')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('to_path')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status_code')
                    ->badge()
                    ->color(fn (int $state): string => match ($state) {
                        301 => 'success',
                        302 => 'warning',
                        default => 'gray',
                    }),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(fn () => ResponseCache::clear()),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(fn () => ResponseCache::clear()),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRedirects::route('/'),
            'create' => Pages\CreateRedirect::route('/create'),
            'edit' => Pages\EditRedirect::route('/{record}/edit'),
        ];
    }
}
