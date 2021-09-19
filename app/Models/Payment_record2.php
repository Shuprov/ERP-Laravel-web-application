<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_record2 extends Model
{
    use HasFactory;
    protected $table='receivables';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';

    protected $fillable = [
        'name',
        'uname',
        'password',
        'gmail',
        'receivable'
        
      
                 
    ];
}
