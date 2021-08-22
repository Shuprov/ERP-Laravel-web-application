<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edit_time extends Model
{
    use HasFactory;
    protected $table='timeadd';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';

    protected $fillable = [
        'projectname',
        'previoustime',
        'newaddedtime'
        
        // 'duration',
        // 'quantity',
                 
    ];
}
