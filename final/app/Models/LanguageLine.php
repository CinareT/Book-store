<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageLine extends Model
{
    use HasFactory;

    public $translatable = ['text'];

    public $guarded = ['id'];

    protected $casts = ['text' => 'array'];

}
