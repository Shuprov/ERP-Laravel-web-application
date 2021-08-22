<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Table extends Model
{
    use HasFactory;
    protected $table='company_table';
   // protected $primaryKey='id';
    public $timestamps=false;

   
    protected $fillable = [
        'company_name',
        'description'
       
                 
    ];
}
