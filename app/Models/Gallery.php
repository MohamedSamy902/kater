<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model implements HasMedia
{
    use HasTranslations, HasFactory, InteractsWithMedia;
    public $translatable = ['title'];

    protected $fillable = ['title', 'status'];
}
