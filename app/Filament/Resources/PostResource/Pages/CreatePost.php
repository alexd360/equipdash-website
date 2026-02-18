<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Concerns\ClearsResponseCache;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    use ClearsResponseCache;

    protected static string $resource = PostResource::class;
}
