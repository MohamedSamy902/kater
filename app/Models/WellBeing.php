<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WellBeing extends Model implements HasMedia
{
    use HasTranslations, HasFactory, InteractsWithMedia;
    public $translatable = ['title', 'content', 'convoys', 'services'];

    protected $fillable = ['title', 'content', 'convoys', 'services',  'status'];

    public function WellBeingDetalis()
    {
        return $this->hasMany(WellBeingDetalis::class, 'well_beings_id', 'id');
    }
}
