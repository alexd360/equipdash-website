<?php

namespace App\Console\Commands;

use App\Models\LandingPage;
use Illuminate\Console\Command;

class LandingCreate extends Command
{
    protected $signature = 'landing:create
        {title : The title of the landing page}
        {--slug= : Custom slug (auto-generated from title if not provided)}
        {--template=block_based : Template type (block_based or custom)}
        {--blocks= : JSON string or path to JSON file for page blocks}
        {--utm-source= : UTM source parameter}
        {--utm-medium= : UTM medium parameter}
        {--utm-campaign= : UTM campaign parameter}
        {--publish : Publish the page immediately}';

    protected $description = 'Create a new landing page';

    public function handle(): int
    {
        $data = [
            'title' => $this->argument('title'),
            'template_type' => $this->option('template'),
        ];

        if ($slug = $this->option('slug')) {
            $data['slug'] = $slug;
        }

        // Handle blocks (JSON string or file path)
        if ($blocks = $this->option('blocks')) {
            if (file_exists($blocks) && is_readable($blocks)) {
                $blocksContent = file_get_contents($blocks);
            } else {
                $blocksContent = $blocks;
            }

            $decoded = json_decode($blocksContent, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->error('Invalid JSON for blocks: '.json_last_error_msg());

                return self::FAILURE;
            }

            $data['blocks'] = $decoded;
        }

        // UTM parameters
        if ($utmSource = $this->option('utm-source')) {
            $data['utm_source'] = $utmSource;
        }
        if ($utmMedium = $this->option('utm-medium')) {
            $data['utm_medium'] = $utmMedium;
        }
        if ($utmCampaign = $this->option('utm-campaign')) {
            $data['utm_campaign'] = $utmCampaign;
        }

        // Publish flag
        if ($this->option('publish')) {
            $data['is_published'] = true;
            $data['published_at'] = now();
        }

        $page = LandingPage::create($data);

        $baseUrl = rtrim(config('app.url'), '/');
        $pageUrl = $baseUrl.'/l/'.$page->slug;

        $this->info("Landing page created successfully.");
        $this->line("  ID:   {$page->id}");
        $this->line("  Slug: {$page->slug}");
        $this->line("  URL:  {$pageUrl}");

        return self::SUCCESS;
    }
}
