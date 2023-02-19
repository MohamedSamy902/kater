<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Gallery extends Model implements HasMedia
{
    use HasTranslations, HasFactory, InteractsWithMedia;
    public $translatable = ['title', 'content'];

    protected $fillable = ['title', 'content','status', 'order_by', 'media_id'];

    public function galleryDetalis()
    {
        return $this->hasMany(GalleryDetalis::class, 'galleries_id', 'id');
    }
}
