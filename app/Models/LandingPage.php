<?php

namespace App\Models;

use App\Traits\HasSeo;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class LandingPage extends Model
{
    use HasSlug, HasSeo;

    protected $fillable = [
        'slug',
        'title',
        'template_type',
        'blocks',
        'custom_blade_view',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'meta_title',
        'meta_description',
        'og_image',
        'canonical_url',
        'structured_data',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'blocks' => 'array',
        'structured_data' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
