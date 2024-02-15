<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsData extends Model
{
    use HasFactory;

    protected $table = 'contacts_data'; 

    protected $fillable = ['con_name', 'con_email', 'con_phone', 'con_message', 'subject'];
}
