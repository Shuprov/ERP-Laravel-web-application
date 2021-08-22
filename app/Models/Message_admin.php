<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_admin extends Model
{
    use HasFactory;
    protected $table='messages';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
        
        // 'duration',
        // 'quantity',
                 
    ];
}
