<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations, HasFactory;

    protected $fillable = ['name', 'slug'];

    public $translatable = ['name'];

    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y h:i A', strtotime($value));
    }
    
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
