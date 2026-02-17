<?php

namespace App\Console\Commands;

use App\Models\DirectoryListing;
use App\Models\DirectoryTaxonomy;
use Illuminate\Console\Command;

class DirectoryImport extends Command
{
    protected $signature = 'directory:import
        {file : Path to CSV file}';

    protected $description = 'Import directory listings from a CSV file';

    public function handle(): int
    {
        $filePath = $this->argument('file');

        if (! file_exists($filePath) || ! is_readable($filePath)) {
            $this->error("File not found or not readable: {$filePath}");

            return self::FAILURE;
        }

        $handle = fopen($filePath, 'r');
        if ($handle === false) {
            $this->error("Could not open file: {$filePath}");

            return self::FAILURE;
        }

        // Read header row
        $headers = fgetcsv($handle);
        if ($headers === false) {
            $this->error('CSV file is empty or malformed.');
            fclose($handle);

            return self::FAILURE;
        }

        $headers = array_map('trim', array_map('strtolower', $headers));
        $expectedHeaders = ['title', 'description', 'address', 'website', 'location', 'experience', 'rental'];

        $rows = [];
        while (($row = fgetcsv($handle)) !== false) {
            $rows[] = $row;
        }
        fclose($handle);

        if (empty($rows)) {
            $this->warn('No data rows found in CSV.');

            return self::SUCCESS;
        }

        $created = 0;
        $errors = 0;
        $bar = $this->output->createProgressBar(count($rows));
        $bar->start();

        foreach ($rows as $row) {
            $data = array_combine($headers, array_pad($row, count($headers), null));

            if (empty($data['title'])) {
                $errors++;
                $bar->advance();

                continue;
            }

            $listing = DirectoryListing::create([
                'title' => $data['title'],
                'description' => $data['description'] ?? null,
                'address' => $data['address'] ?? null,
                'website' => $data['website'] ?? null,
                'is_published' => true,
                'published_at' => now(),
            ]);

            // Attach taxonomies by name or slug
            $taxonomyTypes = ['location', 'experience', 'rental'];
            foreach ($taxonomyTypes as $type) {
                if (! empty($data[$type])) {
                    $names = array_map('trim', explode('|', $data[$type]));
                    $taxonomyIds = DirectoryTaxonomy::where('type', $type)
                        ->where(function ($q) use ($names) {
                            $q->whereIn('name', $names)
                                ->orWhereIn('slug', $names);
                        })
                        ->pluck('id');

                    if ($taxonomyIds->isNotEmpty()) {
                        $listing->taxonomies()->attach($taxonomyIds);
                    }
                }
            }

            $created++;
            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);

        $this->info("Import complete.");
        $this->line("  Created: {$created}");
        $this->line("  Errors:  {$errors}");
        $this->line("  Total:   ".count($rows));

        return self::SUCCESS;
    }
}
