<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Table extends Model
{
    use HasFactory;
    protected $table='product_table';
   // protected $primaryKey='id';
    public $timestamps=false;

   
    protected $fillable = [
        'product_name',
        'MRP'
        // 'email',
        // 'role'
                 
    ];
}
