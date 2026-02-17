<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class DirectoryTaxonomy extends Model
{
    use HasSlug;

    protected $fillable = [
        'slug',
        'name',
        'type',
        'sort_order',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function listings(): BelongsToMany
    {
        return $this->belongsToMany(DirectoryListing::class, 'directory_listing_taxonomy');
    }

    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }
}
