<?php

namespace App\Filament\Resources\DirectoryListingResource\Pages;

use App\Filament\Resources\DirectoryListingResource;
use App\Models\DirectoryListing;
use Filament\Actions;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Csv\Reader;

class ListDirectoryListings extends ListRecords
{
    protected static string $resource = DirectoryListingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('import_csv')
                ->label('Import CSV')
                ->icon('heroicon-o-arrow-up-tray')
                ->form([
                    Forms\Components\FileUpload::make('csv_file')
                        ->label('CSV File')
                        ->acceptedFileTypes(['text/csv', 'application/vnd.ms-excel'])
                        ->required()
                        ->disk('local')
                        ->directory('csv-imports'),
                ])
                ->action(function (array $data): void {
                    $filePath = Storage::disk('local')->path($data['csv_file']);

                    try {
                        $csv = Reader::createFromPath($filePath, 'r');
                        $csv->setHeaderOffset(0);
                        $records = $csv->getRecords();
                        $count = 0;

                        foreach ($records as $record) {
                            DirectoryListing::create([
                                'title' => $record['title'] ?? '',
                                'slug' => Str::slug($record['title'] ?? ''),
                                'description' => $record['description'] ?? null,
                                'address' => $record['address'] ?? null,
                                'website' => $record['website'] ?? null,
                                'is_published' => ($record['is_published'] ?? '0') === '1',
                                'sort_order' => (int) ($record['sort_order'] ?? 0),
                            ]);
                            $count++;
                        }

                        Notification::make()
                            ->title("Successfully imported {$count} listings.")
                            ->success()
                            ->send();
                    } catch (\Exception $e) {
                        Notification::make()
                            ->title('Import failed: ' . $e->getMessage())
                            ->danger()
                            ->send();
                    } finally {
                        Storage::disk('local')->delete($data['csv_file']);
                    }
                }),

            Actions\CreateAction::make(),
        ];
    }
}
