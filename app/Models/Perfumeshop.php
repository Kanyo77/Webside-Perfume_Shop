<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfumeshop extends Model
{
    use HasFactory;

    protected  $table = 'name';
    protected $primaryKey = 'id';
    protected $fillable = [
           
        'id','category','name','price','image'
        
    ];
}
