<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingPageResource\Pages;
use App\Models\LandingPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LandingPageResource extends Resource
{
    protected static ?string $model = LandingPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-window';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Page Details')
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

                        Forms\Components\Select::make('template_type')
                            ->options([
                                'block_based' => 'Block Based',
                                'custom' => 'Custom',
                            ])
                            ->required()
                            ->default('block_based')
                            ->live(),

                        Forms\Components\TextInput::make('custom_blade_view')
                            ->maxLength(255)
                            ->visible(fn (Forms\Get $get) => $get('template_type') === 'custom'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Content Blocks')
                    ->schema([
                        Forms\Components\Builder::make('blocks')
                            ->blocks([
                                Forms\Components\Builder\Block::make('hero')
                                    ->schema([
                                        Forms\Components\TextInput::make('heading')
                                            ->required(),
                                        Forms\Components\Textarea::make('subheading'),
                                        Forms\Components\TextInput::make('cta_text'),
                                        Forms\Components\TextInput::make('cta_url')
                                            ->url(),
                                        Forms\Components\FileUpload::make('background_image')
                                            ->image()
                                            ->directory('landing-pages')
                                            ->disk('public'),
                                    ]),

                                Forms\Components\Builder\Block::make('features')
                                    ->schema([
                                        Forms\Components\TextInput::make('heading'),
                                        Forms\Components\Repeater::make('items')
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->required(),
                                                Forms\Components\Textarea::make('description'),
                                                Forms\Components\TextInput::make('icon'),
                                            ])
                                            ->columns(3),
                                    ]),

                                Forms\Components\Builder\Block::make('image_text')
                                    ->schema([
                                        Forms\Components\TextInput::make('heading'),
                                        Forms\Components\RichEditor::make('text'),
                                        Forms\Components\FileUpload::make('image')
                                            ->image()
                                            ->directory('landing-pages')
                                            ->disk('public'),
                                        Forms\Components\Select::make('image_position')
                                            ->options([
                                                'left' => 'Left',
                                                'right' => 'Right',
                                            ])
                                            ->default('left'),
                                    ]),

                                Forms\Components\Builder\Block::make('cta')
                                    ->schema([
                                        Forms\Components\TextInput::make('heading')
                                            ->required(),
                                        Forms\Components\Textarea::make('description'),
                                        Forms\Components\TextInput::make('button_text'),
                                        Forms\Components\TextInput::make('button_url')
                                            ->url(),
                                    ]),

                                Forms\Components\Builder\Block::make('faq')
                                    ->schema([
                                        Forms\Components\TextInput::make('heading'),
                                        Forms\Components\Repeater::make('items')
                                            ->schema([
                                                Forms\Components\TextInput::make('question')
                                                    ->required(),
                                                Forms\Components\Textarea::make('answer')
                                                    ->required(),
                                            ]),
                                    ]),

                                Forms\Components\Builder\Block::make('form')
                                    ->schema([
                                        Forms\Components\TextInput::make('heading'),
                                        Forms\Components\Textarea::make('description'),
                                        Forms\Components\TextInput::make('form_type')
                                            ->required()
                                            ->helperText('Identifier for the form to embed'),
                                    ]),

                                Forms\Components\Builder\Block::make('custom_html')
                                    ->schema([
                                        Forms\Components\Textarea::make('html')
                                            ->rows(10)
                                            ->columnSpanFull(),
                                    ]),
                            ])
                            ->columnSpanFull()
                            ->collapsible(),
                    ])
                    ->visible(fn (Forms\Get $get) => $get('template_type') === 'block_based'),

                Forms\Components\Section::make('UTM Tracking')
                    ->schema([
                        Forms\Components\TextInput::make('utm_source')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('utm_medium')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('utm_campaign')
                            ->maxLength(255),
                    ])
                    ->columns(3),

                Forms\Components\Section::make('Publishing')
                    ->schema([
                        Forms\Components\Toggle::make('is_published')
                            ->default(false),

                        Forms\Components\DateTimePicker::make('published_at'),
                    ])
                    ->columns(2),

                Forms\Components\Fieldset::make('SEO')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),

                        Forms\Components\Textarea::make('meta_description')
                            ->rows(2)
                            ->maxLength(160),

                        Forms\Components\FileUpload::make('og_image')
                            ->image()
                            ->directory('landing-pages/og')
                            ->disk('public'),

                        Forms\Components\TextInput::make('canonical_url')
                            ->url()
                            ->maxLength(255),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),

                Tables\Columns\TextColumn::make('template_type')
                    ->badge(),

                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListLandingPages::route('/'),
            'create' => Pages\CreateLandingPage::route('/create'),
            'edit' => Pages\EditLandingPage::route('/{record}/edit'),
        ];
    }
}
