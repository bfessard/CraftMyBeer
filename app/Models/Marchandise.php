<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marchandise extends Model
{
    protected $fillable = [
        'type','name', 'quantity', 'place','form','property','note','user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}

