<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


class Artical extends Model implements HasMedia
{
    use HasTranslations, HasFactory, InteractsWithMedia;
    use InteractsWithMedia;

    public $translatable = ['title', 'content'];

    protected $fillable = ['title', 'content', 'section', 'link', 'status'];

    // public function registerMediaConversions(Media $media = null)
    // {
    //     $this->addMediaConversion('thumb')
    //         ->width(800)
    //         ->height(500);
    // }
}
