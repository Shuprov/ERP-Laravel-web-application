<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects_Add extends Model
{
    use HasFactory;
    protected $table='projects';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';

    protected $fillable = [
        'projectname',
        'shortdescription',
        'projectbudget',
        'projectleader',
        'totalamountspent',
        'duration'
        
      
                 
    ];
}
