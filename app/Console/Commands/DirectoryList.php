<?php

namespace App\Console\Commands;

use App\Models\DirectoryListing;
use Illuminate\Console\Command;

class DirectoryList extends Command
{
    protected $signature = 'directory:list
        {--limit=20 : Number of listings to display}
        {--search= : Search keyword in title or description}';

    protected $description = 'List directory listings';

    public function handle(): int
    {
        $query = DirectoryListing::query();

        if ($search = $this->option('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $listings = $query->orderByDesc('created_at')
            ->limit((int) $this->option('limit'))
            ->get();

        if ($listings->isEmpty()) {
            $this->info('No directory listings found.');

            return self::SUCCESS;
        }

        $this->table(
            ['ID', 'Title', 'Address', 'Status'],
            $listings->map(function ($listing) {
                return [
                    $listing->id,
                    $listing->title,
                    $listing->address ?? '-',
                    $listing->is_published ? 'Published' : 'Draft',
                ];
            })
        );

        $this->info("Showing {$listings->count()} listing(s).");

        return self::SUCCESS;
    }
}
