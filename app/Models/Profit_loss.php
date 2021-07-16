<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit_loss extends Model
{
    use HasFactory;
    protected $table='profitloss';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';

    protected $fillable = [
        'projectname',
        'profit',
        'loss',
        'date'
        
      
                 
    ];
}
