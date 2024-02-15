<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Images extends Model
{
    use HasFactory;
    protected $guarded =[];

    // use HasFactory, HasTranslations;
    // protected $guarded = [];
    // public $translatable = ['title', 'slug', 'image'];
    // public function product(){
    //     return $this->hasMany(Images::class, 'product_id');
    // }

    // public static function boot(){
    //     parent::boot();
    //     static::deleting(function($product){
    //       $product->product()->delete();
    //     });
    // }
}
