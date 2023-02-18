<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Healthcare extends Model implements HasMedia
{
    use HasTranslations, HasFactory, InteractsWithMedia;
    public $translatable = ['title', 'content', 'convoys', 'services', 'short_content'];

    protected $fillable = ['title', 'content', 'convoys', 'services',  'status', 'short_content', 'order_by'];

    public function healthcareDetalis()
    {
        return $this->hasMany(HealthcareDetails::class, 'healthcares_id', 'id');
    }
}

