<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AdminProducts extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = [];
    public $translatable = [];

    public function images(){
        return $this->hasMany(Images::class, 'product_id');
    }

    public function main_image($images){
        if($images) {
            foreach($images as $image){
                if($image->is_main){
                    return $image->img;
                }
            }
        }
    }
    
        
    // public function main_image($images){
    //     if (is_array($images) || $images instanceof \Traversable) {
    //         $images = iterator_to_array($images);
    //     }
    
    //     if ($images instanceof \Illuminate\Database\Eloquent\Collection && count($images) > 0) {
    //         foreach($images as $image){
    //             if($image->is_main){
    //                 return $image->img;
    //             }
    //         }
    //     }
    
    //     // Eğer $images bir dizi değilse veya boşsa, uygun bir hata durumu ekleyebilirsiniz.
    //     // Örneğin:
    //     // throw new \Exception('No main image found.');
    // }
    
    

    

}



