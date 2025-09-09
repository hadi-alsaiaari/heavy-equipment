<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations, HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'site_name',
        'site_phone',
        'site_address',
        'site_email',
        'site_logo',
        'site_favicon',
        'latitude',
        'longitude',
        'site_vedio',
        'site_fax',
        'site_description',
        'site_whatsapp',
        'after_sale_content',
        'quality_policy',
        'about_us_image',
    ];

    public $translatable = [
        'site_name',
        'site_address',
        'site_description',
        'after_sale_content',
        'quality_policy',
    ];

    public function getSiteLogoAttribute()
    { 
        return 'uploads/settings/' . $this->attributes['site_logo'];
    }

    public function getSiteFaviconAttribute()
    {
        return 'uploads/settings/' . $this->attributes['site_favicon'];
    }
    
    public function getAboutUsImageAttribute()
    {
        return 'uploads/settings/' . $this->attributes['about_us_image'];
    }
}
