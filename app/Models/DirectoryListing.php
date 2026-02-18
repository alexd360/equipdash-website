<?php

namespace App\Models;

use App\Traits\HasSeo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class DirectoryListing extends Model implements HasMedia
{
    use HasSlug, HasSeo, InteractsWithMedia;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'address',
        'website',
        'logo',
        'featured_image',
        'addon_type',
        'meta_title',
        'meta_description',
        'og_image',
        'structured_data',
        'is_published',
        'published_at',
        'sort_order',
    ];

    protected $casts = [
        'addon_type' => 'array',
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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')->singleFile();
        $this->addMediaCollection('featured_image')->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('webp')
            ->format('webp')
            ->quality(80);

        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(300)
            ->format('webp')
            ->quality(80);
    }

    public function taxonomies(): BelongsToMany
    {
        return $this->belongsToMany(DirectoryTaxonomy::class, 'directory_listing_taxonomy');
    }

    public function locations(): BelongsToMany
    {
        return $this->taxonomies()->where('type', 'location');
    }

    public function experiences(): BelongsToMany
    {
        return $this->taxonomies()->where('type', 'experience');
    }

    public function rentals(): BelongsToMany
    {
        return $this->taxonomies()->where('type', 'rental');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Get the primary category name derived from the listing's first
     * experience or rental taxonomy.
     */
    public function getCategoryAttribute(): ?string
    {
        // Prefer loaded taxonomies to avoid extra queries
        if ($this->relationLoaded('taxonomies')) {
            $taxonomy = $this->taxonomies
                ->whereIn('type', ['experience', 'rental'])
                ->first();

            return $taxonomy?->name;
        }

        $taxonomy = $this->experiences()->first()
            ?? $this->rentals()->first();

        return $taxonomy?->name;
    }

    /**
     * Get the logo URL for display as the venture/brand icon.
     * Maps the old venture_icon references to the logo field.
     */
    public function getVentureIconAttribute(): ?string
    {
        return $this->logo;
    }
}
