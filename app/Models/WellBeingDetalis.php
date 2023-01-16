<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WellBeingDetalis extends Model implements HasMedia
{
    use HasTranslations, HasFactory, InteractsWithMedia;
    public $translatable = ['title', 'content'];

    protected $fillable = ['title', 'content', 'well_beings_id', 'status'];

    public function WellBeing()
    {
        return $this->belongsTo(WellBeing::class);
    }
}
