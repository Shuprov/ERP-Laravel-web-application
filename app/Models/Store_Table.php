<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store_Table extends Model
{
    use HasFactory;
    protected $table='store_table';
    // protected $primaryKey='id';
     public $timestamps=false;
 
    
     protected $fillable = [
         'store_name',
         'description'             
     ];

}
