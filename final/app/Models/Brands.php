<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Brands extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = [];
    public $translatable = ['title', 'slug', 'image'];
    
    public function brand(){
        return $this->hasMany(Brands::class, 'brand_id');
    }

    public static function boot(){
        parent::boot();
        static::deleting(function($brand){
          $brand->brand()->delete();
        });
    }
}
