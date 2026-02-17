<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectoryListingResource\Pages;
use App\Models\DirectoryListing;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DirectoryListingResource extends Resource
{
    protected static ?string $model = DirectoryListing::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationGroup = 'Directory';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Listing Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', str($state)->slug())),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Forms\Components\TextInput::make('address')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('website')
                            ->url()
                            ->maxLength(255),

                        Forms\Components\RichEditor::make('description')
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('logo')
                            ->image()
                            ->directory('directory/logos')
                            ->disk('public'),

                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->directory('directory/featured')
                            ->disk('public'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Classification')
                    ->schema([
                        Forms\Components\CheckboxList::make('addon_type')
                            ->options([
                                'equipment_rental' => 'Equipment Rental',
                                'experience_tour' => 'Experience / Tour',
                                'ski_snowboard' => 'Ski & Snowboard',
                                'bikes' => 'Bikes',
                                'water_sport' => 'Water Sport',
                                'boats' => 'Boats',
                                'camping' => 'Camping',
                            ])
                            ->columns(3)
                            ->columnSpanFull(),

                        Forms\Components\CheckboxList::make('taxonomies')
                            ->relationship('taxonomies', 'name')
                            ->columns(3)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Publishing')
                    ->schema([
                        Forms\Components\Toggle::make('is_published')
                            ->default(false),

                        Forms\Components\DateTimePicker::make('published_at'),

                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(3),

                Forms\Components\Fieldset::make('SEO')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),

                        Forms\Components\Textarea::make('meta_description')
                            ->rows(2)
                            ->maxLength(160),

                        Forms\Components\FileUpload::make('og_image')
                            ->image()
                            ->directory('directory/og')
                            ->disk('public'),

                        Forms\Components\KeyValue::make('structured_data')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image'),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('address')
                    ->searchable()
                    ->limit(40),

                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->filters([])
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
            'index' => Pages\ListDirectoryListings::route('/'),
            'create' => Pages\CreateDirectoryListing::route('/create'),
            'edit' => Pages\EditDirectoryListing::route('/{record}/edit'),
        ];
    }
}
