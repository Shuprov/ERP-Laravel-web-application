<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand_Table extends Model
{
    use HasFactory;
    protected $table='brand_table';
   // protected $primaryKey='id';
    public $timestamps=false;

   
    protected $fillable = [
        'brand_name',
        'description'
       
                 
    ];
}
