<?php

namespace App\Filament\Concerns;

use Spatie\ResponseCache\Facades\ResponseCache;

trait ClearsResponseCache
{
    protected function afterSave(): void
    {
        ResponseCache::clear();
    }

    protected function afterDelete(): void
    {
        ResponseCache::clear();
    }
}
