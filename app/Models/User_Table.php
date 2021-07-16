<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class User_Table extends Model
{
    use HasFactory;
    protected $table='users';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';

    protected $fillable = [
        'name',
        'pass',
        'email',
        'phone'
        
        // 'duration',
        // 'quantity',
                 
    ];
}