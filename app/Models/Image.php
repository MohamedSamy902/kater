<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    public $translatable = ['name', 'original_name', 'media_id'];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('media')
            ->withResponsiveImages();
    }
}
