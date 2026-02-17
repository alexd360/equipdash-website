<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectoryTaxonomyResource\Pages;
use App\Models\DirectoryTaxonomy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DirectoryTaxonomyResource extends Resource
{
    protected static ?string $model = DirectoryTaxonomy::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Directory';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Taxonomies';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', str($state)->slug())),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                Forms\Components\Select::make('type')
                    ->options([
                        'location' => 'Location',
                        'experience' => 'Experience',
                        'rental' => 'Rental',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'location' => 'info',
                        'experience' => 'success',
                        'rental' => 'warning',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'location' => 'Location',
                        'experience' => 'Experience',
                        'rental' => 'Rental',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDirectoryTaxonomies::route('/'),
            'create' => Pages\CreateDirectoryTaxonomy::route('/create'),
            'edit' => Pages\EditDirectoryTaxonomy::route('/{record}/edit'),
        ];
    }
}
