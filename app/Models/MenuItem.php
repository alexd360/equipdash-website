<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuItem extends Model
{
    protected $fillable = [
        'menu_location',
        'parent_id',
        'label',
        'url',
        'target',
        'mega_menu_type',
        'mega_menu_data',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'mega_menu_data' => 'array',
        'is_active' => 'boolean',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'parent_id')
            ->where('is_active', true)
            ->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeForLocation($query, string $location)
    {
        return $query->where('menu_location', $location);
    }

    public function scopeTopLevel($query)
    {
        return $query->whereNull('parent_id');
    }
}
