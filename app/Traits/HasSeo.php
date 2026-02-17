<?php

namespace App\Traits;

trait HasSeo
{
    public function getSeoTitle(): string
    {
        return $this->meta_title ?: $this->title . ' | EquipDash';
    }

    public function getSeoDescription(): ?string
    {
        return $this->meta_description;
    }

    public function getSeoOgImage(): ?string
    {
        return $this->og_image;
    }

    public function getSeoCanonicalUrl(): ?string
    {
        return $this->canonical_url;
    }

    public function getSeoRobots(): string
    {
        return $this->robots ?? 'index, follow';
    }

    public function getSeoStructuredData(): ?array
    {
        return $this->structured_data;
    }
}
