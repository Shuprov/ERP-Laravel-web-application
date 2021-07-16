<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Manage_user extends Model
{
    use HasFactory;
    protected $table='manageusers';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';

    protected $fillable = [
        'fullname',
        'empCode',
        'salary',
        'city'
        
        // 'duration',
        // 'quantity',
                 
    ];
}

