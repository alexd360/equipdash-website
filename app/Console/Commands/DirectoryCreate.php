<?php

namespace App\Console\Commands;

use App\Models\DirectoryListing;
use App\Models\DirectoryTaxonomy;
use Illuminate\Console\Command;

class DirectoryCreate extends Command
{
    protected $signature = 'directory:create
        {title : The title of the directory listing}
        {--description= : Listing description}
        {--address= : Physical address}
        {--website= : Website URL}
        {--location= : Location taxonomy slug}
        {--experience= : Experience taxonomy slug}
        {--rental= : Rental taxonomy slug}';

    protected $description = 'Create a new directory listing';

    public function handle(): int
    {
        $listing = DirectoryListing::create([
            'title' => $this->argument('title'),
            'description' => $this->option('description'),
            'address' => $this->option('address'),
            'website' => $this->option('website'),
            'is_published' => true,
            'published_at' => now(),
        ]);

        // Attach taxonomies
        $taxonomyMap = [
            'location' => $this->option('location'),
            'experience' => $this->option('experience'),
            'rental' => $this->option('rental'),
        ];

        foreach ($taxonomyMap as $type => $slug) {
            if ($slug) {
                $taxonomy = DirectoryTaxonomy::where('type', $type)
                    ->where('slug', $slug)
                    ->first();

                if ($taxonomy) {
                    $listing->taxonomies()->attach($taxonomy->id);
                } else {
                    $this->warn("Taxonomy not found: {$type} = {$slug}");
                }
            }
        }

        $this->info("Directory listing created successfully.");
        $this->line("  ID:   {$listing->id}");
        $this->line("  Slug: {$listing->slug}");

        return self::SUCCESS;
    }
}
