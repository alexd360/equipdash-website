<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CacheWarm extends Command
{
    protected $signature = 'cache:warm';

    protected $description = 'Warm the cache by making HTTP requests to key pages';

    public function handle(): int
    {
        $baseUrl = rtrim(config('app.url'), '/');

        // Static pages
        $pages = [
            '/',
            '/pricing',
            '/book-a-demo',
            '/blog',
            '/directory',
        ];

        // Add all published blog post URLs
        $posts = Post::where('is_published', true)->pluck('slug');
        foreach ($posts as $slug) {
            $pages[] = '/blog/'.$slug;
        }

        $total = count($pages);
        $bar = $this->output->createProgressBar($total);
        $bar->start();

        $results = [];
        $startTime = microtime(true);

        foreach ($pages as $path) {
            $url = $baseUrl.$path;
            $pageStart = microtime(true);

            try {
                $response = Http::timeout(30)->get($url);
                $status = $response->status();
            } catch (\Exception $e) {
                $status = 'ERROR';
            }

            $elapsed = round((microtime(true) - $pageStart) * 1000);

            $results[] = [
                'url' => $path,
                'status' => $status,
                'time_ms' => $elapsed,
            ];

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);

        $totalTime = round((microtime(true) - $startTime) * 1000);

        $this->table(
            ['URL', 'Status', 'Time (ms)'],
            collect($results)->map(function ($r) {
                return [$r['url'], $r['status'], $r['time_ms']];
            })
        );

        $this->newLine();
        $this->info('Cache warming complete.');
        $this->line("  Pages warmed: {$total}");
        $this->line("  Total time:   {$totalTime}ms");
        $this->line("  Average time: ".round($totalTime / max($total, 1)).'ms');

        return self::SUCCESS;
    }
}
