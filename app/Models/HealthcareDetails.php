<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HealthcareDetails extends Model implements HasMedia
{
    use HasTranslations, HasFactory, InteractsWithMedia;
    protected $table = 'healthcare_detalis';
    public $translatable = ['title'];

    protected $fillable = ['title',  'healthcares_id'];

    public function Healthcare()
    {
        return $this->belongsTo(Healthcare::class);
    }
}
