<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
    use HasFactory;
    protected $table = 'vet1s';
    protected $fillable = ['id', 'lastname', 'firstname', 'pitomec','pokazatel1', 'pokazatel2', 'pokazatel3' ];
    public $timestamps = false;


   

    
}
