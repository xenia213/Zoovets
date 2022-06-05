<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCsv extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'vet1_id',
    ];

    /*public function user(){

        return $this->belongsTo(User::class, 'user_id');
        
    }

    public function csv(){

        return $this->belongsTo(Csv::class, 'vet1_id');
    }*/

    public function user(){

        return $this->belongsToMany(User::class );
        
    }

    public function csv(){

        return $this->belongsToMany(Csv::class);
    }
    
    
    public function currentcsv(Csv $csv){
        return $this->csv()->where('vet1_id',$csv->id)->firstOrFail();
}

}
